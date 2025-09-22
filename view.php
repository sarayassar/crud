<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        .book-details{
            background:#f5f5f5;
            padding:50px;
        }
    </style>
</head>
<body>
   <div class="container">
     <header class="d-flex justify-content-between my-4">
            <h1>Book Details</h1>
            <div>
                <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <div class="book-details my-4">
            <?php
               if(isset($_GET["id"]))
               {
                $id = $_GET["id"];
                include("connect_db.php");
                $sql = "SELECT * FROM books WHERE id = $id";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
                ?>
                <h2>title</h2>
                <p><?php echo $row["title"] ?></p>
                <h2>description</h2>
                <p><?php echo $row["description"] ?></p>
                <h2>type</h2>
                <p><?php echo $row["type"] ?></p>
                <h2>author</h2>
                <p><?php echo $row["author"] ?></p>
                <?php
               }
            ?>
        </div>
   </div> 
</body>
</html>