
<?php

session_start();


include('config.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

  

        $email =  mysqli_real_escape_string($conex,$_POST['email']);
        $senha = mysqli_real_escape_string($conex,$_POST['senha']);

        $query = "select * from usuarios where email='$email' and senha= '$senha'";      
        $result = mysqli_query($conex,$query);
        $row = mysqli_num_rows($result);

        if($row == 1){
            $_SESSION['email'] = $email;
            header('Location: painel.php');
            exit();
        }else{
            header('Location: logar.php');
            exit();

        }
}
?>






<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="shortcut icon" href="favicon-fundo-azula9b7.jpg" type="image/x-icon">
    <title> Sodré Entrar 
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body>
    <header>
        <div id="Li" class="container-fluid" style="background-color:#004c6d; text-align: center; color: rgb(255, 255, 255); font-size: 12px;">
            <b>LEILÕES ONLINE E PRESENCIAIS DE VEÍCULOS, IMÓVEIS, MATERIAIS E JUDICIAIS.</b>
    </div>

    <nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="#">
            <img src="../img/logo-sodre-santoro.webp"> 
        </a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars text-white" style="margin-right: auto;"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="fa fa-money"></i>Quero Vender </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../index.html"><i class="fa fa-car"></i>
                        Venda de Carro
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../leilao de imoveis.html"><i class=" fa fa-home"></i> Venda de Imóveis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../contato.html"><i class="far fa-calendar-alt"></i>Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="created.php"><i class="fa fa-book"></i>Cadastre-se</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logar.php"><i class="fa fa-sign-in"></i>Entrar</a>
                </li>
            </ul>
        </div>
    </nav>

<main> 
<div class="container-fluid">
    <div class="row no-gutter">
        <!-- The image half -->
        <div class="col-md-6 d-none d-md-flex bg-image"></div>


        <!-- The content half -->
        <div class="col-md-6 bg-light">
            <div class="login d-flex align-items-center py-5">

                <!-- Demo content-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-7 mx-auto">
                            <h3  class="display-4" style="font-family: Arial, Helvetica, sans-serif; color:#004c6d;">Já Sou Cadastrado </h3>
                            <p class="text-muted mb-4"></p>
                            <form action="logar.php" method="POST">
                                <div class="form-group mb-3">
                                    <input name="email" id="email" type="text" placeholder="Email" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                </div>
                                <div class="form-group mb-3">
                                    <input  name="senha" id="senha" type="password" placeholder="Senha" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                                    <label for="customCheck1" class="custom-control-label">Remember password</label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Sign in</button>
                                <div class="text-center d-flex justify-content-between mt-4"><p>Registra-se <a href="created.php" class="font-italic text-muted"> 
                                        <u>Aqui</u></a></p></div>
                            </form>
                        </div>
                    </div>
                </div><!-- End -->

            </div>
        </div><!-- End -->

    </div>
</div>




</main>




</header>


</body>


<style>
/*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/
.login,
.image {
  min-height: 100vh;
}

.bg-image {
  background-image: url('car-g7332556b2_1920.jpg');
  background-size: cover;
  background-position: center center;
}
</style>





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    
<script src="node_modules/jquery/dist/jquery.js"></script>
<script type="text/javascript">

function entrar(){
    if(document.getElementById('nome').value == ''){
        alert('Campos estão Vazios')
    }else if( document.getElementById('nasc').value == ''){
        alert('Campos Estão Vazios')
    }
    else if(document.getElementById('email').value == ''){
        alert('Campos Estão Vazios !')
    }    
    else if(document.getElementById('senha').value == ''){
        alert('Campos Estão Vazios !')
    }
    else if(document.getElementById('tel').value == ''){
        alert('Campos Estão Vazios !')
    } 
    else if(document.getElementById('cpf').value == ''){
        alert('Campos Estão Vazios !')
    } 
    else if(document.getElementById('rg').value == ''){
        alert('Campos Estão Vazios !')
    } 
    else if(document.getElementById('sexo').value == ''){
        alert('Campos Estão Vazios !')
    } 
    else{
        $('.alert').css('display','block').fadeOut(5000)
    }
}






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


</script>
</html>