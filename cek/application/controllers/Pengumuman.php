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
class Pengumuman extends CI_Controller {
	public function index(){
			$jumlah= $this->model_utama->view('sekilasinfo')->num_rows();
			$config['base_url'] = base_url().'pengumuman/index/'.$this->uri->segment(3);
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 1; 	
			if ($this->uri->segment('4')==''){
				$dari = 0;
			}else{
				$dari = $this->uri->segment('4');
			}
			$data['title'] = "Pengumuman";
			$data['description'] = description();
			$data['keywords'] = keywords();
			if (is_numeric($dari)) {
				$data['beritakategori'] = $this->model_utama->view_ordering_limit('sekilasinfo','judul','tgl_posting',NULL,NULL,'id_sekilas','DESC',$dari,$config['per_page']);
				
			}else{
				redirect('main');
			}
			/*
			if (is_numeric($dari)) {
				$data['pengumuman'] = $this->model_utama->view_join('sekilasinfo','users','judul','id_sekilas','DESC',$dari,$config['per_page']);
			}else{
				redirect('main');
			}*/
			$this->pagination->initialize($config);
			$this->template->load(template().'/template',template().'/pengumuman',$data);
	}

	public function detail(){
		$query = $this->model_utama->view_single('sekilasinfo',array('judul_seo' => $this->uri->segment(3)),'id_sekilas','DESC',0,1);
		if ($query->num_rows()<=0){
			redirect('main');
		}else{
			$row = $query->row_array();
			$data['title'] = cetak($row['judul']);
			$data['description'] = cetak($row['info']);
			$data['keywords'] = cetak(str_replace(' ',', ',$row['judul']));
			$data['rows'] = $row;

			$dataa = array('dibaca'=>$row['dibaca']+1);
			$where = array('id_agenda' => $row['id_sekilas']);
			$this->model_utama->update('agenda', $dataa, $where);
			$this->template->load(template().'/template',template().'/detailpengumuman',$data);
		}
	}
}
