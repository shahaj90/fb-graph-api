<!DOCTYPE html>
<html lang="en">

<head>
    <title>Facebook Post Share</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="jumbotron text-center">
        <h1>Share With Your Facebook Post</h1>
    </div>

    <div class="container">
        <img src="images/feature-1.png" class="rounded" alt="Cinque Terre" width="304" height="236">
        <form action="script/publishedPostImage.php" method="POST">
            <div class="row pl-3 mt-1">
                <button type="submit" class="btn btn-success">Publish</button>
            </div>
        </form>
    </div>

</body>

</html>