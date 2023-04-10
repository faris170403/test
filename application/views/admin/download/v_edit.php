<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href=""><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href=""> Download</a>
            </li>
            <li class="page-back"><a href="<?= base_url('download') ?>">Kembali</a>
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

                        <form action="<?=base_url('download/update')?>" method="post" enctype="multipart/form-data">
                            <table>
                                <div>
                                    <div class="input-field s12">
                                        <input type="text" value="<?=$download->ket_file?>" name="ket_file"
                                            data-ng-model="name" class="validate" required>
                                        <label>Keterangan</label>
                                    </div>
                                </div>

                                <div>
                                    <div class="file-field input-field">
                                        <div class="btn admin-upload-btn">
                                            <span>File</span>
                                            <input type="file" name="file" class="validate">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" name="file"
                                                placeholder="Upload course file">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <input type="hidden" name="id" value="<?=$download->id?>">
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