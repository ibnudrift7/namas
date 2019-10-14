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

  <div class="clear"></div>
</section>