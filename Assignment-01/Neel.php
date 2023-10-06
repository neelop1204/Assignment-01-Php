<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Assignment-01 PHP</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alegreya+SC:wght@700&family=Merriweather&display=swap" rel="stylesheet">
        </head>
        <body class="white">
            <header>
                <a class="logo"><img src="img/LOGO001.png" alt="logo"></a>
                <ul class="navbar">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </header>

            <main>
                <section>
                    <h1>Awesome Oven-Baked Delights</h1>
                </section>
                <section>
                    <!--PHP STARTING AND DECLARING VARIABLES-->
                    <?php
                    if($_SERVER["REQUEST_METHOD"]=="POST"){
                        $size = ($_POST['size']);
                        $base = ($_POST['base']);
                        $cheese = ($_POST['extra']);
        
                        $dip="";
                        $dipspecial = $_POST['dip'];
                    foreach($dipspecial as $dipend){
                        $dip .= $dipend;
                    }
        
                        $bread="";
                        $breadspecial = $_POST['breads'];
                    foreach($breadspecial as $breadend){
                        $bread .= $breadend;
                    }
        
                        $dessert="";
                        $dessertspecial = $_POST['desserts'];
                    foreach($dessertspecial as $dessertend){
                        $dessert .= $dessertend;
                    }
                    }
                    ?>
        
                    
                <form class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                    <div class="contactinfo">
                        <p>Contact Information</p>
                        <br>
                    <label for="fname">Name:</label>
                    <input type="text" id="fname" name="fname" class="white border rounded tight padding margin-bottom" required>
                    <br>
                    <label for="phone">Phone Number:</label>
                    <input type="tel" id="phone" name="phone" class="white border rounded tight padding margin-bottom" required>
                    <br>
                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name=email class="white border rounded tight padding margin-bottom" required>

                    </div>
                    <div class="delivery">
                        <label for="delivery_method">Delivery or Pickup:</label>
                        <select name=delivery_method id="delivery_method" class="white border rounded tight padding margin-bottom" required>
                            <option value="" disabled selected>Select an option</option>
                            <option value="delivery">Delivery</option>
                            <option value="pickup">Pickup</option>
                        </select>
                        <br>

                        <label for="delivery_address">Delivery Address:</label>
                        <textarea id="delivery_address" name="delivery_address" class="white border rounded tight padding margin-bottom"></textarea>
                        <br>

                        <label for="delivery_instructions">Delivery Instructions:</label>
                        <textarea id="delivery_instructions" name="delivery_instructions"class="white border rounded tight padding margin-bottom"></textarea>
                        <hr>
                    </div>
                    

                    
                        <p>Please select the size of pizza:</p>
                        <input type="radio" id="pizzasize" name="size" value="Small">
                        <label for="pizzasize">Small</label>
        
                        <input type="radio" id="pizzasize" name="size" value="Medium">
                        <label for="pizzasize">Medium</label>
        
                        <input type="radio" id="pizzasize" name="size" value="Large">
                        <label for="pizzasize">Large</label>
        
                        <input type="radio" id="pizzasize" name="size" value="Extra Large">
                        <label for="pizzasize">Extra Large</label>
        
        
        
                        <hr>
        
                        <p>Please select the base of pizza:</p>
                        <input type="radio" id="pizzabase" name="base" value="Cheesy Delight">
                        <label for="pizzabase">Cheesy Delight</label>
        
                        <input type="radio" id="pizzabase" name="base" value="Thick 'n' Cheesy">
                        <label for="pizzabase">Thick 'n' Cheesy</label>
        
                        <input type="radio" id="pizzabase" name="base" value="Cheese Lover">
                        <label for="pizzabase">Cheese Lover</label>
        
        
                        <hr>
        
                        <p>Please select the extra cheese of pizza:</p>
                        <input type="radio" id="extracheese" name="extra" value="Pepper Jack">
                        <label for="extracheese">Pepper Jack</label>
        
                        <input type="radio" id="extracheese" name="extra" value="Mozzarella">
                        <label for="extracheese">Mozzarella</label>
        
                        <input type="radio" id="extracheese" name="extra" value="Asiago">
                        <label for="extracheese">Asiago</label>
        
                        <input type="radio" id="extracheese" name="extra" value="Swiss">
                        <label for="extracheese">Swiss</label>
        
        
                        <hr>
        
                        <p>Please select the Dip for pizza:</p>
                        <input type="checkbox" id="dip" name="dip[]" value=" Tzatziki">
                        <label for="dip">Tzatziki</label>
        
                        <input type="checkbox" id="dip" name="dip[]" value="Garlic Butter">
                        <label for="dip">Garlic Butter</label>
        
                        <input type="checkbox" id="dip" name="dip[]"  value="Chipotle Aioli">
                        <label for="dip">Chipotle Aioli</label>
                        
                        <hr>
        
                        <p>Please select the bread:</p>
        
        
                        <input type="checkbox" id="breads" name="breads[]"value="Calzone">
                        <label for="breads"> Calzone</label>
        
                        <input type="checkbox" id="breads" name="breads[]"   value="Ciabatta">
                        <label for="breads">Ciabatta</label>
        
                        <input type="checkbox" id="breads" name="breads[]"    value=" Stuffed Garlic Bread">
                        <label for="breads">Stuffed Garlic Bread</label>
                        
                        <hr>
        
                        <p>Please select the dessert:</p>
        
        
                        <input type="checkbox" id="deserts" name="desserts[]"  value="Chocolate Lava Cake">
                        <label for="desserts">Chocolate Lava Cake</label>
        
                        <input type="checkbox" id="deserts" name="desserts[]"  value="Chocolate Mousse">
                        <label for="desserts">Chocolate Mousse</label>
                        
                        <input type="checkbox" id="deserts" name="desserts[]" value="Chocolate Fondue">
                        <label for="desserts">Chocolate Fondue</label>
<hr>
                        <div>
                            <p>Payment Information</p>
                            <div class="type">
                                <label for="payment_method">Payment Method:</label>
                                <select id="payment_method" name="payment_method" class="white border rounded tight padding margin-bottom" required>
                                  <option value="" disabled selected>Select a payment method</option>
                                  <option value="cash">Cash on Delivery</option>
                                    <option value="online-payment">Online Payment</option>
                                </select>
                                <br>
                                <label for="card_number">Credit Card Number:</label>
                                <input type="text" id="card_number" name="card_number" class="white border rounded tight padding margin-bottom" required>
                                <br>
                                <label for="billing_address">Billing Address:</label>
                                <textarea id="billing_address" name="billing_address" class="white border rounded tight padding margin-bottom"></textarea>
                                <hr>
                            </div>
                        </div>
        
                        <!-- Error rectification and form validation-->
                        <?php
                        $error ="";
                        if(empty($size)){
                            $error ="Size is not chosen";
                        }else if(empty($base)){
                            $error ="Base is not chosen";
                        }elseif(empty($cheese)){
                            $error ="Cheese type is not chosen";
                        }else if(empty($dipend)){
                            $error ="Special dip is not chosen";
                        }else if(empty($breadend)){
                            $error ="Bread is not chosen";
                        }else if(empty($dessertend)){
                            $error ="Dessert is not chosen";
                        }
                        
                        ?>
                       d
                        
        
                    
                </form>
            
                    <div class="form-group submit-message">

                            <?php
                                require_once ('database.php');
                                if(isset($_POST) & !empty($_POST)){
                                    $fname = $database->sanitize($_POST['fname']);
                                    $phone = $database->sanitize($_POST['phone']);
                                    $email = $database->sanitize($_POST['email']);
                                    $delivery_method = $database->sanitize($_POST['delivery_method']);
                                    $delivery_address = $database->sanitize($_POST['delivery_address']);
                                    $delivery_instructions = $database->sanitize($_POST['delivery_instructions']);
                                    $size = $database->sanitize($_POST['size']);
                                    $base = $database->sanitize($_POST['base']);
                                    $extra_cheese = $database->sanitize($_POST['extra']);
                                    $dip = $database->sanitize($_POST['dip']);
                                    $bread = $database->sanitize($_POST['breads']);
                                    $dessert = $database->sanitize( $_POST['desserts']);
                                    $payment_method = $database->sanitize($_POST['payment_method']);
                                    $card_number = $database->sanitize($_POST['card_number']);
                                    $billing_address = $database->sanitize($_POST['billing_address']);
                                    $res = $database->create($fname, $phone, $email, $delivery_method, $delivery_address, $delivery_instructions, $size, $base, $extra_cheese, $dipend, $breadend, $dessertend, $payment_method, $card_number, $billing_address);

                                    if ($res) {
                                        echo "<p>Record Created</p>";
                                    }else{
                                        echo "<p>Could not Create record </p>";
                                    }
                                }                
                             ?>
                    </div>
               
                    <footer>
                        <div>
                            <h1><span class="word01">© </span><span class="word02">Cre</span><span class="word03">ate</span><span class="word04">d By</span><span class="word05"> Nee</span><span class="word06">l Pa</span><span class="word07">tel</span>
                
                            </h1>
                        </div>
                    </footer>
                </section>
            </main>
        </body>
</html>