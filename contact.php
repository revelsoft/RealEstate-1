<?PHP
if(isset($_COOKIE['language'])){
    $lng = $_COOKIE['language'];
}


date_default_timezone_set("Asia/Bangkok");



require_once('models/PageModel.php'); 
$page_model = new PageModel;
$page = $page_model->getPageByID('6');




require_once('models/SlideModel.php'); 
$slide_model = new SlideModel;
$slide = $slide_model->getSlideByID('5');

// print_r($slide);




require_once('models/ServicesModel.php');    
$service_model = new ServicesModel;   
$services = $service_model->  getServicesBy(); 

// echo "<pre>";
// print_r($service) ;
// echo "</pre>";





require_once('models/ContactUsModel.php');    
$contact_us_model = new ContactUsModel;   
$contact_us = $contact_us_model->  getContact_us(); 

// echo "<pre>";
// print_r($service) ;
// echo "</pre>";


require_once('models/ContactModel.php');
$contact_model = new ContactModel;
$contact_title = $contact_model -> getContactTitle() ;
$country = $contact_model -> getCountry() ;
$contact_type = $contact_model -> getContactType() ;
$countryTHA == 'THA';




if (isset($_GET['action']) == "add"):

    if(isset($_POST['contact_title_id'])){
        $check = true;
        $data = [];
        $data['contact_id'] = trim($_POST['contact_id']);
        $data['contact_title_id'] = trim($_POST['contact_title_id']);
        $data['contact_firstname'] = trim($_POST['contact_firstname']);
        $data['contact_lastname'] = trim($_POST['contact_lastname']);
        $data['contact_email'] = trim($_POST['contact_email']);
        $data['contact_tel'] = trim($_POST['contact_tel']);
        $data['contact_country'] = trim($_POST['contact_country']);
        $data['contact_text'] = trim($_POST['contact_text']);
        $data['contact_type_id'] = trim($_POST['contact_type_id']);

        if($check == false){
            ?>  <script>  window.history.back(); </script>  <?php
        }else{
            $user = $contact_model->addContact($data);

            if($user){
                ?> 
                <script>
                    // window.location="contact_us.php?"
                </script> 
                <?php
            }else{
                ?>  
                <script> 
                    // window.history.back(); 
                </script> <?php
            }
        }
    }else{
        ?> <script> 
            // window.history.back(); 
        </script> <?php
    }
endif;







?>

<html>

<head>


    <meta property="og:type" content="website">
    <meta property="og:title" content="<?PHP if($lng == " TH"){ echo $page['page_title_th']; }else{ echo
        $page['page_title_en'];} ?>">
    <meta property="og:description" content="<?PHP if($lng == " TH"){ echo $page['page_description_th']; }else{ echo
        $page['page_description_en']; } ?>">





    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> REAL ESTATE CONTACT PAGE </title>

    <script src="template/js/jquery-2.2.0.min.js" type="text/javascript"></script>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="template/bootstrap/css/bootstrap.min.css" />
    <script src="template/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- slide -->
    <link rel="stylesheet" type="text/css" href="template/slick/slick.css">
    <script src="template/slick/slick.min.js" type="text/javascript" charset="utf-8"></script>

    <!-- Custom Fonts & CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="template/css/style.css" />

    <link href="template/frontend/css/menu.css" rel="stylesheet">
    <link href="template/frontend/css/home-style.css" rel="stylesheet">
    <link href="template/frontend/css/footer.css" rel="stylesheet">
    <link href="template/frontend/css/contact.css" rel="stylesheet">
    <link href="template/frontend/css/service.css" rel="stylesheet">
</head>

<body>
    <?PHP require_once('view/menu.inc.php');?>
    <?PHP require_once('view/slide.inc.php');?>
    
    <?PHP require_once('view/contact/view.inc.php');?>


    <?PHP require_once('view/footer.inc.php'); ?>
</body>

</html>