<header class="bg-green-700 dark:bg-gray-800 text-white dark:border dark:border-gray-700
dark:text-gray-300 sticky top-0 z-20 shadow-xl rounded mb-5">

    <section class="max-w-6xl mx-auto p-4 flex justify-between items-center">
        <div>
            <button id="mobile-open-button" class="text-3xl  focus:outline-none" onclick="toggleNav()">
                &#9776;
            </button>
        </div>

        <div class="grid place-items-center w-[70%] text-black dark:text-gray-300 sm:w-[60%]">
            <div class="w-5/6">
                <form>
                    <div class="flex">
                        <div class="absolute grid place-items-center h-10 w-10">
                            <label><i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <div class="w-full">
                            <input class="h-10 dark:bg-gray-500 dark:opacity-85 dark:text-slate-50
                            rounded shadow-xl
                            border-none active:border-none pl-10 focus:outline-none  w-full" placeholder="Search" type="search">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="md:block hidden">
            <nav class="space-x-8 text-md"   aria-label="main">
                <button><i class="fa-regular fa-bell fa-fade"></i></button>
                <button onclick="toggleCart()"><i class="fa-solid fa-basket-shopping"></i></button>
                <a href="menu.php" class="hover:opacity-90"><i class="fa-solid fa-user"></i> Profile </a>

            </nav>
        </div>
        <div class="md:hidden block">
            <nav class="space-x-8 text-md"   aria-label="main">

                <button onclick="toggleCart()"><i class="fa-solid fa-basket-shopping"></i></button>
                <a href="menu.php" class="hover:opacity-90"><i class="fa-solid fa-user"></i></a>
            </nav>
        </div>
    </section>
</header>
<div id="mySidenav" class=" shadow-lg
 fixed top-0 left-0 h-full w-1/2 md:w-[25%] lg:w-[20%]
 bg-slate-50 dark:bg-gray-800 text-black dark:text-gray-300
transition-transform transform translate-x-[-100%] z-30">

    <section class="mt-10">
        <div class="grid place-items-center">
            <h1 class=" sm:text-3xl text-lg">
                <a href="index.php?page=home" title="ecommerce icons"><i class="fa-solid fa-shop"></i> Αγορά</a>
            </h1>
        </div>
        <div class="mt-10 flex items-center flex-col justify-center  h-full">
            <div class="h-10 w-full lg:w-[80%] hover:bg-gray-200 hover:text-black transition-all rounded px-3">
                <a href="menu.php?page=products">
                    <h1 class="text-lg font-bold hover:opacity-90"><i class="fa-solid fa-leaf"></i> Products</h1>
                </a>
                <hr class="mx-auto bg-black dark:bg-white w-full">
            </div>
            <div class=" h-10 w-full lg:w-[80%] hover:bg-gray-200 hover:text-black  transition-all rounded px-3">
                <a href="menu.php?page=cart">
                    <h1 class="text-lg font-bold hover:opacity-90"><i class="fa-solid fa-truck-fast"></i> Orders</h1>
                </a>
                <hr class="mx-auto bg-black dark:bg-white w-full">
            </div>
        </div>
    </section>
</div>


<script>
    function openNav() {
        document.getElementById("mySidenav").style.transform = "translateX(0)";
        document.getElementById("blur").classList.add("opacity-50");
        document.body.style.overflow = 'hidden';
    }
    function closeNav() {
        document.getElementById("mySidenav").style.transform = "translateX(-100%)";
        document.getElementById("blur").classList.remove("opacity-50");
        document.body.style.overflow = '';
    }
    function toggleNav() {
        closeCart();
        var sideNav = document.getElementById("mySidenav");

        if (sideNav.style.transform === "translateX(0%)") {
            closeNav();
        } else {
            openNav();
        }
    }
</script>