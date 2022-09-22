<div class="banner-frame"></div>
<div class="overlay"></div>
<div class="banner"></div>
<div class="container">
    <!-- Caption -->
    <div class="caption hid col-md-8 col-lg-5">
        <h4>Довірте нам процес<br> з організації вашого свята </h4>
        <p class="d-none d-md-block d-lg-block" >Висококваліфікована команда професіоналів своєї справи, що постійно вдосконалюється та чітко слідкує за новими тенденціями в кулінарному світі на високому рівні втілить у життя захід будь якої складності.</p>
        <button type="button" class="btn btn-outline-success active btn-lg b-pressed" data-toggle="modal" data-target="#orderEvent">Замовити банкет</button>
    </div>
</div>
<!-- Service -->
<?php if($services):?>
<div id="service">
    <div class="container main-service">
            <h3 class="text-center title">Наші Послуги</h3>
        <div class="row">
            <!-- Services Block -->
            <?php foreach($services as $service): ;?>
                <div class="col-lg-4 col-md-6">
                    <div class="shadow_s">
                        <div class="service-box">
                                <img class="service-img" src="images/service/<?=$service->img;?>" alt="service-img">
                            <div class="block-overlay">
                                <p><?=$service->description;?></p>
                                <a href="service_single/<?=$service->alias;?>" id="details" class="btn btn-outline-success  btn-sm b-pressed" role="button" aria-pressed="true">Докладніше</a>
                            </div>
                        </div>
                        <span class="service-title"><?=$service->title;?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div> <!-- ./service -->
<?php endif; ?>
<!-- Advantages -->
<div id="advantages">
    <div class="container">
            <h3 class="title text-center">Наші переваги</h3>
        <div class="row">
            <!-- Advantage-1-->
            <div class="advantage-box col-md-6 col1">
                <div class="advantage-1">
                    <h5 class="title">Досвід</h5>
                    <p>
                        Працюємо у сфері обслуговування з 2000&nbspр.&nbsp та розуміємо, що потрібно нашим клієнтам. Наші клієнти вважають Гарант-Сервіс – одним з кращих банкетних закладів столиці, а ми робимо усе, щоб відповідати цій високій оцінці.
                    </p>
                </div>
            </div>
            <div class="advantage-box col-md-6 col2">
                <div class="advantage-img prof shadow_s"></div>
            </div>
            <!-- Advantage-2 -->
            <div class="advantage-box col-md-6 col3">
                <div class="advantage-img expir shadow_s"></div>
            </div>
            <div class="advantage-box col-md-6 col4">
                <div class="advantage-2">
                    <h5 class="title">професіоналізм</h5>
                    <p>
                        Наші клієнти отримують високоякісне обслуговування, вишукану організацію заходів і, звичайно, розкішні страви від першокласних кухарів.
                    </p>
                </div>
            </div>
            <!-- Advantage-3 -->
            <div class="advantage-box col-md-6 col5">
                <div class="advantage-3">
                    <h5 class="title">любов до своєї справи</h5>
                    <p>
                        Наша компанія візьме на себе підготовку св'ята, бо ми любимо організовувати і знаємо, як
                        забезпечити ненав'язливий сервіс.
                    </p>
                </div>
            </div>
            <div class="advantage-box col-md-6 col6">
                <div class="advantage-img love shadow_s"></div>
            </div>
            <!-- Advantage-4 -->
            <div class="advantage-box col-md-6 col7">
                <div class="advantage-img any-dif shadow_s"></div>
            </div>
            <div class="advantage-box col-md-6 col8">
                <div class="advantage-4">
                    <h5 class="title">страви будь якої складності</h5>
                    <p>
                        Солодкі та ситні сети, дивовижні десерти, апетитна випічка, шикарні банкетні страви, холодні та гарячі закуски. Легко знайти те, що підійде для вашого заходу: фуршетні набори для кава-брейків, гарячі страви для банкетів, десерти для солодкого столу на весілля або день нарождення.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Locations -->
<?php if ($places): ?>
<div id="locations">
     <div class="container ">
             <h3 class="text-center title">Локації для заходів</h3>
         <div class="row">
             <?php foreach ($places as $place): ?>
             <div class="col-md-6 col-lg-4">
                 <a href="place_single/<?=$place->alias;?>">
                     <div class="locations-box shadow_s">
                         <img class="location-img" src="images/locations/<?=$place->img;?>" alt="service-img">
                         <span><?=$place->title;?></span>
                     </div>
                 </a>
             </div>
            <?php endforeach; ?>
         </div>
     </div>
 </div> <!-- ./locations -->
<?php endif; ?>
<!--<?php if ($testimonials):?>
<div id="testimonials-widget">
    <div class="container">
        <h4 class="title text-center">Відгуки</h4>
        <div class="block-one">
            <div id="customNav" class="owl-my-nav"></div>
            <div class="owl-carousel block-items">
                <?php foreach ($testimonials as $testimonial):?>
                    <div class="item">
                        <div class="inner-testimonial">
                            <h3 class="name"><?=$testimonial->name;?></h3>
                            <p class="text-testimonial">
                                <?=$testimonial->text;?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>  ./block-one
</div>
<?php endif; ?>-->