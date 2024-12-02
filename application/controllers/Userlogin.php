<?php
/*
-- ---------------------------------------------------------------
-- SWARAKALIBATA Ci CMS
-- CREATED BY : ROBBY PRIHANDAYA
-- COPYRIGHT  : Copyright (c) 2018 - 2019, PHPMU.COM. (https://phpmu.com/)
-- LICENSE    : http://opensource.org/licenses/MIT  MIT License
-- CREATED ON : 2019-03-26
-- UPDATED ON : 2019-11-18
-- ---------------------------------------------------------------
*/
defined('BASEPATH') OR exit('No direct script access allowed');
class Userlogin extends CI_Controller {
    var $cek;
	public function index(){
		$query = $this->model_utama->view_where('mod_alamat',array('id_alamat' => 1));
		$data['iden'] = $this->model_utama->view_where('identitas',array('id_identitas' => 1))->row_array();
		$row = $query->row_array();
		$data['title'] = 'Hubungi Kami';
		$data['description'] = 'Silahkan Mengisi Form Dibawah ini untuk menghubungi kami';
		$data['keywords'] = 'hubungi, kontak, kritik, saran, pesan';
		$data['rows'] = $row;

		$this->load->helper('captcha');
		$vals = array(
            'img_path'	 => './captcha/',
            'img_url'	 => base_url().'captcha/',
            'font_size'     => 17,
            'img_width'	 => '150',
            'img_height' => 29,
            'border' => 0, 
            'word_length'   => 5,
            'expiration' => 7200
        );

        $cap = create_captcha($vals);
        $data['image'] = $cap['image'];
        $this->session->set_userdata('mycaptcha', $cap['word']);
		$this->template->load(template().'/template',template().'/userlogin',$data);
	}

	function kirim(){
		if (isset($_POST['submit'])){
			if ($this->input->post() && (strtolower($this->input->post('security_code')) == strtolower($this->session->userdata('mycaptcha')))) {
				$data = array('nama'=>cetak($this->input->post('a',TRUE)),
	                            'email'=>cetak($this->input->post('b',TRUE)),
	                            'subjek'=>$_SERVER['REMOTE_ADDR'],
	                            'pesan'=>cetak($this->input->post('c',TRUE)),
	                            'tanggal'=>date('Y-m-d'),
	                            'jam'=>date('H:i:s'));
				$this->model_utama->insert('hubungi',$data);
				echo $this->session->set_flashdata('message', '<div class="alert alert-success"><center>Pesan terkirim!, akan kami respon via email!</center></div>');
			}else{
				echo $this->session->set_flashdata('message', '<div class="alert alert-danger"><center>Security Code yang anda masukkan salah!</center></div>');
			}
			redirect('hubungi');
		}
	}

	public function forgotpassword()
    {

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Reset Password IMS Account';
            $this->template->load(template().'/template',template().'/forgotpass',$data);
        } else {
            $email = $this->input->post('email');
            $clean = $this->security->xss_clean($email);
            $userInfo = $this->model_app->getUserInfoByEmail($clean);

            if (!$userInfo) {
                $this->session->set_flashdata('sukses', '<div class="alert alert-danger">Attention! email not registered.</div>');
                redirect(site_url('userlogin/forgotpassword'), 'refresh');
            }

            //build token   

            $token = $this->model_app->insertToken($userInfo->id_user);
            $qstring = $this->base64url_encode($token);
            $qstring2 = $this->base64url_decode($qstring);
            $url = site_url() . 'userlogin/reset_password/token/' . $qstring;
            $url2 = site_url() . 'userlogin/reset_password/token/' . $qstring2;
            $this->$link = '<a href="' . $url . '">' . $url . '</a>';
            $this->$link2 = '<a href="' . $url2 . '">' . $url2 . '</a>';
            $this->cek = '<a href="' . $url . '">' . $url . '</a>';
            $this->send_message();
          //  $message = '';
          //  $message .= '<strong>Hai, anda menerima email ini karena ada permintaan untuk memperbaharui  
          //       password anda.</strong><br>';
          //  $message .= '<strong>Silakan klik link ini:</strong> ' . $link .'<br>'. $link2 .'<br>fgfg'.$this->uri->segment(1);

           // echo $message; //send this through mail  
          //  exit;
         // return $this;
        }
     // return $this;
    }

    public function send_message() { 
     
        $from_email = "faipagun@gmail.com"; 
        $to_email = $this->input->post('email'); 
        $emailsupport = "webistetarakan@gmail.com"; 
        $config = Array(
               'protocol' => 'smtp',
               'smtp_host' => 'ssl://smtp.googlemail.com',
               'smtp_port' => 465,
               'smtp_user' => $from_email,$emailsupport,
               'smtp_pass' => 'lyqrhtdwewjxzmrz',
               'mailtype'  => 'html', 
               'charset'   => 'iso-8859-1'
       );

       $this->load->library('email');
       $this->email->initialize($config);
           $this->email->set_newline("\r\n");   
    $listmail = array($to_email);
        $this->email->from($from_email, 'IMS ACCOUNT'); 
        $this->email->to($listmail);
        $this->email->subject('Perubahan Password IMS Account'); 
        $this->email->message('<b>Berikut link reset passrowd Anda :</b><br><br>'.$this->cek); 

        if ($this->email->send()) {
            $this->session->set_flashdata('sukses', '<div class="alert alert-success">Cek email Anda!<br>Link reset password sudah dikirim.</div>');
            redirect(site_url('userlogin/forgotpassword'), 'refresh');
          //  echo '  <div class="alert alert-info"> Link token sudah dikirim..</div>';
        } else {
            show_error($this->email->print_debugger());
        }
     }
	public function reset_password()
    {
        $token = $this->base64url_decode($this->uri->segment(4));
        $cleanToken = $this->security->xss_clean($token);

        $user_info = $this->model_app->isTokenValid($token); //either false or array();          

        if (!$user_info) {
            $this->session->set_flashdata('sukses', 'Token tidak valid atau kadaluarsa');
            redirect(site_url('userlogin/forgotpassword'), 'refresh');
        }
        $kn = substr($token, 0, 30);
        $uid = substr($token, 30);

        $data = array(
            'title' => 'Halaman Reset Password',
            'nama' => $user_info->username,
            'email' => $user_info->email,
            'cek' => substr($token, 0, 30).'<br>'.substr($token, 30),
            'token' => $this->base64url_encode($token)
        );

        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
			$this->template->load(template().'/template',template().'/resetpassword',$data);
        } else {
            $ll = $data['cek'];
            $post = $this->input->post(NULL, TRUE);
            $cleanPost = $this->security->xss_clean($post);
            $hashed = hash("sha512", md5($cleanPost['password']));
            $cleanPost['password'] = $hashed;
            $cleanPost['id_user'] = $user_info->id_user;
            unset($cleanPost['passconf']);
            if (!$this->model_app->updatePassword($cleanPost)) {
                $this->session->set_flashdata('sukses', 'Update password gagal.');
            } else {
                $this->session->set_flashdata('sukses', 'Your Password has Changed. Please <a href="'.base_url().'userlogin">Login</a>.');
            }
            redirect(site_url('userlogin/forgotpassword'), 'refresh');
        }
    }

    public function base64url_encode($data)
    {
        return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
    }

    public function base64url_decode($data)
    {
        return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));
    }



}
