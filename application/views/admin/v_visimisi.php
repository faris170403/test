<!--== BODY INNER CONTAINER ==-->
<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#">Visi Misi</a>
            </li>
            <li class="page-back"><a href="index-2.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
            </li>
        </ul>
    </div>


    <!--== User Details ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp admin-form">
                    <div class="inn-title">
                        <h4>Visi Misi</h4>
                        <p>Here you can edit your website basic details URL, Phone, Email, Address, User and
                            password and more</p>
                    </div>

                    <?php echo form_open(''); ?>
                    <div class="tab-inn">

                        <form method="post" action="<?= base_url('visimisi/create') ?>" enctype="multipart/form-data"
                            class=" s12">

                            <div class="form-group">
                            </div>
                            <textarea id="visi" name="visi" required></textarea>
                            <br>
                            <input type="submit" class="waves-effect waves-light log-in-btn" value="Simpan">


                        </form>
                        <?php echo form_close(); ?>
                    </div>

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
CKEDITOR.replace('visi');
CKEDITOR.replace('content2');
</script>