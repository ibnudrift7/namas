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
          <div class="col-md-45">
            <div class="block-content content-text">
              <div class="inners_logo pb-5">
                <img src="<?php echo $this->assetBaseurl ?>insid-logo-top.png" valt="" class="img img-fluid">
              </div>

              <h2>Blogs</h2>
              <h3>Read more about Namas Logistics news and <br>useful information</h3>

              <div class="py-5"></div>

              <div class="row pb-4">
                <div class="col-md-30">
                  <p>Latest Blogs & Articles</p>
                </div>
                <div class="col-md-30">
                    <nav aria-label="Page navigation example">
                      <ul class="pagination justify-content-end">
                        <li class="page-item"><a class="page-link" href="#">Page</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                      </ul>
                    </nav>
                </div>
              </div>

              <div class="outers_list_def_articles">
                <div class="row">

                  <?php for ($i=1; $i < 10; $i++) { ?>
                  <div class="col-md-20">
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
