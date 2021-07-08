<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body style="background-color: #090A41">
     <?php
     $area = "";
     $perimetro = "";
     $altura = "";
     $base= "";
     $lado1="";
     $lado2="";
     $lado3="";
     $altura = $_POST["idaltura"];
     $base = $_POST["idbase"];
     $lado1 = $_POST["idlado1"];
     $lado2 = $_POST["idlado2"];
     $lado3 = $_POST["idlado3"];
     $area = ($base * $altura) / 2;
     $perimetro = ($lado1+$lado2+$lado3);
     ?>
     <center>
         <br>
         <br>
         <br>
         <br>
         <div>
             <table style="text-align: center; width:35%; border-color: black;" border="2px">
                 <tr>
                     <td style="color: white; font-size:20px">Los resultados de los calculos son:
                     </td>
                 </tr>
             </table>
         </div>
         <<br>
             <div>
                 <table style="text-align: center; width: 35%; border-color: dark;" border="2px">
                     <tr>
                         <td style="color: white">
                             <?php
                          echo "Area";
                          ?>
                         </td>
                     </tr>
                     <tr>
                         <td>
                             <h3 style="color: red"><?php
                          echo "" ,$area;
                          ?></h3>
                         </td>
                     </tr>
                 </table>
             </div>
             <div>
                 <table style="text-align: center; width:35%; border-color: dark;" border="2px">
                     <tr>
                         <td style="color: white">
                             <?php
                          echo "Perimetro";
                          ?>
                         </td>
                     </tr>
                     <br>
                     <tr>
                         <td>
                             <h3 style="color: red"> <?php
                          echo "", $perimetro;
                          ?> </h3>
                         </td>
                     </tr>
                 </table>
             </div>
     </center>
 </body>
</html>
