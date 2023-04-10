<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> Guru</a>
            </li>
            <li class="page-back"><a href="<?= base_url('guru') ?>">Kembali</a>
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


                        <form method="post" action="<?= base_url('guru/update') ?>" enctype="multipart/form-data"
                            class=" s12">

                            <div>
                                <div class="input-field s12">
                                    <input type="number" value="<?= $guru->nip ?>" name="nip" data-ng-model="name"
                                        class="validate" required>
                                    <label>NIP</label>
                                </div>
                            </div>
                            <div>
                                <div class="input-field s12">
                                    <input type="text" name="nama_guru" value="<?= $guru->nama_guru ?>" class="validate"
                                        required>
                                    <label>Nama Guru</label>
                                </div>
                            </div>
                            <div>
                                <div class="input-field s6">
                                    <input type="text" name="tempat_lahir" value="<?= $guru->tempat_lahir ?>"
                                        class="validate" required>
                                    <label>Tempat Lahir</label>
                                </div>
                            </div>
                            <div>
                                <div class="input-field s6">
                                    <input type="text" name="tgl_lahir" value="<?= $guru->tgl_lahir ?>" class="validate"
                                        required>
                                </div>
                            </div>
                            <div>
                                <div class="input-field s6">
                                    <select type="text" name="mapel" class="validate" required>
                                        <option value="<?= $guru->mapel ?>" disabled selected><?= $guru->mapel ?>
                                        </option>
                                        <option value="Fisika" <?= ($guru->mapel == 'Fisika') ? 'selected' : '' ?>>
                                            Fisika</option>
                                        <option value="Kimia" <?= ($guru->mapel == 'Kimia') ? 'selected' : '' ?>>Kimia
                                        </option>
                                        <option value="Biologi" <?= ($guru->mapel == 'Biologi') ? 'selected' : '' ?>>
                                            Biologi</option>
                                        <option value="Matematika"
                                            <?= ($guru->mapel == 'Matematika') ? 'selected' : '' ?>>Matematika</option>
                                        <option value="B.Indonesia"
                                            <?= ($guru->mapel == 'B.Indonesia') ? 'selected' : '' ?>>B.Indonesia
                                        </option>
                                        <option value="B.Inggris" <?= ($guru->mapel == 'B.Inggris') ? 'selected': '' ?>>
                                            B.Inggris</option>
                                        <option value="Agama" <?= ($guru->mapel == 'Agama') ? 'selected' : '' ?>>Agama
                                        </option>
                                        <option value="PPKN" <?= ($guru->mapel == 'PPKN') ? 'selected': '' ?>>PPKN
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <div class="input-field s6">
                                    <select name="pendidikan">
                                        <option value="<?= $guru->pendidikan ?>" disabled selected>Pendidikan</option>
                                        <option value="D3" <?= ($guru->pendidikan == 'D3') ? 'selected' : '' ?>>D3
                                        </option>
                                        <option value="S1" <?= ($guru->pendidikan == 'S1') ? 'selected' : '' ?>>S1
                                        </option>
                                        <option value="S2" <?= ($guru->pendidikan == 'S2') ? 'selected' : '' ?>>S2
                                        </option>
                                        <option value="S3" <?= ($guru->pendidikan == 'S3') ? 'selected' : '' ?>>S3
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <img src="<?= base_url('assets/foto_guru/'.$guru->foto)?>" width="150">
                                <img src="" alt="">
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
                                <input type="hidden" name="id_guru" value="<?=$guru->id_guru?>">
                                <div class="input-field s12">
                                    <input type="submit" class="waves-effect waves-light log-in-btn" value="Submit">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>