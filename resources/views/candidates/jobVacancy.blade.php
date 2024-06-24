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
        <div class="p-4  rounded-lg dark:border-gray-700">
            <div class="relative overflow-x-auto rounded-lg mb-4">

                <div class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 p-4 bg-gradient-to-r from-negative to-negative-hover rounded-lg">
                    <div>
                        <p class="mb-2 text-sm font-bold text-white">
                            Active jobs opening:
                        </p>
                        <div class="relative flex gap-2 items-center">
                            <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                            </div>
                            <input type="text" id="table-search-users" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-negative focus:border-negative"  placeholder="Search job title">
                            
                            <div class="relative">
                                <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 font-medium rounded-lg text-sm px-3 py-2 " type="button">
                                    <span class="sr-only">Role Category</span>
                                    Role Category
                                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                    </svg>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdownAction" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownActionButton">
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Reward</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Promote</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Activate account</a>
                                        </li>
                                    </ul>
                                    <div class="py-1">
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete User</a>
                                    </div>
                                </div>
                            </div>
                    
                           
                        </div>
                    </div>
                </div>
                
               

                <div class="md:flex mt-4">
                    <ul class="flex-column space-y space-y-4 text-sm font-medium text-gray-500 dark:text-gray-400 md:me-4 mb-4 md:mb-0">
                        <li>
                            <a href="#" class="inline-flex p-2 bg-slate-100 text-white rounded-lg active w-80 items-center justify-center" aria-current="page">
                                <div>
                                    <div class="flex">
                                        <img class="w-16 h-16 border rounded-lg" src="{{ url('images/logoJobMatch.png') }}" alt="Jese image">
                                        {{-- Keterangan --}}
                                        <div class="ps-3">
                                            <div class="text-base items-center flex gap-4 font-bold text-gray-800">
                                                <span class="text-xs text-gray-500"> Marketing Koordinator</span>
                                                <span class="inline-flex items-center bg-negative text-white text-xs font-medium px-2.5 py-0.5 rounded-full">
                                                    Remote
                                                </span>
                                            </div>
                                            <div class="flex gap-2 my-1">
                                                <div class="flex items-center">
                                                    <span class="text-xs text-gray-400">Job Match Indonesia</span>
                                                </div>
                                            </div>
                                            <div class="flex gap-2">
                                                <div class="flex items-center">
                                                    <svg class="w-4 h-4 text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                        <path fill-rule="evenodd" d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z" clip-rule="evenodd"/>
                                                    </svg>
                                                    <span class="text-xs text-gray-400">Semarang, Indonesia</span>
                                                </div>
                                                <div class="flex items-center gap-1">
                                                    <svg class="w-4 h-4 text-gray-400 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                                                    </svg>
                                                    <span class="text-xs text-gray-400">Negoitable</span>
                                                </div>
                                            </div>
                                        </div>  
                                    </div>
                                    
                                    
                                    <div class="grid grid-cols-2 mt-2 gap-4 items-center justify-center rounded ">
                                        <div class="flex items-center p-2 rounded bg-fd7d09 dark:bg-gray-800">
                                           <h1 class=" text-xs font-medium leading-none tracking-tight text-white  dark:text-white">Posisi dibuka<br/> <span class="text-sm font-extrabold text-white dark:text-blue-500">20</span></h1>
                                        </div>
                                        <div class="flex items-center p-2 rounded bg-fd1d02 dark:bg-gray-800">
                                           <h1 class=" text-xs font-medium leading-none tracking-tight text-white  dark:text-white">Total Pendaftar<br/> <span class="text-sm font-extrabold text-white dark:text-blue-500">236</span></h1>
                                        </div>
                                     </div>
                                </div>
                            </a>
                        </li>
                        
                        
                    </ul>
                    <div class="p-6 bg-slate-100 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full">
                        
                        <div class="relative rounded-lg " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between  border-b ">
                                <div class="flex pb-3">
                                    <img class="w-20 h-20 border rounded-lg" src="{{ url('images/logoJobMatch.png') }}" alt="Jese image">
                                    <div class="ps-3">
                                        
                                        <div class="text-base items-center flex gap-4 font-bold text-gray-800">
                                            <span class="text-lg text-gray-500"> Marketing Koordinator</span>
                                            <span class="inline-flex items-center bg-negative text-white text-xs font-medium px-2.5 py-0.5 rounded-full">
                                                Remote
                                            </span>
                                        </div>
                                        <div class="text-xs font-semibold text-gray-500">Job Match Indonesia</div>
                                        <div class="flex gap-2 mt-2">
                                            <div class="flex items-center">
                                                <svg class="w-4 h-4 text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd" d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z" clip-rule="evenodd"/>
                                                </svg>
                                                <span class="text-xs text-gray-400">Jalan Pahlawan, Semarang, Indonesia</span>
                                            </div>
                                            <div class="flex items-center gap-1">
                                                <svg class="w-4 h-4 text-gray-400 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" className="size-6">
                                                    <path d="M21.721 12.752a9.711 9.711 0 0 0-.945-5.003 12.754 12.754 0 0 1-4.339 2.708 18.991 18.991 0 0 1-.214 4.772 17.165 17.165 0 0 0 5.498-2.477ZM14.634 15.55a17.324 17.324 0 0 0 .332-4.647c-.952.227-1.945.347-2.966.347-1.021 0-2.014-.12-2.966-.347a17.515 17.515 0 0 0 .332 4.647 17.385 17.385 0 0 0 5.268 0ZM9.772 17.119a18.963 18.963 0 0 0 4.456 0A17.182 17.182 0 0 1 12 21.724a17.18 17.18 0 0 1-2.228-4.605ZM7.777 15.23a18.87 18.87 0 0 1-.214-4.774 12.753 12.753 0 0 1-4.34-2.708 9.711 9.711 0 0 0-.944 5.004 17.165 17.165 0 0 0 5.498 2.477ZM21.356 14.752a9.765 9.765 0 0 1-7.478 6.817 18.64 18.64 0 0 0 1.988-4.718 18.627 18.627 0 0 0 5.49-2.098ZM2.644 14.752c1.682.971 3.53 1.688 5.49 2.099a18.64 18.64 0 0 0 1.988 4.718 9.765 9.765 0 0 1-7.478-6.816ZM13.878 2.43a9.755 9.755 0 0 1 6.116 3.986 11.267 11.267 0 0 1-3.746 2.504 18.63 18.63 0 0 0-2.37-6.49ZM12 2.276a17.152 17.152 0 0 1 2.805 7.121c-.897.23-1.837.353-2.805.353-.968 0-1.908-.122-2.805-.353A17.151 17.151 0 0 1 12 2.276ZM10.122 2.43a18.629 18.629 0 0 0-2.37 6.49 11.266 11.266 0 0 1-3.746-2.504 9.754 9.754 0 0 1 6.116-3.985Z" />
                                                  </svg>
                                                  
                                                <span class="text-xs text-gray-400">jobmatch.id</span>
                                            </div>
                                        </div>
                                    </div> 
                                    
                                </div>
                                <button type="button" class="text-white bg-negative hover:bg-negative-hover border font-medium rounded-lg text-sm p-1 text-center inline-flex items-center">
                                    <span class="text-sm font-semibold text-white">Easy Apply</span>
                                </button>
                            </div>
                                <div class="grid grid-cols-2 gap-4 my-2">
                                    
                                    <div class="flex items-center rounded-lg p-2">
                                          <div class="w-8 h-8 text-white font-medium rounded-lg text-sm p-1 text-center inline-flex items-center me-2 ">
                                              <svg class="w-8 h-8 text-e73002" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" className="size-6">
                                                <path d="M12.75 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM7.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM8.25 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM9.75 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM10.5 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM12.75 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM14.25 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 13.5a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" />
                                                <path fillRule="evenodd" d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z" clipRule="evenodd" />
                                              </svg>
                                            <span class="sr-only">Deadline Pendaftaran</span>
                                        </div>
                                        <div>
                                            <p class="text-sm font-bold text-gray-500">Deadline Pendaftaran</p>
                                            <p class="text-xs font-semibold text-gray-500">30 September 2024</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center rounded-lg p-2">
                                          <div class="w-8 h-8 text-white font-medium rounded-lg text-sm p-1 text-center inline-flex items-center me-2 ">
                                             
                                              <svg class="w-8 h-8 text-e73002" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
                                              </svg>
                                              
                                              
                                            <span class="sr-only">Sistem Kerja</span>
                                        </div>
                                        <div>
                                            <p class="text-sm font-bold text-gray-500">Sistem Kerja</p>
                                            <p class="text-xs font-semibold text-gray-500">WFO</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center rounded-lg p-2">
                                          <div class="w-8 h-8 text-white font-medium rounded-lg text-sm p-1 text-center inline-flex items-center me-2 ">
                                              <svg class="w-8 h-8 text-e73002" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                                              </svg>
                                              
                                              
                                            <span class="sr-only">Jumlah posisi</span>
                                        </div>
                                        <div>
                                            <p class="text-sm font-bold text-gray-500">Jumlah posisi</p>
                                            <p class="text-xs font-semibold text-gray-500">5</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center rounded-lg p-2">
                                          <div class="w-8 h-8 text-white font-medium rounded-lg text-sm p-1 text-center inline-flex items-center me-2 ">
                                         
                                              <svg class="w-8 h-8 text-e73002" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                              </svg>
                                              
                                              
                                              
                                            <span class="sr-only">Jumlah posisi</span>
                                        </div>
                                        <div>
                                            <p class="text-sm font-bold text-gray-500">Jam kerja</p>
                                            <p class="text-xs font-semibold text-gray-500">Part Time</p>
                                        </div>
                                    </div>
                                   
                                    
                                </div>
                              <div class=" justify-start items-start">
                                
                                    <p class="text-sm font-bold text-gray-500 dark:text-gray-400">
                                    Job Description:
                                    </p>
                                    <p class="text-sm text-gray-500"> <span>Job Match is Indonesia's largest job portal mentoring platform. We help people
                                        easily find jobs to top Indonesian companies for internship and full-time roles.</span><br />
                                    <span>As you might have already heard about us, we are revolutionizing how Indonesian engage
                                        with employers. Many Indonesian students are talented, ambitious, but never found a
                                        better opportunity for themselves. Our team is driven by the vision to democratize
                                        information and knowledge, thus opportunities. We think what we build will allow
                                        Indonesian students to have a chance to self develop and have a better future... </span>Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
        
                                </div>
                              <div class=" justify-start items-start mt-2">
                                
                                    <p class="text-sm font-bold text-gray-500 dark:text-gray-400">
                                        Requirements ::
                                    </p>
                                    <p class="text-sm text-gray-500"> <span>Job Match is Indonesia's largest job portal mentoring platform. We help people
                                        easily find jobs to top Indonesian companies for internship and full-time roles.</span><br />
                                    <span>As you might have already heard about us, we are revolutionizing how Indonesian engage
                                        with employers. Many Indonesian students are talented, ambitious, but never found a
                                        better opportunity for themselves. Our team is driven by the vision to democratize
                                        information and knowledge, thus opportunities. We think what we build will allow
                                        Indonesian students to have a chance to self develop and have a better future... </span>Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
        
                                </div>
                                <div class="justify-start items-start my-2">
                                    <p class="mb-2 text-sm font-bold text-gray-500">
                                      Benefits:
                                    </p>
                                    <div class="grid grid-cols-3 md:grid-cols-4 gap-4">
                                        
                                        <div class="flex items-center border rounded-lg p-2">
                                              <div class="w-8 h-8 text-white bg-white border font-medium rounded-lg text-sm p-1 text-center inline-flex items-center me-2 ">
                                                  <svg class="w-8 h-8 text-e73002"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                                                  </svg>
                                                  
                                                <span class="sr-only">Website</span>
                                                </div>
                                              <p class="text-sm font-semibold text-gray-500">Competitive Salary</p>
                                        </div>
                                        <div class="flex items-center border rounded-lg p-2">
                                              <div class="w-8 h-8 text-white bg-white border font-medium rounded-lg text-sm p-1 text-center inline-flex items-center me-2 ">
                                                  <svg class="w-8 h-8 text-e73002" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 0 1-1.161.886l-.143.048a1.107 1.107 0 0 0-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 0 1-1.652.928l-.679-.906a1.125 1.125 0 0 0-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 0 0-8.862 12.872M12.75 3.031a9 9 0 0 1 6.69 14.036m0 0-.177-.529A2.25 2.25 0 0 0 17.128 15H16.5l-.324-.324a1.453 1.453 0 0 0-2.328.377l-.036.073a1.586 1.586 0 0 1-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 0 1-5.276 3.67m0 0a9 9 0 0 1-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
                                                  </svg>
                                                  
                                                <span class="sr-only">Website</span>
                                                </div>
                                              <p class="text-sm font-semibold text-gray-500">International Exposure</p>
                                        </div>
                                        <div class="flex items-center border rounded-lg p-2">
                                              <div class="w-8 h-8 text-white bg-white border font-medium rounded-lg text-sm p-1 text-center inline-flex items-center me-2 ">
                                                <svg class="w-8 h-8 text-e73002" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m0-10.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.75c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.57-.598-3.75h-.152c-3.196 0-6.1-1.25-8.25-3.286Zm0 13.036h.008v.008H12v-.008Z" />
                                                  </svg>
                                                <span class="sr-only">Website</span>
                                                </div>
                                              <p class="text-sm font-semibold text-gray-500">BPJS</p>
                                        </div>
                                        <div class="flex items-center border rounded-lg p-2">
                                              <div class="w-8 h-8 text-white bg-white border font-medium rounded-lg text-sm p-1 text-center inline-flex items-center me-2 ">
                                                  <svg class="w-8 h-8 text-e73002" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 1 0 9.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1 1 14.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                                  </svg>
                                                  
                                                <span class="sr-only">Website</span>
                                                </div>
                                              <p class="text-sm font-semibold text-gray-500">THR / Binus System </p>
                                        </div>
                                        
                                    </div>
                                  </div>
        
                              
        
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
    
</body>
</html>