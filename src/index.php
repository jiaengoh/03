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
search: <input type="text" name="search"><br>

<input type="submit">Search</input>
</form>

</body>
</html>

<script language="Javascript">alert("Hello");</script>