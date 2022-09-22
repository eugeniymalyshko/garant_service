<div class="s-banner-frame"></div>
<div class="overlay-s"></div>
<div class="small-banner"></div>
<!-- Caption -->
<div class="page-title hid col-md-12">
    <h1 class="text-center title s-banner-title">Меню</h1>
</div>
<div id="menu">
    <div class="container">
            <h3 class="title text-center">Кава брейк</h3>
        <div class="row">
            <?php if ($coffee_break_1): ?>
                <table class="table  ml-auto mr-auto">
                    <caption><b>Варіант 1</b></caption>
                    <tbody>
                    <?php foreach ( array_chunk($coffee_break_1, 1) as $v):?>
                        <tr>
                            <?php foreach ($v as $coffee_break_1): ?>
                                <td><?=$coffee_break_1->name;?></td>
                                <td class="text-center"><?=$coffee_break_1->mass;?></td>
                                <td class="text-center"><?=$coffee_break_1->quantity;?></td>
                            <?php endforeach;?>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2" style="text-align:right">На одну персону:</td>
                            <td><b>105,30</b></td>
                        </tr>
                    </tfoot>
                </table>
            <?php endif;?>
            <?php if ($coffee_break_2): ?>
                <table class="table ml-auto mr-auto">
                    <caption><b>Варіант 2</b></caption>
                    <tbody>
                        <?php foreach ( array_chunk($coffee_break_2, 1) as $v):?>
                            <tr>
                                <?php foreach ($v as $coffee_break_2): ?>
                                    <td><?=$coffee_break_2->name;?></td>
                                    <td class="text-center"><?=$coffee_break_2->mass;?></td>
                                    <td class="text-center"><?=$coffee_break_2->quantity;?></td>
                                <?php endforeach;?>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2" style="text-align:right">На одну персону:</td>
                            <td><b>253,30</b></td>
                        </tr>
                    </tfoot>
                </table>
            <?php endif;?>
        </div>
            <h3 class="title text-center">Фуршет</h3>
        <div class="row">
            <?php if ($stand_up_1): ?>
                <table class="table ml-auto mr-auto">
                    <caption><b>Варіант 1</b></caption>
                    <tbody>
                        <?php foreach ( array_chunk($stand_up_1, 1) as $v):?>
                            <tr>
                                <?php foreach ($v as $stand_up_1): ?>
                                    <td><?=$stand_up_1->name;?></td>
                                    <td class="text-center"><?=$stand_up_1->mass;?></td>
                                    <td class="text-center"><?=$stand_up_1->quantity;?></td>
                                <?php endforeach;?>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2" style="text-align:right">На одну персону:</td>
                            <td><b>501,90</b></td>
                        </tr>
                    </tfoot>
                </table>
            <?php endif;?>
            <?php if ($stand_up_2): ?>
                <table class="table ml-auto mr-auto">
                    <caption><b>Варіант 2</b></caption>
                    <tbody>
                        <?php foreach ( array_chunk($stand_up_2, 1) as $v):?>
                            <tr>
                                <?php foreach ($v as $stand_up_2): ?>
                                    <td><?=$stand_up_2->name;?></td>
                                    <td class="text-center"><?=$stand_up_2->mass;?></td>
                                    <td class="text-center"><?=$stand_up_2->quantity;?></td>
                                <?php endforeach;?>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2" style="text-align:right">На одну персону:</td>
                            <td><b>1008,00</b></td>
                        </tr>
                    </tfoot>
                </table>
            <?php endif;?>
        </div>
            <h3 class="title text-center">Банкет</h3>
        <div class="row">
            <?php if ($banquet_1): ?>
                <table class="table ml-auto mr-auto">
                    <caption><b>Варіант 1</b></caption>
                    <tbody>
                        <?php foreach ( array_chunk($banquet_1, 1) as $v):?>
                            <tr>
                                <?php foreach ($v as $banquet_1): ?>
                                    <td><?=$banquet_1->name;?></td>
                                    <td class="text-center"><?=$banquet_1->mass;?></td>
                                    <td class="text-center"><?=$banquet_1->quantity;?></td>
                                <?php endforeach;?>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2" style="text-align:right">На одну персону:</td>
                            <td><b>750,06</b></td>
                        </tr>
                    </tfoot>
                </table>
            <?php endif;?>
            <?php if ($banquet_2): ?>
                <table class="table ml-auto mr-auto">
                    <caption><b>Варіант 2</b></caption>
                    <tbody>
                        <?php foreach ( array_chunk($banquet_2, 1) as $v):?>
                            <tr>
                                <?php foreach ($v as $banquet_2): ?>
                                    <td><?=$banquet_2->name;?></td>
                                    <td class="text-center"><?=$banquet_2->mass;?></td>
                                    <td class="text-center"><?=$banquet_2->quantity;?></td>
                                <?php endforeach;?>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2" style="text-align:right">На одну персону:</td>
                            <td><b>1252,26</b></td>
                        </tr>
                    </tfoot>
                </table>
            <?php endif;?>
            <button type="button" class="btn btn-outline-success active btn-lg b-pressed ml-auto mr-auto" data-toggle="modal" data-target="#orderEvent">Замовити банкет</button>
        </div>
    </div>
</div>

