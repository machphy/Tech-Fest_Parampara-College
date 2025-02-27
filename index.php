<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Parampara | all events</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <?php
  require 'usercomponents/navbar.php';
  ?>
  <p class="text-danger text-center">date and time are not fixed yet, all there date and time are dummy yet</p>
  <h1 class="text-center text-success">All event list releted to technical</h1>
  <div class="container-fluid">
    <div class="row">
      <?php
      require './admin/connect.php';
      $query1 = "select * from main_events where type = 'technical'";
      $exe1 = mysqli_query($dbc, $query1);
      while ($row1 = mysqli_fetch_array($exe1)) {
        $p_id = $row1['eid'];
        $name = $row1['name'];
        $desc = $row1['description'];
        $type = $row1['type'];
        $date = $row1['date'];
        $time = $row1['time'];
      ?>
      <div class="col-sm-6 col-md-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-success"><?php echo $name ?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $type ?></h6>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $date ?></h6>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $time ?></h6>
            <p class="card-text"><?php echo $desc ?></p>
          </div>
        </div>
      </div>
      <?php

      }
      ?>
    </div>
  </div>

  <h1 class="text-center text-primary">All event list releted to cultural</h1>

  
  <div class="row">
    <?php
    require './admin/connect.php';
    $query1 = "select * from main_events where type = 'cultural'";
    $exe1 = mysqli_query($dbc, $query1);
    while ($row1 = mysqli_fetch_array($exe1)) {
      $p_id = $row1['eid'];
      $name = $row1['name'];
      $desc = $row1['description'];
      $type = $row1['type'];
      $date = $row1['date'];
      $time = $row1['time'];
    ?>
    <div class="col-sm-6 col-md-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-primary"><?php echo $name ?></h5>
          <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $type ?></h6>
          <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $date ?></h6>
          <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $time ?></h6>
          <p class="card-text"><?php echo $desc ?></p>
        </div>
      </div>
    </div>
    <?php

    }
    ?>
  </div>

  <h1 class="text-center text-warning">All event list releted to Sport</h1>
  <div class="row">
  <?php
    require './admin/connect.php';
    $query1 = "select * from main_events where type = 'Sport'";
    $exe1 = mysqli_query($dbc, $query1);
    while ($row1 = mysqli_fetch_array($exe1)) {
      $p_id = $row1['eid'];
      $name = $row1['name'];
      $desc = $row1['description'];
      $type = $row1['type'];
      $date = $row1['date'];
      $time = $row1['time'];
    ?>
    <div class="col-md-3 col-sm-6">
      <div class="card" >
        <div class="card-body">
          <h5 class="card-title text-warning"><?php echo $name ?></h5>
          <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $type ?></h6>
          <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $date ?></h6>
          <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $time ?></h6>
          <p class="card-text"><?php echo $desc ?></p>
        </div>
      </div>
    </div>
    <?php

    }
    ?>
  </div>
  <?php
  include "usercomponents/footer.php";
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>