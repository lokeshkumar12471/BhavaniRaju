<x-guest-layout>
    <div class="container md:mt-24 mt-16">
        <div class="grid md:grid-cols-1 grid-cols-1 items-center gap-[30px]">
            <div class="lg:col-span-5 md:col-span-6 mt-8 md:mt-0">
                <div class="lg:ml-5">
                    <h3 class="mb-6 text-2xl  font-medium text-center">Book Appointment</h3>

                    <form method="post" name="myForm" id="myForm" onsubmit="return validateForm()">
                        <p class="mb-0" id="error-msg"></p>
                        <div id="simple-msg"></div>
                        <div class="grid lg:grid-cols-12 lg:gap-6">
                            <div class="lg:col-span-12">
                                <div class="text-left">
                                    <label for="name" class="font-semibold">Full Name:</label>
                                    <div class="form-icon relative mt-2">
                                        <input name="name" id="name" type="text" class="form-input pl-2"
                                            placeholder="Enter Your Full Name">
                                    </div>
                                </div>
                            </div>
                            <div class="lg:col-span-12 mb-5">
                                <div class="text-left">
                                    <label for="email" class="font-semibold"> Phone Number:</label>
                                    <div class="form-icon relative mt-2">
                                        <input name="email" id="email" type="email" class="form-input pl-2"
                                            placeholder="Enter Your Phone Number">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid lg:grid-cols-12 lg:gap-6">
                            <div class="lg:col-span-12 mb-5">
                                <div class="text-left">
                                    <label for="email" class="font-semibold">Email Address:</label>
                                    <div class="form-icon relative mt-2">
                                        <input name="email" id="email" type="email" class="form-input pl-2"
                                            placeholder="Enter Your Email Address">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="text-left">
                                    <label for="email" class="font-semibold">Date:</label>
                                    <div class="form-icon relative mt-2">
                                        <input name="email" id="email" type="date" class="form-input pl-2"
                                            placeholder="Enter Your Email Address">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="text-left">
                                    <label for="email" class="font-semibold">Time:</label>
                                    <div class="form-icon relative mt-2">
                                        <input name="email" id="email" type="time" class="form-input pl-2"
                                            placeholder="Enter Your Email Address">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-5 pt-3">
                            <div class="-mx-3 flex flex-wrap">
                                <div class="w-full px-3 sm:w-1/2">
                                    <div class="text-left">
                                        <label for="email" class="font-semibold">Enter Your Area:</label>
                                        <div class="form-icon relative mt-2">
                                            <input name="email" id="email" type="area" class="form-input pl-2"
                                                placeholder="Enter Your Area">
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full px-3 sm:w-1/2">
                                    <div class="text-left">
                                        <label for="email" class="font-semibold">Enter Your City:</label>
                                        <div class="form-icon relative mt-2">
                                            <input name="email" id="email" type="city" class="form-input pl-2"
                                                placeholder="Enter Your City">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5 pt-3">
                            <div class="-mx-3 flex flex-wrap">
                                <div class="w-full px-3 sm:w-1/2">
                                    <div class="text-left">
                                        <label for="email" class="font-semibold">Enter Your State</label>
                                        <div class="form-icon relative mt-2">
                                            <input name="email" id="email" type="state" class="form-input pl-2"
                                                placeholder="Enter Your State">
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full px-3 sm:w-1/2">
                                    <div class="text-left">
                                        <label for="email" class="font-semibold">Enter your PinCode:</label>
                                        <div class="form-icon relative mt-2">
                                            <input name="email" id="email" type="pincode"
                                                class="form-input pl-2" placeholder="Enter Your Pin Code">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" id="submit" name="send"
                            class="btn bg-indigo-600 w-full hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md justify-center flex items-cen ter">Book
                            Appointment</button>
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <!--end container-->
    </section>
    <!--end section-->

</x-guest-layout>
