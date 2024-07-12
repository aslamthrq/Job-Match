<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="../path/to/flowbite/dist/datepicker.js"></script>
    <link rel="icon" href="{{ url('images/job-match-white.svg') }}">
    <title>Selection Process</title>
</head>

<body>
    @include('recruiter.components.sidebar')
    <div class=" sm:ml-80">
        <div class="p-4 m-4 rounded-lg dark:border-gray-700">
            <nav class="flex mb-4" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-3 h-3 mx-1 text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="text-sm font-medium text-gray-500 ms-1 md:ms-2 dark:text-gray-400">Post Room</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <div class="grid grid-cols-5 gap-4">
                <div class="flex items-center col-span-4 p-8 mb-4 rounded h-28 bg-gradient-to-r from-negative to-negative-hover dark:bg-gray-800">

                    <div>
                        <p class="mb-2 text-sm font-bold text-white">
                            Job portal:
                        </p>
                        <div class="relative flex items-center gap-2">
                            <div class="absolute inset-y-0 flex items-center pointer-events-none rtl:inset-r-0 start-0 ps-3">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="text" id="table-search-users" class="block p-2 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 w-80 bg-gray-50 focus:ring-negative focus:border-negative" placeholder="Search participant">

                            <div class="relative">
                                <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction" class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg focus:outline-none hover:bg-gray-100 " type="button">
                                    <span class="sr-only">Role Category</span>
                                    Role Category
                                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
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
                <div class="flex items-center justify-center gap-4 rounded h-28 dark:bg-gray-800">
                    <svg class="w-10 h-10 text-abu-abu dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M3 5.983C3 4.888 3.895 4 5 4h14c1.105 0 2 .888 2 1.983v8.923a1.992 1.992 0 0 1-2 1.983h-6.6l-2.867 2.7c-.955.899-2.533.228-2.533-1.08v-1.62H5c-1.105 0-2-.888-2-1.983V5.983Zm5.706 3.809a1 1 0 1 0-1.412 1.417 1 1 0 1 0 1.412-1.417Zm2.585.002a1 1 0 1 1 .003 1.414 1 1 0 0 1-.003-1.414Zm5.415-.002a1 1 0 1 0-1.412 1.417 1 1 0 1 0 1.412-1.417Z" clip-rule="evenodd" />
                    </svg>
                    <svg class="w-10 h-10 text-abu-abu dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.133 12.632v-1.8a5.407 5.407 0 0 0-4.154-5.262.955.955 0 0 0 .021-.106V3.1a1 1 0 0 0-2 0v2.364a.933.933 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C6.867 15.018 5 15.614 5 16.807 5 17.4 5 18 5.538 18h12.924C19 18 19 17.4 19 16.807c0-1.193-1.867-1.789-1.867-4.175Zm-13.267-.8a1 1 0 0 1-1-1 9.424 9.424 0 0 1 2.517-6.391A1.001 1.001 0 1 1 6.854 5.8a7.43 7.43 0 0 0-1.988 5.037 1 1 0 0 1-1 .995Zm16.268 0a1 1 0 0 1-1-1A7.431 7.431 0 0 0 17.146 5.8a1 1 0 0 1 1.471-1.354 9.424 9.424 0 0 1 2.517 6.391 1 1 0 0 1-1 .995ZM8.823 19a3.453 3.453 0 0 0 6.354 0H8.823Z" />
                    </svg>
                </div>
            </div>



            {{-- Body konten --}}

            <div class="grid grid-cols-1 gap-4 md:grid-cols-3">

                <div>
                    <div class="flex items-center justify-center w-full">
                        <button data-modal-target="postJob-modal" data-modal-toggle="postJob-modal" class="flex flex-col items-center justify-center w-full border-2 border-gray-300 border-dashed rounded-lg cursor-pointer h-44 bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M9 7V2.221a2 2 0 0 0-.5.365L4.586 6.5a2 2 0 0 0-.365.5H9Zm2 0V2h7a2 2 0 0 1 2 2v6.41A7.5 7.5 0 1 0 10.5 22H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Z" clip-rule="evenodd" />
                                    <path fill-rule="evenodd" d="M9 16a6 6 0 1 1 12 0 6 6 0 0 1-12 0Zm6-3a1 1 0 0 1 1 1v1h1a1 1 0 1 1 0 2h-1v1a1 1 0 1 1-2 0v-1h-1a1 1 0 1 1 0-2h1v-1a1 1 0 0 1 1-1Z" clip-rule="evenodd" />
                                </svg>

                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">Click untuk post <span class="font-semibold">Job</span></p>
                            </div>
                        </button>
                    </div>
                </div>
                @if($rooms->isEmpty())
                <div>
                    <div class="flex items-center justify-center w-full">
                        <div class="flex flex-col items-center justify-center w-full border-2 border-gray-300 border-dashed rounded-lg h-44 bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">Room anda masih <span class="font-semibold">Kosong</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                @else

                @foreach($rooms as $room)
                @include('recruiter.components.cardPortal')
                @endforeach

                @endif

            </div>
        </div>
    </div>







    <!-- Main modal -->
    <div id="postJob-modal" tabindex="-1" aria-hidden="true" class="hidden fixed top-0 right-0 left-0 z-50  justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full h-full max-w-4xl p-4">
            <!-- Modal content -->
            <div class="relative flex flex-col h-full rounded-lg shadow bg-gray-50">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Create Job Portal
                    </h3>
                    <button type="button" class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="postJob-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body Post Room -->
                <form class="flex-grow p-4 overflow-y-auto md:p-5" id="formRoom" method="POST">
                    @csrf
                    <div class="grid grid-cols-4 gap-4 ">

                        <div class="hidden col-span-2">
                            <input type="text" name="company_id" id="company_id" value="{{ auth()->user()->companyUser->company_id }}" required readonly>
                        </div>

                        <div class="col-span-2">
                            <label for="position_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukan posisi lowongan</label>
                            <input type="text" name="position_name" id="position_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan judul" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-2">
                            <label for="departement" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Departemen</label>
                            <input type="text" name="departement" id="departement" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukkan departement" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-2">
                            <label for="years_of_experience_criteria" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kriteria tahun pengalaman</label>
                            <div class="flex flex-wrap mt-4">
                                <div class="flex items-center me-4">
                                    <input id="red-radio" type="radio" value="<1 tahun" name="years_of_experience_criteria" class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="red-radio" class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">
                                        < 1 tahun</label>
                                </div>
                                <div class="flex items-center me-4">
                                    <input id="green-radio" type="radio" value="1 tahun" name="years_of_experience_criteria" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="green-radio" class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">1 Tahun</label>
                                </div>
                                <div class="flex items-center me-4">
                                    <input checked id="purple-radio" type="radio" value="2 tahun" name="years_of_experience_criteria" class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="purple-radio" class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">2 Tahun</label>
                                </div>
                                <div class="flex items-center me-4">
                                    <input id="teal-radio" type="radio" value="3 - 4 tahun" name="years_of_experience_criteria" class="w-4 h-4 text-teal-600 bg-gray-100 border-gray-300 focus:ring-teal-500 dark:focus:ring-teal-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="teal-radio" class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">3 - 4 Tahun</label>
                                </div>
                            </div>

                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="total_open_position" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah posisi dibuka</label>
                            <input type="number" name="total_open_position" id="total_open_position" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="10" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="salary" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gaji</label>
                            <input type="number" name="salary" id="salary" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="2.500.000" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="deadline" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Akhir pendaftaran</label>
                            <div class="relative max-w-sm">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                    </svg>
                                </div>
                                <input datepicker datepicker-autohide datepicker-format="dd-mm-yyyy" type="text" name="deadline" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                            </div>
                        </div>

                        <div class="col-span-2 sm:col-span-1">
                            <label for="work_system" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Work System</label>
                            <select name="work_system" id="work_system" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected value="WFO">WFO</option>
                                <option value="WFH">WFH</option>
                                <option value="Hybrid">Hybrid</option>
                            </select>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="working_hours" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Working Hours</label>
                            <select name="working_hours" id="working_hours" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected value="full time">fulltime</option>
                                <option value="magang">magang</option>
                                <option value="part time">parttime</option>
                            </select>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="access_rights" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hak akses</label>
                            <select name="access_rights" id="access_rights" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected="" value="public">Public</option>
                                <option value="private">Private</option>
                            </select>
                        </div>
                        <div class="col-span-4">
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi pekerjaan</label>
                            <textarea name="description" id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tulis deskripsi dan kualifikasi"></textarea>
                        </div>
                        <div class="col-span-4">
                            <label for="requirements" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Requirements pekerjaan</label>
                            <textarea name="requirements" id="requirements" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tulis deskripsi dan kualifikasi"></textarea>
                        </div>
                    </div>
                </form>
                <!-- Modal footer -->
                <div class="flex items-center p-4 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <div class="flex">
                        <button data-modal-hide="postJob-modal" data-modal-target="timeline-modal" data-modal-show="timeline-modal" {{-- type="submit" form="formRoom" --}} class="flex items-center justify-center h-8 px-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 ">
                            Berikutnya
                            <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                            <span class="sr-only">Berikutnya</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- modal timeline -->
    <div id="timeline-modal" tabindex="-1" aria-hidden="true" class="hidden fixed top-0 right-0 left-0 z-50  justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full h-full max-w-4xl p-4">
            <!-- Modal content -->
            <div class="relative flex flex-col h-full rounded-lg shadow bg-gray-50">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 ">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Create Job Portal
                    </h3>
                    <button type="button" class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="timeline-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="flex-grow p-4 overflow-y-auto md:p-5" id="formSelectionPath" method="POST">
                    @csrf
                    <div id="pathsContainer" class="relative mb-4 md:mb-5">
                        <div id="pathTemplate" tabindex="0" class="p-2 mb-2 bg-white rounded-md shadow-md path-selection focus:outline-none focus-within:border-l-8 focus-within:border-e73002" style="display: none;">
                            <div class="flex flex-wrap gap-4">
                                <div class="z-0 flex items-center justify-center w-10 h-10 mb-5 text-center rounded-md bg-e73002">
                                    <span class="text-base font-bold text-white">1</span>
                                </div>

                                <div class="relative flex-1 min-w-[200px] mb-5 group">
                                    <input type="text" name="pathTittle" id="pathTittle" class="block w-full px-0 py-2 text-base font-bold text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-e73002 peer" placeholder="Masukkan Judul" required />
                                    <label for="pathTittle" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-e73002 peer-focus:dark:e73002 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"></label>
                                </div>
                                <select class="type-selection block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 flex-none min-w-[150px] sm:w-auto">
                                    <option selected>Pilih tipe</option>
                                    <option value="uploudBerkas">Uploud Berkas</option>
                                    <option value="meetInvitation">Meet Invitation</option>
                                    <option value="Challange">Challange</option>
                                </select>
                            </div>
                            <div class="grid grid-cols-5 gap-4 uploud-berkas" style="display: none;">
                                <div class="col-span-5">
                                    <label for="pemberkasan_deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                                    <textarea id="pemberkasan_deskripsi" name="pemberkasan_deskripsi" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan deskripsi seleksi"></textarea>
                                </div>
                                <div class="col-span-2 ">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rentang waktu</label>
                                    <div date-rangepicker class="flex items-center">
                                        <div class="relative">
                                            <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                </svg>
                                            </div>
                                            <input name="pemberkasan_start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Mulai">
                                        </div>
                                        <span class="mx-4 text-gray-500">to</span>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                </svg>
                                            </div>
                                            <input name="pemberkasan_end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Selesai">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-2 col-end-6 ">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="small_size">Lampiran</label>
                                    <input name="lampiran_pemberkasan" class="block w-full mb-5 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="small_size" type="file">
                                </div>
                            </div>
                            <div class="grid grid-cols-5 gap-4 challange-selection" style="display: none;">

                                <div class="col-span-5">
                                    <label for="challange_deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                                    <textarea id="challange_deskripsi" name="challange_deskripsi" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan deskripsi seleksi"></textarea>
                                </div>
                                <div class="col-span-5">
                                    <label for="lampiran_challange" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link lampiran Challange</label>
                                    <input type="text" name="lampiran_challange" id="lampiran_challange" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukkan lokasi atau link online meeting" required="">
                                </div>
                                <div class="col-span-2 ">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rentang waktu</label>
                                    <div date-rangepicker class="flex items-center">
                                        <div class="relative">
                                            <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                </svg>
                                            </div>
                                            <input name="challange_start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Mulai">
                                        </div>
                                        <span class="mx-4 text-gray-500">to</span>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                </svg>
                                            </div>
                                            <input name="challange_end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Selesai">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-2 col-end-6 ">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="small_size">Lampiran</label>
                                    <input name="lampiran_challange" class="block w-full mb-5 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="small_size" type="file">
                                </div>
                            </div>
                            <div class="grid grid-cols-5 gap-4 meet-invitation-selection" style="display: none;">
                                <div class="col-span-5">
                                    <label for="meetInvitation_deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                                    <textarea id="meetInvitation_deskripsi" name="meetInvitation_deskripsi" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan deskripsi seleksi"></textarea>
                                </div>
                                <div class="col-span-5">
                                    <label for="meetInvitation_location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lokasi / Link Meeting</label>
                                    <input type="text" name="meetInvitation_location" id="meetInvitation_location" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukkan lokasi atau link online meeting" required="">
                                </div>
                                <div class="col-span-2">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rentang waktu</label>
                                    <div date-rangepicker class="flex items-center">
                                        <div class="relative">
                                            <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                </svg>
                                            </div>
                                            <input name="meetInvitation_start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Mulai">
                                        </div>
                                        <span class="mx-4 text-gray-500">to</span>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                </svg>
                                            </div>
                                            <input name="meetInvitation_end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Selesai">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-2 col-end-6 ">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="small_size">Lampiran</label>
                                    <input name="lampiran_meetInvitation" class="block w-full mb-5 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="small_size" type="file">
                                </div>
                            </div>
                            <!-- Card footer -->
                            <div class="flex items-center justify-between border-t border-gray-200 rounded-b dark:border-gray-600">
                                <div class="flex items-center gap-2 mt-2">
                                    <button type="button" class="flex items-center justify-center w-8 h-8 text-sm font-medium text-white rounded-full btn-up-path hover:bg-gray-300">
                                        <svg class="w-6 h-6 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 15 7-7 7 7" />
                                        </svg>
                                        <span class="sr-only">Up Path</span>
                                    </button>
                                    <button type="button" class="flex items-center justify-center w-8 h-8 text-sm font-medium text-white rounded-full btn-down-path hover:bg-gray-300">
                                        <svg class="w-6 h-6 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
                                        </svg>
                                        <span class="sr-only">Down Path</span>
                                    </button>
                                </div>
                                <button type="button" class="flex items-center justify-center w-8 h-8 mt-2 text-sm font-medium text-white rounded-full btn-delete-path hover:bg-gray-300">
                                    <svg class="w-6 h-6 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                                    </svg>
                                    <span class="sr-only">Delete Path</span>
                                </button>
                            </div>

                        </div>
                        <button id="addPathBtn" class="text-gray-600 gap-2 border border-dashed inline-flex w-full justify-center hover:bg-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center shadow-md">
                            <svg class="w-6 h-6 text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21a9 9 0 1 1 0-18c1.052 0 2.062.18 3 .512M7 9.577l3.923 3.923 8.5-8.5M17 14v6m-3-3h6" />
                            </svg>
                            Tambah Path
                        </button>
                    </div>
                </form>
                <!-- Modal footer -->
                <div class="flex items-center p-4 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <div class="flex">
                        <!-- Previous Button -->
                        <button data-modal-hide="timeline-modal" data-modal-target="postJob-modal" data-modal-show="postJob-modal" class="flex items-center justify-center h-8 px-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg me-3 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4" />
                            </svg>
                            Kembali
                        </button>
                        <button class="flex items-center justify-center h-8 px-3 text-sm font-medium text-white border border-gray-300 rounded-lg bg-positive hover:bg-positive-hover" type="submit" form="formSelectionPath">
                            <svg class="w-6 h-6 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M5 3a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V7.414A2 2 0 0 0 20.414 6L18 3.586A2 2 0 0 0 16.586 3H5Zm3 11a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v6H8v-6Zm1-7V5h6v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1Z" clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M14 17h-4v-2h4v2Z" clip-rule="evenodd" />
                            </svg>
                            Simpan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const pathsContainer = document.getElementById('pathsContainer');
        const pathTemplate = document.getElementById('pathTemplate');
        const addPathBtn = document.getElementById('addPathBtn');

        function updatePathNumbers() {
            const paths = pathsContainer.querySelectorAll('.path-selection');
            paths.forEach((path, index) => {
                path.querySelector('span').textContent = index;
            });
        }

        function addNewPath() {
            const newPath = pathTemplate.cloneNode(true);
            newPath.style.display = 'block';
            newPath.removeAttribute('id');
            pathsContainer.insertBefore(newPath, addPathBtn);

            const typeSelection = newPath.querySelector('.type-selection');
            typeSelection.addEventListener('change', (event) => {
                const value = event.target.value;
                newPath.querySelector('.uploud-berkas').style.display = (value === 'uploudBerkas' ? 'grid' : 'none');
                newPath.querySelector('.challange-selection').style.display = (value === 'Challange' ? 'grid' : 'none');
                newPath.querySelector('.meet-invitation-selection').style.display = (value === 'meetInvitation' ? 'grid' : 'none');
            });

            newPath.querySelector('.btn-up-path').addEventListener('click', () => {
                const prevSibling = newPath.previousElementSibling;
                if (prevSibling && prevSibling !== pathTemplate) {
                    pathsContainer.insertBefore(newPath, prevSibling);
                    updatePathNumbers();
                }
            });

            newPath.querySelector('.btn-down-path').addEventListener('click', () => {
                const nextSibling = newPath.nextElementSibling;
                if (nextSibling && nextSibling !== addPathBtn) {
                    pathsContainer.insertBefore(nextSibling, newPath);
                    updatePathNumbers();
                }
            });

            newPath.querySelector('.btn-delete-path').addEventListener('click', () => {
                pathsContainer.removeChild(newPath);
                updatePathNumbers();
            });

            updatePathNumbers();
        }

        addPathBtn.addEventListener('click', addNewPath);

        // Memanggil addNewPath pertama kali untuk menambahkan path pertama dengan nomor urut 1
        addNewPath();
    });

    // Function to collect data from all paths
    function collectFormData() {
        const pathsContainer = document.getElementById('pathsContainer');
        const paths = pathsContainer.querySelectorAll('.path-selection');
        let formData = [];

        paths.forEach(path => {
            let pathData = {
                title: path.querySelector('input[name="pathTittle"]').value,
                type: path.querySelector('.type-selection').value,
                description: '',
                start: '',
                end: '',
                attachment: ''
            };

            // Check the type and collect specific data accordingly
            switch (pathData.type) {
                case 'uploudBerkas':
                    pathData.description = path.querySelector('textarea[name="pemberkasan_deskripsi"]').value;
                    pathData.start = path.querySelector('input[name="pemberkasan_start"]').value;
                    pathData.end = path.querySelector('input[name="pemberkasan_end"]').value;
                    pathData.attachment = path.querySelector('input[name="lampiran_pemberkasan"]').value;
                    break;
                case 'Challange':
                    pathData.description = path.querySelector('textarea[name="challange_deskripsi"]').value;
                    pathData.start = path.querySelector('input[name="challange_start"]').value;
                    pathData.end = path.querySelector('input[name="challange_end"]').value;
                    pathData.attachment = path.querySelector('input[name="lampiran_challange"]').value;
                    break;
                case 'meetInvitation':
                    pathData.description = path.querySelector('textarea[name="meetInvitation_deskripsi"]').value;
                    pathData.start = path.querySelector('input[name="meetInvitation_start"]').value;
                    pathData.end = path.querySelector('input[name="meetInvitation_end"]').value;
                    pathData.attachment = path.querySelector('input[name="lampiran_meetInvitation"]').value;
                    break;
            }

            formData.push(pathData);
        });

        return formData;
    }

    // Example usage:
    document.getElementById('submitButton').addEventListener('click', function() {
        const formData = collectFormData();
        console.log(formData); // Use formData as needed (e.g., send it to server)
    });
</script>