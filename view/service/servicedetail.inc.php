<div class="container">
    <div class="text-center service-detail">
        <h1 class="topic-service">
        <?PHP
            if($lng == "TH"){
                echo 'บริการของเรา';
            }else{
                echo 'SERVICE';
            } 
            ?>
         </h1>
        <hr class="border-contact" style="border-top: 2px solid  #5a5a5a; width: 5%;">
    </div>
    <?PHP $i = $_GET['id'] ; ?>
    <div class="row shadow-lg">
        <div class="col-lg-6 col-md-12 col-sm-12 col-12 no-padding">
            <img class="img-service-detail" src="img_upload/services/<?PHP  echo $services[$i]['services_img']; ?>">
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12 no-padding">

            <div class="about-head">
                <div class="row">
                    <div class="col-lg-4 col-md-3 col-sm-3 col-3 no-padding">
                        <img class="icon-service-detail"
                            src="img_upload/icon-services/53176142_310652063137173_1974414113991819264_n.png">
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 all-text-service-detail no-padding">
                        <div class="text-sevice-detail1">
                            <?PHP if($lng == "TH"){ echo 'บริการสำหรับ'; }else{ echo ' SERVICE FOR'; } ?>
                            <br>
                            <?PHP if($lng == "TH"){ echo $services[$i]['services_name_th']; }else{ echo $services[$i]['services_name_en']; } ?>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-3 col-sm-3 col-3 no-padding">
                        <a href="contact.php#contact" class="btn btn-contact-servicedetail">
                        <?PHP
                            if($lng == "TH"){
                                echo 'ติดต่อเรา';
                            }else{
                                echo 'Contact Us';
                            } 
                            ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="detail-service">
            
                        <?PHP if($lng == "TH"){ echo $services[$i]['services_detail_th']; }else{ echo $services[$i]['services_detail_en']; } ?>
                    
            </div>
        </div>
    </div>
</div>