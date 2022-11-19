<aside class="aside is-placed-left is-expanded">
    <div class="aside-tools">
        <div>
            Neopolis<b class="font-black"> Admin</b>
        </div>
    </div>
    <div class="menu is-menu-main">
        <ul class="menu-list">
            <li class="active">
                <a href="">
                    <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
                    <span class="menu-item-label">Dashboard</span>
                </a>
            </li>
        </ul>
        <ul class="menu-list">
            <li>
                <a href="{{ route('admin.home') }}">
                    <span class="icon"><i class="mdi mdi-hospital-building"></i></span>
                    <span class="menu-item-label">Home</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.about') }}">
                    <span class="icon"><i class="mdi mdi-information"></i></span>
                    <span class="menu-item-label">About</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.service') }}">
                    <span class="icon"><i class="mdi mdi-toolbox-outline"></i></span>
                    <span class="menu-item-label">Services</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.doctor') }}">
                    <span class="icon"><i class="mdi mdi-doctor"></i></span>
                    <span class="menu-item-label">Doctors</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.gallery') }}">
                    <span class="icon"><i class="mdi mdi-plus-box-multiple"></i></span>
                    <span class="menu-item-label">Gallery</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.contact') }}">
                    <span class="icon"><i class="mdi mdi-account-box"></i></span>
                    <span class="menu-item-label">Contact Us</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.bookappointment') }}">
                    <span class="icon"><i class="mdi mdi-bookmark-plus-outline"></i></span>
                    <span class="menu-item-label">Book Appointment</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
