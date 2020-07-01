<?php 
$cover_page = '';

if (isset($this->setting['about_hero_image'])) {
  $cover_page = Yii::app()->baseUrl.ImageHelper::thumb(1920,562, '/images/static/'. $this->setting['about_hero_image'] , array('method' => 'adaptiveResize', 'quality' => '90'));
}
?>

<section class="insides_wrapper_pagein prelatife pg_reference">
  
  <section class="topspage_inside">
    <div class="prelatife container">
      <div class="insides py-5">
        <div class="row">
          <div class="col-md-45">
            <div class="block-content content-text">
              <div class="inners_logo pb-5">
                <img src="<?php echo $this->assetBaseurl ?>insid-logo-top.png" valt="" class="img img-fluid">
              </div>
              <div class="row">
                <div class="col-md-40">
                <h2>Project References</h2>
                <h3>Namas Logistics’ expertise speaks by itself</h3>
                <div class="py-2"></div>
                <p>We are grateful to be trusted by some of the best and top players in the Indonesian business / industry. We built life-long term partnership with our customers, and became an integral part of their chain supply process. Some of our respectful customers are listed as below:</p>
                  
                </div>
                <div class="col-md-20"></div>
              </div>

              <div class="py-5"></div>
              
              <!-- <ul class="list-inline mr-0 mb-0 lists_proj_client">
                  <li class="list-inline-item justify-content-center"><img src="<?php echo $this->assetBaseurl ?>ecovadis.png" valt="" class="img img-fluid"></li>
                  <li class="list-inline-item justify-content-center"><img src="<?php echo $this->assetBaseurl ?>arkema.png" valt="" class="img img-fluid"></li>
                  <li class="list-inline-item justify-content-center"><img src="<?php echo $this->assetBaseurl ?>henkel.png" valt="" class="img img-fluid"></li>
                  <li class="list-inline-item justify-content-center"><img src="<?php echo $this->assetBaseurl ?>akzonobel.png" valt="" class="img img-fluid"></li>
                  <li class="list-inline-item justify-content-center"><img src="<?php echo $this->assetBaseurl ?>merck.png" valt="" class="img img-fluid"></li>
                  <li class="list-inline-item justify-content-center"><img src="<?php echo $this->assetBaseurl ?>evonik.png" valt="" class="img img-fluid"></li>
                  <li class="list-inline-item justify-content-center"><img src="<?php echo $this->assetBaseurl ?>solvay.png" valt="" class="img img-fluid"></li>
                  <li class="list-inline-item justify-content-center"><img src="<?php echo $this->assetBaseurl ?>brenntag.png" valt="" class="img img-fluid"></li>
                  <li class="list-inline-item justify-content-center"><img src="<?php echo $this->assetBaseurl ?>dsm.png" valt="" class="img img-fluid"></li>
                  <li class="list-inline-item justify-content-center"><img src="<?php echo $this->assetBaseurl ?>basf.png" valt="" class="img img-fluid"></li>
                  <li class="list-inline-item justify-content-center"><img src="<?php echo $this->assetBaseurl ?>lanxess.png" valt="" class="img img-fluid"></li>
                  <li class="list-inline-item justify-content-center"><img src="<?php echo $this->assetBaseurl ?>dupont.png" valt="" class="img img-fluid"></li>
              </ul> -->
              <?php
              $ncl_client = [
                              'arion-indonesia-client-namas.jpg',
                              'logo.jpg',
                              'Logo--PT.jpg',
                              'mwp.jpg',
                              'SCIM-logo.jpg',
                              'Simbol-PT.jpg',
                              'tml-client-namas.jpg',
                            ];
              ?>
              <ul class="list-inline mr-0 mb-0 lists_proj_client">
                <?php foreach ($ncl_client as $key => $value): ?>
                  <li class="list-inline-item justify-content-center"><img src="<?php echo $this->assetBaseurl ?>client/<?php echo $value ?>" valt="" class="img img-fluid"></li>
                <?php endforeach ?>
              </ul>

              <div class="py-5"></div>
              
              <div class="row pb-4">
                <div class="col-md-30">
                  <p>Namas Logistics Project Documentation Gallery</p>
                </div>
                <div class="col-md-30">
                   
                </div>
              </div>

              <!-- <div class="row pb-4">
                <div class="col-md-60">
                  <h6>Not available at this moment</h6>
                </div>
              </div> -->

              <div class="outers_list_def_articles">
                <div class="row">

                  <div class="col-md-20">
                    <div class="boxs items">
                      <div class="picture">
                        <a href="<?php echo $this->assetBaseurl ?>project/big/custom_cl_1.jpeg" data-lightbox="road_1" data-title="Custom Clearance and Restuffing project for Terminal Petikemas Bitung - Control System 2019">
                          <img src="<?php echo $this->assetBaseurl ?>project/proj-1.jpg" alt="" class="img img-fluid w-100">
                        </a>
                      <?php for ($i=2; $i <= 12; $i++) { ?>
                        <a href="<?php echo $this->assetBaseurl ?>project/big/custom_cl_<?php echo $i ?>.jpeg" data-lightbox="road_1" data-title="Custom Clearance and Restuffing project for Terminal Petikemas Bitung - Control System 2019"></a>
                      <?php } ?>
                      </div>
                      <div class="titles py-1">
                        <a href="<?php echo $this->assetBaseurl ?>project/big/custom_cl_1.jpeg" data-lightbox="road_11" data-title="Custom Clearance and Restuffing project for Terminal Petikemas Bitung - Control System 2019">
                        <h6>Custom Clearance and Restuffing project for Terminal Petikemas Bitung - Control System 2019</h6>
                        </a>
                        <?php for ($i=2; $i <= 12; $i++) { ?>
                        <a href="<?php echo $this->assetBaseurl ?>project/big/custom_cl_<?php echo $i ?>.jpeg" data-lightbox="road_11" data-title="Custom Clearance and Restuffing project for Terminal Petikemas Bitung - Control System 2019"></a>
                      <?php } ?>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-20">
                    <div class="boxs items">
                      <div class="picture">
                        <a href="<?php echo $this->assetBaseurl ?>project/big/proj-ref-2_1.jpg" data-lightbox="road_2" data-title="Pembangkit Listrik Tenaga Surya Solar Module Project PT. TML Energy - project Maluku">
                          <img src="<?php echo $this->assetBaseurl ?>project/proj-2.jpg" alt="" class="img img-fluid w-100">
                        </a>
                      <?php for ($i=2; $i <= 3; $i++) { ?>
                        <a href="<?php echo $this->assetBaseurl ?>project/big/proj-ref-2_<?php echo $i ?>.jpg" data-lightbox="road_2" data-title="Pembangkit Listrik Tenaga Surya Solar Module Project PT. TML Energy - project Maluku"></a>
                      <?php } ?>
                      </div>
                      <div class="titles py-1">
                        <a href="<?php echo $this->assetBaseurl ?>project/big/proj-ref-2_1.jpg" data-lightbox="road_21" data-title="Pembangkit Listrik Tenaga Surya Solar Module Project PT. TML Energy - project Maluku">
                        <h6>Pembangkit Listrik Tenaga Surya Solar Module Project PT. TML Energy - project Maluku</h6>
                        </a>
                        <?php for ($i=2; $i <= 3; $i++) { ?>
                        <a href="<?php echo $this->assetBaseurl ?>project/big/proj-ref-2_<?php echo $i ?>.jpg" data-lightbox="road_21" data-title="Pembangkit Listrik Tenaga Surya Solar Module Project PT. TML Energy - project Maluku"></a>
                      <?php } ?>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="clear"></div>
              </div>

              <div class="py-4"></div>

              <div class="clear"></div>
            </div>
          </div>
          <div class="col-md-15"></div>
        </div>

        
        <div class="clearfix clear"></div>
      </div>
    </div>
  </section>


  <?php echo $this->renderPartial('//layouts/_tops_footer_bcream', array()); ?>

  <?php echo $this->renderPartial('//layouts/_footer', array()); ?>
  <div class="clear"></div>
</section>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox.min.js"></script>

<style type="text/css">
  .outers_list_def_articles .items .titles a{
    color: #000;
    text-decoration: none;
  }
</style>