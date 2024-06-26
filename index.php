<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="css/stem.css"/>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
  <section class="wrapper">
    <header>
      <h1 class="logo"><a href="stem.php">CiTIM</a></h1>
    </header>
    <section id="contenedor">
      <section class="problema">
        <h2>Problema: Calcula la energía cinética de un asteroide que tiene un diámetro de 1 km y una
            densidad media de 400 kg m–3 si viaja a una velocidad de 20 km s–1
        </h2>
        <p>Descripción:</p>
        <p>Se debe calcular la energía cinética de un asteroide que tiene un diámetro de 1 km y una
          densidad media de 400 kg m–3 si viaja a una velocidad de 20 km s–1. <br>
        </p>
      </section>
      <section class="esquemaProblema">
        <h2>Esquema</h2>
        <center>
        <img class="imgProblema" src="images/tipos.JPEG">
        </center>
      </section>
      <section class="formulas">
        <h2>Fórmulas</h2>
        Volumen=(4/3)pi*r*r*r <br>
        EC = masa*(1/2)*(velocidad*velocidad);
      </section>
      <section class="datos">
        <h2>Datos:</h2>
        r= 500 m. <br>  
        d= 400 Kg. <br>
        v= 2000 m.
      </section>
      <section class="calculos">
        <h2>Solución</h2>
        <p>a)La energia sinetica de la Tierra es:<br>
        Energia cinetica = 418879020478639100 metros </p>
        <form method="post">
          <button type="submit" name="calcular">Presiona para calcular</button>
        </form>
      </section>

      <section class="resultado">
        <h2>Resultado:</h2>
        <div id="resultadoA">
          <?php
          if (isset($_POST['calcular'])) {
              function calcula_densidad() {
                  $radio = 500;
                  $volumen = (4/3) * pi() * pow($radio, 3);
                  $densidad = 400;
                  $masa = $volumen * $densidad;
                  $velocidad = 2000;
                  $EC = $masa * (1/2) * pow($velocidad, 2);
                  return $EC . ' metro';
              }
              echo calcula_densidad();
          }
          ?>
        </div>
      </section>
    </section>
    <footer class="pie">
     Creative Commons versión 4.0 SciSoft 2024
    </footer>
  </section>
</body>
</html>
