<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta charset="utf-8"/>
    <meta http-equiv="content-language" content="en-us"/>
    <title>NAVE - Unofficial</title>
    <meta name="author" content="Matheus Avellar"/>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="http://avellar.ml/resources/favicon.png" type="image/png"/>
    <link rel="icon" href="http://avellar.ml/resources/favicon.png" type="image/png"/>
    <style type="text/css">
        .u {
            user-select: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;
            cursor: default;
        }
        .b {
            font-family:"Bree Serif",serif
        }
        .l, body{
            font-family:"Lora",serif
        }
        .o {
            font-family:"Open Sans",sans-serif
        }
        body {
            margin:0;
            color:#0a0a0a;
        }
        #body {
            width: 100%;
            margin: 0;
        }
        @media screen and (min-width: 1300px) and (max-width: 3032px) {
            #body {
                width: 80%;
                margin-left: 10%;
            }
        }
        header, footer {
            background-color: #ef3d4d;
            height: 70px
        }
        header #title {
            font-size: 35px;
            color: #fefefe;
            position: absolute;
            left: 15px;
            top: 10px;
            font-family: "Open Sans",sans-serif;
        }
        header #title:after {
            content: "book";
            color: #d0d0d0;
            font-weight: 100;
        }
        body, body header #logo{
            background-color:#fefefe
        }
        div.text {
            padding:30px;
            font-size:17px;
        }
        h1 {
            color: #ef3d4d;
            font-size: 30px;
        }
        .display {
            max-width: 80%;
            max-height: 20vh;
            margin-left: 10%;
            margin-bottom: 4px;
            text-align: center;
            padding: 1px;
            border: 2px solid #313131;
            border-radius: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 10px;
            margin: 0;
            position: relative;
            border: 1px solid #d8d8d8;
        }
        @media screen and (min-width: 800px) {
            table {
                font-size: 16px;
            }
        }
        @media screen and (min-width: 1300px) and (max-width: 3032px) {
            table {
                width: 80%;
                margin: 20px;
            }
        }
        tr:nth-child(odd) {
            background-color: #efefef;
        }
        tr:nth-child(even) {
            background-color: #fefefe;
        }
        th {
            background-color: #d0d0d0;
            color: #0a0a0a;
            padding: 10px;
            border-bottom: 1px solid #d8d8d8;
        }
        td {
            text-align: center;
            padding: 10px;
            border-bottom: 1px solid #d8d8d8;
        }
        select {
            border: 0;
            border-radius: 0;
            outline: 0;
            color: #ef3d4d;
            font-size: 27px;
            font-weight: bold;
            cursor: pointer;
        }
        .note {
            font-size: 12px;
            color: #7d7d7d;
            margin-bottom: 15px;
        }
        .break {
            background-color: #d0d0d0 !important;
            color: #b0b0b0;
        }
        tr.break td:first-child {
            color: #0a0a0a;
        }
        td.empty {
            background-color: #d0d0d0;
        }
        td.empty:after {
            content: "-----";
            color: #b0b0b0;
            background: #d0d0d0;
        }
    </style>
</head>
<body>
    <div id="content" class="u">
        <header>
            <div id="title" class="u">NAVE</div>
        </header>
        <div id="body">
            <div class="u text">
                <h1 class="b">Horário de
                    <select class="b">
                        <option>Segunda-feira</option>
                        <option>Terça-feira</option>
                        <option>Quarta-feira</option>
                        <option>Quinta-feira</option>
                        <option>Sexta-feira</option>
                    </select>
                </h1>
                <div class="note">(clique para alterar o dia)</div>
<?php

    // These must be set ;)
    $hostname = "";
    $username = "";
    $password = "";
    $database = "";
    $selectid = "timetables";
    
    $con = mysqli_connect($hostname, $username, $password, $database) or die("Could not connect: " . mysqli_error($con));

    $d = "";
    if ($_SERVER["REQUEST_METHOD"] === "GET" && $_GET["d"]) {
        $d = $_GET["d"];
    } else {
        $d = "0";
    }

    for ($i = 0; $i < 12; $i++) {
        for ($k = 0; $k < 3; $k++) {
            for ($j = 0; $j < 4; $j++) {
                $c = (($k + 1) * 1000) + $j + 1;
                $c1001 = mysqli_fetch_assoc(mysqli_query($con, "select * from " . $selectid . " where Day = '" . $d . "' and Time = " . $i . " and Class = " . $c . ";"));
                echo print_r($c1001, true);
                echo "<br>";
            }
        }
    }

    // Working on it! :D
    
?>
                <center>
                    <table>
                        <tbody>
<tr><th>Hora</th><th>1001</th><th>1002</th><th>1003</th><th>1004</th><th>2001</th><th>2002</th><th>2003</th><th>2004</th><th>3001</th><th>3002</th><th>3003</th><th>3004</th></tr>
<tr><td> 7:00</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td> 7:50</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td> 8:40</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr class="break"><td> 9:30</td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td></tr>
<tr><td> 9:40</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>10:30</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>11:20</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>12:30</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>13:20</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>14:10</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr class="break"><td>15:00</td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td></tr>
<tr><td>15:20</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>16:10</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr class="break"><td>17:00</td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td></tr>
                        </tbody>
                    </table>
                </center>
                <p>Horário escola mais atualizado possível, de todas as turmas.</p>
            </div>
            <div class="u text">
                <h1 class="b">Imagens</h1>
                <center>
                    <img class="display" src="http://i.imgur.com/mVHKcZz.png"/>
                    <img class="display" src="http://i.imgur.com/zaukVEO.png"/>
                </center>
                <p>Imagens de boa qualidade que podem ser úteis na vida de um estudante do NAVE.</p>
            </div>
        </div>
    </div>
    <footer>

    </footer>
</body>
</html>