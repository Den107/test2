<!doctype html>
<html lang="ru">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">
  <link rel="stylesheet" href="style.css">


  <title>RedEdge</title>
</head>

<body>
  <div class="nav-burger">
    <div class="burger-img">
      <img class="burger-close" src="img/close.png" alt="close">
    </div>
    <div class="burger-links">
      <ul>
        <li><a class="nav-link active" aria-current="page" href="#">Услуги</a></li>
        <li><a class="nav-link active" aria-current="page" href="#">Портфолио</a></li>
        <li><a class="nav-link active" aria-current="page" href="#">Отзывы</a></li>
        <li><a class="nav-link active" aria-current="page" href="#">Вакансии</a></li>
        <li><a class="nav-link active" aria-current="page" href="#">Контакты</a></li>
      </ul>
    </div>
    <div class="burger-footer">
      <div class="city">
        Ростов-на-Дону,<br>
        Ленина, 21
      </div>
      <div class="phone">
        <a href="tel:+78632431510">8(863)243-15-10</a>
      </div>

    </div>
  </div>

  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="img/logo.png" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="#">Услуги</a>
          <a class="nav-link active" aria-current="page" href="#">Портфолио</a>
          <a class="nav-link active" aria-current="page" href="#">Отзывы</a>
          <a class="nav-link active" aria-current="page" href="#">Вакансии</a>
          <a class="nav-link active" aria-current="page" href="#">Контакты</a>
        </div>
      </div>
      <div class="menu-right">
        <div class="phone">
          <a href="tel:+78632431510">8(863)243-15-10</a>
        </div>
        <div class="city">
          Ростов-на-Дону
        </div>
      </div>
    </div>
  </nav>




  <section class="promo">
    <div class="container">
      <div class="row">
        <h1 class="promo-title col-lg-6">Рекламно-информационное агентство</h1>
      </div>
      <div class="row">
        <p class="promo-subtitle col-lg-6">Будем рады, если Вы обратитесь в наше Агентство. Мы готовы предложить Вам
          передовые
          решения для продвижения <br> Вашего бизнеса.</p>
      </div>
      <div class="d-flex form">
        <input type="text" class="form-control col-lg-3 me-2 mt-3 " placeholder="Номер телефона" aria-label="Recipient's username" aria-describedby="button-addon2">
        <button class="btn btn-danger col-lg-3 mt-3" type="button" id="button-addon2">Обратный звонок</button>
      </div>


    </div>
  </section>


  <section class="slider">
    <div class="container">
      <h2 class="news">Новости</h2>
      <div class="my-slider">
        <?php @require 'connect.php';
        $sql = "SELECT * FROM news";
        $res = mysqli_query($conn, $sql);
        while ($row = $res->fetch_assoc()) :
        ?>
          <div>
            <div class="card text-start" style="width: 18rem;">
              <div class="card-body">
                <p class="card-title">"<?= $row['date'] ?>"</p>
                <p class="card-text">"<?= $row['body'] ?>"</p>
                <a href="#" class="btn btn-outline-danger">Подробнее</a>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
        <!-- <div>
          <div class="card text-start" style="width: 18rem;">
            <div class="card-body">
              <p class="card-title">15.10.2020</p>
              <p class="card-text">Акции на размещение баннерного
                панно 20% до конца июля</p>
              <a href="#" class="btn btn-outline-danger">Подробнее</a>
            </div>
          </div>
        </div>
        <div>
          <div class="card text-start" style="width: 18rem;">
            <div class="card-body">
              <p class="card-title">15.10.2020</p>
              <p class="card-text">Акции на размещение баннерного
                панно 20% до конца июля</p>
              <a href="#" class="btn btn-outline-danger">Подробнее</a>
            </div>
          </div>
        </div>
        <div>
          <div class="card text-start" style="width: 18rem;">
            <div class="card-body">
              <p class="card-title">15.10.2020</p>
              <p class="card-text">Акции на размещение баннерного
                панно 20% до конца июля</p>
              <a href="#" class="btn btn-outline-danger">Подробнее</a>
            </div>
          </div>
        </div>
        <div>
          <div class="card text-start" style="width: 18rem;">
            <div class="card-body">
              <p class="card-title">15.10.2020</p>
              <p class="card-text">Акции на размещение баннерного
                панно 20% до конца июля</p>
              <a href="#" class="btn btn-outline-danger">Подробнее</a>
            </div>
          </div>
        </div>
        <div>
          <div class="card text-start" style="width: 18rem;">
            <div class="card-body">
              <p class="card-title">15.10.2020</p>
              <p class="card-text">Акции на размещение баннерного
                панно 20% до конца июля</p>
              <a href="#" class="btn btn-outline-danger">Подробнее</a>
            </div>
          </div>
        </div>
        <div>
          <div class="card text-start" style="width: 18rem;">
            <div class="card-body">
              <p class="card-title">15.10.2020</p>
              <p class="card-text">Акции на размещение баннерного
                панно 20% до конца июля</p>
              <a href="#" class="btn btn-outline-danger">Подробнее</a>
            </div>
          </div>
        </div>
        <div>
          <div class="card text-start" style="width: 18rem;">
            <div class="card-body">
              <p class="card-title">15.10.2020</p>
              <p class="card-text">Акции на размещение баннерного
                панно 20% до конца июля</p>
              <a href="#" class="btn btn-outline-danger">Подробнее</a>
            </div>
          </div>
        </div>
        <div>
          <div class="card text-start" style="width: 18rem;">
            <div class="card-body">
              <p class="card-title">15.10.2020</p>
              <p class="card-text">Акции на размещение баннерного
                панно 20% до конца июля</p>
              <a href="#" class="btn btn-outline-danger">Подробнее</a>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="container ">
      <div class="row">
        <div class="d-flex align-items-center footer-inner">
          <img class="display-inline-block" src="img/logo-footer.png" alt="logo">
          <div class="d-flex footer-links ">
            <a class="nav-link active" href=" #">Услуги</a>
            <a class="nav-link active" href=" #">Портфолио</a>
            <a class="nav-link active" href=" #">Отзывы</a>
            <a class="nav-link active" href=" #">Вакансии</a>
            <a class="nav-link active" href=" #">Контакты</a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
    integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
    crossorigin="anonymous"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
  <script src="main.js"></script>

</body>

</html>