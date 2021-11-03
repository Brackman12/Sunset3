<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/galeria.css') }}">
  <title>Sunset Event Coaching</title>
</head>

<body>
  <header>
    <section class="logo-container">
      <a href="./index.blade.php"><img src="{{ asset('images/assets/logo.png') }}" alt="Logo marca"></a>
    </section>
    <nav class="icons">
      <ol>
        <li><img src="{{ asset('images/assets/home.png') }}" alt="Página principal">
          <a href="./index.blade.php">Home</a>
        </li>
        <li><img src="{{ asset('images/assets/support.png') }}" alt="Servicios">
          <a href="./servicios.blade.php">Servicios</a>
        </li>
        <!-- <li><img src="{{ asset('images/assets/gallery.png') }}" alt="Glerías">
          <a href="./galeria.blade.php">Galería</a>
        </li> -->
        <li><img src="{{ asset('images/assets/call.png') }}" alt="Contacto">
          <a href="./contacto.blade.php">Contacto</a>
        </li>
      </ol>
    </nav>
  </header>

  <main>
    <section class="main-view">
      <div>
        <h1>Galeria</h1>
        <p>El mejor servicio y mobiliario para<br> tu evento</p>
      </div>
    </section>

    <section class="links">
      <p><a href="#">Todos</a><a href="#">Iluminacion</a><a href="#">Catering</a><a href="#">Vajilla</a><a href="#">Cristaleria</a><a href="#">Decoracion</a><a href="#">Ambientacion</a><a href="#">Floristeria</a><a href="#">Meseros</a><a href="#">Bartender</a><a href="#">Manteleria</a><a href="#">Mobiliario</a></p>
    </section>

    <section class="main-table">
      <table>
        <tr>
          <th rowspan="2" class="img1"></th>
          <th class="img2"></th>
        </tr>
        <tr>
          <th class="img5"></th>
        </tr>
      </table>
      <table>
        <tr>
          <th rowspan="2" class="img3"></th>
          <th class="img4"></th>
        </tr>
        <tr>
          <th class="img6"></th>
        </tr>
      </table>
    </section>
  </main>

  <footer>
    <section>
      <article>
        <p class="copy">©2021 SUNSET event coaching.</p>
      </article>
      <article >
        <img src="{{ asset('images/assets/logo.png') }}" alt="Logo del sitio web" class="logo">
      </article>
      <article>
        <nav class="icon-footer">
          <ol>
            <li><img src="{{ asset('images/assets/home.png') }}" alt="Servicios">
              <a href="./index.blade.php">Home</a>
            </li>
            <li><img src="{{ asset('images/assets/support.png') }}" alt="Glerías">
              <a href="./servicios.blade.php">Servicios</a>
            </li>
            <li><img src="{{ asset('images/assets/call.png') }}" alt="Contacto">
              <a href="./contacto.blade.php">Contacto</a>
            </li>
          </ol>
        </nav>
      </article>
    </section>
  </footer>
  
</body>
</html>