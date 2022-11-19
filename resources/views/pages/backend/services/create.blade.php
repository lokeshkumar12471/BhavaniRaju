<x-app-layout>
    <div id="app">
        <section class="section main-section">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        Home Page
                    </p>
                </header>
                <div class="card-content">
                    <form method="post" action="{{ route('admin.home.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="field spaced">
                            <label class="label">Wallpaper_Image</label>
                            <div class="control">
                                <input class="input" type="file" name="wallpaper" placeholder="user@example.com"
                                    autocomplete="username">
                            </div>
                            <p class="help">
                                Please Upload HomePage Image
                            </p>
                        </div>
                        <div class="field spaced">
                            <label class="label">Cards_Logo's</label>
                            <p class="control">
                                <input class="input" type="file" name="cards_logo"
                                    placeholder=" Please Enter Your Name" autocomplete="current-password">
                            </p>
                            <p class="help">
                                Please Upload The Card Logo's
                            </p>
                        </div>
                        <div class="field spaced">
                            <label class="label">Cards_Title's</label>
                            <p class="control">
                                <input class="input" type="text" name="cards_title"
                                    placeholder="Please Enter The Card Title's" autocomplete="current-password">
                            </p>
                            <p class="help">
                                Please Enter The Card Title's
                            </p>
                        </div>
                        <hr>
                </div>
                <header class="card-header">
                    <p class="card-header-title">
                        Social Media Links
                    </p>
                </header>
                <div class="card-content">
                    <div class="field spaced">
                        <label class="label">Twitter</label>
                        <p class="control">
                            <input class="input" type="text" name="twitter"
                                placeholder="Please Upload Your Twitter_Link" autocomplete="current-password">
                        </p>
                        <p class="help">
                            Please Upload Your Twitter_Link
                        </p>
                    </div>
                    <div class="field spaced">
                        <label class="label">Instagram</label>
                        <p class="control">
                            <input class="input" type="text" name="instagram"
                                placeholder=" Please Upload Your Instagram_Link" autocomplete="current-password">
                        </p>
                        <p class="help">
                            Please Upload Your Instagram_Link
                        </p>
                    </div>
                    <div class="field spaced">
                        <label class="label">Facebook</label>
                        <p class="control">
                            <input class="input" type="text" name="facebook"
                                placeholder="Please Upload Your Facebook_Link" autocomplete="current-password">
                        </p>
                        <p class="help">
                            Please Upload Your Facebook_Link
                        </p>
                    </div>
                    <div class="field spaced">
                        <label class="label">Linkedin</label>
                        <p class="control">
                            <input class="input" type="text" name="linkdin"
                                placeholder="Please Upload Your Linkedin_Link" autocomplete="current-password">
                        </p>
                        <p class="help">
                            Please Upload Your Linkedin_Link
                        </p>
                    </div>
                    <div class="field spaced">
                        <label class="label">Email_id</label>
                        <p class="control">
                            <input class="input" type="text" name="email_id"
                                placeholder="Please Upload Your Email_id" autocomplete="current-password">
                        </p>
                        <p class="help">
                            Please Upload Your Email_id
                        </p>
                    </div>
                    <div class="field spaced">
                        <label class="label">Google Map</label>
                        <div class="control">
                            <input class="input" type="text" name="googlemap"
                                placeholder="Embed Map Link(Directly from Google Maps Search, Share, Embed copy src link & paste)"
                                autocomplete="username">
                        </div>
                        <p class="help">
                            Embed Map Link(Directly from Google Maps Search, Share, Embed copy src link & paste)</p>
                    </div>
                    <hr>
                    <div class="control">
                        <button type="submit" class="button blue">
                            Submit
                        </button>
                    </div>
                </div>
            </div>
            </form>
    </div>
    </section>

    <!-- Scripts below are for demo only -->
    <script type="text/javascript" src="{{ asset('backend/main.min.js') }}"></script>

    <!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">

</x-app-layout>
