 <div class="search-top">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="search-form">
                     <form>
                         <div class="sf-type">
                             <div class="sf-input">
                                 <input type="text" placeholder="Search awards">
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

 <!--SECTION START-->
 <section>
     <div class="container com-sp pad-bot-70">
         <div class="row">
             <div class="cor about-sp">

                 <div class="ed-about-tit">
                     <div class="con-title">
                         <h2>Prestasi dan<span> Penghargaan</span></h2>
                         <p>Prestasi siswa SMAN Plus Provinsi Riau</p>
                     </div>
                 </div>
                 <?php foreach ($prestasi as $key => $value) { ?>
                 <div class="s18-age-event l-info-pack-days">
                     <ul>
                         <li>
                             <div class="age-eve-com age-eve-20">
                                 <img src="<?= base_url('assets/images/icon/awa/4.png') ?>" alt="">
                             </div>
                             <div class=" s17-eve-time">
                                 <div class="s17-eve-time-tim">
                                     <span><?= $value->tanggal ?> || <?= $value->medali ?></span>
                                 </div>

                                 <div class="s17-eve-time-msg">
                                     <h4><?= $value->deskripsi ?></h4>
                                     <h5><?= $value->nama_murid?></h5>
                                     <p>Selamat Atas Nama <?= $value->nama_murid?>. Meraih prestasi dengan
                                         mendapatkan
                                         medali
                                         yaitu <?= $value->medali ?>. Dengan penghargaan Kategori
                                         <?= $value->deskripsi?>.
                                     </p> <a href="course-details.html" class="aw-re-btn">Detail</a>
                                 </div>

                             </div>

                         </li>



                     </ul>
                 </div>
                 <?php } ?>
                 <div class="ed-about-sec1">
                     <div class="col-md-6"></div>
                     <div class="col-md-6"></div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!--SECTION END-->