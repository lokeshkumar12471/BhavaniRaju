<x-guest-layout>
    <!-- FEATURES START -->
    <section class="relative
            bg-gray-50 dark:bg-slate-800 md:py-24 py-16 mt-3">
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
                            Appointment <i class="mdi mdi-chevron-right align-middle"></i></a>
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
</x-guest-layout>
