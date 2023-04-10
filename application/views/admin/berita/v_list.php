<!--== BODY INNER CONTAINER ==-->
<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> Berita</a>
            </li>
            <li class="page-back"><a href="<?= base_url('berita/add') ?>"><i aria-hidden=" true"></i>Tambah Data</a>
             </li>
            <!-- <li class="page-back"><a href="<?= base_url('berita/add') ?>" class="ad-st-view" data-toggle="modal" data-target="#modal1">Tambah
                    Foto</a>
            </li> -->


            </ul>
</div>

<!--== User Details ==-->
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4><?= $title2 ?></h4>
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
                                    <th >No</th>
                                    <th class="text-center">Judul Berita</th>
                                    <th class="text-center">Slug Berita</th>
                                    <th class="text-center">Tanggal</th>
                                    <th class="text-center">Gambar</th>
                                    <th class="text-center">Nama User</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; foreach ($berita as $key => $value) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td class="text-center"><?= $value->judul_berita ?></td>
                                        <td class="text-center"><?= $value->slug_berita ?></td>
                                        <td class="text-center"><?= $value->tgl_berita ?></td>
                                        <td class="text-center">
                                            <img src="<?= base_url('assets/foto_berita/'.$value->foto) ?>" width="120px"><br>
                                        </td>
                                        <td class="text-center"><?= $value->nama_user ?></td>
                                        <td class="text-center">
                                            <a href="<?= base_url('berita/edit/'.$value->id_berita) ?>" class="ad-st-view">Edit</a>
                                            <a href="<?= base_url('berita/delete/'.$value->id_berita) ?>" onclick="return confirm('Apakah data ini akan dihapus...?')" class="ad-st-view">Delete</a>
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
