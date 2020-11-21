<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link rel="stylesheet" href="css/style.css"> 
  <link rel="stylesheet" href="css/main.css"> 
</head>
<body>
<h2>Admin</h2>
<div id="admin-books">
   
  <section  class="admin-books left">
  
</section>
<section class="admin-books center">
<div id=insertBooks class="content">
<div class="form">

  <form action="create.php"method="POST" enctype="multipart/form-data">

  <input type="text" name='isbnNr' placeholder="Isbn nr.">
  
  <input type="text" name='title' placeholder="Bogtitel">
  <input type="text" name='forfatter' placeholder="Forfatter">
  <input type="text" name='forlag' placeholder="Forlag">
  <input type="text" name='pris'placeholder="Pris">
  <input type="file" name = "file" >
  <input type="submit" value="Upload" name = "submit">
  <input type="reset" value="Reset">

  </form></div></div>
  
</section>
<section class="admin-books right">
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus praesentium rem saepe aliquid sint nisi repellat eveniet corporis officia ducimus velit, numquam modi dignissimos perferendis labore ut dolorum beatae inventore, et accusamus expedita, facilis laboriosam. Aliquid sit earum eius incidunt sequi ex, vel perspiciatis. Omnis blanditiis ratione id illum eligendi.
</section>




  
 
 
</body>
</html>