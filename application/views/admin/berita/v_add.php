<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> Berita</a>
            </li>
            <li class="page-back"><a href="<?= base_url('berita') ?>">Kembali</a>
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
                    <?php 

                    if (isset($error_upload)) {
                        # code...
                        echo '<div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
                        
                    

                    echo validation_errors('<div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>');
                    }
                    ?>
                    <div class="tab-inn">


                        <form method="post" action="<?= base_url('berita/create') ?>" enctype="multipart/form-data"
                            class=" s12">

                            <div>
                                <div class="input-field s12">
                                    <input type="text" name="judul_berita" data-ng-model="name" class="validate"
                                        required>
                                    <label>Judul Berita</label>
                                </div>
                            </div>

                            <div>
                                <div class="input-field s6">
                                    <textarea id="content" name="isi_berita" class="validate" required></textarea>

                                </div>
                            </div>

                            <div>
                                <div class="file-field input-field">
                                    <div class="btn admin-upload-btn">
                                        <span>File</span>
                                        <input type="file" name="foto" class="validate" required>
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" name="gambar_berita"
                                            placeholder="Upload course banner image">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="input-field s12">
                                    <input type="submit" class="waves-effect waves-light log-in-btn" value="Simpan">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url() ?>assets/ckeditor/ckeditor.js">
    </script>
    <script>
    CKEDITOR.replace('content');
    CKEDITOR.replace('content2');
    </script>