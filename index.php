<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
  
   <title>שאלון שביעות רצון נקיון</title>
   <script
   src="http://code.jquery.com/jquery-3.3.1.js"
   integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
   crossorigin="anonymous"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="./js/js.js"></script>

</head>
<body>
    <div class="container flex">
        <div class="text flex">
            מה מידת שביעות רצונך מנקיון השירותים?
        </div>
        
        <form id="theform"action="">
            <div class="question clean" data="1">
                <input type="radio" name="state" value="1" class="radiobutton" data="1">
                <p class="question--p">מרוצה מאוד</p>
            </div>
            <div class="question natural" data="2">
                <input type="radio" name="state" value="2" class="radiobutton" data="2">
                <p class="question--p">מרוצה</p>
            </div>
            <div class="question not-clean"  data="3">
                <input type="radio" name="state" value="3" class="radiobutton" data="3">
                <p class="question--p">לא נקי</p>
            </div>

            <input type="hidden" id="building" name="building" value="<?php echo $_GET['building'] ?>">
            <input type="hidden" id="floor" name="floor" value="<?php echo $_GET['floor'] ?>">
        </form>
    </div>
</body>
</html>