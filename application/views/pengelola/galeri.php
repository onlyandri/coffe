 <div class="content-header">
     <div class="container-fluid">
         <div class="row mb-2">
         </div><!-- /.row -->
     </div><!-- /.container-fluid -->
 </div>

 <section class="content">
     <div class="container-fluid">
         <!-- Info boxes -->
         <?= $this->session->flashdata('message'); ?>
         <div class="row">
             <div class="col-md-12">
                 <div class="card">
                     <div class="card-header p-2">
                         <ul class="nav nav-pills">
                             <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Galeri</a></li>
                             <!-- <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Deskripsi</a></li> -->
                             <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Tambah</a></li>
                         </ul>
                     </div><!-- /.card-header -->
                     <div class="card-body">
                         <div class="tab-content">
                             <div class="active tab-pane" id="activity">

                                 <!-- Post -->
                                 <div class="row">
                                     <?php foreach ($galeri as $key => $value) {
                                            # code...
                                        ?>
                                     <div class="col-md-6">
                                         <!-- Box Comment -->
                                         <div class="card card-widget">
                                             <div class="card-header">
                                                 <div class="user-block">
                                                     <img class="img-circle"
                                                         src="<?= base_url('assets/') ?>dist/img/user1-128x128.jpg"
                                                         alt="User Image">
                                                 </div>

                                             </div>
                                             <!-- /.card-header -->
                                             <div class="card-body">
                                                 <img style="height: 250px; width: 100%" class="img-fluid pad"
                                                     src="<?= base_url('upload/') ?>galeri/<?php echo $value->gambar ?>"
                                                     alt="Photo">

                                                 <p><?php echo $value->deskripsi ?></p>
                                                 <a href="<?php echo base_url('pengelola/detailGaleri/' . $value->id_galeri) ?>"
                                                     type="button" class="btn btn-primary btn-sm"><i
                                                         class="fas fa-edit"></i> Detail</a>
                                                 <a href="<?php echo base_url('pengelola/hapusGaleri/' . $value->id_galeri) ?>"
                                                     type="button" class="btn btn-danger btn-sm"><i
                                                         class="fas fa-trash"></i> Hapus</a>
                                             </div>
                                         </div>
                                         <!-- /.card -->
                                     </div>
                                     <?php } ?>
                                 </div>
                             </div>

                             <div class="tab-pane" id="settings">
                                 <form class="form-horizontal" method="POST"
                                     action="<?php echo base_url('pengelola/galeri') ?>" enctype="multipart/form-data">
                                     <div class="form-group row">
                                         <label for="inputName" class="col-sm-2 col-form-label">Nama galeri</label>
                                         <div class="col-sm-10">
                                             <input type="text" class="form-control" name="nama_galeri" id="inputName"
                                                 placeholder="Name" value="">
                                         </div>
                                     </div>
                                     <div class="form-group row">
                                         <label for="inputSkills" class="col-sm-2 col-form-label">Foto galeri</label>
                                         <div class="col-sm-10">
                                             <input type="file" class="form-control" id="inputSkills" name="foto_galeri"
                                                 placeholder="nama ketua" value="">
                                         </div>
                                     </div>
                                     <div class="form-group row">
                                         <label for="inputExperience" class="col-sm-2 col-form-label">Deskripsi</label>
                                         <div class="col-sm-10">
                                             <textarea class="" name="deskripsi" placeholder="Deskripsi singkat"
                                                 style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                         </div>
                                     </div>
                                     <div class="form-group row">
                                         <div class="offset-sm-2 col-sm-10">
                                             <button type="submit" class="btn btn-danger"><i
                                                     class="far fa-plus mr-1"></i>Tambahkan</button>
                                         </div>
                                     </div>
                                 </form>
                             </div>
                             <!-- /.tab-pane -->
                         </div>
                         <!-- /.tab-content -->
                     </div><!-- /.card-body -->
                 </div>
                 <!-- /.nav-tabs-custom -->
             </div>
             <!-- /.col -->
         </div>
     </div>
 </section>