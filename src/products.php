
<div id="blur" class=" flex flex-wrap gap-2.5  justify-center lg:justify-evenly mb-5 h-full ">
    <?php
    foreach ($_SESSION['items'] as $item){
        echo '
        <div class="card w-64 bg-base-100 shadow-xl mb-5">
        <div class="h-60 rounded-t-lg bg-green-100 dark:bg-gray-700">
            <div class="px-3 py-3 flex justify-center h-60">
               <img class="object-contain" src="images/'.$item[4].'" alt="item image">
           </div>
        </div>
        <div class="card-body">
            <div class="px-7">
                <div class="font-bold mb-2 text-center">'.$item[3].'</div>
                <p class="text-sm font-semibold mb-2">'.$item[2].'</p>
                <h1 class="font-semibold"><i class="fa-solid fa-peso-sign"></i> '.$item[1].'</h1>
            </div>
            <div class="card-actions justify-center">
                <form id="addItem_' . $item[0] . '" class="addItemForm"  action="">
                    <input type="hidden" name="id" value="'.$item[0].'">
                    <input type="hidden" name="price" value="'.$item[1].'">
                    <input type="hidden" name="price_category" value="'.$item[2].'">
                    <input type="hidden" name="product_name" value="'.$item[3].'">
                    <input type="hidden" name="image_path" value="'.$item[4].'">

                    <div class="flex justify-center">
                        <div onclick="increaseValue('.$item[0].')" class="w-16 grid place-items-center rounded
                         active:bg-gray-100 hover:opacity-85 transition-all">
                            <h1  ><i class="fa-solid fa-plus"></i></h1>
                        </div>
                        <div>
                            <input id="'.$item[0].'" class="w-20 rounded bg-slate-50 dark:bg-gray-500 px-2 py-2
                        focus:outline-none text-center" name="quantity" value="1" min="0" type="number" required>
                        </div>
                        <div onclick="decreaseValue('.$item[0].')" class=" w-16 grid place-items-center rounded
                         active:bg-gray-100 hover:opacity-85 transition-all">
                            <h1><i class="fa-solid fa-minus"></i></h1>
                        </div>
                    </div>
                    <div class="flex justify-center mt-2 w-full">


                        <input id="submit_' . $item[0] . '" class=" font-semibold border-none
                          bg-green-600 dark:bg-gray-700
                          transition-all rounded  hover:opacity-85 active:bg-green-800 dark:active:bg-gray-800
                          border px-6 py-2 submit_button" type="submit" value="Add to cart" >
                          
                        <div id="loader_' . $item[0] . '" class=" hidden  h-10 w-10 animate-spin rounded-full 
                          border-4 border-solid border-current 
                          border-r-transparent align-[-0.125em] motion-reduce:animate-[spin_1.5s_linear_infinite]"
                             role="status">
                            <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Loading...</span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
        
        ';
    }
    ?>
</div>