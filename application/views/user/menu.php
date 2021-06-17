   <style type="text/css">
   .dis{
    display: none;
    transition: all 0.3s ease;
  }
</style>

<section class="home-slider owl-carousel">

 <div class="slider-item" style="background-image: url(<?= base_url('assets/') ?>images/bg_3.jpg);"
   data-stellar-background-ratio="0.5">
   <div class="overlay"></div>
   <div class="container">
     <div class="row slider-text justify-content-center align-items-center">

       <div class="col-md-7 col-sm-12 text-center ftco-animate">
         <h1 class="mb-3 mt-5 bread">
           <?php echo $cafe['nama_cafe']?>
         </h1>
         <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Menu</span>
         </p>
       </div>

     </div>
   </div>
 </div>
</section>

<section class="ftco-intro">
 <div class="container-wrap">
   <div class="wrap d-md-flex align-items-xl-end">
     <div class="info">
       <div class="row">
         <div class="col-md-4 d-flex ftco-animate">
           <div class="icon"><span class="icon-phone"></span></div>
           <div class="text">
             <h3><?php echo $cafe['no_telp'] ?></h3>
             <p><?php echo $cafe['deskripsi'] ?></p>
           </div>
         </div>
         <div class="col-md-4 d-flex ftco-animate">
           <div class="icon"><span class="icon-my_location"></span></div>
           <div class="text">
             <h3><?php echo $cafe['nama_cafe'] ?></h3>
             <p> <?php echo $cafe['rt'] . '/' . $cafe['rw'] ?> <?php echo 'desa '. $cafe['nama_kelurahan'] .' Kec '. $cafe['nama_kecamatan'] ?></p>
           </div>
         </div>
         <div class="col-md-4 d-flex ftco-animate">
           <div class="icon"><span class="icon-clock-o"></span></div>
           <div class="text">
             <h3>Buka <?= $cafe['hari_buka'] ?></h3>
             <p><?php echo $cafe['jam_buka'] ?> - <?php echo $cafe['jam_tutup'] ?></p>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
</section>

<section class="ftco-menu">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Temukan</span>
        <h2 class="mb-4">Produk Kami</h2>
        <p><?php echo $cafe['deskripsi'] ?></p>
      </div>
    </div>
    <div class="row d-md-flex">
      <div class="col-lg-12 ftco-animate p-md-5">
        <div class="row">
          <div class="col-md-12 nav-link-wrap mb-5">
            <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">MENU</a>

              <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">GALERI</a>

              <!--   <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Desserts</a> -->
            </div>
          </div>
          <div class="col-md-12 d-flex align-items-center">

            <div class="tab-content ftco-animate" id="v-pills-tabContent">

              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                <div class="row">
                  <div class="col-md-12 text-center mb-2">
                   <h3 class=" heading-pricing ftco-animate text-center">Menu</h3>
                 </div>
                 <?php

                 foreach ($menu as $key => $value) {

                  $id_menu = $value->id_menu;
                  $id_cafe = $value->id_cafe;
                  ?>
                  <div class="col-lg-12 mb-5 pb-3">
                    <div class="pricing-entry d-flex ftco-animate">
                     <a href="<?= base_url() ?>user/detail_menu/<?php echo $value->id_menu.'/'.$id_cafe ?>">
                       <div class="img"
                       style="background-image: url(<?= base_url('upload/') ?>menu/<?php echo $value->foto_menu ?>">
                     </div>
                   </a>

                   <div class="desc pl-3">
                     <a href="<?= base_url() ?>user/detail_menu/<?php echo $value->id_menu.'/'.$id_cafe  ?>">
                       <div class="d-flex text align-items-center">
                         <h3><span><?= $value->nama_menu ?></span></h3>
                         <span class="price">Rp.<?= number_format($value->harga,0,'.','.')?></span>
                       </div>
                       <div class="d-block">
                         <p><?= $value->deskripsi ?></p>
                       </div>
                     </a>
                   </div>
                 </div>


               </div>
             <?php  } ?>
           </div>
         </div>

         <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
          <div class="row">
           <div class="col-md-12 text-center mb-2">
            <h3 class=" heading-pricing ftco-animate text-center">Galeri</h3>
          </div>
          <?php foreach ($galeri as $key => $value) {
            # code...
           ?>
          <div class="col-md-4 text-center">
            <div class="menu-wrap">
              <a href="#" class="menu-img img mb-4" style="background-image: url(<?= base_url('upload/galeri/'.$value->gambar) ?>);"></a>
              <div class="text">
                <h3><a href="#"><?php echo $value->nama ?></a></h3>
                <p><?php echo $value->deskripsi ?></p>
              </div>
            </div>
          </div>
        <?php } ?>
        </div>
      </div>
      <!-- end tab pane -->
    </div>
  </div>
</div>
</div>
</div>
</div>
</section>

<section class="ftco-section">
 <div class="container">
   <div class="row">
     <div class="col-md-8 ftco-animate">
       <div class="pt-5 mt-5">
         <h4><?php echo $jumlah['jumlah_koment'] ?> Comments</h4>
         <ul class="comment-list">
           <?php foreach ($koment as $key => $value) {

            $id_komentar = $value->id_komentar;

            ?>

            <li class="comment">
             <div class="vcard bio">
              <div class="m-3" style="display:flex; height: 40px; width: 40px; border-radius: 50%; margin-right: 10px; background-color: #fff; align-items: center; justify-content: center;">
               <p style="color: black"> <?php echo strtok($value->nama_komentar, " ") ?></p>
             </div>
           </div>
           <div class="comment-body">
             <h3> <?php echo $value->email_komentar ?> </h3>
             <div class=" meta"><p><?php echo $value->komen ?></p>
               <div class="reply-btn">
                <?php $queryJ = $this->db->query("SELECT count(id_balasan) as jumlah_balas from balas_komentar where id_komentar = $id_komentar");

                if($queryJ->num_rows() > 0){ ?>
                  <button  href="" style="text-transform: capitalize;" type="button" class="btn-reply b-<?php echo $value->id_komentar ?>"><?php echo $queryJ->row('jumlah_balas'); ?> Balasan </button>
                <?php } ?>
              </div>
            </div>
          </div>
        </li>
        <li class="balas<?php echo $value->id_komentar ?> comment ml-5 dis">
          <?php  $queryBalas = $this->db->query("SELECT * FROM balas_komentar where id_komentar = '$id_komentar'")->result();

          foreach ($queryBalas as $qr) {
                          # code...
            ?>

            <div class="comment-body">
             <h3> Admin Cafe </h3>
             <div class=" meta"><p><?php echo $qr->balasan ?></p>
             </div>
           </div>

         <?php } ?>
       </li>
     <?php } ?>
   </ul>
   <!-- END comment-list -->


   <div class="comment-form-wrap">
     <h3 class="mb-5">Leave a comment</h3>
     <form method="POST" class="form-contact comment_form"
     action="<?php echo base_url('user/koment/'.$id_cafe) ?>">
     <div class="form-group">
       <label for="name">Nama *</label>
       <input type="text" class="form-control" id="name" name="nama">
     </div>
     <div class=" form-group">
       <label for="email">Email *</label>
       <input type="email" class="form-control" id="email" name="email">
     </div>
     <div class=" form-group">
       <label for="message">Pesan</label>
       <textarea name="komentar" id="komentar" cols="30" rows="10"
       class="form-control"></textarea>
     </div>
     <div class="form-group">
       <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
     </div>

   </form>
 </div>

</div>

</div> <!-- .col-md-8 -->

</div>
</div>
</section> <!-- .section -->

<script type="text/javascript">
  <?php foreach ($koment as $key => $value) {
            # code...
    ?>
    const klik<?php echo $value->id_komentar; ?> = document.querySelector('.b-<?php echo $value->id_komentar ?>');

    klik<?php echo $value->id_komentar; ?>.addEventListener('click',()=>{
     document.querySelector('.balas<?php echo $value->id_komentar ?>').classList.toggle('dis');
   })
  <?php } ?>
</script>