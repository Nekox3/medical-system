
<body>

  <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-12 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
              
            </div>
    <div class="container container-fluid">  
    <form action="<?php echo base_url()?>auth/login">
        <div class="row">
        <!--<img src="assets1/img/medical.jpg" width="1138" height="560">-->
       <!-- carga de los JQUERY-->
<script src="<?php echo base_url()?>assets1/plugins/fullcalendar-3.9.0/lib/jquery-ui.min.js"></script>
<script src="<?php echo base_url()?>assets1/plugins/fullcalendar-3.9.0/lib/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets1/plugins/fullcalendar-3.9.0/lib/moment.min.js"></script>

<!--carga de los css-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets1/plugins/fullcalendar-3.9.0/fullcalendar.min.css">
<script type="text/javascript" src="<?php echo base_url();?>assets1/plugins/fullcalendar-3.9.0/fullcalendar.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets1/plugins/fullcalendar-3.9.0/locale/es.js"></script>


          
          <script>
            $(document).ready(function() {
              $('#calendar').fullCalendar({
               themeSystem: 'bootstrap3',
               //navLinks: true, 
               editable: true,
               //selectable: true,
               eventLimit: true, 
               loading: function(bool) {
               $('#loading').toggle(bool);
             },
                header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,listMonth'
                   },
                option:{
                    locale:'es'
                },
                events:'<?php echo site_url('Vista_Admin/eventos'); ?>',

               dayClick:  function(){
                  var moment = $('#calendar').fullCalendar('getDate');
                  alert("Capturo la hora papuh " + moment.format());
               //location.href ="http://localhost/Medical_System_Prueba/Vista_RegistroCit/Ver_tablaCitaAdmin";
                },
                eventClick: function(){
                location.href ="http://localhost/Medical_System_Prueba/Vista_RegistroCit/Ver_tablaCitaAdmin";
                },
                eventRender: function(event, el) {
     
               if (event.start.hasZone()) {
                el.find('.fc-title').after(
              $('<div class="tzo"/>').text(event.start.format('Z'))
                        );
                }
              },
           });

              $('#timezone-selector').on('change', function() {
            $('#calendar').fullCalendar('option', 'timezone', this.value || false);
              });
              });
                    $.getJSON('https://fullcalendar.io/demo-timezones.json', function(timezones) {
                     $.each(timezones, function(i, timezone) {
                    if (timezone != 'UTC') { 
                   $('#timezone-selector').append(
                   $("<option/>").text(timezone).attr('value', timezone)
                      );
                    }

                  });
                });




    </script>
    <center>
    <div id='top'>

  <div style='float:left'>
    Zona horaria:
    <select id='timezone-selector'>
      <option value='' selected>none</option>
      <option value='local'>local</option>
      <option value='UTC'>UTC</option>
    </select>
  </div>

  <div style='float:right'>
    <span id='loading'>Cargando...</span>

  </div>

  <div style='clear:both'></div>
</div>

  </center>

    

          <div id="calendar"></div>


          
<style type="text/css">
  
  #calendar{
  background: #A9E2F3;
  width: 1000px; 
  color: #0B0719;
  margin: 0px auto; 
  }

  body {
  margin: 0;
  padding: 0;
  font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
  font-size: 14px;
  }

#timezone-selector{
  color: #120A2A;
}

#top {
  background: transparent;
  border-bottom: 1px solid #ddd;
  padding: 0 10px;
  line-height: 40px;
  font-size: 12px;
}

#loading {
  display: none;
}

#calendar {
  max-width: 900px;
  margin: 40px auto;
  padding: 0 10px;
}

.tzo {
  color:#120A2A ;
}

</style>



            </div>
           
        </div>
       
       
        </div>

    </form>

    </div>
</div>
</div>
</section>
</section>

<script>
        $.backstretch("<?php echo base_url()?>assets/img/MD.jpg", {speed: 500});
    </script>
</body>
