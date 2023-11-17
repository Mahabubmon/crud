<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Ajax CRUD</h1>
        <input type="text" id="name" placeholder="enter Name..."><br>
        <input type="email" id="email" placeholder="enter Email..."><br>
        <input type="text" id="pass" placeholder="enter Password..."><br><br>
        <button class="btn">Insert Data</button>
        <h1>Reading Data From Databse</h1>
        <table>
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Delete</th>
                <th>Edit</th>
            <tbody id="tbody">

            </tbody>
            </thead>
        </table>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="ajax.js"></script>

</body>

</html>