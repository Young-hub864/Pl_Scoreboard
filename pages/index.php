<?php
  include "config.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>LIVE SCORE BOARD DEMO</title>
    <link rel="stylesheet" href="css/style.css"/>
    <script src="4b-score.js"></script>
  </head>
  <body style="background-image: url('images/champe.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;">
    <!-- (A) BIG SCORE BOARD -->
    <div id="scoreBoard" >
      <div id="scoreTime">Matchday 11<?=date(" Y-m-d ")?></div>
      <div id="scoreHome"> <img src="images/che.png" alt=""></div>
      <div id="scoreAway"> <img src="images/bayern.png" alt=""> </div>
      <?php
                    //$g_id = $_GET['g_id'];
                    $sql = "SELECT * FROM game_score";
                    $result = $conn->query($sql);                
                    if($result->num_rows > 0 ){
                        // output of data each row 
                        while($row = $result->fetch_assoc()){
                ?>
      <div id="scoreHome"><?php echo $row['score_home']; ?></div>
      <?php
                        }
                      }
      ?>

<?php
                    //$g_id = $_GET['g_id'];
                    $sql = "SELECT * FROM game_score";
                    $result = $conn->query($sql);                
                    if($result->num_rows > 0 ){
                        // output of data each row 
                        while($row = $result->fetch_assoc()){
                ?>
      <div id="scoreAway"><?php echo $row['score_away']; ?></div>
      <div id="scoreAway"> <p style="font-size:15px;"><?php echo $row['score_comment']; ?></p> </div>


      <?php
                        }
                      }
      ?>
      <div id="scoreTime">First Half<?=date(" H:i")?></div>
      <div id="nameHome">HOME</div>
      <div id="nameAway">AWAY</div>
    </div>

    <!-- (B) SCORE HISTORY -->
    <div id="scoreHistory"></div>
  </body>
</html>