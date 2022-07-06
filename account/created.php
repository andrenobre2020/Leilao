<?php 
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

        $nome = $_POST['nome'];
        $nasc = $_POST['nasc'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $tel = $_POST['tel'];
        $cpf = $_POST['cpf'];
        $rg = $_POST['rg'];
        $sexo = $_POST['sexo'];

        $resul = mysqli_query($conex,"INSERT INTO usuarios(nome,nasc,email,senha,tel,cpf,rg,sexo)
        VALUES  ( '$nome' , '$nasc','$email','$senha','$tel','$cpf','$rg','$sexo')");
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
    <title> CADASTRO</title>
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
                    <a class="nav-link" href="../account/created.php"><i class="fa fa-book"></i>Cadastre-se</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../account/logar.php"><i class="fa fa-sign-in"></i>Entrar</a>
                </li>
            </ul>
        </div>
    </nav>

<main> 
    
    <div class="container-fluid d-flex justify-content-center align-items-center">
        <div class="card">
            <div class="row">
                <div class="col-md-6">
                    <form action="created.php" method="POST">
                    <div class="form">
                        <h2 style="color: #004c6d;">CADASTRO</h2>
                        <div class="inputbox mt-3"> <span>Nome Completo </span> <input type="text" placeholder="Nome Completo" id="nome" name="nome" class="form-control"> </div>

                        <div class="inputbox mt-3"> <span>Data de Nascimento </span> <input type="text" placeholder="dia/mes/ano" id="nasc" name="nasc" class="form-control"> </div>
                        
                        <div class="inputbox mt-3"> <span>Email</span> <input type="text" placeholder="Digite seu Email" id="email" name="email" class="form-control"> </div>

                        <div class="inputbox mt-3"> <span>Senha</span> <input type="password" placeholder="Criar senha " id="senha" name="senha" class="form-control"> </div>

                        <div class="inputbox mt-3"> <span>Telefone </span> <input type="text" placeholder="ex: 1199999-9999" id="tel" name="tel" class="form-control"> </div>

                        <div class="inputbox mt-3"> <span>CPF</span> <input type="text" placeholder="ex: 999.999.999-99" name="cpf" id="cpf" class="form-control"> </div>

                        <div class="inputbox mt-3"> <span>RG</span> <input type="text" placeholder="ex:99.999.999-9" name="rg" id="rg" class="form-control"> </div>
                        <div class="inputbox mt-3">

                            <span>Sexo</span>
                        <select name="sexo" id="sexo" size="1" class="form-control form-input act-submit-cadastro act-verifica-blur">
                            <option value="">-- Selecione --</option>
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                        </select>
                        </div>

                        <div class="alert alert-success" style="display: none;" role="alert">
  Cadastro Concluido com Sucesso ! 
</div>
                        

                        <div class="d-flex justify-content-between align-items-center">
                          
                            <div class="text-right"> <button onclick="entrar()" name="submit" id="submit"  class="btn btn-success  register btn-block">Registrar</button> </div> <a href="logar.php" class="login">Login</a>
                        </div> 
           
                                                
                        <div class="form-check mt-2"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Eu concordo com os termos e condições de <a href="" class="login">Privacy & Policy</a> </label> </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container-fluid text-center mt-5"> <img src="../Leiloes/car/img/pngwing.com (3).png" style="width: 600px ; height: 400px;"> </div>
                </div>
            </div>
        </div>
    </div>

</form>

</main>


</header>







<footer>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 item">
                        <h3>VEÍCULOS</h3>
                        <ul>
                            <li><a href="#">Leilão de Carros</a></li>
                            <li><a href="#">Leilão de Carros SP</a></li>
                            <li><a href="#">Leilão de Motos SP</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 item">
                        <h3>MARCAS MAIS BUSCADAS</h3>
                        <ul>
                            <li><a href="#">Leilão Volkswagen</a></li>
                            <li><a href="#">Leilão Fiat</a></li>
                            <li><a href="#">Leilão BMW</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 item">
                        <h3>MAIS BUSCADOS</h3>
                        <ul>
                            <li><a href="#">Leilão de Imóveis</a></li>
                            <li><a href="#">Leilão de Veículos</a></li>
                            <li><a href="#">Leilão de Sucatas</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 item text">
                        <h3>Sodré Financiamento.com</h3>
                        <p>A cópia ou reprodução não autorizada do conteúdo deste site poderá acarretar em penas previstas em lei.</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-youtube"></i></a><a href="#"><i class="fa fa-instagram"></i></a><a href="#"><i class="fa fa-google"></i></a></div>
                </div>
                <p class="copyright">sodrefinanciamento.com © 2022</p>
            </div>
        </footer>
    </div>
</footer>
  

</body>



</html>
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
        $('.alert').css('display','block').fadeOut(6000)
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

<style>
    .footer-dark {
    padding: 50px 0;
    color: #f0f9ff;
    background-color: #002850
}

.footer-dark h3 {
    margin-top: 0;
    margin-bottom: 12px;
    font-weight: bold;
    font-size: 16px
}

.footer-dark ul {
    padding: 0;
    list-style: none;
    line-height: 1.6;
    font-size: 14px;
    margin-bottom: 0
}

.footer-dark ul a {
    color: inherit;
    text-decoration: none;
    opacity: 0.6
}

.footer-dark ul a:hover {
    opacity: 0.8
}

@media (max-width:767px) {
    .footer-dark .item:not(.social) {
        text-align: center;
        padding-bottom: 20px
    }
}

.footer-dark .item.text {
    margin-bottom: 36px
}

@media (max-width:767px) {
    .footer-dark .item.text {
        margin-bottom: 0
    }
}

.footer-dark .item.text p {
    opacity: 0.6;
    margin-bottom: 0
}

.footer-dark .item.social {
    text-align: center
}

@media (max-width:991px) {
    .footer-dark .item.social {
        text-align: center;
        margin-top: 20px
    }
}

.footer-dark .item.social>a {
    font-size: 20px;
    width: 36px;
    height: 36px;
    line-height: 36px;
    display: inline-block;
    text-align: center;
    border-radius: 50%;
    box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.4);
    margin: 0 8px;
    color: #fff;
    opacity: 0.75
}

.footer-dark .item.social>a:hover {
    opacity: 0.9
}

.footer-dark .copyright {
    text-align: center;
    padding-top: 24px;
    opacity: 0.3;
    font-size: 13px;
    margin-bottom: 0
}



body {
    background-color: #002850
}

.container {
    height: 100vh
}

.card {
    width: 100%;
    padding: 30px
}

.form {
    padding: 20px
}

.form-control {
    height: 50px;
    background-color: #eee
}

.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #f50057;
    outline: 0;
    box-shadow: none;
    background-color: #eee
}

.inputbox {
    margin-bottom: 15px
}

.register {
    width: 200px;
    height: 51px;
    background-color: #f50057;
    border-color: #f50057
}

.register:hover {
    width: 200px;
    height: 51px;
    background-color: #f50057;
    border-color: #f50057
}

.login {
    color: #f50057;
    text-decoration: none
}

.login:hover {
    color: #f50057;
    text-decoration: none
}

.form-check-input:checked {
    background-color: #f50057;
    border-color: #f50057
}





</style>
