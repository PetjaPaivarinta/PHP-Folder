<!DOCTYPE html>
<html>
    <head>
        <title>CrudUppgift</title>
    </head>
    <body>
        <style>
            * {
                text-align: left;
            }
            table {
                width: calc(100% - 100px);
                border-collapse: collapse;
                margin-top: 5vh;
            }
            table, th, td {
                border: 1px solid black;
            }
            th, td {
                padding: 10px;
                text-align: left;
            }
            th {
                background-color: #f2f2f2;
            }
            button {
                padding: 10px;
                border-radius: 20%;
                border-style: none;
                cursor: pointer;
                font-size: 20px;
                background-color: greenyellow;
                font-weight: bold;
            }
            input {
                padding: 10px;
                border-radius: 5%;
                border-style: 1px solid black;
                font-size: 20px;
            }
            form {
                margin-top: 3vh;
            }
        </style>

        <h1>CrudUppgift</h1>
        <form method="post">
            <input required type="text" name="firstname" placeholder="First name">
            <input required type="text" name="lastname" placeholder="Last name">
            <input required type="date" name="birthday" placeholder="Birthday">
            <input required type="text" name="phone" placeholder="Phone">
            <input required type="email" name="email" placeholder="Email">
            <button type="submit" name="submit4">Submit</button>
        </form>
        <?php 
            include 'db_connect.php';

            function showUsers($pdo) {
                $userRows = $pdo->query('SELECT * FROM members')->fetchAll();

                echo '<table>';
                echo '<tr>';
                echo '<th>Id</th>';
                echo '<th>First Name</th>';
                echo '<th>Last name</th>';
                echo '<th>Birthday</th>';
                echo '<th>Phone</th>';
                echo '<th>Email</th>';
                echo '</tr>';
                foreach ($userRows as $row) {
                    echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['firstname'] . '</td>';
                    echo '<td>' . $row['lastname'] . '</td>';
                    echo '<td>' . $row['birthday'] . '</td>';
                    echo '<td>' . $row['phone'] . '</td>';
                    echo '<td>' . $row['email'] . '</td>';
                    echo '</tr>';
                }
            }

            

            if (isset($_POST['submit4'])) {
                if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['birthday']) && isset($_POST['phone']) && isset($_POST['email'])) 
                {
                    $firstname = $_POST['firstname'];
                    $lastname = $_POST['lastname'];
                    $birthday = $_POST['birthday'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
                    $data[] = [
                        'firstname' => $firstname,
                        'lastname' => $lastname,
                        'birthday' => $birthday,
                        'phone' => $phone,
                        'email' => $email
                    ];

                    $sql = 'INSERT INTO members SET firstname = :firstname, lastname = :lastname, birthday = :birthday, phone = :phone, email = :email';
                    $statement = $pdo->prepare($sql);
                    
                    foreach ($data as $row) {
                        $statement->execute($row);
                    }
                    showUsers($pdo);
                }
            }
        ?>
        <form method="post">
            <input required type="text" name="id" placeholder="Id of user to change">
            <input required type="text" name="firstname" placeholder="First name">
            <input required type="text" name="lastname" placeholder="Last name">
            <input required type="date" name="birthday" placeholder="Birthday">
            <input required type="text" name="phone" placeholder="Phone">
            <input required type="email" name="email" placeholder="Email">
            <button required type="submit" name="submit5">Change</button>
        </form>
        <form method="post">
            <input required type="text" name="id" placeholder="Id of user to delete">
            <button type="submit" name="submit6">Delete</button>
        </form>
        <?php
        if (isset($_POST['submit5'])) {
            if (isset($_POST['id']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['birthday']) && isset($_POST['phone']) && isset($_POST['email'])) 
            {
                $id = $_POST['id'];
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $birthday = $_POST['birthday'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $data[] = [
                    'id' => $id,
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                    'birthday' => $birthday,
                    'phone' => $phone,
                    'email' => $email
                ];

                $sql = 'UPDATE members SET firstname = :firstname, lastname = :lastname, birthday = :birthday, phone = :phone, email = :email WHERE id = :id';
                $statement = $pdo->prepare($sql);
                
                foreach ($data as $row) {
                    $statement->execute($row);
                }
                showUsers($pdo);
            }
        }

        if (isset($_POST['submit6'])) {
            if (isset($_POST['id'])) 
            {
                $id = $_POST['id'];
                $data = [
                    'id' => $id
                ];

                $pdo->prepare('DELETE FROM members WHERE id = :id')->execute($data);

                showUsers($pdo);
            }
        }
        ?>
    </body>