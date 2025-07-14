<<<<<<< HEAD
<?php
session_start();
//database simulate
$_SESSION['items'] = [
    [1, 500.00,'kg', 'Tomatoes','purepng.com-tomatovegetables-tomato-941524712357ikhy3.png'],
    [2, 20.00,'pc', 'Pechay','petchay-removebg-preview.png'],
    [3, 110.00,'kg', 'Carrots','carrot-removebg-preview.png'],
    [4, 40.00,'pc','Cabbage','43-cabbage-png-image.png'],
    [5,60.00,'kg','Potatoes', '14-potato-png-images.png']
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/output.css">
    <script src="https://kit.fontawesome.com/470d815d8e.js"crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Menu</title>
</head>
<body class="min-h-screen bg-slate-50 dark:bg-gray-800 dark:text-gray-300">

    <?php include 'menu_nav_bar.php'?>



<main onclick="close_side_nav()" class=" max-w-6xl mx-auto">
    <div id="notification" class="hidden fixed w-full z-50 max-w-6xl flex justify-center">
        <div class="px-2 grid place-items-center w-60  dark:text-black bg-green-200  shadow-xl h-12 rounded">
            <h1 class="font-semibold text-center"><i class="fa-solid fa-check"></i> Item added to the basket</h1>
        </div>
    </div>
    <div id="remove_notification" class="hidden fixed w-full z-50 max-w-6xl flex justify-center">
        <div class="px-2 grid place-items-center   w-60  dark:text-black bg-red-200  shadow-xl h-12  rounded">
            <h1 class="font-semibold text-center">Item removed from the basket</h1>
        </div>
    </div>

    <div class="container  h-[100%]">

        <?php
        $pages = array('products');
        $page = isset($_GET['page']) && in_array($_GET['page'], $pages) ? $_GET['page'] : 'products';
        include $page . '.php';
        ?>
    </div>
</main>
    <?php include 'cart.php'?>
</body>
<script>
    function toggle_notif() {
        document.getElementById("notification").classList.remove("hidden");
        setTimeout(function() {
            document.getElementById("notification").classList.add("hidden");
        }, 2000);
    }
    function toggle_remove_notif() {
        document.getElementById("remove_notification").classList.remove("hidden")
        setTimeout(function() {
            document.getElementById("remove_notification").classList.add("hidden");
        }, 2000);
    }

    function close_side_nav(){
        closeCart();
        closeNav();
    }
    function increaseValue(input_ID) {
        var inputElement = document.getElementById(input_ID);
        var currentValue = parseInt(inputElement.value);
        inputElement.value = currentValue + 1;

    }

    function decreaseValue(input_ID) {
        var inputElement = document.getElementById(input_ID);
        var currentValue = parseInt(inputElement.value);
        if (currentValue > 1) {
            inputElement.value = currentValue - 1;
        }
    }
    function updateCart() {
        $.post("ajax.php?action=get_cart_items", function(data) {
            $("#cart_items").html(data);
        });
    }
    function updateTotal() {
        $.post("ajax.php?action=get_total", function(data) {
            $("#total_items").html(data);
        });
    }

    $(document).on('submit', '.cart_list', function (event) {
        event.preventDefault();
        $.ajax({
            url: 'ajax.php?action=update_cart',
            method: 'POST',
            data:$(this).serialize(),
            success: function (resp) {
                if (resp == 1){
                    updateTotal();
                }
                    updateCart();
            }
        });
    });


    function openCart() {
        document.getElementById("cartList").style.transform = "translateX(0)";
        document.getElementById("blur").classList.add("opacity-50");
        document.body.style.overflow = 'hidden';



    }
    function closeCart() {
        document.getElementById("cartList").style.transform = "translateX(100%)";
        document.getElementById("blur").classList.remove("opacity-50");
        document.body.style.overflow = '';

    }
    function toggleCart() {
        updateTotal();
        updateCart();
        closeNav();
        var side_cart_Nav = document.getElementById("cartList");

        if (side_cart_Nav.style.transform === "translateX(0%)") {
            closeCart();
        } else {
            openCart();
        }
    }
    $('.addItemForm').submit(function (e) {
        e.preventDefault();
        var formId = $(this).attr('id');
        var itemId = formId.split('_')[1];
        var submitId = 'submit_' + itemId;
        var loaderId = 'loader_' + itemId;

        var formData = $(this).serialize() + '&item_id=' + itemId;

        document.getElementById(loaderId).classList.remove('hidden');
        document.getElementById(submitId).classList.add('hidden');
        document.getElementById(submitId).disabled = true;
        let buttons = document.getElementsByClassName('submit_button');
        for (let i = 0; i < buttons.length; i++) {
            buttons[i].disabled = true;
        }


        $.ajax({
            url: 'ajax.php?action=add_cart',
            method: 'POST',
            data: formData,
            success: function (resp) {
                if (resp == 1){
                    toggle_notif();
                    updateTotal();
                    updateCart();
                    for (let i = 0; i < buttons.length; i++) {
                        buttons[i].disabled = false;
                    }
                    document.getElementById(submitId).classList.remove('hidden');
                    document.getElementById(loaderId).classList.add('hidden');
                    document.getElementById(submitId).disabled = false;



                }
            }
        });
    });
    function removeItem(productId) {
        $.ajax({
            url: 'ajax.php?action=remove_cart_item',
            method: 'POST',
            data: { prod_id: productId },
            success: function (resp) {
                if (resp == 1) {
                    toggle_remove_notif();
                    updateCart();
                    updateTotal();
                } else {
                    console.error('Error removing item from cart.');
                }
            }
        });
    }

</script>
</html>
=======
<?php
session_start();
//database simulate
$_SESSION['items'] = [
    [1, 500.00,'kg', 'Tomatoes','purepng.com-tomatovegetables-tomato-941524712357ikhy3.png'],
    [2, 20.00,'pc', 'Pechay','petchay-removebg-preview.png'],
    [3, 110.00,'kg', 'Carrots','carrot-removebg-preview.png'],
    [4, 40.00,'pc','Cabbage','43-cabbage-png-image.png'],
    [5,60.00,'kg','Potatoes', '14-potato-png-images.png']
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/output.css">
    <script src="https://kit.fontawesome.com/470d815d8e.js"crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Menu</title>
</head>
<body class="min-h-screen bg-slate-50 dark:bg-gray-800 dark:text-gray-300">

    <?php include 'menu_nav_bar.php'?>



<main onclick="close_side_nav()" class=" max-w-6xl mx-auto">
    <div id="notification" class="hidden fixed w-full z-50 max-w-6xl flex justify-center">
        <div class="px-2 grid place-items-center w-60  dark:text-black bg-green-200  shadow-xl h-12 rounded">
            <h1 class="font-semibold text-center"><i class="fa-solid fa-check"></i> Item added to the basket</h1>
        </div>
    </div>
    <div id="remove_notification" class="hidden fixed w-full z-50 max-w-6xl flex justify-center">
        <div class="px-2 grid place-items-center   w-60  dark:text-black bg-red-200  shadow-xl h-12  rounded">
            <h1 class="font-semibold text-center">Item removed from the basket</h1>
        </div>
    </div>

    <div class="container  h-[100%]">

        <?php
        $pages = array('products');
        $page = isset($_GET['page']) && in_array($_GET['page'], $pages) ? $_GET['page'] : 'products';
        include $page . '.php';
        ?>
    </div>
</main>
    <?php include 'cart.php'?>
</body>
<script>
    function toggle_notif() {
        document.getElementById("notification").classList.remove("hidden");
        setTimeout(function() {
            document.getElementById("notification").classList.add("hidden");
        }, 2000);
    }
    function toggle_remove_notif() {
        document.getElementById("remove_notification").classList.remove("hidden")
        setTimeout(function() {
            document.getElementById("remove_notification").classList.add("hidden");
        }, 2000);
    }

    function close_side_nav(){
        closeCart();
        closeNav();
    }
    function increaseValue(input_ID) {
        var inputElement = document.getElementById(input_ID);
        var currentValue = parseInt(inputElement.value);
        inputElement.value = currentValue + 1;

    }

    function decreaseValue(input_ID) {
        var inputElement = document.getElementById(input_ID);
        var currentValue = parseInt(inputElement.value);
        if (currentValue > 1) {
            inputElement.value = currentValue - 1;
        }
    }
    function updateCart() {
        $.post("ajax.php?action=get_cart_items", function(data) {
            $("#cart_items").html(data);
        });
    }
    function updateTotal() {
        $.post("ajax.php?action=get_total", function(data) {
            $("#total_items").html(data);
        });
    }

    $(document).on('submit', '.cart_list', function (event) {
        event.preventDefault();
        $.ajax({
            url: 'ajax.php?action=update_cart',
            method: 'POST',
            data:$(this).serialize(),
            success: function (resp) {
                if (resp == 1){
                    updateTotal();
                }
                    updateCart();
            }
        });
    });


    function openCart() {
        document.getElementById("cartList").style.transform = "translateX(0)";
        document.getElementById("blur").classList.add("opacity-50");
        document.body.style.overflow = 'hidden';



    }
    function closeCart() {
        document.getElementById("cartList").style.transform = "translateX(100%)";
        document.getElementById("blur").classList.remove("opacity-50");
        document.body.style.overflow = '';

    }
    function toggleCart() {
        updateTotal();
        updateCart();
        closeNav();
        var side_cart_Nav = document.getElementById("cartList");

        if (side_cart_Nav.style.transform === "translateX(0%)") {
            closeCart();
        } else {
            openCart();
        }
    }
    $('.addItemForm').submit(function (e) {
        e.preventDefault();
        var formId = $(this).attr('id');
        var itemId = formId.split('_')[1];
        var submitId = 'submit_' + itemId;
        var loaderId = 'loader_' + itemId;

        var formData = $(this).serialize() + '&item_id=' + itemId;

        document.getElementById(loaderId).classList.remove('hidden');
        document.getElementById(submitId).classList.add('hidden');
        document.getElementById(submitId).disabled = true;
        let buttons = document.getElementsByClassName('submit_button');
        for (let i = 0; i < buttons.length; i++) {
            buttons[i].disabled = true;
        }


        $.ajax({
            url: 'ajax.php?action=add_cart',
            method: 'POST',
            data: formData,
            success: function (resp) {
                if (resp == 1){
                    toggle_notif();
                    updateTotal();
                    updateCart();
                    for (let i = 0; i < buttons.length; i++) {
                        buttons[i].disabled = false;
                    }
                    document.getElementById(submitId).classList.remove('hidden');
                    document.getElementById(loaderId).classList.add('hidden');
                    document.getElementById(submitId).disabled = false;



                }
            }
        });
    });
    function removeItem(productId) {
        $.ajax({
            url: 'ajax.php?action=remove_cart_item',
            method: 'POST',
            data: { prod_id: productId },
            success: function (resp) {
                if (resp == 1) {
                    toggle_remove_notif();
                    updateCart();
                    updateTotal();
                } else {
                    console.error('Error removing item from cart.');
                }
            }
        });
    }

</script>
</html>
>>>>>>> 5384e4fb7c89b59937fbc4ba2a1b57a6b135628a
