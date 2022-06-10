<?php

$page = "About-Us";

require './includes/header.php';
require './includes/navbar.php';?>


     <!-- Product section-->
     <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">

<?php
                $id = $_GET['pid']; 
                $service = $services[$id];
           ?>
                  
                    <div class="col-md-6">
                        <h1 class="display-5 fw-bolder"><?=$service['title']?></h1>
                        <div class="fs-5 mb-5">
                        </div>
                        <p class="lead"><?=$service['description']?></p>
                        
                    </div>
                  
                    <div class="col-md-6">
                      <img src="<?=$service['image']?>" alt="">
                        
                    </div>
                </div>
            </div>
        </section>

<?php
require './includes/footer.php';
?>


