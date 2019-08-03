<!DOCTYPE html>
<html lang="es" dir="ltr">
<link rel="stylesheet" href="estilos_php.css">
  <head>
    <meta charset="utf-8">
    <title>Ejercicios Clase 01 - PHP</title>
  </head>
  <body>
    <h1>Clase PHP - Clase 1</h1>
      <h2>Punto 1</h2>
        <p>Crear las siguientes variables y mostrarlas utilizando echo y var_dump:</p>
        <ol type="a">
          <li>Una variable con un número entero.</li>
          <li>Una variable con un número decimal.</li>
          <li>Una variable con una cadena, utilizando comillas simples.</li>
          <li>Una variable con una cadena, utilizando comillas dobles.</li>
          <li>A la variable del <b>punto a</b>, asignarle una cadena de caracteres.</li>
          <li>A la variable del <b>punto c</b>, asignarle un número decimal.</li>
          <li>¿Qué sucede con el tipo de dato de las variables del <b>punto e</b> y <b>punto f</b>?</li>
          <li>¿Qué sucede si a la variable del <b>punto a</b> le asignamos otro valor numérico, pero encerrado entre comillas?</li>
        </ol>
        <h3>Respuestas a) b) c) d) e)</h3>
          <?php
          $var1=43;
          $var2=90.5;
          $var3='Eric';
          $var4="MENA";
            echo "$var1, $var2, $var3, $var4";
            echo "<pre>";
            var_dump($var1, $var2, $var3, $var4);
            echo "</pre>";
          ?>
        <h3>Respuestas f) g)</h3>
          <?php
          $var1="cuarenta y tres";
          $var3=0.7;
            echo "$var1, $var2, $var3, $var4";
            echo "<pre>";
            var_dump($var1, $var2, $var3, $var4);
            echo "</pre>";
          ?>
        <h3>Respuestas h)</h3>
          <?php
          $var1="40";
            echo $var1;
            echo "<pre>";
            var_dump($var1);
            echo "</pre>";
          ?>
      <h2>Punto 2</h2>
        <p>En base a la frase “Tres tristes tigres tragan trigo en un trigal”, crear una variable por cada palabra, donde el nombre de cada variable indique la posición de la palabra en la frase.</p>
        <?php
          $var1="tres";
          $var2="tristes";
          $var3="tigres";
          $var4="tragaron";
          $var5="trigo";
          $var6="en";
          $var7="un";
          $var8="trigal";
            echo "<pre>";
            var_dump($var1, $var2, $var3, $var4, $var5, $var6, $var7, $var8);
            echo "</pre>";
            echo "$var1 $var2 $var3 $var4 $var5 $var6 $var7 $var8";
        ?>
      <h2>Punto 3</h2>
        <p>Ejecutar el código del archivo ejercicio3.php. Reemplazar en la llamada a la función tipoDato(dato) el parámetro "dato" por las distintas variables declaradas en nuestro archivo. Observar si el tipo de dato devuelve true o false.</p>

        <?php
        $variable01 = true;
        $variable02 = false; //falso
        $variable03 = 0; //falso
        $variable04 = 1;
        $variable05 = 6;
        $variable06 = ''; //falso
        $variable07 = "3";
        $variable08 = "true";
        $variable09 = 'false';
        $variable10 = null; //falso

        function tipoDato($varN)
        {
            if ( $varN == true )
            {
                echo 'el valor ' . $varN . ' es verdadero.';
            }
            else
            {
                echo 'el valor ' . $varN . ' es falso.';
            }
        }
        tipoDato($variable06);
        ?>
      <h2>Punto 4</h2>
        <p>Crear un array numérico con 5 strings de animales diferentes. Luego de esto, ejecutar un var_dump para ver los resultados.</p>
          <?php
           $animales=[];
           $animales=["Leon", "Tigre", "Leopardo","Pantera", "Gato"];
             echo "<pre>";
             var_dump($animales);
             echo "</pre>";
          ?>
        <ol>Agregar 2 nuevos animales al final del array, y ejecutar otro var_dump para ver los resultados.</ol>
          <?php
           $animales[]="Jabalí";
           $animales[]="Hiena";
             echo "<pre>";
             var_dump($animales);
             echo "</pre>";
          ?>
        <ol>Imprimimos la siguiente oración “Me gustan los animales: animal1, animal2, ...” con los 7 animales que declaramos.</ol>
        <br>
          <?php
            echo "Me gustan los animales: $animales[0], $animales[1], $animales[2], $animales[3], $animales[4], $animales[5] y la $animales[6]";

          ?>
        <ol>Reemplazar el primer animal por uno nuevo, e imprimir el resultado.</ol>
          <?php
          $animales[0]="JIRAFA";
            echo "<pre>";
            var_dump($animales);
            echo "</pre>";
          ?>
        <ol>Agregar un nuevo animal en la posición 100, e imprimir el resultado.</ol>
          <?php
          $animales[100]="MONO";
            echo"<br>";
            echo "<pre>";
            var_dump($animales);
            echo "</pre>";
          ?>
        <ol>Agregar un nuevo animal en la posición 16, e imprimir el resultado</ol>
          <?php
          $animales[16]="HIPOPOTAMO";
            echo "<pre>";
            var_dump($animales);
            echo "</pre>";
          ?>
      <h2>Punto 5</h2>
      <p>Crear un array asociativo que contenga las siguientes propiedades de un auto: Marca, Modelo, Color, Año, y Patente. Luego de esto, ejecutar un var_dump para ver los resultados.</p>
        <?php
        $miAuto=[
          "Marca"=>"Renault",
          "Modelo"=>"Kangoo",
          "Color"=>"Gris Plata",
          "Año"=>2014,
          "Patente"=>"OBO378"
        ];
          echo "<pre>";
          var_dump($miAuto);
          echo "</pre>";
        ?>
      <ol>
        Agregar el nombre del <b>dueño</b> en la <b>posición 0</b> del array, e imprimir el resultado.
      </ol>
        <?php
        $miAuto[0]="Eric MENA";
          echo "$miAuto[0]";
          echo "<pre>";
          var_dump($miAuto);
          echo "</pre>";
        ?>
      <ol>
        Agregar la empresa aseguradora en la <b>posición 14</b>, e imprimir el resultado.
      </ol>
        <?php
        $miAuto[14]="Sancor Seguros";
          echo "$miAuto[14]";
          echo "<pre>";
          var_dump($miAuto);
          echo "</pre>";
        ?>
      <ol>
        Agregar el número de la póliza de seguro en la posición <b>“poliza”</b>, e imprimir el resultado.
      </ol>
        <?php
          $miAuto["Poliza"]=8474618;
            echo "$miAuto[Poliza]";
            echo "<pre>";
            var_dump($miAuto);
            echo "</pre>";
         ?>
      <ol>
        Modificar el número de <b>patente</b>, e imprimir el resultado.
      </ol>
        <?php
        $miAuto["Patente"]="ABA378";
        echo "$miAuto[Patente]";
        echo "<pre>";
        var_dump($miAuto);
        echo "</pre>";
         ?>
      <ol>
        Modificar el nombre del <b>dueño</b>, e imprimir el resultado.
      </ol>
        <?php
        $miAuto[0]="Raquel GALAZ";
          echo "$miAuto[0]";
          echo "<pre>";
          var_dump($miAuto);
          echo "</pre>";
         ?>
      <h2>Punto 6</h2>
        <p>Declarar la variable <b>$entero</b> y <b>$decimal</b>, con sus respectivos valores.</p>
          <?php
          $entero=1;
          $decimal=0.3;
          echo 'la variable $entero vale '."$entero <br>";
          echo 'la variable $decimal vale '."$decimal";
           ?>
        <ol>
          <li>Ejecutar un echo con la suma entre ambos valores.</li><br>
            <?php echo "$entero"+"$decimal"?><br><br>
          <li>Ejecutar un echo con la resta entre ambos valores.</li><br>
            <?php echo "$entero"-"$decimal"?><br><br>
          <li>Ejecutar un echo con la división entre ambos valores.</li><br>
            <?php echo "$entero"/"$decimal"?><br><br>
          <li>Ejecutar un echo con la multiplicación entre ambos valores.</li><br>
            <?php echo "$entero"*"$decimal"?><br><br>
          <li>Asignar en una nueva variable el resultado de la división de ambos valores y mostrar la nueva variable.</li><br>
            <?php
              $resultado=$entero/$decimal;
              echo 'la variable $resultado vale '."$resultado";
            ?><br><br>
          <li>Sumarle 1 a $entero y $decimal.</li><br>
            <?php
              $entero=$entero+1;
              $decimal=$decimal+1;
              echo 'ahora la variable $entero vale '."$entero <br>";
              echo 'ahora la variable $decimal vale '."$decimal";
             ?><br><br>
          <li>Sumarle 5 a $entero y restarle 0.6 a $decimal.</li><br>
            <?php
              $entero=$entero+5;
              $decimal=$decimal-0.6;
              echo 'ahora la variable $entero vale '."$entero <br>";
              echo 'ahora la variable $decimal vale '."$decimal";
             ?><br><br>
          <li>En una misma línea, crear la variable $resultado, cuyo valor sea el resultado de multiplicar $entero * 2, sumarle $decimal, y dividir todo por la mitad de $entero.</li><br>
            <?php
              $resultado=($entero*2+$decimal)/($entero/2);
              echo 'la variable $resultado vale '."$resultado";
             ?><br><br>
        </ol>
      <h2>Punto 7</h2>
        <p>Declarar una variable con el string ‘Hola’, y otra variable con el string ‘mundo!’.</p>
        <ol>
          <?php
            $palabra1="Hola";
            $palabra2="mundo!";
           ?>
          <li>En una nueva variable, concatenar las variables creadas recientemente para formar “Hola mundo!”.</li><br>
            <?php
            $frase=$palabra1." ".$palabra2;
            echo "$frase";
             ?><br><br>
          <li>Crear una nueva variable que concatene la variable creada en el punto a, y concatenarle el string ‘Que bueno esta PHP’.</li><br>
            <?php
            $frase2=$frase." "."Que bueno esta PHP";
            echo "$frase2";
             ?><br><br>
        </ol>
  </body>
</html>
