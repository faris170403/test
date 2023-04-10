<div class="search-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="search-form">
                    <form>
                        <div class="sf-type">
                            <div class="sf-input">
                                <input type="text" placeholder="Search teacher">
                            </div>
                            <div class="sf-list">

                            </div>
                        </div>
                        <div class="sf-submit">
                            <input type="submit" value="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--END HEADER SECTION-->
<!-- POPULAR COURSES -->
<section class="pop-cour">
    <div class="container com-sp pad-bot-70">
        <div class="row">
            <div class="con-title">
                <h2>Data <span>Guru</span></h2>
                <p>Profil Guru SMAN Plus Riau </p>

            </div>
        </div>
        <div class="row">
            <?php foreach ($guru as $key => $value) { ?>
            <div class="col-md-6">
                <div>
                    <!--POPULAR COURSES-->
                    <div class="home-top-cour">
                        <!--POPULAR COURSES IMAGE-->
                        <div class="col-md-3"> <img src="<?= base_url('assets/foto_guru/'.$value->foto) ?>" alt="">
                        </div>
                        <!--POPULAR COURSES: CONTENT-->
                        <div class="col-md-9 home-top-cour-desc">
                            <a href="course-details.html">
                                <h3><?= $value->nama_guru ?></h3>
                            </a>
                            <h4>Mata Pelajaran : <?= $value->mapel ?></h4>
                            <p><?= $value->tempat_lahir ?> , <?= $value->tgl_lahir ?> <span
                                    class="home-top-cour-rat">NIP | <?= $value->nip ?></span>
                            <div class="hom-list-share">
                                <ul>
                                    <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i>
                                            Data Detail</a> </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>
</section>