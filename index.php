<?php include 'extractor.php';?>

<!doctype html>
<html lang="en">
    <head>
          <meta charset="UTF-8">
  <meta name="description" content="data extractor from csv file">
  <meta name="keywords" content="csv,extract data,data">
  <meta name="author" content="mrbounkoub - pandorabox">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
      <link rel="icon" type="image/x-icon" href="src/favicon.png">
  <title>Data BOX</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <link rel="stylesheet" href="src/styles.css">
</head>
<body>
    <div class="costum">
  <div class="container mt-5">
    <h1>Extract Data from CSV</h1>
    <form method="post" enctype="multipart/form-data">
      <div class="form-group">
        <input type="file" class="form-control-file" id="file" name="file">
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Download Extracted Data</button>
    </form>
  </div>
        </div>
    <footer>
  <div class="container" align="center">
    <p>Created with ❤ &copy; <?php echo date("Y"); ?> Pandorabox Company </p>
  </div>
</footer>

</body>
</html>
