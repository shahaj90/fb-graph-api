<!DOCTYPE html>
<html lang="en">

<head>
    <title>Post Failed!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <div class="alert alert-danger alert-dismissible">
            <?php echo $_GET['msg'] ?>
        </div>
        <div>
            <a href="index.php" class="btn btn-info" role="button">
                Back to home
            </a>
        </div>
    </div>

</body>

</html>