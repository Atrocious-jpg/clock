<?php 
    include 'dbconnect.php';
?>
<!DOCTYPE html>

<html lang="en">
<head><meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/de19764f4a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>
  

    <!-- <img class="shape" src="https://s3.us-east-2.amazonaws.com/ui.glass/shape.svg" alt=""> -->
    <div id="main_container">
        
  <div class="header">
  <h2>Clock</h2>
  <!-- <input type="text" id="search" placeholder="Choose a timezone:" list="List" onchange="changeTZ()"/>
   <datalist id="List">
         <?php 
            $sql = "SELECT zone_name from zone";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
              while ($row = mysqli_fetch_assoc($result)) {
                # code...
                echo '<option value = "'.$row["zone_name"].'"> '.$row["zone_name"].'</option>';
              }
            }
         ?>
  </datalist> -->
  <select id="timezones" onchange="changeTZ()">
         <?php 
            $sql = "SELECT zone_name from zone";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
              while ($row = mysqli_fetch_assoc($result)) {
                # code...
                echo '<option value = "'.$row["zone_name"].'"> '.$row["zone_name"].'</option>';
              }
            }
         ?>
  </select>
    </div>
    <div id="card">
        <div class="analogue">
            <h1>Analogue Clock</h1>
            <div class="clock">
                  <div class="hour">
                     
                  </div>
                  <div class="min">
                      
                  </div>
                  <div class="second">
                     
                  </div>
              </div>
        </div>
        <div class="digital">
              <span class="container" onclick="hours()" title="Click to toggle AM/PM">

              </span>
              <span class="HOURS">
                  
              </span>
              <span class="sound">
                <i class='fas fa-volume-mute' onclick="toggleIcon()"></i>
              </span>
        </div>
    </div>
</div>


<?php include 'header.php';

?>

    

</body>
</html>