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

           <!-- section -->
           <section>
              <div class="row">
                  <!-- begin left column -->
                  <div class="small-24 medium-7 medium-push-17 large-6 large-push-18 columns show-for-medium-up">
                          <div class="block theme-a">
                              <div class="button-bar">
                                  <ul class="button-group button-map-grid">
                                       <li><a href="#grid-view" class="button active" data-id="grid-view">Grid View</a></li>
                                       <li><a href="#map-canvas" class="button" data-id="map-canvas">Map View</a></li>
                                   </ul>
                              </div>
                          </div>
                          <!-- filter nav-->
                          <?php echo $this->element('category-filter'); ?> 
                          <?php echo $this->element('filter'); ?> 
                          <!-- filter nav -->
                  </div>
                  <!-- /end left column -->

                   <!-- right column -->
                  <div class="small-24 medium-17 medium-pull-7 large-18 large-pull-6 columns">
                      <div class="block theme-a show-for-small">
                          <div class="button-bar">
                              <ul class="button-group button-map-grid">
                                   <li><a href="#grid-view" class="button active" data-id="grid-view">Grid View</a></li>
                                   <li><a href="#map-canvas" class="button" data-id="map-canvas">Map View</a></li>
                              </ul>
                          </div>
                      </div>

                      <!-- map -->
                      <div class="row">
                           <div class="small-24 columns map">
                              <div id="map-canvas"></div>
                          </div>
                      </div>
                      <!-- /map -->

                      <!-- subnav-block -->
                      <div class="subnav-block">
                          <div class="subnav-content">   
                              <h2>Brittany</h2>
                              <h4>France</h4>
                              <div class="row"> 

                                  <div class="small-24 medium-24 large-8 columns">
                                      <p>Lorem ipsum dolor sit amet, consectetur 
                                          adipiscing elit. Vivamus venenatis eros 
                                          ultrices nos feugiat, at ullamcor dolor. 
                                          Lorem ipsum dolor sit amet, consectetur 
                                          adipiscing. Lorem elit del ipsum dolor sit 
                                          amet, consectetur adipiscing elit.</p>
                                  </div>
                                  <div class="small-24 medium-24 large-13 columns">
                                          <br class="show-modium-down"/>
                                          <nav>
                                            <ul class="inline-list">
                                              <li><a href="#">St Marlo (2)</a></li>
                                              <li><a href="#">St Marlo (2)</a></li>
                                              <li><a href="#">St Marlo (2)</a></li>
                                              <li><a href="#">St Marlo (2)</a></li>
                                              <li><a href="#">St Marlo (2)</a></li>
                                           </ul>
                                          </nav>
                                        <hr />
                                  </div>
                              </div>
                            </div>
                      </div> 
                      <!-- /end subnav-block -->
  
                      <!-- grid -->
                      <div class="row" id="grid-view">
                          <!--<div class="small-24 medium-12 large-8 columns end">
                              <?php  include('property-destination.php'); ?>  
                          </div>
                          <div class="small-24 medium-12 large-8 columns end">
                              <?php  include('property-destination.php'); ?>  
                          </div>
                          <div class="small-24 medium-12 large-8 columns end">
                              <?php  include('property-destination.php'); ?>  
                          </div>
                          <div class="small-24 medium-12 large-8 columns end">
                              <?php  include('property-destination.php'); ?>  
                          </div>
                          <div class="small-24 medium-12 large-8 columns end">
                              <?php  include('property-destination.php'); ?>  
                          </div>
                          <div class="small-24 medium-12 large-8 columns end">
                              <?php  include('property-destination.php'); ?>  
                          </div>-->
                      </div>
                      <!-- / grid -->

                  </div>
                  <!-- / right column -->

              </div>
           </section>
           <!-- /section -->

       

        <!-- content output -->
        <?php //echo $this->fetch('content'); ?>
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
