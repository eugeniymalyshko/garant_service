<?php

//\R::fancyDebug( TRUE );
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Відгук №<?=$testimonial['id'];?>
                <?php if(!$testimonial['status']): ?>
                    <a  href="<?=ADMIN;?>/testimonials/change?id=<?=$testimonial['id'];?>&status=1" class="btn btn-success btn-xs">Опублікувати</a>
                <?php else:?>
	                <a  href="<?=ADMIN;?>/testimonials/change?id=<?=$testimonial['id'];?>&status=0" class="btn btn-default btn-xs">Прибрати</a>
                <?php endif; ?>
                    <a href="<?=ADMIN;?>/testimonials/delete?id=<?=$testimonial['id'];?>" class="btn btn-danger btn-xs delete ">Видалити</a>
                </h1>
                <?php
                ?>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>">Головна</a></li>
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>/testimonials">Перелік відгуків</a></li>
                    <li class="breadcrumb-item active">Відгук №<?=$testimonial['id'];?></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div><!-- /.content-header -->
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <tbody>
                                    <tr>
                                        <td>Номер відгуку</td>
                                        <td><?=$testimonial['id'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Дата відгуку</td>
                                        <td><?=$testimonial['date'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Iм'я</td>
                                        <td><?=$testimonial['name'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Статус</td>
                                        <td><?=$testimonial['status'] ? 'Опублікований' : ' Потребує розгляду';?></td>
                                    </tr>
                                    <tr>
                                        <td>Відгук</td>
                                        <td><?=$testimonial['comment'];?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->