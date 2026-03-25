
    <?php 
    if(isset($_Get['name'])){
        $name= $_GET['name'];
        echo "Your name is $name";
        echo "Hello";
    }
    ?>
    <h1>This is a get form method</h1>
    <form method="get">
        Full Name: <input type ="text" name ="name">
        <input type="submit" value="submit">
    </form>
