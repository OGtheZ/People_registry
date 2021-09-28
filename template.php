<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>People registry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
textarea {
    resize: none;
}
input[type=submit] {
    background-color: #4CAF50;
}
    </style>
</head>
<body>
    <form method="post" class="addForm">
        <label for="name">First name:</label><br>
        <input type="text" id="name" name="name"><br><br>
        <label for="surname">Last name:</label><br>
        <input type="text" id="surname" name="surname"><br><br>
        <label for="IDnumber">ID number:</label><br>
        <input type="text" id="IDnumber" name="IDnumber"><br><br>
        <label for="description">Description</label><br>
        <textarea name="description" id="description" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Add" name="addButton">
    </form>
    <br>
    <form method="get" class="searchForm">
        <label for="search">Search by ID</label><br>
        <br>
        <input class="search" type="text" id="search" name="search"><br>
        <br>
        <input type="submit" value="Search" name="searchButton">
    </form>
    <br>
    <form method="get" class="deleteForm">
        <label for="delete">Delete by ID number</label><br>
        <br>
        <input type="text" id="delete" name="delete"><br>
        <br>
        <input type="submit" value="Delete" name="deleteButton">
    </form>
</body>
</html>