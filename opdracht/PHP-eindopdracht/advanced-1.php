<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <title>Form</title>
</head>
<body>
  <table border="1"></table>
  <form action="results.html" method="GET">
    <div>
    <label for="">Tabelranddickte (px):</label>
    <input name="Tabelranddickte (px):">
    </div>
    <div>
    <label>cel-padding (px)</label>
    <input name="cel-padding (px)">
    </div>
    <div>
      <label for="achtergrondkleur">achtergrondkleur</label>
      <select name="achtergrondkleur" id="achtergrondkleur">
        <option value="red">Red</option>
        <option value="blue">blue</option>
        <option value="green">green</option>
        <option value="black">black</option>
        <option value="brown">brown</option>
      </select>
      <style>
        body {
          background-color: <?php if (!empty($_POST)) {
                                  echo $_POST['kleur'];
                              } ?>;
          font-family: Verdana, Geneva, Tahoma, sans-serif;


        }
    
     <button>Submit </button>

  </form>


</html>