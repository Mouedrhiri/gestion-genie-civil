<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>RuangAdmin - Simple Tables</title>
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
        .overlay{
          background: hsla(39, 100%, 50%, 1);

background: linear-gradient(90deg, hsla(39, 100%, 50%, 1) 0%, hsla(34, 86%, 58%, 1) 50%, hsla(335, 81%, 65%, 1) 100%);

background: -moz-linear-gradient(90deg, hsla(39, 100%, 50%, 1) 0%, hsla(34, 86%, 58%, 1) 50%, hsla(335, 81%, 65%, 1) 100%);

background: -webkit-linear-gradient(90deg, hsla(39, 100%, 50%, 1) 0%, hsla(34, 86%, 58%, 1) 50%, hsla(335, 81%, 65%, 1) 100%);

filter: progid: DXImageTransform.Microsoft.gradient( startColorstr="#FFA500", endColorstr="#F0A13A", GradientType=1 );
        }
    </style>
    <style>
        .badge-warning {
  background-color: #ffc107; /* Yellow for In Progress */
}

.badge-success {
  background-color: #28a745; /* Green for Completed */
}

.badge-danger {
  background-color: #dc3545; /* Red for Incompleted */
}

.badge-secondary {
  background-color: #6c757d; /* Grey for unknown status */
}

    </style>
<div id="wrapper">
    <!-- Sidebar -->
   <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
        </div>
        <div class="sidebar-brand-text mx-3">Civil Entreprise</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="/dashboard-ingenieur">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard </span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Options
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
          aria-controls="collapseForm">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Projets & Demandes</span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Projets et Demandes</h6>
            <a class="collapse-item" href="/projet-ingenieur">Projets</a>
            <a class="collapse-item" href="/demande_de_projet-ingenieur">Demandes des Projets</a>
          </div>
        </div>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="/tache-ingenieur">
         <i class="fa fa-tasks"></i>
          <span>Tâches</span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
         <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-1 small" placeholder="What do you want to look for?"
                      aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
            
            
          
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqzimYL8cryUexi41Y0o2AIXlbtmOvOB4bgA&s" style="max-width: 60px">
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
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Projets Listes</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Projets</li>
              <li class="breadcrumb-item active" aria-current="page">Projets Listes</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12 mb-4">
            <div class="card">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-danger">Project List</h6>
        <button class="btn btn-primary overlay" data-toggle="modal" data-target="#addProjectModal">Add Project</button>
    </div>
    <div class="table-responsive">
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Client Name</th>
                    <th>Project  Name</th>
                    <th>Project Object</th>
                    <th>Nature of Service</th>
                    <th>Service Order Date</th>
                    <th>Execution Delay</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="projectTableBody">
                <!-- Project entries will be populated here dynamically -->
            </tbody>
        </table>
    </div>
</div>

<!-- Add Project Modal -->
<div class="modal fade" id="addProjectModal" tabindex="-1" role="dialog" aria-labelledby="addProjectModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addProjectModalLabel">Add New Project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="addProjectForm">
                    <div class="form-group">
                        <label for="clientName">Client Name</label>
                        <input type="text" class="form-control" id="clientName" name="client_name" required>
                    </div>
                    <div class="form-group">
                        <label for="projectObject">Project Object</label>
                        <input type="text" class="form-control" id="projectObject" name="project_object" required>
                    </div>
                    <div class="form-group">
                        <label for="projectName">Project Name</label>
                        <input type="text" class="form-control" id="projectName" name="project_name" required>
                    </div>
                    <div class="form-group">
                        <label for="natureOfService">Nature of Service</label>
                        <input type="text" class="form-control" id="natureOfService" name="nature_of_service" required>
                    </div>
                    <div class="form-group">
                        <label for="serviceOrderDate">Service Order Date</label>
                        <input type="date" class="form-control" id="serviceOrderDate" name="service_order_date" required>
                    </div>
                    <div class="form-group">
                        <label for="executionDelay">Execution Delay</label>
                        <input type="text" class="form-control" id="executionDelay" name="execution_delay" required>
                    </div>
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="number" step="0.01" class="form-control" id="amount" name="amount" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="In Progress">In Progress</option>
                            <option value="Completed">Completed</option>
                            <option value="Incompleted">Incompleted</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Project</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Project Modal -->
<div class="modal fade" id="updateProjectModal" tabindex="-1" role="dialog" aria-labelledby="updateProjectModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateProjectModalLabel">Update Project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="updateProjectForm">
                    <input type="hidden" id="updateProjectId" name="project_id">
                    <div class="form-group">
                        <label for="updateClientName">Client Name</label>
                        <input type="text" class="form-control" id="updateClientName" name="client_name" required>
                    </div>
                    <div class="form-group">
                        <label for="updateProjectName">Project Name</label>
                        <input type="text" class="form-control" id="updateProjectName" name="project_name" required>
                    </div>
                    <div class="form-group">
                        <label for="updateProjectObject">Project Object</label>
                        <input type="text" class="form-control" id="updateProjectObject" name="project_object" required>
                    </div>
                    <div class="form-group">
                        <label for="updateNatureOfService">Nature of Service</label>
                        <input type="text" class="form-control" id="updateNatureOfService" name="nature_of_service" required>
                    </div>
                    <div class="form-group">
                        <label for="updateServiceOrderDate">Service Order Date</label>
                        <input type="date" class="form-control" id="updateServiceOrderDate" name="service_order_date" required>
                    </div>
                    <div class="form-group">
                        <label for="updateExecutionDelay">Execution Delay</label>
                        <input type="text" class="form-control" id="updateExecutionDelay" name="execution_delay" required>
                    </div>
                    <div class="form-group">
                        <label for="updateAmount">Amount</label>
                        <input type="number" step="0.01" class="form-control" id="updateAmount" name="amount" required>
                    </div>
                    <div class="form-group">
                        <label for="updateStatus">Status</label>
                        <select class="form-control" id="updateStatus" name="status" required>
                            <option value="In Progress">In Progress</option>
                            <option value="Completed">Completed</option>
                            <option value="Incompleted">Incompleted</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Project</button>
                </form>
            </div>
        </div>
    </div>
</div>





          <!--Row-->

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.html" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
 <script>
  document.addEventListener('DOMContentLoaded', function () {
    function getStatusBadgeClass(status) {
        switch (status) {
            case 'In Progress':
                return 'warning'; // Yellow for "In Progress"
            case 'Completed':
                return 'success'; // Green for "Completed"
            case 'Incompleted':
                return 'danger'; // Red for "Incompleted"
            default:
                return 'secondary'; // Grey for unknown status
        }
    }

    function loadProjects() {
        fetch('http://localhost:3000/api/projects')
            .then(response => response.json())
            .then(projects => {
                const tableBody = document.getElementById('projectTableBody');
                tableBody.innerHTML = '';
                projects.forEach(project => {
                    const row = `
                        <tr>
                            <td>${project.id}</td>
                            <td>${project.client_name}</td>
                            <td>${project.project_name}</td>
                            <td>${project.project_object}</td>
                            <td>${project.nature_of_service}</td>
                            <td>${project.service_order_date}</td>
                            <td>${project.execution_delay}</td>
                            <td>${project.amount}</td>
                            <td>
                                <span class="badge badge-${getStatusBadgeClass(project.status)}">
                                    ${project.status}
                                </span>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-warning" onclick="openUpdateProjectModal(${project.id}, '${project.client_name}','${project.project_name}', '${project.project_object}', '${project.nature_of_service}', '${project.service_order_date}', '${project.execution_delay}', ${project.amount}, '${project.status}')">Update</button>
                                <button class="btn btn-sm btn-danger" onclick="openDeleteProjectModal(${project.id})">Delete</button>
                            </td>
                        </tr>
                    `;
                    tableBody.innerHTML += row;
                });
            })
            .catch(error => console.error('Error loading projects:', error));
    }

    loadProjects();

    document.getElementById('addProjectForm').addEventListener('submit', function (event) {
        event.preventDefault();
        const formData = new FormData(this);
        fetch('http://localhost:3000/api/projects', {
            method: 'POST',
            body: JSON.stringify(Object.fromEntries(formData)),
            headers: { 'Content-Type': 'application/json' }
        })
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                alert('Error: ' + data.error);
            } else {
                alert('Project added successfully!');
                loadProjects(); // Reload projects without refreshing the page
                $('#addProjectModal').modal('hide'); // Hide the modal after adding
            }
        })
        .catch(error => console.error('Error adding project:', error));
    });

    document.getElementById('updateProjectForm').addEventListener('submit', function (event) {
        event.preventDefault();
        const formData = new FormData(this);
        fetch(`http://localhost:3000/api/projects/${document.getElementById('updateProjectId').value}`, {
            method: 'PUT',
            body: JSON.stringify(Object.fromEntries(formData)),
            headers: { 'Content-Type': 'application/json' }
        })
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                alert('Error: ' + data.error);
            } else {
                alert('Project updated successfully!');
                loadProjects(); // Reload projects without refreshing the page
                $('#updateProjectModal').modal('hide'); // Hide the modal after updating
            }
        })
        .catch(error => console.error('Error updating project:', error));
    });
});

function openUpdateProjectModal(id, client_name,projectName, project_object, nature_of_service, service_order_date, execution_delay, amount, status) {
    document.getElementById('updateProjectId').value = id;
    document.getElementById('updateClientName').value = client_name; // Update to match the HTML IDs
    document.getElementById('updateProjectName').value = projectName;
    document.getElementById('updateProjectObject').value = project_object; 
    document.getElementById('updateNatureOfService').value = nature_of_service; 
    document.getElementById('updateServiceOrderDate').value = service_order_date; 
    document.getElementById('updateExecutionDelay').value = execution_delay; 
    document.getElementById('updateAmount').value = amount; 
    document.getElementById('updateStatus').value = status;
    $('#updateProjectModal').modal('show');
    loadProjects();
}

function openDeleteProjectModal(id) {
    document.getElementById('deleteProjectId').value = id; // Ensure you have the delete form set up correctly
    $('#deleteProjectModal').modal('show'); // You need to create this modal in your HTML if you want a delete confirmation
}



</script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>

</body>

</html>