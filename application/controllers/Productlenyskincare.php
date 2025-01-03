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
class Productlenyskincare extends CI_Controller {
	public function index(){
			$jumlah= $this->model_utama->view('album')->num_rows();
			$config['base_url'] = base_url().'albums/index/'.$this->uri->segment(3);
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 12; 	
			if ($this->uri->segment('4')==''){
				$dari = 0;
			}else{
				$dari = $this->uri->segment('4');
			}
			$proses = $this->model_app->edit('identitas', array('id_identitas' => 3))->row_array();
            $datas = array('record' => $proses);
			$data['title'] = 'Produk Leny Skin Care '. $proses['meta_keyword'];
			$data['description'] = $proses['meta_deskripsi'];
		    $data['keywords'] = $proses['meta_keyword'];
			$data['url'] = base_url($this->uri->segment('1'));
			$data['image'] = base_url('assets/img/logolenys.png');
			$data['no_telp'] = no_telp();
		$data['email'] = email();
			if (is_numeric($dari)) {
			
				$data['album'] = $this->model_utama->view_where_ordering_limit('album',array('aktif' => 'Y'),'id_album','DESC',$dari,$config['per_page']);
			}else{
				redirect('main');
			}
			$data['galkat'] = $this->model_utama->view('kategori');
			$data['no_telp'] = no_telp();
		$data['email'] = email();
			$this->pagination->initialize($config);
			$this->template->load(template().'/template',template().'/productleny',$data);
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
			$data['no_telp'] = no_telp();
		$data['email'] = email();
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
