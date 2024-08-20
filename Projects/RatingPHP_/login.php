<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../RatingPHP_/Assets/main.css">
    <link rel="stylesheet" type="text/css" href="../RatingPHP_/Assets/toggle.css">

</head>
<body>

    <!-- toggle switch -->
        <label class="switch">
            <input type="checkbox" id="toggleSwitch">
            <span class="slider round"></span>
        </label>


    <div id="loginBox">
        <h1 id="loginH1">Login</h1>

    </div>
        <div id="formBox">
            <form name="f1" method="POST">
                <select id="mySelect" name="userType" required>
                    <option id="selPlac" value="" selected disabled>Select user type</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
                    <input id="password" type="password" name="password" placeholder="Password" required>
                    <input id="login" type="submit" name="submit" value="Login">
            </form>
        </div>

        <?php
            include 'db.php';
            session_start();
            if(isset($_POST['submit'])){
                $userType = $_POST['userType'];
                $password = $_POST['password'];
                $query = "SELECT * FROM $userType WHERE password = '$password'";
                $result = mysqli_query($conn, $query);
                if(mysqli_num_rows($result) > 0){
                    $_SESSION['userType'] = $userType;
                    header("Location: home.php");
                }else{
                    echo "<script>alert('Invalid credentials')</script>";
                }
            }
            
        ?>

    <script src="../RatingPHP_/Assets/JS/showLogin.js"></script>
    <script src="../RatingPHP_/Assets/JS/checkDark.js"></script>
</body>