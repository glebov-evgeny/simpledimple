{% extends "default.php" %}

{% block meta %}
    <title>Тестовая страница</title>
    <meta property="og:title" content="Тестовая страница">
    <meta name="description" content="...">
    <meta property="og:description" content="...">
{% endblock %}

{% block blocks %}
    {% include 'header/block.php' %}
    {% include 'intro/block.php' %}
    {% include 'about/block.php' %}
    {% include 'footer/block.php' %}
{% endblock %}

{% block js %}
    <script src="js/script.main.js"></script>
{% endblock %}
