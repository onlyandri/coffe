 <?php
    $id_menu = $menu['id_menu'];
    ?>
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
                             <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Detail
                                     menu</a></li>
                             <!-- <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Deskripsi</a></li> -->
                         </ul>
                     </div><!-- /.card-header -->
                     <div class="card-body">
                         <div class="tab-content">
                             <div class="active tab-pane" id="activity">

                                 <!-- Post -->
                                 <div class="row">
                                     <div class="col-md-12">
                                         <!-- Box Comment -->
                                         <div class="card card-widget">
                                             <div class="card-header">
                                                 <div class="user-block">
                                                     <img class="img-circle"
                                                         src="<?php echo base_url('assets/') ?>dist/img/user1-128x128.jpg"
                                                         alt="User Image">
                                                     <span class="username"><a
                                                             href="#"><?php echo $menu['nama_menu'] ?></a></span>
                                                     <span class="description">diposting pada tanggal -
                                                         <?php echo $menu['tanggal_posting'] ?></span>
                                                 </div>
                                                 <!-- /.user-block -->
                                                 <div class="card-tools">
                                                     <button type="button" class="btn btn-tool" data-toggle="tooltip"
                                                         title="Mark as read">
                                                         <i class="far fa-circle"></i></button>
                                                     <button type="button" class="btn btn-tool"
                                                         data-card-widget="collapse"><i class="fas fa-minus"></i>
                                                     </button>
                                                     <button type="button" class="btn btn-tool"
                                                         data-card-widget="remove"><i class="fas fa-times"></i>
                                                     </button>
                                                 </div>
                                                 <!-- /.card-tools -->
                                             </div>
                                             <!-- /.card-header -->
                                             
                                             </div>
                                             <!-- /.card-footer -->
                                             <div class="card-footer">
                                             </div>
                                             <!-- /.card-footer -->
                                         </div>
                                         <!-- /.card -->
                                     </div>
                                 </div>
                             </div>

                             <div class="tab-pane" id="settings">
                                 <form class="form-horizontal" method="POST"
                                     action="<?php echo base_url('pengelola/menu') ?>" enctype="multipart/form-data">
                                     <div class="form-group row">
                                         <label for="inputName" class="col-sm-2 col-form-label">Nama menu</label>
                                         <div class="col-sm-10">
                                             <input type="text" class="form-control" name="nama_menu" id="inputName"
                                                 placeholder="Name" value="<?php echo $menu['nama_menu'] ?>">
                                         </div>
                                     </div>
                                     <div class="form-group row">
                                         <label for="inputSkills" class="col-sm-2 col-form-label">Foto menu</label>
                                         <div class="col-sm-10">
                                             <input type="file" class="form-control" id="inputSkills" name="foto"
                                                 placeholder="nama ketua" value="<?php echo $menu['foto_menu'] ?>">
                                         </div>
                                     </div>
                                     <div class="form-group row">
                                        <label for="inputSkills" class="col-sm-2 col-form-label">&nbsp</label>
                                         <div class="col-sm-10">
                                             <img style="height: 100px; width: 100px;" src="<?php echo base_url('upload/menu/'.$menu['foto_menu']) ?>">
                                         </div>
                                     </div>
                                     <div class="form-group row">
                                         <label for="inputExperience" class="col-sm-2 col-form-label">Deskripsi</label>
                                         <div class="col-sm-10">
                                             <textarea class="" name="deskripsi"
                                                 placeholder="Place some text here"
                                                 style="width: 100%; height: 50px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $menu['deskripsi']; ?></textarea>
                                         </div>
                                     </div>
                                      <div class="form-group row">
                                         <label for="inputExperience" class="col-sm-2 col-form-label">Deskripsi</label>
                                         <div class="col-sm-10">
                                             <textarea class="textarea" name="deskripsi"
                                                 placeholder="Place some text here"
                                                 style="width: 100%; height: 50px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $menu['detail']; ?></textarea>
                                         </div>
                                     </div>
                                     <div class="form-group row">
                                         <div class="offset-sm-2 col-sm-10">
                                             <button type="submit" class="btn btn-primary"><i
                                                     class="far fa-edit mr-1"></i>Edit</button>
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