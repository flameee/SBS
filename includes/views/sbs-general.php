<!--TODO: Create Classes and methods for various sections-->

<?php

/**
 * @var object $loader
 * @var object $sbs_calendar
 */

//echo '<pre>' . print_r( $sbs_calendar->get_calendar_days(), true ) . '</pre>';
//$sbs_calendar_days  = $sbs_calendar->get_calendar_days();

?>
<div>
    <div id="slideover-container" class="w-full h-full fixed inset-0 invisible z-[100000]">
        <div onclick="toggleSlideover()" id="slideover-bg"
             class="w-full h-full duration-300 ease-out transition-all inset-0 absolute bg-gray-900/80 backdrop-blur-none"></div>
        <div id="slideover"
             class="max-w-full bg-white h-full absolute right-0 duration-300 ease-out transition-all translate-x-full">
            <div onclick="toggleSlideover()"
                 class="absolute cursor-pointer text-white top-0 w-8 h-8 flex items-center justify-center right-0 mt-5 mr-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-arrow-right-to-line ">
                    <path d="M17 12H3"/>
                    <path d="m11 18 6-6-6-6"/>
                    <path d="M21 5v14"/>
                </svg>
            </div>

            <div class="divide-y divide-gray-200 max-w-2xl">
                <div class="pb-6">
                    <div class="h-24 bg-indigo-700 sm:h-20 lg:h-28"></div>
                    <div class="-mt-12 flow-root px-4 sm:-mt-8 sm:flex sm:items-end sm:px-6 lg:-mt-16">
                        <div>
                            <div class="-m-1 flex">
                                <div class="inline-flex overflow-hidden rounded-full border-4 border-white">
                                    <img class="h-24 w-24 flex-shrink-0 sm:h-40 sm:w-40 lg:h-48 lg:w-48"
                                         src="http://dev.local/wp-content/uploads/2024/06/clay-banks-fTVsh3XeL5o-unsplash-scaled.jpg"
                                         alt="">
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 sm:ml-6 sm:flex-1">
                            <div>
                                <div class="flex items-center">
                                    <h3 class="text-xl font-bold text-gray-900 sm:text-2xl" id="event-name">John
                                        Doe</h3>
                                </div>
                                <p class="text-sm text-gray-500">mymail@mydomain.com</p>
                            </div>
                            <div class="mt-5 flex flex-wrap space-y-3 sm:space-x-3 sm:space-y-0">
                                <button type="button"
                                        class="inline-flex w-full flex-shrink-0 items-center justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 sm:flex-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="lucide lucide-mail">
                                        <rect width="20" height="16" x="2" y="4" rx="2"/>
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                                    </svg>
                                </button>
                                <button type="button"
                                        class="inline-flex w-full flex-1 items-center justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="lucide lucide-phone">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-5 sm:px-0 sm:py-0">
                    <dl class="space-y-8 sm:space-y-0 sm:divide-y sm:divide-gray-200">
                        <div class="sm:flex sm:px-6 sm:py-5">
                            <dt class="text-sm font-medium text-gray-500 sm:w-40 sm:flex-shrink-0 lg:w-48 flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                     stroke-linejoin="round" class="lucide lucide-message-square-text">
                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                                    <path d="M13 8H7"/>
                                    <path d="M17 12H7"/>
                                </svg>
                                Note
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:ml-6 sm:mt-0">
                                <p>Enim feugiat ut ipsum, neque ut. Tristique mi id elementum praesent. Gravida in
                                    tempus feugiat netus enim aliquet a, quam scelerisque. Dictumst in convallis nec in
                                    bibendum aenean arcu.</p>
                            </dd>
                        </div>
                        <div class="sm:flex sm:px-6 sm:py-5">
                            <dt class="text-sm font-medium text-gray-500 sm:w-40 sm:flex-shrink-0 lg:w-48 flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                     stroke-linejoin="round" class="lucide lucide-calendar-days">
                                    <path d="M8 2v4"/>
                                    <path d="M16 2v4"/>
                                    <rect width="18" height="18" x="3" y="4" rx="2"/>
                                    <path d="M3 10h18"/>
                                    <path d="M8 14h.01"/>
                                    <path d="M12 14h.01"/>
                                    <path d="M16 14h.01"/>
                                    <path d="M8 18h.01"/>
                                    <path d="M12 18h.01"/>
                                    <path d="M16 18h.01"/>
                                </svg>
                                Giorno
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:ml-6 sm:mt-0">23/03/2025</dd>
                        </div>
                        <div class="sm:flex sm:px-6 sm:py-5">
                            <dt class="text-sm font-medium text-gray-500 sm:w-40 sm:flex-shrink-0 lg:w-48 flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                     stroke-linejoin="round" class="lucide lucide-calendar-check">
                                    <path d="M8 2v4"/>
                                    <path d="M16 2v4"/>
                                    <rect width="18" height="18" x="3" y="4" rx="2"/>
                                    <path d="M3 10h18"/>
                                    <path d="m9 16 2 2 4-4"/>
                                </svg>
                                Slot prenotato
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:ml-6 sm:mt-0 " id="event-slot">
                                1
                            </dd>
                        </div>

                    </dl>
                </div>
            </div>
        </div>
    </div>
    <div class="py-10 grid grid-cols-12 gap-y-5 gap-x-10 pr-5">
        <div class="col-span-12 mb-5">
            <h1 class="text-4xl font-bold" id="open-panel" onclick="toggleSlideover()">Simple Booking System</h1>
        </div>

        <!--Structure Settings-->
        <div class="col-span-3 space-y-5 bg-white shadow-lg rounded-md p-5 flex flex-col">
            <div class="rounded-md px-3 pb-1.5 pt-2.5  ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-indigo-600">
                <label for="item-name" class="block text-xs font-medium text-gray-900">Nome di riferimento</label>
                <input type="text" name="item-name[]" id="item-name"
                       class="block w-full !border-0 p-0 text-gray-900 placeholder:!text-gray-400 focus:!ring-0 sm:text-sm sm:leading-6 !bg-transparent"
                       placeholder="Camera Doppia" value="<?php echo $loader->sbs_options()->name ?>">
            </div>

            <!--<div class="divider w-full border-b border-gray-400 h-1"></div>-->

            <h3 class="text-base font-semibold leading-6 text-gray-900">Descrizione</h3>
            <div class="mb-3">
				<?php wp_editor( '', 'item-description' ); ?>
            </div>

            <div class="!mt-auto">
                <button class="rounded bg-indigo-600 px-2 py-1 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 cursor-pointer float-right">
                    Aggiorna
                </button>
            </div>

        </div>

        <!--Days of the week selector-->
        <div class="col-span-2 space-y-5 bg-white shadow-lg rounded-md p-5 flex flex-col">
            <!--Days List-->
            <fieldset class="max-w-content mb-3">
                <legend class="text-base font-semibold leading-6 text-gray-900">Giorni disponibili</legend>
                <div class="mt-4 divide-y divide-gray-300 border-b border-t border-gray-200">
                    <div class="relative flex items-center py-4">
                        <div class="min-w-0 flex-1 text-sm leading-6">
                            <label for="day-1" class="select-none font-medium text-gray-900">Lunedi</label>
                        </div>
                        <div class="ml-3 flex h-4 items-center">
                            <input id="day-1" name="person-1" type="checkbox"
                                   class="h-4 w-4 rounded focus:!border-gray-600 !border-gray-600 !text-indigo-600 !ring-indigo-600 focus:!ring-indigo-600 !bg-transparent focus:!bg-transparent">
                        </div>
                    </div>
                    <div class="relative flex items-center py-4">
                        <div class="min-w-0 flex-1 text-sm leading-6">
                            <label for="day-2" class="select-none font-medium text-gray-900">Martedi</label>
                        </div>
                        <div class="ml-3 flex h-4 items-center">
                            <input id="day-2" name="person-2" type="checkbox"
                                   class="h-4 w-4 rounded focus:!border-gray-600 !border-gray-600 !text-indigo-600 !ring-indigo-600 focus:!ring-indigo-600 !bg-transparent focus:!bg-transparent">
                        </div>
                    </div>
                    <div class="relative flex items-center py-4">
                        <div class="min-w-0 flex-1 text-sm leading-6">
                            <label for="day-3" class="select-none font-medium text-gray-900">Mercoledi</label>
                        </div>
                        <div class="ml-3 flex h-4 items-center">
                            <input id="day-3" name="person-3" type="checkbox"
                                   class="h-4 w-4 rounded focus:!border-gray-600 !border-gray-600 !text-indigo-600 !ring-indigo-600 focus:!ring-indigo-600 !bg-transparent focus:!bg-transparent">
                        </div>
                    </div>
                    <div class="relative flex items-center py-4">
                        <div class="min-w-0 flex-1 text-sm leading-6">
                            <label for="day-4" class="select-none font-medium text-gray-900">Giovedi</label>
                        </div>
                        <div class="ml-3 flex h-4 items-center">
                            <input id="day-4" name="person-4" type="checkbox"
                                   class="h-4 w-4 rounded focus:!border-gray-600 !border-gray-600 !text-indigo-600 !ring-indigo-600 focus:!ring-indigo-600 !bg-transparent focus:!bg-transparent">
                        </div>
                    </div>
                    <div class="relative flex items-center py-4">
                        <div class="min-w-0 flex-1 text-sm leading-6">
                            <label for="day-5" class="select-none font-medium text-gray-900">Venerdi</label>
                        </div>
                        <div class="ml-3 flex h-4 items-center">
                            <input id="day-5" name="person-5" type="checkbox"
                                   class="h-4 w-4 rounded focus:!border-gray-600 !border-gray-600 !text-indigo-600 !ring-indigo-600 focus:!ring-indigo-600 !bg-transparent focus:!bg-transparent">
                        </div>
                    </div>
                    <div class="relative flex items-center py-4">
                        <div class="min-w-0 flex-1 text-sm leading-6">
                            <label for="day-6" class="select-none font-medium text-gray-900">Sabato</label>
                        </div>
                        <div class="ml-3 flex h-4 items-center">
                            <input id="day-6" name="person-5" type="checkbox"
                                   class="h-4 w-4 rounded focus:!border-gray-600 !border-gray-600 !text-indigo-600 !ring-indigo-600 focus:!ring-indigo-600 !bg-transparent focus:!bg-transparent">
                        </div>
                    </div>
                    <div class="relative flex items-center py-4">
                        <div class="min-w-0 flex-1 text-sm leading-6">
                            <label for="day-7" class="select-none font-medium text-gray-900">Domenica</label>
                        </div>
                        <div class="ml-3 flex h-4 items-center">
                            <input id="day-7" name="person-5" type="checkbox"
                                   class="h-4 w-4 rounded focus:!border-gray-600 !border-gray-600 !text-indigo-600 !ring-indigo-600 focus:!ring-indigo-600 !bg-transparent focus:!bg-transparent">
                        </div>
                    </div>
                </div>
            </fieldset>
            <div class="mb-3">
                <label for="item-days-notes" class="block text-base font-semibold leading-6 text-gray-900">Note
                    aggiuntive</label>
                <div class="mt-2">
                <textarea rows="4" name="item-days-notes" id="item-days-notes"
                          class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                </div>
            </div>
            <div class="!mt-auto">
                <button class="rounded bg-indigo-600 px-2 py-1 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 cursor-pointer float-right">
                    Aggiorna
                </button>
            </div>
        </div>

        <!--Appointments Calendar-->
        <div class="col-span-12 lg:col-span-7 space-y-5 bg-white shadow-lg rounded-md p-5">
            <div class="lg:flex lg:h-full lg:flex-col">
                <!--Month selector-->
                <header class="flex items-center gap-5 border-b border-gray-200  py-4 lg:flex-none">
                    <div>
                        <button type="button" data-today-month="<?php echo date( 'n' ) ?>"
                                data-today-year="<?php echo date( 'Y' ) ?>"
                                class="calendar-set-today rounded bg-indigo-50 px-2 py-2 text-xs font-semibold text-indigo-600 shadow-sm hover:bg-indigo-100">
                            Oggi
                        </button>
                    </div>
                    <div class="flex items-center month-controller-container">
                        <span class="hidden current-data-value" data-current-month="<?php echo date( 'n' ) ?>"
                              data-current-year="<?php echo date( 'Y' ) ?>"></span>
                        <div class="relative flex items-center rounded-md bg-white shadow-sm md:items-stretch">
                            <button type="button"
                                    class="previous-month flex h-9 w-12 items-center justify-center rounded-l-md border-y border-l border-gray-300 pr-1 text-gray-400 hover:text-gray-500 focus:relative md:w-9 md:pr-0 md:hover:bg-gray-50">
                                <span class="sr-only">Previous month</span>
                                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </button>

                            <span class="relative -mx-px h-5 w-px bg-gray-300 md:hidden"></span>
                            <button type="button"
                                    class="next-month flex h-9 w-12 items-center justify-center rounded-r-md border-y border-r border-gray-300 pl-1 text-gray-400 hover:text-gray-500 focus:relative md:w-9 md:pl-0 md:hover:bg-gray-50">
                                <span class="sr-only">Next month</span>
                                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <h1 class="text-base font-semibold leading-6 text-gray-900 flex flex-row items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-calendar-days">
                            <path d="M8 2v4"/>
                            <path d="M16 2v4"/>
                            <rect width="18" height="18" x="3" y="4" rx="2"/>
                            <path d="M3 10h18"/>
                            <path d="M8 14h.01"/>
                            <path d="M12 14h.01"/>
                            <path d="M16 14h.01"/>
                            <path d="M8 18h.01"/>
                            <path d="M12 18h.01"/>
                            <path d="M16 18h.01"/>
                        </svg>
                        <span class="current-date-textual">Giugno 2024</span>
                    </h1>
                </header>
                <div class="shadow ring-1 ring-black ring-opacity-5 lg:flex lg:flex-auto lg:flex-col">
                    <!--Days of the week-->
                    <div class="grid grid-cols-7 gap-px border-b border-gray-300 bg-gray-200 text-center text-xs font-semibold leading-6 text-gray-700 lg:flex-none">
                        <div class="flex justify-center bg-white py-2">
                            <span>L</span>
                            <span class="sr-only sm:not-sr-only">un</span>
                        </div>
                        <div class="flex justify-center bg-white py-2">
                            <span>M</span>
                            <span class="sr-only sm:not-sr-only">ar</span>
                        </div>
                        <div class="flex justify-center bg-white py-2">
                            <span>M</span>
                            <span class="sr-only sm:not-sr-only">er</span>
                        </div>
                        <div class="flex justify-center bg-white py-2">
                            <span>G</span>
                            <span class="sr-only sm:not-sr-only">io</span>
                        </div>
                        <div class="flex justify-center bg-white py-2">
                            <span>V</span>
                            <span class="sr-only sm:not-sr-only">en</span>
                        </div>
                        <div class="flex justify-center bg-white py-2">
                            <span>S</span>
                            <span class="sr-only sm:not-sr-only">ab</span>
                        </div>
                        <div class="flex justify-center bg-white py-2">
                            <span>D</span>
                            <span class="sr-only sm:not-sr-only">om</span>
                        </div>
                    </div>

                    <!--Days of the month (numeric)-->
                    <div class="flex bg-gray-200 text-xs leading-6 text-gray-700 lg:flex-auto relative">
                        <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center loader-full-calendar-slot z-[150] hidden">
                            <button type="button"
                                    class="show-full-calendar-slot inline-flex items-center gap-x-1.5 rounded-md bg-indigo-600 px-2.5 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                Caricamento


                                <svg class="animate-spin h-5 w-5 text-white loading-indicator"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                            stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor"
                                          d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="hidden w-full lg:grid lg:grid-cols-7 lg:grid-rows-6 lg:gap-px container-full-calendar-slot relative"></div>
                        <div class="isolate grid w-full grid-cols-7 grid-rows-6 gap-px lg:hidden">
							<?php $sbs_calendar->render_mini_calendar_slots(); ?>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-10 sm:px-6 lg:hidden">
                    <ol class="divide-y divide-gray-100 overflow-hidden rounded-lg bg-white text-sm shadow ring-1 ring-black ring-opacity-5">
                        <li class="group flex p-4 pr-6 focus-within:bg-gray-50 hover:bg-gray-50">
                            <div class="flex-auto">
                                <p class="font-semibold text-gray-900">Maple syrup museum</p>
                                <time datetime="2022-01-15T09:00" class="mt-2 flex items-center text-gray-700">
                                    <svg class="mr-2 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                         aria-hidden="true">
                                        <path fill-rule="evenodd"
                                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-13a.75.75 0 00-1.5 0v5c0 .414.336.75.75.75h4a.75.75 0 000-1.5h-3.25V5z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    3PM
                                </time>
                            </div>
                            <a href="#"
                               class="ml-6 flex-none self-center rounded-md bg-white px-3 py-2 font-semibold text-gray-900 opacity-0 shadow-sm ring-1 ring-inset ring-gray-300 hover:ring-gray-400 focus:opacity-100 group-hover:opacity-100">Edit<span
                                        class="sr-only">, Maple syrup museum</span></a>
                        </li>
                        <li class="group flex p-4 pr-6 focus-within:bg-gray-50 hover:bg-gray-50">
                            <div class="flex-auto">
                                <p class="font-semibold text-gray-900">Hockey game</p>
                                <time datetime="2022-01-22T19:00" class="mt-2 flex items-center text-gray-700">
                                    <svg class="mr-2 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                         aria-hidden="true">
                                        <path fill-rule="evenodd"
                                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-13a.75.75 0 00-1.5 0v5c0 .414.336.75.75.75h4a.75.75 0 000-1.5h-3.25V5z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    7PM
                                </time>
                            </div>
                            <a href="#"
                               class="ml-6 flex-none self-center rounded-md bg-white px-3 py-2 font-semibold text-gray-900 opacity-0 shadow-sm ring-1 ring-inset ring-gray-300 hover:ring-gray-400 focus:opacity-100 group-hover:opacity-100">Edit<span
                                        class="sr-only">, Hockey game</span></a>
                        </li>
                    </ol>
                </div>
            </div>

        </div>

    </div>
</div>