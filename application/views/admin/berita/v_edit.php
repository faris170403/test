<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href=""><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href=""> Berita</a>
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
                        <h4>Edit Data Berita</h4>
                        <p>Here you can edit your website basic details URL, Phone, Email, Address, User and password
                            and more</p>
                    </div>
                    <div class="tab-inn">

                        <form action="<?=base_url('berita/update')?>" method="post" enctype="multipart/form-data">
                            <table>
                                <div>
                                    <div class="input-field s12">
                                        <input type="text" value="<?=$berita->judul_berita?>" name="judul_berita"
                                            data-ng-model="name" class="validate" required>

                                    </div>
                                </div>

                                <div>
                                    <div class="input-field s6">
                                        <textarea id="content" name="isi_berita"
                                            required><?=$berita->isi_berita?></textarea>

                                    </div>
                                </div>


                                <div>
                                    <img src="<?= base_url('assets/foto_berita/'.$berita->foto)?>" width="100">

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
                                    <input type="hidden" name="id" value="<?=$berita->id_berita?>">
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
    <script src="<?= base_url() ?>assets/ckeditor/ckeditor.js">
    </script>
    <script>
    CKEDITOR.replace('content');
    CKEDITOR.replace('content2');
    </script>