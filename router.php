<?php
$router = array(
	"loadPages" => ['home', 'shop', 'blog', 'about', 'cart', 'contact', 'checkout', 'product-single', 'error'],
);

//# check $controller & $action => return page to views
if (!in_array($loadPages, $router["loadPages"])) {
	$loadPages = 'error';
}

?>
