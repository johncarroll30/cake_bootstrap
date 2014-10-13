<!-- end main nav-->
<?php echo $this->element('meta'); ?>
<!-- end main nav -->
<body class="off">
    <!-- main nav-->
    <?php echo $this->element('main-nav'); ?> 
    <!-- / main nav -->

    <!-- canvas content -->
    <div class="canvas-content">

        <!-- wrapper -->
        <div class="wrapper">
           <!-- header -->
           <?php echo $this->element('header'); ?> 
           <!--/ header -->
        </div>
        <!-- / wrapper -->
        <!-- breadcrumb -->
           <?php echo $this->element('breadcrumb'); ?> 
        <!--/ breadcrumb -->

        <!-- content output -->
        <?php echo $this->fetch('content'); ?>
        <!-- / content output -->

        <!-- footer -->
        <?php echo $this->element('footer'); ?>
        <!-- / footer -->

        <?php echo $this->element('sql_dump'); ?>
        
    </div>
    <!-- /canvas content -->

<?php echo $this->element('footer-scripts'); ?>
</body>
</html>
