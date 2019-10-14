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
                      </div>
                      <div class="box-content-contact">
                        <h6>Namas Logistics Surabaya</h6>
                        <div class="address">
                            <img src="" alt="">
                            <p>Jl. Raya Satelit III - 21, Surabaya 60455 <br> East Java. Indonesia</p>
                            <a href="#">View location at Google Map.</a>
                        </div>
                        <div class="handphone">
                            <img src="" alt="">
                            <p>+62 81 2232 5455</p>
                        </div>
                        <div class="phone">
                            <img src="" alt="">
                            <p>+62 31 7664293</p>
                        </div>
                        <div class="email">
                            <img src="" alt="">
                            <p>info@namaslogistics.com</p>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <div class="clear"></div>
</section>

<section class="form-contact">
    <div class="prelative container">
        <div class="row">
            <div class="col-md-30">
                <div class="box-content">
                    <h5>Inquiry Form</h5>
                    <h3>Please leave your details and drop us a line, <br> we’ll respond to you shortly.</h3>
                </div>
                <form>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">FULL NAME</label>
                                <input type="text" class="form-control" placeholder="First name">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">COMPANY NAME</label>
                                <input type="text" class="form-control" placeholder="First name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">EMAIL</label>
                                <input type="text" class="form-control" placeholder="First name">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">TELEPHONE</label>
                                <input type="text" class="form-control" placeholder="First name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">ADDRESS</label>
                                <input type="text" class="form-control" placeholder="First name">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">CITY</label>
                                <input type="text" class="form-control" placeholder="First name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">PROVINCE</label>
                                <input type="text" class="form-control" placeholder="First name">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">COUNTRY</label>
                                <input type="text" class="form-control" placeholder="First name">
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
                    <button type="submit" class="btn btn-primary mb-2"><a href="#">SUBMIT</a></button>
                </form>
            </div>
            <div class="col-md-30">
                <div class="images"><img src="<?php echo $this->assetBaseurl ?>" valt="" class="img img-fluid"></div>
            </div>
        </div>
    </div>
</section>

<section class="form-sec-2">
    <div class="prelative container">
        <div class="row">
            <div class="col-md-60">
                <div class="box-content">
                    <div class="images"><img src="<?php echo $this->assetBaseurl ?>WA-Logo-copy.png" valt="" class="img img-fluid"></div>
                    <h3>For a quicker response, please contact Namas Logistics <br> Via Whatsapp Chat <a href="#">(Click Here)</a></h3>
                </div>
            </div>
        </div>
    </div>
</section>