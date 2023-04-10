     <div class="search-top">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="search-form">
                         <form>
                             <div class="sf-type">
                                 <div class="sf-input">
                                     <input type="text" placeholder="Search File">
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
     <div class="udb-sec udb-cour-stat text-center">
         <h2><img src="images/icon/db3.png" alt="" /> Download Area</h2>

         <div class="pro-con-table">
             <table class="bordered responsive-table">
                 <thead>
                     <tr>
                         <th>No</th>
                         <th>Keterangan File</th>
                         <th>File</th>
                         <th>Download</th>
                     </tr>
                 </thead>
                 <tbody>
                     <?php $no=1; foreach ($download as $key => $value) { ?>
                     <tr>
                         <td><?= $no++; ?></td>
                         <td><?= $value->ket_file ?></td>
                         <td><?= $value->file?></td>
                         <td><a href="<?= base_url('file/'.$value->file); ?>" class="ad-st-view">Download
                                 File</a></td>
                     </tr>
                     <?php } ?>
             </table>
         </div>
     </div>