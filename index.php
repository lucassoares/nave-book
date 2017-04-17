<?php include("views/layouts/header.php") ?>

<div class="container">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
        <table table class="table table-striped table-bordered">
            <tr>
                <td class="text-center">Horarios</td>
                <td class="text-center">1001</td>
                <td class="text-center">1002</td>
                <td class="text-center">1003</td>
                <td class="text-center">1004</td>
            </tr>
            <tr>
                <td class="text-center">07:00</td>

                <?php include("models/connect.php");
                
                    $result = mysqli_query($connection, "select * from monday WHERE horario='07:00'");

                    while($horary = mysqli_fetch_array($result)) { ?>
                        <td class="text-center"><?=$horary['1001'];?></td>
                        <td class="text-center"><?=$horary['1002'];?></td>
                        <td class="text-center"><?=$horary['1003'];?></td>
                        <td class="text-center"><?=$horary['1004'];?></td>
                <?php } ?>

            </tr>
            <tr>
                <td class="text-center">07:50</td>
                <?php include("models/connect.php");
                
                    $result = mysqli_query($connection, "select * from monday WHERE horario='07:50'");

                    while($horary = mysqli_fetch_array($result)) { ?>
                        <td class="text-center"><?=$horary['1001'];?></td>
                        <td class="text-center"><?=$horary['1002'];?></td>
                        <td class="text-center"><?=$horary['1003'];?></td>
                        <td class="text-center"><?=$horary['1004'];?></td>
                <?php } ?>
            </tr>
            <tr>
                <td class="text-center">08:40</td>
                <?php include("models/connect.php");
                
                    $result = mysqli_query($connection, "select * from monday WHERE horario='08:40'");

                    while($horary = mysqli_fetch_array($result)) { ?>
                        <td class="text-center"><?=$horary['1001'];?></td>
                        <td class="text-center"><?=$horary['1002'];?></td>
                        <td class="text-center"><?=$horary['1003'];?></td>
                        <td class="text-center"><?=$horary['1004'];?></td>
                <?php } ?>
            </tr>
            <tr>
                <td class="text-center">09:50</td>
                <?php include("models/connect.php");
                
                    $result = mysqli_query($connection, "select * from monday WHERE horario='09:50'");

                    while($horary = mysqli_fetch_array($result)) { ?>
                        <td class="text-center"><?=$horary['1001'];?></td>
                        <td class="text-center"><?=$horary['1002'];?></td>
                        <td class="text-center"><?=$horary['1003'];?></td>
                        <td class="text-center"><?=$horary['1004'];?></td>
                <?php } ?>
            </tr>
            <tr>
                <td class="text-center">10:40</td>
                <?php include("models/connect.php");
                
                    $result = mysqli_query($connection, "select * from monday WHERE horario='10:40'");

                    while($horary = mysqli_fetch_array($result)) { ?>
                        <td class="text-center"><?=$horary['1001'];?></td>
                        <td class="text-center"><?=$horary['1002'];?></td>
                        <td class="text-center"><?=$horary['1003'];?></td>
                        <td class="text-center"><?=$horary['1004'];?></td>
                <?php } ?>
            </tr>
            <tr>
                <td class="text-center">11:30</td>
                <?php include("models/connect.php");
                
                    $result = mysqli_query($connection, "select * from monday WHERE horario='11:30'");

                    while($horary = mysqli_fetch_array($result)) { ?>
                        <td class="text-center"><?=$horary['1001'];?></td>
                        <td class="text-center"><?=$horary['1002'];?></td>
                        <td class="text-center"><?=$horary['1003'];?></td>
                        <td class="text-center"><?=$horary['1004'];?></td>
                <?php } ?>
            </tr>
            <tr>
                <td class="text-center">12:30</td>
                <?php include("models/connect.php");
                
                    $result = mysqli_query($connection, "select * from monday WHERE horario='12:30'");

                    while($horary = mysqli_fetch_array($result)) { ?>
                        <td class="text-center"><?=$horary['1001'];?></td>
                        <td class="text-center"><?=$horary['1002'];?></td>
                        <td class="text-center"><?=$horary['1003'];?></td>
                        <td class="text-center"><?=$horary['1004'];?></td>
                <?php } ?>
            </tr>
            <tr>
                <td class="text-center">13:20</td>
                <?php include("models/connect.php");
                
                    $result = mysqli_query($connection, "select * from monday WHERE horario='13:20'");

                    while($horary = mysqli_fetch_array($result)) { ?>
                        <td class="text-center"><?=$horary['1001'];?></td>
                        <td class="text-center"><?=$horary['1002'];?></td>
                        <td class="text-center"><?=$horary['1003'];?></td>
                        <td class="text-center"><?=$horary['1004'];?></td>
                <?php } ?>
            </tr>
            <tr>
                <td class="text-center">14:30</td>
                <?php include("models/connect.php");
                
                    $result = mysqli_query($connection, "select * from monday WHERE horario='14:30'");

                    while($horary = mysqli_fetch_array($result)) { ?>
                        <td class="text-center"><?=$horary['1001'];?></td>
                        <td class="text-center"><?=$horary['1002'];?></td>
                        <td class="text-center"><?=$horary['1003'];?></td>
                        <td class="text-center"><?=$horary['1004'];?></td>
                <?php } ?>
            </tr>
            <tr>
                <td class="text-center">15:20</td>
                <?php include("models/connect.php");
                
                    $result = mysqli_query($connection, "select * from monday WHERE horario='15:20'");

                    while($horary = mysqli_fetch_array($result)) { ?>
                        <td class="text-center"><?=$horary['1001'];?></td>
                        <td class="text-center"><?=$horary['1002'];?></td>
                        <td class="text-center"><?=$horary['1003'];?></td>
                        <td class="text-center"><?=$horary['1004'];?></td>
                <?php } ?>
            </tr>
            <tr>
                <td class="text-center">16:10</td>
                <?php include("models/connect.php");
                
                    $result = mysqli_query($connection, "select * from monday WHERE horario='16:10'");

                    while($horary = mysqli_fetch_array($result)) { ?>
                        <td class="text-center"><?=$horary['1001'];?></td>
                        <td class="text-center"><?=$horary['1002'];?></td>
                        <td class="text-center"><?=$horary['1003'];?></td>
                        <td class="text-center"><?=$horary['1004'];?></td>
                <?php } ?>
            </tr>
        </table>
    </div>

    <div class="item">
        <table table class="table table-striped table-bordered">
            <tr>
                <td class="text-center">Horarios</td>
                <td class="text-center">2001</td>
                <td class="text-center">2002</td>
                <td class="text-center">2003</td>
                <td class="text-center">2004</td>
            </tr>
            <tr>
                <td class="text-center">07:00</td>
                <?php include("models/connect.php");
                
                    $result = mysqli_query($connection, "select * from monday WHERE horario='07:00'");

                    while($horary = mysqli_fetch_array($result)) { ?>
                        <td class="text-center"><?=$horary['2001'];?></td>
                        <td class="text-center"><?=$horary['2002'];?></td>
                        <td class="text-center"><?=$horary['2003'];?></td>
                        <td class="text-center"><?=$horary['2004'];?></td>
                <?php } ?>
            </tr>
            <tr>
                <td class="text-center">07:50</td>
                <?php include("models/connect.php");
                
                    $result = mysqli_query($connection, "select * from monday WHERE horario='07:50'");

                    while($horary = mysqli_fetch_array($result)) { ?>
                        <td class="text-center"><?=$horary['2001'];?></td>
                        <td class="text-center"><?=$horary['2002'];?></td>
                        <td class="text-center"><?=$horary['2003'];?></td>
                        <td class="text-center"><?=$horary['2004'];?></td>
                <?php } ?>
            </tr>
            <tr>
                <td class="text-center">08:40</td>
                <?php include("models/connect.php");
                
                    $result = mysqli_query($connection, "select * from monday WHERE horario='08:40'");

                    while($horary = mysqli_fetch_array($result)) { ?>
                        <td class="text-center"><?=$horary['2001'];?></td>
                        <td class="text-center"><?=$horary['2002'];?></td>
                        <td class="text-center"><?=$horary['2003'];?></td>
                        <td class="text-center"><?=$horary['2004'];?></td>
                <?php } ?>
            </tr>
            <tr>
                <td class="text-center">09:50</td>
                <?php include("models/connect.php");
                
                    $result = mysqli_query($connection, "select * from monday WHERE horario='09:50'");

                    while($horary = mysqli_fetch_array($result)) { ?>
                        <td class="text-center"><?=$horary['2001'];?></td>
                        <td class="text-center"><?=$horary['2002'];?></td>
                        <td class="text-center"><?=$horary['2003'];?></td>
                        <td class="text-center"><?=$horary['2004'];?></td>
                <?php } ?>
            </tr>
            <tr>
                <td class="text-center">10:40</td>
                <?php include("models/connect.php");
                
                    $result = mysqli_query($connection, "select * from monday WHERE horario='10:40'");

                    while($horary = mysqli_fetch_array($result)) { ?>
                        <td class="text-center"><?=$horary['2001'];?></td>
                        <td class="text-center"><?=$horary['2002'];?></td>
                        <td class="text-center"><?=$horary['2003'];?></td>
                        <td class="text-center"><?=$horary['2004'];?></td>
                <?php } ?>
            </tr>
            <tr>
                <td class="text-center">11:30</td>
                <?php include("models/connect.php");
                
                    $result = mysqli_query($connection, "select * from monday WHERE horario='11:30'");

                    while($horary = mysqli_fetch_array($result)) { ?>
                        <td class="text-center"><?=$horary['2001'];?></td>
                        <td class="text-center"><?=$horary['2002'];?></td>
                        <td class="text-center"><?=$horary['2003'];?></td>
                        <td class="text-center"><?=$horary['2004'];?></td>
                <?php } ?>
            </tr>
            <tr>
                <td class="text-center">12:30</td>
                <?php include("models/connect.php");
                
                    $result = mysqli_query($connection, "select * from monday WHERE horario='12:30'");

                    while($horary = mysqli_fetch_array($result)) { ?>
                        <td class="text-center"><?=$horary['2001'];?></td>
                        <td class="text-center"><?=$horary['2002'];?></td>
                        <td class="text-center"><?=$horary['2003'];?></td>
                        <td class="text-center"><?=$horary['2004'];?></td>
                <?php } ?>
            </tr>
            <tr>
                <td class="text-center">13:20</td>
                <?php include("models/connect.php");
                
                    $result = mysqli_query($connection, "select * from monday WHERE horario='13:20'");

                    while($horary = mysqli_fetch_array($result)) { ?>
                        <td class="text-center"><?=$horary['2001'];?></td>
                        <td class="text-center"><?=$horary['2002'];?></td>
                        <td class="text-center"><?=$horary['2003'];?></td>
                        <td class="text-center"><?=$horary['2004'];?></td>
                <?php } ?>
            </tr>
            <tr>
                <td class="text-center">14:30</td>
                <?php include("models/connect.php");
                
                    $result = mysqli_query($connection, "select * from monday WHERE horario='14:30'");

                    while($horary = mysqli_fetch_array($result)) { ?>
                        <td class="text-center"><?=$horary['2001'];?></td>
                        <td class="text-center"><?=$horary['2002'];?></td>
                        <td class="text-center"><?=$horary['2003'];?></td>
                        <td class="text-center"><?=$horary['2004'];?></td>
                <?php } ?>
            </tr>
            <tr>
                <td class="text-center">15:20</td>
                <?php include("models/connect.php");
                
                    $result = mysqli_query($connection, "select * from monday WHERE horario='15:20'");

                    while($horary = mysqli_fetch_array($result)) { ?>
                        <td class="text-center"><?=$horary['2001'];?></td>
                        <td class="text-center"><?=$horary['2002'];?></td>
                        <td class="text-center"><?=$horary['2003'];?></td>
                        <td class="text-center"><?=$horary['2004'];?></td>
                <?php } ?>
            </tr>
            <tr>
                <td class="text-center">16:10</td>
                <?php include("models/connect.php");
                
                    $result = mysqli_query($connection, "select * from monday WHERE horario='16:10'");

                    while($horary = mysqli_fetch_array($result)) { ?>
                        <td class="text-center"><?=$horary['2001'];?></td>
                        <td class="text-center"><?=$horary['2002'];?></td>
                        <td class="text-center"><?=$horary['2003'];?></td>
                        <td class="text-center"><?=$horary['2004'];?></td>
                <?php } ?>
            </tr>
        </table>
    </div>

    <div class="item">
        <table table class="table table-striped table-bordered">
            <tr>
                <td class="text-center">Horarios</td>
                <td class="text-center">3001</td>
                <td class="text-center">3002</td>
                <td class="text-center">3003</td>
                <td class="text-center">3004</td>
            </tr>
            <tr>
                <td class="text-center">07:00</td>
                <?php include("models/connect.php");
                
                    $result = mysqli_query($connection, "select * from monday WHERE horario='07:00'");

                    while($horary = mysqli_fetch_array($result)) { ?>
                        <td class="text-center"><?=$horary['3001'];?></td>
                        <td class="text-center"><?=$horary['3002'];?></td>
                        <td class="text-center"><?=$horary['3003'];?></td>
                        <td class="text-center"><?=$horary['3004'];?></td>
                <?php } ?>
            </tr>
            <tr>
                <td class="text-center">07:50</td>
                <?php include("models/connect.php");
                
                    $result = mysqli_query($connection, "select * from monday WHERE horario='07:50'");

                    while($horary = mysqli_fetch_array($result)) { ?>
                        <td class="text-center"><?=$horary['3001'];?></td>
                        <td class="text-center"><?=$horary['3002'];?></td>
                        <td class="text-center"><?=$horary['3003'];?></td>
                        <td class="text-center"><?=$horary['3004'];?></td>
                <?php } ?>
            </tr>
            <tr>
                <td class="text-center">08:40</td>
                <?php include("models/connect.php");
                
                    $result = mysqli_query($connection, "select * from monday WHERE horario='08:40'");

                    while($horary = mysqli_fetch_array($result)) { ?>
                        <td class="text-center"><?=$horary['3001'];?></td>
                        <td class="text-center"><?=$horary['3002'];?></td>
                        <td class="text-center"><?=$horary['3003'];?></td>
                        <td class="text-center"><?=$horary['3004'];?></td>
                <?php } ?>
            </tr>
            <tr>
                <td class="text-center">09:50</td>
                <?php include("models/connect.php");
                
                    $result = mysqli_query($connection, "select * from monday WHERE horario='09:50'");

                    while($horary = mysqli_fetch_array($result)) { ?>
                        <td class="text-center"><?=$horary['3001'];?></td>
                        <td class="text-center"><?=$horary['3002'];?></td>
                        <td class="text-center"><?=$horary['3003'];?></td>
                        <td class="text-center"><?=$horary['3004'];?></td>
                <?php } ?>
            </tr>
            <tr>
                <td class="text-center">10:40</td>
                <?php include("models/connect.php");
                
                    $result = mysqli_query($connection, "select * from monday WHERE horario='10:40'");

                    while($horary = mysqli_fetch_array($result)) { ?>
                        <td class="text-center"><?=$horary['3001'];?></td>
                        <td class="text-center"><?=$horary['3002'];?></td>
                        <td class="text-center"><?=$horary['3003'];?></td>
                        <td class="text-center"><?=$horary['3004'];?></td>
                <?php } ?>
            </tr>
            <tr>
                <td class="text-center">11:30</td>
                <?php include("models/connect.php");
                
                    $result = mysqli_query($connection, "select * from monday WHERE horario='11:30'");

                    while($horary = mysqli_fetch_array($result)) { ?>
                        <td class="text-center"><?=$horary['3001'];?></td>
                        <td class="text-center"><?=$horary['3002'];?></td>
                        <td class="text-center"><?=$horary['3003'];?></td>
                        <td class="text-center"><?=$horary['3004'];?></td>
                <?php } ?>
            </tr>
            <tr>
                <td class="text-center">12:30</td>
                <?php include("models/connect.php");
                
                    $result = mysqli_query($connection, "select * from monday WHERE horario='12:30'");

                    while($horary = mysqli_fetch_array($result)) { ?>
                        <td class="text-center"><?=$horary['3001'];?></td>
                        <td class="text-center"><?=$horary['3002'];?></td>
                        <td class="text-center"><?=$horary['3003'];?></td>
                        <td class="text-center"><?=$horary['3004'];?></td>
                <?php } ?>
            </tr>
            <tr>
                <td class="text-center">13:20</td>
                <?php include("models/connect.php");
                
                    $result = mysqli_query($connection, "select * from monday WHERE horario='13:20'");

                    while($horary = mysqli_fetch_array($result)) { ?>
                        <td class="text-center"><?=$horary['3001'];?></td>
                        <td class="text-center"><?=$horary['3002'];?></td>
                        <td class="text-center"><?=$horary['3003'];?></td>
                        <td class="text-center"><?=$horary['3004'];?></td>
                <?php } ?>
            </tr>
            <tr>
                <td class="text-center">14:30</td>
                <?php include("models/connect.php");
                
                    $result = mysqli_query($connection, "select * from monday WHERE horario='14:30'");

                    while($horary = mysqli_fetch_array($result)) { ?>
                        <td class="text-center"><?=$horary['3001'];?></td>
                        <td class="text-center"><?=$horary['3002'];?></td>
                        <td class="text-center"><?=$horary['3003'];?></td>
                        <td class="text-center"><?=$horary['3004'];?></td>
                <?php } ?>
            </tr>
            <tr>
                <td class="text-center">15:20</td>
                <?php include("models/connect.php");
                
                    $result = mysqli_query($connection, "select * from monday WHERE horario='15:20'");

                    while($horary = mysqli_fetch_array($result)) { ?>
                        <td class="text-center"><?=$horary['3001'];?></td>
                        <td class="text-center"><?=$horary['3002'];?></td>
                        <td class="text-center"><?=$horary['3003'];?></td>
                        <td class="text-center"><?=$horary['3004'];?></td>
                <?php } ?>
            </tr>
            <tr>
                <td class="text-center">16:10</td>
                <?php include("models/connect.php");
                
                    $result = mysqli_query($connection, "select * from monday WHERE horario='16:10'");

                    while($horary = mysqli_fetch_array($result)) { ?>
                        <td class="text-center"><?=$horary['3001'];?></td>
                        <td class="text-center"><?=$horary['3002'];?></td>
                        <td class="text-center"><?=$horary['3003'];?></td>
                        <td class="text-center"><?=$horary['3004'];?></td>
                <?php } ?>
            </tr>
        </table>
    </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <svg class="carousel-icon"style="width:24px;height:24px" viewBox="0 0 24 24">
        <path fill="#000000" d="M22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2A10,10 0 0,1 22,12M7,12L12,17V14H16V10H12V7L7,12Z" />
    </svg>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <svg class="carousel-icon"style="width:24px;height:24px" viewBox="0 0 24 24">
        <path fill="#000000" d="M2,12A10,10 0 0,1 12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12M17,12L12,7V10H8V14H12V17L17,12Z" />
    </svg>
  </a>
</div>

</div>

<?php include("views/layouts/footer.php") ?>
