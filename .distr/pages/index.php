{% extends "default.php" %}

{% block meta %}
  <title><?= $title ?></title>
  <meta property="og:title" content="<?= $title ?>">
  <meta name="description" content="<?= $description ?>">
  <meta property="og:description" content="<?= $description ?>">
{% endblock %}

{% block blocks %}
    {% include 'header/block.php' %}
    {% include 'intro/block.php' %}
    <div class="about__wrapper">
        {% include 'about/block.php' %}
    </div>
    {% include 'footer/block.php' %}    
<!--    <a href="#popup-reg" class="footer__btn" data-fancybox>--><?//=$btn?><!--</a>-->
{% endblock %}

{% block popups %}
    {% include 'popups/block.php' %}
{% endblock %}

{% block js %}
    <script src="js/script.main.js"></script>
{% endblock %}
