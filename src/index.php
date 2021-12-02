<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $search = test_input($_POST["search"]);

?>

<html>
<body>

<form action="search.php" method="post">
Search   : <input type="text" name="search" required><br>

<input type="submit">Search</input>
</form>

</body>
</html>

<script language="Javascript">alert("Hello");</script>
<script>window.location.href = "index.php";</script>




