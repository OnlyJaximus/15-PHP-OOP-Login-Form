<?php

require_once("user_validator_class.php");

if (isset($_POST['btn-submit'])) {

    // validate entries
    // echo "form submitted";

    // echo "<pre>";
    // print_r($_POST);
    //     Array
    // (
    //     [username] => Bleki
    //     [email] => blesicb@yahoo.com
    //     [btn-submit] => submit
    // )



    $validation = new UserValidator($_POST);
    $errors = $validation->validateForm();

    // save data to db
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP OOP</title>
</head>
<!-- value="<//?php echo htmlspecialchars($_POST['username']) ?? '' ?>" -->

<body>
    <div class="new-user">
        <h2>Create new user</h2>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">

            <label for="username">Username:</label>
            <input type="text" name="username" value="<?php echo !empty($_POST['username']) ? htmlspecialchars($_POST['username']) : '' ?>">
            <div class="error">
                <?php echo $errors['username'] ?? '' ?>
            </div>


            <label for="email">Email:</label>
            <input type="text" name="email" value="<?php echo !empty($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>">
            <div class=" error">
                <?php echo $errors['email'] ?? '' ?>
            </div>

            <input type="submit" value="submit" name="btn-submit">
        </form>

    </div>
</body>

</html>