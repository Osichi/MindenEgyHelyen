<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{url('css/ettermek.css')}}">

  <title>Éttermek</title>
</head>

<body>
  @if (Session::has ('success'))
  <div class="alert alert-success" role="alert">
    {{Session::get ('success')}}
  </div>
  @elseif(Session::has('error'))
  <div class="alert alert-danger" role="alert">
    {{Session::get ('error')}}
  </div>
  @endif
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="/"><span class="text-success" id="MEH">MEH </span>Minden egy helyen</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/" onclick="scrollToWelcome()">Főoldal</a>
          </li>
          @if (Session::has('nev'))
          <li class="nav-item" style="color: red;">
            Üdv {{Session::get('nev')}}
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/profile">Profilom</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/feltoltes">Feltöltés</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/logout">Kijelentkezés</a>
          </li>
          @elseif (Session::has('admin'))
          <li class="nav-item">
            Üdv {{Session::get('admin')}}
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/logout">Kijelentkezés</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin">Admin panel</a>
          </li>
          @else
          <li class="nav-item active">
            <a class="nav-link" href="/login">Bejelentkezés</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/register">Regisztráció</a>
          </li>
          @endif
          <li class="nav-item active">
            <a class="nav-link" href="#team" onclick="scrollToRolunk()">Rólunk</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#contact" onclick="scrollTocontact()">Elérhetőségek</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="card__container">
      <article class="card__article">
        <img src="/imgs/center.jpg" alt="image" class="card__img">
        <div class="card__data">
          <span class="card__description">Vancourer hegyek, canada</span>
          <h2 class="card__title">Center Cafe & Bar</h2>
          <a href="#" class="card__button">Read more</a>
        </div>
      </article>

      <article class="card__article">
        <img src="/imgs/Rest.jpg" alt="image" class="card__img">
        <div class="card__data">
          <span class="card__description">leírás</span>
          <h2 class="card__title">Vitrin</h2>
          <a href="#" class="card__button">Read more</a>
        </div>
      </article>

      <article class="card__article">
        <img src="/imgs/fooldal2.webp" alt="image" class="card__img">
        <div class="card__data">
          <span class="card__description">Meg valami</span>
          <h2 class="card__title">Meg valami másik hely</h2>
          <a href="#" class="card__button">Read more</a>
        </div>
      </article>
    </div>
  </div>

</body>

</html>