<?php 
$cover_page = '';

// if (isset($this->setting['about_hero_image'])) {
//   $cover_page = Yii::app()->baseUrl.ImageHelper::thumb(1920,562, '/images/static/'. $this->setting['about_hero_image'] , array('method' => 'adaptiveResize', 'quality' => '90'));
// }
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
              <h3><?php echo $dataBlog->description->title ?></h3>
              <div class="py-1"></div>
              <span>Logistics Article</span>
              
              <div class="py-4 d-none d-sm-block"></div>
              <div class="py-3 d-block d-sm-none"></div>

              <div class="row">
                <div class="col-md-40">
                  <div class="contentes_detail">
                    <img class="w-100 img img-fluid" src="<?php echo Yii::app()->baseUrl.'/images/blog/'. $dataBlog->image ?>" alt="">
                    <div class="py-3"></div> <div class="py-1"></div>

                   <?php echo $dataBlog->description->content ?>

                    <div class="clear"></div>
                  </div>
                  <div class="clear"></div>
                </div>
                <div class="col-md-20">
                  <div class="outers_list_def_articles">
                    <div class="row">
                      <?php if ($dataBlogs->getTotalItemCount() > 0): ?>
                        <?php foreach ($dataBlogs->getData() as $key => $value): ?>
                          <div class="col-md-60">
                            <div class="boxs items">
                              <div class="picture">
                                <a href="<?php echo CHtml::normalizeUrl(array('/home/blogdetails', 'id'=> $value->id, 'slug'=>Slug::Create($value->description->title) )); ?>">
                                  <img class="img img-fluid" src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(349,204, '/images/blog/'. $value->image, array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="">
                                </a>
                              </div>
                              <div class="texts">
                                <div class="hg_ful">
                                <a href="<?php echo CHtml::normalizeUrl(array('/home/blogdetails', 'id'=> $value->id, 'slug'=>Slug::Create($value->description->title))); ?>"><h6><?php echo substr($value->description->title, 0, 60).'...' ?></h6></a>
                                <p>Logistics Article</p>
                                </div>
                                <a href="<?php echo CHtml::normalizeUrl(array('/home/blogdetails', 'id'=> $value->id, 'slug'=>Slug::Create($value->description->title))); ?>" class="btn btn-link bt_moreblog">READ MORE</a>
                                <div class="clear"></div>
                              </div>
                            </div>
                          </div>
                        <?php endforeach ?>
                      <?php endif ?>
                    </div>
                    <div class="buttons_all_artikel">
                      <a href="<?php echo CHtml::normalizeUrl(array('/home/blogp')); ?>" class="btn btn-link btmores_article">View all Blogs & Articles</a>
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