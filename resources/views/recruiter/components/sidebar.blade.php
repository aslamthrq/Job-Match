<button data-drawer-target="separator-sidebar" data-drawer-toggle="separator-sidebar" aria-controls="separator-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
</button>
 
<aside id="separator-sidebar" class="fixed bg-white top-0 left-0 z-40 w-80 h-screen transition-transform -translate-x-full sm:translate-x-0 shadow-lg" aria-label="Sidebar">
   <div class="h-full px-8 py-4 overflow-y-auto dark:bg-gray-800 shadow-md">
      <ul class="space-y-2 font-medium mb-10">
         <div class="flex items-center justify-center p-2 ">
            <img src="images/jobMatch.svg" class="h-12 w-36 me-3 mt-4 object-cover" alt="Job Match Logo" />
         </div>
      </ul>
      <ul class="space-y-2 font-medium">
         <li>
            <a href="/dashboard" class="{{ (Route::is('dashboard'))? 'bg-e73002' : '' }} flex items-center p-3 m-4 rounded-lg hover:bg-e73002 group">
               <svg class="{{ (Route::is('dashboard'))? 'text-white' : '' }} flex-shrink-0 w-5 h-5 text-abu-abu transition duration-75 dark:text-gray-400 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                  <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
               </svg>
               <span class="{{ (Route::is('dashboard'))? 'text-white' : '' }} ms-3 font-poppins font-semibold text-abu-abu group-hover:text-white text-lg">Dashboard</span>
            </a>
         </li>
         <li>
            <a href="/postroom" class="{{ (Route::is('postroom'))? 'bg-e73002' : '' }} flex items-center p-3 m-4 rounded-lg dark:text-white hover:bg-e73002 dark:hover:bg-gray-700 group">
               <svg class="{{ (Route::is('postroom'))? 'text-white' : '' }} flex-shrink-0 w-6 h-6 text-abu-abu transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M6 5a2 2 0 0 1 2-2h4.157a2 2 0 0 1 1.656.879L15.249 6H19a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2v-5a3 3 0 0 0-3-3h-3.22l-1.14-1.682A3 3 0 0 0 9.157 6H6V5Z" clip-rule="evenodd"/>
                  <path fill-rule="evenodd" d="M3 9a2 2 0 0 1 2-2h4.157a2 2 0 0 1 1.656.879L12.249 10H3V9Zm0 3v7a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2v-7H3Z" clip-rule="evenodd"/>
               </svg>                  
               <span class="{{ (Route::is('postroom'))? 'text-white' : '' }} ms-3 font-poppins font-semibold text-abu-abu group-hover:text-white text-lg"> Aplication</span>
            </a>
         </li>
         <li>
            <a href="/kandidat" class="{{ (Route::is('kandidat'))? 'bg-e73002' : '' }} flex items-center p-3 m-4 rounded-lg dark:text-white hover:bg-e73002 dark:hover:bg-gray-700 group">
               
               <svg class="{{ (Route::is('kandidat'))? 'text-white' : '' }} flex-shrink-0 w-6 h-6 text-abu-abu transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z" clip-rule="evenodd"/>
               </svg>
                                  
               <span class="{{ (Route::is('kandidat'))? 'text-white' : '' }} ms-3 font-poppins font-semibold text-abu-abu group-hover:text-white text-lg">Talent Pool</span>
            </a>
         </li>
      </ul>
      <ul class="pt-4 mt-4 space-y-2 font-medium border-t border-gray-200 dark:border-gray-700">
         <li>
            <a href="/companyProfile" class="{{ (Route::is('companyProfile'))? 'bg-e73002' : '' }} flex items-center p-3 m-4 rounded-lg dark:text-white hover:bg-e73002 dark:hover:bg-gray-700 group">
                  <svg class="{{ (Route::is('companyProfile'))? 'text-white' : '' }} flex-shrink-0 w-6 h-6 text-abu-abu transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M12 20a7.966 7.966 0 0 1-5.002-1.756l.002.001v-.683c0-1.794 1.492-3.25 3.333-3.25h3.334c1.84 0 3.333 1.456 3.333 3.25v.683A7.966 7.966 0 0 1 12 20ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10c0 5.5-4.44 9.963-9.932 10h-.138C6.438 21.962 2 17.5 2 12Zm10-5c-1.84 0-3.333 1.455-3.333 3.25S10.159 13.5 12 13.5c1.84 0 3.333-1.455 3.333-3.25S13.841 7 12 7Z" clip-rule="evenodd"/>
                  </svg>      
               <span class="{{ (Route::is('companyProfile'))? 'text-white' : '' }} ms-3 font-poppins font-semibold text-abu-abu group-hover:text-white text-lg">My Profile</span>
            </a>
         </li>
         {{-- <li>
            <a href="/companyProfileSettings" class="{{ (Route::is('companyProfileSettings'))? 'bg-e73002' : '' }} flex items-center p-3 m-4 rounded-lg dark:text-white hover:bg-e73002 dark:hover:bg-gray-700 group"> 
                  <svg class="{{ (Route::is('companyProfileSettings'))? 'text-white' : '' }} flex-shrink-0 w-6 h-6 text-abu-abu transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                     <path fill-rule="evenodd" d="M17 10v1.126c.367.095.714.24 1.032.428l.796-.797 1.415 1.415-.797.796c.188.318.333.665.428 1.032H21v2h-1.126c-.095.367-.24.714-.428 1.032l.797.796-1.415 1.415-.796-.797a3.979 3.979 0 0 1-1.032.428V20h-2v-1.126a3.977 3.977 0 0 1-1.032-.428l-.796.797-1.415-1.415.797-.796A3.975 3.975 0 0 1 12.126 16H11v-2h1.126c.095-.367.24-.714.428-1.032l-.797-.796 1.415-1.415.796.797A3.977 3.977 0 0 1 15 11.126V10h2Zm.406 3.578.016.016c.354.358.574.85.578 1.392v.028a2 2 0 0 1-3.409 1.406l-.01-.012a2 2 0 0 1 2.826-2.83ZM5 8a4 4 0 1 1 7.938.703 7.029 7.029 0 0 0-3.235 3.235A4 4 0 0 1 5 8Zm4.29 5H7a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h6.101A6.979 6.979 0 0 1 9 15c0-.695.101-1.366.29-2Z" clip-rule="evenodd"/>
                  </svg>   
               <span class="{{ (Route::is('companyProfileSettings'))? 'text-white' : '' }} ms-3 font-poppins font-semibold text-abu-abu group-hover:text-white text-lg">Profile Settings</span>
            </a>
         </li> --}}
      </ul>
      <ul class="pt-4 mt-4 space-y-2 font-medium border-t border-gray-200 dark:border-gray-700">
         <li>
            <a href="#" class="flex items-center p-3 m-4 rounded-lg dark:text-white hover:bg-e73002 dark:hover:bg-gray-700 group"> 
                  <svg class="flex-shrink-0 w-6 h-6 text-abu-abu transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2"/>
                  </svg>  
               <span class="ms-3 font-poppins font-semibold text-abu-abu group-hover:text-white text-lg">Sign Out</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-3 m-4 rounded-lg dark:text-white hover:bg-e73002 dark:hover:bg-gray-700 group">  
                  <svg class="flex-shrink-0 w-6 h-6 text-abu-abu transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                     <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.008-3.018a1.502 1.502 0 0 1 2.522 1.159v.024a1.44 1.44 0 0 1-1.493 1.418 1 1 0 0 0-1.037.999V14a1 1 0 1 0 2 0v-.539a3.44 3.44 0 0 0 2.529-3.256 3.502 3.502 0 0 0-7-.255 1 1 0 0 0 2 .076c.014-.398.187-.774.48-1.044Zm.982 7.026a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2h-.01Z" clip-rule="evenodd"/>
                  </svg>
               <span class="ms-3 font-poppins font-semibold text-abu-abu group-hover:text-white text-lg">Help & Support</span>
            </a>
         </li>
      </ul>
   </div>
</aside>