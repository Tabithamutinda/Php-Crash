<?php


session_start();

if(isset($_POST['submit'])){
    $username = filter_input(INPUT_POST, 'username',
    FILTER_SANITIZE_SPECIAL_CHARS);

    $password = $_POST['password'];


    if($username == 'Tabby' && $password == 'password'){
        $_SESSION['username'] = $username;
        header('Location: /extras/dashboard.php');
    }
    else{
        echo 'Incorrect login credentials';
    }
}
?>

<form action="<?php echo htmlspecialchars(
    $_SERVER['PHP_SELF']
  ); ?>" method="POST">
<div>
  <label for="username">Username: </label>
  <input type="text" name="username">
</div>
<br>
<div>
  <label for="password">Password: </label>
  <input type="password" name="password">
</div>
<br>
  <input type="submit" name="submit" value="Submit">
</form>
