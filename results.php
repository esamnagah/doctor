<?php


require './includes/header.php';
require './includes/navbar.php';?>




<div class="contact-page2">
            <div class="container">
                <div class="row">
                    <div id="Div_PageDetails" class="col-12 col-md-11 m-auto"></div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 m-auto">
                        <h3>بحث </h3>
                        <div class="row">
                            

                            <div class="col-sm-12">
                                <input name="Txt_Passport_number" type="text" id="Txt_Passport_number" class="form-control" placeholder="رقم جواز السفر*" required="required" oninvalid="this.setCustomValidity(&#39;Please fill out your Passport number&#39;)" oninput="this.setCustomValidity(&#39;&#39;)" />
                            </div>



                            <div class="col-sm-12">
                                <input type="submit" name="Btn_search" value="بحـــث" id="Btn_search" class="btn btn-success form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-10 offset-md-1 m-auto">
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="news-d-page">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 m-auto">
                        <div class="row">
                            <div id="Div_PageHead_Details" class="about-info">
                            </div>
                            <div class="col-12 col-md-5">
                                <div id="div_slider" class="about-slider">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            

            <div class="container" style="padding-top:30px">
                <div class="row">
                    <div id="Div_Passport_Image" class="col-12 col-md-8 m-auto"></div>
                </div>
            </div>
        </div>



<?php
require './includes/footer.php';
?>


