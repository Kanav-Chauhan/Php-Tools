<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>db.IMG.STORE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container col-md-8 my-5">
<form  action="upload.php" method="post" enctype="multipart/form-data">
    <label for="img" class="form-label ">Select Image File:</label>
    <input  class="form-control" type="file" id="img" name="image"><br> <br>
    <row> <col>  <input class="btn btn-primary col-md-4" type="submit" name="submit" value="Upload"></col>
</form>
<col>

<a href="/image-upload-php-and-mysql/view.php" class="btn btn-success col-md-3">View Uploaded Pictures</a>
</col></row>  
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>