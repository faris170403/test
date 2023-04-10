<!--== BODY INNER CONTAINER ==-->
<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> Prestasi Sekolah</a>
            </li>
            <li class="page-back"><a href="<?= base_url('prestasi/add/') ?>"><i aria-hidden=" true"></i>Tambah Data</a>
            </li>
            </li>
        </ul>
    </div>

    <!--== User Details ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4><?php echo $title2; ?></h4>
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
                                        <th>Nama Murid</th>
                                        <th>Bidang</th>
                                        <th>Medali</th>
                                        <th>Deksripsi</th>
                                        <th>Tanggal</th>
                                        <th class="text-center">Foto</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach ($prestasi as $key => $value) { ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $value->nama_murid ?></td>
                                        <td><?= $value->bidang ?></td>
                                        <td><?= $value->medali ?></td>
                                        <td><?= $value->deskripsi?></td>
                                        <td><?= $value->tanggal?></td>
                                        <td class="text-center">
                                            <img src="<?= base_url('assets/foto_prestasi/'.$value->foto) ?>"
                                                width="130px"><br>
                                        </td>
                                        <td class="text-center">

                                            <a href="<?= base_url('prestasi/edit/'.$value->id_prestasi) ?>"
                                                class="ad-st-view">Edit</a>
                                            <a href="<?= base_url('prestasi/delete/'.$value->id_prestasi) ?>"
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