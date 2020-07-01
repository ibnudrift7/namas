<section id="section_hm_1" class="home-sec-1">
	<div class="prelative container">
		<div class="row">
			<div class="col-md-30">
				<div class="box-content-image">
					<img class="img img-fluid w-100" src="<?php echo $this->assetBaseurl ?>home1.jpg" alt="">
				</div>
			</div>
			<div class="col-md-30">
				<div class="box-content px-4">
					<div class="number">
						<div class="images">
							<img class="img img-fluid" src="<?php echo $this->assetBaseurl ?>01.png" alt="">
						</div>
						<h5>Namas Approach</h5>
					</div>
					<div class="title">
						<h3>For a smooth & punctual delivery, we go by a <u>breakthrough approach</u> where no one can.</h3>
						<p>With strong Indonesian roots and local custom knowledge, we are superior amongst others when it comes to manage your logistics needs. Adding unique value to the services, your cargo is in the best hands. We are always ahead in thinking of solutions, anticipating the right move at the right time. A breakthrough that we invite you all to experience, a challenging powerful team at your side.</p>
						<p>Our quality policy: Integrity - Commitment - Transparency - Loyalty - Determination</p>
						<div class="py-3"></div>
						<button class="learn-more"><a href="<?php echo CHtml::normalizeUrl(array('/home/about')); ?>">Learn More</a></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="home-sec-2">
	<div class="prelative container2">
		<div class="row">
			<div class="col-md-35">
			<div class="box-content px-4">
					<div class="number">
						<div class="images">
							<img class="img img-fluid " src="<?php echo $this->assetBaseurl ?>02.png" alt="">
						</div>
						<h5>NAMAS EXPERTISE</h5>
					</div>
					<div class="title">
						<h3>Custom Clearance <br>Excellence</h3>
						<p>Our trails of experience in Indonesia’s custom clearance are unmistakable and doubtless. The reputation emerged far even before the company was established, it was back then in the early 90s when our founder strived and struggled to pave the road and built networks in the customs department of Indonesia.</p>
						<button class="learn-more"><a href="<?php echo CHtml::normalizeUrl(array('/home/customClearance')); ?>">Learn More</a></button>
					</div>
				</div>
			</div>
			<div class="col-md-25">
			<div class="box-content-image">
					<img class="img img-fluid w-100" src="<?php echo $this->assetBaseurl ?>home2.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
</section>

<?php echo $this->renderPartial('//layouts/_top_footers_lsicon', array()); ?>

<?php echo $this->renderPartial('//layouts/_tops_footer_bcream', array()); ?>