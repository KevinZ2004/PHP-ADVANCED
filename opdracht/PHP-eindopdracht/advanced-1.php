<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
        <div class="wrapper">

            <form name="invoer" action="advanced-2.php" method="POST">


            <a>achtergrondkleur:</a>
            <select name="achtergrondkleur" id="achtergrondkleur">
                <?php
                    $kleuren = array("red", "blue", "green", "black", "brown");
                        foreach($kleuren as $optie){
                        echo "<option value=$optie>$optie</option>";};
                ?>
            </select>
            

            <a>tekstkleur:</a>
            <select name="tekst-kleur" id="tekst-kleur">
                <?php
                    $kleuren = array("red", "blue", "green", "black", "brown");
                        foreach($kleuren as $optie){
                        echo "<option value=$optie>$optie</option>";};
                ?>
            </select>


            <a>border:</a>
            <input type="text" name="border">

            <a>padding:</a>
            <input type="text" name="padding">

            <input type="submit" name="submit" value="verstuur">

        </div>
    </body>

</html>

