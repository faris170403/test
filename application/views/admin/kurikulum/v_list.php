<!--== BODY INNER CONTAINER ==-->
<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#">Kurikulum</a>
            </li>
            <li class="page-back"><a href="<?= base_url('kurikulum') ?>">Kembali</a>
            </li>
        </ul>
    </div>

    <!--== User Details ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp admin-form">
                    <div class="inn-title">
                        <h4>Kurikulum</h4>
                        <p>Here you can edit your website basic details URL, Phone, Email, Address, User and
                            password and more</p>
                    </div>
                    <?php
                
              echo validation_errors('<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>');
                 
                ?>
                    <div class="tab-inn">
                        <?php foreach ($kurikulum as $key => $kurikulum) { ?>
                        <form action="<?=base_url('kurikulum/update')?>" method="post" enctype="multipart/form-data">
                            <table>

                                <div>
                                    <strong>Deksripsi</strong>
                                    <div class="input-field s6">
                                        <textarea id="content2" name="deskripsi"
                                            required><?=$kurikulum->deskripsi?></textarea>

                                    </div>
                                </div>
                                <br>



                                <div>
                                    <input type="hidden" name="id" value="<?=$kurikulum->id?>">
                                    <div class="input-field s12">
                                        <input type="submit" class="waves-effect waves-light log-in-btn" value="Submit">
                                    </div>
                                </div>

                            </table>
                        </form>

                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
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