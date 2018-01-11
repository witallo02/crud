<!DOCTYPE html>
<html lang="en">
<head>
  <title>Controle de estoque</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<style>
  body {
      position: relative; 
  }
  #section1 {padding-top:50px;height:500px;color: #fff; background-color: #1E88E5;}
  #section2 {padding-top:50px;height:500px;color: #fff; background-color: #673ab7;}
  #section3 {padding-top:50px;height:500px;color: #fff; background-color: #ff9800;}
  #section41 {padding-top:50px;height:500px;color: #fff; background-color: #00bcd4;}
  #section42 {padding-top:50px;height:500px;color: #fff; background-color: #009688;}
  h1,label,b,p,th{
  	color: black;
  }<style>
  .jumbotron {
      background-color: #f4511e;
      color: #fff;
      padding: 100px 25px;
  }
  #t1 .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo {
      font-size: 200px;
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
  }
  </style>
  </style>

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">ESTOQUES</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#section1">home</a></li>
          <li><a href="#section2">sobre</a></li>
          <li><a href="#section3">imagens</a></li>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>    
<br><br>
  <div id="section1" class="container-fluid">
<div class="container bg-success col-lg-20">
 <div class="col-lg-6">
  <h1 >CONTROLE DE ESTOQUE</h1>
  <a href="#" data-toggle="tooltip" title="funcionario produto!">site de cadastros oficial do ceará.</a>
	</div><p></p>
	<div class="col-lg-6">
		<div class="panel panel-default">
    <div class="panel-body">
		<form method="post" action=""><p></p>
    <div class="input-group col-xs-10">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="email" type="text" class="form-control" required name="login" placeholder="funcionario">
    </div>
    <div class="input-group col-xs-10">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="password" type="password" class="form-control" required id name="senha" minlength="8" placeholder="senha">
    </div><div class="checkbox">
      <label><input type="checkbox" name="remember"> Relembra-me</label>
    </div><center>
</div>
</div>
  <p><button type="submit" class="btn btn-success" data-toggle="tooltip" title="adentrar">ENTRAR</button>
  </form>
  <button type="submit" class="btn btn-warning" data-toggle="tooltip" title="apronte-se" id="myBtn">CADASTRA-SE</button></p></center>
  
	</div>
</div>
<!-- 00000000000000000000000000000000000000 parte de baixo 00000000000000000000000000000000000-->
<br>
<center>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script><div class="container">
  <h2>Rapido e seguro</h2>
  <!-- 00000000000000000000000000000000000000000000000000000000000000000000000000primeiro bt -->


  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" disabled="disabled" data-target="#myModal1">funcionarios cadastrados</button>


<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:10px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h1><span class="glyphicon glyphicon-lock"></span> Login</h1>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method='post' action=''>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Funcionario</label>
              <input type="text" class="form-control" id="usrname" placeholder="nome" name='cadlogin'>
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> senha</label>
              <input type="text" class="form-control" id="psw" placeholder="senha" name='cadsenha'>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>relembra-me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Cadastrar</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Não é um membro? <a href="#">inscreva-se</a></p>
          <p>esqueci <a href="#">a senha?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>







  <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h1 class="modal-title">procure</h1>
        </div>
        <div class="modal-body">
          <p>Encontre os fucionarios cadastrados</p>
          <div class="container-lg">
  <h2>Filterable Table</h2>
  <p>coloque o nome do funcionario</p>  
  <input class="form-control" id="myInput" type="text" placeholder="procurar..">
  <br>
  <!--<table class="table table-bordered table-striped">
     <thead>
  
<tr>
  <th>funcionario</th>
</tr>

</thead>
<style type="text/css">

tbody tr:hover{background-color:#555;color:white};

 
</style>
<center>
      <?php
           // include_once "conexao.php";
            //$sql = "select * from funcionario";
           // $result = mysql_query($sql,$con);
            //if($result){
           // while($linha = mysql_fetch_array($result)){
?>
<b>
<tbody id="myTable">
       <tr>
          // <td><p> <?php echo $linha['nome'];?></p></td>
       </tr>
</tbody>
</b>
<?php
         // }//fim do while
         // }//fim do if  
         // mysql_close($con);
?>
</table> -->
  
  <p>filtre os funcionario para saber quem esta cadastrado!</p>
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">voltar</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
</div>
<div id="section2" class="container-fluid">
<div class="container-fluid" id='t1'>
  <div class="row">
    <div class="col-sm-8">
      <h2>SOBECONTROLE</h2>
      <h4>Gestão de Armazenagem</h4>      
      <p>As soluções desse site apoiam a gestão de armazenagem de forma eficiente e organizada. Além disso, por meio do software de logística, é possível gerenciar recursos e pessoas envolvidas no dia a dia das atividades.</p>
      <button class="btn btn-default btn-lg">deixe sua mensagem!</button>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo"></span>
    </div>
    <div class="col-sm-8">
      <h2>CARACTERÍSTICAS</h2>
      <h4><strong>PLANEJAMENTO :</strong>Auxilia no controle orçamentário, conectando dados da contabilidade, faturamento e financeiro, permitindo previsões apuradas</h4>      
      <p><strong>PLANEJAMENTO:</strong> Otimiza o controle e os níveis de estoque e reduz custos.</p>
    </div>
  </div>
</div>
</div>
<div id="section3" class="container-fluid">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="CDE3.jpg" alt="segurança" style="width:100%;">
        <div class="carousel-caption">
          <h3>SEGURANÇA</h3>
          <p>A mas segura do brasil!</p>
        </div>
      </div>
      	  <!-- 260 x 80-->
      <div class="item">
        <img src="CDE1.jpg" alt="pratica" style="width:100%;">
        <div class="carousel-caption">
          <h3>PRATICIDADE</h3>
          <p>fas facilidade para sua empresa!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="CDE2.jpg" alt="orgao" style="width:100%;">
        <div class="carousel-caption">
          <h3>ORGANIZACAO</h3>
          <p>melhores padroes!</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">anterios</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">proximo</span>
    </a>
  </div>
</center>

</body>
</html>
<!-- 00000000000000000000000000000000000000 parte do php 0000000000000000000000000000000000-->
<?php
include_once "conexao.php";
if((isset($_POST['login'])==0) and (isset($_POST['senha'])==0)){  
}else{
$login = $_POST['login'];
$senha = $_POST['senha'];
$sql="select * from funcionario where nome='$login' and senha='$senha'";
$result=mysql_query($sql,$con);
$res=mysql_num_rows($result);
if($res){
  $linha=mysql_fetch_array($result);
  session_start();
  $_SESSION['id']=$linha['id_funcionario'];
  $_SESSION['nome']=$linha['nome'];
  echo "<script> window.location=' index.php'</script>";    
}else{
    echo "<script>alert('Login ou Senha invalidos')</script>";
}
}
?>
<?php  
if((isset($_POST['cadlogin'])==0) and (isset($_POST['cadsenha'])==0)){  
}else{
$cadlogin = $_POST['cadlogin'];
$cadsenha = $_POST['cadsenha'];
$sql="select * from funcionario where nome='$cadlogin' ";
$result=mysql_query($sql,$con);
$res=mysql_num_rows($result);
if($res){
  $linha=mysql_fetch_array($result);    
}else{
    $sql="insert into funcionario values(0,'".$cadlogin."',".$cadsenha.");";
    mysql_query($sql,$con);
}
}
?>
