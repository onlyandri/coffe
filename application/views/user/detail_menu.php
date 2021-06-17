 <section class="ftco-section">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 mb-5 ftco-animate">
            <a href="#" class="image-popup"><img src="<?= base_url('assets/images/'.$menu['foto_menu'])?>" class="img-fluid" alt="Colorlib Template"></a>
        </div>
        <div class="col-lg-6 product-details pl-md-5 ftco-animate">
            <h3><?php echo $menu['nama_menu'] ?></h3>
            <p class="price"><span>Rp.<?= number_format($menu['harga'],0,'.','.')?></span></p>
            <p><?php echo $menu['detail'] ?>
        </p>

    </div>
</div>
</div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <span class="subheading">Discover</span>
            <h2 class="mb-4">Related products</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
    </div>
    <div class="row">
        <?php $queryP = $this->db->query("SELECT * FROM menu where id_cafe = $id_cafe")->result();

        foreach ($queryP as $key => $value) {
                 # code...
          ?>
          <div class="col-md-3">
            <div class="menu-entry">
                <a href="#" class="img" style="background-image: url(<?php echo base_url('upload/menu/' .$value->foto_menu) ?>);"></a>
                <div class="text text-center pt-4">
                    <h3><a href="#"><?php echo $value->nama_menu ?></a></h3>
                    <p><?php echo $value->deskripsi ?></p>
                    <p class="price"><span>Rp.<?= number_format($value->harga,0,'.','.')?></span></p>
                    <p><a href="<?= base_url() ?>user/detail_menu/<?php echo $value->id_menu.'/'.$id_cafe ?>" class="btn btn-primary btn-outline-primary">Lihat Detail</a></p>
                </div>
            </div>
        </div>
    <?php } ?>

</div>
</div>
</section>