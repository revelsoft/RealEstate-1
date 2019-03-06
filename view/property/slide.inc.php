<?php require_once('view/menu.inc.php')?>
<section class="col-lg-12 no-padding" style="position: relative;">


    <img class="size-img-slide" src="img_upload/home/panorama.jpg">
    <div class="overlay-slide">
    </div>
    <div class="overlay-slide-2">
    </div>

    <section class="slide no-padding slide-home ">



        <div class="col-12">
            <div class="container">

                <div class="row">
                    <div class="col-7" style="margin-top: 4vw;">

                        <div class="slide-item">
                            <div class="slide-detail-home">
                                <div class="slide-header-home">
                                <h1>PROPERTY</h1>
                                </div>
                                <div class="slide-text-detail">
                                    Penthouse apartment for sale located on Iancu Nicolae Road. Wit New Darwin suburb
                                    Muirhead – which came in at number two with 49.7% price growth – and rapidly growing
                                    new Melbourne area, Clyde North, are examples of suburbs with high development,
                                    expansion potential and subsequent shifts in supply and demand.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-12">
            <div class="container">

                <div class="row">
                    <div class="col-7" style="margin-top: 4vw;">

                        <div class="slide-item">
                            <div class="slide-detail-home">
                                <div class="slide-header-home">
                                    <h1>PROPERTY</h1>
                                </div>
                                <div class="slide-text-detail">
                                    Penthouse apartment for sale located on Iancu Nicolae Road. Wit New Darwin suburb
                                    Muirhead – which came in at number two with 49.7% price growth – and rapidly growing
                                    new Melbourne area, Clyde North, are examples of suburbs with high development,
                                    expansion potential and subsequent shifts in supply and demand.
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

    <div class=""
        style="width: 100%; bottom: -8%; position: absolute; z-index: 9999; text-align: center; padding-left: 20%; padding-right: 20%;">
        <div class="shadow-lg" style="background-color: white;">


            <div class="row">
                <div class="col-sm-6">
                    <div class="text-left">
                        <div class="form-group">
                            <label>Room Type <font color="#F00"><b>*</b></font></label> <br />
                            <select class="form-control  custom-select" id="room_type_id" name="room_type_id">
                                <option value="<?PHP echo $room_type[$i]['room_type_id'];?>"> 5</option>
                                <option value="<?PHP echo $room_type[$i]['room_type_id'];?>"> 5</option>
                                <option value="<?PHP echo $room_type[$i]['room_type_id'];?>"> 5</option>
                                <option value="<?PHP echo $room_type[$i]['room_type_id'];?>"> 5</option>
                                <option value="<?PHP echo $room_type[$i]['room_type_id'];?>"> 5</option>
                                <option value="<?PHP echo $room_type[$i]['room_type_id'];?>"> 5</option>
                                <option value="<?PHP echo $room_type[$i]['room_type_id'];?>"> 5</option>
                                <option value="<?PHP echo $room_type[$i]['room_type_id'];?>"> 5</option>
                                <option value="<?PHP echo $room_type[$i]['room_type_id'];?>"> 5</option>
                                <option value="<?PHP echo $room_type[$i]['room_type_id'];?>"> 5</option>
                                <option value="<?PHP echo $room_type[$i]['room_type_id'];?>"> 5</option>
                            </select>
                            <p class="help-block">Example : Deluxe Junior Suite </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="text-left">
                        <div class="form-group">
                            <label>Room Type <font color="#F00"><b>*</b></font></label> <br />
                            <select class="form-control  custom-select" id="room_type_id" name="room_type_id">
                                <option value="<?PHP echo $room_type[$i]['room_type_id'];?>"> 5</option>
                                <option value="<?PHP echo $room_type[$i]['room_type_id'];?>"> 5</option>
                                <option value="<?PHP echo $room_type[$i]['room_type_id'];?>"> 5</option>
                                <option value="<?PHP echo $room_type[$i]['room_type_id'];?>"> 5</option>
                                <option value="<?PHP echo $room_type[$i]['room_type_id'];?>"> 5</option>
                                <option value="<?PHP echo $room_type[$i]['room_type_id'];?>"> 5</option>
                                <option value="<?PHP echo $room_type[$i]['room_type_id'];?>"> 5</option>
                                <option value="<?PHP echo $room_type[$i]['room_type_id'];?>"> 5</option>
                                <option value="<?PHP echo $room_type[$i]['room_type_id'];?>"> 5</option>
                                <option value="<?PHP echo $room_type[$i]['room_type_id'];?>"> 5</option>
                                <option value="<?PHP echo $room_type[$i]['room_type_id'];?>"> 5</option>
                            </select>
                            <p class="help-block">Example : Deluxe Junior Suite </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- <div class="container">


      
    </div> -->

<script type="text/javascript">
$(document).on('ready', function() {
    $(".slide").slick({
        arrows: false,
    });
});
</script>