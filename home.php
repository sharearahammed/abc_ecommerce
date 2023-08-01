<?php
$printCookie = '';
setcookie( "visit", "1", time() + ( 86400 ) * 30 );
if ( isset( $_COOKIE["visit"] ) ) {
    $printCookie = "visited";
} else {
    $printCookie = "welcome";
}

?>
<html>
<head>
  <title>Home Page</title>
  <link rel="stylesheet" href="homestyle.css">
</head>
<body>
  <?php
     echo $printCookie;
   ?>
  
<script src="store.js"></script>
<header>
<table>
<tr>
<td>
<img src="http://localhost/SecG/assets/logo_website.png" width="50px" height="50px"><br> Welcome to ABC
</td>


<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>



<td>
<a href="home.php">HOME</a>
<a href=".admin/view/login.php">PRODUCTS</a>
<a href="./View/Employee_login.php">CONTACT</a>
<a href="admin/view/login.php">LOGIN</a>
<a href="admin/view/UserRegistration.php">REGISTER</a>
</td>
<form method="post">
<td><input type="text" name="search"size="30"><button type="button" name="btn">search</button></td>
<td></td>

</form>
</tr>
</table>
</header>

<br><br>
<hr>
<!-- Main  -->
<main>
  <!-- Main Container  -->
  <div>
    <table>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
		<h1>Product List:</h1>
        <section class="container content-section">
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Bike</span>
                    <img class="shop-item-image" src="assets/bike1.jfif">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$130.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Phone</span>
                    <img class="shop-item-image" src="assets/phone1.jfif">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$14.99</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Apple</span>
                    <img class="shop-item-image" src="assets/apple.jfif">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$2.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Shoe</span>
                    <img class="shop-item-image" src="assets/shoe1.jfif">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$10.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">T-Shirt</span>
                    <img class="shop-item-image" src="assets/shirt1.jfif">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$7.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Watch</span>
                    <img class="shop-item-image" src="assets/watch1.jfif">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$6.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">$0</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
        </section>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>

      </tr>
    </table>

  </div>
</main>
</body>
</html>







<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
include 'layouts/footer.php';
?>

</body>


<html>