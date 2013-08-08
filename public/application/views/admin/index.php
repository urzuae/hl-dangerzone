<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('statics/css/admin.css'); ?>" type="text/css" />
    <script type="text/javascript" src="<?php echo base_url('statics/js/jquery.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('statics/js/search.js'); ?>"></script>
    <script type="text/javascript"> var _baseUrl = "<?php echo base_url(); ?>"; </script>
  </head>
  <body>
    <div id="container">
      <header>
        <a href="<?php echo base_url(); ?>">
          <img src="<?php echo base_url('statics/images/misc/logoHerbalife.png'); ?>" alt="herbalife" class="logo" />
        </a>
      </header>
      <div id="main_container">
        <div id="sidebar">
          <form id="search_form">
            <input type="text" name="id_herbalife" value="" />
            <input type="submit" name="search" value="Buscar" />
          </form>
        </div>
        <section id="main_content">
           
        </section>
      </div>
    </div>
  </body>
</html>
