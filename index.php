<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Transitabile</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link href="css/component.css" rel="stylesheet" type="text/css"  />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Transitabile, estacionamento, app de estacionamento" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<!---- start-smoth-scrolling---->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
		</script>
<!---- start-smoth-scrolling---->
</head>
<body class="cbp-spmenu-push">
<div id="home" class="banner">
	 <div class="container">
		 <div class="header">
			 <div class="logo">
				 <a href="#"><img src="images/logo.png" alt=""/></a>
			 </div>	
			 <div class="top-nav">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
					<h3>Menu</h3>
					<a class="scroll" href="#home" class="active">Home</a>
					<a class="scroll" href="#feature">Caracteristicas</a>
					<a class="scroll" href="#screenshots">Screen Shots</a>
					<a class="scroll" href="#team">Contato</a>
				</nav>
				<div class="main buttonset">	
						<!-- Class "cbp-spmenu-open" gets applied to menu and "cbp-spmenu-push-toleft" or "cbp-spmenu-push-toright" to the body -->
						<button id="showRightPush"><img src="images/menu-icon.png" alt=""/></button>
						<!--<span class="menu"></span>-->
				</div>
				<!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
				<script src="js/classie.js"></script>
				<script>
				var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
				showRightPush = document.getElementById( 'showRightPush' ),
				body = document.body;

				showRightPush.onclick = function() {
					classie.toggle( this, 'active' );
					classie.toggle( body, 'cbp-spmenu-push-toleft' );
					classie.toggle( menuRight, 'cbp-spmenu-open' );
					disableOther( 'showRightPush' );
				};

				function disableOther( button ) {
					if( button !== 'showRightPush' ) {
						classie.toggle( showRightPush, 'disabled' );
					}
				}
			 </script>
	     </div>
			<div class="clearfix"></div>
		 </div>
		 
		 <div class="banner-info">
			 <h1><span>ESTACIONAMENTO</span>FÁCIL</h1>
			 <p>Utilizando o app Transitabile você estaciona seu carro de forma ágil e descomplicada.  Com apenas três cliques você ativa sua vaga, realizando o pagamento direto em seu smartphone, sem precisar sair do veículo em busca de um ponto de venda.</p>
			 <a class="scroll" href="#landing"><img src="images/app.png" alt=""/></a>&nbsp&nbsp<a class="scroll" href="#landing"><img src="images/app-play.png" alt=""/></a>
		 </div>
		 <div class="down">
		 <a class="scroll" href="#feature"><img src="images/scroll.png" alt=""/></a>
		 </div>
	 </div>
	 <div class="hand">
		 <img src="images/hand_7.png" alt=""/>
	 </div>
</div>
<!--features-->
<div id="feature" class="features">
	 <div class="container">
		 <div class="feature-info text-center">
		 <h3>FAÇA TUDO PELO APP</h3>
		 <p>Você não paga nada para baixar o Transitabile em seu smartphone ou tablet, o aplicativo que oferece a maneira mais prática para estacionar nas vias públicas com comodidade e segurança.</br></p>
		 </div>
		 <div class="feature-grids">
			 <div class="col-md-6 feature-sec">
				 <div class="feature-grid grid1">
					 <h3>Indicação de vagas</h3>
					 <p>Encontre a indicação de vaga disponível, antecipadamente, perto de onde pretende estacionar, através de nosso sistema GPS.</br></br></br></p>
				 </div>
				 <div class="feature-grid grid2">
					 <h3>Estacione seu veículo</h3>
					 <p>Com o veículo parado na vaga acione o app e indique o local em que estacionou.</br></br></br></br></p>
				 </div>
			 </div>
			 <div class="col-md-6 feature-sec">
				 <div class="feature-grid grid3">
					 <h3>Indique dados do veículo</h3>
					 <p>Aponte no app qual a placa do veículo em que você está (cadastre quantos veículos desejar).</br></br></br></p>
				 </div>
				 <div class="feature-grid grid4">
					 <h3>Efetuar pagamento</h3>
					 <p>Indique qual o tempo de permanência na vaga (compre créditos antecipadamente, direto no app).</br></br></br></br></p>
				 </div>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	</div>
</div>
<!--landing-->
<div id="landing" class="landing">
		 <h3>EVOLUÇÃO AO ALCANCE DE SUAS MÃOS</h3>
		 <div class="alnding-sec">
			 <div class="col-md-6 slades">
				 <img src="images/shape1.jpg" alt=""/>
  		  </div>
			 <div class="col-md-6 landing-info">
				 <p>O sistema digital permite adquirir créditos pelo celular sem precisar recorrer aos pontos de venda, bancas de jornal e lotéricas ou procurar um agente para comprar folhas de talão. O pagamento pode ser feito por cartão de crédito, débito ou boleto bancário.</p>
				 <p class="lndng-text">Pelo aplicativo, é possível monitorar o tempo de permanência, o que viabiliza uma possível nova compra de um CAD – Cartão Azul Digital – se assim o motorista necessitar. O modelo digital permite a cobrança fracionada (em minutos), onde o usuário paga o correspondente exato ao tempo de permanência na vaga, garantindo uma cobrança mais justa.</p>
				 <p class="lndng-text">ATENÇÃO: O uso do aparelho de telefonia móvel tira o foco da atenção dos motoristas e compromete a capacidade perceptiva das pessoas aumentando as chances de colisão. Utilize nosso app somente com o veículo estacionado.</p>
				 <p class="lndng-text">Transitabile, o modo justo, seguro e fácil de pagar pelo seu estacionamento! </p>
			 </div>
			 <div class="clearfix"></div>
	 </div>
</div>
<!--screenshots-->
<div id="screenshots" class="screen-shots"> 
	 <div class="container">
		 <h3>SCREEN SHOTS</h3>
		  <div class="review-slider">
			 <ul id="flexiselDemo1">
				<li><img src="images/ss1.jpg" alt=""/></li>
				<li><img src="images/ss2.jpg" alt=""/></li>
				<li><img src="images/ss3.jpg" alt=""/></li>
				<li><img src="images/ss4.jpg" alt=""/></li>
				<li><img src="images/ss5.jpg" alt=""/></li>
				<li><img src="images/ss6.jpg" alt=""/></li>
				<li><img src="images/ss7.jpg" alt=""/></li>
				<li><img src="images/ss8.jpg" alt=""/></li>
				<li><img src="images/ss9.jpg" alt=""/></li>
				<li><img src="images/ss10.jpg" alt=""/></li>		
				<li><img src="images/ss11.jpg" alt=""/></li>	
				<li><img src="images/ss12.jpg" alt=""/></li>
			 </ul>
				<script type="text/javascript">
			 $(window).load(function() {
			 
			  $("#flexiselDemo1").flexisel({
					visibleItems: 4,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,    		
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: { 
						portrait: { 
							changePoint:480,
							visibleItems: 2
						}, 
						landscape: { 
							changePoint:640,
							visibleItems: 3
						},
						tablet: { 
							changePoint:768,
							visibleItems: 4
						}
					}
				});
				});
			 </script>
			 <script type="text/javascript" src="js/jquery.flexisel.js"></script>	
		  </div>
	  </div>
</div>

		<?php

			// Form contact system:
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {

				if (isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['mensagem']) && !empty($_POST['mensagem'])) {

					$nome = $_POST['nome'];
					$email = $_POST['email'];
					$mensagem = $_POST['mensagem'];
					
					$msg = "Contato de Transitabile.com.br:\n\n"."Enviado por: ".$nome."\n\n"."Email: ".$email."\n\n"."Mensagem: ".$mensagem;
					mail("contato@transitabile.com.br","Contato de Transitabile.com.br", $msg);
					
					$msgToClient = "Atendimento Transitabile:\n\n"."Olá, obrigado por entrar em contato ".$nome.", vamos analisar sua mensagem e responder em breve.\n\nSua mensagem: ".$mensagem."\n\nAtenciosamente,\nEquipe de Atendimento Transitabile\nwww.transitabile.com.br\n\nObs: Por favor não responda a este email.";
					mail($email,"Atendimento de Transitabile.com.br", $msgToClient);

					echo '<script>alert("Obrigado por entrar em contato.");</script>';
					
				} else {
				
					echo '<script>alert("Ops, ocorreu um erro ao enviar sua mensagem.\nPor favor, preencha todos os campos corretamente.");</script>';
					exit;
					
				}

			}

		 ?>

<!--contact-->
<div id="team" class="team">
	<div class="container">
		<div>
			<div class="form-area">  
				<form action="index.php" method="post" >
					<br style="clear:both">
							<h3 style="margin-bottom: 25px; text-align: center;">CONTATO</h3>
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="nome" placeholder="Nome" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
							</div>
							<div class="form-group">
							<textarea class="form-control" type="textarea" name="mensagem" id="message" placeholder="Mensagem" maxlength="300" rows="7"></textarea>
								<span class="help-block"><p id="characterLeft" class="help-block "><b>Todos os campos são obrigatórios</b> Máximo 300 caracteres</p></span>                    
							</div>
					<button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Enviar</button>
				</form>
				</br></br></br>
			</div>
		</div>
	</div>
</div>
<!--team-->
<div class="subscribe">
	 <div class="container">
		 <h3>Transitabile, uma empresa genuinamente brasileira!</h3>
		 <p class="terms">TRANSITABILE SISTEMA DE CONTROLE DE VAGAS AUTOMOTIVAS LTDA</p>
		 <p class="terms">Belo Horizonte/MG:  Rua dos Guajajaras,  número 40, sala 704 – Centro </p>		 
		 <p class="terms">Florianópolis/SC: Av Afonso Delambert Neto, 540 – Lagoa da Conceição</p>		 
		 <p class="terms">contato@transitabile.com.br</p>		 
	 </div>
</div>
<!--footer-->
<div class="footer">
	 <div class="container">
		 <p>Copyright © 2018 Transitabile. All rights reserved | Technology by Agáttp </a></p>
	 </div>
</div>

</body>
</html>