<?php
session_start();
include('protect.php');
include('config.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <title>Administrador Painel</title>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <i class="fa fa-github fa-2x mx-3 ps-1"></i>
    </a>
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="Toggle navigation">
      <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <form class="me-3">
        <div id="buscar" class="form-white input-group" style="width: 250px;">
          <input type="search" id="myInput" class="form-control rounded" placeholder="Search or jump to... ( / )"
            aria-label="Search" aria-describedby="search-addon" />
        </div>
      </form>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
       
      </ul>
      
      <ul class="navbar-nav d-flex flex-row ms-auto me-3">
    
        <li class="nav-item me-3 me-lg-0 dropdown">
          <a class="nav-link dropdown-toggle" href="logout.php" id="navbarDropdown1" role="button" data-mdb-toggle="dropdown"
            aria-expanded="false">
            
            <i class="fa fa-sign-out" aria-hidden="true">Sair</i>
              
          </a>
          
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Navbar -->
<div class="container-fluid">
 <?php 
 $consulta =  "SELECT * FROM usuarios";
 $con = mysqli_query($conex,$consulta) ;
  $consulta1 = "SELECT * FROM lance";
  $con1 = mysqli_query($conex,$consulta1) ;
 ?>

<table class="table table-dark">
  <thead>
      <?php while($dado = $con->fetch_array()){ ?>
   
    <tbody>
    <tr>
    
      <th scope="row" id="myList"></th>
      <td>USUARIOS  </td>
      <td> Nome: <?php echo  $dado["nome"]; ?></td>
      <td>Email: <?php echo $dado["email"]; ?></td>
      <td>Senha :<?php echo $dado["senha"]; ?></td>
      <td>CPF: <?php echo $dado["cpf"]; ?></td>
      <td>RG : <?php echo $dado["rg"]; ?></td>
    </tr>

  </tbody>
    <?php } 
    ?>
  </thead>
  
</table>

<table class="table table-danger">
  <thead>
      <?php while($dado1 = $con1->fetch_array()){ ?>
   
    <tbody>
    <tr>
        
      <th scope="row" id="myList"></th>
      <td>LANCE </td>
      <td> Carro:  <?php echo $dado1["carro"]; ?></td>
      <td>Cpf:  <?php echo $dado1["cpf"]; ?></td>
      <td>Lance :  <?php echo $dado1["lance"]; ?></td>
     
    </tr>

  </tbody>
    <?php } 
    ?>
  </thead>
  
</table>

</div>

    
</body>


<style>
 .form-white.input-group>.form-control:focus {
  border-color: #fff;
  box-shadow: inset 0 0 0 1px #fff;
}

.navbar-dark .navbar-nav .nav-link {
  color: #fff;
}

.navbar-dark .navbar-nav .nav-link:hover,
.navbar-dark .navbar-nav .nav-link:focus {
  color: rgba(255, 255, 255, 0.75);
}

</style>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    
<script src="node_modules/jquery/dist/jquery.js"></script>
<script type="text/javascript">

$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myList").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});


</script>


</html>