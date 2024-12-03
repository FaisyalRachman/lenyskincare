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
class Hubungi_klinik_kecantikan_tangerang extends CI_Controller {
	public function index(){
		$query = $this->model_utama->view_where('mod_alamat',array('id_alamat' => 1));
		$data['iden'] = $this->model_utama->view_where('identitas',array('id_identitas' => 1))->row_array();
		$row = $query->row_array();
		$proses = $this->model_app->edit('identitas', array('id_identitas' => 1))->row_array();
		$datas = array('record' => $proses);
		$data['title'] = "Hubungi Klinik Kecantikan Di Tangerang - Leny Skin Care";
		$data['description'] = $proses['meta_deskripsi'];
		$data['keywords'] = 'hubungi '. $proses['meta_keyword'];
		$data['url'] = base_url($this->uri->segment('1'));
		$data['image'] = base_url('assets/img/logolenys.png');
		$data['rows'] = $row;
		$data['no_telp'] = no_telp();
		$data['email'] = email();
	//	$data['nomorWa'] = $this->Home_admin_model->getValueStore('nomorWa');

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
        $data['imagecap'] = $cap['image'];
        $this->session->set_userdata('mycaptcha', $cap['word']);
		$this->template->load(template().'/template',template().'/hubungi',$data);
	}

	function kirim(){
		if (isset($_POST['submit'])){
			if ($this->input->post() && (strtolower($this->input->post('security_code')) == strtolower($this->session->userdata('mycaptcha')))) {
				$data = array('nama'=>cetak($this->input->post('a',TRUE)),
	                            'email'=>cetak($this->input->post('b',TRUE)),
								'subjek'=>cetak($this->input->post('c',TRUE)),
								'telp'=>cetak($this->input->post('d',TRUE)),
	                           // 'subjek'=>$_SERVER['REMOTE_ADDR'],
	                            'pesan'=>cetak($this->input->post('message',TRUE)),
	                            'tanggal'=>date('Y-m-d'),
	                            'jam'=>date('H:i:s'));
				$this->model_utama->insert('hubungi',$data);
				$this->session->set_flashdata('message', '<div class="alert alert-success"><center>Pesan telah terkirim! Kami akan membalasnya via email!</center></div>');
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"><center>Security Code yang anda masukkan salah!</center></div>');
			}
			redirect('hubungi_klinik_kecantikan_tangerang');
		}
	}
}
