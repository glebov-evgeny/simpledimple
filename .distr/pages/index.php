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
    {% include 'about/block.php' %}
    {% include 'footer/block.php' %}
{% endblock %}

{% block popups %}
    {% include 'popups/block.php' %}
{% endblock %}

{% block js %}
    <script src="js/script.main.js"></script>
{% endblock %}
