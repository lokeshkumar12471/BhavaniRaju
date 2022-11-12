<x-guest-layout>
    <div class="container md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mt-8 md:text-3xl text-2xl md:leading-normal leading-normal font-medium   dark:text-white">
                Contact Us
            </h3>
        </div>
    </div>
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
                                            <input name="name" id="name" type="text" class="form-input pl-11"
                                                placeholder="Name :">
                                        </div>
                                    </div>
                                </div>
                                <div class="lg:col-span-12 mb-5">
                                    <div class="text-left">
                                        <label for="email" class="font-semibold">Your Email:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="mail" class="w-4 h-4 absolute top-3 left-4"></i>
                                            <input name="email" id="email" type="email" class="form-input pl-11"
                                                placeholder="Email :">
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
                                            <i data-feather="message-circle" class="w-4 h-4 absolute top-3 left-4"></i>
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
