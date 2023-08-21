<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Антикино</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
      <img src="path_to_your_logo_image" alt="KINO MIR" class="mb-3"> <!-- Замените 'path_to_your_logo_image' на путь к вашему логотипу -->
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
      <div class="col-md-6">
        <h4>С нами вы не соскучитесь</h4>
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

</body>
</html>