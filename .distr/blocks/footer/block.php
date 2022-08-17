<footer class="footer" >
    <div class="container footer__container">
        <div  class="footer__block">
            <p class="footer__logo">&copy;&nbsp;<?= date('Y') ?>&nbsp;«LoremIpsum.net» Все права защищены.</p>
        </div>
        <div  class="footer__block">
            <div class="footer__item">
                <img src="img/common/icon-01.svg" alt="icon" class="footer__item-pic">
                <p class="footer__item-text _clear">Qiwi wallet</p>
            </div>
            <div class="footer__item">
                <img src="img/common/icon-02.svg" alt="icon" class="footer__item-pic">
                <p class="footer__item-text _clear">Yandex Money</p>
            </div>
            <div class="footer__item">
                <img src="img/common/icon-03.svg" alt="icon" class="footer__item-pic">
                <p class="footer__item-text _clear">Web Money</p>
            </div>
        </div>
        <div  class="footer__block">
            <a href="mailto:<?= $email ?>" class="footer__item" target="_blank">
                <img src="img/common/icon-04.svg" alt="icon" class="footer__item-pic">
                <p class="footer__item-text"><?= $email ?></p>
            </a>
            <a href="https://ea-glebov.ru/" class="footer__item" target="_blank">
                <img src="img/common/icon-05.svg" alt="icon" class="footer__item-pic">
                <p class="footer__item-text">Мы вконтакте</p>
            </a>
        </div>
    </div>
</footer>