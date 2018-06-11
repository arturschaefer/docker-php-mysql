<!-- docker-compose build -->
<!-- docker-compose up -->

<html>
<head>
  <title>Tabela de Pessoas...</title>

  <meta charset="utf-8">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
  <div class="container">
    <?php echo "<h1>Pessoas</h1>"; ?>

    <?php
    $conn = mysqli_connect("db_php", "root", "root", "app_development");
    $query = 'SELECT * From Pessoas';
    $result = mysqli_query($conn, $query);
    echo '<table class="table table-striped">';
    echo '<thead></th><th>ID</th><th>Nome</th></tr></thead>';
    while($value = $result->fetch_array(MYSQLI_ASSOC)){
      echo '<tr>';
      foreach($value as $element){
        echo '<td>' . $element . '</td>';
      }
      echo '</tr>';
    }
    echo '</table>';
    $result->close();
    mysqli_close($conn);
    ?>
  </div>
</body>
</html>
