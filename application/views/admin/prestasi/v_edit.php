<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href=""><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href=""> Pretasi</a>
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

                        <form action="<?=base_url('prestasi/update')?>" method="post" enctype="multipart/form-data">
                            <table>
                                <div>
                                    <div class="input-field s12">
                                        <input type="text" value="<?=$prestasi->nama_murid?>" name="nama_murid"
                                            data-ng-model="name" class="validate" required>
                                        <label>Nama Murid</label>
                                    </div>
                                </div>
                                <div>
                                    <div class="input-field s12">
                                        <input type="text" value="<?=$prestasi->bidang?>" name="bidang"
                                            data-ng-model="name" class="validate" required>
                                        <label>Bidang</label>
                                    </div>
                                </div>
                                <div>
                                    <div class="input-field s12">
                                        <input type="text" value="<?=$prestasi->medali?>" name="medali"
                                            data-ng-model="name" class="validate" required>
                                        <label>Medali</label>
                                    </div>
                                </div>
                                <div>
                                    <div class="input-field s12">
                                        <input type="text" value="<?=$prestasi->deskripsi?>" name="deskripsi"
                                            data-ng-model="name" class="validate" required>
                                        <label>Deskripsi</label>
                                    </div>
                                </div>
                                <div>
                                    <div class="input-field s12">
                                        <input type="date" value="<?=$prestasi->tanggal?>" name="tanggal"
                                            data-ng-model="name" class="validate" required>

                                    </div>
                                </div>
                                <div>
                                    <img src="<?= base_url('assets/foto_prestasi/'.$prestasi->foto)?>" width="15%">

                                </div>
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
                                    <input type="hidden" name="id" value="<?=$prestasi->id_prestasi?>">
                                    <div class="input-field s12">
                                        <input type="submit" class="waves-effect waves-light log-in-btn" value="Submit">
                                    </div>
                                </div>

                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>