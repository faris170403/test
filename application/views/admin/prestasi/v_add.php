<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> prestasi</a>
            </li>
            <li class="page-back"><a href="<?= base_url('prestasi') ?>">Kembali</a>
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
                        <form action="<?=base_url('prestasi/create')?>" method="post" enctype="multipart/form-data">

                            <div>
                                <div class="input-field s12">
                                    <input type="text" name="nama_murid" data-ng-model="name" class="validate" required>
                                    <label>Nama Murid</label>
                                </div>
                            </div>
                            <div>
                                <div class="input-field s12">
                                    <input type="text" name="bidang" data-ng-model="name" class="validate" required>
                                    <label>Bidang</label>
                                </div>
                            </div>
                            <div>
                                <div class="input-field s12">
                                    <input type="text" name="medali" data-ng-model="name" class="validate" required>
                                    <label>Medali</label>
                                </div>
                            </div>
                            <div>
                                <div class="input-field s12">
                                    <input type="text" name="deskripsi" data-ng-model="name" class="validate" required>
                                    <label>Deskripsi</label>
                                </div>
                            </div>

                            <div>
                                <div class="input-field s12">
                                    <input type="date" name="tanggal" data-ng-model="name" class="validate" required>

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