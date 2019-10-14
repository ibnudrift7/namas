<?php 
$cover_page = '';

if (isset($this->setting['about_hero_image'])) {
  $cover_page = Yii::app()->baseUrl.ImageHelper::thumb(1920,562, '/images/static/'. $this->setting['about_hero_image'] , array('method' => 'adaptiveResize', 'quality' => '90'));
}
?>

<section class="insides_wrapper_pagein prelatife blog_pg_detail">
  
  <section class="topspage_inside">
    <div class="prelatife container">
      <div class="insides py-5">
        <div class="row">
          <div class="col-md-45">
            <div class="block-content content-text">
              <div class="inners_logo pb-5">
                <img src="<?php echo $this->assetBaseurl ?>insid-logo-top.png" valt="" class="img img-fluid">
              </div>

              <h2>Blogs</h2>
              <h3>Title of blog / article here</h3>
              <div class="py-1"></div>
              <span>Logistics Article</span>

              <div class="py-4"></div>

              <div class="row">
                <div class="col-md-40">
                  <div class="contentes_detail">
                    <img src="<?php echo $this->assetBaseurl ?>pict-bg-blog.jpg" alt="" class="img img-fluid">
                    <div class="py-3"></div> <div class="py-1"></div>

                    <p>With a background of logistic business expert that runs in the family, Fung Koeswandi had quickly progressed his career at the family business and few other supporting logistic related business. It is Namas Logistic, which is the brainchild result that express all the passion, energy and spirit of Fung Koeswandi as the 3rd generation of Mr. Sindudinata (Nam Group) in the logistic service business.</p>

                    <p>At the previous involvement in the family business, Fung Koeswandi gained various skillsets in logistic service sector and evenmore became experts in Custom Brokerage. Numerous off-shore cargo, import-export, and oversized cargo projects has been successfully cleared within the command and initiation of Fung Koeswandi at the family corporation. Now, with bigger disire to serve the customers, Fung Koeswandi has dedicated his entire energy building Namas Logistic to become your best and reliable partner for all kinds of logistic needs.</p>

                    <p>As the leader and founder of Namas Logistics, Fung’s goal is to provide solutions to all size of industries from small to large size companies with the high investment on technology, operational efficiencies and supply chain strategies. Fung’s operational background provided the foundation for developing the new modern strategy of custom clearance and also new way of transporting which provides unmatched visibility and total supply control to clients.</p>
                    <div class="clear"></div>
                  </div>
                  <div class="clear"></div>
                </div>
                <div class="col-md-20">
                  <div class="outers_list_def_articles">
                    <div class="row">
                      <?php for ($i=1; $i < 4; $i++) { ?>
                      <div class="col-md-60">
                        <div class="boxs items">
                          <div class="picture">
                            <img src="<?php echo $this->assetBaseurl ?>pct-blog.jpg" alt="" class="img img-fluid">
                          </div>
                          <div class="texts">
                            <div class="hg_ful">
                            <h6>Title of blog / article here</h6>
                            <p>Logistics Article</p>
                            </div>
                            <a href="#" class="btn btn-link bt_moreblog">READ MORE</a>
                            <div class="clear"></div>
                          </div>
                        </div>
                      </div>
                      <?php } ?>
                    </div>
                    <div class="buttons_all_artikel">
                      <a href="#" class="btn btn-link btmores_article">View all Blogs & Articles</a>
                    </div>
                    <div class="clear"></div>
                  </div>
                </div>
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