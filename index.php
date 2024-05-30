<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="css/stem.css"/>

    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script src="js/codigo.js"></script>
</head>
<body>
  <section class="wrapper">
    <header>
      <h1 class="logo"><a href="stem.html">CiTIM</a></h1>
      
    </header>
    <section id="contenedor">
      <section  class="problema">
        <h2>Problema: Calcula la energía cinética de un asteroide que tiene un diámetro de 1 km y una
            densidad media de 400 kg m–3 si viaja a una velocidad de 20 km s–1
            </h2>
        <p>Descripción:</p>
        <p>Se debe calcular la energía cinética de un asteroide que tiene un diámetro de 1 km y una
          densidad media de 400 kg m–3 si viaja a una velocidad de 20 km s–1. <br>
        </p>
      </section>
      <section  class="esquemaProblema">
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
        <button onclick="calcula_densidad();">Presiona para calcular</button>
      </section>
        <?php
    function calcula_densidad(){ 
    var radio= 500;
    var volumen= (4/3)*Math.PI*radio*radio*radio;
    var densidad= 400; 
    var masa= volumen * densidad;
    var velocidad = 2000; 
    var EC = masa*(1/2)*(velocidad*velocidad); 
    var d=document.getElementById("resultadoA");
    d.innerHTML= EC +' metro';
    }
    
?>
      <section class="resultado">
        <h2>Resultado:</h2>
        <div id="resultadoA"></div>
      </section>
    </section>
    <footer class="pie">
     Creative Commons versión 4.0 SciSoft 2024
    </footer>
  </section>
</body>
</html>
