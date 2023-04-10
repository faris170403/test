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


                    <form method="post" action="<?= base_url('guru/create') ?>" enctype="multipart/form-data" class=" s12">

                            <div>
                                <div class="input-field s12">
                                    <input type="number" name="nip" data-ng-model="name" class="validate" required>
                                    <label>NIP</label>
                                </div>
                            </div>
                            <div>
                                <div class="input-field s12">
                                    <input type="text" name="nama_guru" data-ng-model="name" class="validate" required>
                                    <label>Nama Guru</label>
                                </div>
                            </div>
                            <div>
                                <div class="input-field s6">
                                    <input type="text" name="tempat_lahir" data-ng-model="name" class="validate"
                                        required>
                                    <label>Tempat Lahir</label>
                                </div>
                            </div>
                            <div>
                                <div class="input-field s6">
                                    <input type="date" name="tgl_lahir" data-ng-model="name" class="validate" required>
                                </div>
                            </div>
                            <div>
                                <div class="input-field s6">
                                    <select type="text" name="mapel" data-ng-model="name" class="validate" required>
                                        <option value="" disabled selected>Pilih Mata Pelajaran</option>
                                        <option value=" Fisika">Fisika</option>
                                        <option value="Kimia">Kimia</option>
                                        <option value="Biologi">Biologi</option>
                                        <option value="Matematika">Matematika</option>
                                        <option value="B.Indonesia">B.Indonesia</option>
                                        <option value="B.Inggris">B.Inggris</option>
                                        <option value="Agama">Agama</option>
                                        <option value="PPKN">PPKN</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <div class="input-field s6" >
                                    <select name="pendidikan">
                                        <option value="" disabled selected>Pendidikan</option>
                                        <option value="D3">D3</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
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