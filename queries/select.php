<!DOCTYPE html>
<html>
<head>
    <title>Queries</title>
</head>
<body>
    <?php 
        require('db.php');
    ?>

    <div>
        <form action="">
            <?php 
                $results = $con->query("SELECT * FROM TEST_GPS");

                if ($results->num_rows > 0) {
                    while ($row = $results->fetch_assoc()) {
                        echo $row["id"]."<br/>";
                    }
                } else {
                    echo "No results";
                }
            ?>

            <button>Submit</button>
        </form>
    </div>
</body>