<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <script
      src="https://kit.fontawesome.com/237306d976.js"
      crossorigin="anonymous"
    ></script>
    <link rel="shortcut icon" href="/img/favicon.png" />
    <title>Быстронефть</title>
  </head>
  <body>
    <!-- Header start -->
    <header class="header-container">
      <nav class="navbar navbar-expand-lg navbar-light bg-dar font-700">
        <a class="navbar-brand" href="/">
          <img src="/img/logo-neft.png" alt="logo" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarScroll"
          aria-controls="navbarScroll"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul
            class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll"
            style="max-height: 100px"
          >
            <li class="nav-item">
              <a class="nav-link" href="/">Главная</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/fuel">Топливо</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/action">Акции</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarScrollingDropdown"
                role="button"
                data-toggle="dropdown"
                aria-expanded="false"
              >
                Сервисы
              </a>
              <ul
                class="dropdown-menu"
                aria-labelledby="navbarScrollingDropdown"
              >
                <li><a class="dropdown-item" href="/restaurant">Ресторан</a></li>
                <li><a class="dropdown-item disabled" href="#">Мойка</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarScrollingDropdown"
                role="button"
                data-toggle="dropdown"
                aria-expanded="false"
              >
                Клиенту
              </a>
              <ul
                class="dropdown-menu"
                aria-labelledby="navbarScrollingDropdown"
              >
                <li><a class="dropdown-item disabled" href="#">Вход</a></li>
                <li><a class="dropdown-item disabled" href="#">Регистрация</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Бонусная программа</a>
            </li>
          </ul>
          <button class="btn btn-outline-danger" type="submit">
            Личный кабинет
          </button>
        </div>
      </nav>
      <div class="container-fluid font-700 header-b">
        <div class="row">
          <div class="col-md-6 text-center">Выбрать город</div>
          <div class="col-md-6 text-center">
            <a href="tel:+755555500" class="link">+7 (555) 555-00-00</a>
          </div>
        </div>
      </div>
    </header>
    <!-- Header end -->

    <?php echo $content; ?>

    <!-- Footer start -->
    <footer>
      <div class="footer-area font-700">
        <div class="container">
          <div class="row text-light">
            <div class="col-md-6 my-5">
              <ul>
                <li class="mb-2">
                  <a href="#" class="link">О компании</a>
                </li>
                <li class="mb-2">
                  <a href="#" class="link">Вакансии</a>
                </li>
                <li class="mb-2">
                  <a href="#" class="link">Нашим партнерам</a>
                </li>
                <li class="mb-5">
                  <a href="#" class="link">Служба поддержки</a>
                </li>
                <li>
                  <h4 class="mb-4">Мы с соцсетях</h4>
                  <a href="https://vk.com/" target="_blank">
                    <i class="fa-brands fa-vk icon-social"></i>
                  </a>
                  &nbsp; &nbsp;
                  <a href="https://ok.ru/" target="_blank">
                    <i class="fa-brands fa-odnoklassniki icon-social"></i>
                  </a>
                  &nbsp; &nbsp;
                  <a href="https://www.tiktok.com/" target="_blank">
                    <i class="fa-brands fa-tiktok icon-social"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-6 my-5">
              <ul>
                <li>
                  <h4>Контактная информация</h4>
                  <p>Адрес: г. Москва, ул. Земляная поляна, д. 21, стр. 1</p>
                </li>
                <li>
                  <p>
                    Телефон:
                    <a href="tel:+755555500" class="link">+7 (555) 555-00-00</a>
                  </p>
                </li>
                <li>
                  <p>
                    Email:
                    <a href="" class="link">bistroneft@mail.ru</a>
                  </p>
                </li>
                <li>
                  <a href="https://telegram.org/" target="_blank">
                    <i class="fa-brands fa-telegram icon-social"></i>
                  </a>
                  &nbsp; &nbsp;
                  <a href="https://www.whatsapp.com/" target="_blank">
                    <i class="fa-brands fa-whatsapp icon-social"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <hr />
        <div class="container">
          <div class="row">
            <p class="col-lg-12 text-center">
              &copy; 2015 -
              <script>
                document.write(new Date().getFullYear());
              </script>
              ООО «БЫСТРОНЕФТЬ»
            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer end -->

    <script src="/js/jquery.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>
