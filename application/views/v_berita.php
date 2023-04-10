     <div class="search-top">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="search-form">
                         <form>
                             <div class="sf-type">
                                 <div class="sf-input">
                                     <input type="text" placeholder="Search News">
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

     <section>
         <div class="udb-sec udb-cour-stat text-center">
             <h2><img src="images/icon/db3.png" alt="" /> Berita</h2>



             <div>
                 <div class="row">
                     <div class="cor about-sp">

                         <div class="ed-rsear">
                             <div class="ed-rsear-in">
                                 <ul>
                                     <?php foreach ($berita as $key => $value) { ?>
                                     <li>
                                         <div class="ed-rese-grid">
                                             <div class="ed-rsear-img ed-faci-full-top">
                                                 <img src="<?= base_url('assets/foto_berita/'.$value->foto) ?>" alt="">
                                             </div>
                                             <div class=" ed-rsear-dec ed-faci-full-bot">
                                                 <h4><?= $value->judul_berita ?></h4>
                                                 <p><?= $value->tgl_berita ?></p>
                                                 <a href="facilities-detail.html" class="read-line-btn">Baca
                                                     Selebihnya</a>
                                             </div>
                                         </div>
                                     </li>
                                     <?php } ?>

                                 </ul>
                             </div>

                         </div>


                     </div>
                 </div>
             </div>
         </div>
         </div>
     </section>
     <!--SECTION END-->