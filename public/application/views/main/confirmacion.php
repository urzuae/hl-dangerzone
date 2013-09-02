<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('statics/css/general.css'); ?>" type="text/css" />
    <script type="text/javascript" src="<?php echo base_url('statics/js/jquery.js'); ?>"></script>
    <!--<script type="text/javascript" src="http://localhost/validamesta/src/validamesta.js"></script>-->
    <script type="text/javascript">
      /*$(document).ready(function() {
        //$('#contact_info').validamesta();
        $('#contact_info').validamesta();
        $('#contact_info').submit(function() { 
          $(this).data('validamesta').validate();
          return false;
        });
      });*/
    </script>
    <style>
html { font-family: Arial Rounded, sans-serif; }
      p { margin: 20px; text-align: justify;}
      h1, h2 { color: #125cb5; text-align: center; margin: 30px; }
    </style>
  </head>
  <body>
    <div id="container">
      <header>
        <a href="<?php echo base_url(); ?>">
          <img src="<?php echo base_url('statics/images/misc/logoHerbalife.png'); ?>" alt="herbalife" class="logo"/></a>
      </header>
      <section>
        <h1>SU REGISTRO A CONCLUÍDO</h1>
        <p>
Su información fue enviada correctamente, en breve un ejecutivo lo contactara para seguir el proceso de validación. Favor de enviar copia legible de los pasaportes de usted y de sus acompañantes ingresados al correo <a href="mailto:pasaportes@vacacioneslatinolvidables2013.com">pasaportes@vacacioneslatinolvidables2013.com</a>; es importante que en el asunto del mensaje escriba su ID de Herbalife seguido de su nombre completo. Si usted pertenece a alguno de los siguientes países: BOLIVIA, ECUADOR, EL SALVADOR, GUATEMALA, HONDURAS, NICARAGUA O REPUBLICA DOMINICANA. Le recordamos que el trámite y el costo del visado para el ingreso a México es responsabilidad de cada asistente a las Vacaciones LATinolvidables 2013. Para mayor información en relación a este trámite, ingrese al Instituto Nacional de Migración México <a href="http://www.inm.gob.mx/?page/Paises_visa" target="_blank"> http://www.inm.gob.mx/?page/Paises_visa</a>.  *Ni Herbalife ® o Meeting Planners International se responsabilizan por la aceptación, negación o costos de dicho trámite. Si desea contactarnos envíe un correo electrónico a consultas@vacacioneslatinolvidables2013.com donde lo atenderemos con gusto.  Revise nuestros  <a href="<?php echo base_url('main/terminos');?>">Términos, Condiciones y Política de Privacidad.</a>
        </p>
        <p>
          <a href="<?php echo base_url('main/sign_out'); ?>" class="exit">Salir</a>
        </p>
      </section>
    </div>
  </body>
</html>
