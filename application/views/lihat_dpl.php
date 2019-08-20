<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>lib/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>lib/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kelola DPL</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>lib/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>lib/css/simple-sidebar.css" rel="stylesheet">
    <link href="<?php echo base_url();?>lib/css/style6.css" rel="stylesheet">
</head>
<body>
    <div id="wrapper">

<?php include 'v_sidebar.php';?>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h1>LIHAT DPL</h1>
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Menu</a>
                
            </div>
            <P></P>


<table class="table table-striped table-hover">
                        <thead>
                            <tr>
                    <th>
                      <span class="custom-checkbox">
                        <input type="checkbox" id="selectAll">
                        <label for="selectAll"></label>
                      </span>
                    </th>
                                <th>ID DOSEN</th>
                                <th>NAMA</th>
                                <th>USER</th>
                                <th>PASSWORD</th>
                                <th>KELOLA</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php foreach($data as $row){  ?>
                            <tr>
                  <td>
                      <span class="custom-checkbox">
                        <input type="checkbox" id="checkbox1" name="options[]" value="1">
                        <label for="checkbox1"></label>
                      </span>
                    </td>
                                <td> <?php echo $row['id_pic']; ?> </td>
                                <td> <?php echo $row['nama_dosen']; ?> </td>
                                <td><?php echo $row['username']; ?></td>
                                <td><?php echo $row['password']; ?></td>
                                
                                <td>
                                    <a href="<?php echo base_url(). "index.php/dosen/edit_dpl/". $row['id_pic'];?>">Edit</a>
                                   
                                </td>
                              
                            </tr>
                             <?php } ?>
                        </tbody>
                    </table>

                </div>
            </div>
          
            <!-- Delete Modal HTML -->
            <div id="deleteEmployeeModal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <form>
                  <div class="modal-header">
                    <h4 class="modal-title">HAPUS DPL</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">
                    <p>Apa kamu yakin ingin menghapus?</p>
                    <p class="text-warning"><small>Aksi ini tidak dapat dibatalkan</small></p>
                  </div>
                  <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-danger" value="Delete">
                  </div>
                </form>
              </div>
            </div>
            </div>



<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
</body>
</html>