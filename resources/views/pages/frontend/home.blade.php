<x-guest-layout>
    <!-- Start Hero -->
    <section class="swiper-slider-hero relative block h-screen" id="home">
        <div class="swiper-slide flex items-center overflow-hidden md:py-24 py-24">
            <div class="slide-inner slide-bg-image md:px-2 px-2 flex items-center bg-center bg-no-repeat ;"
                data-background="{{ asset('frontend/assets/wallpaper/background.jpg') }}">
                <div class="absolute inset-0 bg-black/70"></div>
                <div class="container">
                    <div class="grid grid-cols-1">
                        <div class="text-center">
                            <img src={{ asset('frontend/assets/wallpaper/neopolislogo.png') }}
                                class="l-dark text-white/70 text-lg max-w-xl mx-auto" height="24" alt="" />
                            <!--end container-->
                        </div>
                    </div>
                    <!-- end swiper-slide -->
    </section>
    <!--end section-->
    <!-- Hero End -->

    <!-- FEATURES START -->
    <section class="relative
            bg-gray-50 dark:bg-slate-800 md:py-24 py-16">
        <div class="container">
            <div class="grid grid-cols-1 justify-center">
                <div class="features-absolute">
                    <div class="grid lg:grid-cols-3 md:grid-cols-1 grid-cols-1 gap-[24px]">
                        <div
                            class="doctor text-white group p-6 md:px-4 rounded-lg shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 dark:bg-slate-900 text-center transition-all duration-500 ease-in-out">
                            <div
                                class="w-16 h-16 bg-indigo-600/5 text-indigo-600 rounded-lg text-2xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-700 mx-auto">
                                <img src="{{ asset('frontend/assets/hospitallogo/50x50.png') }}">
                            </div>

                            <div class="content mt-7">
                                <a href="{{ route('services') . '#multispeciality' }}"
                                    class="title h5 text-lg font-medium hover:text-indigo-600">Multi
                                    Speciality Out Patient Clinics</a>
                            </div>
                        </div>
                        <!--end feature content-->

                        <div
                            class="doctor text-white group p-6 md:px-4 rounded-lg shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 dark:bg-slate-900 text-center transition-all duration-500 ease-in-out">
                            <div
                                class="w-16 h-16 bg-indigo-600/5 text-indigo-600 rounded-lg text-2xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-700 mx-auto">
                                <img src="frontend/assets/hospitallogo/50x50.png">
                            </div>

                            <div class="content mt-7">
                                <a href="{{ route('doctors') }}"
                                    class="title h5 text-lg font-medium hover:text-indigo-600">Visiting Doctors</a>
                            </div>
                        </div>
                        <!--end feature content-->

                        <div
                            class="doctor text-white group p-6 md:px-4 rounded-lg shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700  dark:bg-slate-900 text-center transition-all duration-500 ease-in-out">
                            <div
                                class="w-16 h-16 bg-indigo-600/5 text-indigo-600 rounded-lg text-2xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-700 mx-auto">
                                <img src="frontend/assets/hospitallogo/50x50.png">
                            </div>

                            <div class="content mt-7">
                                <a href="{{ route('services') . '#otherservices' }}"
                                    class="title h5 text-lg font-medium hover:text-indigo-600">Endoscopy And Other
                                    Services</a>
                            </div>
                        </div>
                        <!--end feature content-->
                    </div>
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
        <br>
        <h4
            class="mb-6 md:text-3xl text-2xl md:leading-normal font-medium lg:leading-normal leading-normal text-center text-black dark:text-white">
            ABOUT US
        </h4>
        <div class="container md:mt-8 mt-8">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="md:col-span-5">
                    <div class="relative">
                        <img src="frontend\assets\wallpaper\neopolis.02.jpg" class="mx-auto" alt="" />
                        <div class="absolute bottom-2/4 translate-y-2/4 right-0 left-0 text-center">
                            <a href="https://youtu.be/fKSBVIKbcAg" data-type="youtube" data-id="fKSBVIKbcAg"
                                class="lightbox h-20 w-20 rounded-full shadow-lg dark:shadow-gray-700 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-indigo-600">
                                <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="md:col-span-7">
                    <div class="lg:ml-4">
                        <p class="text-slate-400 max-w-xl">
                            Neopolis Clinics is located in Film Nagar, Jubilee Hills Hyderabad
                            <br>
                            Road Number 82 Navanirman Nagar Colony, Jubilee Hills, Hyderabad, India, Telangana
                            <br>
                            We think that everyone should have easy access to excellent
                            healthcare. Our aim is to make the procedure as simple as
                            possible for our patients and to offer treatment no matter
                            where they are — in person or at their convenience.
                            Hospital information systems provide a common source of information about a patient's health
                            history, and doctors schedule timing. The system has to keep data in a secure place and
                            controls who can reach the data in certain circumstances. These systems enhance the ability
                            of health care professionals to coordinate care by providing a patient's health information
                            and visit history at the place and time that it is needed.
                        </p>
                        <a href="{{ route('bookappointment') }}"
                            class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-3">Book
                            Appointment<i class="mdi mdi-chevron-right align-middle"></i></a>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End Section-->



    <!-- Start -->
    <section class="relative md:py-24 py-16">
        <div class="container">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3
                    class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-medium text-black dark:text-white">
                    MULTI SPECIALITY OUT PATIENT CLINICS
                </h3>
            </div>
            <!--end grid-->

            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                <div class="lg:col-span-4 md:col-span-6">
                    <div
                        class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                        <div
                            class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-50 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                            <img class="height-[45px]" src="frontend/assets/multispecialtyhospital/01.png">
                        </div>
                        <div class="flex-1">
                            <h4 class="mb-0 text-lg font-medium">Gastroenterology</h4>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-4 md:col-span-6">
                    <div
                        class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                        <div
                            class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-50 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                            <img class="height-[45px]" src="frontend/assets/multispecialtyhospital/03.png">
                        </div>
                        <div class="flex-1">
                            <h4 class="mb-0 text-lg font-medium">Hepatology/Liver Transplant</h4>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-4 md:col-span-6">
                    <div
                        class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                        <div
                            class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-50 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                            <img class="height-[45px]" src="frontend/assets/multispecialtyhospital/05.png">
                        </div>
                        <div class="flex-1">
                            <h4 class="mb-0 text-lg font-medium">Nephrology</h4>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-4 md:col-span-6">
                    <div
                        class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                        <div
                            class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-50 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                            <img class="height-[45px]" src="frontend/assets/multispecialtyhospital/06.png">
                        </div>
                        <div class="flex-1">
                            <h4 class="mb-0 text-lg font-medium">Neurology</h4>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-4 md:col-span-6">
                    <div
                        class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                        <div
                            class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-50 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                            <img class="height-[45px]" src="frontend/assets/multispecialtyhospital/07.png">
                        </div>
                        <div class="flex-1">
                            <h4 class="mb-0 text-lg font-medium">
                                Cardiology & Cardiothoracic Surgery
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-4 md:col-span-6">
                    <div
                        class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                        <div
                            class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-50 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                            <img class="height-[45px]" src="frontend/assets/multispecialtyhospital/09.png">
                        </div>
                        <div class="flex-1">
                            <h4 class="mb-0 text-lg font-medium">
                                Pulmonology
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-4 md:col-span-6">
                    <div
                        class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                        <div
                            class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-50 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                            <img class="height-[45px]" src="frontend/assets/multispecialtyhospital/02.png">
                        </div>
                        <div class="flex-1">
                            <h4 class="mb-0 text-lg font-medium">Urology/Kidney Transplant</h4>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-4 md:col-span-6">
                    <div
                        class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                        <div
                            class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-50 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                            <img class="height-[45px]" src="frontend/assets/multispecialtyhospital/04.png">
                        </div>
                        <div class="flex-1">
                            <h4 class="mb-0 text-lg font-medium">Orthopaedics</h4>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-4 md:col-span-6">
                    <div
                        class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                        <div
                            class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-50 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                            <img class="height-[45px]" src="frontend/assets/multispecialtyhospital/08.png">
                        </div>
                        <div class="flex-1">
                            <h4 class="mb-0 text-lg font-medium">
                                General Surgery & General physician
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-4 md:col-span-6">
                    <div
                        class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                        <div
                            class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-50 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                            <img class="height-[45px]" src="frontend/assets/multispecialtyhospital/10.png">
                        </div>
                        <div class="flex-1">
                            <h4 class="mb-0 text-lg font-medium">
                                Breast Oncoplastic Surgery
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end grid-->
        </div>
        <!--end contanier-->
    </section>
    <!--end section-->
    <!-- End -->

    <!-- Start -->
    <section class="relative">
        <div class="container">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3
                    class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-medium text-black dark:text-white">
                    OTHER SERVICES
                </h3>
            </div>
            <!--end grid-->

            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                <div class="lg:col-span-4 md:col-span-6">
                    <div
                        class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                        <div
                            class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-50 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                            <img src="frontend/assets/otherservices/11.png">
                        </div>
                        <div class="flex-1">
                            <h4 class="mb-0 text-lg font-medium">UGI Endoscopy</h4>
                            <h4>(Diagnostic & Therapeutic)</h4>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-4 md:col-span-6">
                    <div
                        class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                        <div
                            class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-50  from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                            <img src="frontend/assets/otherservices/12.png">
                        </div>
                        <div class="flex-1">
                            <h4 class="mb-0 text-lg font-medium">Vascular Access</h4>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-4 md:col-span-6">
                    <div
                        class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                        <div
                            class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-50 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                            <img src="frontend/assets/otherservices/13.png">
                        </div>
                        <div class="flex-1">
                            <h4 class="mb-0 text-lg font-medium">Sigmoidoscopy</h4>
                            <h3>(Diagnostic & Therapeutic)</h3>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-4 md:col-span-6">
                    <div
                        class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                        <div
                            class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-50 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                            <img src="frontend/assets/otherservices/14.png">
                        </div>
                        <div class="flex-1">
                            <h4 class="mb-0 text-lg font-medium">Urodynamics & Uroflowmetry</h4>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-4 md:col-span-6">
                    <div
                        class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                        <div
                            class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-50 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                            <img src="frontend/assets/otherservices/15.png">
                        </div>
                        <div class="flex-1">
                            <h4 class="mb-0 text-lg font-medium">Colonoscopy</h4>
                            <h3>(Diagnostic & Therapeutic)</h3>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-4 md:col-span-6">
                    <div
                        class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                        <div
                            class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-50 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                            <img src="frontend/assets/otherservices/16.png">
                        </div>
                        <div class="flex-1">
                            <h4 class="mb-0 text-lg font-medium">Neat</h4>
                            <h4>(Nutrition Evaluation And Treatment)</h4>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-4 md:col-span-6">
                    <div
                        class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                        <div
                            class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-50  from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                            <img src="frontend/assets/multispecialtyhospital/09.png">
                        </div>
                        <div class="flex-1">
                            <h4 class="mb-0 text-lg font-medium">Pulmonary Functions Tests</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end contanier-->
    </section>
    <!--end section-->
    <!-- End -->

    <!-- Start -->
    <section class="bg-gray-50 dark:bg-slate-800 md:py-24 py-16 mt-2">
        <div class="container">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3
                    class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-medium text-black dark:text-white">
                    DOCTORS
                </h3>
            </div>
            <!--end grid-->
            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                <div class="lg:col-span-4 md:col-span-6">
                    <div
                        class="home-doctors text-white flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                        <div
                            class="items-center justify-center h-[45px] min-w-[100px] -rotate-50 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                            <img class="bg-red-900" src="frontend/assets/doctorsimages/bhavani.png">
                        </div>
                        <a href="{{ route('doctors') }}">
                            <div class="flex-1">
                                <h4 class="mb-0 text-lg font-medium">Dr.Bhavani Raju (PBSS Raju)</h4>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-4 md:col-span-6">
                    <div
                        class="home-doctors text-white flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                        <div
                            class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-50 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                            <img src="frontend/assets/doctorsimages/prasad.png">
                        </div>
                        <a href="{{ route('doctors') }}">
                            <div class="flex-1">
                                <h4 class="mb-0 text-lg font-medium">Dr.K.Prasad Raju</h4>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="lg:col-span-4 md:col-span-6">
                    <div
                        class="home-doctors text-white flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                        <div
                            class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-50 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                            <img src="frontend/assets/doctorsimages/arun.png">
                        </div>
                        <a href="{{ route('doctors') }}">
                            <div class="flex-1">
                                <h4 class="mb-0 text-lg font-medium">Dr.Arun Kumar Nadimpalli</h4>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="lg:col-span-4 md:col-span-6">
                    <div
                        class="home-doctors text-white flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                        <div
                            class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-50 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                            <img src="frontend/assets/doctorsimages/mallikarjuna.png">
                        </div>
                        <a href="{{ route('doctors') }}">
                            <div class="flex-1">
                                <h4 class="mb-0 text-lg font-medium">Prof.Dr.Mallikarjuna Reddy N</h4>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-4 md:col-span-6">
                    <div
                        class="home-doctors text-white flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                        <div
                            class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-50 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                            <img src="frontend/assets/doctorsimages/rahul.png">
                        </div>
                        <a href="{{ route('doctors') }}">
                            <div class="flex-1">
                                <h4 class="mb-0 text-lg font-medium">Dr.K.Rahul Krishna</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="lg:col-span-4 md:col-span-6">
                    <div
                        class="home-doctors text-white flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                        <div
                            class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-50 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                            <img src="frontend/assets/doctorsimages/raghu.png">
                        </div>
                        <a href="{{ route('doctors') }}">
                            <div class="flex-1">
                                <h4 class="mb-0 text-lg font-medium">Dr.K.Raghu</h4>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-4 md:col-span-6">
                    <div
                        class="home-doctors text-white flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                        <div
                            class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-50 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                            <img src="frontend/assets/doctorsimages/swamy.png">
                        </div>
                        <a href="{{ route('doctors') }}">
                            <div class="flex-1">
                                <h4 class="mb-0 text-lg font-medium">Dr.T.L.N.Swamy</h4>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-4 md:col-span-6">
                    <div
                        class=" home-doctors text-white flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                        <div
                            class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-50 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                            <img src="frontend/assets/doctorsimages/nagasaina.png">
                        </div>
                        <a href="{{ route('doctors') }}">
                            <div class="flex-1">
                                <h4 class="mb-0 text-lg font-medium">Dr.G.Nagasaina Rao</h4>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-4 md:col-span-6">
                    <div
                        class="home-doctors text-white flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                        <div
                            class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-50 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                            <img src="frontend/assets/doctorsimages/srinivas.png">
                        </div>
                        <a href="{{ route('doctors') }}">
                            <div class="flex-1">
                                <h4 class="mb-0 text-lg font-medium">Dr.A.Srinivas Raju</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>


            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px] mt-8">
                <div class="lg:col-span-4 md:col-span-6">
                    <div
                        class="home-doctors text-white flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                        <div
                            class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-50 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                            <img src="frontend/assets/doctorsimages/vikranth.png">
                        </div>
                        <a href="{{ route('doctors') }}">
                            <div class="flex-1">
                                <h4 class="mb-0 text-lg font-medium">Dr.P.Vikranth Reddy</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="lg:col-span-4 md:col-span-6">
                    <div
                        class="home-doctors text-white flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                        <div
                            class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-50 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                            <img src="frontend/assets/doctorsimages/shyam.png">
                        </div>
                        <a href="{{ route('doctors') }}">
                            <div class="flex-1">
                                <h4 class="mb-0 text-lg font-medium">Dr.Shyam K Jaiswal</h4>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-4 md:col-span-6">
                    <div
                        class="home-doctors text-white flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                        <div
                            class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-50 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                            <img src="frontend/assets/doctorsimages/ravinder.png">
                        </div>
                        <a href="{{ route('doctors') }}">
                            <div class="flex-1">
                                <h4 class="mb-0 text-lg font-medium">Dr.Ravinder Reddy</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px] mt-8">
                <div class="lg:col-span-4 md:col-span-6">
                    <div
                        class="home-doctors text-white flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                        <div
                            class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-50 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                            <img src="frontend/assets/doctorsimages/prathima.png">
                        </div>
                        <a href="{{ route('doctors') }}">
                            <div class="flex-1">
                                <h4 class="mb-0 text-lg font-medium">K.Prathima</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="lg:col-span-4 md:col-span-6">
                    <div
                        class="home-doctors text-white flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                        <div
                            class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-50 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                            <img src="frontend/assets/doctorsimages/gnaneswar.png">
                        </div>
                        <a href="{{ route('doctors') }}">
                            <div class="flex-1">
                                <h4 class="mb-0 text-lg font-medium">Dr.G.S.Gnaneswar</h4>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-4 md:col-span-6">
                    <div
                        class="home-doctors text-white flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                        <div
                            class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-50 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                            <img src="frontend/assets/doctorsimages/gnaneswar.png">
                        </div>
                        <a href="{{ route('doctors') }}">
                            <div class="flex-1">
                                <h4 class="mb-0 text-lg font-medium">Dr.Chaitanya Challa</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--end contanier-->
    </section>
    <!--end section-->
    <!-- End -->
    <div class="container md:md:py-24 py-11">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">
                WHAT OUR PATIENTS SAYS
            </h3>
        </div>
        <!--end grid-->

        <div class="grid grid-cols-1 mt-8">
            <div class="tiny-three-item">
                <div class="tiny-slide text-center">
                    <div class="customer-testi">
                        <div
                            class="content relative rounded shadow dark:shadow-gray-700 m-2 p-6 bg-white dark:bg-slate-900">
                            <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                            <p class="text-slate-400">
                                " Gastroenterology is the study of the normal function and diseases of the esophagus,
                                stomach, small intestine, colon and rectum, pancreas, gallbladder, bile ducts and liver.
                                "
                            </p>
                            <ul class="list-none mb-0 text-amber-400 mt-3">
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                            </ul>
                        </div>

                        <div class="text-center mt-5">
                            <h6 class="mt-2 font-semibold">Praveen</h6>
                            <span class="text-slate-400 text-sm">Gastroenterology</span>
                        </div>
                    </div>
                </div>

                <div class="tiny-slide text-center">
                    <div class="customer-testi">
                        <div
                            class="content relative rounded shadow dark:shadow-gray-700 m-2 p-6 bg-white dark:bg-slate-900">
                            <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                            <p class="text-slate-400">
                                "neurology, medical specialty concerned with the nervous system and its functional or
                                organic disorders. "
                            </p>
                            <ul class="list-none mb-0 text-amber-400 mt-3">
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                            </ul>
                        </div>

                        <div class="text-center mt-5">
                            <h6 class="mt-2 font-semibold">Kiran</h6>
                            <span class="text-slate-400 text-sm">Neurology</span>
                        </div>
                    </div>
                </div>

                <div class="tiny-slide text-center">
                    <div class="customer-testi">
                        <div
                            class="content relative rounded shadow dark:shadow-gray-700 m-2 p-6 bg-white dark:bg-slate-900">
                            <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                            <p class="text-slate-400">
                                "Orthopedic surgery or orthopedics, is the branch of surgery concerned with conditions
                                involving the musculoskeletal system. "
                            </p>
                            <ul class="list-none mb-0 text-amber-400 mt-3">
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                            </ul>
                        </div>

                        <div class="text-center mt-5">
                            <h6 class="mt-2 font-semibold">Sagar</h6>
                            <span class="text-slate-400 text-sm">Orthopedic</span>
                        </div>
                    </div>
                </div>

                <div class="tiny-slide text-center">
                    <div class="customer-testi">
                        <div
                            class="content relative rounded shadow dark:shadow-gray-700 m-2 p-6 bg-white dark:bg-slate-900">
                            <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                            <p class="text-slate-400">
                                " Pulmonology often involves managing patients who need life support and mechanical
                                ventilation."
                            </p>
                            <ul class="list-none mb-0 text-amber-400 mt-3">
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                            </ul>
                        </div>

                        <div class="text-center mt-5">
                            <h6 class="mt-2 font-semibold">Ramesh</h6>
                            <span class="text-slate-400 text-sm"> Pulmonology</span>
                        </div>
                    </div>
                </div>

                <div class="tiny-slide text-center">
                    <div class="customer-testi">
                        <div
                            class="content relative rounded shadow dark:shadow-gray-700 m-2 p-6 bg-white dark:bg-slate-900">
                            <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                            <p class="text-slate-400">
                                "A vascular access is a surgically created vein used to remove and return blood during
                                hemodialysis. "
                            </p>
                            <ul class="list-none mb-0 text-amber-400 mt-3">
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                            </ul>
                        </div>

                        <div class="text-center mt-5">
                            <h6 class="mt-2 font-semibold">Preethi</h6>
                            <span class="text-slate-400 text-sm"> Vascular Access</span>
                        </div>
                    </div>
                </div>

                <div class="tiny-slide text-center">
                    <div class="customer-testi">
                        <div
                            class="content relative rounded shadow dark:shadow-gray-700 m-2 p-6 bg-white dark:bg-slate-900">
                            <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                            <p class="text-slate-400">
                                "An upper GI endoscopy or EGD (esophagogastroduodenoscopy) is a procedure to diagnose
                                and treat problems in your upper GI (gastrointestinal) tract.
                                The upper GI tract includes your food pipe (esophagus), stomach, and the first part of
                                your small intestine (the duodenum). "
                            </p>
                            <ul class="list-none mb-0 text-amber-400 mt-3">
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                            </ul>
                        </div>

                        <div class="text-center mt-5">
                            <h6 class="mt-2 font-semibold">Geetha</h6>
                            <span class="text-slate-400 text-sm">UGI Endoscopy</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end grid-->
    </div>
    <!--end container-->
    </section>
    <!--end section-->
    <!-- End Section-->



    <!-- Start Section-->
    <section class="relative md:py-24 py-16">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
                <div class="text-center px-6 mt-6">
                    <div
                        class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-700 mx-auto">
                        <i class="uil uil-phone"></i>
                    </div>

                    <div class="content mt-7">
                        <h5 class="title h5 text-xl font-medium">Phone</h5>
                        <p class="text-slate-400 mt-3"></p>

                        <div class="mt-5">
                            <a href="9494923434"
                                class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">9494923434</a>
                        </div>
                    </div>
                </div>

                <div class="text-center px-6 mt-6">
                    <div
                        class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-700 mx-auto">
                        <i class="uil uil-envelope"></i>
                    </div>

                    <div class="content mt-7">
                        <h5 class="title h5 text-xl font-medium">Email</h5>
                        <p class="text-slate-400 mt-3"></p>

                        <div class="mt-5">
                            <a href="neopolisclinics@gmail.com"
                                class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">neopolisclinics@gmail.com</a>
                        </div>
                    </div>
                </div>

                <div class="text-center px-6 mt-6">
                    <div
                        class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-700 mx-auto">
                        <i class="uil uil-location-point"></i>
                    </div>

                    <div class="content mt-7">
                        <h5 class="title h5 text-xl font-medium">Location</h5>
                        <p class="text-slate-400 mt-3">Film Nagar Main Road,Jubilee Hills, <br> Road No.82
                            Hyderabad-500033
                            485</p>

                        <div class="mt-5">
                            <a href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15227.672894305126!2d78.4096001!3d17.4157117!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x251eba12a25745f!2sNeopolis%20Medical%20Centre%2Fclinics!5e0!3m2!1sen!2sin!4v1665664077224!5m2!1sen!2sin"
                                data-type="iframe"
                                class="video-play-icon read-more lightbox btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">View
                                on Google map</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->

        <div class="container md:mt-24 mt-16">
            <div class="grid md:grid-cols-1 grid-cols-1 items-center gap-[30px]">
                <div class="lg:col-span-5 md:col-span-6 mt-8 md:mt-0">
                    <div class="lg:ml-5">
                        <h3 class="mb-6 text-2xl leading-normal font-medium text-center">Get in touch !</h3>

                        <form method="post" name="myForm" id="myForm" onsubmit="return validateForm()">
                            <p class="mb-0" id="error-msg"></p>
                            <div id="simple-msg"></div>
                            <div class="grid lg:grid-cols-12 lg:gap-6">
                                <div class="lg:col-span-12">
                                    <div class="text-left">
                                        <label for="name" class="font-semibold">Your Name:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="user" class="w-4 h-4 absolute top-3 left-4"></i>
                                            <input name="name" id="name" type="text"
                                                class="form-input pl-11" placeholder="Name :">
                                        </div>
                                    </div>
                                </div>
                                <div class="lg:col-span-12 mb-5">
                                    <div class="text-left">
                                        <label for="email" class="font-semibold">Your Email:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="mail" class="w-4 h-4 absolute top-3 left-4"></i>
                                            <input name="email" id="email" type="email"
                                                class="form-input pl-11" placeholder="Email :">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-1">
                                <div class="mb-5">
                                    <div class="text-left">
                                        <label for="subject" class="font-semibold">Your Question:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="book" class="w-4 h-4 absolute top-3 left-4"></i>
                                            <input name="subject" id="subject" class="form-input pl-11"
                                                placeholder="Subject :">
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <div class="text-left">
                                        <label for="comments" class="font-semibold">Your Comment:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="message-circle"
                                                class="w-4 h-4 absolute top-3 left-4"></i>
                                            <textarea name="comments" id="comments" class="form-input pl-11 h-28" placeholder="Message :"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" id="submit" name="send"
                                class="btn bg-indigo-600 w-full hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md justify-center flex items-cen ter">Send
                                Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End Section-->

    <div class="container-fluid relative">
        <div class="grid grid-cols-1">
            <div class="w-full leading-[0] border-0">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15227.672894305126!2d78.4096001!3d17.4157117!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x251eba12a25745f!2sNeopolis%20Medical%20Centre%2Fclinics!5e0!3m2!1sen!2sin!4v1665664077224!5m2!1sen!2sin"
                    style="border:0" class="w-full h-[500px]" allowfullscreen></iframe>
            </div>
        </div>
        <!--end grid-->
    </div>
    <!--end container-->

</x-guest-layout>
