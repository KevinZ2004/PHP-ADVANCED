<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <style>
                body {
                    background-color: <?php echo $_POST["achtergrondkleur"] ?> ;
                    color: <?php echo $_POST["tekst-kleur"] ?>;
                }
                table,tr,td {
                    padding: <?php echo $_POST["padding"] ?>px;
                    border: <?php echo $_POST["border"] ?>px solid black;
                    padding-right: 100px;
                    padding-left: 100px;
                }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <div class="flex-container">
                <table>
                    <tr>
                        <th>key</th>
                        <th>value</th>
                    </tr>

                    <?php
                        $info2= array("naam"=>"naam", "achternaam"=>"achternaam", "klas"=>"klas", "muziek"=>"favoriete muziek");
                        $info= array("naam"=>"Kevin", "achternaam"=>"Zwolschen", "klas"=>"LCTAOOoD", "muziek"=>"pop muziek");
                        
                            foreach($info2 as $index => $thing){

                                echo "<tr><td> $thing </td><td> $info[$index] </td></tr>";
                            }

                    ?>
                    
                </table>
            </div>
        </div>
    </body>
</html>