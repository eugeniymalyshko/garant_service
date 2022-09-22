<div class="s-banner-frame"></div>
<div class="overlay-s"></div>
<div class="small-banner"></div>
<!-- Caption -->
<div class="page-title hid col-md-12">
    <h1 class="text-center title s-banner-title">Звітність</h1>
</div>
<div id="reports">
    <div class="container">
        <div class="container-inner">
        		<h3 class="text-center">2020 р.</h3>
            <?php if ($reports20): ?>
                <?php foreach ($reports20 as $report):?>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p><a target="_blank" href="<?=$report['link'];?>"><?=$report['title']; ?></a></p>
                        </div>
                    </div>
            <?php endforeach; ?>
            <?php endif; ?>
            <div class="container">
        		<h3 class="text-center">2019 р.</h3>
            <?php if ($reports19):?>
                <?php foreach ($reports19 as $report):?>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p><a target="_blank" href="<?=$report['link'];?>"><?=$report['title']; ?></a></p>
                        </div>
                    </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>