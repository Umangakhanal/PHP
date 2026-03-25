<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(isset($_Get['name'])){
        $name= $_GET['name'];
        echo "Your name is $name";
    }
    ?>
    <h1>This is a get form method</h1>
    <form method="GET">
        Full Name: <input type ="text" name ="name">
        <input type="submit" value="submit">
    </form>
</body>
</html>