<?PHP
if(isset($_COOKIE['language'])){
    $lng = $_COOKIE['language'];
}




date_default_timezone_set("Asia/Bangkok");


require_once('models/PageModel.php'); 
$page_model = new PageModel;
$page = $page_model->getPageByID('3');

// print_r($page);


require_once('models/SlideModel.php'); 
$slide_model = new SlideModel;
$slide = $slide_model->getSlideByID('2');

// print_r($slide);




require_once('models/ServicesModel.php');    
$service_model = new ServicesModel;   
$services = $service_model->  getServicesBy(); 

// echo "<pre>";
// print_r($service) ;
// echo "</pre>";





?>

<html>
<head>


    <meta property="og:type"          content="website">
    <meta property="og:title"         content="<?PHP if($lng == "TH"){ echo $page['page_title_th']; }else{ echo $page['page_title_en'];} ?>">
    <meta property="og:description"   content="<?PHP if($lng == "TH"){ echo $page['page_description_th']; }else{ echo $page['page_description_en']; } ?>">
    




        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">   
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> REAL ESTATE SERVICE PAGE </title>

        <script src="template/js/jquery-2.2.0.min.js" type="text/javascript"></script>

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" type="text/css" media="screen" href="template/bootstrap/css/bootstrap.min.css" />
        <script src="template/bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

        <!-- slide -->
        <link rel="stylesheet" type="text/css" href="template/slick/slick.css">
        <script src="template/slick/slick.min.js" type="text/javascript" charset="utf-8"></script>

        <!-- Custom Fonts & CSS -->
        <link rel="stylesheet" type="text/css" media="screen" href="template/css/style.css" />
        
        <link href="template/frontend/css/menu.css" rel="stylesheet">
        <link href="template/frontend/css/footer.css" rel="stylesheet">
        <link href="template/frontend/css/home-style.css" rel="stylesheet">
        <link href="template/frontend/css/service.css" rel="stylesheet">
    </head>
    <body>
    <?PHP require_once('view/menu.inc.php');?>
    <?PHP require_once('view/slide.inc.php');?>
  
    <?php $path = "view/service/";

    if( !isset($_GET['action']) ) {
        require_once('view/service/view.inc.php');
    } else if( $_GET['action'] == "detail") {
        

        require_once('view/service/servicedetail.inc.php');
    }
    ?>
    <?PHP require_once('view/footer.inc.php'); ?>
    </body>
</html>