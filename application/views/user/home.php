<section class="home-slider">
    <div class="slider-item" style="background-image: url(<?= base_url('assets/');?>images/bg_1.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                <div class="col-md-8 col-sm-12 text-center ftco-animate">
                    <span class="subheading">Welcome To</span>
                    <h1 class="mb-4">Sistem Pemetaan kedai kopi Kabupaten Batang</h1>
                    <p class="mb-4 mb-md-5">Sistem Informasi Pemetaan Lokasi Tempat Ngopi.</p>
                    <!-- <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p> -->
                </div>

            </div>
        </div>
    </div>

    <div class="slider-item" style="background-image: url(<?= base_url('assets/');?>images/bg_2.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                <div class="col-md-8 col-sm-12 text-center ftco-animate">
                    <span class="subheading"></span>
                    <h1 class="mb-4">Coffe Shop Mudah ditemui</h1>
                    <p class="mb-4 mb-md-5">Temukan Kedai Kopi Favorit Anda Melalui Website Pemetaan ini.</p>
                    <!-- <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p> -->
                </div>

            </div>
        </div>
    </div>

    <div class="slider-item" style="background-image: url(<?= base_url('assets/');?>images/bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                <div class="col-md-8 col-sm-12 text-center ftco-animate">
                    <span class="subheading"></span>
                    <h1 class="mb-4">Upadate Lokasi Kedai Terbaru</h1>
                    <p class="mb-4 mb-md-5">Dapatkan Informasi Mengenai Update terbaru Kedai Kopi yang Ada Di Kabupaten
                    Batang.</p>
                    <!-- <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p> -->
                </div>

            </div>
        </div>
    </div>
</section>

<section class="ftco-about d-md-flex">
    <div class="one-half img" style="background-image: url(<?= base_url('assets/');?>images/about.jpg);"></div>
    <div class="one-half ftco-animate">
        <div class="overlap">
            <div class="heading-section ftco-animate ">
                <span class="subheading">Discover</span>
                <h2 class="mb-4">filosofi kopi</h2>
            </div>
            <div>
                <p>Kopi adalah minuman hasil seduhan biji kopi yang telah disangrai dan dihaluskan menjadi bubuk. Kopi
                    merupakan salah satu komoditas di dunia yang dibudidayakan lebih dari 50 negara. Dua spesies pohon
                    kopi yang dikenal secara umum yaitu Kopi Robusta (Coffea canephora) dan Kopi Arabika (Coffea
                    arabica).
                </p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-appointment">
    <div class="overlay"></div>
    <div class="container-wrap">
        <div class="row no-gutters d-md-flex align-items-center">
            <div class="col-md-6 d-flex align-self-stretch">
                <div id="map"></div>
            </div>
            <div class="col-md-6 pr-md-5">
                <div class="heading-section text-md-center ftco-animate">

                    <h2 class="mb-4 m-2">Cari & Temukan</h2>
                    <section class="blog_area section-padding">
                        <div class="m-2">
                            <label>Kecamatan</label>
                            <select class="form-control" id="pilKec">
                                <option style="background-color: #000 !important;" value="">--Pilih Kecamatan--</option>
                                <?php 
                                $no=0;
                                foreach ($kecamatan as $key => $value) {
                                    ?>
                                    <option style="background-color: #000 !important;"
                                    value="<?php echo $value->id_kecamatan ?>"><?php echo $value->nama_kecamatan ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="m-2">
                            <label>kategori</label>
                            <select class="form-control" id="pilKategori">
                                <option style="background-color: #000 !important;" value="">--Pilih kategori--</option>
                                <option style="background-color: #000 !important;" value="1">Termurah</option>
                                <option style="background-color: #000 !important;" value="2">Terdekat</option>
                            </select>
                        </div>

                    </section>
                </div>
            </div>
        </div>
    </div>
    </section>


    <section class="ftco-section ftco-cart">
        <h3 class="text-center">Tabel Kecamatan dan Jumlah Caffe Di Kabupatan Batang</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="cart-list">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr class="text-center">
                                    <th>No</th>
                                    <!-- <th>&nbsp;</th> -->
                                    <th>Nama Kecamatan</th>
                                    <th>Jumlah Caffe</th>
                                <!-- <th>Quantity</th>
                                  <th>Total</th> -->
                              </tr>
                          </thead>
                          <?php 
                          $no=1;
                          foreach ($kecamatan as $kc) {
                            $idk = $kc->id_kecamatan;
                            ?>
                            <tbody>
                                <tr class="text-center">
                                    <td>
                                        <h3><?= $no++?></h3>
                                    </td>
                                    <td>
                                        <h3><?= $kc->nama_kecamatan?>
                                    </h3>
                                </td>

                                <td>
                                    <?php $queryJumlah = $this->db->query("SELECT count(id_cafe) as jumlah from cafe c join kelurahan k on k.id_kelurahan = c.id_kelurahan join kecamatan kc on kc.id_kecamatan = k.id_kecamatan where kc.id_kecamatan = $idk")->row_array(); ?>
                                    <h3><?php echo $queryJumlah['jumlah'] ?></h3>
                                </td>
                            </tr><!-- END TR-->

                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
</section>


<section class="ftco-counter ftco-bg-dark img" id="section-counter"
style="background-image: url(<?= base_url('assets/');?>images/bg_2.jpg);" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                            <strong class="number" data-number="<?=$cafe['jumlah_cafe']?>">0</strong>
                            <span>Coffe Terdaftar</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                            <strong class="number" data-number="<?=$menu['jumlah_menu']?>">0</strong>
                            <span>Total Menu</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                            <strong class="number" data-number="<?=$kec['jumlah_kecamatan']?>">0</strong>
                            <span>Total Kecamtan</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                            <strong class="number" data-number="<?=$kelurahan['jumlah_kelurahan']?>">0</strong>
                            <span>Total Kelurahan</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>