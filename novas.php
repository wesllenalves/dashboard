<html>
<head>

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
  
  <script>
    function carregar('notificacoes.php'){
        $("#conteudo").load('notificacoes.php');
    }
</script>
  
<style type="text/css"> #conteudo { width: 400px; height: 300px;} </style>
</head>
<body>  
<ul>
<li><a onclick="abreURL('pages/notificacoes.php','GET','conteudo')" href="#"></li>
</ul>
Abrir na div conteúdo
</a>

  
     <div id="sidebar">
        <ul>
            <li><a onclick="carregar('notificacoes.php')" href="#">Home</a></li>
            <li><a onclick="carregar('explore.html')" href="#">Explore</a></li>
            <li><a onclick="carregar('users.html')" href="#">Users</a></li>
            <li><a onclick="carregar('signOut.html')" href="#">Sign Out</a></li>
        </ul>
    </div>
    <div id="conteudo"></div>
	
	<div id="conteudo">
<div id="carregador">Carregando...</div>
Aqui irá carregar a pagina nova e os dados do banco de id=10.</div>
</body>

</html>