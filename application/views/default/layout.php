<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $title; ?></title>
    
    <?php
        $base_url='/cardReader';  
        $data['base_url']=$base_url;  
    ?>

  <link href="<?php echo $base_url ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo $base_url ?>/css/demo_page.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo $base_url ?>/css/demo_table.css" rel="stylesheet" type="text/css" />

  <script type="text/javascript" src="<?php echo $base_url ?>/js/jquery-1.8.2.min.js" ></script>
  <script type="text/javascript" src="<?php echo $base_url ?>/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo $base_url ?>/js/twitter-bootstrap-hover-dropdown.js"></script>
  <script type="text/javascript" src="<?php echo $base_url ?>/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="<?php echo $base_url ?>/js/jquery.jeditable.js"></script>  
  <script type="text/javascript" src="<?php echo $base_url ?>/js/jquery.dataTables.editable.js"></script>

</head>
<body>

<div id="top">
    <?php $this->load->view('default/top', $data); ?>
</div>

<div id="main" class="container">
    <?php $this->load->view($main, $data);?>
</div>


</body>
</html>