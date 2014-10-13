<!DOCTYPE html>
<html lang="en">
<head>
 <?php echo $this->element('meta'); ?>
</head>

<body>
<div id="wrapper">

  <?php echo $this->element('sidebar'); ?>

   <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
       <h1 class="page-header"><?php echo $title_for_layout; ?></h1>
      <p><?php echo $this->Session->flash(); ?></p>
    </div>
  </div><!-- /.row -->

  <?php echo $this->fetch('content'); ?>

  <div class="row">
    <div class="col-lg-12">
      <br />
      <?php echo $this->element('sql_dump'); ?>
    </div>
  </div> 
</div><!-- /#page-wrapper -->

</div><!-- /#wrapper -->


 <?php echo $this->element('footer'); ?>
 

</body>
</html>

