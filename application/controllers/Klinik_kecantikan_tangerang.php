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
class Klinik_kecantikan_tangerang extends CI_Controller {
	public function index(){
		$data['title'] = title();
		$data['description'] = description();
		$data['keywords'] = keywords();
		$data['no_telp'] = no_telp();
		$data['email'] = email();
		$this->template->load(template().'/template',template().'/content',$data);
	}
}
