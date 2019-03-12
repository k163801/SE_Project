<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "header.php"); ?>
    
    
    <div class="content-section">
        
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <?php get_chefs(); ?>
                </div><!-- col-12 -->
            </div><!-- row -->

    
        </div><!-- container -->

    
    </div><!--content-section-->

    <div style="margin:20px 0; border:solid 0px; border-color:#1e1111 ">
        <nav aria-label="Page navigation example" style="margin:20px 0px">
          <ul class="pagination pg-blue justify-content-center" style="color:#dc3545">
            <li class="page-item ">
              <a class="page-link">Previous</a>
            </li>
            <li class="page-item"><a class="page-link">1</a></li>
            <li class="page-item"><a class="page-link">2</a></li>
            <li class="page-item"><a class="page-link">3</a></li>
            <li class="page-item">
              <a class="page-link">Next</a>
            </li>
          </ul>
        </nav>
    </div>

<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>
