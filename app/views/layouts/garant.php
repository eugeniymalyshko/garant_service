<!doctype html>
<html lang="uk">
<head>
    <base href="/">
    <meta charset="utf-8">
    <?=$this->getMeta();?>
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-167621056-1"></script>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"  integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/normalize.css" rel="stylesheet" type="text/css">
    <link href="css/lightbox.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&family=Open+Sans&display=swap" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css" >
    <link href="css/owl.theme.default.min.css" rel="stylesheet" type="text/css">
</head>
<!-- Request -->
<div class="container">
    <!-- Modal -->
    <div class="modal fade" id="orderEvent" tabindex="-1" role="dialog" aria-labelledby="orderEventLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="orderEventLabel">Форма замовлення</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form id="request" method="post" class="needs-validation">
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="name">Ім'я <span>*</span></label>
                                <input type="text" class="form-control" id="name" name="name" required oninvalid="this.setCustomValidity('Поле Ім\'я є обов\'язковим для заповнення')" oninput="setCustomValidity('')">
                            </div>
                            <div class="col-md-8 mb-3">
                                <label for="phone">Контактний номер телефону <span>*</span></label>
                                <input type="tel" autocorrect="off" autocapitalize="off" pattern="^\+\d{2}\d{3}\d{3}\d{2}\d{2}$" class="form-control" id="phone" name="phone" value="+380" required oninvalid="this.setCustomValidity('Поле контактний номер є обов\'язковим для заповнення')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="comment" class="col-form-label">Повідомлення:</label>
                                <textarea class="form-control" name="comment" id="comment" rows="4" required oninvalid="this.setCustomValidity('Поле повідомлення є обов\'язковим для заповнення')" oninput="setCustomValidity('')" style="resize: none;"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check personal-data">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required oninvalid="this.setCustomValidity('Ви маєте надати згоду на обробку персональних даних')" oninput="setCustomValidity('')">
                                <label for="form-check-label" for="invalidCheck"><span>&nbsp;&nbsp;&nbsp;Відповідно до Закону України <a href="https://zakon.rada.gov.ua/laws/show/2297-17">"Про захист персональниих даних"</a></sp> Даю згоду на обробку, використання, поширення та доступ до моїх персональних даних та відомостей які надаю про себе для опрацювання замовлення.</span></label>
                                <div class="invalid-feedback">
                                    Ви маєте дати згоду на обробку персональних даних.
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" id="submit" class="btn btn-outline-success">Надіслати</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрити</button>
                </div>
            </div>
        </div>
    </div> <!-- ./Event Request -->
</div>
<header id="sp-header">
    <div class="container">
        <div class="container-inner">
            <div class="row">
                <!-- Contact information -->
                <div id="sp-top-right" class="col-lg-12">
                    <div class="sp-column text-center text-lg-right">
                        <ul class="sp-contact-info">
                            <li class="sp-contact-mobile">
                                <span class="fa fa-mobile" aria-hidden="true"></span>
                                <a href="tel:+380968825355">(096) 882-53-55</a>
                            </li>
                            <li class="sp-contact-phone">
                                <span class="fas fa-phone" aria-hidden="true"></span>
                                <a href="tel:+380442557684">(044) 255-76-84</a>
                            </li>
                            <li class="sp-contact-email">
                                    <span class="fa fa-envelope" aria-hidden="true"></span>
                                <a href="mailto:garantservice.food@gmail.com">garantservice.food@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                </div> <!-- ./Contact information -->
                <nav class="navbar navbar-expand-lg">
                    <!-- logo -->
                    <a href="<?=PATH;?>">
                        <div class="navbar-brand mr-auto"></div>
                    </a>
                    <!-- Slogan -->
                    <div class="slogan">
                        <h6 class="">20 років<br> бездоганного<br> сервісу</h6>
                    </div>
                    <!-- Navbar Button -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fas fa-bars"></span>
                    </button>
                    <!-- Links Header -->
                    <div id="navbarSupportedContent" class="collapse navbar-collapse">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?=PATH;?>">Головна</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about">Про компанію</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="gallery">Галерея</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Меню</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" target="_blank" href="/banket-menu.pdf">Банкет</a>
                                        <a class="dropdown-item" target="_blank" href="/buffet-menu.pdf">Фуршет</a>
                                    </div>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="reports">Звітність</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="contact">Контакти</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="testimonials">Відгуки</a>
                                </li>
                            </ul> <!-- ./navbar-nav -->
                    </div> <!-- ./navbarSupportedContent -->
                </nav>
            </div>
        </div>
    </div> <!-- ./container -->
</header>
<div id="wrapper">
    <div class="content">
        <?=$content;?>
    </div>
</div>
<footer class="footer">
    <!-- Copyright -->
        <div id="footer-bottom">
            <div class="container">
                <div class="container-inner">
                    <div id="rowall" class="row">
                        <div class="sp-1 col-md-7 col-sm-8">
                            <div class="column-left text-center text-sm-left text-lg-left">
                                <span class="copyright">&copy; Гарант-Сервіс. Всі права захищено <?='2000 — ' .date('Y');?> </span>
                            </div>
                        </div>
                        <!-- Social buttons -->
                        <div class="sp-2 col-md-5 col-sm-4">
                            <div class="column-right text-center text-sm-right text-lg-right">
                                <ul class="sp-social-icons">
                                    <li class="social-icon-facebook">
                                        <a target="_blank" href="https://www.facebook.com/Garantservice.catering">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="social-icon-instagram">
                                        <a target="_blank" href="https://www.instagram.com/garant_service.food">
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="social-icon-telegram">
                                        <a target="_blank" href="https://telegram.me/Garantservice_food">
                                            <i class="fab fa-telegram-plane"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div> <!-- ./Social buttons -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Go to Top -->
<div class="scrollup"><i class="fa fa-chevron-up"></i></div>
<!-- Scripts -->
<script>window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-167621056-1');</script>
<script src="https://kit.fontawesome.com/299232f238.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="js/lightbox.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</body>
</html>