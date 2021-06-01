<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>send-email</title>
</head>
<body>
    <form action="{{ route('email/send') }}"method="POST" enctype="multipart/form-data">

     @csrf
        
    <input type="text" name="name">
    <input type="file" name="image">
     <br>
     <input type="submit" value="submit">
    </form>

</body>
</html>