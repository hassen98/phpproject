<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sanes | consulter</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php require('../../view/header.php') ;?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php require('../../view/menu.php') ;?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Liste Admin</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
      
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <?php require('../../model/connexion.php'); ?>
        <div class="card-body p-0">
           <?php  $req = $bd->prepare('SELECT id,nom,email,zone FROM user ');
                 $req->execute(); 
           ?> 
             <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%" >
                          Nº
                      </th>
                      <th style="width: 20%">
                          Nom
                      </th>
                      <th style="width: 30%">
                          Email
                      </th>
                      <th>
                          zone
                      </th>
                     
                      <th style="width: 30%">
                      </th>
                  </tr>
              </thead>
              <?php
                 $compteur=0;
                 while ($donnees = $req->fetch())
                  {
                    $compteur=$compteur + 1;
              ?>

          
              <tbody>
                  <tr>
                      <td>
                      <?php echo $compteur; ?>
                      </td>
                      <td>
                          <a>
                              <?php echo $donnees['nom']; ?>
                          </a>
                          
                         
                      </td>
                      <td>
                      <?php echo $donnees['email']; ?> 
                      </td>
                      <td>
                      <?php echo $donnees['zone']; ?> 
                      </td>
                       <td>   
                          <a class="btn btn-info btn-sm" href="../../model/modifier_admin.php?numadmin=<?=  $donnees['id'] ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              modifier
                          </a>
                          <a class="btn btn-danger btn-sm" href="../../model/supprimer_admin.php?numadmin=<?=  $donnees['id'] ?>">
                              <i class="fas fa-trash">
                              </i>
                              supprimer
                          </a>
                        </td>
                        
                  </tr>
              </tbody>
              <?php
               }
               $req ->closeCursor();
              ?>
          </table>
              
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

</body>
</html>
