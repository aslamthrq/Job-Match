<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      @vite(['resources/css/app.css','resources/js/app.js'])
      <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
      <link rel="icon" href="{{ url('images/job-match-white.svg') }}">
      <title>Selection Process</title>
</head>
<body>
    @include('candidates.components.sidebar')

    <div class=" sm:ml-80">
        <div class="p-4 m-4 rounded-lg dark:border-gray-700">
            <nav class="flex mb-4" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                    <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                    </svg>
                    Dashboard
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
           

            
            

            <div class=" p-4 border bg-gray-50  rounded-xl mb-4">
                <ul class="flex items-center w-full text-sm font-medium text-center text-e73002 sm:text-base" id="default-tab" data-tabs-toggle="#default-tab-content" data-tabs-active-classes="text-e73002" data-tabs-inactive-classes="text-gray-500" role="tablist">
                    <li class="flex md:w-full items-center sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-e73002 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 " role="path point selection">
                        <button class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200" id="participant-tab" data-tabs-target="#participant" type="button" role="tab" aria-controls="participant" aria-selected="false">
                            <div class="ps-3">
                                <span class="inline-flex items-center justify-center w-8 h-8 bg-e73002 text-white rounded-full" >1</span>
                                <div class="flex items-center after:content-['/']  sm:after:hidden after:mx-2 after:text-gray-200">
                                    Participant <span class="hidden sm:inline-flex sm:ms-2">Info</span>
                                </div>
                                <div class="block mt-2 text-xs text-gray-500">16 Maret 2024</div>
                            </div>
                        </button>
                    </li>
                    <li class="flex  md:w-full items-center  sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-e73002 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 " role="path point selection">
                        <button class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 " id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="true">
                            <div class="ps-3">
                                <span class="inline-flex items-center justify-center w-8 h-8 bg-e73002 text-white rounded-full">2</span>
                                <div class="flex items-center after:content-['/']  sm:after:hidden after:mx-2 after:text-gray-200 ">
                                     <span class="hidden sm:inline-flex sm:ms-2">Pemberkasan</span>
                                </div>
                                <div class="block mt-2 text-xs text-gray-500">21 Maret 2024</div>
                            </div>
                        </button>   
                    </li>
                    <li class="flex items-center" role="path point selection">
                        <button class="me-2 flex" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="true">
                            <div class="ps-3">
                                <span class="inline-flex items-center justify-center w-8 h-8 bg-e73002 text-white rounded-full">3</span>
                                <div class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200">
                                    Meet <span class="hidden sm:inline-flex sm:ms-2">Ivitation</span>
                                </div>
                                <div class="block mt-2 text-xs text-gray-500">16 Mei 2024</div>
                            </div>
                        </button>
                    </li>
            
                </ul>
            </div>
            <div id="default-tab-content">
                <div class="hidden p-4 rounded-lg bg-gray-50 border" id="participant" role="tabpanel" aria-labelledby="participant-tab">
                   @include('recruiter.components.participantTable')
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 border" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                    @include('recruiter.components.pemberkasanTable')
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 border" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                    @include('recruiter.components.meetInvitationTable')
                </div>
            </div>
        </div>
            
        
    </div>
    </div>
    
</body>
</html>