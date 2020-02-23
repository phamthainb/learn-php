<?php
if (!isset($_COOKIE['admin_login'])) {
	header('Location: login.php');
}
?>
<?php
require '../controllers/adminControllers.php';
// add product
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// $message = "post submit";
	// echo "<script type='text/javascript'>alert('$message');</script>";
	$product = array();
	$product["name"] = $_POST['product_name'];
	$product["price"] = $_POST['product_price'];
	$product["image"] = $_POST['product_image'];
	$product["discount"] = $_POST['product_discount'];
	$product["point"] = $_POST['product_point'];
	$product["detail"] = $_POST['product_detail'];
	$product["size"] = $_POST['product_size'];
	$product["inventory"] = $_POST['product_inventory'];

	$adminControllers = new AdminControllers();
	$adminControllers->AddProduct($product);
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>admin page</title>
    <link rel="stylesheet" href="./assets/styles.scss">
  </head>

  <body>
    <header class="header">header</header>
    <main class="main">
      <div class="dashboard">
        <h2>dashboard</h2>
        <ul class="list-dashboard">
          <li>
            <div class="item-dashboard" data-show="tab-check-out">check out</div>
          </li>
          <li>
            <div class="item-dashboard" data-show="tab-product">product</div>
          </li>
          <li>
            <div class="item-dashboard" data-show="tab-blog">blog</div>
          </li>
        </ul>
      </div>
      <div class="main-content">
        <div class="main-content_item hidden" id="tab-check-out" data-content="tab-check-out">
          <h2>check out</h2>
          <div class="container">
          </div>
        </div>
        <div class="main-content_item " id='tab-product' data-content="tab-product">
          <h2>product</h2>
          <div class="container">
            <!-- // chuc nang them sp -->
            <div class="add-product">

              <form name="add-product" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                <fieldset>
                  <legend>add product to database: <span class="toggle-fieldset">X</span></legend>
                  name: <br>
                  <input type="text" name="product_name">
                  <hr>
                  price: <br>
                  <input type="number" name="product_price">
                  <hr>
                  image: <br>
                  <input type="file" name="product_image">
                  <img src="" alt="">
                  <hr>
                  discount (%): <br>
                  <input type="number" name="product_discount">
                  <hr>
                  point: <br>
                  <input type="text" name="product_point">
                  <hr>
                  detail: <br>
                  <textarea type="text" name="product_detail"></textarea>
                  <hr>
                  size: <br>
                  <select name="product_size">
                    <option value="1">small</option>
                    <option value="2">medium</option>
                    <option value="3">large</option>
                    <option value="4">extra large</option>
                  </select>
                  <hr>
                  inventory: <br>
                  <input type="number" name="product_inventory">
                  <hr>
                  <input type="submit" value="submit">
                </fieldset>
              </form>
            </div>
            <!-- // dis play list sp -->
          </div>
        </div>
        <div class="main-content_item hidden" id="tab-blog" data-content="tab-blog">blog</div>
      </div>
    </main>
    <footer class="footer">footer</footer>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="assets/admin.js"></script>
  </body>

</html>
