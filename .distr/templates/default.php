<!DOCTYPE html>
<html lang="ru>">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    {% block meta %}
    <title>Тестовая страница</title>
    <meta property="og:title" content="Тестовая страница">
    <meta name="description" content="...">
    <meta property="og:description" content="...">
    {% endblock %}

    {% block styles %}
    <link rel="stylesheet" href="css/style.css">
    {% endblock %}

    <link href="https://glebov-evgeny.github.io/dish-recipes/favicon.ico" type="image/x-icon" rel="icon">

</head>



<body id="body">

  <div class="wrapper">
    {% block blocks %}
    {% endblock %}
  </div>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  {% block js %}
  {% endblock %}

</body>
</html>