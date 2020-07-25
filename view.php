


    <!DOCTYPE html>
    <html>

        </html>




    <?php
    require_once('connection.php');




    if (isset($_GET['l'])){
        $query = "INSERT INTO directions (direction) VALUES ('l')";
        mysqli_query($conn, $query);
        echo 'L';}

    if (isset($_GET['r'])){
            $query = "INSERT INTO directions (direction) VALUES ('r')";
        mysqli_query($conn, $query);
        echo 'R';}


    if (isset($_GET['u'])){
        $query = "INSERT INTO directions (direction) VALUES ('u')";
        mysqli_query($conn, $query);
        echo 'U';}

    if (isset($_GET['d'])){
        $query = "INSERT INTO directions (direction) VALUES ('d')";
        mysqli_query($conn, $query);
        echo 'D';}

    if (isset($_GET['s'])){
        $query = "INSERT INTO directions (direction) VALUES ('s')";
        mysqli_query($conn, $query);
        echo 'S';}
