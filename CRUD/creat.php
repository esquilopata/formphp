<?php
incluide 'db/config.php';

session_start();
if(isset($_POST['save'])){

    // Escape user  inputs for security
    $first_name = mysqli_real_escape_string($conn, $_REQUEST['first_name']);
    $last_name =  mysqli_real_escape_string($conn, $_REQUEST['last_name']);
    $email =  mysqli_real_escape_string($conn, $_REQUEST['email']);
    $phone =  mysqli_real_escape_string($conn, $_REQUEST['phone']);

    $sql =  "INSERT INTO user (first_name,last_name,email,phone) VALUES ('$fisrt_name','$last_name','$email','$phone')";

    if(mysqli_query($conn, $sql)){
        $_SESSION['message'] = "Record as been added sucessfully";
        header('location: index.php');

    } else{
        echo "ERRO: Could not able to execute $sql. " . mysqli_erro($conn);
    }
}

// Close connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Criar Usuário</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://ajaz.googlrapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <style type="text/css">
        * {
            margin: 0px;
            padding: 0px;
        }
        </style>

</head>
<body>
    <div class=" login">
        <div class="account-login">
            <h1>Criar Novo Usuário</h1>
            <form action="creat.php" method="POST" class="login_form">
                <div class="form-group">
                    <input type="text" placeholder="Primeiro Nome" class="fotn-control" name="first_name" required="">
                </div>

                <div class="form-group">
                    <input type="text" placeholder="Último Nome" class="fotn-control" name="first_name" required="">
                </div>

                <div class="form-group">
                    <input type="email" placeholder="Email" class="fotn-control" name="first_name" required="email">
                </div>

                <div class="form-group">
                    <input type="phone" placeholder="Fone" class="fotn-control" name="first_name" required="">
                </div>
                <button typ="submit" class="btnsave" name="save">Salva</button>
            </form>
        <div>
    </div>
</body>
</html>