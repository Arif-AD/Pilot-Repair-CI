<!DOCTYPE html>
<html lang="en">
  <?php $this->load->view('home/head') ?>
  <body>
  
  <div class="site-wrap">

    <?php $this->load->view('home/site_mobile') ?>
    <?php 
      if ($this->uri->segment(2) == '' or $this->uri->segment(2) == null) {
        $this->load->view('home/menu/login');
      }
    ?> 


    <?php $this->load->view($main); ?>

      
  </div>

  <?php $this->load->view('home/script') ?>
    
  </body>
</html>