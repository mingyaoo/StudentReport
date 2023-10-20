<!DOCTYPE html>
<html>
<head>
    
    <title>Page title</title>
    
</head>
<body>
    <form action="addsubjects.php" method = "post">
    Subject name:<input type="text" name="Subjectname"><br>
    Teacher:<input type="text" name="Teacher"><br>
    <input type="submit" value="Add Subject">
    </form>
    <br>
    
    <?php
    include_once('connection.php');
    $stmt = $conn->prepare("SELECT * FROM Tblsubjects");
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
    {
    echo($row["Subjectname"].' - '.$row["Teacher"]."<br>");
    }
    ?>
</body>
</html>
