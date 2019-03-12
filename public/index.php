<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "header.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "slider.php"); ?>
    
    
    <div class="content-section">
        
        <div class="container">   
            
            
            <div class="row">
                <div class="col-12">
                    <?php get_deals(); ?>
                </div><!-- col-12 -->
            </div><!-- row -->
            
<hr>
            <div class="row">
                <div class="col-12">
                    <?php get_dishes(); ?>
                </div><!-- col-12 -->
            </div><!-- row -->
<hr>        
            
            <div class="row">
                <div class="col-12">
                    <?php get_resturants(); ?>
                </div><!-- col-12 -->
            </div><!-- row -->
<hr>            
            <div class="row">
                <div class="col-12">
                    <?php get_chefs(); ?>
                </div><!-- col-12 -->
            </div><!-- row -->
            
        </div><!-- container -->
   
    </div><!--content-section-->

<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>
