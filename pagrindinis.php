<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./pagrindinis.css">
</head>
<body>
<div class="wrapper">
    <h1>Multiplication Table Worksheets</h1>
    <form action="lentele.php" method="post" class="form">
        <div class="header">
    <div class="poll">
        <div class="pol_1">
            <p>Number Set</p>
            <input type="radio" id="option1" name="option" value="5">
            <label for="option1">1 to 5</label><br>
            <input type="radio" id="option2" name="option" value="10">
            <label for="option2">1 to 10</label><br>
            <input type="radio" id="option3" name="option" value="12">
            <label for="option3">1 to 12</label><br>
            <input type="radio" id="option4" name="option" value="15">
            <label for="option4">1 to 15</label>
        </div>
        <div class="pol_2">
            <p>Difficulty</p>
            <input type="radio" id="easy" name="difficulty" value="90">
            <label for="easy">20%</label><br>
            <input type="radio" id="Medium" name="difficulty" value="70">
            <label for="medium">50%</label><br>
            <input type="radio" id="hard" name="difficulty" value="50">
            <label for="hard">70%</label><br>
            <input type="radio" id="vhard" name="difficulty" value="20">
            <label for="vhard">90%</label>
        </div>
        </div>
        <button type="submit" name="submit" class="btn">Generate</button>
    </div>
    </form>
</div>
</body>
</html>