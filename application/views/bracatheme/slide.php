<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: -20px !important;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
    <?php 
     $slider = $this->model_utama->view('album');
     $sl = $slider->num_rows();
   
     for($j=0; $j<$sl; $j++) {?>
            <li data-target="#myCarousel" data-slide-to="<?php echo $j; ?>" class=""></li>
        <?php }; ?>
    </ol>

          <div class="carousel-inner">
        <?php $i=1;
         $slide1 = $this->model_utama->view('album');
        foreach ($slide1->result_array() as $slider)
        //$b = $slider;
        { ?>

            <div class="item <?php echo ($i==1) ? "active" : "" ?>">

                <img src="<?php echo base_url('asset/img_album/'.$slider['gbr_album']) ?>" alt="" class="img-responsive" style="width:100%" title="">

                <div class="carousel-caption">
                   
                    <p><a href="<?php echo base_url('hubungi');?>">
                    <label style="font-weight:100 !important;font-family:Century Gothic;font-size:2vw;background:#fff;border:1px #c9c9c9 solid;text-shadow:none !important;box-shadow:1px 0px 3px #ccc; margin-top:355px;padding:4px 23px 4px 23px;border-radius:32px;color:#676;" class="text-center">Gratis Konsultasi</label></a>
          </p>
                </div>

            </div>
        <?php $i++; } ?>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    