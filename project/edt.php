<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<?php
$con = mysqli_connect("localhost","root","","project");

$id= $_GET['id'];

$sel="SELECT * FROM std WHERE c_id='$id'";
$rs=$con->query($sel);
$row=$rs->fetch_assoc();

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="text-center m-4" style="color:green">Update Electronics Product</h2>
        </div>
    
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <form action="upd.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $row['c_id']; ?>">
            <p>Name:
           <input type="text" name="name" placeholder="Write you name" value="<?php echo $row['name']; ?>"></p>

            <p>Mobile Choose:
                <select name="mobile" id="">
                    <option value="">-Choose Any One-</option>
                    <option <?php if($row['mobile'] == "Apple" ){ echo "selected";} ?> value="Apple">Apple</option>
                    <option <?php if($row['mobile'] == "Lg" ){ echo "selected";} ?> value="Lg">Lg</option>
                    <option <?php if($row['mobile'] == "MI" ){ echo "selected";} ?> value="MI">MI</option>
                </select>
            </p>
            
            <p>Specification:
                <input <?php if($row['spec'] == "4Gb" ){ echo "checked";} ?> type="radio" name="spec" value="4Gb">4Gb
                <input <?php if($row['spec'] == "16gb" ){ echo "checked";} ?> type="radio" name="spec" value="16gb">16gb
                <input <?php if($row['spec'] == "32gb" ){ echo "checked";} ?> type="radio" name="spec" value="32gb">32gb
                
            </p>

            <p>
                Customized Color:
                <input type="text" name="color" value="<?php echo $row['color']; ?>" >
            </p>

            <?php 
                 $subarr= explode(",",$row['pay']);
            ?>

            <p>
                Paymeny Terms:
                <input <?php if(in_array("Cash",$subarr)) {echo "checked";} ?> type="checkbox" name="pay[]" id="" value="Cash">Cash
                <input <?php if(in_array("Upi",$subarr)) {echo "checked";} ?> type="checkbox" name="pay[]" id="" value="Upi">Upi
                <input <?php if(in_array("Card",$subarr)) {echo "checked";} ?> type="checkbox" name="pay[]" id="" value="Card">Card
            </p>

            <p>Uplaod You Image:
                <input type="file" name="img" id="">
            </p>

            <p><img  style="width: 100px;" src="upload/<?php echo $row['image']; ?>" alt=""></p>

            <p>
                <input class="btn btn-success" type="submit" name="submit" value="Update"> &nbsp;
                <input class="btn btn-warning" type="reset" name="reset" value="Reset"> 
            </p>

            
        </form>
    </div>
    <div class="col-sm-4"></div>
    
</div>
</div>
</body>
</html>