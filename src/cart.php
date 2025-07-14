<div id="cartList" class="fixed top-0 right-0 h-full
     w-1/2 md:w-[40%] lg:w-[30%] bg-slate-50 dark:bg-gray-600
     text-black transition-transform transform translate-x-[100%] shadow z-30 dark:text-gray-300">
    <div class="h-[72px] static bg-green-700 dark:bg-gray-800 flex
        justify-evenly dark:shadow-xl text-white dark:text-gray-300">
        <div class="h-full grid place-items-center  w-1/2">
            <h1 class=" sm:text-xl font-semibold  items-center">
                Total:
            </h1>
        </div>
        <div class="h-full  grid place-items-center w-1/2">
            <h1 class=" font-semibold sm:text-xl  items-center">
                <i class="fa-solid fa-peso-sign"> <span id="total_items"></span></i>
            </h1>
        </div>
    </div>
    <section id="cart_items" class="overflow-y-scroll h-[78%]">

    </section>
    <div class="h-16 hover:cursor-pointer w-full bottom-0 absolute grid place-items-center bg-green-600 dark:bg-gray-800
                          transition-all rounded  hover:opacity-85 active:bg-green-800 dark:active:bg-gray-900 ">
        <h1 class=" sm:text-lg font-medium">
            <a href="" title="ecommerce icons">Check Out <i class="fa-solid fa-arrow-right"></i></a>
        </h1>
    </div>
</div>
