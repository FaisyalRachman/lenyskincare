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
class Product extends CI_Controller {
	public function index(){
			$jumlah= $this->model_utama->view('album')->num_rows();
			$config['base_url'] = base_url().'productbracatour/index/'.$this->uri->segment(3);
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 12; 	
			if ($this->uri->segment('4')==''){
				$dari = 0;
			}else{
				$dari = $this->uri->segment('4');
			}
			$proses = $this->model_app->edit('identitas', array('id_identitas' => 1))->row_array();
            $datas = array('record' => $proses);
			$data['title'] = "Produk Klinik Kecantikan Di Tangerang - LenySkinCare";
			$data['description'] = $proses['meta_deskripsi'];
		    $data['keywords'] = 'produk '.$proses['meta_keyword'];
			$data['url'] = base_url($this->uri->segment('1'));
			$data['image'] = base_url('assets/img/logolenys.png');
			$data['katbracatour'] = $this->model_utama->view_ordering_limit2('kategori','id_kategori', 'DESC', 0, 200); 
			$this->pagination->initialize($config);
			$this->template->load(template().'/template',template().'/productbracatour',$data);
	}

	public function detail(){
		$query = $this->model_utama->view_where('kategori',array('id_kategori' => $this->uri->segment(3)))->row();
		$data['namaproduk']	= $query->nama_kategori;
		//$row = $query->row_array();
			//$jumlah= $this->model_utama->view_where('berita',array('id_subkategori' => $row['id_kategori']))->num_rows();
			$config['base_url'] = base_url().'product/detail/'.$this->uri->segment(3);
			$config['total_rows'] = 10;
			$config['per_page'] = 12; 	
		
			$data['title'] = "Produk Kategori $row[nama_kategori]";
			$data['description'] = description();
			$data['keywords'] = keywords();
			$data['rows'] = $row;
			//$data['produk'] = $this->model_utama->view_joinn('subkategori','produk','kategori','id_subkategori','id_kategori','produk.id_subkategori','DESC',$dari,$config['per_page']);
		//if (is_numeric($dari)) {
				$data['productbracatour'] = $this->model_utama->view_join_one('berita','kategori','id_kategori',array('berita.id_kategori' => $this->uri->segment(3)),'kategori.id_kategori','DESC',0,20);
				$data['count'] = $this->model_utama->view_join_one('berita','kategori','id_kategori',array('berita.id_kategori' => $this->uri->segment(3)),'kategori.id_kategori','DESC',0,20)->num_rows();
	
				//	}else{
			//	redirect('main');
			//}
			$this->pagination->initialize($config);
			$this->template->load(template().'/template',template().'/productbracadetail',$data);
		}
		public function promolenyskincare(){
			$jumlah= $this->model_utama->view('album')->num_rows();
			$config['base_url'] = base_url().'karir/index/'.$this->uri->segment(3);
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 12; 	
			if ($this->uri->segment('4')==''){
				$dari = 0;
			}else{
				$dari = $this->uri->segment('4');
			}
			$proses = $this->model_app->edit('identitas', array('id_identitas' => 1))->row_array();
            $datas = array('record' => $proses);
			$data['title'] = "Promo Klinik Kecantikan Di Tangerang - Leny Skin Care";
			$data['description'] = $proses['meta_deskripsi'];
		    $data['keywords'] = 'Promo '. $proses['meta_keyword'];
			$data['url'] = base_url($this->uri->segment('1'));
			$data['image'] = base_url('assets/img/logolenys.png');
			$this->pagination->initialize($config);
			$this->template->load(template().'/template',template().'/promo',$data);
	}
	}

