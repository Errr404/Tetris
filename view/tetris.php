<?php 
    include '../controller/conect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tetris</title>
    <style>
        body {
            background-color: #030303de;
            color: #FFFFFF;
        }

        #score #speed {
            display: inline-block;

        }

        div {
            font-size: 25px;
            font-weight: bold;
            font-family: monospace;
            text-align: center;
        }

        canvas {
            display:block;
            margin: 0 auto;
        }

        p {
            background-color: #f3f3f3;
            color: #000000;
            border: 4px solid solid;
            border-radius: 4px #000000;
            width: 100px;
            margin: 0 auto;

        }
    </style>

</head>
<body>
    <canvas id="tetris" width="320" height="610"></canvas>
    <div>
        <P>
            name: <span = id="name">
                    <?php

                        include '../model/name.php';

    
                    ?>

            </span>
        </P>
        <p>
            Score: <span id="score"></span>
        </p>
        <p>
            Speed: <span id="speed"></span>
        </p>
    </div>




    <script src="../functions/piece.js"></script>
    <script src="../functions/skeleton.js"></script>
    <script src="../functions/functions.js"></script>
    <script src="../functions/game.js"></script>
    
</body>
</html> 