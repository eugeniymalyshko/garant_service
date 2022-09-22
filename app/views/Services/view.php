<div class="s-banner-frame"></div>
<div class="overlay-s"></div>
<div class="small-banner"></div>
<!-- service-detailed -->
<div id="service-detailed">
    <div class="container">
        <div class="row">
            <!-- Caption -->
            <div class="page-title hid col-md-12">
                <h2 class="text-center title s-banner-title"><?=$service_single->title;?></h2>
            </div>
            <!-- Detailed Services -->
            <div class="service-d-box col-md-10 ml-auto mr-auto">
                <div class="services-details">
                        <img src="images/service/<?=$service_single->img_1;?>" class="img-service-1 d-none d-md-block shadow_s" alt="img-1">
                    <div class="main-description">
                        <?=$service_single->description;?>
                    </div>
                        <h3 class="text-center question"><?=$service_single->title_2;?></h3>
                    <div class="lists">
                            <?=$service_single->ul_1;?>
                    </div>
                    <h4 class="text-center"><?=$service_single->title_3;?></h4>
                                <div class="benefits ">
                                    <img src="images/service/<?=$service_single->img_2;?>" class="img-service-2 d-none d-md-block shadow_s" alt="img-2">
                                    <?=$service_single->table_title_2;?>
                                 </div>
                    <div class="our-advantage">
                        <?=$service_single->title_4;?>
                        <p class="text-center">
                            <?=$service_single->additional;?>
                        </p>
                    </div>
                    <button type="button" class="btn btn-outline-success btn-lg b-pressed" data-toggle="modal" data-target="#orderEvent"><?=$service_single->button_title;?></button>
                </div>
            </div>
        </div>
    </div>
</div> <!-- ./service-detailed -->