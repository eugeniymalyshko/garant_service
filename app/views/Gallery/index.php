<div class="s-banner-frame"></div>
<div class="overlay-s"></div>
<div class="small-banner"></div>
<!-- Caption -->
<div class="page-title hid col-md-12">
    <h1 class="text-center title s-banner-title">Галерея</h1>
</div>
<div id="gallery">
    <div class="container">
        <div class="container-inner">
            <div class="row">
                <?php if ($gallery): ?>
                    <?php foreach ($gallery as $item): ?>
                        <div class="col-md-2 photo-box">
                            <a class="gallery-image" href="/images/gallery/1/<?=$item['img'];?>" data-lightbox="roadtrip">
                                <img class="photo-sm" src="/images/gallery/1/<?=$item['img'];?>" alt="">
                            </a>
                        </div>
                    <?php endforeach;?>
                <?php endif;?>
                <div class="container">
                    <div class="text-center">
                        <?php if ($pagination->countPages > 1): ?>
                            <?=$pagination;?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>