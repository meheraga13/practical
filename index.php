<?php include 'db.php'?>
<h1>Book Inventory System<h1>
    <h2>Add a new book</h2>
    <form action="" method="POST">
    <label for="title">Title</label>
    <input type="text" id="title">
    <br>
    <label for="price">Price</label>
    <input type="text" id="price">
    <br>
    <label for="stock">Stock Position</label>
    <input type="text" id="stock">
    <br>
    <button type="submit">Submit</button>
    </form>

    <?php
    if($_SERVER ='REQUEST_METHOD'==='POST')
    {
        $title = $_POST['title'];
        $price = $_POST['price'];
        $stock = $_POST['stock'];

        $stmt = $_POST('INSERT INTO [$title, $price, $stock] VALUES (?,?,?)' );

        if($stmt->$execute('$title', '$price', '$stock'))
        {
            echo 'New book is added successfully';
        }
        else
        {
           echo 'Failed to add new book';
        }
    }
    ?>