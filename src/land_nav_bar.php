<header class="bg-green-700 dark:bg-cyan-800 text-white dark:text-black sticky top-0 z-20">
    <section class="max-w-6xl mx-auto flex-row-reverse sm:flex-row p-4 flex justify-between items-center">
        <h1 class="text-3xl font medium">
            <a href="index.php?page=home" title="ecommerce icons"><i class="fa-solid fa-shop"></i> Αγορά</a>
        </h1>
        <div>
            <button id="mobile-open-button" class="text-3xl sm:hidden focus:outline-none" onclick="toggleNav()">
                &#9776;
            </button>
            <nav class="sm:block hidden space-x-8 text-xl" aria-label="main">
                <a href="menu.php" class="font-bold hover:opacity-90">Menu</a>
                <a href="index.php?page=login" class="font-bold hover:opacity-90">Login</a>
            </nav>
        </div>
    </section>
</header>

<div id="mySidenav" class=" sm:hidden fixed top-0 left-0 h-full w-1/2 bg-gray-600 dark:bg-slate-400 text-white dark:text-black transition-transform transform translate-x-[-100%] z-30">
    <div onclick="closeNav()" class="rounded h-6 w-6 foc absolute active:border active:dark:border-gray-400 right-0">
        <a href="#" class="grid place-items-center mt-1"><i class="fas fa-times"></i></a>
    </div>
    <section class="sm:hidden mt-10">
        <div class="flex flex-col text-center">
            <div class="h-16 hover:bg-gray-200 transition-all rounded">
                <h1 class="mt-6 text-3xl font-bold hover:opacity-90"><a href="index.php?page=home">Home</a></h1>
                <hr class="mx-auto  bg-black dark:bg-white w-[80%]">
            </div>
            <div class="h-16 hover:bg-gray-200 transition-all rounded">
                <h1 class="text-3xl font-bold mt-6 hover:opacity-90"><a href="menu.php">Menu</a></h1>
                <hr class="mx-auto bg-black dark:bg-white w-[80%]">
            </div>
            <div class="h-16 hover:bg-gray-200 transition-all rounded">
                <h1 class="text-3xl font-bold mt-6 hover:opacity-90"><a href="index.php?page=login">Login</a></h1>
                <hr class="mx-auto bg-black dark:bg-white w-[80%]">
            </div>
        </div>
    </section>
</div>

<script>
    function openNav() {
        document.getElementById("mySidenav").style.transform = "translateX(0)";
    }
    function closeNav() {
        document.getElementById("mySidenav").style.transform = "translateX(-100%)";
    }
    function toggleNav() {
        var sideNav = document.getElementById("mySidenav");

        if (sideNav.style.transform === "translateX(0%)") {
            closeNav();
        } else {
            openNav();
        }
    }
</script>

