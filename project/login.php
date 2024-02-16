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
<center>
    <h4>Login Please</h4>
</center>
<center>


    <?php
        if(isset($_GET['msg'])){
    ?>

<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Invalid!</strong> Try Again
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

    <?php } ?>


<form action="lch.php" method="post">
    <p>User Name: 
        <input type="text" name="email" placeholder="ur@gmail.com">
    </p>

    <p>
        Password:
        <input type="text" name="password">
    </p>

    <p>
                <input class="btn btn-success" type="submit" name="submit" value="Login"> &nbsp;
                <input class="btn btn-warning" type="reset" name="reset" value="Reset"> 
    </p>

</form>
</center>
</body>
</html>