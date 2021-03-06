
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Startmin - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<script type="text/script" src="js/jquery.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<style type="text/style">
	
	</style>
	
	
	<script type="text/javascript">
    function toggle_visibility(id) {
    var e = document.getElementById(id);
    var visivel = e.style.display == 'block';
    var menus = document.querySelectorAll('[id^=menu]');
    for (var i = 0; i < menus.length; i++) {
        menus[i].style.display = 'none';
    };
    if (visivel) e.style.display = 'none';
    else e.style.display = 'block';
}
</script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js" type="text/javascript"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.js" type="text/javascript"></script>
  
  <script type="text/javascript" >
function abreURL(url,metodo,onde){
   if(metodo=='POST'){
      // metodo post
       $.post(url, function(data) {
      // página do carregador (loading)
       $("#carregador").show();
       $( "#"+onde).load(url);
      });
   }
   else if(metodo=='GET'){
      // metodo get
      $.get(url, function(data) {
     // página do carregador (loading)
      $("#carregador").show();
     $( "#"+onde).load(url);
    });
  }
}
</script>
</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Startmin</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
        </ul>

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown navbar-inverse">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
			<li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>Fazer Upgrade</strong>                            
                        </a>
                    </li>
            <img class="imagem" src="img/default.png" ><li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    Perfil<b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
	
	<nav class="navbar navbar-inverse" id="nav-2" role="navigation">
	 <div class="navbar-2" id="navbar-2">
	 <ul>
		<li class="drop"><a href="http://localhost/dashboard/dashboard/index.php" onclick="toggle_visibility('menu1');"style="color:white;" >Diligências</a>
		<ul>
		<div class="drop" id="menu1">
		<li><a onclick="abreURL('pages/novas.php','GET','conteudo')" href="#">Novas</a></li>
		<li><a onclick="abreURL('pages/andamento.php','GET','conteudo')" href="#">Em andamento</a></li>
		<li><a onclick="abreURL('pages/fechadas.php','GET','conteudo')" href="#">Fechadas</a></li>
		</div>
		</ul>
		</li>
		<li class="drop"><a  onclick="toggle_visibility('menu2'); abreURL('pages/recomendacoes.php','GET','conteudo');" href="#" style="color:white;">Recomendações</a>
		<ul>
		<div class="drop1" id="menu2">
		<li id="advogados"><a id="advogados"  href="#">Advogados</a></li>
		<li><a href="#">Recebidas</a></li>		
		</div>
		</ul>
		</li>
		<li class="drop" ><a href="#" onclick="toggle_visibility('menu3'); abreURL('pages/perfil.php','GET','conteudo');" style="color:white;">Pefil</a>
		<ul>
		<div class="drop2" id="menu3">
		<li><a href="#">Novas</a></li>
		<li><a href="#">Em andamento</a></li>
		<li><a href="#">Fechadas</a></li>
		</div>
		</ul>
		</li>
		<li class="drop"><a href="#" onclick="toggle_visibility('menu4');" style="color:white;">Configurações</a>
		<ul>
		<div class="drop3" id="menu4">
		<li><a href="#">Notificações</a></li>
		<li><a href="#">Pagamento</a></li>
		<li><a href="#">Senha</a></li>
		<div>
		</ul>
		</li>		
	 </ul>
	 </div>
	 </div>
	</nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
				<div id="conteudo">
                    <div id="carregador">
					
					<div class="trabalho" >
						<h5 class="titulo">Cópia em  Brasília</h5>
						
						<span class="data">
							<i class="material-icons md-18">date_range</i> 06 Nov 2017
                                                </span><br>
						<hr id="hr-trabalho" style="backgroud-color:black;">
						<div class="conteudo-baixo">
						<img id="image-trabalho" src="img/default.png" style="width:40px;height: 40px;border-radius: 50%;background-color: white; border: 1px solid black;">
						<a id="detalhes" href="detalhes">Mais Detalhes</a>
						<button class="btn btn-sucess" id="enviar-proposta">Enviar Proposta</button>
						</div>
					</div>
					
					
					</div>					
                </div>
            </div>

            <!-- ... Your content goes here ... -->

        </div>
    </div>
	</div>


<div class="footer">
<footer>
<p>Todos os direiros reservados</p>
</footer>
</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/startmin.js"></script>

</body>
</html>
