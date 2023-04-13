<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Phoenix Keiner's Resume!</title>
        <!-- icon image from laravel's website -->
        <link rel="icon" type="image/png" sizes="32x32" href="/img/laravelicon.png">
        <!-- links style sheet from publix/css/app.css -->
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body class="antialiased">
        <!-- linkedin svg from linkedin's website https://brand.linkedin.com/content/brand/global/en_us/index/visual-identity/logo -->
        <div class="bg-gradient-to-r from-purple-500 to-pink-500">
            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-right absolute top-0 right-0">
                    <svg fill="#000000" width="75px" height="75px" viewBox="0 0 24 24" id="linkedin" data-name="Linkedin Logo to My linkedin Page" xmlns="http://www.w3.org/2000/svg" class="icon flat-line"><a href="https://www.linkedin.com/in/phoenix-keiner?utm_source=website&utm_medium=resume&utm_campaign=laravel"><rect id="secondary" x="3" y="3" width="18" height="18" rx="1" style="fill: rgb(44, 169, 188); stroke-width: 2;"></rect>
                        <path id="primary" d="M16,17V14a2,2,0,0,0-2-2h0a2,2,0,0,0-2,2v3" style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path>
                        <line id="primary-upstroke" x1="7.95" y1="7.5" x2="8.05" y2="7.5" style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2.5;"></line>
                        <path id="primary-2" data-name="primary" d="M8,12v5m4-3V12m9,8V4a1,1,0,0,0-1-1H4A1,1,0,0,0,3,4V20a1,1,0,0,0,1,1H20A1,1,0,0,0,21,20Z" style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path></a>
                    </svg>
                </div>
                <div class="ml-4">
                </div>
                <!-- Download button for my resume -->
                <a href="pdf/freshcat2.pdf" download="freshcat2.pdf">
                <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                    <span>Download Resume (PDF)</span>
                  </button>
                </a>
                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                        <div class="flex items-center gap-4">
                            <a href="https://github.com/phoenixkeiner?utm_source=website&utm_medium=resume&utm_campaign=laravel" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                                Thanks for reading my resume, check out my github!
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div><a href="/">return home</a>

    </body>
</html>
