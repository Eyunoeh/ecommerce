<?php
session_start();
$action = $_GET['action'];
if ($action == 'add_cart') {
    extract($_POST);
    $added_item = [$id, $price, $price_category, $product_name, $image_path, $quantity];
    $item_exists = false;

    if (isset($_SESSION['cart'])){
        foreach ($_SESSION['cart'] as &$cart_item) {
            if ($cart_item[0] == $id) {
                $cart_item[5] += $quantity;
                $item_exists = true;
                break;
            }

        }
    }
    if (!$item_exists) {
        $_SESSION['cart'][] = $added_item;
    }
    sleep(1);
    echo 1;

}

if ($action == 'get_cart_items') {
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $cart_item) {
            echo '
            <form class="cart_list mt-2">
            <div class="shadow px-3 h-20 items-center w-full mb-5">
            <input type="hidden" name="prod_id" value="'.$cart_item[0].'">
                <div class="flex text-sm font-semibold">
                    <div><p class="mr-auto">'.$cart_item[3].' (<i class="fa-solid fa-peso-sign"></i>: '.$cart_item[1].' '.$cart_item[2].')</p></div>
                    <a onclick="removeItem('.$cart_item[0].')" class="ml-auto  transition-all hover:cursor-pointer hover:text-red-400"><i class="fa-solid fa-circle-xmark"></i></a>
                </div>
                <div class="flex items-center justify-evenly">
                    <img class="mr-auto w-10 h-10 sm:h-16 sm:w-16 object-contain"
                        src="images/'.$cart_item[4].'" alt="image">
                    <div class="ml-auto flex order-2">
                        <input onclick="increaseValue(\'cartitem_'.$cart_item[0].'\')" type="submit" value="+" class="border dark:border-gray-700 w-5 sm:w-10 grid place-items-center rounded
                            active:bg-gray-100 hover:opacity-85 active:text-black transition-all">
                   
                        <div class="border dark:border-gray-700">
                            <input id="cartitem_'.$cart_item[0].'" class="w-10 sm:w-16 rounded bg-slate-50 dark:bg-gray-500
                            
    focus:outline-none text-center" name="quantity" value="'.$cart_item[5].'" min="0" type="number">

                        </div>
           
                        <input onclick="decreaseValue(\'cartitem_'.$cart_item[0].'\')" type="submit" value="-" class="border dark:border-gray-700 w-5 sm:w-10 grid place-items-center rounded
                            active:bg-gray-100 active:text-black hover:opacity-85 transition-all">
                    </div>
                </div>
            </div>
            </form>
            
           ';
        }
    }
}

if ($action == 'get_total'){
    $total = 0;
    if (isset($_SESSION['cart'])){
        foreach ($_SESSION['cart'] as $cartitems){
            $total += $cartitems[1]*$cartitems[5];
        }
    }
    echo $total;
}

if ($action == 'update_cart') {
    extract($_POST);
    foreach ($_SESSION['cart'] as &$cart_item) {
        if ($cart_item[0] == $prod_id) {
            if ($quantity == ''){
                $quantity = 1;
            }
            $cart_item[5] = $quantity;
            echo 1;
            break;
        }
    }
    unset($cart_item);
}
if ($action == 'remove_cart_item') {
    extract($_POST);

    foreach ($_SESSION['cart'] as $key => $cart_item) {
        if ($cart_item[0] == $prod_id) {
            unset($_SESSION['cart'][$key]);
            echo 1;
            break;
        }
    }
}

