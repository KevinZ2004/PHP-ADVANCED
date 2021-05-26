<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="advanced-2.php">
    </head>
    <body>
        <div class="wrapper">

            <form name="invoer" action="advanced-2.php" method="POST">

            <select name="achtergrond-kleur" id="achtergrond-kleur">
                <?php
                    $kleuren = array("red", "blue", "green", "black", "brown");
                        foreach($kleuren as $optie){
                        echo "<option value=$optie>$optie</option>";};
                ?>
            </select>
            <a>achtergrond kleur</a>
</div>
</body>
</html>