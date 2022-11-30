<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App</title>
    <style>
        <?php require "style.css" ?>
    </style>
</head>
<body>
    <div class="mx-wd auto">
        <div class="center">
            <div class="bg">
                <header>WhatsApp Chat App</header>
                <form action="insert.php" method="post" enctype="multipart/form-data">
                    <div class="inline">
                        <div class="input">
                            <label for="">First Name</label>
                            <input type="text" name="fname">
                        </div>
                        <div class="input" style="margin-left:20px;">
                            <label for="">Last Name</label>
                            <input type="text" name="lname">
                        </div>
                    </div>
                    <div class="input">
                        <label for="">Email</label>
                        <input type="text" name="email">
                    </div>
                    <!-- <div class="file">
                        <label for="">Select image</label>
                        <input type="file" name="file">
                    </div> -->
                    <div class="input">
                        <label for="">Password</label>
                        <input type="password" name="password">
                    </div>
                    <div class="input button" style="display:flex; align-items: center; justify-content: center;">
                        <input type="submit" name="create" value="Continue">
                    </div>
                    <div class="link">already signed in? <a href="login.php">Login</a></div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>