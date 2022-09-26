


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
        <div class="card-body">
          <a href="<?= base_url('admin/blog/tambah'); ?>" class="btn btn-primary mb-1">Tambah</a>

              <table id="example1" class="table table-bordered table-striped" style="width: 100%;">
              <thead>
                <tr>
                  <th style="width: 3%;">No</th>
                  <th style="width: 17%;">Judul</th>
                  <th style="width: 40%;">Deskripsi</th>
                  <th style="width: 5%;">User</th>
                  <th style="width: 10%;">Tanggal</th>
                  <th style="width: 5%;">Status</th>
                  <th style="width: 20%;">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; ?>
                <?php foreach($blog_list as $bl) : ?>
                  <tr>
                <td><?= $no; ?></td>
                <td><?= $bl->judul; ?></td>
                <td><?= $bl->deskripsi; ?></td>
                <td><?= $bl->nama_user; ?></td>
                <?php $waktu = substr($bl->created_at,11,5); ?>
                <td><?= date('d M,Y',strtotime($bl->created_at)); ?>, <?= $waktu; ?></td>
                <td><span class="badge bg-success">Aktif</span></td>
                <td>
                  <a href="<?= base_url("admin/blog/$bl->id"); ?>" class="btn btn-info">Detail</a>
                  <a href="<?= base_url("admin/blog/edit/$bl->id"); ?>" class="btn btn-warning">Edit</a>
                  <form action="<?= base_url("admin/blog/$bl->id"); ?>" method="post" class="d-inline">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');">Delete</button>
                  </form>
                </td>
                </tr>
                <?php $no++ ?>
                <?php endforeach ?>
              </tbody>
            </table>
        </div>
      </div>  <!-- /.card -->
    </section>  <!-- /.content -->

  </div> <!-- /.content-wrapper -->