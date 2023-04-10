<!--== BODY INNER CONTAINER ==-->
<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> Galeri</a>
            </li>
            <li class="page-back"><a href="<?= base_url('galeri/add') ?>"><i aria-hidden=" true"></i>Tambah Data</a>
            </li>
            <!-- <li class="page-back"><a href="<?= base_url('galeri/add') ?>" class="ad-st-view" data-toggle="modal" data-target="#modal1">Tambah
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
                        <h4>Detail Galeri</h4>
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
                                        <th>Nama Galeri</th>
                                        <th class="text-center">Sampul</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach ($galeri as $key => $value) { ?>
                                    <tr>
                                        <td><?= $no++; ?></td>

                                        <td>
                                            <?= $value->nama_galeri?></td>

                                        <td class="text-center">
                                            <img src="<?= base_url('assets/sampul/'.$value->sampul) ?>"
                                                width="130px"><br>
                                            <br>
                                            <?= $value->jml_foto?>
                                            Foto</i>
                                            <br>
                                            <a href=" <?= base_url('galeri/add_foto/'.$value->id_galeri) ?>"
                                                class="ad-st-view">Tambah Foto</a>
                                        </td>

                                        <td class="text-center">
                                            <a href=" <?= base_url('galeri/edit/'.$value->id_galeri) ?>"
                                                class="ad-st-view">Edit</a>
                                            <a href="<?= base_url('galeri/delete/'.$value->id_galeri) ?>"
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