<x-app-layout>
    <div id="app">
        <section class="is-title-bar">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
                <ul>
                    <li>Admin</li>
                    <li>Dashboard</li>
                </ul>
            </div>
        </section>

        <section class="section main-section">
            <div class="card has-table">
                <header class="card-header">
                    <p class="card-header-title">
                        Home Page (View, Edit, Delete) Data
                    </p>
                    <a href="{{ route('admin.home.create') }}" class="card-header-icon">
                        <button class="button small green --jb-modal">
                            Add
                        </button>
                    </a>
                </header>
                <div class="card-content">
                    <table>
                        <thead>
                            <tr>
                                <th>Wallpaper</th>
                                <th>Cards_Logo</th>
                                <th>Cards_Title</th>
                                <th>Twitter</th>
                                <th>Instagram</th>
                                <th>Facebook</th>
                                <th>Linkedin</th>
                                <th>Email_id</th>
                                <th>Googlemap</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="image-cell">
                                    <div class="image">
                                        <img src="https://avatars.dicebear.com/v2/initials/rebecca-bauch.svg"
                                            class="rounded-full">
                                    </div>
                                </td>
                                <td data-label="Name">Rebecca Bauch</td>
                                <td data-label="Company">Daugherty-Daniel</td>
                                <td data-label="City">South Cory</td>
                                <td data-label="Progress" class="progress-cell">
                                    <progress max="100" value="79">79</progress>
                                </td>
                                <td data-label="Created">
                                    <small class="text-gray-500" title="Oct 25, 2021">Oct 25, 2021</small>
                                </td>
                                <td class="actions-cell">
                                    <div class="buttons right nowrap">
                                        <button class="button small green --jb-modal" data-target="sample-modal-2"
                                            type="button">
                                            <span class="icon"><i class="mdi mdi-eye"></i></span>
                                        </button>
                                        <button class="button small red --jb-modal" data-target="sample-modal"
                                            type="button">
                                            <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="table-pagination">
                        <div class="flex items-center justify-between">
                            <div class="buttons">
                                <button type="button" class="button active">1</button>
                                <button type="button" class="button">2</button>
                                <button type="button" class="button">3</button>
                            </div>
                            <small>Page 1 of 3</small>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Scripts below are for demo only -->
    <script type="text/javascript" src="{{ asset('backend/main.min.js') }}"></script>
    <!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">
</x-app-layout>
