 <!--== BODY INNER CONTAINER ==-->
 <div class="sb2-2">
     <!--== breadcrumbs ==-->
     <div class="sb2-2-2">
         <ul>
             <li><a href=""><i class="fa fa-home" aria-hidden="true"></i> Home</a>
             </li>
             <li class="active-bre"><a href=""> Guru</a>
             </li>
             <li class="page-back"><a href="<?= base_url('guru/add') ?>"><i aria-hidden=" true"></i>Tambah Data</a>
             </li>
         </ul>
     </div>

     <!--== User Details ==-->
     <div class="sb2-2-3">
         <div class="row">
             <div class="col-md-12">
                 <div class="box-inn-sp">
                     <div class="inn-title">
                         <h4><?php echo $title2; ?></h4>
                         <p>All about students like name, student id, phone, email, country, city and more</p>
                     </div>


                     <div class="tab-inn">
                         <?php               
                if ($this->session->flashdata('pesan')) {
                    echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                    echo $this->session->flashdata('pesan');
                    echo '</div>';
                }
                ?>
                         <div class="table-responsive table-desi">
                             <table class="table table-hover" id="myTable">
                                 <thead>
                                     <tr>
                                         <th>No</th>
                                         <th>NIP</th>
                                         <th>Nama Guru</th>
                                         <th>Tempat Lahir</th>
                                         <th>Tanggal Lahir</th>
                                         <th>Mata Pelajaran</th>
                                         <th class="text-center">Foto</th>
                                         <th class="text-center">Action</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php $no=1; foreach ($guru as $key => $value) { ?>
                                     <tr>
                                         <td><?= $no++; ?></td>
                                         <td>
                                             <?= $value->nip?></td>
                                         <td>
                                             <?= $value->nama_guru?></td>
                                         <td>
                                             <?= $value->tempat_lahir?></td>
                                         <td>
                                             <?= $value->tgl_lahir?></td>
                                         <td>
                                             <?= $value->mapel?></td>
                                         <td class="text-center">
                                             <img src="<?= base_url('assets/foto_guru/'.$value->foto) ?>"
                                                 width="120px"><br>
                                         </td>

                                         <td>

                                             <a href="<?= base_url('guru/edit/'.$value->id_guru) ?>"
                                                 class="ad-st-view">Edit</a>
                                             <a href="<?= base_url('guru/delete/'.$value->id_guru) ?>"
                                                 onclick="return confirm('Apakah data ini akan dihapus...?')"
                                                 class="ad-st-view">Delete
                                             </a>
                                         </td>
                                     </tr>
                                     <?php } ?>
                                 </tbody>
                             </table>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 </div>
 </div>