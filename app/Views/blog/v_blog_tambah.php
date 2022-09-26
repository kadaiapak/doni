


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1>Blog Post</h1>
                  </div>
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="#">Admin</a></li>
                          <li class="breadcrumb-item active">Blog Post</li>
                      </ol>
                  </div>
              </div>
          </div><!-- /.container-fluid -->
      </section>
      <!-- Main content -->
      <section class="content">
        <!-- Default box -->
          <div class="card">
              <div class="card-body">
                  <form method="post" action="<?= base_url('admin/blog/simpan'); ?>" enctype="multipart/form-data">
                  <?= csrf_field(); ?>
                        <div class="card-body">
                            <div class="form-group row mb-2">
                                <label for="sampul" class="col-sm-2 col-form-label">Upload Cover</label>
                                <div class="col-sm-10 row">
                                    <div class="col-sm-2">
                                    <img src="<?= base_url('/img/default.jpg'); ?>" alt=""  class="img-thumbnail img-preview">
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="file" id="sampul" class="form-control <?= ($validation->hasError('sampul')) ? 'is-invalid' :''; ?>" name="sampul" onchange="previewImage()">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('sampul'); ?>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-10">
                                    <input type="text" value="<?= old('judul'); ?>" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' :''; ?>" id="judul" placeholder="judul" name='judul'>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('judul'); ?>
                                    </div> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="deskripsi" class="col-sm-2 col-form-label">deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea type="deskripsi" placeholder="deskripsi" class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid' :''; ?>" id="deskripsi" name="deskripsi"><?= old('deskripsi'); ?></textarea>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('deskripsi'); ?>
                                    </div> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="isi" class="col-sm-2 col-form-label">Isi</label>
                                <div class="col-sm-10">
                                    <textarea type="isi" class="form-control summernote <?= ($validation->hasError('isi')) ? 'is-invalid' :''; ?>" id="isi" name="isi"><?= old('isi'); ?></textarea>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('isi'); ?>
                                    </div> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="<?= base_url('admin/blog'); ?>" class="btn btn-warning">Kembali</a>
                            </div>
                        </div>
                    </form>
              </div> <!-- /.card-body -->
          </div> <!-- /.card -->
      </section> <!-- /.content -->
  </div> <!-- /.content-wrapper -->