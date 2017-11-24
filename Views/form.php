<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./Assets/CSS/style.css">
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
  <title>Document</title>
</head>
<body>

  <form class="Login" enctype="multipart/form-data" method="post" action="imageupload.php">
   <div class="form_ctn">
     <h2>Upload</h2>
      <input id="fileload" type="file" size="32" name="image" value="">
      <input type="text" name="title" placeholder="Title">
      <textarea id="description" type="text" name="description" placeholder="Description">Description</textarea>
      <input id="buttonForm" type="submit" name="Submit" value="upload">
    </div>
  </form>
</body>
</html>
