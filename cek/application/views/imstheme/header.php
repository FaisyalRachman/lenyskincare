<?php
 
 
 echo "<h1 class='logo mr-auto'><a href='base_url()'>";
		   $iden = $this->model_utama->view('identitas')->row_array();
		   $logo = $this->model_utama->view_ordering_limit('logo','id_logo','DESC',0,1);
		   foreach ($logo->result_array() as $row) {
			 echo "<a href='".base_url()."'><img style='max-height:50px' src='".base_url()."asset/logo/$row[gambar]'/></a>";
		   }
		   echo "</a></h1>";	

	 
		   function main_menu() {
		
				$result = build_main_menu();
				
				return $result;
		
		}
	 function build_main_menu() {
	
			 $html = "";
			
					 $html .= "<nav class='nav-menu d-none d-lg-block'>
								 <ul>
								";
								$html .= "<li class='drop-down'><a href='".base_url()."aboutims'>Profil</a>";
								$html .= "<ul>";
								$html .= "<li><a href='".base_url()."aboutims/detail'>Tentang Kami</a></li>";
								$html .= "<li><a href='".base_url()."profesionalteam'>Profesional Team</a></li>";
								$html .= "<li><a href='".base_url()."services'>Service</a></li>";
							
								$html .= "</ul>";
								$html .= "</li>";
								
								$html .= "<li class='drop-down'><a href='".base_url()."produk'>Produk</a>";
								$html .= "<ul>";
								$html .= "<li><a href='".base_url()."kategori/detail/dahua'>Dahua</a></li>";
								$html .= "<li><a href='".base_url()."kategori/detail/dsppa'>Dsppa</a></li>";
								$html .= "<li><a href='".base_url()."kategori/detail/zkteco'>Zkteco</a></li>";
								$html .= "<li><a href='".base_url()."kategori/detail/seagate'>Seagate</a></li>";
								$html .= "</ul>";
								$html .= "</li>";


								$html .= "<li class='drop-down'><a href='".base_url()."projectclient'>Project</a>";
								$html .= "<ul>";
								$html .= "<li><a href='".base_url()."projectclient'>Client</a></li>";
								$html .= "<li><a href='".base_url()."testimoni'>Testimoni</a></li>";
								$html .= "</ul>";
								$html .= "</li>";

								$html .= "<li class='drop-down'><a href='karir'>Karir</a>";
								$html .= "<ul>";
								$html .= "<li><a href='".base_url()."culture'>Culture</a></li>";
								$html .= "<li><a href='".base_url()."lowongan'>Lowongan</a></li>";
								$html .= "</ul>";
								$html .= "</li>";



								$html .= "<li class='login'><a href='".base_url('userlogin')."' style='border:1px dashed #555 !important;border-radius:10px;'class='login'>Login</a></li>";
								$html .='<li><div class="searchbar">'.form_open('berita/index').'
								<input type="text" placeholder="* Ketik & Enter" name="kata">
								<i class="bx bx-search" style="font-size:22px;margin:5px;" onclick="tes()"></i>
										
											 </form>
							  </div></li>';
				
					 $html .= "<ul>";

				
			 
					 return $html;
 
	 }
	 echo main_menu();
 echo"</nav>";


	 ?>
 
	   <!-- Uncomment below if you prefer to use an image logo -->
	   <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
 
	 