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
    <center>
        <form id=" form" name="form" method="POST" action="Datos_Triangulos.php">
            <br>
            <br>
            <br>
            <div>
                <br>
                <table style="text-align: center; width:35%; border-color: black;" border="2px">
                    <tr>
                        <td style="color: white">Calcular el area y perimetro de un triangulo
                        </td>
                    </tr>
                </table>
            </div>
            <div>
                <br>
                <div>
                    <table style="text-align: center; width: 35%; border-color: black" border="2px">
                        <tr>
                            <td style="color: White">Area
                            </td>
                        </tr>
                    </table>
                    <div>
                        <table style="text-align: center; width: 35%; border-color: dark;" border="2px">
                            <tr>
                                <td style="color: white">Altura
                                </td>
                                <td><input type="text" id="idaltura" name="idaltura"></td>
                            </tr>
                            <tr>
                                <td style="color: white">Base
                                </td>
                                <td><input type="text" id="idbase" name="idbase"></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div>
                    <br>
                    <table style="text-align: center; width:35%; border-color: dark;" border="2px">
                        <tr>
                            <td style="color: white">Perimetro
                            </td>
                        </tr>
                    </table>
                    <table style="text-align: center; width:35%; border-color: black;" border="2px">
                        <tr>
                            <td style="color: white">Lado 1
                            </td>
                            <td><input type="text" id="idlado1" name="idlado1"></td>
                        </tr>
                        <tr>
                            <td style="color: white">Lado 2
                            </td>
                            <td><input type="text" id="idlado2" name="idlado2"></td>
                        </tr>
                        <tr>
                            <td style="color: white">Lado 3
                            </td>
                            <td><input type="text" id="idlado3" name="idlado3"></td>
                        </tr>

                    </table>
                    <br>
                    <td style="text-align: center"><button type="submit" id="btnenviar" name="btnenviar" style="
                    color: white;background-color: black; border-color: dark">Calcular</button>
                    </td>
                </div>
        </form>
    </center>
</body>
</html>
