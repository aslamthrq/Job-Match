<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="icon" href="{{ url('images/job-match-white.svg') }}">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <title>Selection Process</title>
</head>
<body>
    @include('components.sidebar')
     
    <div class="sm:ml-80">

        <div class="p-4 m-4 rounded-lg dark:border-gray-700">
            <nav class="flex mb-4" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                    <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                    </svg>
                    Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                    <svg class="w-3 h-3 text-gray-400 mx-1 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <a href="/postroom" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Post Room</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                    <svg class="w-3 h-3 text-gray-400 mx-1 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Postingan ke-1</span>
                    </div>
                </li>
                </ol>
            </nav>
            
            <h2 class="text-xl text-gray-900 font-bold mb-2">Marketing Manager</h2>
           

            <div class="grid grid-cols-5 gap-4 mb-4">
                
                <div class="flex items-center justify-center rounded h-16 bg-gray-50 ">
                    <div class="ps-3">
                        <svg class="w-11 h-11 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z" clip-rule="evenodd"/>
                          </svg>
                    </div>
                    <div class="ps-3">
                        <div class="text-lg text-gray-700 font-extrabold">100</div>
                        <div class="font-normal text-sm text-gray-700">Pendaftar</div>
                    </div>
                </div>
                <div class="flex items-center justify-center rounded h-16 bg-gray-50 ">
                    <div class="ps-3">
                          <svg class="w-11 h-11 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M5 8a4 4 0 1 1 7.796 1.263l-2.533 2.534A4 4 0 0 1 5 8Zm4.06 5H7a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h2.172a2.999 2.999 0 0 1-.114-1.588l.674-3.372a3 3 0 0 1 .82-1.533L9.06 13Zm9.032-5a2.907 2.907 0 0 0-2.056.852L9.967 14.92a1 1 0 0 0-.273.51l-.675 3.373a1 1 0 0 0 1.177 1.177l3.372-.675a1 1 0 0 0 .511-.273l6.07-6.07a2.91 2.91 0 0 0-.944-4.742A2.907 2.907 0 0 0 18.092 8Z" clip-rule="evenodd"/>
                          </svg>
                    </div>
                    <div class="ps-3">
                        <div class="text-lg text-gray-700 font-extrabold">35</div>
                        <div class="font-normal text-sm text-gray-700">Sedang proses</div>
                    </div>
                </div>
                <div class="flex items-center justify-center rounded h-16 bg-gray-50 ">
                    <div class="ps-3">
                        <svg class="w-11 h-11 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M5 8a4 4 0 1 1 8 0 4 4 0 0 1-8 0Zm-2 9a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-1Zm13-6a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2h-4Z" clip-rule="evenodd"/>
                          </svg>
                          
                  </div>
                    <div class="ps-3">
                        <div class="text-lg  text-gray-700 font-extrabold">43</div>
                        <div class="font-normal text-sm text-gray-700">Tereliminasi</div>
                    </div>
                </div>
                <div class="flex items-center justify-center rounded h-16 bg-gray-50 ">
                    <div class="ps-3">
                        <svg class="w-11 h-11 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M9 2a1 1 0 0 0-1 1H6a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-2a1 1 0 0 0-1-1H9Zm1 2h4v2h1a1 1 0 1 1 0 2H9a1 1 0 0 1 0-2h1V4Zm5.707 8.707a1 1 0 0 0-1.414-1.414L11 14.586l-1.293-1.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4Z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="ps-3">
                        <div class="text-lg  text-gray-700 font-extrabold">2</div>
                        <div class="font-normal text-sm text-gray-700">Tahap Offering</div>
                    </div>
                </div>
                <div class="flex items-center justify-center rounded h-16 bg-gray-50 ">
                    <div class="ps-3">
                        <svg class="w-11 h-11 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z"/>
                        </svg>
                    </div>
                    <div class="ps-3">
                        <div class="text-lg  text-gray-700 font-extrabold">12</div>
                        <div class="font-normal text-sm text-gray-700">Tidak Cocok</div>
                    </div>
                </div>
                
            </div>
            

            <div class=" p-4 border bg-gray-50  rounded-xl mb-4">
                <ul class="flex items-center w-full text-sm font-medium text-center text-e73002 sm:text-base" id="default-tab" data-tabs-toggle="#default-tab-content" data-tabs-active-classes="text-e73002" data-tabs-inactive-classes="text-gray-500" role="tablist">
                    <li class="flex  md:w-full items-center sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-e73002 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-e73002" role="path point selection">
                        <button class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200" id="participant-tab" data-tabs-target="#participant" type="button" role="tab" aria-controls="participant" aria-selected="false">
                            <div class="ps-3">
                                <span class="inline-flex items-center justify-center w-8 h-8 bg-e73002 text-white rounded-full" >1</span>
                                <div class="flex items-center after:content-['/']  sm:after:hidden after:mx-2 after:text-gray-200">
                                    Participant <span class="hidden sm:inline-flex sm:ms-2">Info</span>
                                </div>
                                <div class="block mt-2 text-xs text-gray-500">16 Mei 2024</div>
                            </div>
                        </button>
                    </li>
                    <li class="flex  md:w-full items-center  sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-e73002 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-e73002" role="path point selection">
                        <button class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 " id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">
                            <div class="ps-3">
                                <span class="inline-flex items-center justify-center w-8 h-8 bg-e73002 text-white rounded-full">2</span>
                                <div class="flex items-center after:content-['/']  sm:after:hidden after:mx-2 after:text-gray-200 ">
                                    Invitation <span class="hidden sm:inline-flex sm:ms-2">Test</span>
                                </div>
                                <div class="block mt-2 text-xs text-gray-500">16 Mei 2024</div>
                            </div>
                        </button>   
                    </li>
                    <li class="flex items-center" role="path point selection">
                        <button class="me-2 flex" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">
                            <div class="ps-3">
                                <span class="inline-flex items-center justify-center w-8 h-8 bg-e73002 text-white rounded-full">3</span>
                                <div class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200">
                                    Interview <span class="hidden sm:inline-flex sm:ms-2">Test</span>
                                </div>
                                <div class="block mt-2 text-xs text-gray-500">16 Mei 2024</div>
                            </div>
                        </button>
                    </li>
            
                </ul>
            </div>
            <div id="default-tab-content">
                <div class="hidden p-4 rounded-lg bg-gray-50 border dark:bg-gray-800" id="participant" role="tabpanel" aria-labelledby="participant-tab">
                   @include('recruiter.components.participantTable')
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta, unde natus temporibus a quod rerum consectetur accusantium aspernatur <strong class="font-medium text-gray-800 dark:text-white">Akun Info</strong>.asdffffffff.</p>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta, unde natus temporibus a quod rerum consectetur accusantium aspernatur <strong class="font-medium text-gray-800 dark:text-white"Konfirmasi indo</strong>. aaaaaaaaaaafsdfsdafaaf.</p>
                </div>
            </div>
        </div>
            
        
    </div>
</body>
</html>