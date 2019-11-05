<?php require_once 'upload.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<a href="Images.php">VOIR LES IMAGES</a>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="fichier[]" multiple="multiple" />
    <input type="submit" name="submit" value="Send" />
</form>





</body>
</html>