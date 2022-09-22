<div class="s-banner-frame"></div>
<div class="overlay-s"></div>
<div class="small-banner"></div>
<!-- Caption -->
<div class="page-title hid col-md-12">
    <h1 class="text-center title s-banner-title"><?=$place_single->title;?></h1>
</div>
<!-- service-detailed -->
<div id="service-detailed">
    <div class="container">
        <div class="row">
        	<div>
        		<a href="<?=$place_single->link;?>"></a>
        	</div>
            <!-- Detailed Services -->
            <div class="service-d-box col-md-10 ml-auto mr-auto">
               <div>
                <h2 class="text-center title"><?=$place_single->second_title;?></h2>
                <div class="services-details">
                    <div class="main-description">
                        <?=$place_single->description;?>
                    </div>
                    <h4 class="text-center question"><?=$place_single->title_2;?></h4>
                    <h4 class="text-center"><?=$place_single->ul_1;?></h4>
                    <ul>
                        <?=$place_single->li;?>
                    </ul>
                    <p class="text-center">
                        <?=$place_single->additional;?>
                    </p>

                    <button type="button" class="btn btn-outline-success btn-lg b-pressed" data-toggle="modal" data-target="#orderEvent"><?=$place_single->button_title;?></button>
                </div>
            </div>
        </div>
    </div>
</div> <!-- ./service-detailed -->
