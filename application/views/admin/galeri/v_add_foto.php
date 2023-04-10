<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> Galeri</a>
            </li>
            <li class="page-back"><a href="<?= base_url('galeri') ?>">Kembali</a>
            </li>
        </ul>
    </div>

    <!--== User Details ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp admin-form">
                    <div class="inn-title">
                        <h4><?php echo $title2; ?></h4>
                        <p>Here you can edit your website basic details URL, Phone, Email, Address, User and password
                            and more</p>
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
                        <div class="db-2">
                            <form method="post" action="<?= base_url('galeri/add_foto/'.$galeri->id_galeri) ?>"
                                enctype="multipart/form-data" class=" s12">

                                <div>
                                    <div class="input-field col s6">
                                        <input type="text" name="keterangan" data-ng-model="name" class="validate"
                                            required>
                                        <label>Keterangan</label>
                                    </div>
                                </div>

                                <div>
                                    <div class="file-field input-field col s6">
                                        <div class="btn admin-upload-btn">
                                            <span>File</span>
                                            <input type="file" name="foto" class="validate" required>
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" name="foto"
                                                placeholder="Upload Foto">
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <br>
                                    <div class="input-field s12">
                                        <br>
                                        <br>
                                        <input type="submit" class="waves-effect waves-light log-in-btn" value="Simpan">
                                    </div>
                                </div>
                                <hr>

                                <?php foreach ($foto as $key => $value) {?>
                                <div>
                                    <div class="col-sm-2 text-center">
                                        <strong><?= $value->keterangan ?>
                                        </strong>
                                        <br>

                                        <img src="<?= base_url('assets/foto/'.$value->foto)?>" width="125px"
                                            height="80px">
                                        <p>
                                            <hr>
                                            <a href=" <?= base_url('galeri/delete_foto/'.$value->id_galeri.'/'.$value->id_foto) ?>"
                                                class="ad-st-view" style="font-size:15px;">
                                                <i class="fa fa-trash-o" style="font-size:15px;color:white"></i></a>

                                    </div>
                                </div>
                                <?php }?>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>