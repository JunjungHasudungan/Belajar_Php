<?php 


// create some variable connection to database
$mysql =  new mysqli("localhost", "root", "", "motorcycleshop");



   /*  if( $result = $mysql->query($sql)){ // mengeluarkan semua nilai dari mysql mengguanakn query
        if($result->num_rows > 0){
            echo"<table>";
                echo"<tr>";
                    echo"<th>No</th>";
                    echo"<th>Name</th>";
                    echo"<th>Year</th>";
                    echo"<th>Type</th>";
                    echo"<th>Capasity</th>";    
                echo"</tr>";
                while($data = $result->fetch_array()){ # memasukkan kedalam array
                    echo"<tr>";
                        echo"<td>". $data['id'] ."</td>";
                        echo"<td>".$data['name']."</td>";
                        echo"<td>".$data['year']."</td>";
                        echo"<td>".$data['type']."</td>";
                        echo"<td>".$data['capacity']."</td>";
                        echo"</tr>";
                }
            echo"</table>";
        }
        else{
            echo "No matching data in record";        
        }
    }

 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<table class="table table-bordered mt-2 mr-3 ">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Type</th>
      <th scope="col">Year</th>
      <th scope="col">Capasity</th>
      <th>Aksi</th>
    </tr>
    <?php 
        include 'conn.php'; // call connection
        $no = 1;
        $sql = "SELECT * FROM motors";
        $query = mysqli_query($mysql,$sql);
    while($result = mysqli_fetch_array($query)){
        ?>
    <tr>
      <th scope="row"><?php echo $no++ ?></th>
      <td><?php echo $result['name']?></td>
      <td><?php echo $result['type']?></td>
      <td><?php echo $result['year']?></td>
      <td><?php echo $result['capacity']?></td>
      <td>
          <input type = "submit" class = "btn btn-secondary" value = "Edit">
          <input type = "submit" class = "btn btn-warning" value = "Hapus">
        </td>
    </tr>
<?php 
    }
?>
  </thead>
  <tbody>

  </tbody>
</table>  
</body>
</html>