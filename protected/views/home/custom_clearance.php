<?php 
$cover_page = '';

if (isset($this->setting['about_hero_image'])) {
  $cover_page = Yii::app()->baseUrl.ImageHelper::thumb(1920,562, '/images/static/'. $this->setting['about_hero_image'] , array('method' => 'adaptiveResize', 'quality' => '90'));
}
?>

<section class="insides_wrapper_pagein prelatife custompg">
  
  <section class="topspage_inside">
    <div class="prelatife container">
      <div class="insides py-5">
        <div class="row">
          <div class="col-md-30">
            <div class="block-content content-text">
              <div class="inners_logo pb-5">
                <img src="<?php echo $this->assetBaseurl ?>insid-logo-top.png" valt="" class="img img-fluid">
              </div>

              <h2>Custom Clearance</h2>
              <h3>Our speciality in the Indonesian Custom Clearance are proven and reputable</h3>
              <p>Our trails of experience in Indonesia’s custom clearance are unmistakable and doubtless. The reputation emerged far even before the company was established, it was back then in the early 70s when our founder strived and struggled to pave the road and built networks in the customs department of Indonesia.
              <br><br>
              Namas Logistics work with dedicated internal customs brokers, who knows all the bureaucracy in our country. Namas Logistics will handle all customs files efficiently and expertly - in house, not outsourced to any other middleman. We provide consultancy to set up your customs flow as smooth and cost efficiently as possible, and besides import, export, transit handling, Namas Logistics also organise fiscal representation, inspections, cargo checks, surveys, etc.</p>
              </div>
            </div>
            <div class="col-md-30">
          </div>
        </div>

        
        <div class="clearfix clear"></div>
      </div>
    </div>
  </section>

  <section class="customclearance-2">
	  <div class="prelatife container">
		  <div class="row">
			  <div class="col-md-25">
				  <div class="box-content">
					<h4>Custom Clearance for various type of cargo</h4>
					<p>We have the expertise to handle custom clearance for various kind of cargo, you name it and we’ll do the smooth clearance for you.</p>
	
					<h5>Retail & Consumer Goods</h5>
					<p>Automotive, Fasion, Household, Decoration & Toys, Floorings.</p>
	
					<h5>Nature & Forest Commodity</h5>
					<p>Wood, Wood & Pulp, Paper, Marble & Stones, Spices.</p>
	
					<h5>Agricultural Products</h5>
					<p>Food, Sugar, Fertilisers, Minerals, Natural & Vegetable Oil.</p>
	
					<h5>Industrial Products</h5>
					<p>Chemicals, Glass, Oils & Lubricants, Project Cargo</p>
				  </div>
			  </div>
			  <div class="col-md-35">
				  <div class="box-content">
					  <div class="images">
					  <img src="<?php echo $this->assetBaseurl ?>cusclear1.png" valt="" class="img img-fluid">
					</div>
				  </div>
			  </div>
		  </div>
	  </div>
  </section>

	<?php echo $this->renderPartial('//layouts/_top_footers_lsicon', array()); ?>
	<div class="py-5"></div>
	<?php echo $this->renderPartial('//layouts/_tops_footer_bcream', array()); ?>

  <?php echo $this->renderPartial('//layouts/_footer', array()); ?>

  <div class="clear"></div>
</section>
