  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Edit Posting</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active">Edit Blog Post</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section> <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-body">
          <form method="post" action="<?= base_url("admin/blog/update/$blog->id"); ?>" enctype="multipart/form-data">
            <input type="hidden" name="sampulLama" value="<?= $blog->sampul; ?>">    
            <div class="form-group">
              <label for="sampul">Upload Cover</label>
              <div class="row">
                <div class="col-sm-2">
                  <img src="<?= base_url('/img/'.$blog->sampul); ?>" alt=""  class="img-thumbnail img-preview">
                </div>
                <div class="col-sm-10">
                  <input type="file" id="sampul"  class="form-control <?= ($validation->hasError('sampul')) ? 'is-invalid' :''; ?>" name="sampul" onchange="previewImage()">
                  <div class="invalid-feedback">
                      <?= $validation->getError('sampul'); ?>
                  </div>  
                </div>
              </div>
            </div>  
            <div class="form-group">
              <label for="judul">Judul</label>
              <input type="text" value="<?= $blog->judul; ?>" class="form-control" id="judul" placeholder="judul" name='judul' required>
            </div>
            <div class="form-group">
              <label for="deskripsi">Deskripsi</label>
              <input type="text" value="<?= $blog->deskripsi; ?>" class="form-control" id="deskripsi" placeholder="deskripsi" name='deskripsi' required>
            </div>
            <div class="form-group">
              <label for="isi">Isi</label>
              <textarea type="isi" class="form-control summernote" id="isi" placeholder="isi" name="isi"><?= $blog->isi; ?></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Simpan</button>
              <a href="<?= base_url('admin/blog'); ?>" class="btn btn-warning">Kembali</a>
            </div>
          </form>
        </div> <!-- /.card-body -->
      </div> <!-- /.card -->
    </section> <!-- /.content -->
  </div> <!-- /.content-wrapper -->