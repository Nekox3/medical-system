

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="Dashboard">
      <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
      <title>Sesion</title>
      <!-- Bootstrap core CSS -->
      <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
      <!--external css-->
      <link href="<?php echo base_url()?>assets/css/font-awesome.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
      <link href="<?php echo base_url()?>assets/css/style-responsive.css" rel="stylesheet">
      <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap-datetimepicker.min.css">
   </head>
   <body>
      <form action="<?php echo base_url()?>auth/login" method="post">
         <br><br><br><br><br><br><br><br><br><br>
         <div id="login-page">
         <div class="container">
         <div class="form-login">
         <h2 class="form-login-heading">Medical System</h2>
         <div id="respuesta"></div>
         <div class="login-wrap">
         <div class="row">
            <?php if($this->session->flashdata("error")): ?>
            <div class="alert alert-danger">
               <p><?php echo $this->session->flashdata("error")?></p>
            </div>
            <?php endif;?>
            <div class="col-md-12">
               <div class="form-group has-feedback">
                 <input type="text" id="user" name="user" class="form-control" placeholder="Usuario" autofocus  value="<?php echo set_value('user') ?>" autocomplete="off">
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="form-group has-feedback">
                  <input type="password" id="contra" name="contra" class="form-control"  placeholder="Contraseña" autofocus  value="<?php echo set_value('contra') ?>" autocomplete="off">
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
               </div>
            </div>
         </div>
         <input type="hidden" id="token" name="token" value="<?=$token?>"/>
         <input name="ingresar" id="ingresar" class="btn btn-theme btn-block" type="submit" value="Entrar">
         <script src="<?php echo base_url()?>assets/js/jquery-2.2.3.min.js"></script>
         <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
         <script src="<?php echo base_url()?>assets/js/jsIndex.js"></script>
         <script src="<?php echo base_url()?>assets/js/moment.js"></script>
         <script src="<?php echo base_url()?>assets/js/bootstrap-datetimepicker.min.js"></script>
         <script src="<?php echo base_url()?>assets/js/bootstrap-datetimepicker.es.js"></script>     
         <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.backstretch.min.js"></script>                         
         <script>
            $.backstretch("<?php echo base_url()?>assets/img/MD.jpg", {speed: 500});
         </script>
      </form>
   </body>
</html>

