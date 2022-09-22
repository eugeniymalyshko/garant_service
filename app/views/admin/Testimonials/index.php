<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Перелік відгуків</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>">Головна</a></li>
                    <li class="breadcrumb-item active">Перелік відгуків</li>
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
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>І'мя</th>
                                    <th>Назва компанії</th>
                                    <th>Email</th>
                                    <th>Дата</th>
                                    <th>Статус</th>
                                    <th>Дії</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($testimonials as $testimonial): ?>
                                    <?php $class = $testimonial['status'] ? 'bg-success' : ''; ?>
                                    <tr class="<?=$class;?>">
                                    	<td><?=$testimonial['id'];?></td>
                                    	<td><?=$testimonial['name'];?></td>
                                    	<td><?=$testimonial['company'];?></td>
                                    	<td><?=$testimonial['email'];?></td>
                                    	<td><?=$testimonial['date'];?></td>
                                    	<td><?=$testimonial['status'] ? 'Опублікований' : 'Потребує розгляду';?></td>
                                    	<td><a href="<?=ADMIN;?>/testimonials/view?id=<?=$testimonial['id'];?>"><i class="fa fa-fw fa-eye"></i></a></td>
                                    </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center">
                            <p><?=count($testimonials);?> відгуків з <?=$count;?></p>
                            <?php if ($pagination->countPages > 1): ?>
                                <?=$pagination;?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->