


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
        <div class="card-header">
          <h3 class="card-title">List Blog</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <a href="<?= base_url('admin/blog/tambah'); ?>" class="btn btn-primary mb-1">Tambah</a>

              <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Isi</th>
                  <th>Tanggal</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($blog_list as $key => $value) : ?>
                  <tr>
                <td><?= $key+1; ?></td>
                <td><?= $value['judul']; ?></td>
                <td><?= $value['isi']; ?></td>
                <?php $waktu = substr($value['tanggal'],11,5); ?>
                <td><?= date('d M,Y',strtotime($value['tanggal'])); ?>, <?= $waktu; ?></td>
                <td>
                  <a href="<?= base_url("admin/blog/$value[id]"); ?>" class="btn btn-info">Detail</a>
                  <a href="<?= base_url("admin/blog/edit/$value[id]"); ?>" class="btn btn-warning">Edit</a>
                  <a href="" class="btn btn-danger">Delete</a>
                </td>
                </tr>
                <?php endforeach ?>
              </tbody>
            </table>
        </div>
        <!-- /.card-body -->