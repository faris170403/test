<!--== BODY INNER CONTAINER ==-->
<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> Download Area</a>
            </li>
            <li class="page-back"><a href="<?= base_url('download/add/') ?>"><i aria-hidden=" true"></i>Tambah Data</a>
            </li>
        </ul>
    </div>

    <!--== User Details ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Download Area</h4>
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
                            <table class="table table-hover" id="myTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Keterangan</th>
                                        <th>File</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach ($download as $key => $value) { ?>
                                    <tr>
                                        <td>
                                            <?= $no++; ?></td>
                                        <td><?= $value->ket_file ?></td>
                                        <td><?= $value->file?></td>
                                        <td class="text-center">

                                            <a href="<?= base_url('download/edit/'.$value->id) ?>"
                                                class="ad-st-view">Edit</a>
                                            <a href="<?= base_url('download/delete/'.$value->id) ?>"
                                                onclick="return confirm('Apakah data ini akan dihapus...?')"
                                                class="ad-st-view">Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>