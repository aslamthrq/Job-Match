<!DOCTYPE html>
<html>
<head>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <title>Selection Process</title>
</head>
<body>
    {{-- @include('components.navbar') --}}
    @include('components.sidebar')
     
 <div class="sm:ml-80">
    <div class="p-4 m-4 rounded-lg dark:border-gray-700">
        <div class="grid grid-cols-5 gap-4">
            <div class="col-span-4  p-8 flex items-center h-28 mb-4 rounded bg-e73002 dark:bg-gray-800">
                <h1 class=" text-2xl font-normal leading-none tracking-tight text-white  dark:text-white">Selamat datang, <br/> <span class="text-4xl font-extrabold text-white dark:text-blue-500">Aslam Thariq</span></h1>
            </div>
            <div class="flex items-center justify-center rounded h-28 dark:bg-gray-800 gap-4">
                <svg class="w-10 h-10 text-abu-abu dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M3 5.983C3 4.888 3.895 4 5 4h14c1.105 0 2 .888 2 1.983v8.923a1.992 1.992 0 0 1-2 1.983h-6.6l-2.867 2.7c-.955.899-2.533.228-2.533-1.08v-1.62H5c-1.105 0-2-.888-2-1.983V5.983Zm5.706 3.809a1 1 0 1 0-1.412 1.417 1 1 0 1 0 1.412-1.417Zm2.585.002a1 1 0 1 1 .003 1.414 1 1 0 0 1-.003-1.414Zm5.415-.002a1 1 0 1 0-1.412 1.417 1 1 0 1 0 1.412-1.417Z" clip-rule="evenodd"/>
                </svg>
                <svg class="w-10 h-10 text-abu-abu dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.133 12.632v-1.8a5.407 5.407 0 0 0-4.154-5.262.955.955 0 0 0 .021-.106V3.1a1 1 0 0 0-2 0v2.364a.933.933 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C6.867 15.018 5 15.614 5 16.807 5 17.4 5 18 5.538 18h12.924C19 18 19 17.4 19 16.807c0-1.193-1.867-1.789-1.867-4.175Zm-13.267-.8a1 1 0 0 1-1-1 9.424 9.424 0 0 1 2.517-6.391A1.001 1.001 0 1 1 6.854 5.8a7.43 7.43 0 0 0-1.988 5.037 1 1 0 0 1-1 .995Zm16.268 0a1 1 0 0 1-1-1A7.431 7.431 0 0 0 17.146 5.8a1 1 0 0 1 1.471-1.354 9.424 9.424 0 0 1 2.517 6.391 1 1 0 0 1-1 .995ZM8.823 19a3.453 3.453 0 0 0 6.354 0H8.823Z"/>
                </svg>
            </div>
        </div>

       <div class="grid text-right">
         <p class="text-xl text-gray-400 dark:text-gray-500">
            Overview
         </p>
       </div>
       <div class="grid grid-cols-2 p-4 gap-4 items-center justify-center mb-4 rounded bg-white shadow-md dark:bg-gray-800">
         <div class="flex items-center p-4 rounded bg-fd7d09 h-20 dark:bg-gray-800">
            <h1 class=" text-lg font-medium leading-none tracking-tight text-white  dark:text-white">Total Job Post <br/> <span class="text-2xl font-extrabold text-white dark:text-blue-500">20</span></h1>
         </div>
         <div class="flex items-center p-4 rounded bg-fd1d02 h-20 dark:bg-gray-800">
            <h1 class=" text-lg font-medium leading-none tracking-tight text-white  dark:text-white">Total Pendaftar <br/> <span class="text-2xl font-extrabold text-white dark:text-blue-500">236</span></h1>
         </div>
       </div>

       
       <div class="grid grid-cols-2 p-4 gap-4 items-center justify-center rounded bg-white drop-shadow-md dark:bg-gray-800">
         <div id="pie-chart" class="items-center p-4 justify-center rounded bg-white drop-shadow-md dark:bg-gray-800">
            <p class="text-sm font-bold text-right mb-2 text-black dark:text-gray-500">
                Respon Kandidat
             </p>
            @include('components.pieChart') 
         </div>
         <div class=" items-center p-4 justify-center rounded bg-white drop-shadow-md dark:bg-gray-800">
            <p class="text-sm font-bold text-right mb-2 text-black dark:text-gray-500">
               Recent Job Post
            </p>
            <table class="mb-4  w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
               <tbody>
                  <tr class="bg-white divide-y">
                     <th scope="row" class="flex  items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <circle cx="8" cy="8" r="8" fill="#E73002"/>
                           <path d="M7 4C8.5621 5.5621 9.4379 6.4379 11 8L7 12" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <div class="ps-3">
                            <div class="text-base font-bold">Marketing Manager</div>
                            <div class="font-semibold text-gray-500">PT. Alibaba Sejahtera</div>
                            <div class="font-normal text-gray-500">Jakarta Pusat, Indonesia</div>
                        </div>  
                    </th>
                     <th scope="row" class="flex  items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <circle cx="8" cy="8" r="8" fill="#E73002"/>
                           <path d="M7 4C8.5621 5.5621 9.4379 6.4379 11 8L7 12" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <div class="ps-3">
                            <div class="text-base font-bold">Marketing Manager</div>
                            <div class="font-semibold text-gray-500">PT. Alibaba Sejahtera</div>
                            <div class="font-normal text-gray-500">Jakarta Pusat, Indonesia</div>
                        </div>  
                    </th>
                     <th scope="row" class="flex  items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <circle cx="8" cy="8" r="8" fill="#E73002"/>
                           <path d="M7 4C8.5621 5.5621 9.4379 6.4379 11 8L7 12" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <div class="ps-3">
                            <div class="text-base font-bold">Marketing Manager</div>
                            <div class="font-semibold text-gray-500">PT. Alibaba Sejahtera</div>
                            <div class="font-normal text-gray-500">Jakarta Pusat, Indonesia</div>
                        </div>  
                    </th>
                  </tr>
               </tbody>
           </table>
           <p class="text-xs font-medium text-right mb-2 text-abu-abu dark:text-gray-500">
            See All
         </p>
         </div>
       </div>

      
    </div>
 </div>
 
    

</li>
    </ol>

</body>
