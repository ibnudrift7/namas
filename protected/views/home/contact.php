<?php 
$cover_page = '';

if (isset($this->setting['about_hero_image'])) {
  $cover_page = Yii::app()->baseUrl.ImageHelper::thumb(1920,562, '/images/static/'. $this->setting['about_hero_image'] , array('method' => 'adaptiveResize', 'quality' => '90'));
}
?>

<section class="insides_wrapper_pagein prelatife blog_pg">
  <section class="topspage_inside">
      <div class="prelatife container">
          <div class="insides py-5">
              <div class="row">
                  <div class="col-md-30">
                      <div class="block-content content-text">
                          <div class="inners_logo pb-5">
                              <img src="<?php echo $this->assetBaseurl ?>insid-logo-top.png" valt="" class="img img-fluid">
                          </div>
                          <h2>Contact Us</h2>
                          <h3>Let's get your the best advice! <br> Our customer service staff is here for you.</h3>
                          <h6>Namas Logistics Surabaya</h6>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <div class="clear"></div>
</section>