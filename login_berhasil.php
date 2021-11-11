<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: Home.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Homepage</title>
</head>
<body style="background-image:url(https://images.unsplash.com/photo-1435575653489-b0873ec954e2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=870&q=80);background-repeat:no-repeat;background-size:cover">
    <div class="container my-2">
    <div class="card">
        <div class="card-body">
        <div class="container-logout">
        <form action="" method="POST" class="login-email">
            <?php echo "<h1 class = 'text-center my-2' >Selamat Datang, " . $_SESSION['username'] . "!" . "</h1>"; ?>
            <div class="input-group">
                <a href="list.php" class="btn btn-primary" >List Data</a>
            </div>

            <div class="input-group">
                <a href="logout.php" class="btn btn-danger my-2">Logout</a>
            </div>
        </form>
    </div>
        </div>
    </div>
    </div>
    
</body>

</html>