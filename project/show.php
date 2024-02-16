<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<h3 class="text-center m-4" style="color:blue;">Show All Data</h3>
<table class="table">
    <thead>
        <tr>
            <th>Sr.No</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>Specification</th>
            <th>Mobile Color</th>
            <th>Payment Terms</th>
            <th>Image</th>
            <th colspan="2" class="text-center">Option</th>
        </tr>
    </thead>
    <tbody>

    <?php
        $i = 0;
        $con = mysqli_connect("localhost","root","","project");
        $sel= "SELECT * FROM std";
        $rs = $con->query($sel);
        while($row =$rs-> fetch_assoc()){      

    ?>
        <tr>
            <td scope="row"> <?php echo ++$i; ?> </td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['spec']; ?></td>
            <td><?php echo $row['color']; ?></td>
            <td><?php echo $row['pay']; ?></td>
            <td><img  style="width: 100px;" src="upload/<?php echo $row['image']; ?>" alt=""></td>
            <td><a  href="del.php?id=<?php echo $row['c_id']; ?>" onclick="return confirm('Are you want to delete?');"><i class="fa-solid fa-trash fa-beat fa-sm" style="color: #ed0202;"></i></a></td>
            <td><a  href="edt.php?id=<?php echo $row['c_id']; ?>" onclick="return confirm('Are you want to edite?');"><i class="fa-solid fa-pen-to-square fa-lg" style="color: #26f50a;"></i></a></td>
            
        </tr>
        <?php } ?>
    </tbody>
</table>
<center>
    <a class="btn btn-success" href="index.php">Insert</a> &nbsp; &nbsp;
    <a class="btn btn-danger" href="logout.php">Logout</a>
</center>




</body>
</html>