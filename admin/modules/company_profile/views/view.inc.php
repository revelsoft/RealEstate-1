    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-6">
                    <h1> Profile </h1>
                    <h2> </h2>
                </div>
                <div class="col-6">
                    <a href="?content=company_profile&action=edit&id=0" class="btn btn-primary float-right">แก้ไข About us</a>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <img src="<?PHP echo $img_path . $company_profile[0]['company_profile_img'];  ?>" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h1 class="card-title">
                                        <?PHP echo $company_profile[0]['company_profile_title_en'];  ?>
                                    </h1>
                                    <p class="card-text">
                                        <?PHP echo  $company_profile[0]['company_profile_sub_title_en'];  ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <img src="<?PHP echo $img_path . $company_profile[0]['company_profile_img'];  ?>" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h1 class="card-title">
                                        <?PHP echo $company_profile[0]['company_profile_title_th'];  ?>
                                    </h1>
                                    <p class="card-text">
                                        <?PHP echo  $company_profile[0]['company_profile_sub_title_th'];  ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>