<?php  

   session_start();

   if(isset($_SESSION['utdexec3'])){
      $sessao = $_SESSION['utdexec3'];
      header("location: ".$sessao['tipoAcesso'].'.php');
   }

?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<style type="text/css">
   body {
    font-family: "Lato", sans-serif;
   }



   .main-head{
       height: 150px;
       background: #FFF;
      
   }

   .sidenav {
       height: 100%;
       background-color: #000;
       overflow-x: hidden;
       padding-top: 20px;
   }


   .main {
       padding: 0px 10px;
   }

   @media screen and (max-height: 450px) {
       .sidenav {padding-top: 15px;}
   }

   @media screen and (max-width: 450px) {
       .login-form{
           margin-top: 10%;
       }

       .register-form{
           margin-top: 10%;
       }
   }

   @media screen and (min-width: 768px){
       .main{
           margin-left: 40%; 
       }

       .sidenav{
           width: 40%;
           position: fixed;
           z-index: 1;
           top: 0;
           left: 0;
       }

       .login-form{
           margin-top: 80%;
       }

       .register-form{
           margin-top: 20%;
       }
   }


   .login-main-text{
       margin-top: 20%;
       padding: 60px;
       color: #fff;
   }

   .login-main-text h2{
       font-weight: 300;
   }

   .btn-black{
       background-color: #000 !important;
       color: #fff;
   }
</style>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

      <div class="sidenav">
         <div class="login-main-text">
            <h2>Application<br> Login Page</h2>
            <p>Login or register from here to access.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <?php  
                  if(isset($_GET['msg'])){
                     switch($_GET['msg']){
                        case 'usuario_incorreto':
                           $texto = "Email não encontrado!";
                           $cor = "danger";
                        break;

                        case 'senha_incorreta':
                           $texto = "Senha Incorreta";
                           $cor = "danger";
                        break;

                        case 'sessao_encerrada':
                           $texto = "Volte sempre !!!";
                           $cor = "success";
                        break;
                     }
               ?>

                     <div class="alert alert-<?=$cor;?> alert-dismissible fade show" role="alert">
                       <strong><?=$texto;?></strong>
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                     </div>
               <?php } ?>

               <form action="controllers/login.php" method="POST">
                  <div class="form-group">
                     <label>Email</label>
                     <input type="email" name="email" class="form-control" placeholder="Email">
                  </div>
                  <div class="form-group">
                     <label>Senha</label>
                     <input type="password" name="senha" class="form-control" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-black">Login</button>
                  <button type="submit" class="btn btn-secondary">Register</button>
               </form>
            </div>
         </div>
      </div>