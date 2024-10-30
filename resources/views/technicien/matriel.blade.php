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
        <div class="sidebar-brand-text mx-3">MAJD SARL</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="/dashboard-technicien">
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
            <a class="collapse-item" href="/projet-technicien">Projets</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/facture-technicien">
          <i class="fas fa-file-invoice"></i>
          <span>Factures</span>
        </a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="/matriel-technicien">
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
            <h1 class="h3 mb-0 text-gray-800">Liste des Materiels</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Matriels</li>
              <li class="breadcrumb-item active" aria-current="page">Liste des Matriels </li>
            </ol>
          </div>

          <div class="row">
          <!-- Employee Table -->
<!-- Materials Table -->
<div class="col-lg-12 mb-4">
  <!-- Simple Tables -->
  <div class="card">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-danger">Materials Table</h6>
      <button class="btn btn-primary overlay" data-toggle="modal" data-target="#addMaterialModal">Add Material</button>
    </div>
    <div class="table-responsive">
      <table class="table align-items-center table-flush">
        <thead class="thead-light">
          <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Quantité Existante</th>
            <th>Quantité demandé</th>
            <th>Unitée</th>
            <th>Prix à l'unité</th>
            <th>Etat</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody id="materialTableBody">
          <!-- Material rows will be inserted here by JavaScript -->
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Add Material Modal -->
<div class="modal fade" id="addMaterialModal" tabindex="-1" role="dialog" aria-labelledby="addMaterialModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addMaterialModalLabel">Ajouter nouveau matériel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="addMaterialForm">
          <div class="form-group">
            <label for="materialName">Nom</label>
            <input type="text" class="form-control" id="materialName" name="name" required>
          </div>
          <div class="form-group">
            <label for="existingQuantity">Quantitée existante</label>
            <input type="number" class="form-control" id="existingQuantity" name="existing_quantity" required>
          </div>
          <div class="form-group">
            <label for="requestedQuantity">Quantité demandé</label>
            <input type="number" class="form-control" id="requestedQuantity" name="requested_quantity" required>
          </div>
          <div class="form-group">
            <label for="materialUnit">Unitée</label>
            <input type="text" class="form-control" id="materialUnit" name="unit" required>
          </div>
          <div class="form-group">
            <label for="materialUnitPrice">Prix à l'unitée</label>
            <input type="number" class="form-control" id="materialUnitPrice" name="unit_price" step="0.01" required>
          </div>
          <div class="form-group">
            <label for="materialStatus">Etat</label>
            <input type="text" class="form-control" id="materialStatus" name="status" required>
          </div>
          <button type="submit" class="btn btn-primary">Ajouter Matériel</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Update Material Modal -->
<div class="modal fade" id="updateMaterialModal" tabindex="-1" role="dialog" aria-labelledby="updateMaterialModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateMaterialModalLabel">Modifier Matériel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="updateMaterialForm">
          <input type="hidden" id="updateMaterialId" name="id">
          <div class="form-group">
            <label for="updateMaterialName">Nom</label>
            <input type="text" class="form-control" id="updateMaterialName" name="name" required>
          </div>
          <div class="form-group">
            <label for="updateMaterialExistingQuantity">Quantitée Existante</label>
            <input type="number" class="form-control" id="updateMaterialExistingQuantity" name="existing_quantity" required>
          </div>
          <div class="form-group">
            <label for="updateMaterialRequestedQuantity">Quantitée Deamndée</label>
            <input type="number" class="form-control" id="updateMaterialRequestedQuantity" name="requested_quantity" required>
          </div>
          <div class="form-group">
            <label for="updateMaterialUnit">Unitée</label>
            <input type="text" class="form-control" id="updateMaterialUnit" name="unit" required>
          </div>
          <div class="form-group">
            <label for="updateMaterialUnitPrice">Prix à l'unitée</label>
            <input type="number" class="form-control" id="updateMaterialUnitPrice" name="unit_price" step="0.01" required>
          </div>
          <div class="form-group">
            <label for="updateMaterialStatus">Etat</label>
            <input type="text" class="form-control" id="updateMaterialStatus" name="status" required>
          </div>
          <button type="submit" class="btn btn-primary">Modifier Matériel</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Delete Material Modal -->
<div class="modal fade" id="deleteMaterialModal" tabindex="-1" role="dialog" aria-labelledby="deleteMaterialModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteMaterialModalLabel">Supprimer Matériel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Etes vous sur de supprimer ce Materiel?</p>
        <form id="deleteMaterialForm">
          <input type="hidden" id="deleteMaterialId" name="id">
          <button type="submit" class="btn btn-danger">Suppression</button>
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
                  <p>Etes vous sur de deconnecter?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Annuler</button>
                  <a href="/" class="btn btn-primary">Se Deconnecter</a>
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
  loadMaterials();

  document.getElementById('addMaterialForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const formData = new FormData(this);
    fetch('http://localhost:3000/api/materials', {
      method: 'POST',
      body: JSON.stringify(Object.fromEntries(formData)),
      headers: { 'Content-Type': 'application/json' }
    })
    .then(response => response.json())
    .then(data => {
      if (data.error) {
        alert('Error: ' + data.error);
      } else {
        alert('Material added successfully!');
        $('#addMaterialModal').modal('hide');
        loadMaterials();
      }
    })
    .catch(error => console.error('Error:', error));
  });

  document.getElementById('updateMaterialForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const formData = new FormData(this);
    fetch(`http://localhost:3000/api/materials/${document.getElementById('updateMaterialId').value}`, {
      method: 'PUT',
      body: JSON.stringify(Object.fromEntries(formData)),
      headers: { 'Content-Type': 'application/json' }
    })
    .then(response => response.json())
    .then(data => {
      if (data.error) {
        alert('Error: ' + data.error);
      } else {
        alert('Material updated successfully!');
        $('#updateMaterialModal').modal('hide');
        loadMaterials();
      }
    })
    .catch(error => console.error('Error:', error));
  });

  document.getElementById('deleteMaterialForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const materialId = document.getElementById('deleteMaterialId').value;
    fetch(`http://localhost:3000/api/materials/${materialId}`, {
      method: 'DELETE'
    })
    .then(response => response.json())
    .then(data => {
      if (data.error) {
        alert('Error: ' + data.error);
      } else {
        alert('Material deleted successfully!');
        $('#deleteMaterialModal').modal('hide');
        loadMaterials();
      }
    })
    .catch(error => console.error('Error:', error));
  });
});

function loadMaterials() {
  fetch('http://localhost:3000/api/materials')
    .then(response => response.json())
    .then(materials => {
      const tableBody = document.getElementById('materialTableBody');
      tableBody.innerHTML = '';
      materials.forEach(material => {
        tableBody.innerHTML += `
          <tr>
            <td>${material.id}</td>
            <td>${material.name}</td>
            <td>${material.existing_quantity}</td>
            <td>${material.requested_quantity}</td>
            <td>${material.unit}</td>
            <td>${material.unit_price}</td>
            <td>${material.status}</td>
            <td>
              <button class="btn btn-sm btn-warning" onclick="openUpdateMaterialModal(${material.id}, '${material.name}', '${material.existing_quantity}', '${material.requested_quantity}', '${material.unit}', '${material.unit_price}', '${material.status}')">Update</button>
              <button class="btn btn-sm btn-danger" onclick="openDeleteMaterialModal(${material.id})">Delete</button>
            </td>
          </tr>
        `;
      });
    })
    .catch(error => console.error('Error:', error));
}

function openUpdateMaterialModal(id, name, existing_quantity, requested_quantity, unit, unit_price, status) {
  // Set values in the update form fields
  document.getElementById('updateMaterialId').value = id;
  document.getElementById('updateMaterialName').value = name;
  document.getElementById('updateMaterialExistingQuantity').value = existing_quantity;
  document.getElementById('updateMaterialRequestedQuantity').value = requested_quantity;
  document.getElementById('updateMaterialUnit').value = unit;
  document.getElementById('updateMaterialUnitPrice').value = unit_price;
  document.getElementById('updateMaterialStatus').value = status;
  
  // Show the modal for updating the material
  $('#updateMaterialModal').modal('show');
}


function openDeleteMaterialModal(id) {
  document.getElementById('deleteMaterialId').value = id;
  $('#deleteMaterialModal').modal('show');
}


</script>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>

</body>

</html>