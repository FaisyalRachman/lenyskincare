<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title ?></title>
  <meta property="og:description" content="<?= $description ?>">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets/img/lenyskincare_favicon.png') ?>" rel="icon">
  <link href="<?= base_url('assets/img/lenyskincare_icon.png') ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/css/fontawesome/css/fontawesome.min.css')?>" />
  <link rel="stylesheet" href="<?= base_url('assets/css/fontawesome/css/all.css') ?>" />
  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/remixicon/remixicon.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: KnightOne - v4.7.0
  * Engine Framework : Codeigniter
  * Development By : www.sookawebtarakan.com (faisyal rachman 082155573572) Jl. Yos Sudarso No.43 RT.07 Selumit , Tarakan Tengah - Kota Tarakan
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <script src="<?= base_url() ?>asset/js/jquery-1.10.2.min.js"></script>
    <script src="<?= base_url() ?>asset/js/jquery-ui.js"></script>
    <script src="<?= base_url() ?>asset/js/bootstrap.min.js"></script>
<style>
  @font-face /*perintah untuk memanggil font eksternal*/
  {
    font-family: 'Hilde Sharpie'; /*memberikan nama bebas untuk font*/
    src: url('<?= base_url() ?>assets/css/fonts/Hilde.ttf');/*memanggil file font eksternalnya di folder nexa*/
    font-family: 'Another'; /*memberikan nama bebas untuk font*/
    src: url('<?= base_url() ?>assets/css/fonts/A0048832.ttf');/*memanggil file font eksternalnya di folder nexa*/
    font-family: 'Roboto'; /*memberikan nama bebas untuk font*/
    src: url('<?= base_url() ?>assets/css/fonts/Roboto-Regular.ttf');/*memanggil file font eksternalnya di folder nexa*/
   
    
  }
 
</style>
</head>

<body>
<?php
  $sosmed = $this->model_utama->view('identitas')->row_array();
  $pecahd = explode(",", $sosmed['facebook']);
  ?>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
  <?php include "header.php"; ?>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  

  <main id="main">
  <?php echo $contents; ?>
  

  
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" style="background:#E6EDF7;" class="hubfooter">
  <?php
      include "footer.php";
      ?>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone='<?php echo no_telp(); ?>'&text=Hi%21%20saya tertarik untik treatment di Leny Skincare. Mohon informasi lebih lanjutnya ya. Terima Kasih :)." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
  <!-- Vendor JS Files -->
  <script async src="https://static.addtoany.com/menu/page.js"></script>
  <script src="<?= base_url('assets/vendor/purecounter/purecounter.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/glightbox/js/glightbox.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/swiper/swiper-bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/php-email-form/validate.js') ?>"></script>
  <script src="<?= base_url('assets/js/jquery-3.3.1.min.js') ?>"></script>
  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/js/main.js') ?>"></script>
  <script type="text/javascript">
    $(function() {
  // bind change event to select
  $('select').on('change', function() {
    var open = $(this).data("isopen");
    var tx = $("#replyNumber option:selected").text();
  var t = tx.replace("Admin : Leny Skincare", "Leny");

    window.open("http://api.whatsapp.com/send?phone="+($(this).val())+'&text=Hi%21%20'+t+', saya tertarik untik treatment di Leny Skincare. Mohon informasi lebih lanjutnya ya.                       Terima Kasih :) ','_blank')

  //set isopen to opposite so next time when use clicked select box
  //it wont trigger this event
  $(this).data("isopen", !open);
    return false;
  });
});


/*

    $("select").on("change", function() {
   var open = $(this).data("isopen");
  var tx = $("#replyNumber option:selected").text();
  var t = tx.replace("Admin : Leny Skincare", "Leny");
  if(open) {
    window.open("http://api.whatsapp.com/send?phone="+($(this).val())+'&text=Hi%21%20'+t+', saya tertarik untik treatment di Leny Skincare. Mohon informasi lebih lanjutnya ya.   Terima Kasih:)','_blank')
  }
  //set isopen to opposite so next time when use clicked select box
  //it wont trigger this event
  $(this).data("isopen", !open);
});
*/
$(window).bind("resize", function () {
    console.log($(this).width())
    if ($(this).width() >= 810 && $(this).width() < 1025) {
        $('ul').addClass('list-group list-group-horizontal')
    } else {
        $('ul').removeClass('list-group list-group-horizontal')
    }
}).trigger('resize');

    var vid = document.getElementById("videoslide"); 
   // var cv = document.getElementById('controlvideo');
    
    function playVid() { 
     vid.play(); 
    //  cv.style.display = "none";
      //   $('#controlvideopause').show();
      //alert('sss');
         $('#controlvideoplay').hide();
         $('#controlvideopause').show();
    } 

    function pauseVid() { 
      vid.pause(); 
      $('#controlvideoplay').show();
         $('#controlvideopause').hide();
    } 
  

 
    /* ===== Logic for creating fake Select Boxes ===== */
$('.sel').each(function() {
  $(this).children('select').css('display', 'none');
  
  var $current = $(this);
  
  $(this).find('option').each(function(i) {
    if (i == 0) {
      $current.prepend($('<div>', {
        class: $current.attr('class').replace(/sel/g, 'sel__box')
      }));
      
      var placeholder = $(this).text();
      $current.prepend($('<span>', {
        class: $current.attr('class').replace(/sel/g, 'sel__placeholder'),
        text: placeholder,
        'data-placeholder': placeholder
      }));
      
      return;
    }
    
    $current.children('div').append($('<span>', {
      class: $current.attr('class').replace(/sel/g, 'sel__box__options'),
      text: $(this).text()
    }));
  });
});

// Toggling the `.active` state on the `.sel`.
$('.sel').click(function() {
  $(this).toggleClass('active');
});

// Toggling the `.selected` state on the options.
$('.sel__box__options').click(function() {
  var txt = $(this).text();
  var index = $(this).index();
  
  $(this).siblings('.sel__box__options').removeClass('selected');
  $(this).addClass('selected');
  
  var $currentSel = $(this).closest('.sel');
  $currentSel.children('.sel__placeholder').text(txt);
  $currentSel.children('select').prop('selectedIndex', index + 1);
});

    </script> 
  <style>
#loading
{
	text-align:center; 
	background: url('assets/img/loader.gif') no-repeat center; 
	height: 150px;
}
</style>

<script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        var brand = get_filter('brand');
        var ram = get_filter('ram');
        var storage = get_filter('storage');
        $.ajax({
            url:"<?php echo base_url('fetch_data'); ?>",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, brand:brand, ram:ram, storage:storage},
            success:function(data){
                $('.filter_data').html(data);
                console.log(ram);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+' option:selected').each(function(){
          
            filter.push($(this).val());
           
        });
        return filter;
    }

    $('.common_selector').on('change',function(){
        filter_data();
    });


});

$('.menu').click(function(){
  $('#labelmenu').html(this.textContent.trim());
});

</script>
</body>

</html>