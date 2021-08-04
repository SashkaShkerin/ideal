<?php
use Illuminate\Support\Facades\App;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ideal - {{ __('main.consulting.company') }} </title>
  <meta name="description" content="{{ __('main.banner.text') }}"> 
  <link rel="shortcut icon" href="/favicon.svg" type="image/x-icon">

  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="css/style.css?v=<?= filemtime('css/style.css') ?>">
  <link rel="stylesheet" href="css/home.css?v=<?= filemtime('css/home.css') ?>">
</head>
<body class="body" >
  <div class="d-flex justify-content-center">
    <div class="conteiner-width scroll">

      <div class="d-flex block-space" style="min-height: 60px;">
        <div class="col-6">
          <a href="/" class='logotype'>
            <img src="images/logotype.png" alt="!deal">
          </a>
        </div>
        <div class="col-6 head-icon">
          <div class="lang-wrap">
            <a href="/lang/ru">RU</a>
            @if(App::isLocale('en'))
            <img src="images/switch.png" alt="" style="transform: rotate(180deg)">
            @else
            <img src="images/switch.png" alt="">
            @endif
            
            <a href="/lang/en">EN</a>
          </div>
          <a href="tel:+79857277767">
            <img src="images/phone.svg" alt="phone">
          </a>
          <a href="mailto:ideal@idealconsult.ru" class="ms-4">
            <img src="images/email.svg" alt="email">
          </a>
        </div>
      </div>


      <div class="banner-block col-12 block-space">
        <h1 class="banner-title">ideal</h1>
        <p class='banner-text line-after'>{{ __('main.banner.text') }}</p>
        <div class="targets_wrap ">
          <div class="target_wrap active">
            <div class="target_wrap-title">
              <div class="target_wrap-icon"><img src="images/car.svg" alt=""></div>
              {{ __('main.mission') }}
            </div>
            <div class="target_wrap-text"><div> {{ __('main.mission.text') }}</div></div>
          </div>
          <div class="target_wrap">
            <div class="target_wrap-title">
              <div class="target_wrap-icon"><img src="images/cel.svg" alt=""></div>
              {{ __('main.target') }}
            </div>
            <div class="target_wrap-text"><div> {{ __('main.target.text') }}</div></div>
          </div>
          <div class="target_wrap">
            <div class="target_wrap-title">
              <div class="target_wrap-icon"><img src="images/pre.png" alt=""></div>
              {{ __('main.advantages') }}
            </div>
            <div class="target_wrap-text">
              <div>
                   <?= __('main.advantages.text') ?>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 block-space">
        <h2 class="title title-mb line-before">{{ __('main.services') }} </h2>
        <div class="services-icons">
          <div data-for="audit" class="services-icon active"><img src="images/services/audit.svg"></div>
          <div data-for="consalding" class="services-icon"><img src="images/services/konsalding.svg"></div>
          <div data-for="upravlenie" class="services-icon"><img src="images/services/upravlenie.svg"></div>
          <div data-for="hr" class="services-icon"><img src="images/services/hr.svg"></div>
          <div data-for="tender" class="services-icon"><img src="images/services/tender.svg"></div>
          <div data-for="uslugi" class="services-icon"><img src="images/services/uslugi.svg"></div>
        </div>
        <div class='services-text-wrap'>
          <div id="audit" class="services-text-block active">
            <h3 class="title-m ms-4">{{ __('main.audit') }} </h3>
            <div class="services-text block-opacity d-flex">
            	<?=  __('main.audit.text') ?>
              
            </div>
          </div>

          <div id="consalding" class="services-text-block">
            <h3 class="title-m ms-4">{{ __('main.consulting') }}</h3>
            <div class="services-text block-opacity d-flex">
<?=  __('main.consulting.text') ?>
            </div>
          </div>

          <div id="upravlenie" class="services-text-block">
            <h3 class="title-m ms-4">{{ __('main.project.management') }}</h3>
            <div class="services-text block-opacity d-flex">
<?=  __('main.project.management.text') ?>
            </div>
          </div>

          <div id="hr" class="services-text-block">
            <h3 class="title-m ms-4">{{ __('main.hr') }}</h3>
            <div class="services-text block-opacity d-flex">
<?=  __('main.hr.text') ?>
            </div>
          </div>

          <div id="tender" class="services-text-block">
            <h3 class="title-m ms-4">{{ __('main.tenders') }}</h3>
            <div class="services-text block-opacity d-flex">
<?=  __('main.tenders.text') ?>
            </div>
          </div>

          <div id="uslugi" class="services-text-block">
            <h3 class="title-m ms-4">{{ __('main.services') }}</h3>
            <div class="services-text block-opacity d-flex">
<?=  __('main.services.text') ?>
            </div>
          </div>

        </div>
      </div>

      <div class="col-12 block-space d-flex justify-content-center">
        <button id="popup" class="brand-button">{{ __('main.consultation') }}</button>
      </div>

      <div class="popup-bg"></div>
      <div class="popup">
        <div class="d-flex">
          <form method='post' action="/send_consultation" class="col-12 col-xl-7 justify-content-center">
          	@csrf
            <textarea class="popup-input mb-3" name="messange" rows="8" cols="80" placeholder="{{ __('main.messange') }}">
{{ __('main.messange.text') }}</textarea>
            <input class="popup-input mb-3" type="text" name="name" placeholder="{{ __('main.name') }}">
            <input class="popup-input mb-3" type="tel" name="phone"  placeholder="{{ __('main.phone') }}">
            <div class="policy mb-3"><?= __('main.policy_text')?></div>
            <button class="popup-button">{{ __('main.send') }}</button>
          </form>
          <div class="col-xl-5 d-none d-xl-flex justify-content-end">
          	@if(App::isLocale('en'))
          	<img class="popup-img" src="images/iphone_en.png" alt="">
          	@else
            <img class="popup-img" src="images/iphone.png" alt="">
          	@endif
          </div>
        </div>
      </div>


      <div class="col-12 block-space">
        <h2 class="title title-mb line-before">{{ __('main.projects') }}</h2>
        <div class='project-block block-opacity d-flex justify-content-around align-items-center flex-wrap' style="padding: 50px 40px">
            <img src="images/project/luis.png" alt="Luist">
            <img src="images/project/lamoda.png" alt="Luist">
            <img src="images/project/marka.png" alt="Marka">
            <img src="images/project/santeh.png" alt="Santeh Opttorg">
            <img src="images/project/postavki.png" alt="Stolichnie Postavki">
        </div>
      </div>


      <div class="col-12">
        <div class="contact-block ">
          <h2 class="title line-before">{{ __('main.contacts') }}</h2>
          <div class="social d-flex align-items-center justify-content-around" style="">
            <a href="https://api.whatsapp.com/send/?phone=79857277767">
              <img src="images/whatsapp.svg" alt="phone">
            </a>
            <a href="https://t.me/idealconsultru">
              <img src="images/telegram.svg" alt="phone">
            </a>
            <a href="https://www.instagram.com/idealconsult.ru">
              <img src="images/instagram.svg" alt="phone">
            </a>
          </div>
          <div class="contact-mail">
            <a href="mailto:ideal@idealconsult.ru" >
              ideal@idealconsult.ru
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>





<script>

  document.querySelectorAll('.target_wrap').forEach(function (targetWrap) {
      targetWrap.querySelector('.target_wrap-title').addEventListener('click', function () {
        document.querySelectorAll('.target_wrap').forEach(function (targetwrap) {
          targetwrap.classList.remove('active');
        });

        targetWrap.classList.add('active');
      });
    });

  document.querySelectorAll('.services-icon').forEach(function (icon) {
    icon.addEventListener('click', function () {
      document.querySelectorAll('.services-icon').forEach(function (icons) {
        icons.classList.remove('active');
        document.querySelector('#' + icons.getAttribute('data-for')).classList.remove('active');
      });

      this.classList.add('active');
      document.querySelector('#' + this.getAttribute('data-for')).classList.add('active');
    });
  });


  document.querySelector('#popup').addEventListener('click', function () {
    document.querySelector('.popup-bg').classList.add('active');
    document.querySelector('.popup').classList.add('active');
  });

  document.querySelector('.popup-bg').addEventListener('click', function () {
    this.classList.remove('active');
    document.querySelector('.popup').classList.remove('active');
  });
</script>



</body>
</html>
