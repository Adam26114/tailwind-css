<?php 








?>





<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <div class="col-md-6 mx-auto mt-5">
        <form action="<?php echo $_SEVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
            <div class="form-group mb-3">
                <label for="profile">Profile Picture</label>
                <input type="file" name="profile" id="profile" class="form-control"/>
            </div>
            <input type="submit" name="profile" class="btn btn-primary float-end" value="Upload"/>
        </form>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>