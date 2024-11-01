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
        <a class="nav-link" href="/dashboard-directeur">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard , Bienvenue Directeur</span></a>
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
            <a class="collapse-item" href="/projet-gerant">Projets</a>
            <a class="collapse-item" href="/demande_de_projet-gerant">Demandes des Projets</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/facture-gerant">
          <i class="fas fa-file-invoice"></i>
          <span>Factures</span>
        </a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="/tache-gerant">
         <i class="fa fa-tasks"></i>
          <span>Tâches</span>
        </a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="/matriel-gerant">
          <i class="fa fa-industry"></i>
          <span>Materiels</span>
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
                <span class="ml-2 d-none d-lg-inline text-white small">Majd BENNOUNA</span>
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
            <h1 class="h3 mb-0 text-gray-800">Listes des Taches</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Taches</li>
              <li class="breadcrumb-item active" aria-current="page">Liste des Taches</li>
            </ol>
          </div>

          <div class="row">
          <!-- Employee Table -->
<!-- Tasks Table -->
<div class="col-lg-12 mb-4">
  <div class="card">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-danger">Les Taches</h6>
      <button class="btn btn-primary overlay" data-toggle="modal" data-target="#addTaskModal">Add Task</button>
    </div>
    <div class="table-responsive">
      <table class="table align-items-center table-flush">
        <thead class="thead-light">
          <tr>
            <th>ID</th>
            <th>Projet</th> <!-- Display project name -->
            <th>Nom de la tache</th>
            <th>Description</th>
            <th>Etat</th>
            <th>Date de completion</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody id="taskTableBody">
          <!-- Task rows will be inserted here by JavaScript -->
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Add Task Modal -->
<div class="modal fade" id="addTaskModal" tabindex="-1" role="dialog" aria-labelledby="addTaskModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addTaskModalLabel">Ajouter Tache</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="addTaskForm">
    <div class="form-group">
        <label for="project_id">Projet</label>
        <select class="form-control" id="project_id" name="project_id" required></select>
    </div>
    <div class="form-group">
        <label for="name">Nom de la tache</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control" id="description" name="description" required>
    </div>
    <div class="form-group">
        <label for="status">Etat</label>
        <select class="form-control" id="status" name="status" required>
            <option value="Not Started">En Attente</option>
            <option value="In Progress">Commencée</option>
            <option value="Completed">Completée</option>
        </select>
    </div>
    <div class="form-group">
        <label for="due_date">Date</label>
        <input type="date" class="form-control" id="due_date" name="due_date" required>
    </div>
    <button type="submit" class="btn btn-primary">Ajouetr Tache</button>
</form>

      </div>
    </div>
  </div>
</div>

<!-- Update Task Modal -->
<div class="modal fade" id="updateTaskModal" tabindex="-1" role="dialog" aria-labelledby="updateTaskModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateTaskModalLabel">Modifier Tache</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="updateTaskForm">
          <input type="hidden" id="updateTaskId" name="id">
          <div class="form-group">
            <label for="updateTaskProject">Projet</label>
            <select class="form-control" id="updateTaskProject" name="project_id" required>
              <!-- Options will be filled by JavaScript -->
            </select>
          </div>
          <div class="form-group">
            <label for="updateTaskName">Nom de la Tache</label>
            <input type="text" class="form-control" id="updateTaskName" name="name" required>
          </div>
          <div class="form-group">
            <label for="updateTaskDescription">Description</label>
            <input type="text" class="form-control" id="updateTaskDescription" name="description" required>
          </div>
          <div class="form-group">
            <label for="updateTaskStatus">Etat</label>
            <select class="form-control" id="updateTaskStatus" name="status">
              <option value="Not Started">En Attente</option>
              <option value="In Progress">Commencée</option>
              <option value="Completed">Complétée</option>
            </select>
          </div>
          <div class="form-group">
            <label for="updateTaskDueDate">Date</label>
            <input type="date" class="form-control" id="updateTaskDueDate" name="due_date">
          </div>
          <button type="submit" class="btn btn-primary">Modifier Tache</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Delete Task Modal -->
<div class="modal fade" id="deleteTaskModal" tabindex="-1" role="dialog" aria-labelledby="deleteTaskModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteTaskModalLabel">Supprimer Tache</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Etes vous sur de supprimer?</p>
        <form id="deleteTaskForm">
          <input type="hidden" id="deleteTaskId" name="id">
          <button type="submit" class="btn btn-danger">Supprimer</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        </form>
      </div>
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
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh Non!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Etes vous sur de se déconnecter?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Annuler</button>
                  <a href="/" class="btn btn-primary">Se Déconnecter</a>
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
 document.addEventListener('DOMContentLoaded', function() {
  loadTasks();
  loadProjects();

  document.getElementById('updateTaskForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const formData = new FormData(this);
    fetch(`http://localhost:3000/api/tasks/${document.getElementById('updateTaskId').value}`, {
      method: 'PUT',
      body: JSON.stringify(Object.fromEntries(formData)),
      headers: { 'Content-Type': 'application/json' }
    })
    .then(response => response.json())
    .then(data => {
      if (data.error) {
        alert('Error: ' + data.error);
      } else {
        alert('Task updated successfully!');
        $('#updateTaskModal').modal('hide');
        loadTasks();
      }
    })
    .catch(error => console.error('Error:', error));
  });

  document.getElementById('deleteTaskForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const taskId = document.getElementById('deleteTaskId').value;
    fetch(`http://localhost:3000/api/tasks/${taskId}`, {
      method: 'DELETE'
    })
    .then(response => response.json())
    .then(data => {
      if (data.error) {
        alert('Error: ' + data.error);
      } else {
        alert('Task deleted successfully!');
        $('#deleteTaskModal').modal('hide');
        loadTasks();
      }
    })
    .catch(error => console.error('Error:', error));
  });
});

function loadTasks() {
  fetch('http://localhost:3000/api/tasks')
    .then(response => response.json())
    .then(tasks => {
      const tableBody = document.getElementById('taskTableBody');
      tableBody.innerHTML = '';
      console.log(tasks);
      tasks.forEach(task => {
        tableBody.innerHTML += `
          <tr>
            <td>${task.id}</td>
            <td>${task.project_name}</td> <!-- project_id to be replaced by project name if needed -->
            <td>${task.task_name}</td>
            <td>${task.description}</td>
            <td>${task.status}</td>
            <td>${task.date}</td>
            <td>
              <button class="btn btn-warning" data-toggle="modal" data-target="#updateTaskModal"
            onclick="populateUpdateModal(${task.id}, '${task.project_name}', '${task.task_name}', '${task.description}', '${task.status}', '${task.date}')">
            Update
        </button>
              <button class="btn btn-sm btn-danger" onclick="openDeleteTaskModal(${task.id})">Delete</button>
            </td>
          </tr>
        `;
      });
    })
    .catch(error => console.error('Error:', error));
}

function loadProjects() {
  fetch('http://localhost:3000/api/projects')
    .then(response => response.json())
    .then(projects => {
      const addProjectSelect = document.getElementById('project_id');
      const updateProjectSelect = document.getElementById('updateTaskProject');
      addProjectSelect.innerHTML = '';
      updateProjectSelect.innerHTML = '';
      projects.forEach(project => {
        addProjectSelect.innerHTML += `<option value="${project.id}">${project.project_name}</option>`;
        updateProjectSelect.innerHTML += `<option value="${project.id}">${project.project_name}</option>`;
      });
    })
    .catch(error => console.error('Error:', error));
}

function populateUpdateModal(id, projectName, taskName, description, status, date) {
    document.getElementById('updateTaskId').value = id;
    document.getElementById('updateTaskProject').value = projectName; // Assuming you're setting the project name
    document.getElementById('updateTaskName').value = taskName;
    document.getElementById('updateTaskDescription').value = description;
    document.getElementById('updateTaskStatus').value = status;

    // Format the date to YYYY-MM-DD
    const formattedDate = new Date(date).toISOString().split('T')[0];
    document.getElementById('updateTaskDueDate').value = formattedDate;

    // Show the modal
    $('#updateTaskModal').modal('show');
}



function openDeleteTaskModal(id) {
  document.getElementById('deleteTaskId').value = id;
  $('#deleteTaskModal').modal('show');
}

// Handle form submission for adding a new task
document.addEventListener('DOMContentLoaded', function() {
  document.getElementById('addTaskForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const formData = new FormData(this);
    const data = Object.fromEntries(formData);

    fetch('http://localhost:3000/api/tasks', {
      method: 'POST',
      body: JSON.stringify(data),
      headers: { 'Content-Type': 'application/json' }
    })
    .then(response => response.json())
    .then(data => {
      if (data.error) {
        alert('Error: ' + data.error);
      } else {
        alert('Task added successfully!');
        $('#addTaskModal').modal('hide');
        loadTasks(); // Refresh the task list
      }
    })
    .catch(error => console.error('Error:', error));
  });
});

</script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>

</body>

</html>