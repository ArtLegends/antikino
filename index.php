<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Антикино</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/style.css">
</head>
<body>

<!-- Плавающая строка с предупреждением -->
<div class="alert alert-warning" role="alert">
  В связи с множеством недовольных клиентов на пороге заведения из-за отсутствия свободных комнат, оплата возможна только по брони.
</div>

<!-- Навигационная панель -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">KINO MIR</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#about">О нас</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#forTwo">Для двоих</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#forCompanies">Для компании</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#faq">FAQ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contacts">Контакты</a>
        </li>
        <!-- Добавьте другие пункты меню здесь -->
      </ul>
    </div>
  </div>
</nav>

<!-- Секция "О нас" -->
<section id="about" class="py-5">
  <div class="container">

    <!-- Блок 1 -->
    <div class="text-center mb-4">
      <img src="/images/IMG_1256.PNG" alt="KINO MIR" class="mb-3"> <!-- Замените 'path_to_your_logo_image' на путь к вашему логотипу -->
      <h2>ЛУЧШАЯ ВОЗМОЖНОСТЬ ПРОВЕСТИ ПРИЯТНО ВЕЧЕР В КРУГУ ЛЮБИМЫХ</h2>
      <p>Уютный вечер с друзьями или второй половинкой в приятной обстановке</p>
    </div>

    <!-- Блок 2 -->
    <div class="mb-4">
      <h3>Наш адрес</h3>
      <p><?php echo $address; // Здесь будет адрес, который вы можете установить в верхней части PHP-скрипта или из базы данных ?></p>
    </div>

    <!-- Блок 3 -->
    <div class="row mb-4">
      <h4>С нами вы не соскучитесь</h4>
      <div class="col-md-6">
        <ul>
          <li>Залы с кинотеатрами (2-30 человек)</li>
          <li>Залы с караоке (шумоизоляция)</li>
        </ul>
      </div>
      <div class="col-md-6">
        <ul>
          <li>Залы с PS5, XBOX X (4 джойстика, 40+ игр)</li>
          <li>Возможность приносить свою еду</li>
        </ul>
      </div>
    </div>

    <!-- Блок 4 -->
    <div>
      <h3>Наши преимущества</h3>
      <p>Место для отдыха без лишних глаз. Смотрите фильмы в уютной обстановке с друзьями или второй половинкой. Привезите свою еду и напитки!</p>
    </div>

  </div>
</section>

<!-- Секция "Для двоих" -->
<section id="forTwo" class="py-5">
    <div class="container">

        <!-- Блок 5: Предложения для пар -->
        <h2 class="text-center mb-4">Для двоих</h2>
        <!-- Тариф "Возлюбленные" -->
        <div class="mb-4">
            <div id="sliderLovers" class="carousel slide" data-bs-ride="carousel">
                <!-- Индикаторы для слайдера -->
                <ol class="carousel-indicators">
                    <li data-bs-target="#sliderLovers" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#sliderLovers" data-bs-slide-to="1"></li>
                    <li data-bs-target="#sliderLovers" data-bs-slide-to="2"></li>
                    <li data-bs-target="#sliderLovers" data-bs-slide-to="3"></li>
                </ol>
                <!-- Сами изображения для слайдера -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/images/IMG_1290.JPG" class="d-block w-100" alt="Image description 1">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/IMG_1291.JPG" class="d-block w-100" alt="Image description 2">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/IMG_1292.JPG" class="d-block w-100" alt="Image description 3">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/IMG_1293.jpg" class="d-block w-100" alt="Image description 4">
                    </div>
                </div>
            </div>
            <h4>Возлюбленные</h4>
            <p>Описание тарифа: выбор фильма, безлимитные печеньки и напитки, большой поп-корн, свечи, лепестки роз.</p>
            <p>Информация о тарифе: 3 часа, 14900₸.</p>
            <button type="button" class="btn btn-primary btn-color" data-bs-toggle="modal" data-bs-target="#bookingModal" data-tariff="Возлюбленные" data-duration="4">
                Забронировать
            </button>
        </div>
        <!-- Тариф "Сладкоежки" -->
        <div class="mb-4">
            <div id="sliderSweet" class="carousel slide" data-bs-ride="carousel">
                <!-- Индикаторы для слайдера -->
                <ol class="carousel-indicators">
                    <li data-bs-target="#sliderSweet" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#sliderSweet" data-bs-slide-to="1"></li>
                    <li data-bs-target="#sliderSweet" data-bs-slide-to="2"></li>
                </ol>
                <!-- Сами изображения для слайдера -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/images/IMG_1258.JPG" class="d-block w-100" alt="Image description 1">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/IMG_1259.JPG" class="d-block w-100" alt="Image description 2">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/IMG_1260.JPG" class="d-block w-100" alt="Image description 3">
                    </div>
                </div>
            </div>
            <h4>Сладкоежки</h4>
            <p>Описание тарифа: выбор фильма, безлимитные печеньки и напитки, большой поп-корн, торт, свечи, лепестки роз.</p>
            <p>Информация о тарифе: 4 часа, 18900₸.</p>
            <button type="button" class="btn btn-primary btn-color" data-bs-toggle="modal" data-bs-target="#bookingModal" data-tariff="Сладкоежки" data-duration="4">
                Забронировать
            </button>
        </div>
        <!-- Тариф "Вечное наслаждение" -->
        <div class="mb-4">
            <div id="sliderEnjoyment" class="carousel slide" data-bs-ride="carousel">
                <!-- Индикаторы для слайдера -->
                <ol class="carousel-indicators">
                    <li data-bs-target="#sliderEnjoyment" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#sliderEnjoyment" data-bs-slide-to="1"></li>
                    <li data-bs-target="#sliderEnjoyment" data-bs-slide-to="2"></li>
                    <li data-bs-target="#sliderEnjoyment" data-bs-slide-to="3"></li>
                    <li data-bs-target="#sliderEnjoyment" data-bs-slide-to="4"></li>
                    <li data-bs-target="#sliderEnjoyment" data-bs-slide-to="5"></li>
                    <li data-bs-target="#sliderEnjoyment" data-bs-slide-to="6"></li>
                    <li data-bs-target="#sliderEnjoyment" data-bs-slide-to="7"></li>
                </ol>
                <!-- Сами изображения для слайдера -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/images/IMG_1282.JPG" class="d-block w-100" alt="Image description 1">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/IMG_1283.JPG" class="d-block w-100" alt="Image description 2">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/IMG_1284.JPG" class="d-block w-100" alt="Image description 3">
                    </div>
                  <div class="carousel-item">
                        <img src="/images/IMG_1286.JPG" class="d-block w-100" alt="Image description 4">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/IMG_1287.JPG" class="d-block w-100" alt="Image description 5">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/IMG_1285.JPG" class="d-block w-100" alt="Image description 6">
                    </div>
                  <div class="carousel-item">
                        <img src="/images/IMG_1288.JPG" class="d-block w-100" alt="Image description 7">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/IMG_1289.JPG" class="d-block w-100" alt="Image description 8">
                    </div>
                </div>
            </div>
            <h4>Вечное наслаждение</h4>
            <p>Описание тарифа: выбор фильма, безлимитные печеньки и напитки, большой поп-корн, торт, свечи, лепестки роз, бутылка вина J.F. Arriezu, Verdejo.</p>
            <p>Информация о тарифе: 8 часов, 27900₸.</p>
            <button type="button" class="btn btn-primary btn-color" data-bs-toggle="modal" data-bs-target="#bookingModal" data-tariff="Вечное наслаждение" data-duration="4">
                Забронировать
            </button>
        </div>

        <!-- Аналогично добавьте тарифы -->

    </div>
</section>

<!-- Модальное окно "забронировать" -->
<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bookingModalLabel">Бронирование кинозала <span id="tariffName"></span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="bookingForm">
                    <div class="mb-3">
                        <label for="name" class="form-label">Ф.И.О</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Контактный номер телефона</label>
                        <input type="tel" class="form-control" id="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Дата сеанса</label>
                        <input type="date" class="form-control" id="date" required>
                    </div>
                    <div class="mb-3">
                        <label for="time" class="form-label">Время сеанса</label>
                        <input type="time" class="form-control" id="time" required readonly>
                    </div>

                    <!-- Дополнительные услуги -->
                    <h6>Дополнительные услуги:</h6>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="hookah" data-price="6000₸">
                        <label class="form-check-label" for="hookah">Кальян (6000₸)</label>
                    </div>
                  <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="pizza" data-price="4300₸">
                        <label class="form-check-label" for="pizza">Пицца (4300₸)</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="sandwich" data-price="3500₸">
                        <label class="form-check-label" for="sandwich">Клаб сэндвичи (3500₸)</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="rug" data-price="Бесплатно">
                        <label class="form-check-label" for="rug">Плед (Бесплатно)</label>
                    </div>
                    <!-- Аналогично добавьте другие дополнительные услуги -->

                    <p>Примечание: "В случае выбора доп. услуг, менеджер свяжется для уточнения".</p>
                    <div class="mb-3">
                        <label for="totalPrice" class="form-label">Итоговая сумма:</label>
                        <input type="text" class="form-control" id="totalPrice" readonly>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary">Подтвердить</button>
            </div>
        </div>
    </div>
</div>

<!-- Секция "Для компаний" -->
<section id="forCompanies" class="py-5">
    <div class="container">

        <!-- Блок 6 -->
        <h2 class="text-center mb-4">Для веселой компании</h2>
        <p class="text-center mb-5">Лучший вариант провести для компании</p>

        <!-- Тариф "Семейный" -->
        <div class="mb-4">
          <div id="sliderFamily" class="carousel slide" data-bs-ride="carousel">
                <!-- Индикаторы для слайдера -->
                <ol class="carousel-indicators">
                    <li data-bs-target="#sliderFamily" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#sliderFamily" data-bs-slide-to="1"></li>
                    <li data-bs-target="#sliderFamily" data-bs-slide-to="2"></li>
                    <li data-bs-target="#sliderFamily" data-bs-slide-to="3"></li>
                    <li data-bs-target="#sliderFamily" data-bs-slide-to="4"></li>
                    <li data-bs-target="#sliderFamily" data-bs-slide-to="5"></li>
                    <li data-bs-target="#sliderFamily" data-bs-slide-to="6"></li>
                    <li data-bs-target="#sliderFamily" data-bs-slide-to="7"></li>
                    <li data-bs-target="#sliderFamily" data-bs-slide-to="8"></li>
                </ol>
                <!-- Сами изображения для слайдера -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/images/IMG_1275.JPG" class="d-block w-100" alt="Image description 1">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/IMG_1273.JPG" class="d-block w-100" alt="Image description 2">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/IMG_1274.JPG" class="d-block w-100" alt="Image description 3">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/IMG_1277.JPG" class="d-block w-100" alt="Image description 4">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/IMG_1278.JPG" class="d-block w-100" alt="Image description 5">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/IMG_1276.JPG" class="d-block w-100" alt="Image description 6">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/IMG_1279.JPG" class="d-block w-100" alt="Image description 7">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/IMG_1280.JPG" class="d-block w-100" alt="Image description 8">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/IMG_1281.JPG" class="d-block w-100" alt="Image description 9">
                    </div>
                </div>
            </div>
            <h4>Семейный</h4>
            <p>Описание тарифа: Караоке, предварительно подготовленный фильм на выбор, коллекция настольных игр, XBOX/PS5, безлимитные печеньки и горячие напитки в главном зале, пицца 40 см.</p>
            <p>Продолжительность: 4 часа | Цена: 24900₸ | Количество человек: до 10</p>
            <button type="button" class="btn btn-primary btn-color" data-bs-toggle="modal" data-bs-target="#bookingModal" data-tariff="Семейный" data-duration="4">
                Забронировать
            </button>
        </div>
      <!-- Дневной -->
        <div class="mb-4">
          <div id="sliderDaytime" class="carousel slide" data-bs-ride="carousel">
                <!-- Индикаторы для слайдера -->
                <ol class="carousel-indicators">
                    <li data-bs-target="#sliderDaytime" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#sliderDaytime" data-bs-slide-to="1"></li>
                    <li data-bs-target="#sliderDaytime" data-bs-slide-to="2"></li>
                    <li data-bs-target="#sliderDaytime" data-bs-slide-to="3"></li>
                    <li data-bs-target="#sliderDaytime" data-bs-slide-to="4"></li>
                    <li data-bs-target="#sliderDaytime" data-bs-slide-to="5"></li>
                </ol>
                <!-- Сами изображения для слайдера -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/images/IMG_1267.JPG" class="d-block w-100" alt="Image description 1">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/IMG_1268.JPG" class="d-block w-100" alt="Image description 2">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/IMG_1269.JPG" class="d-block w-100" alt="Image description 3">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/IMG_1270.JPG" class="d-block w-100" alt="Image description 4">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/IMG_1272.JPG" class="d-block w-100" alt="Image description 5">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/IMG_1271.JPG" class="d-block w-100" alt="Image description 6">
                    </div>
                </div>
            </div>
            <h4>Дневной</h4>
            <p>Описание тарифа: Караоке, предварительно подготовленный фильм на выбор, коллекция настольных игр, XBOX/PS5, безлимитные печеньки и горячие напитки в главном зале, пицца 40 см.</p>
            <p>Продолжительность: 6 часов | Цена: 29900₸ | Количество человек: до 20</p>
            <button type="button" class="btn btn-primary btn-color" data-bs-toggle="modal" data-bs-target="#bookingModal" data-tariff="Дневной" data-duration="4">
                Забронировать
            </button>
        </div>
        <!-- Большой праздник -->
        <div class="mb-4">
          <div id="sliderHoliday" class="carousel slide" data-bs-ride="carousel">
                <!-- Индикаторы для слайдера -->
                <ol class="carousel-indicators">
                    <li data-bs-target="#sliderHoliday" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#sliderHoliday" data-bs-slide-to="1"></li>
                    <li data-bs-target="#sliderHoliday" data-bs-slide-to="2"></li>
                    <li data-bs-target="#sliderHoliday" data-bs-slide-to="3"></li>
                    <li data-bs-target="#sliderHoliday" data-bs-slide-to="4"></li>
                    <li data-bs-target="#sliderHoliday" data-bs-slide-to="5"></li>
                </ol>
                <!-- Сами изображения для слайдера -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/images/IMG_1262.JPG" class="d-block w-100" alt="Image description 1">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/IMG_1263.JPG" class="d-block w-100" alt="Image description 2">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/IMG_1261.JPG" class="d-block w-100" alt="Image description 3">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/IMG_1264.JPG" class="d-block w-100" alt="Image description 4">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/IMG_1265.JPG" class="d-block w-100" alt="Image description 5">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/IMG_1266.JPG" class="d-block w-100" alt="Image description 6">
                    </div>
                </div>
            </div>
            <h4>Большой праздник</h4>
            <p>Описание тарифа: Караоке, предварительно подготовленный фильм на выбор, коллекция настольных игр, XBOX/PS5, безлимитные печеньки и горячие напитки в главном зале, 2 пиццы 40 см, праздничное оформление с шариками, торт с именем именинника.</p>
            <p>Продолжительность: 8 часов | Цена: 47900₸</p>
            <button type="button" class="btn btn-primary btn-color" data-bs-toggle="modal" data-bs-target="#bookingModal" data-tariff="Большой праздник" data-duration="4">
                Забронировать
            </button>
        </div>

        <!-- Аналогично добавьте тарифы "Дневной" и "Большой праздник" -->

    </div>
</section>

<!-- Секция "FAQ" -->
<section id="faq" class="py-5">
    <div class="container">

        <!-- Блок 7 -->
        <h2 class="text-center mb-4">Часто задаваемые вопросы</h2>
        <p class="text-center mb-5">Пожалуйста, прежде чем задавать вопрос тех поддержке, прочтите это</p>

        <!-- Список вопросов и ответов -->
        <div class="accordion" id="faqAccordion">

            <!-- Вопрос 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Будет ли нас кто-то слышать и видеть?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Нет. Ни один из наших залов не оснащен прослушкой или же скрытыми камерами. Двери в залы закрываются изнутри, а если вам понадобится кто-то из персонала, то в каждом зале есть кнопка вызова.
                    </div>
                </div>
            </div>
          <!-- Вопрос 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        Можно ли прийти со своей едой и напитками?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Конечно! Мы будем только рады, если вы уйдёте от нас сытыми и довольными. Мы можем предложить вам безлимитный запас горячих напитков и сладостей, также у нас есть своя кухня.
                    </div>
                </div>
            </div>
            <!-- Вопрос 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        Можно ли курить внутри кинотеатра?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Внутри нашего кинотеатра по соображениям безопасности и комфорта других посетителей курить традиционные сигареты запрещается. Однако употребление одноразовых электронных сигарет и кальяна разрешено.
                    </div>
                </div>
            </div>
            <!-- Вопрос 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                        До скольки лет можно находиться несовершеннолетнему?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Несовершеннолетнему находиться внутри нашего зала можно до 22:00. После лишь при сопровождении родителей.
                    </div>
                </div>
            </div>

            <!-- Добавьте аналогично другие вопросы и ответы -->

        </div>
    </div>
</section>

<!-- Секция "Контакты" -->
<section id="contacts" class="py-5">
    <div class="container">

        <!-- Блок 8 -->
        <h2 class="text-center mb-4">КАК НАС НАЙТИ</h2>

        <!-- Описание -->
        <div class="text-center mb-5">
            <p><strong>Наш адрес:</strong> [адрес]</p>
            <p><strong>Время работы:</strong> Вс-Чт: с 12:00 до 06:00, Пт-Сб: круглосуточно</p>
        </div>
    </div>
</section>

<!-- Подвал -->
<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row">

            <!-- Якорные кнопки -->
            <div class="col-md-4">
                <h5>Быстрый доступ</h5>
                <ul class="list-unstyled">
                    <li><a href="#home" class="text-white">Главная</a></li>
                    <li><a href="#services" class="text-white">Услуги</a></li>
                    <li><a href="#faq" class="text-white">FAQ</a></li>
                    <li><a href="#contacts" class="text-white">Контакты</a></li>
                </ul>
            </div>

            <!-- Реквизиты и документы -->
            <div class="col-md-8">
                <h5>Документация</h5>
                <ul class="list-unstyled">
                    <li><a href="[ссылка_на_реквизиты]" class="text-white">Реквизиты</a></li>
                    <li><a href="[ссылка_на_договор_оферты]" class="text-white">Договор оферты</a></li>
                    <li><a href="[ссылка_на_политику_конфиденциальности]" class="text-white">Политика конфиденциальности</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>


<!-- Bootstrap JS и Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>

<!-- Наш собственный JS-код -->
<script>
    const bookingModal = document.getElementById('bookingModal');
    
    bookingModal.addEventListener('show.bs.modal', (event) => {
        const button = event.relatedTarget;
        const tariff = button.getAttribute('data-tariff');
        const duration = button.getAttribute('data-duration');

        document.getElementById('tariffName').textContent = tariff;
        document.getElementById('time').value = duration + ":00"; // Устанавливаем время сеанса
        
        updateTotalPrice(); // Обновить итоговую сумму при открытии модального окна
    });
    
    // Обновить итоговую сумму, когда выбраны/отменены дополнительные услуги
    document.querySelectorAll('.form-check-input').forEach(input => {
        input.addEventListener('change', updateTotalPrice);
    });
    
    function updateTotalPrice() {
        let total = 0;
        document.querySelectorAll('.form-check-input:checked').forEach(input => {
            const price = parseInt(input.getAttribute('data-price')) || 0; // Парсим цену, если "Бесплатно", то будет 0
            total += price;
        });
        document.getElementById('totalPrice').value = total + "₸"; // Предполагая, что вы используете рубли
    }
</script>


</body>
</html>