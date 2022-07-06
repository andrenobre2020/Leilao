<?php

session_start();
include('protect.php');

if(isset($_POST['submit'])){
    // print_r($_POST['nome']);
    // print_r('<br>');
     //print_r($_POST['datas']);
     //print_r('<br>');
     //print_r($_POST['email']);
    // print_r('<br>');
    // print_r($_POST['senha']);
    // print_r('<br>');
     //print_r($_POST['tel']);
     //print_r('<br>');
     //print_r($_POST['cpf']);
     //print_r('<br>');
     //print_r($_POST['rg']);
     //print_r('<br>');
     //print_r($_POST['sexo']);

     include_once('config.php');

     
  
     $lance = $_POST['lance'];
     $cpf = $_POST['cpf'];
     $carro = $_POST['carro'];

     $resul = mysqli_query($conex,"INSERT INTO lance(lance,cpf,carro)
     VALUES  ('$lance','$cpf','$carro')");



    

 }

?>
<!DOCTYPE php>
<php lang="pt-br">
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
<link rel="stylesheet" href="../style.css">
    <title>Painel</title>
</head>
<body>
<div class='dashboard'>
    <div class="dashboard-nav">
        <header><a href="#!" class="menu-toggle"><i class="fa fa-bars"></i></a><a href="#"
                                                                                   class="brand-logo"> <img src="../img/logo-sodre-santoro.webp" width="150px"></a></header>
        <nav class="dashboard-nav-list"><a href="#" class="dashboard-nav-item"><i class="fa fa-user-circle" aria-hidden="true"></i>
            Conta  </a>
           
      
            <div class='dashboard-nav-dropdown'><a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i
                    class="fa fa-money-check-alt"></i> FAÇA SEU LANCE  </a>
                <div class='dashboard-nav-dropdown-menu'><a href="#"
                                                            class="dashboard-nav-dropdown-item">Carro</a><a
                        href="#" class="dashboard-nav-dropdown-item">Sucata</a><a
                        href="#" class="dashboard-nav-dropdown-item"> Moto</a>
                </div>
            </div>
          
          <div class="nav-item-divider"></div>
          <a
                    href="logout.php" class="dashboard-nav-item"><i class="fa fa-sign-out" aria-hidden="true"></i> Sair </a>
        </nav>
    </div>
    <div class='dashboard-app'>
        <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fa fa-bars"></i></a></header>
        <div class='dashboard-content'>
            <div class='container'>
                <div class='card'>

                    <div class='card-body'>
                    <div class="row" id="ads">




                                        
                    <div id="alerta" class="alert alert-success" style="display: none;" role="alert">
  Enviado seu LANCE !  
</div>

            
<!-- Category Card -->
<div class="col-md-4">
    <div class="card rounded" id="myList">
        <div class="card-image">
            <span class="card-notify-badge">31/03 - 09:31</span>
            <span class="card-notify-year">2018</span>
            <img class="img-fluid" src="../Leiloes/car/img/mercedes.webp" width="400px" alt="Alternate Text"/>
        </div>
        <div class="card-image-overlay m-auto">
            <span class="card-detail-badge">2021</span>
            <span class="card-detail-badge">R$ 139,000.00</span>
            <span class="card-detail-badge">12500 Kms</span>
        </div>
        <div class="card-body text-center">
            <div class="ad-title m-auto">
                <h5 > BLINDADO MERCEDES-BENZ GLB200 20/21 </h5>

            <form action="painel.php" method="POST">
            <div class="form-group">
            
            <input type="text" placeholder="R$" name="lance" id="lance" step="0.01" min="0.01" >
            <input type="text" placeholder="Digite seu CPF..." name="cpf" id="cpf">
            <input style="display: none;" type="text" value="BLINDADO MERCEDES-BENZ GLB200 20/21" name="carro" id="carro">
            </div>
        
        <div class="d-flex justify-content-between align-items-center">
                        
                       
                          <div class="text-right" > <button onclick="entrar()"  name="submit" id="submit"  class="btn btn-danger  register btn-block">Enviar Lance</button> </div> 
                      </div> 
                </form>
            </div>
        
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card rounded" id="myList">
        <div class="card-image">
            <span class="card-notify-badge">31/03 - 09:34</span>
            <span class="card-notify-year">2020</span>
            <img class="img-fluid" src="../Leiloes/car/img/mercedes benz c300.webp" width="400px" alt="Alternate Text" />
        </div>
        <div class="card-image-overlay m-auto">
            <span class="card-detail-badge">Visitas : 1415</span>
            <span class="card-detail-badge">R$ 59,999</span>
            <span class="card-detail-badge">1600 Kms</span>
        </div>
        <div class="card-body text-center">
            <div class="ad-title m-auto">
                <h5>MERCEDES-BENZ C300 SPORT 2.0 20/20</h5>
            </div>
            <form action="painel.php" method="POST">
                <div class="form-group">
            
            <input type="text" placeholder="R$" name="lance" id="lance" step="0.01" min="0.01" >
            <input type="text" placeholder="Digite seu CPF..." name="cpf" id="cpf">
            <input style="display: none;" type="text" value="MERCEDES-BENZ C300" name="carro" id="carro">
</div>
        
        <div class="d-flex justify-content-between align-items-center">
                        
                       
                          <div class="text-right" > <button onclick="entrar()"  name="submit" id="submit"  class="btn btn-danger  register btn-block">Enviar Lance</button> </div> 
                      </div> 
                </form>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="card rounded" id="myList">
        <div class="card-image">
            <span class="card-notify-badge">31/03 - 09:33</span>
            <span class="card-notify-year">2021</span>
            <img class="img-fluid" src="../Leiloes/car/img/HYUNDAI HB20 10M SENSE 2021/1644497220_C1327990C.webp" alt="Alternate Text" />
        </div>
        <div class="card-image-overlay m-auto">
            <span class="card-detail-badge">Visitas : 1100</span>
            <span class="card-detail-badge">R$ 23.000</span>
            <span class="card-detail-badge">8000 Km</span>
        </div>
        <div class="card-body text-center">
            <div class="ad-title m-auto">
                <h5>HYUNDAI HB20 10M SENSE 20/21</h5>
            </div>
            <form action="painel.php" method="POST">
                <div class="form-group">
            
            <input type="text" placeholder="R$" name="lance" id="lance" step="0.01" min="0.01" >
            <input type="text" placeholder="Digite seu CPF..." name="cpf" id="cpf">
            <input style="display: none;" type="text" value="HYUNDAI HB20 10M SENSE" name="carro" id="carro">
</div>
        
        <div class="d-flex justify-content-between align-items-center">
                        
                       
                          <div class="text-right" > <button onclick="entrar()"  name="submit" id="submit"  class="btn btn-danger  register btn-block">Enviar Lance</button> </div> 
                      </div> 
                </form>
        </div>
    </div>
</div>

</div>
</div>


<div class="row" id="ads">
<!-- Category Card -->
<div class="col-md-4">
    <div class="card rounded" id="myList">
        <div class="card-image">
            <span class="card-notify-badge">31/03 - 09:34</span>
            <span class="card-notify-year">2014</span>
            <img class="img-fluid" src="../Leiloes/car/img/CHEV SPIN 1.8L MT LT 1414/1647559623_C1334095C.webp" alt="Alternate Text" />
        </div>
        <div class="card-image-overlay m-auto">
            <span class="card-detail-badge">Visitas : 1200</span>
            <span class="card-detail-badge">R$ 33.500</span>
            <span class="card-detail-badge">16000 Kms</span>
        </div>
        <div class="card-body text-center">
            <div class="ad-title m-auto">
                <h5>CHEV SPIN 1.8L MT LT 14/14</h5>
            </div>
            <form action="painel.php" method="POST">
                <div class="form-group">
            
            <input type="text" placeholder="R$" name="lance" id="lance" step="0.01" min="0.01" >
            <input type="text" placeholder="Digite seu CPF..." name="cpf" id="cpf">
            <input style="display: none;" type="text" value="CHEV SPIN 1.8L MT" name="carro" id="carro">
</div>
        
        <div class="d-flex justify-content-between align-items-center">
                        
                       
                          <div class="text-right" > <button onclick="entrar()"  name="submit" id="submit"  class="btn btn-danger  register btn-block">Enviar Lance</button> </div> 
                      </div> 
                </form>
    </div>
</div>
</div>
<div class="col-md-4">
    <div class="card rounded" id="myList">
        <div class="card-image">
            <span class="card-notify-badge">31/03 - 09:32</span>
            <span class="card-notify-year">2020</span>
            <img class="img-fluid" src="../Leiloes/car/img/VOLKSWAGEN T CROSS CL TSI AD 2020/1637250290_C1311605C.webp" alt="Alternate Text" />
        </div>
        <div class="card-image-overlay m-auto">
            <span class="card-detail-badge">Visitas : 1500</span>
            <span class="card-detail-badge">R$ 57.000</span>
            <span class="card-detail-badge">14500 Kms</span>
        </div>
        <div class="card-body text-center">
            <div class="ad-title m-auto">
                <h5>VOLKSWAGEN T CROSS CL TSI AD 2020</h5>
            </div>
            <form action="painel.php" method="POST">
                <div class="form-group">
            
            <input type="text" placeholder="R$" name="lance" id="lance" step="0.01" min="0.01" >
            <input type="text" placeholder="Digite seu CPF..." name="cpf" id="cpf">
            <input style="display: none;" type="text" value="VOLKSWAGEN T CROSS CL" name="carro" id="carro">
</div>
        
        <div class="d-flex justify-content-between align-items-center">
                        
                       
                          <div class="text-right" > <button onclick="entrar()"  name="submit" id="submit"  class="btn btn-danger  register btn-block">Enviar Lance</button> </div> 
                      </div> 
                </form>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="card rounded" id="myList">
        <div class="card-image">
            <span class="card-notify-badge">31/03 - 09:31</span>
            <span class="card-notify-year">2006</span>
            <img class="img-fluid" src="../Leiloes/car/img/CHEVROLET ASTRA HB 4P ADVANTAGE 2006/1643809580_C1326364C.webp" alt="Alternate Text" />
        </div>
        <div class="card-image-overlay m-auto">
            <span class="card-detail-badge">Visitas : 1560</span>
            <span class="card-detail-badge">R$10,000</span>
            <span class="card-detail-badge">8000 Kms</span>
        </div>
        <div class="card-body text-center">
            <div class="ad-title m-auto">
                <h5>CHEVROLET ASTRA HB 4P ADVANTAGE 2006</h5>
            </div>
            <form action="painel.php" method="POST">
                <div class="form-group">
            
            <input type="text" placeholder="R$" name="lance" id="lance" step="0.01" min="0.01" >
            <input type="text" placeholder="Digite seu CPF..." name="cpf" id="cpf">
            <input style="display: none;" type="text" value="CHEVROLET ASTRA HB 4P" name="carro" id="carro">
</div>
        
        <div class="d-flex justify-content-between align-items-center">
                        
                       
                          <div class="text-right" > <button onclick="entrar()"  name="submit" id="submit"  class="btn btn-danger  register btn-block">Enviar Lance</button> </div> 
                      </div> 
                </form>
        </div>
    </div>
</div>

</div>




<div class="row" id="ads">
<!-- Category Card -->
<div class="col-md-4">
    <div class="card rounded" id="myList">
        <div class="card-image">
            <span class="card-notify-badge">31/03 - 09:34</span>
            <span class="card-notify-year">2012</span>
            <img class="img-fluid" src="../Leiloes/car/img/FORD ECOSPORT FSL 1.6 2012/1645100527_C1329466C.webp" alt="Alternate Text" />
        </div>
        <div class="card-image-overlay m-auto">
            <span class="card-detail-badge">Visitas : 1311</span>
            <span class="card-detail-badge">R$26,000</span>
            <span class="card-detail-badge">15000 Kms</span>
        </div>
        <div class="card-body text-center">
            <div class="ad-title m-auto">
                <h5>FORD ECOSPORT FSL 1.6 2012</h5>
            </div>
            <form action="painel.php" method="POST">
                <div class="form-group">
            
            <input type="text" placeholder="R$" name="lance" id="lance" step="0.01" min="0.01" >
            <input type="text" placeholder="Digite seu CPF..." name="cpf" id="cpf">
            <input style="display: none;" type="text" value="FORD ECOSPORT FSL 1.6" name="carro" id="carro">
</div>
        
        <div class="d-flex justify-content-between align-items-center">
                        
                       
                          <div class="text-right" > <button onclick="entrar()"  name="submit" id="submit"  class="btn btn-danger  register btn-block">Enviar Lance</button> </div> 
                      </div> 
                </form>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card rounded" id="myList">
        <div class="card-image">
            <span class="card-notify-badge">31/03 - 09:33</span>
            <span class="card-notify-year">2012</span>
            <img class="img-fluid" src="../Leiloes/car/img/TOYOTA HILUX CD 4X2 SR 2012/1609345618_C1246415A.webp" alt="Alternate Text" />
        </div>
        <div class="card-image-overlay m-auto">
            <span class="card-detail-badge">Visitas : 1200</span>
            <span class="card-detail-badge">R$21,500</span>
            <span class="card-detail-badge">17600 Km</span>
        </div>
        <div class="card-body text-center">
            <div class="ad-title m-auto">
                <h5>TOYOTA HILUX CD 4X2 SR 2012</h5>
            </div>
            <form action="painel.php" method="POST">
                <div class="form-group">
            
            <input type="text" placeholder="R$" name="lance" id="lance" step="0.01" min="0.01" >
            <input type="text" placeholder="Digite seu CPF..." name="cpf" id="cpf">
            <input style="display: none;" type="text" value="TOYOTA HILUX CD 4X2" name="carro" id="carro">
</div>
        
        <div class="d-flex justify-content-between align-items-center">
                        
                       
                          <div class="text-right" > <button onclick="entrar()"  name="submit" id="submit"  class="btn btn-danger  register btn-block">Enviar Lance</button> </div> 
                      </div> 
                </form>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="card rounded" id="myList">
        <div class="card-image">
            <span class="card-notify-badge">31/03 - 09:30</span>
            <span class="card-notify-year">2019</span>
            <img class="img-fluid" src="../Leiloes/car/img/RENAULT SANDERO 2019/1645564101_C1329931C.webp" alt="Alternate Text" />
        </div>
        <div class="card-image-overlay m-auto">
            <span class="card-detail-badge">Visitas : 1156</span>
            <span class="card-detail-badge">R$30,500</span>
            <span class="card-detail-badge">8000 Kms</span>
        </div>
        <div class="card-body text-center">
            <div class="ad-title m-auto">
                <h5>RENAULT SANDERO 2019</h5>
            </div>
            <form action="painel.php" method="POST">
                <div class="form-group">
            
            <input type="text" placeholder="R$" name="lance" id="lance" step="0.01" min="0.01" >
            <input type="text" placeholder="Digite seu CPF..." name="cpf" id="cpf">
            <input style="display: none;" type="text" value="RENAULT SANDERO 2019" name="carro" id="carro">
</div>
        
        <div class="d-flex justify-content-between align-items-center">
                        
                       
                          <div class="text-right" > <button onclick="entrar()"  name="submit" id="submit"  class="btn btn-danger  register btn-block">Enviar Lance</button> </div> 
                      </div> 
                </form>
        </div>
    </div>
</div>

</div>



<div class="row" id="ads">
<!-- Category Card -->
<div class="col-md-4">
    <div class="card rounded" id="myList">
        <div class="card-image">
            <span class="card-notify-badge">31/03 - 10:20</span>
            <span class="card-notify-year">2014</span>
            <img class="img-fluid" src="../Leiloes/car/img/SCANIA P 310 B 8X2 2014/1640194730_C1315218C.webp" alt="Alternate Text" />
        </div>
        <div class="card-image-overlay m-auto">
            <span class="card-detail-badge">Visitas : 1333</span>
            <span class="card-detail-badge">R$125,000</span>
            <span class="card-detail-badge">14000 Km</span>
        </div>
        <div class="card-body text-center">
            <div class="ad-title m-auto">
                <h5>SCANIA 310 B 8X2 2014</h5>
            </div>
            <form action="painel.php" method="POST">
                <div class="form-group">
            
            <input type="text" placeholder="R$" name="lance" id="lance" step="0.01" min="0.01" >
            <input type="text" placeholder="Digite seu CPF..." name="cpf" id="cpf">
            <input style="display: none;" type="text" value="SCANIA 310 B 8X2" name="carro" id="carro">
</div>
        
        <div class="d-flex justify-content-between align-items-center">
                        
                       
                          <div class="text-right" > <button onclick="entrar()"  name="submit" id="submit"  class="btn btn-danger  register btn-block">Enviar Lance</button> </div> 
                      </div> 
                </form>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card rounded" id="myList">
        <div class="card-image">
            <span class="card-notify-badge">31/03 - 09:32</span>
            <span class="card-notify-year">2019</span>
            <img class="img-fluid" src="../Leiloes/car/img/HYUNDAI CRETA 16A ATTITU 2019/1649179334_C1310575A.webp" alt="Alternate Text" />
        </div>
        <div class="card-image-overlay m-auto">
            <span class="card-detail-badge">Visitas : 1160</span>
            <span class="card-detail-badge">$65,500</span>
            <span class="card-detail-badge">13000 Kms</span>
        </div>
        <div class="card-body text-center">
            <div class="ad-title m-auto">
                <h5> HYUNDAI CRETA 16A ATTITU 2019</h5>
            </div>
            <form action="painel.php" method="POST">
                <div class="form-group">
            
            <input type="text" placeholder="R$" name="lance" id="lance" step="0.01" min="0.01" >
            <input type="text" placeholder="Digite seu CPF..." name="cpf" id="cpf">
            <input style="display: none;" type="text" value="HYUNDAI CRETA 16A ATTIT" name="carro" id="carro">
</div>
        
        <div class="d-flex justify-content-between align-items-center">
                        
                       
                          <div class="text-right" > <button onclick="entrar()"  name="submit" id="submit"  class="btn btn-danger  register btn-block">Enviar Lance</button> </div> 
                      </div> 
                </form>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="card rounded" id="myList">
        <div class="card-image">
            <span class="card-notify-badge">31/03 - 09:22</span>
            <span class="card-notify-year">2009</span>
            <img class="img-fluid" src="../Leiloes/car/img/CHEVROLET CLASSIC 2009/1641570850_C1320847A.webp" alt="Alternate Text" />
        </div>
        <div class="card-image-overlay m-auto">
            <span class="card-detail-badge">Visitas : 856</span>
            <span class="card-detail-badge">R$2.500</span>
            <span class="card-detail-badge">8000 Kms</span>
        </div>
        <div class="card-body text-center">
            <div class="ad-title m-auto">
                <h5>CHEVROLET CLASSIC 2009</h5>
            </div>
            <form action="painel.php" method="POST">
                <div class="form-group">
            
            <input type="text" placeholder="R$" name="lance" id="lance" step="0.01" min="0.01" >
            <input type="text" placeholder="Digite seu CPF..." name="cpf" id="cpf">
            <input style="display: none;" type="text" value="CHEVROLET CLASSIC 2009" name="carro" id="carro">
</div>
        
        <div class="d-flex justify-content-between align-items-center">
                        
                       
                          <div class="text-right" > <button onclick="entrar()"  name="submit" id="submit"  class="btn btn-danger  register btn-block">Enviar Lance</button> </div> 
                      </div> 
                </form>
        </div>
    </div>
</div>

</div>



<div class="row" id="ads">
<!-- Category Card -->
<div class="col-md-4">
    <div class="card rounded" id="myList">
        <div class="card-image">
            <span class="card-notify-badge">31/03 - 09:30</span>
            <span class="card-notify-year">2008</span>
            <img class="img-fluid" src="../Leiloes/car/img/VOLKSWAGEN KOMBI 2008/1640807594_C1319521A.webp" alt="Alternate Text" />
        </div>
        <div class="card-image-overlay m-auto">
            <span class="card-detail-badge">Visitas : 900</span>
            <span class="card-detail-badge">R$ 5.500</span>
            <span class="card-detail-badge">15400 Kms</span>
        </div>
        <div class="card-body text-center">
            <div class="ad-title m-auto">
                <h5>VOLKSWAGEN KOMBI 2008</h5>
            </div>
            <form action="painel.php" method="POST">
                <div class="form-group">
            
            <input type="text" placeholder="R$" name="lance" id="lance" step="0.01" min="0.01" >
            <input type="text" placeholder="Digite seu CPF..." name="cpf" id="cpf">
            <input style="display: none;" type="text" value="VOLKSWAGEN KOMBI 2008" name="carro" id="carro">
</div>
        
        <div class="d-flex justify-content-between align-items-center">
                        
                       
                          <div class="text-right" > <button onclick="entrar()"  name="submit" id="submit"  class="btn btn-danger  register btn-block">Enviar Lance</button> </div> 
                      </div> 
                </form>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card rounded" id="myList">
        <div class="card-image">
            <span class="card-notify-badge">31/03 - 09:32</span>
            <span class="card-notify-year">2015</span>
            <img class="img-fluid" src="../Leiloes/car/img/VOLKSWAGEN CROSSFOX MA 2015/1642778290_C1323833C.webp" alt="Alternate Text" />
        </div>
        <div class="card-image-overlay m-auto">
            <span class="card-detail-badge">Visitas : 1325</span>
            <span class="card-detail-badge">R$16.500</span>
            <span class="card-detail-badge">16100 Kms</span>
        </div>
        <div class="card-body text-center">
            <div class="ad-title m-auto">
                <h5>VOLKSWAGEN CROSSFOX MA 2015</h5>
            </div>
            <form action="painel.php" method="POST">
                <div class="form-group">
            
            <input type="text" placeholder="R$" name="lance" id="lance" step="0.01" min="0.01" >
            <input type="text" placeholder="Digite seu CPF..." name="cpf" id="cpf">
            <input style="display: none;" type="text" value="VOLKSWAGEN CROSSFOX MA 2015" name="carro" id="carro">
</div>
        
        <div class="d-flex justify-content-between align-items-center">
                        
                       
                          <div class="text-right" > <button onclick="entrar()"  name="submit" id="submit"  class="btn btn-danger  register btn-block">Enviar Lance</button> </div> 
                      </div> 
                </form>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="card rounded" id="myList">
        <div class="card-image">
            <span class="card-notify-badge">31/03 - 09:31</span>
            <span class="card-notify-year">2011</span>
            <img class="img-fluid" src="../Leiloes/car/img/CHEVROLET PRISMA 1.0L LS 2011/1641910351_C1321345C.webp" alt="Alternate Text" />
        </div>
        <div class="card-image-overlay m-auto">
            <span class="card-detail-badge">Visitas : 1300</span>
            <span class="card-detail-badge">R$10.000</span>
            <span class="card-detail-badge">8000 Kms</span>
        </div>
        <div class="card-body text-center">
            <div class="ad-title m-auto">
                <h5>CHEVROLET PRISMA 1.0L LS 2011</h5>
            </div>
            <form action="painel.php" method="POST">
                <div class="form-group">
            
            <input type="text" placeholder="R$" name="lance" id="lance" step="0.01" min="0.01" >
            <input type="text" placeholder="Digite seu CPF..." name="cpf" id="cpf">
            <input style="display: none;" type="text" value="CHEVROLET PRISMA 1.0L" name="carro" id="carro">
</div>
        
        <div class="d-flex justify-content-between align-items-center">
                        
                       
                          <div class="text-right" > <button onclick="entrar()"  name="submit" id="submit"  class="btn btn-danger  register btn-block">Enviar Lance</button> </div> 
                      </div> 
                </form>
        </div>
    </div>
</div>

</div>



<div class="row" id="ads">
<!-- Category Card -->
<div class="col-md-4">
    <div class="card rounded" id="myList">
        <div class="card-image">
            <span class="card-notify-badge">31/03 - 09:34</span>
            <span class="card-notify-year">2018</span>
            <img class="img-fluid" src="../Leiloes/car/img/VOLKSWAGEN GOL TL MCV 2018/1616590561_C1269226C.webp" alt="Alternate Text" />
        </div>
        <div class="card-image-overlay m-auto">
            <span class="card-detail-badge">Visitas : 1516</span>
            <span class="card-detail-badge">R$15.000</span>
            <span class="card-detail-badge">13000 Kms</span>
        </div>
        <div class="card-body text-center">
            <div class="ad-title m-auto">
                <h5>VOLKSWAGEN GOL TL MCV 2018 </h5>
            </div>
            <form action="painel.php" method="POST">
                <div class="form-group">
            
            <input type="text" placeholder="R$" name="lance" id="lance" step="0.01" min="0.01" >
            <input type="text" placeholder="Digite seu CPF..." name="cpf" id="cpf">
            <input style="display: none;" type="text" value="VOLKSWAGEN GOL TL MCV 2018" name="carro" id="carro">
</div>
        
        <div class="d-flex justify-content-between align-items-center">
                        
                       
                          <div class="text-right" > <button onclick="entrar()"  name="submit" id="submit"  class="btn btn-danger  register btn-block">Enviar Lance</button> </div> 
                      </div> 
                </form>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card rounded" id="myList">
        <div class="card-image">
            <span class="card-notify-badge">31/03 - 09:31</span>
            <span class="card-notify-year">2009</span>
            <img class="img-fluid" src="../Leiloes/car/img/FIAT DOBLO CARGO FLEX 2009/1616764061_C1269688A.webp" alt="Alternate Text" />
        </div>
        <div class="card-image-overlay m-auto">
            <span class="card-detail-badge">Visitas : 1308</span>
            <span class="card-detail-badge">R$ 7.600</span>
            <span class="card-detail-badge">18.000 Km</span>
        </div>
        <div class="card-body text-center">
            <div class="ad-title m-auto">
                <h5>FIAT DOBLO CARGO FLEX 2009</h5>
            </div>
            <form action="painel.php" method="POST">
                <div class="form-group">
            
            <input type="text" placeholder="R$" name="lance" id="lance" step="0.01" min="0.01" >
            <input type="text" placeholder="Digite seu CPF..." name="cpf" id="cpf">
            <input style="display: none;" type="text" value="FIAT DOBLO CARGO FLEX 2009" name="carro" id="carro">
</div>
        
        <div class="d-flex justify-content-between align-items-center">
                        
                       
                          <div class="text-right" > <button onclick="entrar()"  name="submit" id="submit"  class="btn btn-danger  register btn-block">Enviar Lance</button> </div> 
                      </div> 
                </form>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="card rounded" id="myList">
        <div class="card-image">
            <span class="card-notify-badge">31/03 - 09:34</span>
            <span class="card-notify-year">2013</span>
            <img class="img-fluid" src="../Leiloes/car/img/FIAT BRAVO ABSOLUTE DUAL 2013/1643721176_C1325961A.webp" alt="Alternate Text" />
        </div>
        <div class="card-image-overlay m-auto">
            <span class="card-detail-badge">Visitas : 1210</span>
            <span class="card-detail-badge">R$ 13.500</span>
            <span class="card-detail-badge">8000 Kms</span>
        </div>
        <div class="card-body text-center">
            <div class="ad-title m-auto">
                <h5> FIAT BRAVO ABSOLUTE DUAL 2013</h5>
            </div>
            <form action="painel.php" method="POST">
                <div class="form-group">
            
            <input type="text" placeholder="R$" name="lance" id="lance" step="0.01" min="0.01" >
            <input type="text" placeholder="Digite seu CPF..." name="cpf" id="cpf">
            <input style="display: none;" type="text" value="FIAT BRAVO ABSOLUTE DUAL 2013" name="carro" id="carro">
</div>
        
        <div class="d-flex justify-content-between align-items-center">
                        
                       
                          <div class="text-right" > <button onclick="entrar()"  name="submit" id="submit"  class="btn btn-danger  register btn-block">Enviar Lance</button> </div> 
                      </div> 
                </form>
        </div>
    </div>
</div>

</div>





<div class="row" id="ads">
<!-- Category Card -->
<div class="col-md-4">
    <div class="card rounded" id="myList">
        <div class="card-image">
            <span class="card-notify-badge">31/03 - 09:25</span>
            <span class="card-notify-year">2012</span>
            <img class="img-fluid" src="../Leiloes/car/img/RENAULT DUSTER 4X2 2012/1635535969_C1308450A.webp" alt="Alternate Text" />
        </div>
        <div class="card-image-overlay m-auto">
            <span class="card-detail-badge">Visitas : 1200</span>
            <span class="card-detail-badge">R$ 14.000</span>
            <span class="card-detail-badge">17.000 Km</span>
        </div>
        <div class="card-body text-center">
            <div class="ad-title m-auto">
                <h5>RENAULT DUSTER 4X2 2012</h5>
            </div>
            <form action="painel.php" method="POST">
                <div class="form-group">
            
            <input type="text" placeholder="R$" name="lance" id="lance" step="0.01" min="0.01" >
            <input type="text" placeholder="Digite seu CPF..." name="cpf" id="cpf">
            <input style="display: none;" type="text" value="RENAULT DUSTER 4X2 2012" name="carro" id="carro">
</div>
        
        <div class="d-flex justify-content-between align-items-center">
                        
                       
                          <div class="text-right" > <button onclick="entrar()"  name="submit" id="submit"  class="btn btn-danger  register btn-block">Enviar Lance</button> </div> 
                      </div> 
                </form>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card rounded" id="myList">
        <div class="card-image">
            <span class="card-notify-badge">31/03 - 09:20</span>
            <span class="card-notify-year">2016</span>
            <img class="img-fluid" src="../Leiloes/car/img/AUDI A3 LM 150CV 2016/1647872393_C1328152F.webp" alt="Alternate Text" />
        </div>
        <div class="card-image-overlay m-auto">
            <span class="card-detail-badge">Visitas : 1189</span>
            <span class="card-detail-badge">R$ 26.000</span>
            <span class="card-detail-badge">10.000 Km</span>
        </div>
        <div class="card-body text-center">
            <div class="ad-title m-auto">
                <h5>AUDI A3 LM 150CV 2016</h5>
            </div>
            <form action="painel.php" method="POST">
                <div class="form-group">
            
            <input type="text" placeholder="R$" name="lance" id="lance" step="0.01" min="0.01" >
            <input type="text" placeholder="Digite seu CPF..." name="cpf" id="cpf">
            <input style="display: none;" type="text" value="AUDI A3 LM 150CV 2016" name="carro" id="carro">
</div>
        
        <div class="d-flex justify-content-between align-items-center">
                        
                       
                          <div class="text-right" > <button onclick="entrar()"  name="submit" id="submit"  class="btn btn-danger  register btn-block">Enviar Lance</button> </div> 
                      </div> 
                </form>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="card rounded" id="myList">
        <div class="card-image">
            <span class="card-notify-badge">Price Reduced</span>
            <span class="card-notify-year">2019</span>
            <img class="img-fluid" src="../Leiloes/car/img/TOYOTA COROLLA XEI FLEX 2019/1649169033_C1330832G.webp" alt="Alternate Text" />
        </div>
        <div class="card-image-overlay m-auto">
            <span class="card-detail-badge">Visitas : 1753</span>
            <span class="card-detail-badge">R$ 52.000</span>
            <span class="card-detail-badge">12.000 Km</span>
        </div>
        <div class="card-body text-center">
            <div class="ad-title m-auto">
                <h5>TOYOTA COROLLA XEI FLEX 2019</h5>
            </div>
            <form action="painel.php" method="POST">
                <div class="form-group">
            
            <input type="text" placeholder="R$" name="lance" id="lance" step="0.01" min="0.01" >
            <input type="text" placeholder="Digite seu CPF..." name="cpf" id="cpf">
            <input style="display: none;" type="text" value="TOYOTA COROLLA XEI FLEX 2019" name="carro" id="carro">
</div>
        
        <div class="d-flex justify-content-between align-items-center">
                        
                       
                          <div class="text-right" > <button onclick="entrar()"  name="submit" id="submit"  class="btn btn-danger  register btn-block">Enviar Lance</button> </div> 
                      </div> 
                </form>
        </div>
    </div>
</div>

</div>



<div class="row" id="ads">
<!-- Category Card -->
<div class="col-md-4">
    <div class="card rounded" id="myList">
        <div class="card-image">
            <span class="card-notify-badge">31/03 - 09:25</span>
            <span class="card-notify-year">2019</span>
            <img class="img-fluid" src="../Leiloes/car/img/MERCEDES-BENZ C180 FF 2019/1644348361_C1327622A.webp" alt="Alternate Text" />
        </div>
        <div class="card-image-overlay m-auto">
            <span class="card-detail-badge">Visitas : 1962</span>
            <span class="card-detail-badge">R$ 62.000</span>
            <span class="card-detail-badge">17.000 Kms</span>
        </div>
        <div class="card-body text-center">
            <div class="ad-title m-auto">
                <h5>MERCEDES-BENZ C180 FF 2019</h5>
            </div>
            <form action="painel.php" method="POST">
                <div class="form-group">
            
            <input type="text" placeholder="R$" name="lance" id="lance" step="0.01" min="0.01" >
            <input type="text" placeholder="Digite seu CPF..." name="cpf" id="cpf">
            <input style="display: none;" type="text" value="MERCEDES-BENZ C180 FF 2019" name="carro" id="carro">
</div>
        
        <div class="d-flex justify-content-between align-items-center">
                        
                       
                          <div class="text-right" > <button onclick="entrar()"  name="submit" id="submit"  class="btn btn-danger  register btn-block">Enviar Lance</button> </div> 
                      </div> 
                </form>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card rounded" id="myList">
        <div class="card-image">
            <span class="card-notify-badge">31/03 - 09:30</span>
            <span class="card-notify-year">2007</span>
            <img class="img-fluid" src="../Leiloes/car/img/PEUGEOT 206 PRESEN FX 2007/1645189535_C1329704C.webp" alt="Alternate Text" />
        </div>
        <div class="card-image-overlay m-auto">
            <span class="card-detail-badge">Visitas : 1852</span>
            <span class="card-detail-badge">R$ 3.000</span>
            <span class="card-detail-badge">13000 Kms</span>
        </div>
        <div class="card-body text-center">
            <div class="ad-title m-auto">
                <h5>PEUGEOT 206 PRESEN FX 2007</h5>
            </div>
            <form action="painel.php" method="POST">
                <div class="form-group">
            
            <input type="text" placeholder="R$" name="lance" id="lance" step="0.01" min="0.01" >
            <input type="text" placeholder="Digite seu CPF..." name="cpf" id="cpf">
            <input style="display: none;" type="text" value="PEUGEOT 206 PRESEN FX 2007" name="carro" id="carro">
</div>
        
        <div class="d-flex justify-content-between align-items-center">
                        
                       
                          <div class="text-right" > <button onclick="entrar()"  name="submit" id="submit"  class="btn btn-danger  register btn-block">Enviar Lance</button> </div> 
                      </div> 
                </form>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="card rounded" id="myList">
        <div class="card-image">
            <span class="card-notify-badge">31/03 - 09:36</span>
            <span class="card-notify-year">2008</span>
            <img class="img-fluid" src="../Leiloes/car/img/FIAT IDEA ADVENTURE FLEX 2008/1643913915_C1326651C.webp" alt="Alternate Text" />
        </div>
        <div class="card-image-overlay m-auto">
            <span class="card-detail-badge">Visitas : 1200</span>
            <span class="card-detail-badge">R$ 6.200</span>
            <span class="card-detail-badge">8000 Kms</span>
        </div>
        <div class="card-body text-center">
            <div class="ad-title m-auto">
                <h5>FIAT IDEA ADVENTURE FLEX 2008</h5>
            </div>
            <form action="painel.php" method="POST">
                <div class="form-group">
            
            <input type="text" placeholder="R$" name="lance" id="lance" step="0.01" min="0.01" >
            <input type="text" placeholder="Digite seu CPF..." name="cpf" id="cpf">
            <input style="display: none;" type="text" value="FIAT IDEA ADVENTURE FLEX 2008" name="carro" id="carro">
</div>
        
        <div class="d-flex justify-content-between align-items-center">
                        
                       
                          <div class="text-right" > <button onclick="entrar()"  name="submit" id="submit"  class="btn btn-danger  register btn-block">Enviar Lance</button> </div> 
                      </div> 
                </form>
        </div>
    </div>
</div>

</div>




<div class="row" id="ads">
<!-- Category Card -->
<div class="col-md-4">
    <div class="card rounded" id="myList">
        <div class="card-image">
            <span class="card-notify-badge">31/03 - 09:32</span>
            <span class="card-notify-year">2014</span>
            <img class="img-fluid" src="../Leiloes/car/img/HYUNDAI HB20X 1.6A PREMI 2014/1643040178_C1324007A.webp" alt="Alternate Text" />
        </div>
        <div class="card-image-overlay m-auto">
            <span class="card-detail-badge">Visitas : 1023</span>
            <span class="card-detail-badge">R$ 16.500</span>
            <span class="card-detail-badge">14.000 Km</span>
        </div>
        <div class="card-body text-center">
            <div class="ad-title m-auto">
                <h5>HYUNDAI HB20X 1.6A PREMI 2014</h5>
            </div>
            <form action="painel.php" method="POST">
                <div class="form-group">
            
            <input type="text" placeholder="R$" name="lance" id="lance" step="0.01" min="0.01" >
            <input type="text" placeholder="Digite seu CPF..." name="cpf" id="cpf">
            <input style="display: none;" type="text" value="HYUNDAI HB20X 1.6A PREMI 2014" name="carro" id="carro">
</div>
        
        <div class="d-flex justify-content-between align-items-center">
                        
                       
                          <div class="text-right" > <button onclick="entrar()"  name="submit" id="submit"  class="btn btn-danger  register btn-block">Enviar Lance</button> </div> 
                      </div> 
                </form>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card rounded" id="myList">
        <div class="card-image">
            <span class="card-notify-badge">31/03 - 09:39</span>
            <span class="card-notify-year">2006</span>
            <img class="img-fluid" src="../Leiloes/car/img/CHEVROLET ZAFIRA COMFORT 2006/1646403976_C1332132C.webp" alt="Alternate Text" />
        </div>
        <div class="card-image-overlay m-auto">
            <span class="card-detail-badge">Visitas : 1150</span>
            <span class="card-detail-badge">R$3.400</span>
            <span class="card-detail-badge">12.000 Km</span>
        </div>
        <div class="card-body text-center">
            <div class="ad-title m-auto">
                <h5>CHEVROLET ZAFIRA COMFORT 2006</h5>
            </div>
            <form action="painel.php" method="POST">
                <div class="form-group">
            
            <input type="text" placeholder="R$" name="lance" id="lance" step="0.01" min="0.01" >
            <input type="text" placeholder="Digite seu CPF..." name="cpf" id="cpf">
            <input style="display: none;" type="text" value="CHEVROLET ZAFIRA COMFORT 2006" name="carro" id="carro">
</div>
        
        <div class="d-flex justify-content-between align-items-center">
                        
                       
                          <div class="text-right" > <button onclick="entrar()"  name="submit" id="submit"  class="btn btn-danger  register btn-block">Enviar Lance</button> </div> 
                      </div> 
                </form>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="card rounded" id="myList">
        <div class="card-image">
            <span class="card-notify-badge">31/03 - 09:30</span>
            <span class="card-notify-year">2012</span>
            <img class="img-fluid" src="../Leiloes/car/img/CITROEN C3 EXC FLEX 2012/1644587367_C1328225C.webp" alt="Alternate Text" />
        </div>
        <div class="card-image-overlay m-auto">
            <span class="card-detail-badge">Visitas : 1220</span>
            <span class="card-detail-badge">R$ 10.000</span>
            <span class="card-detail-badge">8.000 Km</span>
        </div>
        <div class="card-body text-center">
            <div class="ad-title m-auto">
                <h5>CITROEN C3 EXC FLEX 2012</h5>
            </div>
            <form action="painel.php" method="POST">
                <div class="form-group">
            
            <input type="text" placeholder="R$" name="lance" id="lance" step="0.01" min="0.01" >
            <input type="text" placeholder="Digite seu CPF..." name="cpf" id="cpf">
            <input style="display: none;" type="text" value="CITROEN C3 EXC FLEX 2012" name="carro" id="carro">
</div>
        
        <div class="d-flex justify-content-between align-items-center">
                        
                       
                          <div class="text-right" > <button onclick="entrar()"  name="submit" id="submit"  class="btn btn-danger  register btn-block">Enviar Lance</button> </div> 
                      </div> 
                </form>
        </div>
    </div>
</div>

</div>




<div class="row" id="ads">
<!-- Category Card -->
<div class="col-md-4">
    <div class="card rounded" id="myList">
        <div class="card-image">
            <span class="card-notify-badge">31/03 - 09:22</span>
            <span class="card-notify-year">2019</span>
            <img class="img-fluid" src="../Leiloes/car/img/FORD ECOSPORT 1.5 2019/1645714188_C1330937C.webp" alt="Alternate Text" />
        </div>
        <div class="card-image-overlay m-auto">
            <span class="card-detail-badge">Visitas : 1321</span>
            <span class="card-detail-badge">R$ 21.000</span>
            <span class="card-detail-badge">13.700 Km</span>
        </div>
        <div class="card-body text-center">
            <div class="ad-title m-auto">
                <h5>FORD ECOSPORT 1.5 2019</h5>
            </div>
            <form action="painel.php" method="POST">
                <div class="form-group">
            
            <input type="text" placeholder="R$" name="lance" id="lance" step="0.01" min="0.01" >
            <input type="text" placeholder="Digite seu CPF..." name="cpf" id="cpf">
            <input style="display: none;" type="text" value="FORD ECOSPORT 1.5 2019" name="carro" id="carro">
</div>
        
        <div class="d-flex justify-content-between align-items-center">
                        
                       
                          <div class="text-right" > <button onclick="entrar()"  name="submit" id="submit"  class="btn btn-danger  register btn-block">Enviar Lance</button> </div> 
                      </div> 
                </form>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card rounded" id="myList">
        <div class="card-image">
            <span class="card-notify-badge">31/03 - 09:15</span>
            <span class="card-notify-year">2015</span>
            <img class="img-fluid" src="../Leiloes/car/img/FORD FIESTA SD 1.6 LTIAB 2015/1634760756_C1306603C.webp" alt="Alternate Text" />
        </div>
        <div class="card-image-overlay m-auto">
            <span class="card-detail-badge">Visitas : 1620</span>
            <span class="card-detail-badge">R$20.000</span>
            <span class="card-detail-badge">13.000 Km</span>
        </div>
        <div class="card-body text-center">
            <div class="ad-title m-auto">
                <h5> FORD FIESTA SD 1.6 LTIAB 2015</h5>
            </div>
            <form action="painel.php" method="POST">
                <div class="form-group">
            
            <input type="text" placeholder="R$" name="lance" id="lance" step="0.01" min="0.01" >
            <input type="text" placeholder="Digite seu CPF..." name="cpf" id="cpf">
            <input style="display: none;" type="text" value="FORD FIESTA SD 1.6 LTIAB 2015" name="carro" id="carro">
</div>
        
        <div class="d-flex justify-content-between align-items-center">
                        
                       
                          <div class="text-right" > <button onclick="entrar()"  name="submit" id="submit"  class="btn btn-danger  register btn-block">Enviar Lance</button> </div> 
                      </div> 
                </form>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="card rounded" id="myList">
        <div class="card-image">
            <span class="card-notify-badge">31/03 - 09:26</span>
            <span class="card-notify-year">2020</span>
            <img class="img-fluid" src="../Leiloes/car/img/YAMAHA MT03 ABS 2020/1643036092_C1323279A.webp" alt="Alternate Text" />
        </div>
        <div class="card-image-overlay m-auto">
            <span class="card-detail-badge">Visitas : 1320</span>
            <span class="card-detail-badge">R$ 3.800</span>
            <span class="card-detail-badge">10.000 Kms</span>
        </div>
        <div class="card-body text-center">
            <div class="ad-title m-auto">
                <h5>YAMAHA MT03 ABS 2020</h5>
            </div>
            <form action="painel.php" method="POST">
                <div class="form-group">
            
            <input type="text" placeholder="R$" name="lance" id="lance" step="0.01" min="0.01" >
            <input type="text" placeholder="Digite seu CPF..." name="cpf" id="cpf">
            <input style="display: none;" type="text" value="YAMAHA MT03 ABS 2020" name="carro" id="carro">
</div>
        
        <div class="d-flex justify-content-between align-items-center">
                        
                       
                          <div class="text-right" > <button onclick="entrar()"  name="submit" id="submit"  class="btn btn-danger  register btn-block">Enviar Lance</button> </div> 
                      </div> 
                </form>
    </div>
</div>

</div>




<div class="row" id="ads">
<!-- Category Card -->
<div class="col-md-4">
    <div class="card rounded" id="myList">
        <div class="card-image">
            <span class="card-notify-badge">31/03 - 09:22</span>
            <span class="card-notify-year">2017</span>
            <img class="img-fluid" src="../Leiloes/car/img/CHEVROLET COBALT 18A LTZ 2017/1644935309_C1328641C.webp" alt="Alternate Text" />
        </div>
        <div class="card-image-overlay m-auto">
            <span class="card-detail-badge">Visitas : 1250</span>
            <span class="card-detail-badge">R$16.500
            </span>
            <span class="card-detail-badge">12.400 Kms</span>
        </div>
        <div class="card-body text-center">
            <div class="ad-title m-auto">
                <h5>CHEVROLET COBALT 18A LTZ 2017</h5>
            </div>
            <form action="painel.php" method="POST">
                <div class="form-group">
            
            <input type="text" placeholder="R$" name="lance" id="lance" step="0.01" min="0.01" >
            <input type="text" placeholder="Digite seu CPF..." name="cpf" id="cpf">
            <input style="display: none;" type="text" value="CHEVROLET COBALT 18A LTZ 2017" name="carro" id="carro">
</div>
        
        <div class="d-flex justify-content-between align-items-center">
                        
                       
                          <div class="text-right" > <button onclick="entrar()"  name="submit" id="submit"  class="btn btn-danger  register btn-block">Enviar Lance</button> </div> 
                      </div> 
                </form>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card rounded" id="myList">
        <div class="card-image">
            <span class="card-notify-badge">31/03 - 09:30</span>
            <span class="card-notify-year">2017</span>
            <img class="img-fluid" src="../Leiloes/car/img/JEEP COMPASS TRAILHAWK 2017/1640635178_C1319176A.webp" alt="Alternate Text" />
        </div>
        <div class="card-image-overlay m-auto">
            <span class="card-detail-badge">Visitas : 1256</span>
            <span class="card-detail-badge">R$4.500</span>
            <span class="card-detail-badge">13000 Kms</span>
        </div>
        <div class="card-body text-center">
            <div class="ad-title m-auto">
                <h5>JEEP COMPASS TRAILHAWK 2017</h5>
            </div>
            <form action="painel.php" method="POST">
                <div class="form-group">
            
            <input type="text" placeholder="R$" name="lance" id="lance" step="0.01" min="0.01" >
            <input type="text" placeholder="Digite seu CPF..." name="cpf" id="cpf">
            <input style="display: none;" type="text" value="JEEP COMPASS TRAILHAWK 2017" name="carro" id="carro">
</div>
        
        <div class="d-flex justify-content-between align-items-center">
                        
                       
                          <div class="text-right" > <button onclick="entrar()"  name="submit" id="submit"  class="btn btn-danger  register btn-block">Enviar Lance</button> </div> 
                      </div> 
                </form>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="card rounded" id="myList">
        <div class="card-image">
            <span class="card-notify-badge">31/03 - 09:36</span>
            <span class="card-notify-year">2007</span>
            <img class="img-fluid" src="../Leiloes/car/img/HONDA FIT LXL 2007/1639407310_C1316008C.webp" alt="Alternate Text" />
        </div>
        <div class="card-image-overlay m-auto">
            <span class="card-detail-badge">Visitas : 1100</span>
            <span class="card-detail-badge">R$3.800</span>
            <span class="card-detail-badge">8000 Kms</span>
        </div>
        <div class="card-body text-center">
            <div class="ad-title m-auto">
                <h5> HONDA FIT LXL 2007</h5>
            </div>
            <form action="painel.php" method="POST">
                <div class="form-group">
            
            <input type="text" placeholder="R$" name="lance" id="lance" step="0.01" min="0.01" >
            <input type="text" placeholder="Digite seu CPF..." name="cpf" id="cpf">
            <input style="display: none;" type="text" value="HONDA FIT LXL 2007" name="carro" id="carro">
</div>
        
        <div class="d-flex justify-content-between align-items-center">
                        
                       
                          <div class="text-right" > <button onclick="entrar()"  name="submit" id="submit"  class="btn btn-danger  register btn-block">Enviar Lance</button> </div> 
                      </div> 
                </form>
        </div>
    </div>
</div>

</div>




<div class="row" id="ads">
<!-- Category Card -->
<div class="col-md-4">
    <div class="card rounded" id="myList">
        <div class="card-image">
            <span class="card-notify-badge">31/03 - 09:35</span>
            <span class="card-notify-year">2014</span>
            <img class="img-fluid" src="../Leiloes/car/img/MERCEDES-BENZ GLK 220 CDI 2014/1641827469_C1321000A.webp" alt="Alternate Text" />
        </div>
        <div class="card-image-overlay m-auto">
            <span class="card-detail-badge">Visitas : 1300</span>
            <span class="card-detail-badge">R$38.600</span>
            <span class="card-detail-badge">12.100 Kms</span>
        </div>
        <div class="card-body text-center">
            <div class="ad-title m-auto">
                <h5>MERCEDES-BENZ GLK 220 CDI 2014</h5>
            </div>
            <form action="painel.php" method="POST">
                <div class="form-group">
            
            <input type="text" placeholder="R$" name="lance" id="lance" step="0.01" min="0.01" >
            <input type="text" placeholder="Digite seu CPF..." name="cpf" id="cpf">
            <input style="display: none;" type="text" value="MERCEDES-BENZ GLK 220 CDI 2014" name="carro" id="carro">
</div>
        
        <div class="d-flex justify-content-between align-items-center">
                        
                       
                          <div class="text-right" > <button onclick="entrar()"  name="submit" id="submit"  class="btn btn-danger  register btn-block">Enviar Lance</button> </div> 
                      </div> 
                </form>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card rounded" id="myList">
        <div class="card-image">
            <span class="card-notify-badge">31/03 - 09:31</span>
            <span class="card-notify-year">2022</span>
            <img class="img-fluid" src="../Leiloes/car/img/FIAT MOBI WAY 2017/1644264712_C1327235C.webp" alt="Alternate Text" />
        </div>
        <div class="card-image-overlay m-auto">
            <span class="card-detail-badge">Visitas : 1110</span>
            <span class="card-detail-badge">R$ 11.000</span>
            <span class="card-detail-badge">11.000 Km</span>
        </div>
        <div class="card-body text-center">
            <div class="ad-title m-auto">
                <h5> FIAT MOBI WAY 2017</h5>
            </div>
            <form action="painel.php" method="POST">
                <div class="form-group">
            
            <input type="text" placeholder="R$" name="lance" id="lance" step="0.01" min="0.01" >
            <input type="text" placeholder="Digite seu CPF..." name="cpf" id="cpf">
            <input style="display: none;" type="text" value="FIAT MOBI WAY 2017" name="carro" id="carro">
</div>
        
        <div class="d-flex justify-content-between align-items-center">
                        
                       
                          <div class="text-right" > <button onclick="entrar()"  name="submit" id="submit"  class="btn btn-danger  register btn-block">Enviar Lance</button> </div> 
                      </div> 
                </form>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="card rounded" id="myList">
        <div class="card-image">
            <span class="card-notify-badge">31/03 - 09:36</span>
            <span class="card-notify-year">2015</span>
            <img class="img-fluid" src="../Leiloes/car/img/BLINDADO HONDA HR-V EXL CVT 2015/1643040129_C1324066C.webp" alt="Alternate Text" />
        </div>
        <div class="card-image-overlay m-auto">
            <span class="card-detail-badge">Visitas : 1200</span>
            <span class="card-detail-badge">R$25.500</span>
            <span class="card-detail-badge">18.000 Km</span>
        </div>
        <div class="card-body text-center">
            <div class="ad-title m-auto">
                <h5>BLINDADO HONDA HR-V EXL CVT 2015</h5>
            </div>
            <form action="painel.php" method="POST">
                <div class="form-group">
            
            <input type="text" placeholder="R$" name="lance" id="lance" step="0.01" min="0.01" >
            <input type="text" placeholder="Digite seu CPF..." name="cpf" id="cpf">
            <input style="display: none;" type="text" value="FIAT MOBI WAY 2017" name="carro" id="carro">
</div>
        
        <div class="d-flex justify-content-between align-items-center">
                        
                       
                          <div class="text-right" > <button onclick="entrar()"  name="submit" id="submit"  class="btn btn-danger  register btn-block">Enviar Lance</button> </div> 
                      </div> 
                </form>
        </div>
    </div>
</div>

</div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<a href="https://api.whatsapp.com/send?phone=5511930758326"
    target="_blank"
    style="position:fixed;bottom:20px;right:30px;">
    <svg enable-background="new 0 0 512 512" width="50" height="50" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path d="M256.064,0h-0.128l0,0C114.784,0,0,114.816,0,256c0,56,18.048,107.904,48.736,150.048l-31.904,95.104  l98.4-31.456C155.712,496.512,204,512,256.064,512C397.216,512,512,397.152,512,256S397.216,0,256.064,0z" fill="#4CAF50"/><path d="m405.02 361.5c-6.176 17.44-30.688 31.904-50.24 36.128-13.376 2.848-30.848 5.12-89.664-19.264-75.232-31.168-123.68-107.62-127.46-112.58-3.616-4.96-30.4-40.48-30.4-77.216s18.656-54.624 26.176-62.304c6.176-6.304 16.384-9.184 26.176-9.184 3.168 0 6.016 0.16 8.576 0.288 7.52 0.32 11.296 0.768 16.256 12.64 6.176 14.88 21.216 51.616 23.008 55.392 1.824 3.776 3.648 8.896 1.088 13.856-2.4 5.12-4.512 7.392-8.288 11.744s-7.36 7.68-11.136 12.352c-3.456 4.064-7.36 8.416-3.008 15.936 4.352 7.36 19.392 31.904 41.536 51.616 28.576 25.44 51.744 33.568 60.032 37.024 6.176 2.56 13.536 1.952 18.048-2.848 5.728-6.176 12.8-16.416 20-26.496 5.12-7.232 11.584-8.128 18.368-5.568 6.912 2.4 43.488 20.48 51.008 24.224 7.52 3.776 12.48 5.568 14.304 8.736 1.792 3.168 1.792 18.048-4.384 35.52z" fill="#FAFAFA"/></svg> 
  
  
</body>


<style>
    :root {
    --font-family-sans-serif: "Open Sans", -apple-system, BlinkMacSystemFont,
    "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji",
    "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}

*, *::before, *::after {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

php {
    font-family: sans-serif;
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

nav {
    display: block;
}

body {
    margin: 0;
    font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI",
    Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji",
    "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #515151;
    text-align: left;
    background-color: #e9edf4;
}

h1, h2, h3, h4, h5, h6 {
    margin-top: 0;
    margin-bottom: 0.5rem;
}

p {
    margin-top: 0;
    margin-bottom: 1rem;
}

a {
    color: #3f84fc;
    text-decoration: none;
    background-color: transparent;
}

a:hover {
    color: #0458eb;
    text-decoration: underline;
}

h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: "Nunito", sans-serif;
    margin-bottom: 0.5rem;
    font-weight: 500;
    line-height: 1.2;
}

h1, .h1 {
    font-size: 2.5rem;
    font-weight: normal;
}

.card {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, 0.125);
    border-radius: 0;
}

.card-body {
    -webkit-box-flex: 1;
    -webkit-flex: 1 1 auto;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
}

.card-header {
    padding: 0.75rem 1.25rem;
    margin-bottom: 0;
    background-color: rgba(0, 0, 0, 0.03);
    border-bottom: 1px solid rgba(0, 0, 0, 0.125);
    text-align: center;
}

.dashboard {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    min-height: 100vh;
}

.dashboard-app {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-flex: 2;
    -webkit-flex-grow: 2;
    -ms-flex-positive: 2;
    flex-grow: 2;
    margin-top: 84px;
}

.dashboard-content {
    -webkit-box-flex: 2;
    -webkit-flex-grow: 2;
    -ms-flex-positive: 2;
    flex-grow: 2;
    padding: 25px;
}

.dashboard-nav {
    min-width: 238px;
    position: fixed;
    left: 0;
    top: 0;
    bottom: 0;
    overflow: auto;
    background-color: #373193;
}

.dashboard-compact .dashboard-nav {
    display: none;
}

.dashboard-nav header {
    min-height: 84px;
    padding: 8px 27px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}

.dashboard-nav header .menu-toggle {
    display: none;
    margin-right: auto;
}

.dashboard-nav a {
    color: #515151;
}

.dashboard-nav a:hover {
    text-decoration: none;
}

.dashboard-nav {
    background-color:#004c6d;
}

.dashboard-nav a {
    color: #fff;
}

.brand-logo {
    font-family: "Nunito", sans-serif;
    font-weight: bold;
    font-size: 20px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    color: #515151;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}

.brand-logo:focus, .brand-logo:active, .brand-logo:hover {
    color: #dbdbdb;
    text-decoration: none;
}

.brand-logo i {
    color: #d2d1d1;
    font-size: 27px;
    margin-right: 10px;
}

.dashboard-nav-list {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
}

.dashboard-nav-item {
    min-height: 56px;
    padding: 8px 20px 8px 70px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    letter-spacing: 0.02em;
    transition: ease-out 0.5s;
}

.dashboard-nav-item i {
    width: 36px;
    font-size: 19px;
    margin-left: -40px;
}

.dashboard-nav-item:hover {
    background: rgba(255, 255, 255, 0.04);
}

.active {
    background: rgba(0, 0, 0, 0.1);
}

.dashboard-nav-dropdown {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
}

.dashboard-nav-dropdown.show {
    background: rgba(255, 255, 255, 0.04);
}

.dashboard-nav-dropdown.show > .dashboard-nav-dropdown-toggle {
    font-weight: bold;
}

.dashboard-nav-dropdown.show > .dashboard-nav-dropdown-toggle:after {
    -webkit-transform: none;
    -o-transform: none;
    transform: none;
}

.dashboard-nav-dropdown.show > .dashboard-nav-dropdown-menu {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
}

.dashboard-nav-dropdown-toggle:after {
    content: "";
    margin-left: auto;
    display: inline-block;
    width: 0;
    height: 0;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-top: 5px solid rgba(81, 81, 81, 0.8);
    -webkit-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
}

.dashboard-nav .dashboard-nav-dropdown-toggle:after {
    border-top-color: rgba(255, 255, 255, 0.72);
}

.dashboard-nav-dropdown-menu {
    display: none;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
}

.dashboard-nav-dropdown-item {
    min-height: 40px;
    padding: 8px 20px 8px 70px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    transition: ease-out 0.5s;
}

.dashboard-nav-dropdown-item:hover {
    background: rgba(255, 255, 255, 0.04);
}

.menu-toggle {
    position: relative;
    width: 42px;
    height: 42px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    color: #443ea2;
}

.menu-toggle:hover, .menu-toggle:active, .menu-toggle:focus {
    text-decoration: none;
    color: #875de5;
}

.menu-toggle i {
    font-size: 20px;
}

.dashboard-toolbar {
    min-height: 84px;
    background-color: #004c6d;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 8px 27px;
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1000;
}

.nav-item-divider {
    height: 1px;
    margin: 1rem 0;
    overflow: hidden;
    background-color: rgba(236, 238, 239, 0.3);
}

@media (min-width: 992px) {
    .dashboard-app {
        margin-left: 238px;
    }

    .dashboard-compact .dashboard-app {
        margin-left: 0;
    }
}


@media (max-width: 768px) {
    .dashboard-content {
        padding: 15px 0px;
    }
}

@media (max-width: 992px) {
    .dashboard-nav {
        display: none;
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        z-index: 1070;
    }

    .dashboard-nav.mobile-show {
        display: block;
    }
}

@media (max-width: 992px) {
    .dashboard-nav header .menu-toggle {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
    }
}

@media (min-width: 992px) {
    .dashboard-toolbar {
        left: 238px;
    }

    .dashboard-compact .dashboard-toolbar {
        left: 0;
    }
}


</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    
<script src="node_modules/jquery/dist/jquery.js"></script>
<script type="text/javascript">



// ---------Responsive-navbar-active-animation-----------
function test(){
	var tabsNewAnim = $('#navbarSupportedContent');
	var selectorNewAnim = $('#navbarSupportedContent').find('li').length;
	var activeItemNewAnim = tabsNewAnim.find('.active');
	var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
	var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
	var itemPosNewAnimTop = activeItemNewAnim.position();
	var itemPosNewAnimLeft = activeItemNewAnim.position();
	$(".hori-selector").css({
		"top":itemPosNewAnimTop.top + "px", 
		"left":itemPosNewAnimLeft.left + "px",
		"height": activeWidthNewAnimHeight + "px",
		"width": activeWidthNewAnimWidth + "px"
	});
	$("#navbarSupportedContent").on("click","li",function(e){
		$('#navbarSupportedContent ul li').removeClass("active");
		$(this).addClass('active');
		var activeWidthNewAnimHeight = $(this).innerHeight();
		var activeWidthNewAnimWidth = $(this).innerWidth();
		var itemPosNewAnimTop = $(this).position();
		var itemPosNewAnimLeft = $(this).position();
		$(".hori-selector").css({
			"top":itemPosNewAnimTop.top + "px", 
			"left":itemPosNewAnimLeft.left + "px",
			"height": activeWidthNewAnimHeight + "px",
			"width": activeWidthNewAnimWidth + "px"
		});
	});
}
$(document).ready(function(){
	setTimeout(function(){ test(); });
});
$(window).on('resize', function(){
	setTimeout(function(){ test(); }, 500);
});
$(".navbar-toggler").click(function(){
	$(".navbar-collapse").slideToggle(300);
	setTimeout(function(){ test(); });
});

// Code  to search 
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myList ").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});





// --------------add active class-on another-page move----------
jQuery(document).ready(function($){
	// Get current path and find target link
	var path = window.location.pathname.split("/").pop();

	// Account for home page with empty path
	if ( path == '' ) {
		path = 'index.html';
	}

	var target = $('#navbarSupportedContent ul li a[href="'+path+'"]');
	// Add active class to target link
	target.parent().addClass('active');
});

// Menu Left

$(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

// Add active class on another page linked
// ==========================================
// $(window).on('load',function () {
//     var current = location.pathname;
//     console.log(current);
//     $('#navbarSupportedContent ul li a').each(function(){
//         var $this = $(this);
//         // if the current path is like this link, make it active
//         if($this.attr('href').indexOf(current) !== -1){
//             $this.parent().addClass('active');
//             $this.parents('.menu-submenu').addClass('show-dropdown');
//             $this.parents('.menu-submenu').parent().addClass('active');
//         }else{
//             $this.parent().removeClass('active');
//         }
//     })
// });
const mobileScreen = window.matchMedia("(max-width: 990px )");
$(document).ready(function () {
    $(".dashboard-nav-dropdown-toggle").click(function () {
        $(this).closest(".dashboard-nav-dropdown")
            .toggleClass("show")
            .find(".dashboard-nav-dropdown")
            .removeClass("show");
        $(this).parent()
            .siblings()
            .removeClass("show");
    });
    $(".menu-toggle").click(function () {
        if (mobileScreen.matches) {
            $(".dashboard-nav").toggleClass("mobile-show");
        } else {
            $(".dashboard").toggleClass("dashboard-compact");
        }
    });
});

function entrar(){
    const alerta = document.getElementById('alerta').style.display = 'block'
}





</script>
</>