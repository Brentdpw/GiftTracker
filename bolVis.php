<?php 
$username = "ID361990_GiftTracker"; 
$password = "gifttracker123"; 
$database = "ID361990_GiftTracker"; 
$mysqli = new mysqli("ID361990_GiftTracker.db.webhosting.be", $username, $password, $database); 
# checken voor connection error
// if ($mysqli->connect_error) {
//     die('Connect Error (' .
//     $mysqli->connect_errno . ') '.
//     $mysqli->connect_error);
// }
 
$sql = "SELECT zoekterm, seller, title, price, delivery, button, imgLink FROM gift WHERE zoekterm IN ('Volleybal') ";
$result = $mysqli->query($sql);
$mysqli->close();

?>

<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>GiftTracker</title>
    <link rel="stylesheet" href="./assets/css/bolVis.css">
</head>
 
<body>
    <section>
        <h1>GiftTracker</h1>
        <table>
            <tr>
                <th>Seller</th>
                <th>Title</th>
                <th>Image</th>
                <th>Price</th>
                <th>Link</th>
            </tr>

            <?php
                while($rows=$result->fetch_assoc())
                {
                    $seller = $rows['seller'];
                    $title = $rows['title'];
                    $image = $rows['imgLink'];
                    $price = $rows['price'];
                    $button = $rows['button'];
             ?>
            <tr>
                <td><?php echo $seller;?></td>
                <td><?php echo $title;?></td>
                <td><?php echo '<img src=',$image,'>';?></td>
                <td><?php echo $price?></td>
                <td><?php echo '<a href="',$button,'">','<button>','Click here','</button','</a>';?></td>

            </tr>
            <?php
                }
             ?>
        </table>
    </section>
</body>
 
</html>