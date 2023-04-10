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


                    <form method="post" action="<?= base_url('galeri/create') ?>" enctype="multipart/form-data" class=" s12">

                            <div>
                                <div class="input-field s12">
                                    <input type="text" name="nama_galeri" data-ng-model="name" class="validate" required>
                                    <label>Nama galeri</label>
                                </div>
                            </div>
                            
                            <div>
                                <div class="file-field input-field">
                                    <div class="btn admin-upload-btn">
                                        <span>File</span>
                                        <input type="file" name="sampul" class="validate" required>
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" name="sampul"
                                            placeholder="Upload Sampul">
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