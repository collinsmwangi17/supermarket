<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">Form</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <br><br><br><br>
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <td>Item</td><td>A price</td><td>B price</td><td>Price Difference</td><td>Action</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    require "../connection.php";

                    $sql =  "select * from market";
                    $res = $conn->query($sql);

                    while ($row = mysqli_fetch_array($res)) {
                        echo "<tr>";
                        echo "<td>".$row['item']."</td>";
                        echo "<td>".$row['chandaria']."</td>";
                        echo "<td>".$row['nakumatt']."</td>";
                        
                        $dif = $row['chandaria'] - $row['nakumatt'];
                        if($row['chandaria'] > $row['nakumatt']){
                            $dif = ($row['chandaria'] / $row['nakumatt']) * 100;
                            echo "<td> chandaria is cheaper by ".$dif."%</td>";
                        }else{
                            $dif = ($row['nakumatt'] / $row['chandaria']) * 100;
                            echo "<td> nakumatt is cheaper by ".$dif."%</td>";
                        }
                    ?>
                        <td>
                            <form method="POST" action="../scripts/list_sctrips.php">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <input type="submit" value="Delete">
                            </form>
                        </td>
                    <?php
                        echo "</tr>";
                    } 
                ?>
            </tbody>
        </table>
    </div><!-- /.container -->

</body>
</html>