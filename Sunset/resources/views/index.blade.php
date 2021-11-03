<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
  <title>Sunset Event Coaching</title>
</head>
<body>
  <header>
    <section class="logo-container">
      <a href="./index.html"><img src="{{ asset('images/assets/logo.png') }}" alt="Logo marca"></a>
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
          <a href="./contacto.blade.php">Contacto</a>
        </li>
      </ol>
    </nav>
  </header>

  <main>
    <section class="main-view">
      <div>
        <h1>Sunset<br> Event</h1>
        <p>El mejor servicio y mobiliario para<br> tu evento</p>
      </div>
    </section>

    <section>
      <section class="main__welcome">
        <figure></figure>
        <div>
          <h2>Bienvenido a <span>Sunset Event</span></h2>
          <p>Gracias a la confianza y preferencia de nuestros clientes cautivos y potenciales, así como la dedicación día a día hemos logrado posicionarnos en el mercado como una empresa de alta confianza y desarrolladora de eventos integrales de éxito a detalle, cada producción evoluciona con un espirito único y vanguardista la cual es llevada de la mano con la finalidad de maximizar a nuestros clientes la calidad que nos confían para su próxima experiencia.</p>
        </div>
      </section>

      <section class="aboutUs">
        <article class="aboutUs__component">
          <p class="blueText">Misión</p>
          <p class="component--align">Gracias a la confianza y preferencia de nuestros clientes cautivos potenciales, así como la dedicación día a día hemos logrado posicionarnos en el mercado como una empresa de alta confianza y desarrolladora de eventos integrales de éxito a detalle.</p>
        </article>
        <article class="aboutUs__component component__middle">
          <p class="blueText">Visión</p>
          <p class="component--align">Gracias a la confianza y preferencia de nuestros clientes cautivos potenciales, así como la dedicación día a día hemos logrado posicionarnos en el mercado como una empresa de alta confianza y desarrolladora de eventos integrales de éxito a detalle.</p>
        </article>
        <article class="aboutUs__component">
          <p class="blueText">Valores</p>
          <p class="component--align">Gracias a la confianza y preferencia de nuestros clientes cautivos potenciales, así como la dedicación día a día hemos logrado posicionarnos en el mercado como una empresa de alta confianza y desarrolladora de eventos integrales de éxito a detalle.</p>
        </article>
      </section>

      <section id="services">
        <h2>Servicios</h2>
          <section><figure>
            <img class="imagen-servicios" src="{{ asset('images/assets/index/platillo-verde.jpg') }} " alt="Platillo 1">
            <img src=" {{ asset('images/assets/index/platillo-rico.jpg') }}" alt="Platoillo 2">
          </figure>
          <figure>
            <img src="{{ asset('images/assets/index/platillo1.jpg') }}" alt="Platillo3">
            <!-- <img src=" {{ asset('images/assets/index/platillo2.jpg') }}" alt="Imagen 4"> -->
            <section class="mascara">
              <div><p><span>Audio, Video & D.J</span><br>Contamos con extensa variedad de sillas, <br>mesas y manteleria</p></div>
            </section>
          </figure>
        </section>
      </section>
    </section>
    <h2>Clientes</h2>
    <section class="clientes">
      <section class="clientes2">
        <article>
          <p class="clien">Emprendedora dedicada a la fabricacion de productos de salud utilizando como materia prima el Sargazo, ademas que es presidenta de la fundacion "Hagamos por un Mexico Mejor". En el 2019 recibio un reconocimiento por ser una de las mejores 3 emprendedoras de Mexico</p>
          
          <figure class="segunda"> <img src="{{ asset('images/assets/index/cliente1.jpg') }}" alt="Primer cliente">
          <p><span>Martha R. Hozlow</span><br>Emprendedora 2019</p></figure>
        </article>
        <article>
          <p class="clien">Daniel Rippers es un empresario y miembro honorario de la Fundacion "Amigos del Cultivo" fue nombrado el Empresario Del Año tras ganar el primer lugar como la mejor cosecha de maiz en la region de Sienega</p>
         <figure class="segunda"> 
            <img src="{{ asset('images/assets/index/cliente2.jpg') }}" alt="Segundo cliente">
          <p><span>Daniel H. Rippers</span><br>Empresario 2020</p></figure>
        </article>
      </section>
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
              <a href="./contacto.blade.php">Contacto</a>
            </li>
          </ol>
        </nav>
      </article>
    </section>
  </footer>
  
</body>
</html>