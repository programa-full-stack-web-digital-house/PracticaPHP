<!DOCTYPE html>
<html lang="es" dir="ltr">
<link rel="stylesheet" href="estilos_php.css">
  <head>
    <meta charset="utf-8">
    <title>Ejercicios Clase 02 - PHP</title>
  </head>
  <body>
    <h1>Clase PHP - Clase 2</h1>

      <h2>Punto 1</h2>

      <p>Definir dos variable con números y compararlos con un if para decidir cuál número es mayor e imprimir “El número mayor es N” donde N sea el valor de la variable que resultó ser mayor, y un else para cubrir el caso inverso.</p>
        <?php
        $num1=10;
        $num2=20;
        if ($num1>$num2) {
          echo "El numero mayor es $num1";
        }
          else {
            echo "El numero mayor es $num2";
        }
         ?>

      <h2>Punto 2</h2>

      <p>Utilizando la función propia de PHP rand(x,y), donde “x” es el número mínimo e “y” el número máximo, generar un número aleatorio entre 1 y 5, asignarlo a una variable e imprimir la variable si y sólo si el número generado es 3 o 5.</p>
        <?php
        $loteria= rand(1, 5);
        echo "El numero aleatorio es $loteria <br>";
        if ($loteria==3 || $loteria==5) {
          echo "El numero ganador es $loteria";
        }
        ?>

      <h2>Punto 3</h2>

      <p>Utilizando la variable del ejercicio anterior, imprimir “El número NO es 3” en el caso que sea verdad esa premisa. En el caso que sí lo sea que simplemente se imprima el número 3.</p>
        <?php
        if ($loteria!=3) {
          echo "El numero aleatorio NO ES UN 3";
        }
          else {
            echo "El numero es $loteria";
          }
         ?>

      <h2>Punto 4</h2>

      <p>Generar un número entre 1 y 100, controlar si es mayor que 50. En el caso que sea verdadero, devolver “El número es mayor a 50”, en el caso que sea falso: “El número es menor a 50”. ¿Qué pasa si el número es 50?</p>
        <?php
        $sorteo=rand(1, 100);
          if ($sorteo>50) {
            echo "El numero es mayor que 50";
          }
          else {
            echo "El numero es menor que 50";
          }
         ?>
      <h2>Punto 5</h2>

      <p>Generar dos variables, una $nombreDeUsuario y $ContraseniaDeUsuario, ambos strings. Validar que el usuario corresponda a "admin" y la contraseña a "1234". De ser asi, que imprima "Bienvenido!", sino, que imprima que hay un error en el login.</p>
        <?php
        $nombreDeUsuario="admin";
        $ContraseniaDeUsuario=1234;
        echo "Login: $nombreDeUsuario y $ContraseniaDeUsuario <br>";
          if ($nombreDeUsuario=="admin" && $ContraseniaDeUsuario==1234) {
            echo "MENSAJE: Bienvenido!! <br><br>";
          }
          else {
            echo "Hay un error en el login <br><br>";
          }
        $nombreDeUsuario="admin";
        $ContraseniaDeUsuario=123;
        echo "Login: $nombreDeUsuario y $ContraseniaDeUsuario <br>";
          if ($nombreDeUsuario=="admin" && $ContraseniaDeUsuario==1234) {
            echo "Bienvenido!! <br><br>";
          }
          else {
            echo "MENSAJE: Hay un error en el login <br><br>";
          }
         ?>
      <ol>
        <li>Modificar al ejercicio anterior, y agregar los "else" necesarios para poder identificar si el error esta en el usuario, la contraseña, o si alguno de los campos está vacío aún.</li><br>
          <?php
          $nombreDeUsuario="ad";
          $ContraseniaDeUsuario=1234;
          echo "Login: $nombreDeUsuario y $ContraseniaDeUsuario <br>";
            if ($nombreDeUsuario=="admin" && $ContraseniaDeUsuario==1234) {
              echo "MENSAJE: Bienvenido!! <br><br>";
            }
            else if ($nombreDeUsuario!="admin") {
                echo "Hay un error en el 'nombreDeUsuario' <br><br>";}
            else if ($ContraseniaDeUsuario!=1234) {
                echo "Hay un error en el 'ContraseniaDeUsuario' <br><br>";
              }
            $nombreDeUsuario="admin";
            $ContraseniaDeUsuario=123;
            echo "Login: $nombreDeUsuario y $ContraseniaDeUsuario <br>";
              if ($nombreDeUsuario=="admin" && $ContraseniaDeUsuario==1234) {
                echo "MENSAJE: Bienvenido!! <br><br>";
              }
              else {
                if ($nombreDeUsuario!="admin") {
                  echo "Hay un error en el 'nombreDeUsuario' <br><br>";}
                if ($ContraseniaDeUsuario!=1234) {
                  echo "Hay un error en el 'ContraseniaDeUsuario' <br><br>";
                }
              }
          ?>
      </ol>

      <h2>Punto 6</h2>

      <p>Tendremos 3 variables: edad (un número), casado (un booleano) y sexo (string que puede ser “Masculino”, “Femenino” u “Otro”). Si la persona es mayor a 18 años y no está casado se imprimirá el mensaje “Bienvenido”.</p>
        <?php
        $edad=43;
        $casado=true;
        $sexo="Masculino";
        echo "Edad: $edad, Estado Civil: $casado, Sexo: $sexo <br><br>";
          if ($edad>18 && $casado==false) {
            echo "BIENVENIDO";
          }
         ?>
      <ol>
        <li>Modificaremos al ejercicio anterior para que también imprima bienvenido si el sexo es “Otro” sin importar el resto de las condiciones.</li><br>
        <?php
        $edad=43;
        $casado=true;
        $sexo="otro";
        echo "Edad: $edad, Estado Civil: $casado, Sexo: $sexo <br><br>";
          if ($sexo="otro") {
            echo "BIENVENIDO";
          }
         ?>
      </ol>

      <h2>Punto 7</h2>

      <p>Definir una variable que se llame cantidadDeAlumnos que contenga un número. Luego, escribir el siguiente código: (sin copiar y pegar!!)</p>
      <pre>if ($cantidadDeAlumnos) {
      echo “true”;
      }
      else {
      echo “false”;
      }</pre>
        <?php
          $cantidadDeAlumnos=20;
          echo "cantidad de alumnos: $cantidadDeAlumnos <br>";
         ?>
      <ol>
        <li>¿Qué termina imprimiendo?</li><br>
        <?php

        if ($cantidadDeAlumnos) {
          echo "true <br><br>";
        }
        else {
          echo "false <br><br>";
        }
         ?>
        <li>Probar con los valores -100, -1, 0, 1 y 100 para cantidadDeAlumnos</li><br>
        <?php
          $cantidadDeAlumnos=-100;
          echo "cantidad de alumnos: $cantidadDeAlumnos <br>";
          if ($cantidadDeAlumnos) {
            echo "true <br><br>";
          }
          else {
            echo "false <br><br>";
          }
          $cantidadDeAlumnos=-1;
          echo "cantidad de alumnos: $cantidadDeAlumnos <br>";
          if ($cantidadDeAlumnos) {
            echo "true <br><br>";
          }
          else {
            echo "false <br><br>";
          }
          $cantidadDeAlumnos=0;
          echo "cantidad de alumnos: $cantidadDeAlumnos <br>";
          if ($cantidadDeAlumnos) {
            echo "true <br><br>";
          }
          else {
            echo "false <br><br>";
          }
          $cantidadDeAlumnos=100;
          echo "cantidad de alumnos: $cantidadDeAlumnos <br>";
          if ($cantidadDeAlumnos) {
            echo "true <br><br>";
          }
          else {
            echo "false <br><br>";
          }
         ?>
      </ol>

      <h2>Punto 8</h2>

      <p>Definir una variable $numero con un número. Imprimir “El número es par” si lo es o “El número es impar” si no lo es. Se pide resolver este ejercicio con un if ternario (operadores  ?  :)</p>
        <?php
        $numero=7;
        echo "Con el numero $numero <br>";
        $resultado=$numero%2==0 ? "El numero es par <br><br>" : "El numero es impar <br><br>";
        echo "$resultado";
        $numero=10;
        echo "Con el numero $numero <br>";
        $resultado=$numero%2==0 ? "El numero es par<br><br>" : "El numero es impar<br><br>";
        echo "$resultado";
        ?>

      <h2>Punto 9</h2>

      <p>Crear una variable $nota con un valor del 1 al 10. Utilizando un switch generar la siguiente lógica:</p>
        <?php
        $nota=7;
        echo "La nota es $nota";
         ?>
      <ol>
        <li>Si la nota es menor a 4 imprimir “desaprobado”</li>
        <li>Si la nota es 4 o 5 imprimir “zafamos”</li>
        <li>Si la nota este entre 6 y 8 imprimir “Bien!!!”</li>
        <li>Si la nota es un 9 imprimir “MUY bien!!”</li>
        <li>Si la nota es un 10 imprimir “Excelente!!!!!”</li><br>
          <?php
          switch ($nota) {
            case ($nota<4):
              echo "desaprobado";
              break;
            case ($nota==4):
              echo "zafamos";
              break;
            case ($nota==5):
              echo "zafamos";
              break;
            case ($nota==6):
              echo "Bien!!";
              break;
            case ($nota==7):
              echo "Bien!!";
              break;
            case ($nota==8):
              echo "Bien!!";
              break;
            case ($nota==9):
              echo "Muy bien";
            case ($nota==10):
              echo "Excelente";
              break;
            default:
              echo "No hiciste la prueba";
              break;
            }
           ?>
      </ol>

      <h2>Punto 10</h2>

      <p>Agregar al switch anterior un mensaje en caso de que la nota no sea un número del 1 al 10 diciendo “El número no es válido”. Punto extra: ¿Probaste con números negativos?</p>
      <?php
      $nota="11";
      echo "La nota es $nota <br>";
      switch ($nota) {
        case ($nota<4):
          echo "desaprobado";
          break;
        case ($nota==4):
          echo "zafamos";
          break;
        case ($nota==5):
          echo "zafamos";
          break;
        case ($nota==6):
          echo "Bien!!";
          break;
        case ($nota==7):
          echo "Bien!!";
          break;
        case ($nota==8):
          echo "Bien!!";
          break;
        case ($nota==9):
          echo "Muy bien";
        case ($nota==10):
          echo "Excelente";
          break;
        // case ($nota<1):
        //   echo "El numero no es valido";
        // case ($nota>10):
        //   echo "El numero no es valido";
        default:
          echo "El numero no es valido";
          break;
        }
       ?>
  </body>
</html>
