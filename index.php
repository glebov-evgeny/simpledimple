<!DOCTYPE html>
<html lang="ru>">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    
    <title>Тестовая страница</title>
    <meta property="og:title" content="Тестовая страница">
    <meta name="description" content="...">
    <meta property="og:description" content="...">


    
    <link rel="stylesheet" href="css/style.css">
    

    <link href="https://glebov-evgeny.github.io/dish-recipes/favicon.ico" type="image/x-icon" rel="icon">

</head>



<body id="body">

  <div class="wrapper">
    
    <header class="header ">
    <div class="container header__container">

        <div class="header__logos">
            <a href="<?=$BASE_HREF?>" target="_blank" class="header__logo">
                <img src="img/header/logo.svg" alt="logo" class="header__logo-pic">
            </a>
        </div>

        <nav class="header__nav">
            <a href="#" class="header__nav-link is-active" target="_blank">Бизнес</a>
            <a href="#" class="header__nav-link" target="_blank">О нас</a>
            <a href=#" class="header__nav-link" target="_blank">Цены</a>
            <a href=#" class="header__nav-link" target="_blank">Оформить заказ</a>
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
    <section class="intro" id="intro">
    <div class="container intro__container">
        <h2 class="intro__title"><span>Lorem ipsum</span> dolor sit <br/>
            amet consectetur <span>adipiscing</span>
        </h2>
        <p class="intro__description">At vero eos et accusamus et iusto odio dignissimos ducimus!</p>
        <ul class="intro__list">
            <li>Totam rem aperiam eaque ipsa</li>
            <li>Sit voluptatem accusantium doloremque laudantium</li>
            <li>Sed ut perspiciatis, unde omnis iste natus error</li>
        </ul>
        <div class="intro__buttons">
            <a href="#" class="button intro__button">Заказать</a>
            <a href="#" class="button intro__button white">Подробнее</a>
        </div>
    </div>
</section>
    <section class="about lazy" id="about">
    <div class="container about__container">
        <h2 class="title about__title">Оформление  <span>заказа</span></h2>
        <p class="about__description">Перед заполнением формы ознакомьтесь с нашей схемой работы!</p>
        <div class="about__block">
            <div class="about__item">
                <div class="about__item-pic">
                    <img src="img/about/icon-01.png" alt="icon">
                </div>
                <p class="about__item-text">Lorem ipsum dolor sit amet</p>
            </div>
            <div class="about__item-dots">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="about__item">
                <div class="about__item-pic">
                    <img src="img/about/icon-02.png" alt="icon">
                </div>
                <p class="about__item-text">Сonsecteturadipiscing elit</p>
            </div>
            <div class="about__item-dots _adaptive">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="about__item">
                <div class="about__item-pic">
                    <img src="img/about/icon-03.png" alt="icon">
                </div>
                <p class="about__item-text">Sed do eiusmod tempor</p>
            </div>
            <div class="about__item-dots">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="about__item">
                <div class="about__item-pic">
                    <img src="img/about/icon-04.png" alt="icon">
                </div>
                <p class="about__item-text">Esse cillum dolore eu fugiat</p>
            </div>
            <div class="about__item-dots _adaptive">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="about__item">
                <div class="about__item-pic">
                    <img src="img/about/icon-05.png" alt="icon">
                </div>
                <p class="about__item-text">Excepteur sint occaecat cupidatat non proident</p>
            </div>
        </div>

            <form class="about__form">
                <div class="about__form-item f_01">
                    <label class="about__form-input about__form-input-select">
                        <span class="about__form-input-select-text">Выберите тип системы</span>
                        <svg class="about__form-input-select-arrow" width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.93375 1.51079C8.93375 1.43936 8.89803 1.359 8.84446 1.30543L8.39803 0.859C8.34446 0.805429 8.2641 0.769714 8.19268 0.769714C8.12125 0.769714 8.04089 0.805429 7.98732 0.859L4.47839 4.36793L0.969462 0.859C0.91589 0.805429 0.835533 0.769714 0.764105 0.769714C0.683748 0.769714 0.612319 0.805429 0.558748 0.859L0.112319 1.30543C0.0587475 1.359 0.0230331 1.43936 0.0230331 1.51079C0.0230331 1.58221 0.0587475 1.66257 0.112319 1.71614L4.27303 5.87686C4.3266 5.93043 4.40696 5.96614 4.47839 5.96614C4.54982 5.96614 4.63018 5.93043 4.68375 5.87686L8.84446 1.71614C8.89803 1.66257 8.93375 1.58221 8.93375 1.51079Z" fill="black"/>
                        </svg>
                        <input type="text" name="select" id="aboutSelect" hidden />
                    </label>
                    <ul class="about__form-input-select-options">
                        <li class="active">Sed ut perspiciatis</li>
                        <li>Nemo enim ipsam</li>
                        <li>Et harum quidem</li>
                        <li>Temporibus autem</li>
                        <li>Itaque earum rerum</li>
                        <li>Sed ut perspiciatis</li>
                        <li>Nemo enim ipsam</li>
                        <li>Et harum quidem</li>
                        <li>Temporibus autem</li>
                        <li>Itaque earum rerum</li>
                        <li>Temporibus autem</li>
                        <li>Itaque earum rerum</li>
                        <li>Sed ut perspiciatis</li>
                        <li>Nemo enim ipsam</li>
                        <li>Et harum quidem</li>
                        <li>Temporibus autem</li>
                        <li>Itaque earum rerum</li>
                    </ul>
                </div>
                <label class="about__form-item f_02">
                    <input type="email" name="email" class="about__form-input" placeholder="Ваш email"/>
                </label>
                <label class="about__form-item f_03">
                    <input type="text" name="name" class="about__form-input" placeholder="Ваше имя"/>
                </label>
                <label class="about__form-item f_04">
                    <span class="about__form-input-range-text">Sed ut perspiciatis, unde omnis iste natus <span class="about__form-input-range-text about__form-input-range-number">75</span> %</span>
                    <input type="range" min="1" max="100" value="75" class="about__form-input-range" />
                </label>
                <div class="about__form-item f_05">
                    <input type="file" class="about__form-input about__form-input-file" id="add-file"/>
                    <label for="add-file" class="about__form-input-file-button">
                        <svg class="about__form-input-file-image" width="18" height="21" viewBox="0 0 18 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.8125 4.60899L13.3304 1.12685C12.9174 0.713902 12.0915 0.36792 11.5 0.36792H1.50002C0.9085 0.36792 0.428589 0.847831 0.428589 1.43935V19.2965C0.428589 19.888 0.9085 20.3679 1.50002 20.3679H16.5C17.0915 20.3679 17.5714 19.888 17.5714 19.2965V6.43935C17.5714 5.84783 17.2255 5.02194 16.8125 4.60899ZM11.8572 1.88578C12.0469 1.95274 12.2366 2.05319 12.3148 2.13131L15.8081 5.62462C15.8862 5.70274 15.9866 5.89247 16.0536 6.08221H11.8572V1.88578ZM16.1429 18.9394H1.85716V1.79649H10.4286V6.43935C10.4286 7.03087 10.9085 7.51078 11.5 7.51078H16.1429V18.9394ZM4.7143 9.29649V10.0108C4.7143 10.2117 4.87055 10.3679 5.07145 10.3679H12.9286C13.1295 10.3679 13.2857 10.2117 13.2857 10.0108V9.29649C13.2857 9.0956 13.1295 8.93935 12.9286 8.93935H5.07145C4.87055 8.93935 4.7143 9.0956 4.7143 9.29649ZM12.9286 11.7965H5.07145C4.87055 11.7965 4.7143 11.9527 4.7143 12.1536V12.8679C4.7143 13.0688 4.87055 13.2251 5.07145 13.2251H12.9286C13.1295 13.2251 13.2857 13.0688 13.2857 12.8679V12.1536C13.2857 11.9527 13.1295 11.7965 12.9286 11.7965ZM12.9286 14.6536H5.07145C4.87055 14.6536 4.7143 14.8099 4.7143 15.0108V15.7251C4.7143 15.926 4.87055 16.0822 5.07145 16.0822H12.9286C13.1295 16.0822 13.2857 15.926 13.2857 15.7251V15.0108C13.2857 14.8099 13.1295 14.6536 12.9286 14.6536Z" fill="#272733"/>
                        </svg>
                        <span class="about__form-input-file-text">Прикрепить файл</span>
                    </label>
                </div>
                <button type="submit" class="about__form-button button f_06">Отправить</button>
            </form>
    </div>
</section>
    <footer class="footer" >
    <div class="container footer__container">
        <div  class="footer__block">
            <p class="footer__logo">&copy;&nbsp;2018&nbsp;«LoremIpsum.net» Все права защищены.</p>
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
            <a href="mailto:info@ipsum228.com" class="footer__item" target="_blank">
                <img src="img/common/icon-04.svg" alt="icon" class="footer__item-pic">
                <p class="footer__item-text">info@ipsum228.com</p>
            </a>
            <a href="https://ea-glebov.ru/" class="footer__item" target="_blank">
                <img src="img/common/icon-05.svg" alt="icon" class="footer__item-pic">
                <p class="footer__item-text">Мы вконтакте</p>
            </a>
        </div>
    </div>
</footer>

  </div>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  
    <script src="js/script.main.js"></script>


</body>
</html>