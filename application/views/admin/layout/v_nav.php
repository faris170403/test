  <!--== BODY CONTNAINER ==-->
  <div class="container-fluid sb2">
      <div class="row">
          <div class="sb2-1">
              <!--== USER INFO ==-->
              <div class="sb2-12">
                  <ul>
                      <li><img src="<?= base_url() ?>assets/images/dancer.png" alt="">
                      </li>
                      <li>
                          <h5> <?= $this->session->userdata('nama_user'); ?> <span> Admin</span></h5>
                      </li>
                      <li></li>
                  </ul>
              </div>
              <!--== LEFT MENU ==-->
              <div class=" sb2-13">
                  <ul class="collapsible" data-collapsible="accordion">
                      <li><a href="<?= base_url('admin') ?>" class="collapsible-header"><i class="fa fa-bar-chart"
                                  aria-hidden="true"></i>
                              Beranda</a>
                      </li>

                      <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                                  aria-hidden="true"></i> Profil</a>
                          <div class="collapsible-body left-sub-menu">
                              <ul>
                                  <li><a href="<?= base_url('visimisi') ?>">Visi Misi</a>
                                  </li>
                                  <li><a href="<?= base_url('kurikulum') ?>">Kurikulum</a>
                                  </li>
                                  <li><a href="<?= base_url('organisasi') ?>">Organisasi</a>
                                  </li>

                              </ul>
                          </div>
                      </li>

                      <li><a href="<?= base_url('prestasi') ?>" class="collapsible-header"><i class="fa fa-bookmark-o"
                                  aria-hidden="true"></i>Prestasi Sekolah</a>

                      </li>
                      <li><a href="<?= base_url('galeri') ?>" class="collapsible-header"><i class="fa fa-image"
                                  aria-hidden="true"></i> Galeri</a>

                      </li>
                      <li><a href="<?= base_url('berita') ?>" class="collapsible-header"><i class="fa fa-calendar"
                                  aria-hidden="true"></i> Berita</a>

                      </li>
                      <li><a href="<?= base_url('guru') ?>" class="collapsible-header"><i class="fa fa-users"
                                  aria-hidden="true"></i> Guru</a>

                      </li>
                      <li><a href="<?= base_url('elektronik') ?>" class="collapsible-header"><i class="fa fa-cogs"
                                  aria-hidden="true"></i>Elektronik</a>

                      </li>
                      <li><a href="<?= base_url('download') ?>" class="collapsible-header"><i class="fa fa-bullhorn"
                                  aria-hidden="true"></i> Download Area</a>

                      </li>





                      <li><a href="<?= base_url('login/logout') ?>" class="collapsible-header"><i class="fa fa-sign-out"
                                  aria-hidden="true"></i>
                              Logout</a>
                          <div class="collapsible-body left-sub-menu">

                      </li>
                  </ul>
              </div>

          </div>