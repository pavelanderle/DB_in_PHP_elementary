<?php
    require "config.php";
    require "function.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB in PHP elementar</title>
</head>
<body>
    <?= getTableFromStudents($accessDB,"school");?>

    <?php 
    $dataStudent = ["Karel", "Nováček", "2000-12-28", "Elektrotechnika", "4.A", 1];
    insertDataToStudents($accessDB, $dataStudent);
    
    $idStudent = 1;
    deleteDataFromStudents($access,$idStudent);

    $dataStudent = ["Karel", "Voráček", "2000-12-28", "Elektrotechnika", "4.B", 1];
    $idStudent = 3;
    modifyDataFromStudents($access,$idStudent, $dataStudent)
    ?>

</body>
</html>
