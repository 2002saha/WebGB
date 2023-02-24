<?php

$experience = array(
  array(
    "company" => "Компания 1",
    "position" => "Веб-разработчик",
    "dates" => "Январь 2021 - по настоящее время",
    "skills" => "PHP, MySQL, HTML, CSS, JavaScript",
    "responsibilities" => "- Разработка веб-приложений и сайтов\n- Техническая поддержка и доработка существующих проектов\n- Участие в планировании и оценке задач",
    "website" => "https://example.com/"
  ),
  array(
    "company" => "Компания 2",
    "position" => "Front-end разработчик",
    "dates" => "Март 2019 - Декабрь 2020",
    "skills" => "JavaScript, React, Redux, HTML, CSS, Git",
    "responsibilities" => "- Разработка клиентских веб-приложений на React\n- Оптимизация производительности и улучшение UX/UI\n- Участие в процессе код-ревью и разработке лучших практик",
    "website" => "https://example.com/"
  ),
  array(
    "company" => "Компания 3",
    "position" => "Full-stack разработчик",
    "dates" => "Январь 2018 - Февраль 2019",
    "skills" => "PHP, Laravel, MySQL, JavaScript, Vue.js, HTML, CSS",
    "responsibilities" => "- Разработка и поддержка веб-приложений на PHP и Vue.js\n- Реализация функциональных требований и UX/UI дизайна\n- Участие в разработке архитектуры проектов",
    "website" => "https://example.com/"
  )
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-Q8i/Xa8aS7TEs27kgK9sJvoRxT2MZm5+9LvL4Uksz6ZLi8+c+CUm82nyVoRxH8tP" crossorigin="anonymous">
  <title>Опыт работы</title>
</head>
<body>
  <div class="container">
    <h1>Опыт работы</h1>
    <div class="row">
      <?php foreach ($experience as $job): ?>
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="<?php echo $job['logo']; ?>" class="card-img-top" alt="Логотип <?php echo $job['company']; ?>">
            <div class="card-body">
              <h5 class="card-title"><?php echo $job['position']; ?></h5>
              <h6 class="card-subtitle mb-2 text-muted"><?php echo $job['company']; ?></h6>
              <p class="card-text"><?php echo $job['dates']; ?></p>
              <p class="card-text"><?php echo $job['skills']; ?></p>
              <p class="card-text"><?php echo $job['responsibilities']; ?></p>
              <a href="<?php echo $job['website']; ?>" class="card-link"><?php echo $job['website']; ?></a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-PleXvJ8Fc/iWp73JHuaaegd1aaxjPLcLwRREml0DXVcJ9etv+8UTShOMr5u5y6ZF" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE2s+76LGs5K8aIjrVMNE" crossorigin="anonymous"></script>
</body>
</html>
