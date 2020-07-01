<?php 
    $e_activemenu = $this->action->id;
    $controllers_ac = $this->id;
    $active_menu_pg = $controllers_ac.'/'.$e_activemenu;
?>

<section class="home-sec-4 <?php if ($active_menu_pg != 'home/index'): ?>insideshome_4<?php endif ?>">
	<!-- <div class="prelative container"> -->
		<div class="row no-gutters">
			<div class="col-md-30">
				<div class="image">
					<div class="d-none d-sm-block">
					<img class="img img-fluid w-100" src="<?php echo $this->assetBaseurl ?>home4.jpg" alt="">
					</div>
					<div class="d-block d-sm-none">
					<img class="img img-fluid w-100" src="<?php echo $this->assetBaseurl ?>home4_mob.jpg" alt="">
					</div>
					<div class="lines-blue"></div>
				</div>
			</div>
			<div class="col-md-30">
				<div class="box-content">
					<h3>Let’s talk about your<br>cargo shipment</h3>
					<p>Get free professional insights and solution regarding your custom clearance or cargo logistics. Namas’ logistic consultants will be ready 24/7 to help you.</p>
					<button class="wa"><a href="https://wa.me/6285235068383"><img class="img img-fluid" src="<?php echo $this->assetBaseurl ?>wa.png" alt="">   Whatsapp Chat Now</a></button>
					<button class="inquire"><a href="<?php echo CHtml::normalizeUrl(array('/home/contactus')); ?>"><img class="img img-fluid" src="<?php echo $this->assetBaseurl ?>pencil.png" alt="">   Inquire Now</a></button>
				</div>
			</div>
		</div>
		<!-- <div class="clearfix clear"></div>
	</div> -->
	<div class="clearfix clear"></div>
</section>