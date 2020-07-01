<?php 
$cover_page = '';

if (isset($this->setting['about_hero_image'])) {
  $cover_page = Yii::app()->baseUrl.ImageHelper::thumb(1920,562, '/images/static/'. $this->setting['about_hero_image'] , array('method' => 'adaptiveResize', 'quality' => '90'));
}
?>

<section class="insides_wrapper_pagein prelatife freight_pg">
    <section class="topspage_inside">
        <div class="prelatife container">
            <div class="insides py-5">
                <div class="row">
                    <div class="col-md-35">
                        <div class="block-content content-text freight_cont">
                            <div class="inners_logo pb-5">
                                <img src="<?php echo $this->assetBaseurl ?>insid-logo-top.png" valt="" class="img img-fluid">
                            </div>
                            <h2>Freight Forwarding Services</h2>
                            <h3>There’s always something that we can do to get your cargo safe and sound. We build bridges, we paved roughs roads and we move mountains that gets in our way.</h3>
                            <p>We will handle the logistics and bring your goods by vessel, plane, train, truck or any combination. For your solid, bulk, or liquid products, we will guarantee a smooth delivery. Take a look at our services:</p>
                        </div>
                    </div>
                    <div class="col-md-25"></div>
                </div>

                <div class="py-5"></div>

                <?php 
                $dnt_freight = [
                                    [
                                        'icon'=>'airplane.png',
                                        'title'=>'Air Freight',
                                        'desc'=>'Namas Logistics intensive 24/7 airport-to-door, door-to-door and door-to-airport services will be your fastest and most qualitative possible airfreight solutions, answering your urgent needs. A chartering services are also available upon request. Namas Logistics will help with all safety precautions to fulfill safety requirements and arrange packing and door to door service.',
                                    ],
                                    [
                                        'icon'=>'sea.png',
                                        'title'=>'Sea Freight',
                                        'desc'=>'Sea freight is one of the core service specialties of Namas Logistics services. Namas Logistics have a close relationship with local and international sea freight shipping company. Our regular basis quotum volume will be a one step ahead for faster departure. Additionally, we provide full reporting services and shipment follow-up on your behalf.',
                                    ],
                                    [
                                        'icon'=>'road.png',
                                        'title'=>'Road Freight / Trucking',
                                        'desc'=>'Namas Logistics holds more than 50 trucking partners, with 12 of them banded on strategic contract for our customer’s advantage. Namas Logistics will be delivering your products by truck to various destinations and as a mixed and supporting follow-up transporting act from air and sea freights. Namas Logistics are able to offer solutions for all transport modes: conventional, bulk, container and multimodal - for solid, bulk or liquid commodity.',
                                    ],
                                    [
                                        'icon'=>'RAIL.png',
                                        'title'=>'Rail Freight',
                                        'desc'=>'Heavy goods and oversized freight are best when transported by rail road to cut cost and achieve faster delivery. Namas Logistics will provide professional planning and execution of rail transport and logistics services for large-scale industrial projects. A full frieght handling will be professionally planned, executed and even the possibility of using advanced hydraulic & pneumatic lifting.',
                                    ],
                                    [
                                        'icon'=>'stave.png',
                                        'title'=>'Stevedoring',
                                        'desc'=>'With Namas Logistics’ highly skilled and trained labor force, we will manage all types of cargo. Namas Logistics stevedoring services include container, bulk, breakbulk and project cargo; intermodal - multimodal facilities and combination of transporting service to ease the flow of delivery.',
                                    ],
                                    [
                                        'icon'=>'WAREHOUSE.png',
                                        'title'=>'Warehouse & Depot',
                                        'desc'=>'Namas Logistics offers extensive warehousing capabilities in Indonesia with more than 20 hectare of closed storage and 160 hectare open yard depot facilities. Namas Logistics can manage all kinds of materials and special treatment commodity that require cold storage facility and even commodity such as pharmaceutical that requires clean room facility.',
                                    ],
                                    [
                                        'icon'=>'CARGO.png',
                                        'title'=>'Oversized Cargo',
                                        'desc'=>'Namas Logistics has all the proven experiences for oversized cargo handling. We stand for a personal approach, creative thinking and made impossible to be possible. For a custom sized approach and solution, we’ll be available and responsible for all your freight which does not fit within the frames of “regular transportation”. We welcome to any challenging task and will search for a suitable solution together with you.',
                                    ],
                                    
                                ];
                ?>

                <div class="row outers_list_freight_forwar">

                    <?php foreach ($dnt_freight as $key => $value): ?>
                        <div class="col-md-20">
                            <div class="box-content">
                                <div class="images">
                                    <img class="img img-fluid " src="<?php echo $this->assetBaseurl ?><?php echo $value['icon'] ?>" alt="">
                                </div>
                                <h4><?php echo $value['title'] ?></h4>
                                <p><?php echo $value['desc'] ?></p>
                            </div>
                            <div class="py-4"></div>
                        </div>
                    <?php endforeach ?>

                </div>
            </div>
        </div>
    </section>

    <section class="home-sec-2 insides_pg lines_ntopbottom">
        <div class="prelatife container py-5">
            <div class="row">
                <div class="col-md-5"></div>
                <div class="col-md-50">
                    <div class="block-content content-text freight_cont text-center">
                        <h2 class="custom_gold">NAMAS COVERAGE</h2>
                        <div class="py-2"></div>
                        <h3>Our network of agents covered all the strategic <br>trade ports & hubs - worldwide.</h3>
                        
                        <div class="full_maps"><img src="<?php echo $this->assetBaseurl ?>map-of-coverage.svg" alt="" class="img img-fluid"></div>
                    </div>
                    
                </div>
                <div class="col-md-5"></div>
            </div>
        </div>
    </section>
    <div class="py-4"></div>

    <section class="home-sec-2 insides_pg">
        <div class="prelatife container">
            <div class="row">
                <div class="col-md-35">
                    <div class="box-content px-4">
                        <div class="number">
                            <div class="images">
                                <img class="img img-fluid " src="<?php echo $this->assetBaseurl ?>02.png" alt="">
                            </div>
                            <h5>Namas EXPERTISE</h5>
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
    <div class="py-5"></div>
    <!-- <div class="py-2"></div> -->
    <?php echo $this->renderPartial('//layouts/_tops_footer_bcream', array()); ?>

    <?php echo $this->renderPartial('//layouts/_footer', array()); ?>
    <div class="clear"></div>
</section>

<style type="text/css">
    .lines_ntopbottom{
        border-top: 1px solid #eaeaea;
        border-bottom: 1px solid #eaeaea;
    }
    h2.custom_gold{
        font-size: 13px;
        font-weight: 700;
        color: #c89700;
    }
    .full_maps {
        position: relative;
        margin-top: -50px;
    }
</style>