<?php

session_start();

if(!isset($_SESSION['admin_name'])){
    header("location:login.php");
}

?>

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
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="text-center m-4" style="color:blue">Mobile Store</h2>
        </div>
    
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <form action="db.php" method="post" enctype="multipart/form-data">
            <p>Name:
           <input type="text" name="name" placeholder="Your name"></p>

            <p>Mobile Choose:
                <select name="mobile" id="">
                    <option value="">-Choose Any One-</option>
                    <option value="Apple">Apple</option>
                    <option value="Lg">Lg</option>
                    <option value="MI">MI</option>
                </select>
            </p>
            
            <p>Specification:
                <input type="radio" name="spec" value="4Gb">4Gb
                <input type="radio" name="spec" value="16gb">16gb
                <input type="radio" name="spec" value="32gb">32gb
                
            </p>

            <p>
                Customized Color:
                <input type="text" name="color" value="" >
            </p>

            <p>
                Paymeny Terms:
                <input type="checkbox" name="pay[]" id="" value="Cash">Cash
                <input type="checkbox" name="pay[]" id="" value="Upi">Upi
                <input type="checkbox" name="pay[]" id="" value="Card">Card
            </p>

            <p>Uplaod You Image:
                <input type="file" name="img" id="">
            </p>

            <p>
                <input class="btn btn-success" type="submit" name="submit" value="Submit"> &nbsp;
                <input class="btn btn-warning" type="reset" name="reset" value="Reset"> 
            </p>
           
        </form>
    </div>
    <div class="col-sm-4"></div>
    
</div>
</div>
</body>
</html>