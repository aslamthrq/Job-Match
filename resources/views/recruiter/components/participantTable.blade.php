<div class="relative p-1 overflow-x-auto">
    <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
        <div>
            <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
              
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M18.458 3.11A1 1 0 0 1 19 4v16a1 1 0 0 1-1.581.814L12 16.944V7.056l5.419-3.87a1 1 0 0 1 1.039-.076ZM22 12c0 1.48-.804 2.773-2 3.465v-6.93c1.196.692 2 1.984 2 3.465ZM10 8H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6V8Zm0 9H5v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3Z" clip-rule="evenodd"/>
                      </svg>
                      
                Status
                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
            </button>
            <!-- Dropdown menu -->
            <div id="dropdownRadio" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);">
                <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownRadioButton">
                    <li>
                        <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                            <input id="filter-radio-example-1" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="filter-radio-example-1" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Sedang Proses</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                            <input checked="" id="filter-radio-example-2" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="filter-radio-example-2" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Diterima</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                            <input id="filter-radio-example-3" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="filter-radio-example-3" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Ditolak</label>
                        </div>
                    </li>
                    
                </ul>
            </div>
        </div>
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </div>
            <input type="text" id="table-search" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari Kandidat">
        </div>
    </div>

    <table class="mb-4 w-full text-sm text-left text-gray-500 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 ">
            <tr>
                <th scope="col" class="p-4">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Nama
                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
    </svg></a>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    Waktu
                </th>
                <th scope="col" class="px-6 py-3">
                    Lokasi
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <th scope="col" class="px-6 py-3">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            @php
            $no=1;
            @endphp
            {{-- @foreach ($users as $index => $user) --}}
                    <tr class="bg-white   hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="whitespace-nowrap w-4 p-4">
                            1
                        </td>
                        <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap ">
                            <img class="w-10 h-10 object-cover rounded-full" src="https://media.licdn.com/dms/image/D5603AQHC4IFjmiQi1Q/profile-displayphoto-shrink_400_400/0/1680830096821?e=1721260800&v=beta&t=djkevYMcgIYM7wYZJxQ1Xrp7N6e5KE8IqNhd0PCIi6A" alt="">
                            <div class="ps-3">
                                <div class="text-base font-semibold">Aslam Thariq</div>
                                <div class="font-normal text-gray-500">aslamthariq01@gmail.com</div>
                            </div>  
                        </th>
                        <td class="whitespace-nowrap px-6 py-4">
                            30.06.2024
                        </td>
                    
                        <td class="whitespace-nowrap px-6 py-4">
                            Semarang
                        </td>
                        <td class="whitespace-nowrap px-6 py-4">
                            {{-- @if ($user->status == 'Aktif') --}}
                            <span class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                                <span class="w-2 h-2 me-1 bg-green-500 rounded-full"></span>
                                Diterima
                            </span>
                            {{-- <span class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                                <span class="w-2 h-2 me-1 bg-yellow-400 rounded-full"></span>
                                Progress
                            </span> --}}
                            {{-- @else --}}
                            {{-- <span class="inline-flex items-center bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">
                                <span class="w-2 h-2 me-1 bg-red-500 rounded-full"></span>
                                Ditolak
                            </span> --}}
                            {{-- @endif --}}
                        </td>
                        <td class="whitespace-nowrap px-6 py-4">
                            <button data-modal-target="editUserModal" data-modal-show="editUserModal"  type="button" class=" bg-merah text-merah border border-merah hover:bg-abu-abu hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center ">
                                <svg class="w-5 h-5 text-putih e" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M11.3 6.2H5a2 2 0 0 0-2 2V19a2 2 0 0 0 2 2h11c1.1 0 2-1 2-2.1V11l-4 4.2c-.3.3-.7.6-1.2.7l-2.7.6c-1.7.3-3.3-1.3-3-3.1l.6-2.9c.1-.5.4-1 .7-1.3l3-3.1Z" clip-rule="evenodd"/>
                                    <path fill-rule="evenodd" d="M19.8 4.3a2.1 2.1 0 0 0-1-1.1 2 2 0 0 0-2.2.4l-.6.6 2.9 3 .5-.6a2.1 2.1 0 0 0 .6-1.5c0-.2 0-.5-.2-.8Zm-2.4 4.4-2.8-3-4.8 5-.1.3-.7 3c0 .3.3.7.6.6l2.7-.6.3-.1 4.7-5Z" clip-rule="evenodd"/>
                                </svg>                                
                                <span class="sr-only">Edit User</span>
                            </button>
                            <button data-modal-target="deleteModal" data-modal-show="deleteModal" type="button" class=" bg-merah text-merah border border-merah hover:bg-abu-abu hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2">
                                <svg class="w-5 h-5 text-putih " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                                </svg>
                                <span class="sr-only">Delete User</span>
                            </button>
                        </td>
                    </tr>
                    <tr class="bg-white   hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="whitespace-nowrap w-4 p-4">
                            2
                        </td>
                        <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap ">
                            <img class="w-10 h-10 object-cover rounded-full" src="https://media.licdn.com/dms/image/D5603AQHC4IFjmiQi1Q/profile-displayphoto-shrink_400_400/0/1680830096821?e=1721260800&v=beta&t=djkevYMcgIYM7wYZJxQ1Xrp7N6e5KE8IqNhd0PCIi6A" alt="">
                            <div class="ps-3">
                                <div class="text-base font-semibold">Aslam Thariq</div>
                                <div class="font-normal text-gray-500">aslamthariq01@gmail.com</div>
                            </div>  
                        </th>
                        <td class="whitespace-nowrap px-6 py-4">
                            30.06.2024
                        </td>
                    
                        <td class="whitespace-nowrap px-6 py-4">
                            Semarang
                        </td>
                        <td class="whitespace-nowrap px-6 py-4">
                            {{-- @if ($user->status == 'Aktif') --}}
                            {{-- <span class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                                <span class="w-2 h-2 me-1 bg-green-500 rounded-full"></span>
                                Diterima
                            </span> --}}
                            <span class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                                <span class="w-2 h-2 me-1 bg-yellow-400 rounded-full"></span>
                                Progress
                            </span>
                            {{-- @else
                            <span class="inline-flex items-center bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">
                                <span class="w-2 h-2 me-1 bg-red-500 rounded-full"></span>
                                Ditolak
                            </span>
                            {{-- @endif --}}
                        </td>
                        <td class="whitespace-nowrap px-6 py-4">
                            <button data-modal-target="editUserModal" data-modal-show="editUserModal"  type="button" class=" bg-merah text-merah border border-merah hover:bg-abu-abu hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center ">
                                <svg class="w-5 h-5 text-putih e" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M11.3 6.2H5a2 2 0 0 0-2 2V19a2 2 0 0 0 2 2h11c1.1 0 2-1 2-2.1V11l-4 4.2c-.3.3-.7.6-1.2.7l-2.7.6c-1.7.3-3.3-1.3-3-3.1l.6-2.9c.1-.5.4-1 .7-1.3l3-3.1Z" clip-rule="evenodd"/>
                                    <path fill-rule="evenodd" d="M19.8 4.3a2.1 2.1 0 0 0-1-1.1 2 2 0 0 0-2.2.4l-.6.6 2.9 3 .5-.6a2.1 2.1 0 0 0 .6-1.5c0-.2 0-.5-.2-.8Zm-2.4 4.4-2.8-3-4.8 5-.1.3-.7 3c0 .3.3.7.6.6l2.7-.6.3-.1 4.7-5Z" clip-rule="evenodd"/>
                                </svg>                                
                                <span class="sr-only">Edit User</span>
                            </button>
                            <button data-modal-target="deleteModal" data-modal-show="deleteModal" type="button" class=" bg-merah text-merah border border-merah hover:bg-abu-abu hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2">
                                <svg class="w-5 h-5 text-putih " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                                </svg>
                                <span class="sr-only">Delete User</span>
                            </button>
                        </td>
                    </tr>
                    <tr class="bg-white   hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="whitespace-nowrap w-4 p-4">
                            3
                        </td>
                        <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap ">
                            <img class="w-10 h-10 object-cover rounded-full" src="https://media.licdn.com/dms/image/D5603AQHC4IFjmiQi1Q/profile-displayphoto-shrink_400_400/0/1680830096821?e=1721260800&v=beta&t=djkevYMcgIYM7wYZJxQ1Xrp7N6e5KE8IqNhd0PCIi6A" alt="">
                            <div class="ps-3">
                                <div class="text-base font-semibold">Aslam Thariq</div>
                                <div class="font-normal text-gray-500">aslamthariq01@gmail.com</div>
                            </div>  
                        </th>
                        <td class="whitespace-nowrap px-6 py-4">
                            30.06.2024
                        </td>
                    
                        <td class="whitespace-nowrap px-6 py-4">
                            Semarang
                        </td>
                        <td class="whitespace-nowrap px-6 py-4">
                            {{-- @if ($user->status == 'Aktif') --}}
                            {{-- <span class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                                <span class="w-2 h-2 me-1 bg-green-500 rounded-full"></span>
                                Diterima
                            </span>
                            <span class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                                <span class="w-2 h-2 me-1 bg-yellow-400 rounded-full"></span>
                                Progress
                            </span> --}}
                            {{-- @else --}}
                            <span class="inline-flex items-center bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">
                                <span class="w-2 h-2 me-1 bg-red-500 rounded-full"></span>
                                Ditolak
                            </span>
                            {{-- @endif --}}
                        </td>
                        <td class="whitespace-nowrap px-6 py-4">
                            <button data-modal-target="editUserModal" data-modal-show="editUserModal"  type="button" class=" bg-merah text-merah border border-merah hover:bg-abu-abu hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center ">
                                <svg class="w-5 h-5 text-putih e" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M11.3 6.2H5a2 2 0 0 0-2 2V19a2 2 0 0 0 2 2h11c1.1 0 2-1 2-2.1V11l-4 4.2c-.3.3-.7.6-1.2.7l-2.7.6c-1.7.3-3.3-1.3-3-3.1l.6-2.9c.1-.5.4-1 .7-1.3l3-3.1Z" clip-rule="evenodd"/>
                                    <path fill-rule="evenodd" d="M19.8 4.3a2.1 2.1 0 0 0-1-1.1 2 2 0 0 0-2.2.4l-.6.6 2.9 3 .5-.6a2.1 2.1 0 0 0 .6-1.5c0-.2 0-.5-.2-.8Zm-2.4 4.4-2.8-3-4.8 5-.1.3-.7 3c0 .3.3.7.6.6l2.7-.6.3-.1 4.7-5Z" clip-rule="evenodd"/>
                                </svg>                                
                                <span class="sr-only">Edit User</span>
                            </button>
                            <button data-modal-target="deleteModal" data-modal-show="deleteModal" type="button" class=" bg-merah text-merah border border-merah hover:bg-abu-abu hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2">
                                <svg class="w-5 h-5 text-putih " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                                </svg>
                                <span class="sr-only">Delete User</span>
                            </button>
                        </td>
                    </tr>
                    <tr class="bg-white   hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="whitespace-nowrap w-4 p-4">
                            4
                        </td>
                        <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap ">
                            <img class="w-10 h-10 object-cover rounded-full" src="https://media.licdn.com/dms/image/D5603AQHC4IFjmiQi1Q/profile-displayphoto-shrink_400_400/0/1680830096821?e=1721260800&v=beta&t=djkevYMcgIYM7wYZJxQ1Xrp7N6e5KE8IqNhd0PCIi6A" alt="">
                            <div class="ps-3">
                                <div class="text-base font-semibold">Aslam Thariq</div>
                                <div class="font-normal text-gray-500">aslamthariq01@gmail.com</div>
                            </div>  
                        </th>
                        <td class="whitespace-nowrap px-6 py-4">
                            30.06.2024
                        </td>
                    
                        <td class="whitespace-nowrap px-6 py-4">
                            Semarang
                        </td>
                        <td class="whitespace-nowrap px-6 py-4">
                            {{-- @if ($user->status == 'Aktif') --}}
                            {{-- <span class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                                <span class="w-2 h-2 me-1 bg-green-500 rounded-full"></span>
                                Diterima
                            </span>
                            <span class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                                <span class="w-2 h-2 me-1 bg-yellow-400 rounded-full"></span>
                                Progress
                            </span> --}}
                            {{-- @else --}}
                            <span class="inline-flex items-center bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">
                                <span class="w-2 h-2 me-1 bg-red-500 rounded-full"></span>
                                Ditolak
                            </span>
                            {{-- @endif --}}
                        </td>
                        <td class="whitespace-nowrap px-6 py-4">
                            <button data-modal-target="editUserModal" data-modal-show="editUserModal"  type="button" class=" bg-merah text-merah border border-merah hover:bg-abu-abu hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center ">
                                <svg class="w-5 h-5 text-putih e" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M11.3 6.2H5a2 2 0 0 0-2 2V19a2 2 0 0 0 2 2h11c1.1 0 2-1 2-2.1V11l-4 4.2c-.3.3-.7.6-1.2.7l-2.7.6c-1.7.3-3.3-1.3-3-3.1l.6-2.9c.1-.5.4-1 .7-1.3l3-3.1Z" clip-rule="evenodd"/>
                                    <path fill-rule="evenodd" d="M19.8 4.3a2.1 2.1 0 0 0-1-1.1 2 2 0 0 0-2.2.4l-.6.6 2.9 3 .5-.6a2.1 2.1 0 0 0 .6-1.5c0-.2 0-.5-.2-.8Zm-2.4 4.4-2.8-3-4.8 5-.1.3-.7 3c0 .3.3.7.6.6l2.7-.6.3-.1 4.7-5Z" clip-rule="evenodd"/>
                                </svg>                                
                                <span class="sr-only">Edit User</span>
                            </button>
                            <button data-modal-target="deleteModal" data-modal-show="deleteModal" type="button" class=" bg-merah text-merah border border-merah hover:bg-abu-abu hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2">
                                <svg class="w-5 h-5 text-putih " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                                </svg>
                                <span class="sr-only">Delete User</span>
                            </button>
                        </td>
                    </tr>
                    <tr class="bg-white   hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="whitespace-nowrap w-4 p-4">
                            5
                        </td>
                        <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap ">
                            <img class="w-10 h-10 object-cover rounded-full" src="https://media.licdn.com/dms/image/D5603AQHC4IFjmiQi1Q/profile-displayphoto-shrink_400_400/0/1680830096821?e=1721260800&v=beta&t=djkevYMcgIYM7wYZJxQ1Xrp7N6e5KE8IqNhd0PCIi6A" alt="">
                            <div class="ps-3">
                                <div class="text-base font-semibold">Aslam Thariq</div>
                                <div class="font-normal text-gray-500">aslamthariq01@gmail.com</div>
                            </div>  
                        </th>
                        <td class="whitespace-nowrap px-6 py-4">
                            30.06.2024
                        </td>
                    
                        <td class="whitespace-nowrap px-6 py-4">
                            Semarang
                        </td>
                        <td class="whitespace-nowrap px-6 py-4">
                            {{-- @if ($user->status == 'Aktif') --}}
                            {{-- <span class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                                <span class="w-2 h-2 me-1 bg-green-500 rounded-full"></span>
                                Diterima
                            </span>
                            <span class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                                <span class="w-2 h-2 me-1 bg-yellow-400 rounded-full"></span>
                                Progress
                            </span> --}}
                            {{-- @else --}}
                            <span class="inline-flex items-center bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">
                                <span class="w-2 h-2 me-1 bg-red-500 rounded-full"></span>
                                Ditolak
                            </span>
                            {{-- @endif --}}
                        </td>
                        <td class="whitespace-nowrap px-6 py-4">
                            <button data-modal-target="editUserModal" data-modal-show="editUserModal"  type="button" class=" bg-merah text-merah border border-merah hover:bg-abu-abu hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center ">
                                <svg class="w-5 h-5 text-putih e" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M11.3 6.2H5a2 2 0 0 0-2 2V19a2 2 0 0 0 2 2h11c1.1 0 2-1 2-2.1V11l-4 4.2c-.3.3-.7.6-1.2.7l-2.7.6c-1.7.3-3.3-1.3-3-3.1l.6-2.9c.1-.5.4-1 .7-1.3l3-3.1Z" clip-rule="evenodd"/>
                                    <path fill-rule="evenodd" d="M19.8 4.3a2.1 2.1 0 0 0-1-1.1 2 2 0 0 0-2.2.4l-.6.6 2.9 3 .5-.6a2.1 2.1 0 0 0 .6-1.5c0-.2 0-.5-.2-.8Zm-2.4 4.4-2.8-3-4.8 5-.1.3-.7 3c0 .3.3.7.6.6l2.7-.6.3-.1 4.7-5Z" clip-rule="evenodd"/>
                                </svg>                                
                                <span class="sr-only">Edit User</span>
                            </button>
                            <button data-modal-target="deleteModal" data-modal-show="deleteModal" type="button" class=" bg-merah text-merah border border-merah hover:bg-abu-abu hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2">
                                <svg class="w-5 h-5 text-putih " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                                </svg>
                                <span class="sr-only">Delete User</span>
                            </button>
                        </td>
                    </tr>
                    
            {{-- @endforeach --}}
        </tbody>
        
    </table>
    <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4" aria-label="Table navigation">
        <span class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-4 md:mb-0 block w-full md:inline md:w-auto">Showing <span class="font-semibold text-gray-900 dark:text-white">1-10</span> of <span class="font-semibold text-gray-900 dark:text-white">1000</span></span>
        <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
            <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
            </li>
            <li>
                <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
            </li>
            <li>
        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
            </li>
        </ul>
    </nav>
</div>