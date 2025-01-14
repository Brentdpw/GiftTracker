<?php 
    include 'config.php';
    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>buypage</title>
        <link rel="stylesheet" href="./assets/css/login.css">
        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="./assets/css/loginForms.css">
        <link rel="stylesheet" href="./assets/css/adminHome.css">
        <link rel="stylesheet" href="./assets/css/header.css">
        <link rel="stylesheet" href="./assets/css/buypage.css">
        <link rel="stylesheet" href="./assets/css/bolVis.css">
        <link rel="stylesheet" href="./assets/css/footer.css">
    </head>
    <body>
        <header>
            <div class="header-container">
                <a href="userHome.php">
                    <img src="./assets/images/User_icon_2.svg.png" alt="icon" class="icon">
                </a>                
                <?php echo "<p class='icon'>" . $_SESSION['username'] . "</p>"; ?>                
                <nav>
                    <ul>
                        <li><a href="user-edit-user.php">Settings</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>                
            </div>            
        </header>

        <div class="form-div">
            <form method="GET" action="./buypage.php">
                <!-- line 1 -->
                <ul>   
                    <li>          
                        <!-- SPORT artikelen    -->
                        <div class="divCSS">
                            <h4>Sporten</h4>
                            <input type="radio" name="product" value="Darts">
                            <label for="product">Darts</label>
                            <br>
                            <input type="radio" name="product" value="Voetbal">
                            <label for="product">Voetbal</label>
                            <br>
                            <input type="radio" name="product" value="Basketbal">
                            <label for="product">Basketbal</label>
                            <br>
                            <input type="radio" name="product" value="Tennis">
                            <label for="product">Tennis</label> 
                            <br>
                            <input type="radio" name="product" value="Volleybal">
                            <label for="product">Volleybal</label>
                            <br>
                            <input type="radio" name="product" value="Hockey">
                            <label for="product">Hockey</label>
                        </div>
                    </li>
                    <li>
                        <!-- School spullen -->
                        <div class="divCSS">
                            <h4>School materialen</h4>
                            <input type="radio" name="product" value="Rugzak">
                            <label for="product">Rugzak</label>
                            <br>
                            <input type="radio" name="product" value="Rekenmachine">
                            <label for="product">Rekenmachine</label>
                            <br>
                            <input type="radio" name="product" value="Pennenzak">
                            <label for="product">Pennenzak</label>
                            <br>
                            <input type="radio" name="product" value="Pennen">
                            <label for="product">Schrijfgerief</label> 
                            <br>
                            <input type="radio" name="product" value="Notitieblokken">
                            <label for="product">Notitieblokken</label>
                            <br>
                            <input type="radio" name="product" value="Mappen">
                            <label for="product">Mappen</label>
                        </div>
                    </li>
                    <li>
                        <!-- Games -->
                        <div class="divCSS">
                            <h4>Games</h4>
                            <input type="radio" name="product" value="Pc-games">
                            <label for="product">Pc-games</label>
                            <br>
                            <input type="radio" name="product" value="PS5-games">
                            <label for="product">PS5-games</label>
                            <br>
                            <input type="radio" name="product" value="Xbox games">
                            <label for="product">Xbox-games</label>
                            <br>
                            <input type="radio" name="product" value="PS4-games">
                            <label for="product">PS4-games</label> 
                            <br>
                            <input type="radio" name="product" value="Consoles">
                            <label for="product">Consoles</label>
                            <br>
                            <input type="radio" name="product" value="Controllers">
                            <label for="product">Controllers</label>
                        </div>
                    </li>
                    <li>
                        <!-- Keukengerief -->
                        <div class="divCSS">
                            <h4>Keukengerief</h4>
                            <input type="radio" name="product" value="Keukengerei">
                            <label for="product">Keukengerei</label>
                            <br>
                            <input type="radio" name="product" value="Keukenrobots">
                            <label for="product">Keukenrobots</label>
                            <br>
                            <input type="radio" name="product" value="Bakspullen">
                            <label for="product">Bakspullen</label>
                            <br>
                            <input type="radio" name="product" value="Servies">
                            <label for="product">Servies</label>
                            <br>
                            <input type="radio" name="product" value="Waterglazen">
                            <label for="product">Waterglazen</label> 
                            <br>
                            <input type="radio" name="product" value="Microgolfoven">
                            <label for="product">Microgolfoven</label>
                        </div>
                    </li>
                    <li>
                        <!-- Tuinierbenodigdheden -->
                        <div class="divCSS">
                            <h4>Tuin</h4>
                            <input type="radio" name="product" value="Tuinsets">
                            <label for="product">Tuinsets</label>
                            <br>
                            <input type="radio" name="product" value="Ligbedden">
                            <label for="product">Ligbedden</label>
                            <br>
                            <input type="radio" name="product" value="Tuinkasten">
                            <label for="product">Tuinkasten</label>
                            <br>
                            <input type="radio" name="product" value="Partytenten">
                            <label for="product">Partytenten</label> 
                            <br>
                            <input type="radio" name="product" value="Tuinafdakjes">
                            <label for="product">Tuinafdak</label>
                            <br>
                            <input type="radio" name="product" value="Tuingereedschap">
                            <label for="product">Gereedschap</label>
                        </div>
                    </li>
                    <li>
                        <div class="divCSS">
                            <h4>Speelgoed</h4>
                            <input type="radio" name="product" value="Pop">
                            <label for="product">Pop</label>
                            <br>
                            <input type="radio" name="product" value="Trampoline">
                            <label for="product">Trampoline</label>
                            <br>
                            <input type="radio" name="product" value="Lego">
                            <label for="product">Lego</label>
                            <br>
                            <input type="radio" name="product" value="Bordspellen">
                            <label for="product">Bordspellen</label> 
                            <br>
                            <input type="radio" name="product" value="Knuffels">
                            <label for="product">Knuffels</label>
                            <br>
                            <input type="radio" name="product" value="Puzzels">
                            <label for="product">Puzzels</label>
                        </div>
                    </li>
                    <li>
                        <div class="divCSS">
                            <h4>Voor haar</h4>
                            <input type="radio" name="product" value="Geschenksets">
                            <label for="product">Geschenksets</label>
                            <br>
                            <input type="radio" name="product" value="Parfum">
                            <label for="product">Parfum</label>
                            <br>
                            <input type="radio" name="product" value="Make-up">
                            <label for="product">Make-up</label>
                            <br>
                            <input type="radio" name="product" value="Nagelproducten">
                            <label for="product">Nagelproducten</label> 
                            <br>
                            <input type="radio" name="product" value="Haardroger">
                            <label for="product">Haardroger</label>
                            <br>
                            <input type="radio" name="product" value="Sieradendozen">
                            <label for="product">Sieradendozen</label>
                        </div>
                    </li>
                    <li>
                        <div class="divCSS">
                            <h4>Voor hem</h4>
                            <input type="radio" name="product" value="Thuistappen">
                            <label for="product">Thuistappen</label>
                            <br>
                            <input type="radio" name="product" value="Thuisbrouwpakketten">
                            <label for="product">Brouwpakketten</label>
                            <br>
                            <input type="radio" name="product" value="Herenparfums">
                            <label for="product">Herenparfums</label>
                            <br>
                            <input type="radio" name="product" value="Baardverzorging">
                            <label for="product">Baardverzorging</label> 
                            <br>
                            <input type="radio" name="product" value="Heren accessoires">
                            <label for="product">Accessoires</label>
                            <br>
                            <input type="radio" name="product" value="Fopartikelen">
                            <label for="product">Fopartikelen</label>
                        </div>
                    </li>
                </ul>

                <br>

                <input type="submit" value="Search for products">
                
            </form>

            <a href="userHome.php">
                <input type="submit" value="Go to home">
            </a>

        </div> 
  
        <?php
            if (isset($_GET['product'])) {
                $result = $_GET['product'];
                #echo $result;
            }
            # else echo("U moet een product kiezen of terug gaan naar het hoofdmenu");

            $sql = "SELECT zoekterm, seller, title, price, delivery, button, imgLink FROM gift WHERE zoekterm IN ('$result') ";
            $result = $conn->query($sql);
            $conn->close();
        ?>
        
        <div>
            <h1> <?php echo $_GET['product'] ?> </h1>
            <table>
                <tr>
                    <th>Brand</th>
                    <th>Product Name</th>
                    <th>Product Image</th>
                    <th>Product Price</th>
                    <th>Check out the product on Bol.com</th>
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
                        <td>    <?php echo $seller;?>   </td>
                        <td>    <?php echo $title;?>    </td>
                        <td>    <?php echo '<img src=',$image,'>';?>    </td>
                        <td> €  <?php echo  $price;?>    </td>
                        <td>    <?php echo '<a href="',$button,'">','<input type="image" src="./assets/images/testcart.png" name="Submit" "width="70" height="70">','</a>';?></td>
                    </tr>
                <?php
                    }
                ?>
            </table>
        </div>

        <br>
        <br>

    </body>
</html>