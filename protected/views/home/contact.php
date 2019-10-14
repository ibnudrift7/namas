<?php 
$cover_page = '';

if (isset($this->setting['about_hero_image'])) {
  $cover_page = Yii::app()->baseUrl.ImageHelper::thumb(1920,562, '/images/static/'. $this->setting['about_hero_image'] , array('method' => 'adaptiveResize', 'quality' => '90'));
}
?>

<section class="insides_wrapper_pagein prelatife contact_pg">
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
                      </div>
                      <div class="py-3"></div>
                      <div class="box-content-contact">
                        <h6>Namas Logistics Surabaya</h6>
                        <div class="py-2"></div>
                        <div class="nx_box_adress">
                            <div class="row no-gutters">
                                <div class="col-md-5">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="col-md-55">
                                    <p>Jl. Raya Satelit III - 21, Surabaya 60455 <br> East Java. Indonesia</p>
                                <a href="#">View location at Google Map.</a>
                                </div>
                            </div>

                            <div class="row no-gutters">
                                <div class="col-md-5">
                                    <i class="fa fa-mobile"></i>
                                </div>
                                <div class="col-md-55">
                                    <p>+62 81 2232 5455</p>
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-md-5">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="col-md-55">
                                    <p>+62 81 2232 5455</p>
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-md-5">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="col-md-55">
                                    <p>+62 81 2232 5455</p>
                                </div>
                            </div>                                                       
                            
                            <div class="clear"></div>
                        </div>

                        <div class="bloc-h200"></div>

                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>


    <section class="form-contact blocks2-bottomcontact">
        <div class="prelatife container">
            <div class="row">
                <div class="col-md-30">
                    <div class="py-5"></div>
                    <div class="box-content">
                        <h5>Inquiry Form</h5>
                        <h3>Please leave your details and drop us a line, <br> we’ll respond to you shortly.</h3>
                    </div>
                    <form method="post" action="#">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">FULL NAME</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">COMPANY NAME</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">EMAIL</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">TELEPHONE</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">ADDRESS</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">CITY</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">PROVINCE</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">COUNTRY</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">WHAT CAN WE DO FOR YOU</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="py-1"></div>
                        <div class="row">
                            <div class="col"></div>
                            <div class="col text-right">
                                <button type="submit" class="btn btn-primary mb-2 btns_submit">SUBMIT</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-30">
                    <div class="images"><img src="<?php echo $this->assetBaseurl ?>tops_pg_contact2.jpg" alt="" class="img img-fluid"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="form-sec-2 py-5">
        <div class="prelatife container">
            <div class="py-2"></div>
            <div class="row insides_row">
                <div class="col-md-60">
                    <div class="box-content text-center">
                        <div class="images">
                            <img src="<?php echo $this->assetBaseurl ?>WA-Logo-copy.png" valt="" class="img img-fluid">
                        </div>
                        <div class="py-2"></div>
                        <h3>For a quicker response, please contact Namas Logistics <br>
                        Via Whatsapp Chat <a href="#">(Click Here)</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>


  <?php echo $this->renderPartial('//layouts/_footer', array()); ?>

  <div class="clear"></div>
</section>
