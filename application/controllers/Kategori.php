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
class Kategori extends CI_Controller {
	public function detail(){
		$query = $this->model_utama->view_where('kategori',array('kategori_seo' => $this->uri->segment(3),'sidebar' => '2'));
		if ($query->num_rows()<=0){
			redirect('main');
		}else{
			$row = $query->row_array();
			$jumlah= $this->model_utama->view_where('produk',array('id_subkategori' => $row['id_kategori']))->num_rows();
			$config['base_url'] = base_url().'kategori/detail/'.$this->uri->segment(3);
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 12; 	
			if ($this->uri->segment('4')==''){
				$dari = 0;
			}else{
				$dari = $this->uri->segment('4');
			}
			$data['title'] = "Produk Kategori $row[nama_kategori]";
			$data['description'] = description();
			$data['keywords'] = keywords();
			$data['rows'] = $row;
			$data['produk'] = $this->model_utama->view_joinn('subkategori','produk','kategori','id_subkategori','id_kategori','produk.id_subkategori','DESC',$dari,$config['per_page']);
			if (is_numeric($dari)) {
				$data['beritakategori'] = $this->model_utama->view_join_one('subkategori','kategori','id_kategori',array('kategori.kategori_seo' => $this->uri->segment('3')),'subkategori.id_kategori','DESC',$dari,$config['per_page']);
			}else{
				redirect('main');
			}
			$this->pagination->initialize($config);
			$this->template->load(template().'/template',template().'/detailkategori',$data);
		}
	}
	public function detailsub(){
		$query = $this->model_utama->view_join_one('subkategori','kategori', 'id_kategori',array('id_subkategori' => $this->uri->segment(3)), 'nama_kategori', 'ASC', 0, 20);
		//$query = $this->model_utama->view_where('kategori',array('kategori_seo' => $this->uri->segment(3),'sidebar' => '2'));
		if ($query->num_rows()<=0){
			redirect('main');
		}else{
			$row = $query->row_array();
			$jumlah= $this->model_utama->view_where('produk',array('id_subkategori' => $row['id_subkategori']))->num_rows();
			$hot = $this->model_utama->view_join_two('subkategori', 'users', 'kategori', 'username', 'id_kategori', array('kategori.kategori_seo' => $this->uri->segment('3')), 'nama_subkategori', 'ASC', 0, 220);
			$config['base_url'] = base_url().'kategori/detailsub/'.$this->uri->segment(3);
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 8; 	
			
			$data['title'] = "Produk Sub Kategori $row[nama_kategori]";
			$data['description'] = description();
			$data['keywords'] = keywords();
			$data['rows'] = $row;
			$data['id'] = $this->uri->segment('3');
			$data['id3'] = $config['total_rows'];
			$data['id2'] = $row['id_kategori'];
			$data['no_telp'] = no_telp();
		    $data['email'] = email();
			$data['produk'] = $this->model_utama->view_join('subkategori','kategori','id_kategori','nama_kategori','DESC',$dari,100);
		
			$data['beritakategori'] = $this->model_utama->view_join_one('subkategori', 'kategori', 'id_kategori', 'nama_kategori', array('subkategori.subkategori_seo' => $this->uri->segment('3'),'subkategori.sidebar' => '2'), 'ASC', $dari, $config['per_page']);
			
			$this->pagination->initialize($config);
			$this->template->load(template().'/template',template().'/detailkategorisubkategori',$data);
		}
	}
	public function detailsubproduct(){
		$query = $this->model_utama->view_join_onesb('subkategoriproduct','kategoriproduct', 'id_kategori',array('id_subkategori' => $this->uri->segment(3)), 'nama_kategori', 'ASC', 0, 20);
		//$query = $this->model_utama->view_where('kategori',array('kategori_seo' => $this->uri->segment(3),'sidebar' => '2'));
		if ($query->num_rows()<=0){
			redirect('klinik_kecantikan_tangerang');
		}else{
			$row = $query->row_array();
			$jumlah= $this->model_utama->view_where('produk',array('id_subkategori' => $row['id_subkategori']))->num_rows();
			$hot = $this->model_utama->view_join_two('subkategoriproduct', 'users', 'kategori', 'username', 'id_kategori', array('kategori.kategori_seo' => $this->uri->segment('3')), 'nama_subkategori', 'ASC', 0, 220);
			$config['base_url'] = base_url().'kategori/detailsubproduct/'.$this->uri->segment(3);
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 8; 	
			
			$proses = $this->model_app->edit('identitas', array('id_identitas' => 1))->row_array();
            $datas = array('record' => $proses);
			$data['title'] = $row['metatitle'];
			$data['description'] = $row['metadesc'];
		    $data['keywords'] = $proses['meta_keyword'];
			$data['url'] = base_url($this->uri->segment('2'));
			$data['image'] = base_url('assets/img/logolenys.png');
			$data['rows'] = $row;
			$data['id'] = $this->uri->segment('3');
			$data['id3'] = $config['total_rows'];
			$data['id2'] = $row['id_kategori'];
			$data['produk'] = $this->model_utama->view_join('subkategoriproduct','kategoriproduct','id_kategori','nama_kategori','DESC',$dari,100);
		
			$data['beritakategori'] = $this->model_utama->view_join_one('subkategoriproduct', 'kategoriproduct', 'id_kategori', 'nama_kategori', array('subkategoriproduct.subkategori_seo' => $this->uri->segment('3'),'subkategori.sidebar' => '2'), 'ASC', $dari, $config['per_page']);
			
			$this->pagination->initialize($config);
			$this->template->load(template().'/template',template().'/detailkategoriproduct',$data);
		}
	}
		public function detailinfo(){
		$query = $this->model_utama->view_where('kategori',array('kategori_seo' => $this->uri->segment(3)));
		if ($query->num_rows()<=0){
			redirect('main');
		}else{
			$row = $query->row_array();
			$jumlah= $this->model_utama->view_where('berita',array('id_kategori' => $row['id_kategori']))->num_rows();
			$config['base_url'] = base_url().'kategori/detailinfo/'.$this->uri->segment(3);
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 6; 	
			if ($this->uri->segment('4')==''){
				$dari = 0;
			}else{
				$dari = $this->uri->segment('4');
			}
			$data['title'] = "Berita Kategori $row[nama_kategori]";
			$data['description'] = description();
			$data['keywords'] = keywords();
			$data['rows'] = $row;
			if (is_numeric($dari)) {
				$data['beritakategori'] = $this->model_utama->view_join_two('berita','users','kategori','username','id_kategori',array('berita.status' => 'Y','berita.id_kategori' => $row['id_kategori']),'id_berita','DESC',$dari,$config['per_page']);
				$data['beritakategori2'] = $this->model_utama->view_join_two('berita','users','kategori','username','id_kategori',array('berita.status' => 'Y','berita.id_kategori' => $row['id_kategori']),'id_berita','DESC',$dari,1);
			}else{
				redirect('main');
			}
			$this->pagination->initialize($config);
			$this->template->load(template().'/template',template().'/detailinfo',$data);
		}
	}
}
