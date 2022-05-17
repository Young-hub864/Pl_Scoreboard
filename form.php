<?php
	include 'pages/header.php';
?>
<body class="bg-light">
      <form class="mt-5" action="processor/scoresheet.php" method="POST">
         <div class="container">
            <div class="form-group mb-3">
               <label>Home</label>
               <input type="number" name="home" class="form-control">
            </div>
            <div class="form-group mb-3">
               <label>Away</label>
               <input type="number" name="away" class="form-control">
            </div>
            <div class="form-group mt-2">
               <input type="submit" id="submit_btn" class="btn btn-primary" value="Submit">
            </div>
         </div>
      </form>
      <?php
	include 'pages/footer.php';
?>