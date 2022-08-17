<?php
$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
$BASE_HREF = '//' . $_SERVER['HTTP_HOST'] . (!empty($_SERVER['DOCUMENT_URI']) ? str_replace( substr(str_replace('index.php', '', $_SERVER['DOCUMENT_URI']), 1), '', $_SERVER['REQUEST_URI'] ) : '');
$URL = '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$version = isset($_GET['version']) ? urldecode( strtolower($_GET['version']) ) : '';
$partner = isset($_GET['partner']) ? urldecode( strtolower($_GET['partner']) ) : '';

include_once $ROOT . 'version.php';

?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">

<head>
    <base href="<?=$BASE_HREF?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    
<?php 
    $title = 'Python Elementary | Спасибо';
?>
  <title><?= $title ?></title>
  <meta property="og:title" content="<?= $title ?>">
  <meta name="description" content="<?= $description ?>">
  <meta property="og:description" content="<?= $description ?>">

    <meta property="og:url" content="//<?=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />

    
    <link rel="stylesheet" href="css/style.css">
    

    <link href="https://glebov-evgeny.github.io/dish-recipes/favicon.ico" type="image/x-icon" rel="icon">

</head>



<body class="<?= $version ? 'version-' . $version : '' ?>" id="body">

  

  <div class="wrapper">
    
    
    
    <header class="header _clear">
    <div class="container header__container">

        <div class="header__logos">
            <a href="<?=$BASE_HREF?>" target="_blank" class="header__logo">
                <img src="img/header/logo.svg" alt="logo" class="header__logo-pic">
            </a>
        </div>

        <nav class="header__nav">
            <a href="#footer" class="header__nav-link is-active scroll" target="_blank">Бизнес</a>
            <a href="footer" class="header__nav-link scroll" target="_blank">О нас</a>
            <a href=#footer" class="header__nav-link scroll" target="_blank">Цены</a>
            <a href=#footer" class="header__nav-link scroll" target="_blank">Оформить заказ</a>
        </nav>

        <div class="header__menu">
            <svg class="ham hamRotate hamR" viewBox="0 0 100 100" width="35" onclick="this.classList.toggle('active')">
                <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
                <path class="line middle" d="m 70,50 h -40" />
                <path class="line bottom" d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
            </svg>
        </div>

    </div>
</header> 
    
<section class="thanks">
    <div class="container thanks__container">
        <div class="thanks__content">
            <h2 class="thanks__title">THANK YOU!</h2>
            <p class="thanks__description">Submit an application to get more information</p>
            <!-- <p class="thanks__text">В ближайшее время специалист свяжется с Вами и ответит на Ваши вопросы.</p> -->
            <a href="<?=$BASE_HREF?>" class="thanks__btn">Submit your application</a>
        </div>
    </div>
</section>




 
    <footer class="footer _clear" id="footer">
    <div class="container footer__flex">
        <div  class="footer__content">
            <div class="footer__logos">
                <a href="<?=$BASE_HREF?>" class="footer__logo">
                    <img src="img/header/logo.svg" alt="logo-01" class="footer__logo-pic">
                </a>
            </div>
            <nav class="footer__nav">
                 
                    <a href="<?=$BASE_HREF?>#why" class="footer__nav-link" target="_blank">Why Python</a>
                    <a href="<?=$BASE_HREF?>#about" class="footer__nav-link" target="_blank">About the Course</a>
                    <a href="<?=$BASE_HREF?>#course" class="footer__nav-link" target="_blank">Training Process</a>
                
            </nav>
        </div>
        <p class="footer__link">&copy;&nbsp;<?= date('Y') ?>&nbsp;Synergy. All rights reserved.</p>
        <a href="#privacy" class="fancybox footer__link">Privacy Policy</a>
    </div>
</footer> 


    <section class="popups" hidden>
        
    <div class="popup popup-registration" id="popup-reg">
    <a class="popup__close" data-fancybox-close title="Закрыть"></a>
	
<form action="<?=$action?>&form=form-registration" class="form form_horisontal">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Submit an application to get more information about Python Elementary</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item-01 ">
    
    <input name="name" type="text"  placeholder="First name" class="form__input form__item-01"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item-02 ">
    
    <input name="phone" type="text"  placeholder="Phone" class="form__input form__item-02"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item-03 ">
    
    <input name="email" type="email"  placeholder="Email" class="form__input form__item-03"  required value="">
    
</div><!-- form__item -->

            

            


            <button class="form__input-btn form__item-04 " type="submit">Submit your application</button>

            <div class="form__more">
                <label class="form__footer">
                    <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                        <div class="form__footer-checkbox-icon lazy"></div>
                    </div>
                    <div class="form__footer-text">By clicking the button, I accept the terms of the <a href="#privacy" class="fancybox form__more-link">privacy policy</a> and agree to receive newsletters</div>
                </label>

            </div>

        </div>

    </div>
</form>

</div>



    </section>

  </div><!-- wrapper -->



  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" defer></script>

  
    <script src="js/script.thanks.js"></script>


</body>
</html>