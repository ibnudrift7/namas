<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<?php echo $this->renderPartial('//layouts/_header', array()); ?>
<div class="outer_contents">
    <div class="fcs-wrapper outers_fcs_wrapper prelatife wrapper-slide">
        <!-- <img class="w-100 d-none d-sm-block" src="<?php echo $this->assetBaseurl; ?>Layer-561.jpg" alt=""> -->

        <div id="myCarousel_home" class="carousel carousel-fade" data-ride="carousel" data-interval="4500">
                <div class="carousel-inner">
                    <div class="carousel-item <?php if($key == 0): ?>active<?php endif ?> home-slider-new">
                        
                        <img class="w-100 d-none d-sm-block" src="<?php echo $this->assetBaseurl; ?>slide-1.jpg" alt="First slide">
                        <img class="w-100 d-block d-sm-none" src="<?php // echo Yii::app()->baseUrl.ImageHelper::thumb(600,980, '/images/'. $value->image2 , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="">
                        <div class="backs_mob_full"></div>
                        <div class="carousel-caption caption-slider-home mx-auto">
                            <div class="prelatife container">
                                <div class="bxsl_tx_fcs">
                                    <div class="row no-gutters">
                                        <div class="col-md-40 py-4 text-left">
                                            <div class="content">
                                                <div class="hds_logo d-none d-sm-block"><img src="<?php echo $this->assetBaseurl; ?>lgo-header.png" alt="" class="img img-fluid"></div>
                                                <div class="py-4"></div>
                                                <p>One powerful source for all your logistic needs</p>
                                                <h2>Simplifying custom clearance & logistics</h2>
                                                <h4>INTEGRITY - COMMITMENT - TRANSPARENCY - LOYALITY - DETERMINATION</h4>
                                                <div class="clearfix py-2"></div>
                                                <a href="<?php echo CHtml::normalizeUrl(array('/home/about')); ?>" class="btn btn-info btns_more_fcs">LEARN MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </div>

        <div class="blocks_bottomn_scroll_fcs">
            <div class="nx_btn">
                <a href="#" class="toscroll" data-id="section_hm_1"><img src="<?php echo $this->assetBaseurl; ?>btn-toscrolls.png" alt="" class="img-fluid"></a>
            </div>
        </div>

        <div class="blocks_bottomn_wa_fcs">
            <div class="nx_btn">
                <a href="https://wa.me/6285235068383"><img src="<?php echo $this->assetBaseurl; ?>btn-fly-wa.png" alt="" class="img-fluid"></a>
            </div>
        </div>

        <div class="d-block d-sm-none blocks_bottom_mobfcs_fcn">
            <div class="row no-gutters">
                <div class="col-30 brd_rght">
                    <div class="inners_texts"><a target="_blank" href="https://wa.me/6285235068383"><i class="fa fa-whatsapp"></i> &nbsp;Whatsapp</a></div>
                </div>
                <div class="col-30">
                    <div class="inners_texts"><a href="mailto:info@namaslogistics.com"><i class="fa fa-envelope"></i> &nbsp;Email</a></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <?php echo $content ?>
    <script type="text/javascript">
        $(document).ready(function(){
            
            // if ($(window).width() >= 768) {
                var $item = $('#myCarousel_home.carousel .carousel-item'); 
                var $wHeight = $(window).height();
                $item.eq(0).addClass('active');
                $item.height($wHeight); 
                $item.addClass('full-screen');

                $('#myCarousel_home.carousel img.d-none.d-sm-block').each(function() {
                  var $src = $(this).attr('src');
                  var $color = $(this).attr('data-color');
                  $(this).parent().css({
                    'background-image' : 'url(' + $src + ')',
                    'background-color' : $color
                  });
                  $(this).remove();
                });

                $(window).on('resize', function (){
                  $wHeight = $(window).height();
                  $item.height($wHeight);
                });

                $('#myCarousel_home.carousel').carousel({
                  interval: 4000,
                  pause: "false"
                });
            // }

        });
    </script>
    <?php echo $this->renderPartial('//layouts/_footer', array()); ?>
</div>

<?php
/*<div class="modal fade nmodas_home" id="exampleModal_sn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <!-- <img src="<?php // echo Yii::app()->baseUrl.'/asset/images/NAMAS-01.jpg' ?>" alt="" class="img img-fluid"> -->
        <img src="<?php echo Yii::app()->baseUrl.'/asset/images/lebaran-card.jpg' ?>" alt="" class="img img-fluid">
      </div>
    </div>
  </div>
</div>
*/
?>
<script type="text/javascript">
	$(function(){
		// $('#exampleModal_sn').modal('show');
	});
</script>
<style type="text/css">
	@media (min-width: 576px){
		.modal-dialog {
		    max-width: 767px;
		    margin: 1.75rem auto;
		}
		.modal-body{
			padding: 0.5rem;
		}
	}
</style>

<?php $this->endContent(); ?>
