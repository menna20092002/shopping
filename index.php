<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online shop|اضافة منتجات</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method= "post" enctype = "multipart/form-data">
              <h2 > موقع تسويقى اونلاين </h2>  
              <img src = logooo.jpg alt="logo" width ="300px">
              <br>
              <input type ="text" name ="name" >
              <br>
              <input type ="text" name ="price">
              <br>
              <input type ="file" id="file" name="image" style ="display:none;">
              <label for ="file">  اختيار صورة للمنتج </label>
              <button name ="upload"> ✅رفع المنتج </button>
              <br>
              <a href="products.php"> عرض كل المنتجات </a>

            </form>
        </div>
        <p> developed by Manoon </p>
</center>
</body>
</html>