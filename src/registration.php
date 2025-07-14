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
    <title>Register</title>
    <style>

    </style>

</head>
<body  class="min-h-screen bg-slate-50 dark:bg-gray-800 dark:text-gray-300">

<?php
include 'land_nav_bar.php';
?>
<main >
    <section class=" max-w-2xl  mx-auto p-4 items-center">
        <div class="flex justify-center">
            <div class="w-5/6 sm:w-[40%] flex flex-col items-center  py-6 px-2
                roundedl shadow-xl top-[20%] absolute bg-slate-50 dark:bg-gray-700">
                <h1 class="text-2xl font-semibold text-gray-700 dark:text-gray-300">Register</h1>
                <div class="w-full">
                    <form class="px-8 pt-6 pb-8 mb-4 text-gray-700 dark:text-gray-300">
                        <div class="flex mb-3 flex-col lg:flex-row flex-wrap justify-center">
                            <div class="relative h-11 w-full lg:w-[48%] mb-3">
                                <input placeholder="Enter your first name"
                                       class="peer h-full w-full border-b border-blue-gray-200
                                   bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal
                                   text-blue-gray-700 outline outline-0 transition-all
                                   placeholder-shown:border-blue-gray-200
                                   focus:border-gray-500 focus:outline-0
                                   disabled:border-0 disabled:bg-blue-gray-50
                                   placeholder:opacity-0 focus:placeholder:opacity-100" />
                                <label
                                        class="after:content[''] pointer-events-none absolute
                                         left-0  -top-1.5 flex h-full w-full select-none
                                          !overflow-visible truncate text-[11px] font-normal
                                          leading-tight text-gray-500 transition-all after:absolute
                                          after:-bottom-1.5 after:block after:w-full after:scale-x-0
                                          after:border-b-2 after:border-gray-500 after:transition-transform
                                          after:duration-300 peer-placeholder-shown:text-sm
                                          peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500

                                          peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-700 peer-focus:dark:text-gray-300   peer-focus:after:scale-x-100
                                          peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                    First Name
                                </label>
                            </div>
                            <div class="lg:ml-3 relative h-11 w-full lg:w-[48%] mb-3">
                                <input type="text" name="last_name" placeholder="Enter your last name"
                                       class="peer h-full w-full border-b border-blue-gray-200
                                   bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal
                                   text-blue-gray-700 outline outline-0 transition-all
                                   placeholder-shown:border-blue-gray-200
                                   focus:border-gray-500 focus:outline-0
                                   disabled:border-0 disabled:bg-blue-gray-50
                                   placeholder:opacity-0 focus:placeholder:opacity-100" />
                                <label
                                        class="after:content[''] pointer-events-none absolute
                                         left-0  -top-1.5 flex h-full w-full select-none
                                          !overflow-visible truncate text-[11px] font-normal
                                          leading-tight text-gray-500 transition-all after:absolute
                                          after:-bottom-1.5 after:block after:w-full after:scale-x-0
                                          after:border-b-2 after:border-gray-500 after:transition-transform
                                          after:duration-300 peer-placeholder-shown:text-sm
                                          peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500

                                          peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-700 peer-focus:dark:text-gray-300   peer-focus:after:scale-x-100
                                          peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                    Last Name
                                </label>
                            </div>
                            <div class="relative h-11 w-full lg:w-[48%] mb-3">
                                <input type="date" name="birthdate" placeholder="Enter your first name"
                                       class="peer h-full w-full border-b border-blue-gray-200
                                   bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal
                                   text-blue-gray-700 outline outline-0 transition-all
                                   placeholder-shown:border-blue-gray-200
                                   focus:border-gray-500 focus:outline-0
                                   disabled:border-0 disabled:bg-blue-gray-50
                                   placeholder:opacity-0 focus:placeholder:opacity-100" />
                                <label
                                        class="after:content[''] pointer-events-none absolute
                                         left-0  -top-1.5 flex h-full w-full select-none
                                          !overflow-visible truncate text-[11px] font-normal
                                          leading-tight text-gray-500 transition-all after:absolute
                                          after:-bottom-1.5 after:block after:w-full after:scale-x-0
                                          after:border-b-2 after:border-gray-500 after:transition-transform
                                          after:duration-300 peer-placeholder-shown:text-sm
                                          peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500

                                          peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-700 peer-focus:dark:text-gray-300   peer-focus:after:scale-x-100
                                          peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                    Birth Date
                                </label>
                            </div>
                            <div class="lg:ml-3 relative h-11 w-full lg:w-[48%] mb-3">
                                <select class="peer h-full w-full border-b border-blue-gray-200
                                   bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal
                                   text-blue-gray-700 outline outline-0 transition-all
                                   placeholder-shown:border-blue-gray-200
                                   focus:border-gray-500 focus:outline-0
                                   disabled:border-0 disabled:bg-blue-gray-50
                                   placeholder:opacity-0 focus:placeholder:opacity-100">
                                    <option class="dark:bg-gray-700  rounded h-9 py-5 px-3" >Select Gender</option>
                                    <option class="dark:bg-gray-700  rounded h-9 py-5 px-3">Male</option>
                                    <option class="dark:bg-gray-700  rounded h-9 py-5 px-3">Female</option>
                                    <option class="dark:bg-gray-700  rounded h-9 py-5 px-3">Others</option>

                                </select>
                                <label
                                        class="after:content[''] pointer-events-none absolute
                                         left-0  -top-1.5 flex h-full w-full select-none
                                          !overflow-visible truncate text-[11px] font-normal
                                          leading-tight text-gray-500 transition-all after:absolute
                                          after:-bottom-1.5 after:block after:w-full after:scale-x-0
                                          after:border-b-2 after:border-gray-500 after:transition-transform
                                          after:duration-300 peer-placeholder-shown:text-sm
                                          peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500

                                          peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-700 peer-focus:dark:text-gray-300   peer-focus:after:scale-x-100
                                          peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                    Gender
                                </label>
                            </div>
                            <div class="relative h-11 w-full lg:w-[48%] mb-3">
                                <input type="email" placeholder="@example.com"
                                       class="peer h-full w-full border-b border-blue-gray-200
                                   bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal
                                   text-blue-gray-700 outline outline-0 transition-all
                                   placeholder-shown:border-blue-gray-200
                                   focus:border-gray-500 focus:outline-0
                                   disabled:border-0 disabled:bg-blue-gray-50
                                   placeholder:opacity-0 focus:placeholder:opacity-100" />
                                <label
                                        class="after:content[''] pointer-events-none absolute
                                         left-0  -top-1.5 flex h-full w-full select-none
                                          !overflow-visible truncate text-[11px] font-normal
                                          leading-tight text-gray-500 transition-all after:absolute
                                          after:-bottom-1.5 after:block after:w-full after:scale-x-0
                                          after:border-b-2 after:border-gray-500 after:transition-transform
                                          after:duration-300 peer-placeholder-shown:text-sm
                                          peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500

                                          peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-700 peer-focus:dark:text-gray-300   peer-focus:after:scale-x-100
                                          peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                    Email
                                </label>
                            </div>
                            <div class="lg:ml-3 relative h-11 w-full lg:w-[48%] mb-3">
                                <input type="number" min="0" name="last_name" placeholder="+63"
                                       class="peer h-full w-full border-b border-blue-gray-200
                                   bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal
                                   text-blue-gray-700 outline outline-0 transition-all
                                   placeholder-shown:border-blue-gray-200
                                   focus:border-gray-500 focus:outline-0
                                   disabled:border-0 disabled:bg-blue-gray-50
                                   placeholder:opacity-0 focus:placeholder:opacity-100" />
                                <label
                                        class="after:content[''] pointer-events-none absolute
                                         left-0  -top-1.5 flex h-full w-full select-none
                                          !overflow-visible truncate text-[11px] font-normal
                                          leading-tight text-gray-500 transition-all after:absolute
                                          after:-bottom-1.5 after:block after:w-full after:scale-x-0
                                          after:border-b-2 after:border-gray-500 after:transition-transform
                                          after:duration-300 peer-placeholder-shown:text-sm
                                          peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500

                                          peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-700 peer-focus:dark:text-gray-300   peer-focus:after:scale-x-100
                                          peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                    Contact Number
                                </label>
                            </div>
                            <div class="relative h-11 w-full lg:w-[48%] mb-3">
                                <input type="password" placeholder="Enter your password"
                                       class="peer h-full w-full border-b border-blue-gray-200
                                   bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal
                                   text-blue-gray-700 outline outline-0 transition-all
                                   placeholder-shown:border-blue-gray-200
                                   focus:border-gray-500 focus:outline-0
                                   disabled:border-0 disabled:bg-blue-gray-50
                                   placeholder:opacity-0 focus:placeholder:opacity-100" />
                                <label
                                        class="after:content[''] pointer-events-none absolute
                                         left-0  -top-1.5 flex h-full w-full select-none
                                          !overflow-visible truncate text-[11px] font-normal
                                          leading-tight text-gray-500 transition-all after:absolute
                                          after:-bottom-1.5 after:block after:w-full after:scale-x-0
                                          after:border-b-2 after:border-gray-500 after:transition-transform
                                          after:duration-300 peer-placeholder-shown:text-sm
                                          peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500

                                          peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-700 peer-focus:dark:text-gray-300   peer-focus:after:scale-x-100
                                          peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                    Password
                                </label>
                            </div>
                            <div class="lg:ml-3 relative h-11 w-full lg:w-[48%] mb-3">
                                <input type="password"  name="last_name" placeholder="Re-enter your password"
                                       class="peer h-full w-full border-b border-blue-gray-200
                                   bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal
                                   text-blue-gray-700 outline outline-0 transition-all
                                   placeholder-shown:border-blue-gray-200
                                   focus:border-gray-500 focus:outline-0
                                   disabled:border-0 disabled:bg-blue-gray-50
                                   placeholder:opacity-0 focus:placeholder:opacity-100" />
                                <label
                                        class="after:content[''] pointer-events-none absolute
                                         left-0  -top-1.5 flex h-full w-full select-none
                                          !overflow-visible truncate text-[11px] font-normal
                                          leading-tight text-gray-500 transition-all after:absolute
                                          after:-bottom-1.5 after:block after:w-full after:scale-x-0
                                          after:border-b-2 after:border-gray-500 after:transition-transform
                                          after:duration-300 peer-placeholder-shown:text-sm
                                          peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500

                                          peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-700 peer-focus:dark:text-gray-300   peer-focus:after:scale-x-100
                                          peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                    Confirm Password
                                </label>
                            </div>
                        </div>


                        <div class="mt-5 sm:mt-10 flex justify-center">
                            <label>
                                <input type="checkbox" class="rounded bg-black">
                                By signing up i agree to the <span class="text-blue-400">Terms and condition</span>
                            </label>
                        </div>

                        <div class="mt-5 sm:mt-3 flex flex-col sm:flex-row items-center justify-center">
                            <input type="submit" value="Sign Up" class="bg-green-500 border opacity-80 hover:cursor-pointer
                             dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-800 font-bold py-1 px-4 rounded-xl
                              focus:outline-none focus:shadow-outline">
                            <a class="inline-block align-baseline text-sm mt-5 sm:mt-0 ml-0 sm:ml-3 hover:text-black hover:opacity-70" href="index.php?page=login"> or Login
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
</body>
</html>