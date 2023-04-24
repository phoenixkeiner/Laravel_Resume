@extends('partials.header')

<body class="antialiased selection:bg-fuchsia-300 selection:text-fuchsia-900 box-border
                bg-gradient-to-r from-violet-400 from-10% via-sky-500 via-30% to-amber-400 to-90%
                dark:bg-gradient-to-r dark:from-violet-500 dark:from-10% dark:via-sky-600 dark:via-30% dark:to-amber-500 dark:to-90%">

    <!-- linkedin svg from linkedin's website https://brand.linkedin.com/content/brand/global/en_us/index/visual-identity/logo -->
    <div>
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-right absolute top-5 right-5">
                <svg fill="#000000" width="75px" height="75px" viewBox="0 0 24 24" id="linkedin"
                    data-name="Linkedin Logo to My linkedin Page" xmlns="http://www.w3.org/2000/svg"
                    class="icon flat-line"><a
                        href="https://www.linkedin.com/in/phoenix-keiner?utm_source=website&utm_medium=resume&utm_campaign=laravel">
                        <rect id="secondary" x="3" y="3" width="18" height="18" rx="1"
                            style="fill: rgb(44, 169, 188); stroke-width: 2;"></rect>
                        <path id="primary" d="M16,17V14a2,2,0,0,0-2-2h0a2,2,0,0,0-2,2v3"
                            style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
                        </path>
                        <line id="primary-upstroke" x1="7.95" y1="7.5" x2="8.05" y2="7.5"
                            style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2.5;">
                        </line>
                        <path id="primary-2" data-name="primary"
                            d="M8,12v5m4-3V12m9,8V4a1,1,0,0,0-1-1H4A1,1,0,0,0,3,4V20a1,1,0,0,0,1,1H20A1,1,0,0,0,21,20Z"
                            style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
                        </path>
                    </a>
                </svg>
            </div>

            <div class="md:flex bg-rose-400 rounded-xl p-8 gap-y-1 dark:bg-rose-500 text-stone-900 dark:text-white"
                role="intoduction of me">
                <img class="w-24 h-24 md:w-48 md:h-auto md:rounded-none rounded-full mx-auto" src="/img/face.jpg"
                    alt="beautiful image of my face" width="384" height="512">
                <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
                    <blockquote>
                        <p class="text-lg font-medium">
                            “Hello! Thank you for taking time out of your busy life to get to know me better in my
                            Laravel resume! Sidenote, links are tracked through UTM codes with Google Analytics!”
                        </p>
                    </blockquote>
                    <figcaption class="font-medium">
                        <div class="text-purple-800 dark:text-slate-200">
                            Phoenix Keiner
                        </div>
                        <div class="text-purple-700 dark:text-slate-300">
                            Jr. Web Developer, Annie's Publishing
                        </div>
                    </figcaption>
                </div>
            </div>

            <!-- boxes to Resume and TMI page -->
            <div class="mt-16">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    <!-- resume page -->
                    <a href="/resume"
                        class="scale-100 p-6 bg-white dark:bg-stone-800/50 dark:bg-gradient-to-bl from-stone-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-stone-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div
                                class="h-16 w-16 bg-purple-600/20 dark:bg-purple-800/20 flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" class="w-7 h-7 stroke-orange-500">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                </svg>
                            </div>
                            <h2 class="mt-6 text-xl font-semibold text-stone-900 dark:text-white">Resume</h2>
                            <p class="mt-4 text-stone-500 dark:text-stone-400 text-sm leading-relaxed">
                            <ul class="mx-8 space-y-4 text-left text-stone-500 dark:text-stone-400">
                                <li class="flex items-center space-x-3 ml-4">
                                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>PDF download available!</span>
                                </li>
                                <li class="flex items-center space-x-3 ml-4">
                                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>A timeline of my career created using Laravel and Tailwind!</span>
                                </li>
                                </p>
                        </div>
                        <span class="relative flex h-3 w-3 mx-8">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-sky-500"></span>
                        </span>
                    </a>

                    <!-- TMI page -->
                    <a href="/tmi"
                        class="scale-100 p-6 bg-white dark:bg-stone-800/50 dark:bg-gradient-to-bl from-stone-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-stone-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div>
                                <div
                                    class="h-16 w-16 bg-purple-600/20 dark:bg-purple-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 28 28"
                                        stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M25.5 14C25.5 7.649 20.351 2.5 14 2.5 7.649 2.5 2.5 7.649 2.5 14 2.5 20.351 7.649 25.5 14 25.5 20.351 25.5 25.5 20.351 25.5 14ZM27 14C27 21.18 21.18 27 14 27 6.82 27 1 21.18 1 14 1 6.82 6.82 1 14 1 21.18 1 27 6.82 27 14ZM7.479 14 7.631 14C7.933 14 8.102 14.338 7.934 14.591 7.334 15.491 6.983 16.568 6.983 17.724L6.983 18.221C6.983 18.342 6.99 18.461 7.004 18.578 7.03 18.802 6.862 19 6.637 19L6.123 19C5.228 19 4.5 18.25 4.5 17.327 4.5 15.492 5.727 14 7.479 14ZM20.521 14C22.274 14 23.5 15.492 23.5 17.327 23.5 18.25 22.772 19 21.878 19L21.364 19C21.139 19 20.97 18.802 20.997 18.578 21.01 18.461 21.017 18.342 21.017 18.221L21.017 17.724C21.017 16.568 20.667 15.491 20.067 14.591 19.899 14.338 20.067 14 20.369 14L20.521 14ZM8.25 13C7.147 13 6.25 11.991 6.25 10.75 6.25 9.384 7.035 8.5 8.25 8.5 9.465 8.5 10.25 9.384 10.25 10.75 10.25 11.991 9.353 13 8.25 13ZM19.75 13C18.647 13 17.75 11.991 17.75 10.75 17.75 9.384 18.535 8.5 19.75 8.5 20.965 8.5 21.75 9.384 21.75 10.75 21.75 11.991 20.853 13 19.75 13ZM15.172 13.5C17.558 13.5 19.5 15.395 19.5 17.724L19.5 18.221C19.5 19.202 18.683 20 17.677 20L10.323 20C9.317 20 8.5 19.202 8.5 18.221L8.5 17.724C8.5 15.395 10.441 13.5 12.828 13.5L15.172 13.5ZM16.75 9C16.75 10.655 15.517 12 14 12 12.484 12 11.25 10.655 11.25 9 11.25 7.15 12.304 6 14 6 15.697 6 16.75 7.15 16.75 9Z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-stone-900 dark:text-white">Too Much
                                    Information</h2>

                                <p class="mt-4 text-stone-500 dark:text-stone-400 text-sm leading-relaxed">
                                    If you are currous about what I do outside of work browse through my tmi webpage!
                                </p>
                                <p class="mt-4 text-stone-500 dark:text-stone-400 text-sm leading-relaxed">
                                    May include photos of my cat :)
                                </p>
                            </div>
                        </div>
                    </a>

                </div>
            </div>

            <!-- github link -->
            <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-stone-200 dark:text-stone-200 sm:text-left">
                    <div class="flex items-center gap-4">
                        <a href="https://github.com/phoenixkeiner?utm_source=website&utm_medium=resume&utm_campaign=laravel"
                            class="group inline-flex items-center hover:text-stone-700 dark:hover:text-white focus:outline">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5"
                                class="-mt-px mr-1 w-5 h-5 stroke-stone-500 dark:stroke-stone-600 group-hover:stroke-stone-200 dark:group-hover:stroke-stone-400">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
                            Thanks for reading my resume, check out my github!
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
