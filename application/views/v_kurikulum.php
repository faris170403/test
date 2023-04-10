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

     <!--SECTION START-->
     <section>
         <div class="container com-sp">
             <div class="row">
                 <div class="cor about-sp">
                     <div class="ed-about-tit">
                         <div class="con-title">
                             <h2>Kurikulum<span> </span></h2>
                             <p>Kurikulum Pembelajaran SMAN Plus Provinsi Riau</p>

                         </div>
                         <div>
                             <div class="ho-event pg-eve-main pg-blog">
                                 <ul>
                                     <li>
                                         <div class="ho-ev-date pg-eve-date"><span>08</span><span>April 2023</span>
                                         </div>
                                         <div class="pg-eve-desc pg-blog-desc">

                                             <?php foreach ($kurikulum as $key => $value) { ?>
                                             <img src="<?= base_url() ?>assets/images/sl.jpg" alt="">


                                             <p><?= $value->deskripsi ?>
                                             </p>


                                         </div>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                         <?php } ?>

                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!--SECTION END-->