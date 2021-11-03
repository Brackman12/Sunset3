<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/contacto.css') }}">
  
  <title>Sunset Event Coaching</title>
</head>
<body>
  <header>
    <section class="logo-container">
      <a href="./index.blade.php"><img src="{{ asset('images/assets/logo.png') }}" alt="Logo marca"></a>
    </section>
    <nav class="icons">
      <ol>
        <!-- <li><img src="{{ asset('images/assets/home.png') }}" alt="Página principal">
          <a href="./index.blade.php">Home</a>
        </li> -->
        <li><img src="{{ asset('images/assets/support.png') }}" alt="Servicios">
          <a href="./servicios.blade.php">Servicios</a>
        </li>
        <li><img src="{{ asset('images/assets/gallery.png') }}" alt="Glerías">
          <a href="./galeria.blade.php">Galería</a>
        </li>
        <li><img src="{{ asset('images/assets/call.png') }}" alt="Contacto">
          <a href="mailto:alejandro.camacho@alumnos.udg.mx">Contacto</a>
        </li>
      </ol>
    </nav>
  </header>

  <main>
    <section class="main-view">
      <div>
        <h1>Contacto</h1>
        <p>El mejor servicio y mobiliario para<br> tu evento</p>
      </div>
    </section>

    <section class="section-contenedor">
    <section class="main-formulario">
      <form class="main-form">
        <div>
          <input type="text" name="name" class="input_uno" placeholder="NOMBRE">
        </div>
        <div>
          <input type="email" name="name_dos" class="input_dos" placeholder="CORREO">
        </div>
          <textarea name="textarea" placeholder="MENSAJE" cols="50" rows="10" style="resize:none"></textarea>
      </form>
      <button type="button">Enviar</button>
    </section>

    <section class="main-info">
      <figure><img src="{{ asset('images/assets/logo.png') }}" alt="Logo marca"></figure>
      <section class="part-one">
        <p>Calle Flasa 1234, Zapopan, Jalisco C.P. 20012<br>
          T.3300224512 +59 8340125521</p>
          <a href="#">
            alejandro.camacho@alumnos.udg.mx
          </a>
      </section>
      <section>
        <ol class="lista-contacto">
          <li>
            <p>Si deseas hacer una cita o asistir a algun evento con gusto de esperamos, no olvides mencionarlo</p>
          </li>
          <li>
            <p>Claro que si se puede dar seguimiento a tu pedido, solo envia mensaje al ejecutivo</p>
          </li>
          <li>
            <p>Es el mejor lugar para tener servicios de calidad de foto y video</p>
          </li>
          <li>
            <p>Lo mejor de nuestros servicios es que cobramos lo justo</p>
          </li>
          <li>
            <p>Si comes comida chatarra debes hacer mucho ejercicio :)</p>
          </li>
        </ol>
      </section>
    </section>
  </section>
  <section class="mapa">
    <figure>
      <img src="{{ asset('images/assets/index/mapa.jpg') }}" alt="mapa">
    </figure>
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
            <li><img src="{{ asset('images/assets/support.png') }}" alt="Servicios">
              <a href="./servicios.blade.php">Servicios</a>
            </li>
            <li><img src="{{ asset('images/assets/gallery.png') }}" alt="Glerías">
              <a href="./galeria.blade.php">Galería</a>
            </li>
            <li><img src="{{ asset('images/assets/call.png') }}" alt="Contacto">
              <a href="mailto:alejandro.camacho@alumnos.udg.mx">Contacto</a>
            </li>
          </ol>
        </nav>
      </article>
    </section>
  </footer>
  
</body>
</html>