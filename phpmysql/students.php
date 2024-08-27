<?php require_once 'db.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap.css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Students</title>
</head>
<body>
    <h1 class="m-auto text-info text-center mt-2 bg-dark w-25 reounded shadow-lg">Hello Students</h1>
        <section class="mt-4 container">
            <table class="table table-bordered">
                <thead>
                    <th>id</th>
                    <th>name</th>
                    <th>address</th>
                    <th>grade</th>
                    <th>phone</th>
                </thead>
                <tbody>
                    <?php 
                    $sql = "SELECT * FROM students";
                    $students = mysqli_query($connection , $sql);
                    if(mysqli_num_rows($students) > 0){
                        while($row = mysqli_fetch_assoc($students)){
                            echo"
                            <tr>
                            <td>{$row['id']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['address']}</td>
                            <td>{$row['grade']}</td>
                            <td>{$row['phone']}</td>
                        </tr>";
                        }
                    }else {
                        echo "No studente Yet ";
                    }
                    ?>
                </tbody>
            </table>
        </section>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>