<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>
    <?php 

    ?>
    
    <!---->
    <table class="table">
  <thead>
    <tr>
        
      <th scope="col">#id</th>
      <th scope="col">nom</th>
      <th scope="col">note</th>
      <th scope="col">img</th>
      <th scope="col">commentaire</th>
    </tr>
  </thead>
  <tbody>

    <?php 
    
    $servername = "localhost";
    $username = "root";
    $password = "Azgt3878";
    $db = "Jeux";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $conn->query('SET NAMES utf8'); $sql = "SELECT * FROM steam";
    $result = $conn->query($sql);
     if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo '<tr><th scope="row">'. $row["id"].'</th><td>'. $row["nom"].'</td><td>'. $row["note"].'</td><td><img src='. $row["img"].' height="150"/></td><td>'. $row["commentaire"].'</td></tr>';      }
    } else {
      echo "0 results";
    }
    $conn->close();
    ?>
  </tbody>
</table>
    
<a href="ajouter.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">ajouter.php</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>