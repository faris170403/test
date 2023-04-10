<!--== BODY INNER CONTAINER ==-->
<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> Organisasi</a>
            </li>
            <li class="page-back"><a href="#!" class="ad-st-view" data-toggle="modal" data-target="#modal1">Tambah
                    Data</a>
            </li>
        </ul>
    </div>

    <!--== User Details ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Organisasi</h4>
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
                            <table class="table table-hover" id="myTable" height="400px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th width="160px">Nama Organisasi</th>
                                        <th>Deksripsi</th>
                                        <th>Lambang</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach ($organisasi as $key => $value) { ?>
                                    <tr>
                                        <td>
                                            <?= $no++; ?></td>
                                        <td><?= $value->nama_organisasi ?></td>
                                        <td><?= $value->deskripsi?></td>
                                        <td class="text-center">
                                            <img src="<?= base_url('assets/lambang/'.$value->foto) ?>"
                                                width="120px"><br>
                                        </td>
                                        <td>
                                            <button class="ad-st-view" data-toggle="modal"
                                                data-target="#edit<?= $value->id?>">Edit</button>
                                            <a href="<?= base_url('organisasi/delete/'.$value->id) ?>"
                                                onclick="return confirm('Apakah Data ini akan dihapus?')" class="
                                                ad-st-view">Delete
                                            </a>

                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Modal ADD-->
        <section>
            <div id="modal1" class="modal fade" role="dialog">
                <div class="log-in-pop">
                    <div class="log-in-pop-left">
                        <h1>Organisasi</h1>
                        <p>Organisasi sekolah adalah sistem yang bergerak dan berperan
                            dalam merumuskan tujuan
                            pendewasaan manusia sebagai mahluk sosial agar mampu
                            berinteraksi dengan lingkungan.</h4>

                    </div>
                    <div class="log-in-pop-right">
                        <a href="<?= base_url('home') ?>" class=" pop-close" data-dismiss="modal"><img
                                src="<?= base_url() ?>assets/images/cancel.png" alt="">
                        </a>
                        <h5>Tambah Data Organisasi</h5>
                        <form method="post" action="<?= base_url('organisasi/create') ?>" enctype="multipart/form-data"
                            class=" s12">
                            <form class="s12">
                                <div>
                                    <div class="input-field s12">
                                        <input type="text" name="nama_organisasi" data-ng-model="name" class="validate">
                                        <label>Nama Organisasi</label>
                                    </div>
                                </div>
                                <div>
                                    <div class="input-field s12">
                                        <textarea rows="5" cols="50" name="deskripsi" data-ng-model="name"
                                            class="validate"></textarea>
                                        <label>Deskripsi</label>

                                    </div>
                                </div>
                                <div>
                                    <div class="file-field input-field">
                                        <div class="btn admin-upload-btn">
                                            <span>File</span>
                                            <input type="file" name="foto" class="validate" required>
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" name="foto"
                                                placeholder="Upload course banner image">
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="input-field s4">
                                        <input type="submit" value="Simpan" class="waves-effect waves-light log-in-btn">
                                    </div>
                                </div>


                            </form>
                    </div>
                </div>
            </div>
    </div>

    <!--Modal Edit-->
    <?php foreach ($organisasi as $key => $value) { ?>
    <section>
        <div id="edit<?= $value->id?>" class="modal fade" role="dialog">
            <div class="log-in-pop">
                <div class="log-in-pop-left">
                    <h1>Organisasi</h1>
                    <p>Organisasi sekolah adalah sistem yang bergerak dan berperan dalam merumuskan
                        tujuan
                        pendewasaan manusia sebagai mahluk sosial agar mampu berinteraksi dengan
                        lingkungan.</h4>

                </div>
                <div class="log-in-pop-right">
                    <a href="<?= base_url('home') ?>" class=" pop-close" data-dismiss="modal"><img
                            src="<?= base_url() ?>assets/images/cancel.png" alt="">
                    </a>
                    <h5>Edit Data Organisasi</h5>
                    <form method="post" action="<?= base_url('organisasi/update') ?>" enctype="multipart/form-data"
                        class=" s12">
                        <form class="s12">
                            <div>
                                <div class="input-field s12">
                                    <input type="text" name="nama_organisasi" value="<?= $value->nama_organisasi ?>"
                                        data-ng-model=" name" class="validate">
                                    <label>Nama Organisasi</label>
                                </div>
                            </div>
                            <div>
                                <div class="input-field s12">
                                    <textarea name="deskripsi" value="" data-ng-model=" name"
                                        class="validate"><?= $value->deskripsi?></textarea>
                                    <label>Deskripsi</label>

                                </div>
                            </div>

                            <img src="<?= base_url('assets/lambang/'.$value->foto)?>" width="150">


                            <!-- </div> -->
                            <div>
                                <div class="file-field input-field">
                                    <div class="btn admin-upload-btn">
                                        <span>File</span>
                                        <input type="file" name="foto" class="validate">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" name="foto"
                                            placeholder="Upload course banner image">
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="input-field s4">
                                    <input type="hidden" name="id" value="<?=$value->id?>">
                                    <input type="submit" class="waves-effect waves-light log-in-btn" value="Submit">
                                </div>
                            </div>


                        </form>
                </div>
            </div>
        </div>
</div>
<?php } ?>