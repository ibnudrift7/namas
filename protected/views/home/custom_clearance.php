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

              <h2>Custom Clearance</h2>
              <h3>Our speciality in the Indonesian Custom Clearance <br> are proven and reputable</h3>
              <p>Our trails of experience in Indonesia’s custom clearance are unmistakable and doubtless. The reputation emerged far even before the company was established, it was back then in the early 70s when our founder strived and struggled to pave the road and built networks in the customs department of Indonesia.
              <br><br>
              Namas Logistics work with dedicated internal customs brokers, who knows all the bureaucracy in our country. Namas Logistics will handle all customs files efficiently and expertly - in house, not outsourced to any other middleman. We provide consultancy to set up your customs flow as smooth and cost efficiently as possible, and besides import, export, transit handling, Namas Logistics also organise fiscal representation, inspections, cargo checks, surveys, etc.</p>

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
            <div class="col-md-30">
                <div class="images"><img src="<?php echo $this->assetBaseurl ?>cusclear1.png" valt="" class="img img-fluid"></div>
          </div>
        </div>

        
        <div class="clearfix clear"></div>
      </div>
    </div>
  </section>



  <div class="clear"></div>
</section>


<section class="home-sec-3">
	<div class="prelative container">
		<div class="row">
			<div class="col-md-60">
				<div class="no">
					<img class="img img-fluid " src="<?php echo $this->assetBaseurl ?>03.png" alt="">
				</div>
				<div class="logo-home">
					<img class="img img-fluid " src="<?php echo $this->assetBaseurl ?>namas-logo-home3.png" alt="">
				</div>
				<h3>Full Realm Of Freight Forwarding</h3>
				<p>There’s nothing we can’t do to get your cargo safe and sound. We build bridges, we paved roughs roads and we move mountains that gets in our way.</p>
				<div class="row atas">
					<div class="col-md-15 col-30">
						<div class="box-content-atas">
							<img class="img img-fluid " src="<?php echo $this->assetBaseurl ?>airplane.png" alt="">
							<p>AIR</p>
						</div>
					</div>
					<div class="col-md-15 col-30">
						<div class="box-content-atas">
							<img class="img img-fluid " src="<?php echo $this->assetBaseurl ?>sea.png" alt="">
							<p>SEA</p>
						</div>
					</div>
					<div class="col-md-15 col-30">
						<div class="box-content-atas">
							<img class="img img-fluid " src="<?php echo $this->assetBaseurl ?>road.png" alt="">
							<p>ROAD</p>
						</div>
					</div>
					<div class="col-md-15 col-30">
						<div class="box-content-atas">
							<img class="img img-fluid " src="<?php echo $this->assetBaseurl ?>RAIL.png" alt="">
							<p>RAIL</p>
						</div>
					</div>
				</div>
				<div class="row bawah">
					<div class="col-md-20 col-30">
						<div class="box-content-bawah">
							<img class="img img-fluid " src="<?php echo $this->assetBaseurl ?>stave.png" alt="">
							<p>STEVEDORING</p>
						</div>
					</div>
					<div class="col-md-20 col-30">
						<div class="box-content-bawah">
							<img class="img img-fluid " src="<?php echo $this->assetBaseurl ?>WAREHOUSE.png" alt="">
							<p>WAREHOUSE & DEPOT</p>
						</div>
					</div>
					<div class="col-md-20 col-60">
						<div class="box-content-bawah">
							<img class="img img-fluid " src="<?php echo $this->assetBaseurl ?>CARGO.png" alt="">
							<p>OVERSIZED CARGO</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="home-sec-4">
	<div class="prelative container">
		<div class="row no-gutters">
			<div class="col-md-30">
				<div class="image">
					<img class="img img-fluid w-100" src="<?php echo $this->assetBaseurl ?>home4.jpg" alt="">
				</div>
			</div>
			<div class="col-md-30">
				<div class="box-content">
					<h3>Let’s talk about your<br>cargo shipment</h3>
					<p>Get free professional insights and solution regarding your custom clearance or cargo logistics. Namas’ logistic consultants will be ready 24/7 to help you.</p>
					<button class="wa"><a href="#"><img class="img img-fluid" src="<?php echo $this->assetBaseurl ?>wa.png" alt="">   Whatsapp Chat Now</a></button>
					<button class="inquire"><a href="#"><img class="img img-fluid" src="<?php echo $this->assetBaseurl ?>pencil.png" alt="">   Inquire Now</a></button>
				</div>
			</div>
		</div>
		<div class="clearfix clear"></div>
	</div>
	<div class="clearfix clear"></div>
</section>