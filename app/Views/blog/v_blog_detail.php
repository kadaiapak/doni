


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <?php if(!empty(session()->getFlashdata('success'))) { ?>
      <div class="alert alert-success">
        <?= session()->getFlashdata('success'); ?>
      </div>
      <?php } ?>
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blog Detail</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Blog Detail</li>
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
          <h1 class="text-center"><?= $blog->judul; ?></h1>
          <p class="text-center"><?= $blog->deskripsi; ?></p>
          <div class="img-container text-center">
            <img src="/img/<?= $blog->sampul; ?>" alt="" style="text-align: center;">
          </div>
          <p><?= $blog->isi; ?></p>
        </div>
      </div>  <!-- /.card -->
    </section> <!-- /.content-->
  </div> <!-- /.content-wrapper -->