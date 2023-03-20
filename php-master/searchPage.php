<!DOCTYPE html>
<html>
<head>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>
<body>
<?php
// I tried to build the query from scratch and got hung up on the query not returning.
// What I usually work with is Laravel and it wraps the querys in a Model/Controller setup
// Abstracting the php from the html.
// 
    function searchDatabase($fName, $lName){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dataBase = "search_page";

        $connect = new mysqli($servername, $username, $password);

        $firstName = isset($fName) ? $fName : ''; 
        $lastName = isset($lName) ? $lName : ''; 
        $query = '';
        if ($firstName){
            $query = "SELECT * FROM customers WHERE first_name LIKE '%s'";
        } else if ($lastName) {
            // $query = "SELECT * FROM customers WHERE last_name=$lastName";
        }

        $results = mysqli_query($connect, $query);
        // var_dump($results);
        $connect->close();
        // die();
        return $results;
    }
    if (isset($_POST['firstName'])) {
        $results = searchDatabase($_POST['firstName'], $_POST['firstName']);

    }
?>
<form action="searchPage.php" method="post" >
    <div class="">
        <input type="text" class="" name="firstName" style="padding-left: 25px; padding-right: 25px;" placeholder="First Name" value="">
    </div>
    <input type="submit" name="submit" value="Submit" />
</form>
<?php if (isset($results)) { ?>
        <h1> Result: <?php echo $results ?></h1>
<?php } ?>

</body>
</html>