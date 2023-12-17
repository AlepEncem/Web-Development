<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="utf-8">
              <title>Make a comment</title>
    </head>
<body>
    <h1>Make a comment</h1>
    <p>
    Thank you for your participation!
    We have registered your comment in our database :
    </p>
    <u1>
    <li> NAME :
        <strong><?php echo $_POST['name']; ?></strong>
    </li>
    <li> EMAIL :
        <strong><?php echo $_POST['email']; ?></strong>
    </li>
    <li> COMMENT :
        <strong><?php echo $_POST['message']; ?></strong>
    </li>
    </u1>
    </body>
</html>