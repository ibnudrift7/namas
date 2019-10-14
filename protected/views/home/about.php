<?php 
$cover_page = '';

if (isset($this->setting['about_hero_image'])) {
  $cover_page = Yii::app()->baseUrl.ImageHelper::thumb(1920,562, '/images/static/'. $this->setting['about_hero_image'] , array('method' => 'adaptiveResize', 'quality' => '90'));
}
?>

<section class="insides_wrapper_pagein prelatife pg_about">
  
  <section class="cover_inside">
    <div class="prelatife container">
      <div class="insides py-5">
        <div class="row">
          <div class="col-md-30">
            <div class="block-content content-text">
              <div class="inners_logo pb-5">
                <img src="<?php echo $this->assetBaseurl ?>insid-logo-top.png" valt="" class="img img-fluid">
              </div>

              <h2>About Us</h2>
              <h3>Who We Are</h3>

              <h5>A reputation AND EXPERTISE in the INDONESIAN logistics
              that’s passed GENERATIONS after generations SINCE 1970</h5>

              <p>It was since the early 70s, when Mr. Sindudinata started to plant the first seed of a legacy in the Indonesian logistics world. With a homely bike, from post office to friends and relatives doorsteps, Mr. Sindudinata express a great passion for service and dedication. With his hardworking culture, he gained trusts from various important people and the business grew fast until it became one of the leader of Air Forwarding company in Surabaya with agents and branches spread across Asia - Hongkong, Singapore, China and nearby countries. The dedicated work ethic and passion has embodied into the company and passed to the next generations after generations.</p>

              <p>In the early 2000, Mr. Dian Wirawan Koeswandi as the son of Mr. Sindudinata continued to expand the logistic business by building a company that works together with JNE as one of the biggest local courier at that time in Indonesia. The 2007 graduate of Industrial Engineering majoring in Calculation of Distribtion with the title of Valedictorian from Calpoly USA, then opened his first export - import company with a new modern system and strategy armed with even bigger passion and dedication to serve customers from anywhere in the country and the worldwide. And following the founding generation’s footsteps, Namas Logistics was born under the leadership of Mr. Fung Koeswandi as the 3rd generation from Mr. Sindudinata and as the son of Mr. Dian Wirawan Koeswandi.</p>
              <div class="py-3"></div>
              <div class="clear"></div>
            </div>
          </div>
          <div class="col-md-30"></div>
        </div>
        <div class="clearfix clear"></div>
      </div>
    </div>
  </section>

  <section class="blocking-custom top-custom full_custom">
    <div class="row no-gutters">
      <div class="col-md-25 inners_text text-center my-auto">
        <div class="ts_text px-5">
          <p>“We are always ahead in thinking of solutions, anticipating the right move at the right time. A breakthrough that we invite you all to experience, a challenging powerful team at your side. With strong Indonesian roots and local custom knowledge, we are superior amongst others when it comes to to manage your logistics needs. ”</p>
        </div>
      </div>
      <div class="col-md-35 banners_pict">
        <ul class="list-inline">
          <li class="list-inline-item"><img src="<?php echo $this->assetBaseurl ?>full_custom_pic1.jpg" alt="" class="img img-fluid w-100"></li>
          <li class="list-inline-item"><img src="<?php echo $this->assetBaseurl ?>full_custom_pic2.jpg" alt="" class="img img-fluid w-100"></li>
          <li class="list-inline-item last"><img src="<?php echo $this->assetBaseurl ?>full_custom_pic3.jpg" alt="" class="img img-fluid w-100"></li>
        </ul>
      </div>
    </div>
  </section>

  <section class="blocking-custom top-custom full_custom2">
    <div class="row no-gutters">
      <div class="col-md-25 inners_text text-center">
        <img src="<?php echo $this->assetBaseurl ?>banners_custom_1_r.jpg" alt="" class="img img-fluid w-100">
      </div>
      <div class="col-md-35 banners_pict">
        <img src="<?php echo $this->assetBaseurl ?>banners_custom_2_r.png" alt="" class="img img-fluid w-100">
      </div>
    </div>
    <div class="pons_abos_full">
      <div class="prelatife container">
        <div class="row">
          <div class="col-md-35 py-5">
            <div class="row pt-3">
              <div class="col-md-30 borders">
                <div class="inners">
                <h3>Vision</h3>
                <p>To be the first choice when it comes to custom clearance and other logistic servicess in Indonesia, bringing the best satisfactory level to our customers by exceeding expectations.</p>
                </div>
              </div>
              <div class="col-md-30">
                <div class="inners">
                <h3>Mission</h3>
                <ul>
                  <li>To be the best at punctuality and work ethic.</li>
                  <li>Prioritize customer satisfaction.</li>
                  <li>To be transparent and traceable to customers.</li>
                </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-25">
            
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </section>

  <section class="bottoms_about_cont">
    <div class="py-5"></div>
    <div class="prelatife container">
      <div class="insides">
        <div class="row">
          <div class="col-md-30">
            <div class="pictr"><img src="<?php echo $this->assetBaseurl ?>nxs_pull_about.jpg" alt="" class="img img-fluid"></div>
          </div>
          <div class="col-md-30">
            <div class="content-text setcontent pt2 px-5">
              <h3>Key Person</h3>
              <p>With a background of logistic business expert that runs in the family, Fung Koeswandi had quickly progressed his career at the family business and few other supporting logistic related business. It is Namas Logistic, which is the brainchild result that express all the passion, energy and spirit of Fung Koeswandi as the 3rd generation of Mr. Sindudinata (Nam Group) in the logistic service business.</p>
              <p>At the previous involvement in the family business, Fung Koeswandi gained various skillsets in logistic service sector and evenmore became experts in Custom Brokerage. Numerous off-shore cargo, import-export, and oversized cargo projects has been successfully cleared within the command and initiation of Fung Koeswandi at the family corporation. Now, with bigger disire to serve the customers, Fung Koeswandi has dedicated his entire energy building Namas Logistic to become your best and reliable partner for all kinds of logistic needs.</p>
              <p>As the leader and founder of Namas Logistics, Fung’s goal is to provide solutions to all size of industries from small to large size companies with the high investment on technology, operational efficiencies and supply chain strategies. Fung’s operational background provided the foundation for developing the new modern strategy of custom clearance and also new way of transporting which provides unmatched visibility and total supply control to clients.</p>
              <div class="clear"></div>
            </div>
          </div>
        </div>
        <div class="clear clearfix"></div>
      </div>
    </div>
  </section>
  
  <div class="py-4"></div>
  

  <?php echo $this->renderPartial('//layouts/_tops_footer_bcream', array()); ?>

  <?php echo $this->renderPartial('//layouts/_footer', array()); ?>

  <div class="clear"></div>
</section>