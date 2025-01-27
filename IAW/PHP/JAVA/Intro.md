## While
    x=1
    While (x<10)
    {
      document.write(x)
      x=x+1
    }
## for
    for (let f=1;f>10;f++)
    {
      document.write(f+" ")
    }

## Function
    functin NombreFuncion(){
      document.write("BUENAS");
    }

    Nombrefuncion();
### Con parametros

    function Funcion2(Par1,Par2){
      var inicio;
      for (inicio=x1;inicio<=x2;inicio++){
          suma=suma+inicio;}
        return suma;
      }
    }
    #### LLAMADA

    var valor1,valor2
    valor1=promt("Dame valor1")
    valor1=parseInt(valor1)
    valor2=promt("Dame valor2")
    valor2=parseInt(valor2)
    Funcion2(valor1,valor2);

## Strings

let x = "casa";
let x = 'casa';

let Y = x.length sera = 4
let y = x.toUpperCase ---> Pasa a mayusculas
let y = x.toLowerCase ---> Pasa a minuscula
let y = x.substring(1,3) 3-1=2 = as

0 1 2 3
c a s a


## HTML DOM tree

#### Buscar elementos html
    
  getElementByID("idHTML")
  getElementsByTagName("MarcaHTML")
  getElementsByClassName("ClaseCSS")

    <p id =titulo>HOLA MUNDO
    script
      var x = document.getElementById("titulo")
      document.write("<p>" + "Texto del titulo es: " + x.innerHTML + "</p>")
    /script

# Eventos

## onclick
    <button onclick="funcion()">BOTON<button>
    <script>
    funcion(){
      COSAS
    }

##onmouseover onmouseout

    <td onmouseover="pintar(this)">
    function pintar(obj){
        blablabla
    }

## onchange

    funcion
    var x = cojo elemento por id
    x.value=x.value.toUpperCase
    input type=text i=algo onchange="funcion()" value="Dame tu nombre perro"

## getElementsByTagName(p)
Hace un array de todos los elementos que recoja del HTML

        var x = getElementsByTagName(p);    
        document.write= (x[0].innerHTML + "NOSEQUE");

## getElementsByClassName
  Hace un array con los elementos por su clase CSS

      <p class="Intro"> INTROOOOO
      <script>
          var y = document.getElementsByClassName("Intro)
          document.write y[0].innerHTML --> INTROOOOOO
          
##cambiar propiedades

            var x = getElementsByTagName(p);    
            x[0].style.color="red"; ---> HTML DOM styles
            x[0].align="right";



## document.write = pa escribir sin esto

    *boton con funcion onclick*
    <cosas html>
    funcion con getelement.inner="loquesea"
    <span id="demo"><span>

## formularios javascript

    function algo(){
        var x = document.form1.nombre.value
        alert('Has peusto el nombre' + x )
    }
    form name="form1"
        input type text name="nombre"
        input boton onclick=algo() value="confirmar"
    /form

## asignar evento dinamicamente

    documen.getelementbyid(BOTON).onclick=function(){displayDate()};
    function displayDate(){
        document.getelementbydid("demo").innerHTML=Date();
    }
    <p id=demo>

## radio botones / CHECKBOX

    NOTA:devuelve TRUE or FALSE
    
    funcion
    if document.form1.radiobotones[0].checked {
    blala
    }
    
    if document.form1.radiobotones[1].checked {
    otracosa
    }
    form name=form1

    input type=radio name=radiobotones>Sin estudios
    input type=radio name=radiobotones>Estudio
    input type=boton value=haceralgo onclick=funcion()
    
