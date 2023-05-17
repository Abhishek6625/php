<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image upload</title>
    <style>
        body{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            background-color: #111;
        }
        form{
            width: 300px;
            margin: auto;
            background-color: white;
            padding: 20px;
            display: flex;
            justify-content: center;
            justify-items: center;
            margin-top: 250px;
            border-radius: 10px;
        }
        from input{
            width: 100%;
            margin: auto;
        }
        .btn{
            font-size: 16px;
            font-weight: 700;
            padding: 2px 6px;
            border: none;
            background-color: #fff;
            border-radius: 10px;
        }
        .btn:hover{
            background-color: #111;
            color: #fff;
             transition: 1s;
        }
    </style>
</head>
<body>
    <form action="demo.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit" value="save" class="btn">
    </form>
</body>
</html>