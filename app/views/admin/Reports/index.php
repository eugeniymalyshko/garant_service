<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Перелік звітів</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>">Головна</a></li>
                    <li class="breadcrumb-item active">Перелік звітів</li>
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
                                    <th>Назва</th>
                                    <th>Посилання</th>
                                    <th>Рік</th>
                                    <th>Дії</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($reports as $report): ?>
                                        <td><?=$report['id'];?></td>
                                        <td><?=$report['title'];?></td>
                                        <td><?=$report['link'];?></td>
                                        <td><?=$report['year'];?></td>
                                        <td><a class="delete" href="<?=ADMIN;?>/reports/delete?id=<?=$report['id'];?>"><i class="far fa-trash-alt"></i></a></td>

                                    </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center">
                            <p><?=count($reports);?> звіт(ів) з <?=$count;?></p>
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