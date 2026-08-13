
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu item</title>
</head>
<body>
    <form action="" method="POST">
id:
<input type="number" name="id">
<br><br>
price:
<input type="number" name="price">
<br><br>
item Name:
<input type="text" name="name">
<br><br>
category:
<input type="text" name="cateory">
<br><br>
description:
<input type="text" name="description">
<br><br>
    <button type="Submit ">Submit</button>
</form>
</body>
</html>
<?php
include'db.php';
if ($_SERVER["REQUEST_METHOD"]==="POST") {
    $id=$_POST['id'];
    $price=$_POST['price'];
    $Name=$_POST['name'];
    $category=$_POST['category'];
    $description=$_POST['description'];
    echo"$id";
    echo"$price";
    echo"$Name";
    echo"$category";
    echo"$description";
    $sql=$conn-> prepare('INSERT INTO menu VALUES(?,?,?,?,?)');
    $sql->bind_param('idsss',$price,$Name,$catrgory,$description);
    if($sql-> execute()){
        echo "data inserted...";
    }else{
        echo "Not inserted...";
    }
}
?>




