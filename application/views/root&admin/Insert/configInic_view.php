<!DOCTYPE html>
<html>
<head>
  <title>Configuracion</title>

<style type="text/css">
 
     .upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}

.img {
  border: 0px solid gray;
  color: #052A59;
  background-image: url("http://i68.tinypic.com/2wrm2o4.jpg");
  background-size: 100px;
   background-repeat: no-repeat;
  height: 65px;
  padding: 10px 160px;
  border-radius: 8px;
  font-size: 20px;
  font-weight: bold;
}

.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
</style>

 <style>
          .thumb {
            width:  500px;
            height: 400px;
            border: 1px solid #000;
            margin: 10px 5px 0 0;
          }
        </style>

   
    </head>
<body>
  <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
              
            </div>
    <div class="container container-fluid">
    <br><br><br><br><br><br>
   
   
    <form class="alert btn-theme03 top-center" action="<?php echo base_url()?>Vista_ConfigInic/subirimagen" method='POST' enctype="multipart/form-data" >
        <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-5">
            <br>
            <center><h2>Configuracion inicial</h2></center>
            <br>
           <?=$error ?>
            <div class="upload-btn-wrapper">
                  <button class="img">Subir Imagen</button>
                  <input type="file" id="files" name="imagen" style="cursor: pointer;" accept="image/*" >
            </div>
             <!--<input type="file" id="files" name="files[]" />-->
        <br />
        <output id="list"></output>
        
        <script>
              function archivo(evt) {
                  var files = evt.target.files; // FileList object
            
                  // Obtenemos la imagen del campo "file".
                  for (var i = 0, f; f = files[i]; i++) {
                    //Solo admitimos imágenes.
                    if (!f.type.match('image.*')) {
                        continue;
                    }
            
                    var reader = new FileReader();
            
                    reader.onload = (function(theFile) {
                        return function(e) {
                          // Insertamos la imagen
                         document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                        };
                    })(f);
            
                    reader.readAsDataURL(f);
                  }
              }
            
              document.getElementById('files').addEventListener('change', archivo, false);
      </script>
           
        <br>
        <input type="text" class="form form-control" name="inst" placeholder="Nombre de la institucion" required>
        <br>
        <div class="row">
            
        <div class="col-md-5">
            <label>Tipo de institucion</label>
            <select name="tipo" class="form form-control" style="cursor: pointer;" required="1">
                <option value="hospital">Hospital</option>
                <option value="clinica">Clinica</option>
                <option value="medico_privado">Medico Privado</option>
            </select>
        </div>
        <div class="col-md-5">

          <label>Rubro</label>
            <select name="rubu" class="form form-control" style="cursor: pointer;" required="1">
                <option value="">--Elija un rubro--</option>
                <option value="Publico">Publico</option>
                <option value="Privado">Privado</option>
            </select>

        <div class="col-md-2">
            <br>
        <input type="submit" class="btn btn-theme02" name="enviar" value="Guardar" style="cursor: pointer;" />
        </div>
            </div>       
        </div>

    </form>
 <br><br>

        
        
        


    </div>
</div>
</div>
</section>
</section>
<!--End Container-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="http://code.jquery.com/jquery.js"></script>-->
<script src="<?php echo base_url()?>assets1/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets1/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url()?>assets1/plugins/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets1/plugins/justified-gallery/jquery.justifiedGallery.min.js"></script>
<script src="<?php echo base_url()?>assets1/plugins/tinymce/tinymce.min.js"></script>
<script src="<?php echo base_url()?>assets1/plugins/tinymce/jquery.tinymce.min.js"></script>
<script>
        $.backstretch("<?php echo base_url()?>assets/img/MD.jpg", {speed: 500});
    </script>
</body>
<br><br><br><br><br>