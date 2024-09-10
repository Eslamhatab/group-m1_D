<aside id="sidebar" class="sidebar">
<ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-item">
        <a class="nav-link " href="{{ route('dashboard') }}">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
        </a>
        </li>
        <!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link " href="{{ route('home') }}">
                <i class="fa-solid fa-globe"></i>
                <span>Website</span>
            </a>
            </li>
            <!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#users" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="users" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="components-alerts.html">
                            <i class="fa-solid fa-user-tie fs-5"></i><span>Admin</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-accordion.html">
                            <i class="fa-brands fa-monero fs-5"></i><span>Moderator</span>
                        </a>
                    </li>

                    <li>
                        <a href="components-accordion.html">
                            <i class="fa-brands fa-cuttlefish fs-5"></i><span>Customer</span>
                        </a>
                    </li>
                    <li>
                            <a href="components-alerts.html">
                                <i class="fa-solid fa-address-book fs-5"></i><span>Index</span>
                            </a>
                        </li>
                        <li>
                            <a href="components-accordion.html">
                                <i class="fa-solid fa-square-plus fs-5"></i><span>Create</span>
                            </a>
                        </li>
                </ul>
            </li>

                {{-- Products  --}}
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#products" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="products" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="components-alerts.html">
                            <i class="fa-solid fa-user-tie fs-5"></i><span>Index</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-accordion.html">
                            <i class="fa-brands fa-monero fs-5"></i><span>Create</span>
                        </a>
                    </li>
                </ul>
            </li>


                {{--Sub  Category  --}}
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#subcategory" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Sub Categories</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="subcategory" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="components-alerts.html">
                                <i class="fa-solid fa-user-tie fs-5"></i><span>Index</span>
                            </a>
                        </li>
                        <li>
                            <a href="components-accordion.html">
                                <i class="fa-brands fa-monero fs-5"></i><span>Create</span>
                            </a>
                        </li>
                    </ul>
                </li>


                {{-- Category  --}}
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#category" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Categories</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="category" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ route('categories.index') }}">
                                <i class="fa-solid fa-user-tie fs-5"></i><span>Index</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('categories.create') }}">
                                <i class="fa-brands fa-monero fs-5"></i><span>Create</span>
                            </a>
                        </li>
                    </ul>
                </li>


    </ul>
</aside>
