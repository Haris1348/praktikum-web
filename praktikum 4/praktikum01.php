<?php
require_once 'header.php';
require_once 'sidebar.php';

$nilai1 =['id' => 1, 'main' => "010101", 'uts' => 80 ,'uas' => 85, 'tugas' => 78]
$nilai2 =['id' => 1, 'main' => "010103", 'uts' => 85 , 'uas' => 89, 'tugas' => 71]
$nilai3 =['id' => 1, 'main' => "010108", 'uts' => 86 ,'uas' => 74, 'tugas' => 88]
$nilai4 =['id' => 1, 'main' => "010112", 'uts' => 90, 'uas' => 94, 'tugas' => 98]



?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Praktikum 01</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Judul</h3>

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
              <h1>TABEL NILAI MAHASISWA</h1>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              Footer
            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>