<!DOCTYPE html>
<!--
Template Name: TURKISH CHEF
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>TURKISH CHEF</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul class="nospace inline pushright">
        <li><i class="fa fa-phone"></i> +79274921127</li>
        <li><i class="fa fa-envelope-o"></i> turkishchef@domain.com</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace inline pushright">
        <li><i class="fa fa-sign-in"></i> <a href="#">Login</a></li>
        <li><i class="fa fa-user"></i> <a href="#">Register</a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.html">TURKISH CHEF</a></h1>
    </div>
    <div id="search" class="fl_right">
      <form class="clear" method="post" action="#">
        <fieldset>
          <legend>Search:</legend>
          <input type="search" value="" placeholder="Search Here&hellip;">
          <button class="fa fa-search" type="submit" title="Search"><em>Search</em></button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <nav id="mainav" class="hoc clear"> 
    <!-- ################################################################################################ -->
    
    <!-- ################################################################################################ -->
  </nav>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded" style="background-color: rgb(207, 165, 110);">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <div class="overlay inspace-15 btmspace-10" style='background-color: #3f2b04;'>
        <h2 class="heading">Добро пожаловать в мир турецкой кухни!
        </h2>
        <p>Влюбляем в Турецкую кухню и Турцию в целом.
          Простые, пошаговые рецепты.
          Из Турции с Любовью ❤️С НАМИ ВСЕГДА ВКУСНО И ИНТЕРЕСНО!

    </p>
      </div>
      <footer>
        
        </ul>
      </footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="center btmspace-50">
      <h2 class="heading">Оставайтесь с нами!</h2>
      <p>Только у нас вы сможете найти:</p>
    </div>
    <div>
      <article class="one_third first btmspace-50">
        <h3 class="font-x1 btmspace-30"><i class="fa fa-2x rightspace-10"></i> <a href="#">Рецепты от шеф-повара</a></h3>
        <p>На нашем сайте Вы сможете найти рецепты популярных блюд Турции: от турецкого кофе до чечевичного супа. Все рецепты подготовлены нашим хорошим другом, поваром - Фарухом Гезен. Рецепты отличаются своей простой и быстротой приготовления. 
      </article>
      <article class="one_third btmspace-50">
        <h3 class="font-x1 btmspace-30"><i class="fa fa-2x  rightspace-10"></i> <a href="#">Истории блюд</a></h3>
        <p>Турецкая кухня является одной из самых разнообразных на планете. Ее сформировали влияния многих народов, побывавших в Анатолии на протяжении многих столетий. С нами вы сможете не только научиться готовитьь турецкие блюда, но и познакомитьься с их историей.</p>
      </article>
      <article class="one_third btmspace-50">
        <h3 class="font-x1 btmspace-30"><i class="fa fa-2x fa-sun rightspace-10"></i> <a href="#">Легкость приготовления</a></h3>
        <p>Стоит отметить, что на нашем сайте Вы так же сможете найти лёгкие рецепты турецких блюд. Так Вы сможете быстро приготовить ужин и накрыть праздничый стол, а главное Вы порадуете своих близких!</p>
      </article>
    </div>
    <!-- ################################################################################################ -->
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

    <!-- ################################################################################################ -->
    
     
        </ul>
      </footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="center btmspace-50">
      <h2 class="heading">Самые популярные рецепты</h2>
     
    </div>
    <ul class="nospace group">
      <?php
          $con = mysqli_connect("localhost", "root", "", "DB");
          mysqli_set_charset($con, "utf8");

          if ($con == false) {
              echo ("Ошибка подключения: " . mysqli_connect_error());
          }
          else {
              $sql = "SELECT id, name, image,description FROM data";
              $result = mysqli_query($con, $sql);
              $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

              foreach ($rows as $row) {
                $first = '';
                if ($row['id'] == 1)
                {
                  $first = 'first';
                }
                  echo (
                          "<li class='one_third {$first}'>
                          <article class='element'>
                            <figure><img src='{$row['image']}'>
                              <figcaption><a href='{$row['id']}'><i class='fa fa-eye'></i></a></figcaption>
                            </figure>
                            <div class='excerpt'>
                              <h6 class='heading'>{$row['name']} </h6>
                              <p>{$row['description']}</p>
                              <footer><a href='{$row['id']}'>Read More &raquo;</a></footer>
                            </div>
                          </article>
                        </li>"
                  );
              }
          }
      ?>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>