<html>
    <head>
        <TITLE>registro de alumnos</TITLE>
    <link rel="stylesheet" type="text/css" href="stilo.css" media="screen" title="Normal">
    </head>
    <body>
    <div id="encabezado">
        <h1 class="sitio_nombre">Registro de alumnos</h1>
        <h3 class="slogan">ITL</h3>
    </div>
    <div id="publicacion">
        <center>
            <h2 class="titulo">registro:</h2>
        </center>
    </div>
    
        <center>
            <form name="alumnos" action="registrar.php" method="post">
                <table>
                    <tbody>
                        <tr>
                            <td>nombre:</td>
                            <td><input type="text" name="nombre"></td>
                        </tr>
                        <tr>
                            <td>ci:</td>
                            <td><input type="text" name="ci"></td>
                        </tr>
                        <tr>
                            <td>apellido paterno:</td>
                            <td><input type="text" name="apellido_paterno"></td>
                        </tr>
                        <tr>
                            <td>apellido materno:</td>
                            <td><input type="text" name="apellido_materno"></td>
                        </tr>
                        <tr>
                            <td>#control:</td>
                            <td><input type="text" name="no_control"></td>
                        </tr>
                        <tr>
                            <td>carrera:</td>
                            <td><select name="carrera">
                                <OPTION>Ing.Sistemas</OPTION>
                                <OPTION>Administracion de empresas</OPTION>
                                <OPTION>Ing.electrica</OPTION>
                                <OPTION>Ing.electronica</OPTION>
                                <OPTION>Ing.industrial</OPTION>
                                <OPTION>Ing.quimica</OPTION>
                            </select></td>
                        </tr>
                        <tr>
                            <td>correo:</td>
                            <td><input type="text" name="correo"></td>
                        </tr>
                        <tr>
                            <td>ingreso:</td>
                            <td><select name="ingreso">
                                <OPTION>1983</OPTION>
                                <OPTION>1984</OPTION>
                                <OPTION>1985</OPTION>
                                <OPTION>1986</OPTION>
                                <OPTION>1987</OPTION>
                                <OPTION>1988</OPTION>
                                <OPTION>1989</OPTION>
                                <OPTION>1990</OPTION>
                                <OPTION>1991</OPTION>
                                <OPTION>1992</OPTION>
                                <OPTION>1993</OPTION>
                                <OPTION>1994</OPTION>
                                <OPTION>1995</OPTION>
                                <OPTION>1996</OPTION>
                                <OPTION>1997</OPTION>
                                <OPTION>1998</OPTION>
                                <OPTION>1999</OPTION>
                                <OPTION>2000</OPTION>
                                <OPTION>2001</OPTION>
                                <OPTION>2002</OPTION>
                                <OPTION>2003</OPTION>
                                <OPTION>2004</OPTION>
                                <OPTION>2005</OPTION>
                                <OPTION>2006</OPTION>
                                <OPTION>2007</OPTION>
                                <OPTION>2008</OPTION>
                            </select></td>
                        </tr>
                        <tr>
                            <td>egreso:</td>
                            <td><select name="egreso">
                                <OPTION>1983</OPTION>
                                <OPTION>1984</OPTION>
                                <OPTION>1985</OPTION>
                                <OPTION>1986</OPTION>
                                <OPTION>1987</OPTION>
                                <OPTION>1988</OPTION>
                                <OPTION>1989</OPTION>
                                <OPTION>1990</OPTION>
                                <OPTION>1991</OPTION>
                                <OPTION>1992</OPTION>
                                <OPTION>1993</OPTION>
                                <OPTION>1994</OPTION>
                                <OPTION>1995</OPTION>
                                <OPTION>1996</OPTION>
                                <OPTION>1997</OPTION>
                                <OPTION>1998</OPTION>
                                <OPTION>1999</OPTION>
                                <OPTION>2000</OPTION>
                                <OPTION>2001</OPTION>
                                <OPTION>2002</OPTION>
                                <OPTION>2003</OPTION>
                                <OPTION>2004</OPTION>
                                <OPTION>2005</OPTION>
                                <OPTION>2006</OPTION>
                                <OPTION>2007</OPTION>
                                <OPTION>2008</OPTION>
                            </select></td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="enviar" name="enviar"></td>
                            <td><input type="reset" value="borrar"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <a href="index.html">volver</a>
        </center>
    </body>
</html>