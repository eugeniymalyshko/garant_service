<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Зображення Галереї</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>">Головна</a></li>
                    <li class="breadcrumb-item active">Зображення Галереї</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div><!-- /.content-header -->
<!-- Main content -->
<section class="content">
    <div class="container">
        <div class="row">
            <?php if(!empty($gallery)): ?>
                <?php foreach ($gallery as $item): ?>
                    <div class="col-md-2 photo-box">
                        <img src="/images/gallery/1/<?=$item['img'];?>" alt="" data-id="<?=$item['id'];?>" data-src="<?=$item['img'];?>" class="del-item">
                        <input type="hidden" name="id" value="<?=$item['id'];?>">
                    </div>
                <?php endforeach;?>
            <?php endif;?>
        </div>
        <div class="text-center">
            <p><?=count($gallery);?> зображень з <?=$count;?></p>
            <?php if ($pagination->countPages > 1): ?>
                <?=$pagination;?>
            <?php endif; ?>
        </div>
        <p class="text-center"><small>Для видалення зображення потрібно клікнути по ньому, та підтвердити видалення</small></p>

    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->