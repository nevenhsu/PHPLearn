<?php

$link = mysqli_connect("79.170.44.135","cl31-users-m9v","wr!6CyUs!","cl31-users-m9v");

if (mysqli_connect_error()) {

    die("Link mysql failed");

}

// $query = "INSERT INTO `users` (`email`, `password`) VALUES('ocean@hotmail.com', 'asdmasd')";

$query = "UPDATE `users` SET email = 'around_ocean@hotamil.com' WHERE id = 3 LIMIT 1";

mysqli_query($link,$query);

$query = "SELECT * FROM `users`";

if ($result = mysqli_query($link,$query)) {
    $row = mysqli_fetch_array($result);
    print_r($result);

    echo "Your password is ".$row[3].".";
}


?>