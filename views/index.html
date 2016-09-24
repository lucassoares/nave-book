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
        body {
            margin: 0;
            color: #0a0a0a;
            font-family: "Lora", serif;
            background-color: #ef3d4d;
        }
        #body {
            width: 100%;
            margin: 0;
            background-color: #fefefe;
        }
        /*@media screen and (min-width: 1300px) and (max-width: 3032px) {*/
        header, footer {
            background-color: #ef3d4d;
            height: 70px;
            font-family: "Open Sans",sans-serif;
            color: #fefefe;
        }
        header #title {
            font-size: 35px;
            position: relative;
            left: 15px;
            top: 10px;
            display: inline-block;
            margin-right: 40px;
        }
        header #title:after {
            content: "book";
            color: #d0d0d0;
            font-weight: 100;
        }
        #toolbar {
            display: inline-block;
            transform: translateY(5px);
        }
        #toolbar .timetables, #toolbar .images {
            display: inline-block;
            padding: 0px 15px;
            cursor: pointer;
        }
        #toolbar .timetables {
            border-right: 1px solid #fefefe;
        }
        #toolbar .timetables:hover, #toolbar .images:hover {
            color: #d0d0d0;
        }
        #logo {
            background-color: #fefefe;
        }
        div.text {
            padding: 30px;
            font-size: 17px;
        }
        h1 {
            color: #ef3d4d;
            font-size: 30px;
            font-family: "Bree Serif", serif;
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
            font-size: 14px;
            margin: 0;
            position: relative;
            border: 1px solid #d8d8d8;
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
            font-family: "Bree Serif", serif;
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
        span.subject, span.teacher {
            font-family: "Open Sans", sans-serif;
        }
        span.teacher {
            display: block;
            font-size: 10px;
            color: #a0a0a0;
        }
    </style>
</head>
<body onload="loaded();">
    <div id="content" class="u">
        <header>
            <div id="title" class="u">NAVE</div>
            <div id="toolbar">
                <div class="timetables">Horários</div>
                <div class="images">Imagens</div>
            </div>
        </header>
        <div id="body">
<?php

    $d = "";
    if ($_SERVER["REQUEST_METHOD"] === "GET") {
        if ($_GET["i"]) {
            $d = "images";
        } else if ($_GET["d"]) {
            $d = ($_GET["d"]+0 >= 0 && $_GET["d"]+0 <= 4) ? $_GET["d"] : 0;
        } else {
            $d = "0";
        }
    }

    if ($d != "images") {

        // These must be set ;)
        $hostname = "";
        $username = "";
        $password = "";
        $database = "";
        $selectid = "timetables";
        
        $con = mysqli_connect($hostname, $username, $password, $database) or die("Could not connect: " . mysqli_error($con));


        $times = [" 7:00", "7:50", " 8:40", " 9:50", "10:40", "11:30", "12:30", "13:20", "14:10", "15:20", "16:10"];

        echo '<div class="u text">
                <h1>Horário de
                    <select>
                        <option>Segunda-feira</option>
                        <option>Terça-feira</option>
                        <option>Quarta-feira</option>
                        <option>Quinta-feira</option>
                        <option>Sexta-feira</option>
                    </select>
                </h1>
                <div class="note">(clique para alterar o dia)</div>
                <center>
                    <table>
                        <tbody>
<tr><th>Hora</th><th>1001</th><th>1002</th><th>1003</th><th>1004</th><th>2001</th><th>2002</th><th>2003</th><th>2004</th><th>3001</th><th>3002</th><th>3003</th><th>3004</th></tr>';

        for ($i = 0; $i < 11; $i++) {
            if ($i == 3) echo '<tr class="break"><td> 9:30</td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td></tr>';
            if ($i == 9) echo '<tr class="break"><td>15:00</td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td></tr>';
            echo "<tr><td>" . $times[$i] . "</td>";
            for ($k = 0; $k < 3; $k++) {
                for ($j = 0; $j < 4; $j++) {
                    $c = (($k + 1) * 1000) + $j + 1;
                    $databaseArr = mysqli_fetch_assoc(mysqli_query($con, "select * from " . $selectid . " where Day = '" . $d . "' and Time = " . $i . " and Class = " . $c . ";"));
                    echo "<td><span class=\"subject\">";
                    echo $databaseArr["Subject"];
                    echo "</span><span class=\"teacher\">";
                    echo $databaseArr["Teacher"];
                    echo "</span></td>";
                    //echo print_r($databaseArr, true);
                }
            }
            echo "</tr>";
            if ($i == 10) echo '<tr class="break"><td>17:00</td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td><td class="empty"></td></tr>';
        }

        echo '</tbody>
                </table>
            </center>
        </div>';
    } else {

        echo '<div class="u text">
                <h1>Imagens</h1>
                <center>
                    <img class="display" src="http://i.imgur.com/mVHKcZz.png"/>
                    <img class="display" src="http://i.imgur.com/zaukVEO.png"/>
                </center>
            </div>';
    }
    
?>
        </div>
    </div>
    <footer><!-- Might add something here later? --></footer>
    <script type="text/javascript">
        var loaded = function() {
            $("#toolbar .timetables").on("click", function() {
                window.location.search = "?d=0";
            });
            $("#toolbar .images").on("click", function() {
                window.location.search = "?d=images";
            });
        }
    </script>
</body>
</html>