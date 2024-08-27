<?php

require_once 'connection.php';
/***
 *    Crud Operation  
 *    Create       [Save Data]            INSERT 
 *     Read        [selectone / get All]  SELECT
 *     update      [Update one]           UPDATE
 *     Delete      [Delete]               DELETE
 */
                            // echo "<br>". "std ID = " .$row['id'] ."<br>". "std Name = " .$row['name']."<br>" ."std Address = " . $row['address'] ."<br>"."std grade = ".$row['grade']."std phone = ".$row['phone'] ."<br>";

    $addItem = "INSERT INTO students(name , address , grade , phone)
                VALUES ('Alaa' , 'Egypt' , 520.90 , '01018162571')";
                if(mysqli_query($connection ,  $addItem)){
                    echo "Record added Successfully"."<br>";
                }else{
                    echo "Error in adding record";
                }

                $sql = "SELECT * FROM students";
                $students = mysqli_query($connection , $sql);

                if(mysqli_num_rows($students) > 0){
                    while($row = mysqli_fetch_assoc($students)){
                    }
                }else {
                    echo "No studente Yet ";
                }