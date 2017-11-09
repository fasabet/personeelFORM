<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>form ITPH</title>
        <style type="text/css"> 
            body input{
                margin:10px;
                text-align:left;
                border: 1px solid powderblue;
                padding: 20px;
                font:1em timenewroman;
                input{

                    text-align:left;
                    border: 1px solid powderblue;
                    padding: 20px;
                    font:1em timenewroman;
                }
                form{ 
                    width:700px;
                    margin:30px 10px 30px 10px;
                    border: 1px solid red;
                }

            </style>
        </head>
        <body>

            <form method="post"> <!--action="newfile.txt"-->
                SerialNummer:<input name="idsn" type="number" ><br>
                
                Voornaam: <input name="vnaam" type="text" placeholder="Mickey"  >
                Midnaam: <input name="mnaam" type="text" placeholder="M"  > 
                Achternaam: <input name="anaam" type="text" placeholder="Mouse"  > 
                
                Photo <input type="file" name="pic" accept="image/*" style=" size: length 100px"><br>

                Geboorte datum: <input name="gdatum" type="date"  >
                Geboorte land: <input type="text" name="gland" > 
                Geender: <input type="radio" name="gender" <?php if (isset($gender) && $gender == "Man") echo "checked"; ?> value="Man">Man
                <input type="radio" name="gender"  <?php if (isset($gender) && $gender == "Vrouw") echo "checked"; ?> value="Vrouw">Vrouw<br>
                Burgerlijkestaat:<select name="brugerlijk">
                    <option value="alleenstaand">alleenstaand</option>
                    <option value="gehuwd">gehuwd</option>
                    <option value="gescheiden">gescheiden</option>
                    <option value="weduwe">weduwe</option>
                    <option value="overige">overige</option>
                </select>
                --Kind(ren): <input type="number" name="kind"><br>
                Woonadres: <input type="text" name="Woonadres"> 
                Nummer: <input type="test" name="nummer">
                Post code:<input type="t" name="postcode">
                Place:<input type="t" name="place">
                Land: <input type="t" name="land"><br>
                Telefon <input type="text" name="telefon" placeholder="06 999 99 999">
                email <input type="text" name="email" placeholder="name@domin.aaa"><br>
                <input type="submit" name="Send" value="Submit" 
                       style="color:lightslategray;border: 1px solid red; ">
            </form>  

            <?php
            $naam = $_POST['vnaam']." ". $_POST['mnaam']." " . $_POST['anaam'];
            $gdatuml = $_POST['gdatum']." ".$_POST['gland'];
            $gender = $_POST['gender']." ".$_POST['brugerlijk'];//$kind = $_POST['kind'];
            $adres=$_POST['Woonadres']." ".$_POST['nummer']." ".$_POST['postcode']." ".$_POST['place']." ".$_POST['land'];
            $tmail=$_POST['telefon']." ".$_POST['email'];
            


            echo $naam.$gdatuml.$gender.$adres.$tmail;
            ?>
            <br>

        </body>
    </html>
  