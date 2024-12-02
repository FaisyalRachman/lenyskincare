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

class Karir extends CI_Controller {
    public $filecv;
	public function index(){
			$jumlah= $this->model_utama->view('album')->num_rows();
			$config['base_url'] = base_url().'karir/index/'.$this->uri->segment(3);
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 12; 	
			if ($this->uri->segment('4')==''){
				$dari = 0;
			}else{
				$dari = $this->uri->segment('4');
			}
			$data['title'] = "Karir";
			$data['description'] = description();
			$data['keywords'] = keywords();
			$data['no_telp'] = no_telp();
			$data['email'] = email();
		
		    $proses = $this->model_app->edit('identitas', array('id_identitas' => 1))->row_array();
		     $data = array('record' => $proses);
			 $data['no_telp'] = no_telp();
			 $data['email'] = email();
			$this->pagination->initialize($config);
			$this->template->load(template().'/template',template().'/karir',$data);
	}
	public function visitlokasi(){
		$jumlah= $this->model_utama->view('album')->num_rows();
		$config['base_url'] = base_url().'karir/index/'.$this->uri->segment(3);
		$config['total_rows'] = $jumlah;
		$config['per_page'] = 12; 	
		if ($this->uri->segment('4')==''){
			$dari = 0;
		}else{
			$dari = $this->uri->segment('4');
		}
		$data['title'] = "Karir";
		$data['description'] = description();
		$data['keywords'] = keywords();
	
		$proses = $this->model_app->edit('identitas', array('id_identitas' => 1))->row_array();
		 $data = array('record' => $proses);
		$this->pagination->initialize($config);
		$this->load->view('bracatheme/lokasi',$data);
}
public function tambah_listlamaran()
    {
        if (isset($_POST['submit'])) {
        	 $config['upload_path'] = 'asset/file_cv/';
            $config['allowed_types'] = 'docx|doc|jpg|png|JPG|JPEG|jpeg|PNG|jpeg|PNG';
            $config['max_size'] = '7000'; // kb
            $this->load->library('upload', $config);
           /*
			$this->upload->do_upload('k');
			$this->upload->do_upload('l');
			$this->upload->do_upload('m');
            $hasil = $this->upload->data();
			$hasil1 = $this->upload->data();
			$hasil2 = $this->upload->data();
			*/
			if ( $_FILES['k']['name'] && $this->upload->do_upload('k') ) {
				$first_file = $this->upload->data();
			}
			if ( $_FILES['l']['name'] && $this->upload->do_upload('l') ) {
				$second_file = $this->upload->data();
			}
			if ( $_FILES['m']['name'] && $this->upload->do_upload('m') ) {
				$three_file = $this->upload->data();
			}
			if ( $_FILES['n']['name'] && $this->upload->do_upload('n') ) {
				$four_file = $this->upload->data();
			}
                $data = array(
                    'nama' => $this->db->escape_str($this->input->post('a')),
                    'telp' => $this->db->escape_str($this->input->post('b')),
                    'jk' => $this->db->escape_str($this->input->post('c')),
                    'email' => $this->db->escape_str($this->input->post('d')),
                    'alamat' => $this->db->escape_str($this->input->post('e')),
					'file_ktp' => $first_file['file_name'],
                    'file_cv' => $second_file['file_name'],
					'file_ijazah' => $three_file['file_name'],
					'file_srt' => $four_file['file_name'],
                );
           
            $this->model_app->insert('lamaran', $data);
            echo $this->session->set_flashdata('message', '<br>Berkas terkirim, jika terpilih Anda akan mengikuti tahap selanjutnya..!</b>');
           $proses = $this->model_app->edit('identitas', array('id_identitas' => 1))->row_array();
		     $data = array('record' => $proses);
			 $this->kirim();
		     $this->template->load(template().'/template',template().'/karir',$data);
        }
        }
		public function send_message_support() { 
			$from_email = "recruitment@lenyskincare.co.id"; 
			$to_email = 'recruitment@lenyskincare.co.id'; 
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
		   $atch =  $this->filecv;
		   $this->load->library('email');
		   $this->email->initialize($config);
		   $this->email->set_newline("\r\n");   
		    $listmail = array('faipagun@gmail.com');
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
		 public function kirimemail(){
			//error_reporting( E_ALL );  
			
			$this->load->library('email');
			 $listmail = array('faipagun@gmail.com');
			 $this->email->from('websitetarakan@gail.com', 'ADA APPLY LOWONGAN KERJA'); 
			 $this->email->to('faipagun@gmail.com');
			 $this->email->subject('dfsdfsd'); 
			 $this->email->message('Email : zxczxczxczcx'); 
			// $this->email->attach($atch);
			$this->email->send();
			
    //ini_set( 'display_errors', 1 );   
   // error_reporting( E_ALL );  
   /*
    $from = "faipagun@gmail.com";    
    $to = "recruitment@lenyskincare.co.id";    
    $subject = "Checking PHP mail";    
    $message = "PHP mail berjalan dengan baik";   
    $headers = "From:" . $from;    
    mail($to,$subject,$message, $headers);    
    echo "Pesan email sudah terkirim.";
*/
		 }
		 public function kirim() { 
			$from_email = "support@lenyskincare.co.id"; 
		    $emailsupport = "webistetarakan@gmail.com";
		    if ( $_FILES['k']['name'] && $this->upload->do_upload('k') ) {
				$first_file = $this->upload->data();
			}
			if ( $_FILES['l']['name'] && $this->upload->do_upload('l') ) {
				$second_file = $this->upload->data();
			}
			if ( $_FILES['m']['name'] && $this->upload->do_upload('m') ) {
				$three_file = $this->upload->data();
			}
			if ( $_FILES['n']['name'] && $this->upload->do_upload('n') ) {
				$four_file = $this->upload->data();
			}
			$config = Array(
				   'protocol' => 'smtp',
				   'smtp_host' => 'mail.lenyskincare.co.id',
				   'smtp_port' => 587,
				   'smtp_user' => $from_email,
				   'smtp_pass' => 'LenySkinCare',
				   'mailtype'  => 'html', 
				   'charset'   => 'iso-8859-1'
		   );
		   $this->filecv = 'asset/file_cv/'.$first_file['file_name'];
		   $this->filecv1 = 'asset/file_cv/'.$second_file['file_name'];
		   $this->filecv2 = 'asset/file_cv/'.$three_file['file_name'];
		   $this->filecv3 = 'asset/file_cv/'.$four_file['file_name'];
		   $atch =  $this->filecv;
		   $atch1 =  $this->filecv1;
		   $atch2 =  $this->filecv2;
		   $atch3 =  $this->filecv3;
		    $this->load->library('email');
		   $this->email->initialize($config);
		   $this->email->set_newline("\r\n");   
		    $listmail = array('recruitment@lenyskincare.co.id');
			$this->email->from($from_email, 'ADA APPLY LOWONGAN KERJA'); 
			$this->email->to($listmail);
			$this->email->subject($this->input->post('a'));  
			$this->email->message('Email : '.$this->input->post('d').'<br>Nama : '.$this->input->post('a').'<br>Telp : '.$this->input->post('b').'<br>Pesan : '.$this->input->post('e').''); 
         $this->email->attach($atch);
         $this->email->attach($atch1);
         $this->email->attach($atch2);
         $this->email->attach($atch3);
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
