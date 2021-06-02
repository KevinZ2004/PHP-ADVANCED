<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="style.css">
        <style> 
             body {
                 background-color: <?php echo $_POST["achtergrond-kleur"] ?>;
                 color: <?php echo $_POST["tekst-kleur"] ?>;
             }
                 table,tr,td {
                     padding: <?php echo $_POST["padding"] ?>px;
                     border: <?php echo $_POST["border"] ?>px black;
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
    
</body>
</html>