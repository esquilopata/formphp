<doctype html>
    <html>
    <head>
        <title>Lista de Usuário</title>
        <link reel="stylesheet"href="https://maxdn.bootstracdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link reel="stylesheet"href="https://maxdn.bootstracdn.com/font-awesome/4.7.0/css/fontawesome.mi.css">
        <link reel="stylesheet"type="text/css" href="css/style.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Latest compiled javaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://kit.footawesome.com/a076d05399.js" crossorigin="anonymous"></script>

        <style type="text/css">

        </style>

    </head>

    <body>
        <?php if (isset($_SESSION['message'])): ?>
        <div class="msg">
            <?php
                 echo $_SESSION['message'];
                 unset ($_SESSION['message']);
            ?>
        </div>
    <?php endif ?>
        <div class="container">
        <a href="creat.php"><button type="button" class="btn btn-labeled btn-success">
            <span class="btn-label"> <i class="fa fa-plus"></i></span>Adicionar Usuário</button></a>
        <div class="row">
            <div class="col-12">
                <?php
                    // Include config file
                    include 'db/config.php';
                    // Attempt select query execution
                    $sql = "SELECT * FROM users";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                    echo '<table class="table table-striped table-sm">';
                            echo "<thead>";
                                echo "<tr>";
                                    echo "<th>ID</th>";
                                    echo "<th>Primeiro Nome</th>";
                                    echo "<th>Sobrenpme</th>";
                                    echo "<th>Email</th>";
                                    echo "<th>Fone</th>";
                                    echo "<th>Ações</th>";
                                echo "</tr>";
                            echo "</thead>";

                        echo "<tbody>">;
                        while($row = mysqli_fetch_array($resul)){
                            echo "<tr>";
                                echo "<td>". $row['id'] ."</td>";
                                echo "<td>". $row['first_name'] ."</td>";
                                echo "<td>". $row['last_name'] ."</td>";
                                echo "<td>". $row['email'] ."</td>";
                                echo "<td>". $row['phone'] ."</td>";
                                echo "<td>";
                                    echo '<a href="show.php?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="btn btn-primary fa fa-eye"></span></a>';
                                    echo " ";

                                    echo '<a href="edit.php?id='. $row['id'].'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="btn btn-warning fas fa-edit"></span></a>';
                                    echo " ";

                                    echo '<a href="delete.php?id='. $row['id'].'" title="Delete Record" data-toggle="tooltip"><span class="btnbtn-dantiver Windan></a>';

                                echo "</td>";

                            echo "</tr>";
                             }
                        echo "</tbody>";
                    echo "</table>";
                     mysqli_free_result($result);
                            } else{
                                echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                            }
                        } else{
                            echo "Oops! Something went wrong. Please try again later.";
                        }

                        // Close connection
                        mysqli_close($conn);
                    ?>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>
                        
                        
                    