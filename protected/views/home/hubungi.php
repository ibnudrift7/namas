<?php 
$cover_page = '';

if (isset($this->setting['contact_hero_image'])) {
  $cover_page = Yii::app()->baseUrl.ImageHelper::thumb(1920,562, '/images/static/'. $this->setting['contact_hero_image'] , array('method' => 'adaptiveResize', 'quality' => '90'));
}
?>

<section class="cover-insides">
    <div class="begrond">
        <div class="prelative container">
                <div class="teks">
                    <div class="row">
                        <div class="col-md-60">
                            <h1 class="teks-cover">Hubungi Kami</h1>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>

<section class="hubungi-sec-1">
    <div class="prelative container pt-5">
        <div class="container2 mx-auto pt-5">
            <div class="row">
                <div class="content mx-auto pt-3">
                    <p class="text-center">
                        <?php echo $this->setting['contact_content'] ?>
                    </p>
                    <img class="mx-auto text-center d-block pt-5 img img-fluid" src="<?php echo $this->assetBaseurl; ?>hubungi.jpg" alt="">
                    <p class="gallery mx-auto text-center pt-5">
                        GALLERY / TOKO BANJARMASIN
                    </p>
                    <p class="alamatdll mx-auto text-center">
                    <?php echo nl2br($this->setting['contact_content2']) ?>
                    </p>
                    <div class="google-map mx-auto text-center pb-4">
                        <p><a target="_blank" href="<?php echo $this->setting['contact1_links_map'] ?>">Lihat di google map</a></p>
                    </div>
                    <div class="py-4"></div>
                </div>
            </div>
        </div>
    </div>
</section>