<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            text-align: center;
        }

        .small {
            border: 2px solid black;
            border-radius: 10px;
            width: 300px;
            height: 500px;
            transition: all 0.5s ease;
        }

        .small:hover{
            box-shadow: 10px 10px 10px lightblue;
            transform: scale(1.1);
        }

        .smallText {
            text-align: center;
        }

        .server {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            margin-top: 50px;
        }

        .medium {
            border: 2px solid black;
            border-radius: 10px;
            width: 300px;
            height: 500px;
            transition: all 0.5s ease;
        }

        .mediumText {
            text-align: center;
        }

        .medium:hover{
            box-shadow: 10px 10px 10px lightblue;
            transform: scale(1.1);
        }

        .big {
            border: 2px solid black;
            border-radius: 10px;
            width: 300px;
            height: 500px;
            transition: all 0.5s ease;
        }

        .bigText {
            text-align: center;
        }

        .big:hover{
            box-shadow: 10px 10px 10px lightblue;
            transform: scale(1.1);
        }

        .diagrammSmall {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background: conic-gradient(darkblue 0% 30%, blue 30% 60%, turquoise 60% 100%); /* Platzhalter */
            transition: background 0.5s ease; /* optional für sanfte Animation */
            display: flex;
            margin-left: 75px;
            margin-top: 120px;
        }

        .diagrammMedium {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background: conic-gradient(darkblue 0% 30%, blue 30% 60%, turquoise 60% 100%); /* Platzhalter */
            transition: background 0.5s ease; /* optional für sanfte Animation */
            display: flex;
            margin-left: 75px;
            margin-top: 120px;
        }

        .diagrammBig {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background: conic-gradient(darkblue 0% 30%, blue 30% 60%, turquoise 60% 100%); /* Platzhalter */
            transition: background 0.5s ease; /* optional für sanfte Animation */
            display: flex;
            margin-left: 75px;
            margin-top: 120px;
        }

        .diagrammText {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }

        .cpu {
            color: darkblue;
        }

        .ram {
            color: blue;
        }

        .ssd {
            color: turquoise;
        }

        .formular {
            margin-top: 20px;
            border: 2px solid black;
            border-radius: 10px;
            width: 1095px;
            height: 300px;
            margin-left: 55px;
            padding: 30px;
        }

        .input {
            width: 1070px;
            height: 50px;
            font-size: 20px;
        }

    </style>
</head>
<body>
    <h1>Willkommen zur UberCloud</h1>
    <div class = "server">
        <div class = "small">
            <h2 class = "smallText">Small</h2>
            <div class = "diagrammSmall"></div>
            <div class = "diagrammText">
                <h4 class = "cpu">CPU: </h4>
                <h4 class = "ram">RAM:</h4>
                <h4 class = "ssd">SSD: </h4>
            </div>
        </div>
        <div class = "medium">
            <h2 class = "mediumText">Medium</h2>
            <div class = "diagrammMedium"></div>
            <div class = "diagrammText">
                <h4 class = "cpu">CPU: </h4>
                <h4 class = "ram">RAM:</h4>
                <h4 class = "ssd">SSD: </h4>
            </div>
        </div>
        <div class = "big">
            <h2 class = "bigText">Big</h2>
            <div class = "diagrammBig"></div>
            <div class = "diagrammText">
                <h4 class = "cpu">CPU: </h4>
                <h4 class = "ram">RAM:</h4>
                <h4 class = "ssd">SSD: </h4>
            </div>
        </div>

    </div>

    <div class = "formular">
        <form action = "VM_Projekt.php">
            <label for = "firmenname"></label>
            <input class = "input" type = "text" id = "firmenname" name = "firmenname" placeholder = "Firmenname"><br>
        </form>
    </div>
</body>
</html>