<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit book</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<div class="container">
    <header class="d-flex justify-content-between my-4">
        <h1>Edit Book</h1>
        <div>
            <a href="index.php" class="btn btn-primary">Back</a>
        </div>
    </header>

    <?php
    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);
        include("connect_db.php");
        $sql = "SELECT * FROM books WHERE id=$id";
        $result = mysqli_query($conn, $sql);

        if ($row = mysqli_fetch_array($result)) { ?>
            <form action="process.php" method="post">
                <div class="form-element my-4">
                    <input type="text" class="form-control" name="title"
                           value="<?php echo htmlspecialchars($row["title"]); ?>"
                           placeholder="Book title:">
                </div>

                <div class="form-element my-4">
                    <input type="text" class="form-control" name="author"
                           value="<?php echo htmlspecialchars($row["author"]); ?>"
                           placeholder="Author Name:">
                </div>

                <div class="form-element my-4">
                    <select name="type" class="form-control">
                        <option value="">Select book type</option>
                        <option value="Adventure" <?php if ($row["type"]=="Adventure") echo "selected"; ?>>Adventure</option>
                        <option value="Fantasy"   <?php if ($row["type"]=="Fantasy")   echo "selected"; ?>>Fantasy</option>
                        <option value="Thrillar"  <?php if ($row["type"]=="Thrillar")  echo "selected"; ?>>Thrillar</option>
                        <option value="Horror"    <?php if ($row["type"]=="Horror")    echo "selected"; ?>>Horror</option>
                    </select>
                </div>

                <div class="form-element my-4">
                    <input type="text" class="form-control" name="description"
                           value="<?php echo htmlspecialchars($row["description"]); ?>"
                           placeholder="Book Description:">
                </div>

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                <div class="form-element">
                    <button type="submit" class="btn btn-success" name="edit" value="Edit Book">
                        Edit Book
                    </button>
                </div>
            </form>
        <?php
        } else {
            echo "<div class='alert alert-danger'>Book not found.</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>No book id provided.</div>";
    }
    ?>
</div>
</body>
</html>
