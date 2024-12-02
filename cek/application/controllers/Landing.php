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

class Landing extends CI_Controller {
	public function index(){
		
			$data['title'] = "Karir";
			$data['description'] = description();
			$data['keywords'] = keywords();
			$ip    = $this->input->ip_address(); // Mendapatkan IP user
			$date  = date("Y-m-d"); // Mendapatkan tanggal sekarang
			$waktu = time(); //
			$timeinsert = date("Y-m-d H:i:s");
			  
			// Cek berdasarkan IP, apakah user sudah pernah mengakses hari ini
			$s = $this->db->query("SELECT * FROM statistik WHERE ip='".$ip."' AND tanggal='".$date."'")->num_rows();
			$ss = isset($s)?($s):0;
			  
			 
			// Kalau belum ada, simpan data user tersebut ke database
			if($ss == 0){
			$this->db->query("INSERT INTO statistik(ip, tanggal, hits, online, time) VALUES('".$ip."','".$date."','1','".$waktu."','".$timeinsert."')");
			}
			 
			// Jika sudah ada, update
			else{
			$this->db->query("UPDATE statistik SET hits=hits+1, online='".$waktu."' WHERE ip='".$ip."' AND tanggal='".$date."'");
			}
			 
			  
			$pengunjunghariini  = $this->db->query("SELECT * FROM statistik WHERE tanggal='".$date."' GROUP BY ip")->num_rows(); // Hitung jumlah pengunjung
			 
			$dbpengunjung = $this->db->query("SELECT COUNT(hits) as hits FROM statistik")->row(); 
			 
			$totalpengunjung = isset($dbpengunjung->hits)?($dbpengunjung->hits):0; // hitung total pengunjung
			 
			$bataswaktu = time() - 300;
			 
			$pengunjungonline  = $this->db->query("SELECT * FROM statistik WHERE online > '".$bataswaktu."'")->num_rows(); // hitung pengunjung online
			  
			 
			$data['pengunjunghariini']=$pengunjunghariini;
			$data['totalpengunjung']=$totalpengunjung;
			$data['pengunjungonline']=$pengunjungonline;
			//$this->pagination->initialize($config);
			$this->template->load(template().'/template',template().'/landing',$data);
			redirect('https://api.whatsapp.com/send?phone=6282155573572&text=$this->uri->segment(3)');
	}
	private function reroute (){
        /**
         * if the route starts with this classes name (ie. "page")
         * then reroute without the class prefix ...
         **/
        if($this->page == $this->router->class){
    		if($this->uri->total_segments() > 1){
    			$this->load->helper('url');
    			/** 
    			 * parse the uri string and remove the "page/" portion
    			**/
    			$uri = substr($this->uri->uri_string, strlen($this->page)+1);
    			redirect($uri);
    		}else{
    			$this->noroute($this->page);
    		}
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
