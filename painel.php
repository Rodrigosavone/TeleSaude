<?php
  include('verifica_login.php');
?>

<?php
  /* 
  Todos os links do menu sao requests de pagina que vao ser carregados no Main Content dinamicamente.
  Assim o Header (o menu e as configuracoes do bootstrap) e o footer nao mudam.
  */

  if(isset($_GET['page'])){
  $rota=($_GET['page']);
  }

  if(isset($rota) && $rota != '' ){ //se houver um request e este request de pagina nao for vazio   
    $page = $rota; //set a variavel o nome do arquivo a ser servido.
  }else{
    $page = 'templates/main';
  }
  
  function trataRota($input){
    if (strpos($input, 'templates')!== false)return "view/".$input;
    return $input;
  }
  $page=trataRota($page);
  
  

  include 'view/templates/header.php';
  ?>
<!--Footer-->
<?php
  include 'view/templates/footer.php';
?>
  <!--Footer End-->