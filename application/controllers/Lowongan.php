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

class Lowongan extends CI_Controller {
	public $filecv;
	public function index(){
			$jumlah= $this->model_utama->view('album')->num_rows();
			$config['base_url'] = base_url().'lowongan/index/'.$this->uri->segment(3);
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 12; 	
			if ($this->uri->segment('4')==''){
				$dari = 0;
			}else{
				$dari = $this->uri->segment('4');
			}
			$data['title'] = "Lowongan";
			$data['description'] = description();
			$data['keywords'] = keywords();
		
		    $proses = $this->model_app->edit('identitas', array('id_identitas' => 1))->row_array();
		     $data = array('record' => $proses);
			$this->pagination->initialize($config);
			$this->template->load(template().'/template',template().'/lowongan',$data);
	}
public function tambah_listlamaran()
    {
        if (isset($_POST['submit'])) {
        	 $config['upload_path'] = 'asset/file_cv/';
            $config['allowed_types'] = 'pdf|docx|doc|jpg|png|JPG|JPEG|jpeg|PNG|jpeg|PNG';
            $config['max_size'] = '7000'; // kb
            $this->load->library('upload', $config);
            $this->upload->do_upload('k');
            $hasil = $this->upload->data();
            $this->filecv = 'asset/file_cv/'.$hasil['file_name'];
                $data = array(
                    'nama' => $this->db->escape_str($this->input->post('a')),
                    'telp' => $this->db->escape_str($this->input->post('b')),
                    'jk' => $this->db->escape_str($this->input->post('c')),
                    'email' => $this->db->escape_str($this->input->post('d')),
                    'alamat' => $this->db->escape_str($this->input->post('e')),
                    'file_cv' => $hasil['file_name']
                );
           
            $this->model_app->insert('lamaran', $data);
			
            echo $this->session->set_flashdata('message', '<b>Berkas terkirim, jika terpilih Anda akan mengikuti tahap selanjutnya..!</b>');
           $proses = $this->model_app->edit('identitas', array('id_identitas' => 1))->row_array();
		     $data = array('record' => $proses);
			// $this->send_message();
			 $this->send_message_support();
			 redirect('lowongan');
        }
        }


		public function send_message_support() { 
			$from_email = "support@integramitrasolusi.id"; 
			$to_email = $this->input->post('d'); 
			$emailsupport = "webistetarakan@gmail.com"; 
			$config = Array(
				   'protocol' => 'smtp',
				   'smtp_host' => 'ssl://mail.integramitrasolusi.id',
				   'smtp_port' => 465,
				   'smtp_user' => $from_email,
				   'smtp_pass' => 'ims@2021',
				   'mailtype'  => 'html', 
				   'charset'   => 'iso-8859-1'
		   );
		   $atch =  $this->filecv;
		   $this->load->library('email');
		   $this->email->initialize($config);
			   $this->email->set_newline("\r\n");   
		    $listmail = array('hrd@integramitrasolusi.id');
			$this->email->from($from_email, 'ADA APPLY LOWONGAN KERJA'); 
			$this->email->to($listmail);
			$this->email->subject($this->input->post('a')); 
			$this->email->message('Email : '.$this->input->post('d').'<br>Nama : '.$this->input->post('a').'<br>Telp : '.$this->input->post('b').'<br>Jenis kelamin : '.$this->input->post('c').'<br>Alamat : '.$this->input->post('e').''); 
            $this->email->attach($atch);
			if ($this->email->send()) {
				$this->session->set_flashdata('sukses', '<div class="alert alert-success">Cek email Anda!<br>Link reset password sudah dikirim.</div>');
				redirect(site_url('lowongan'), 'refresh');
			  //  echo '  <div class="alert alert-info"> Link token sudah dikirim..</div>';
			} else {
				show_error($this->email->print_debugger());
			}
		 }
		 public function send_message() { 
			$from_email = "hrd@integramitrasolusi.id"; 
		   $to_email = $this->input->post('d'); 
		   $emailsupport = "webistetarakan@gmail.com"; 
		   $config = Array(
				  'protocol' => 'smtp',
				  'smtp_host' => 'ssl://mail.integramitrasolusi.id',
				  'smtp_port' => 465,
				  'smtp_user' => $from_email,
				  'smtp_pass' => 'ims@2021',
				  'mailtype'  => 'html', 
				  'charset'   => 'iso-8859-1'
		  );
   
		  $this->load->library('email');
		  $this->email->initialize($config);
			  $this->email->set_newline("\r\n");   
	   $listmail = array($to_email);
		   $this->email->from($from_email, 'APPLY LOWONGAN KERJA'); 
		   $this->email->to($listmail);
		   $this->email->subject('Anda Tertarik Bergabung dengan IMS'); 
		   $this->email->message('<b>Terima kasih sudah, mengirimkan CV Anda. Jika terpilih kami akan menghubungi Anda.<br>Salam sehat..!</b>'); 
   
		   if ($this->email->send()) {
			   $this->session->set_flashdata('sukses', '<div class="alert alert-success">Cek email Anda!<br>Link reset password sudah dikirim.</div>');
			   redirect(site_url('lowongan'), 'refresh');
			 //  echo '  <div class="alert alert-info"> Link token sudah dikirim..</div>';
		   } else {
			   show_error($this->email->print_debugger());
		   }
		}
		public function kirim() { 
			$from_email = "recruitment@lenyskincare.co.id"; 
		    $emailsupport = "webistetarakan@gmail.com"; 
			$config = Array(
				   'protocol' => 'smtp',
				   'smtp_host' => 'mail.lenyskincare.co.id',
				   'smtp_port' => 587,
				   'smtp_user' => $from_email,
				   'smtp_pass' => 'LenySkinCare',
				   'mailtype'  => 'html', 
				   'charset'   => 'iso-8859-1'
		   );
		   $this->filecv = 'asset/file_cv/'.$hasil['file_name'];
		   $atch =  $this->filecv;
		    $this->load->library('email');
		   $this->email->initialize($config);
		   $this->email->set_newline("\r\n");   
		    $listmail = array('recruitment@lenyskincare.co.id');
			$this->email->from($from_email, 'ADA APPLY LOWONGAN KERJA'); 
			$this->email->to($listmail);
			$this->email->subject($this->input->post('a'));  
			$this->email->message('Email : '.$this->input->post('d').'<br>Nama : '.$this->input->post('a').'<br>Telp : '.$this->input->post('b').'<br>Jenis kelamin : '.$this->input->post('c').'<br>Alamat : '.$this->input->post('e').''); 
         $this->email->attach($atch);
			if ($this->email->send()) {
				$this->session->set_flashdata('sukses', '<div class="alert alert-success">Cek email Anda!<br>Link reset password sudah dikirim.</div>');
				redirect(site_url('karir'), 'refresh');
			  //  echo '  <div class="alert alert-info"> Link token sudah dikirim..</div>';
			} else {
				show_error($this->email->print_debugger());
			}
		 }
	public function detail(){
		$query = $this->model_utama->view_join_one('album','users','username',array('album_seo' => $this->uri->segment(3)),'id_album','DESC',0,1);
		if ($query->num_rows()<=0){
			redirect('main');
		}else{
			$row = $query->row_array();
			$jumlah= $this->model_utama->view_where('gallery',array('id_album' => $row['id_album']))->num_rows();
			$config['base_url'] = base_url().'albums/detail/'.$this->uri->segment(3);
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 100;
			if ($this->uri->segment('4')==''){
				$dari = 0;
			}else{
				$dari = $this->uri->segment('4');
			}
			$data['title'] = "Albums $row[jdl_album]";
			$data['description'] = description();
			$data['keywords'] = keywords();
			$data['rows'] = $row;
			if (is_numeric($dari)){
				$data['detailalbum'] = $this->model_utama->view_join_one('gallery','users','username',array('gallery.id_album' => $row['id_album']),'id_gallery','DESC',$dari,$config['per_page']);
			}else{
				redirect('main');
			}
			$this->pagination->initialize($config);

			$dataa = array('hits_album'=>$row['hits_album']+1);
			$where = array('id_album' => $row['id_album']);
			$this->model_utama->update('album', $dataa, $where);
			$this->template->load(template().'/template',template().'/detailalbum',$data);
		}
	}
}
