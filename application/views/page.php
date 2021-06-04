<div class="content-wrapper" style="min-height: 1299.69px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">

    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Daftar Pasien</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <button style="margin-bottom: 10px;" id="tambah" href="<?php echo base_url('page/tambah'); ?>" class="btn btn-success">+ Tambah Data</button><br>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Kode Pasien</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Email</th>
                    <th>#</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 0;
                  foreach ($data_pasien as $data_pasien) { 
                    $no++;
                    ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $data_pasien->nama; ?></td>
                      <td><?php echo $data_pasien->gender; ?></td>
                      <td><?php echo $data_pasien->tmp_lahir; ?></td>
                      <td><?php echo $data_pasien->tgl_lahir; ?></td>
                      <td><?php echo $data_pasien->email; ?></td>
                      <td>
                        <button id="detail" href="<?php echo base_url('page/detail/').$data_pasien->id_pasien; ?>" class="btn btn-info"><i class="fas fa-eye"></i></button>
                        <button id="edit" href="<?php echo base_url('page/edit/').$data_pasien->id_pasien; ?>" class="btn btn-success"><i class="fas fa-edit"></i></button>
                        <button id="delete" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                      </td>
                    </tr>
                  <?php } ?>

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->

          </div>
          <!-- /.card -->

          
          <!-- /.card -->
        </div>
        <!-- /.col -->

        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- /.row -->
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

<script type="text/javascript">
  $(document).on('click', '#tambah, #edit, #detail', function(e){
    e.preventDefault();

    if($(this).attr('id') == 'tambah')
    {

     $('.modal-dialog').removeClass('modal-lg');
     $('.modal-dialog').removeClass('modal-sm');
     $('.modal-dialog').addClass('modal-md');
     $('#ModalHeader').html('Tambah Data');
   }

   if($(this).attr('id') == 'detail')
   {

     $('.modal-dialog').removeClass('modal-lg');
     $('.modal-dialog').removeClass('modal-sm');
     $('.modal-dialog').addClass('modal-md');
     $('#ModalHeader').html('Detail');
   }

   if($(this).attr('id') == 'edit')
   {
    $('.modal-dialog').removeClass('modal-lg');
    $('.modal-dialog').removeClass('modal-sm');
    $('.modal-dialog').addClass('modal-md');
    $('#ModalHeader').html('Edit');
  }


  $('#ModalContent').load($(this).attr('href'));
  $('#GetModal').modal('show');
});
</script>