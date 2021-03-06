<?php require_once('view/menu.inc.php');





require_once('models/TypesModel.php');
$type_model = new TypesModel;
$type = $type_model->getTypesBy();
$type_popular = $type_model->getTypesByPopular();

// echo "<pre>";
// print_r($type) ;
// echo "</pre>";

require_once('models/LocationModel.php');
$location_model = new LocationModel;
$location = $location_model->getLocationBy();
// echo "<pre>";
// print_r($location) ;
// echo "</pre>";



require_once('models/ProductModel.php');
$product_model = new ProductModel;
$product = $product_model->getProducImgtBy();
$product_header = $product_model->getProductHeaderBy();
// echo "<pre>";
// print_r($product) ;
// echo "</pre>";




?>



    <section class="col-lg-12 no-padding" style="position: relative; height: 30vw;">
        <img class="size-img-slide" src="img_upload/slide/<?php echo $slide['slide_image'];  ?>">
            <div class="overlay-slide-service">
            </div>
    
    <section class="slide no-padding slide-home ">
        <div class="col-12">
            <div class="container">
                <div class="row">
                    <div class="col-10 margin-all-slide">

                        <div class="slide-item">
                            <div class="slide-detail-home">
                                <div class="slide-header-home">
                                    <h1 class="slide-cut-text-h1" style="color: #fff;">
                                        <?PHP if($lng == "TH"){ 
                                            echo $slide['slide_title_th']; 
                                        }else{ 
                                            echo $slide['slide_title_en'];
                                        } ?>
                                    </h1>
                                </div> 
                                <div class="slide-text-detail">
                                    <p class="slide-cut-text-p">
                                        <?PHP if($lng == "TH"){ 
                                            echo $slide['slide_description_th']; 
                                        }else{ 
                                            echo $slide['slide_description_en']; 
                                        } ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        
        </div>
        </div>

    </section>

    
    
    <script>
        function search() {
            var location_id = $("#location_id").val();
            var product_types_id = $("#product_types_id").val();
            var keyword = $("#keyword").val();
            window.location = "property.php?action=detail&search=1&location_id=" + location_id + "&product_types_id=" + product_types_id + "&keyword=" + keyword;
        }
    </script>

    <div class="box-search-home">
        <div class="shadow-lg" style="background-color: white;">
            <div class="row m-0 py-4">
                <div class="col-sm-12 col-md-3 py-md-0 py-sm-3">
                    <div class="text-left">
                        <div class="">
                            <select class="form-control  custom-select" id="location_id" name="location_id">
                                <option value=""> <?PHP
                                    if($lng == "TH"){
                                        echo 'จังหวัด';
                                    }else{
                                        echo 'Location';
                                    } 
                                    ?></option>
                                <?PHP for ($i = 0; $i < count($location); $i++) {  ?>
                                <option value="<?PHP echo $location[$i]['location_id']; ?>" <?PHP if ($_GET['location_id'] == $location[$i]['location_id']) {
                                                                                                echo 'selected';
                                                                                            } ?>>
                                    <?PHP if ($lan == 'TH') {
                                        echo $location[$i]['location_name_th'];
                                    } else {
                                        echo $location[$i]['location_name_en'];
                                    } ?>
                                </option>
                                <?PHP 
                            } ?>
                            </select>

                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-3 py-md-0 py-sm-3">
                    <div class="text-left">
                        <div class="">
                            <select class="form-control  custom-select" id="product_types_id" name="product_types_id">
                                <option value=""> <?PHP
                                    if($lng == "TH"){
                                        echo 'ประเภทอสังหาริมทรัพย์';
                                    }else{
                                        echo 'Property type';
                                    } 
                                    ?> </option>
                                <?PHP for ($i = 0; $i < count($type); $i++) {  ?>
                                <option value="<?PHP echo $type[$i]['product_types_id']; ?>" <?PHP if ($_GET['product_types_id'] == $type[$i]['product_types_id']) {
                                                                                                echo 'selected';
                                                                                            } ?>>
                                    <?PHP if ($lan == 'TH') {
                                        echo $type[$i]['product_types_name_th'];
                                    } else {
                                        echo $type[$i]['product_types_name_en'];
                                    } ?>
                                </option>
                                <?PHP 
                            } ?>

                            </select>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 py-md-0 py-sm-3 ">
                    <div class="text-left">
                        <div class="">
                            <div class="">
                                <input id="keyword" name="keyword" class="form-control" value="<?PHP echo $_GET['keyword']; ?>" placeholder="KEYWORD" />
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <button onclick="search();" type="submit" class="btn btn-search">
                    <?PHP
                        if($lng == "TH"){
                            echo 'ค้นหา';
                        }else{
                            echo 'SEARCH';
                        } 
                        ?>
                    </button>
                </div>
            </div>
        </div>

    </div>







</section>

<script type="text/javascript">
$(document).on('ready', function() {
    $(".slide").slick({
        arrows: false,
    });
});
</script>