<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Civil | Engineering Dashboard</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
<style>
        .navbar {
            background-image: url('https://www.shutterstock.com/image-photo/engineer-teamwork-meeting-drawing-working-600nw-2294764107.jpg');
            background-size: cover; /* Cover the entire navbar */
            background-position: center; /* Center the image */
            color: white; /* Change text color to white for visibility */
        }
        .navbar a {
            color: white !important; /* Ensure link colors are white */
        }
        .sidebar-brand{
          background: hsla(39, 100%, 50%, 1);

background: linear-gradient(90deg, hsla(39, 100%, 50%, 1) 0%, hsla(34, 86%, 58%, 1) 50%, hsla(335, 81%, 65%, 1) 100%);

background: -moz-linear-gradient(90deg, hsla(39, 100%, 50%, 1) 0%, hsla(34, 86%, 58%, 1) 50%, hsla(335, 81%, 65%, 1) 100%);

background: -webkit-linear-gradient(90deg, hsla(39, 100%, 50%, 1) 0%, hsla(34, 86%, 58%, 1) 50%, hsla(335, 81%, 65%, 1) 100%);

filter: progid: DXImageTransform.Microsoft.gradient( startColorstr="#FFA500", endColorstr="#F0A13A", GradientType=1 );
        }
    </style>
<style>
        .navbar {
            background-image: url('https://www.shutterstock.com/image-photo/engineer-teamwork-meeting-drawing-working-600nw-2294764107.jpg');
            background-size: cover; /* Cover the entire navbar */
            background-position: center; /* Center the image */
            color: white; /* Change text color to white for visibility */
        }
        .navbar a {
            color: white !important; /* Ensure link colors are white */
        }
        .sidebar-brand{
          background: hsla(39, 100%, 50%, 1);

background: linear-gradient(90deg, hsla(39, 100%, 50%, 1) 0%, hsla(34, 86%, 58%, 1) 50%, hsla(335, 81%, 65%, 1) 100%);

background: -moz-linear-gradient(90deg, hsla(39, 100%, 50%, 1) 0%, hsla(34, 86%, 58%, 1) 50%, hsla(335, 81%, 65%, 1) 100%);

background: -webkit-linear-gradient(90deg, hsla(39, 100%, 50%, 1) 0%, hsla(34, 86%, 58%, 1) 50%, hsla(335, 81%, 65%, 1) 100%);

filter: progid: DXImageTransform.Microsoft.gradient( startColorstr="#FFA500", endColorstr="#F0A13A", GradientType=1 );
        }
    </style>
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon"></div>
        <div class="sidebar-brand-text mx-3">MAJD SARL</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="/dashboard-ingenieur">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">Engineering Options</div>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProjects" aria-expanded="true"
          aria-controls="collapseProjects">
          <i class="fas fa-project-diagram"></i>
          <span>Projects & Requests</span>
        </a>
        <div id="collapseProjects" class="collapse" aria-labelledby="headingProjects" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Manage Projects</h6>
            <a class="collapse-item" href="/projet-ingenieur">Ongoing Projects</a>
            <a class="collapse-item" href="/demande_de_projet-ingenieur">Project Requests</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/tache-ingenieur">
          <i class="fas fa-tasks"></i>
          <span>Tasks</span>
        </a>
      </li>

      <hr class="sidebar-divider">
      <div class="sidebar-heading">Emergency Contact</div>
      <li class="nav-item">
        <a class="nav-link" href="tel:+123456789">
          <i class="fas fa-phone-alt"></i>
          <span>Emergency Line: +123 456 789</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mailto:support@civilenterprise.com">
          <i class="fas fa-envelope"></i>
          <span>Email Support</span>
        </a>
      </li>
    </ul>
    <!-- Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">Notifications</h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="icon-circle bg-primary">
                    <i class="fas fa-file-alt text-white"></i>
                  </div>
                  <div class="text-truncate">Fait une Mise à jour de Projet</div>
                  <div class="small text-gray-500">December 12, 2024</div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="icon-circle bg-success">
                    <i class="fas fa-tools text-white"></i>
                  </div>
                  <div class="text-truncate">Rappelez vous de la maintenance</div>
                  <div class="small text-gray-500">December 7, 2024</div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="icon-circle bg-warning">
                    <i class="fas fa-exclamation-triangle text-white"></i>
                  </div>
                  <div class="text-truncate">Alert d'urgence</div>
                  <div class="small text-gray-500">December 2, 2024</div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Voir tous les Alerts</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle"
                  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqzimYL8cryUexi41Y0o2AIXlbtmOvOB4bgA&s" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">Nasma OUARDI</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->

        <!-- Main Content -->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Bienvenue OUARDI Nasma </h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div>

          <!-- Project Requests and Tasks Overview -->
          <div class="row">
            <!-- Project Requests -->
            <div class="col-lg-6 mb-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Demandes de Projet</h6>
                </div>
                <div class="card-body">
                  <div class="d-flex align-items-center mb-3">
                    <div class="icon-circle bg-primary mr-3">
                      <i class="fas fa-building text-white"></i>
                    </div>
                    <div>
                      <h6 class="font-weight-bold">Bridge Construction Project</h6>
                      <p>Location: San Francisco</p>
                      <small class="text-muted">Due Date: December 15, 2024</small>
                    </div>
                  </div>
                  <div class="d-flex align-items-center mb-3">
                    <div class="icon-circle bg-success mr-3">
                      <i class="fas fa-road text-white"></i>
                    </div>
                    <div>
                      <h6 class="font-weight-bold">Highway Expansion</h6>
                      <p>Location: New York</p>
                      <small class="text-muted">Due Date: February 1, 2025</small>
                    </div>
                  </div>
                  <div class="d-flex align-items-center mb-3">
                    <div class="icon-circle bg-warning mr-3">
                      <i class="fas fa-water text-white"></i>
                    </div>
                    <div>
                      <h6 class="font-weight-bold">Water Treatment Facility</h6>
                      <p>Location: Miami</p>
                      <small class="text-muted">Due Date: March 8, 2025</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Assigned Tasks -->
            <div class="col-lg-6 mb-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Assigned Tasks</h6>
                </div>
                <div class="card-body">
                  <div class="d-flex align-items-center mb-3">
                    <div class="icon-circle bg-info mr-3">
                      <i class="fas fa-hammer text-white"></i>
                    </div>
                    <div>
                      <h6 class="font-weight-bold">Concrete Laying</h6>
                      <p>Project: Bridge Construction</p>
                      <small class="text-muted">Progress: 60%</small>
                      <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex align-items-center mb-3">
                    <div class="icon-circle bg-secondary mr-3">
                      <i class="fas fa-hard-hat text-white"></i>
                    </div>
                    <div>
                      <h6 class="font-weight-bold">Safety Inspection</h6>
                      <p>Project: Highway Expansion</p>
                      <small class="text-muted">Progress: 45%</small>
                      <div class="progress">
                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex align-items-center">
                    <div class="icon-circle bg-danger mr-3">
                      <i class="fas fa-paint-roller text-white"></i>
                    </div>
                    <div>
                      <h6 class="font-weight-bold">Wall Coating</h6>
                      <p>Project: Water Treatment Facility</p>
                      <small class="text-muted">Progress: 30%</small>
                      <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pret pour partir?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">Etes vous sur de se déconnecter?</div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                <a class="btn btn-primary" href="login.html">Déconnecter</a>
              </div>
            </div>
          </div>
        </div>
        <!---Container Fluid-->
      </div>

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Civil Enterprise 2024</span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
</body>

</html>
