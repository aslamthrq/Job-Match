<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="../path/to/flowbite/dist/datepicker.js"></script>
    <link rel="icon" href="{{ url('images/job-match-white.svg') }}">
    <title>Talent pool</title>
</head>
<body>
    @include('recruiter.components.sidebar')
     
    <div class="sm:ml-80 p-4">

        <div class="border rounded-lg" >
            <!-- Banner Section -->
            <div class="relative">
                <img src="{{ url('images/banner-job-match.png') }}" alt="Banner Image" class="w-full rounded-t-lg h-48 object-cover">
                <div class="absolute inset-0 flex items-center rounded-t-lg justify-center">
                    {{-- <h1 class="text-white text-4xl font-bold">Job Match</h1> --}}
                    <button type="button" class="absolute top-0 right-0 m-2 text-e73002 shadow-lg bg-white  hover:bg-negative hover:text-white font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center ">
                      
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                          </svg>
                          
                        <span class="sr-only">Edit Banner</span>
                    </button>
                </div>
                
            </div>
        
            <div class="flex relative">
                <!-- Profile Image -->
                <div class="absolute top-0 left-4 transform -translate-y-1/3">
                    <div class="flex col-span-4 items-center justify-center w-full">
                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-28 rounded-lg cursor-pointer hover:border-2 hover:border-e73002 bg-gray-50  hover:bg-gray-100">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <img class="w-28 h-28 object-cover border-2 rounded-lg" src="{{ url('images/logoJobMatch.png') }}" alt="profile image">
                            </div>
                            <input id="dropzone-file" type="file" class="hidden" accept="image/*" />
                        </label>
                    </div>
                    
                    <svg class="top-24 start-24 absolute w-6 h-6 text-e73002" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z" clip-rule="evenodd"/>
                    </svg>
                </div>
                
                <!-- Profile Details and Social Media -->
                <div class="flex ml-32 w-full items-center justify-between">
                    <div class="ps-3">
                        <div class="flex gap-2 items-center text-base font-bold">
                            <span>Job Match</span>
                        </div>
                        <div class="text-sm text-gray-500">We connect top talent with top companies.</div>
                        <div class="flex mt-2 gap-2">
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M4 4a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2v14a1 1 0 1 1 0 2H5a1 1 0 1 1 0-2V5a1 1 0 0 1-1-1Zm5 2a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1h-1Zm-5 4a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1h-1Zm-3 4a2 2 0 0 0-2 2v3h2v-3h2v3h2v-3a2 2 0 0 0-2-2h-2Z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-xs">Tech</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-xs">Semarang, Indonesia</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-xs">1 - 10 employees</span>
                            </div>
                        </div>
                    </div>
                    {{-- Social Media --}}
                    <div class="flex">
                        <button type="button" class="w-8 h-8 text-white bg-white hover:bg-slate-50 border font-medium rounded-lg text-sm p-1 text-center inline-flex items-center me-2 ">
                            <svg class="w-8 h-8 text-e73002" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
                            </svg>
                            <span class="sr-only">Instagram</span>
                        </button>
                        <button type="button" class="w-8 h-8 text-white bg-white hover:bg-slate-50 border font-medium rounded-lg text-sm p-1 text-center inline-flex items-center me-2 ">
                            <svg class="w-8 h-8 text-e73002" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clip-rule="evenodd"/>
                              </svg>
                              
                            <span class="sr-only">Instagram</span>
                        </button>
                        <button type="button" class="w-8 h-8 text-white bg-white hover:bg-slate-50 border font-medium rounded-lg text-sm p-1 text-center inline-flex items-center me-2 ">
                              <svg class="w-8 h-8 text-e73002" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path fill="currentColor" fill-rule="evenodd" d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z" clip-rule="evenodd"/>
                                <path fill="currentColor" d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z"/>
                              </svg>
                              
                              
                            <span class="sr-only">Whatsapp</span>
                        </button>
                        <button type="button" class="w-8 h-8 text-white bg-white hover:bg-slate-50 border font-medium rounded-lg text-sm p-1 text-center inline-flex items-center me-2 ">
                            <svg class="w-8 h-8 text-e73002" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12 2a10 10 0 1 0 10 10A10.009 10.009 0 0 0 12 2Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.093 20.093 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM10 3.707a8.82 8.82 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.755 45.755 0 0 0 10 3.707Zm-6.358 6.555a8.57 8.57 0 0 1 4.73-5.981 53.99 53.99 0 0 1 3.168 4.941 32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.641 31.641 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM12 20.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 15.113 13a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z" clip-rule="evenodd"/>
                              </svg>
                              
                            <span class="sr-only">Website</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Body Section -->
            <div class="mb-4 p-6">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center text-e73002 " data-tabs-active-classes="text-e73002 border-e73002" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 hover:border-e73002 rounded-t-lg hover:text-e73002" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 hover:border-e73002 rounded-t-lg hover:text-e73002   " id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Jobs</button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block p-4 border-b-2 hover:border-e73002 rounded-t-lg hover:text-e73002   " id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Contacts</button>
                    </li>
                </ul>
            </div>
            <div id="default-tab-content" class="mx-6">
                
                <div class="relative hidden rounded-lg " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <button data-modal-target="editProfileCompany-modal" data-modal-toggle="editProfileCompany-modal" type="button" class="absolute -top-8 right-0 text-e73002 shadow-lg bg-white  hover:bg-negative hover:text-white font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center ">
                      
                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                          </svg>
                          
                        <span class="sr-only">Edit Banner</span>
                    </button>
                    <div class=" justify-start items-start">
                        
                        <p class="text-sm font-bold text-gray-500 dark:text-gray-400">
                          Get To Know About Us:
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

                      <div class="justify-start items-start my-6">
                            <p class="mb-2 text-sm font-bold text-gray-500">
                                Culture:
                            </p>
                            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                                <div class="flex items-center justify-center relative">
                                    <div>
                                        <svg class="w-10 h-10 text-e73002" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 1 0 9.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1 1 14.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                        </svg>
                                    </div>
                                    <div class="ps-3">
                                        <div class="text-base font-semibold text-gray-500">
                                            Innovative
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            We strive to constantly pursue innovation of our products and services
                                        </div>
                                    </div>  
                                    <div class="absolute inset-y-0 right-0 w-[1px] bg-gray-300"></div>
                                </div>
                            
                                <div class="flex items-center justify-center relative">
                                    <div>
                                        <svg class="w-10 h-10 text-e73002" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 1 0 9.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1 1 14.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                        </svg>
                                    </div>
                                    <div class="ps-3">
                                        <div class="text-base font-semibold text-gray-500">
                                            Innovative
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            We strive to constantly pursue innovation of our products and services
                                        </div>
                                    </div>  
                                    <div class="absolute inset-y-0 right-0 w-[1px] bg-gray-300"></div>
                                </div>
                            
                                <div class="flex items-center justify-center relative">
                                    <div>
                                        <svg class="w-10 h-10 text-e73002" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 1 0 9.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1 1 14.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                        </svg>
                                    </div>
                                    <div class="ps-3">
                                        <div class="text-base font-semibold text-gray-500">
                                            Innovative
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            We strive to constantly pursue innovation of our products and services
                                        </div>
                                    </div>  
                                </div>
                            </div>
                      </div>

                      <div class="justify-start items-start my-2 gap-2">
                        @include('recruiter.components.jobsTable')
                      </div>
                
                </div>


                <div class="hidden rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                    @include('recruiter.components.jobsTable')
                </div>

                <div class="hidden rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                    @include('recruiter.components.contactCompany')
                </div>
            </div>


        </div>
        
       
        
    </div>



    <!-- Edit Profile Company modal -->
<div id="editProfileCompany-modal" tabindex="-1" aria-hidden="true" class="hidden fixed top-0 right-0 left-0 z-50  justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-4xl h-full">
        <!-- Modal content -->
        <div class="relative rounded-lg shadow bg-gray-50 flex flex-col h-full">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Edit profile company
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="editProfileCompany-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body Post Room -->
            <form class="p-4 md:p-5 overflow-y-auto flex-grow">
                <div class=" grid gap-4 grid-cols-4">
                  
                    <div class="col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Perusahaan</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan judul" required="">
                    </div>

                    <div class="col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bidang perusahaan</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Posisi yang dibuka" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-2">
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                        <input type="text" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukkan departement" required="">
                    </div>
                   
                    <div class="col-span-2 sm:col-span-1">
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Moto perusahaan</label>
                        <input type="text" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="10" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Karyawan</label>
                        <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="2.500.000" required="">
                    </div>
                    
                    <div class="col-span-4">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tentang perusahaan</label>
                        <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tulis deskripsi dan kualifikasi"></textarea>                    
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Benefit yang didapatkan</label>
                        <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Public</option>
                            <option value="TV">Private</option>
                        </select>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Culture</label>
                        <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Public</option>
                            <option value="TV">Private</option>
                        </select>
                    </div>
                </div>
            </form>
            <!-- Modal footer -->
            <div class="flex items-center border-t border-gray-200 rounded-b dark:border-gray-600 p-4" >
                <div class="flex">
                    <button 
                    data-modal-hide="editProfileCompany-modal" 
                    data-modal-target="timeline-modal" 
                    data-modal-show="timeline-modal"  
                    type="button"
                    class="flex items-center justify-center px-3 h-8 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 " >
                        Berikutnya
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                        <span class="sr-only">Berikutnya</span>
                    </button>
                </div>                 
            </div>
            
        </div>
    </div>
</div>
 


</body>
