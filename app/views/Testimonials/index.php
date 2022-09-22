<div class="s-banner-frame"></div>
<div class="overlay-s"></div>
<div class="small-banner"></div>
<!-- Caption -->
<div class="page-title hid col-md-12">
    <h1 class="text-center title s-banner-title">Відгуки</h1>
</div>
<div class="container">
    <!-- Testimonial -->
    <div class="modal fade" id="leaveFeedback" tabindex="-1" role="dialog" aria-labelledby="leaveFeedback">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="leaveFeedback">Новий відгук</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <?php if(isset($_SESSION['error'])) : ?>
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
                        </div>
                    <?php endif;?>
                    <form action="/testimonials/add" id="feedback" method="post" class="needs-validation" data-toggle="validator">
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="name">Ім'я <span>*</span></label>
                                <input type="text" class="form-control" id="name" name="name" required oninvalid="this.setCustomValidity('Поле Ім\'я є обов\'язковим для заповнення')" oninput="setCustomValidity('')">
                            </div>
                            <div class="col-md-8 mb-3">
                                <label for="company">Назва компанії</label>
                                <input type="text" class="form-control" id="company" name="company">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="email">Email <span>*</span></label>
                                <input type="email" class="form-control" id="email" name="email" required oninvalid="this.setCustomValidity('Поле Email є обов\'язковим для заповнення')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="comment" class="col-form-label">Відгук: <span>*</span></label>
                                <textarea type="text" class="form-control" id="comment" name="comment" rows="2" required oninvalid="this.setCustomValidity('Поле відгук є обов\'язковим для заповнення')" oninput="setCustomValidity('')"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check personal-data">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required oninvalid="this.setCustomValidity('Ви маєте надати згоду на обробку персональних даних')" oninput="setCustomValidity('')">
                                <label for="form-check-label invalidCheck"><span>&nbsp;&nbsp;&nbsp;Відповідно до Закону України <a href="https://zakon.rada.gov.ua/laws/show/2297-17">"Про захист персональниих даних"</a></sp> Даю згоду на обробку, використання, поширення та доступ до моїх персональних даних та відомостей які надаю про себе для опрацювання замовлення.</span></label>
                                <div class="invalid-feedback">
                                    Ви маєте дати згоду на обробку персональних даних.
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" id="submit" class="btn btn-outline-success">Надіслати</button>
                        </div>
                    </form>
                    <?php if (isset($_SESSION['form_data'])) unset($_SESSION['form_data']);?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-success" data-dismiss="modal">Закрити</button>
                </div>
            </div>
        </div>
    </div> <!-- ./Event Request -->
</div>
<div class="container">
    <div class="row">
        <button id="testimonial-button" type="button" class="btn btn-outline-success btn-sm b-pressed" data-toggle="modal" data-target="#leaveFeedback">Залишити відгук</button>
    </div>
    <?php if ($testimonials):?>
        <div id="testimonials">
            <div class="container">
                <?php foreach ($testimonials as $testimonial):?>
                    <div class="item">
                        <div class="inner-testimonial">
                            <h2 class="name"><?=$testimonial->name;?></h2>
                            <h5 class="company"><?=$testimonial->company;?></h5>
                            <p class="testimonial"><?=$testimonial->comment;?></p>
                            <h6 class="date"><?=$testimonial->date;?></h6>
                        </div>
                    </div>
                <?php endforeach;?>
            </div> <!-- ./testimonials -->
        </div>
    <?php endif;?>
    <div class="text-center">
        <?php if ($pagination->countPages > 1): ?>
            <?=$pagination;?>
        <?php endif; ?>
    </div>
</div>