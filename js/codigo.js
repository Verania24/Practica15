

            

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
    

