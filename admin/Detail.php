<?php
require_once '../config/db.php';
$query =mysqli_query($db,"select * from users");
$data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
  
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  
  <!-- JS file -->
  <link href="../assets/js/popper.js">
  <link href="../assets/js/bootstrap.min.js">
  <link href="../assets/js/jquery.min.js">

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="blue" data-active-color="danger">
      <!-- Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow" -->
      <div class="logo">
        <a href="index.php" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/Logo.jpg">
          </div>
        </a>
        <a href="index.php" class="logo-normal">
          User Management System
        </a>
      </div>

      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="../admin/index.php">
              <i class="nc-icon nc-single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li>
            <a href="./cp.php">
              <i class="nc-icon nc-key-25"></i>
              <p>Change Password</p>
            </a>
          </li>
          <li class="active">
            <a href="./tables.php">
              <i class="nc-icon nc-badge"></i>
              <p>Daftar User</p>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="main-panel">
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">

          <!-- navbar responsive untuk opsi user -->
          <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
          </div>

            <a class="navbar-brand" href="#">Dashboard Admin</a>
          </div>

          <!-- navbar responsive some option -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <a class="dropdown-item" href="#">Activity Log</a>
                  <a class="dropdown-item" href="../action/login.php">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

      <div class="content">
      <div class="row">
      <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="text-center card-title"> Detail User </h4>
              </div>
              <form>
                <div style="width:500px;">
                  <div class="container message"> Ini adalah detail dari user </div>
                    <table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
                      <tr class="tableheader"></tr>
                      <tr>
                        <td width="40%"><label>ID</label></td>
                        <td width="60%"><input class="text-center" type="text" disabled="" name="id" value="<?php echo $data['id'];?>"></td>
                      </tr>
                      <tr>
                        <td><label>Username</label></td>
                        <td><input class="text-center" type="text" disabled="" name="nama_lengkap" value="<?php echo $data['nama_lengkap'];?>"></td>
                      </tr>
                      <tr>
                        <td><label>Email</label></td>
                        <td><input class="text-center" type="text" disabled="" name="email" value="<?php echo $data['email'];?>"></td>
                      </tr>
                    </table>
                    <a class="container btn btn-sm btn-primary text-white" href="tables.php">Close</a>
                  </div>
                </div>
             </form>
              


                </div>
                </div>
                </div>
              </div>
            </div>
        </div>

      <footer class="footer footer-black footer-white ">
        <div class="container-fluid">
            <div class="credits ml-auto">
              <span class="copyright">
                Copyright ©
                <script>
                  document.write(new Date().getFullYear())
                </script>, made with <b>Bootstrap</b>
              </span>
            </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $('.editData').click(function(){
      $('#idedit').val($(this).data('id'));
      $('#namaedit').val($(this).data('nama'));
      $('#emailedit').val($(this).data('email'));
      $('#edit').modal('show');
    });
  </script>
</body>
</html>
