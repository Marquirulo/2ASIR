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

## Eventos

    <button onclick="funcion()">BOTON<button>
    <script>
    funcion(){
      COSAS
    }

## getElementsByTagName(p)
  Hace un array de todos los elementos que recoja del HTML
  
    var x = getElementsByTagName(p);    
    document.write= (x[0].innerHTML + "NOSEQUE");
