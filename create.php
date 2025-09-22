<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new book</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Add New Book</h1>
            <div>
                <a href="index.php" class="btn btn-primary">Back</a>
            </div>

        </header>
        <form action="process.php" method="post">
            <div class="form-element my-4">
                <input type="text" class="form-control" name="title" placeholder="Book title:">
            </div>
             <div class="form-element my-4">
                <input type="text" class="form-control" name="author" placeholder="Author Name:">
            </div>
             <div class="form-element my-4">
                <select name="type" class="form-control">
                    <option value="">Select book type</option>
                    <option value="Adventure">Adventure</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="Thrillar">Thrillar</option>
                    <option value="Horror">Horror</option>
                </select>
             </div>
             <div class="form-element my-4">
                <input type="text" class="form-control" name="description" placeholder="Book Description:">
            </div>
            <div class="form-element">
                <button type="submit" class="btn btn-success" name="create" value="Add Book">Add Book</button>
            </div>
        </form>
    </div>
</body>
</html>