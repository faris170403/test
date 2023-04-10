<section>
    <div class="head-2">
        <div class="container">
            <div class="head-2-inn head-2-inn-padd-top">
                <h1>Photo Gallery</h1>
                <p></p>
                <!-- <div class="event-head-sub">
                    <ul>
                        <li>Photos: College</li>
                        <li>Total photos: 500</li>
                        <li>Location: Illunois</li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
</section>

<!--SECTION START-->
<section>
    <div class="ed-res-bg">
        <div class="container com-sp pad-bot-70 ed-res-bg">
            <div class="row">

                <div class="cor about-sp h-gal ed-pho-gal">

                    <ul>
                        <?php foreach ($galeri as $key => $value) { ?>
                        <li><img class="materialboxed" data-caption=<?= $value->nama_galeri ?>
                                src="<?= base_url('assets/sampul/'.$value->sampul) ?>" alt="">
                        </li>
                        <?php } ?>
                    </ul>

                </div>

            </div>
        </div>
    </div>
</section>
<!--SECTION END-->