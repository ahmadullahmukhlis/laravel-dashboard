<!--begin::Navbar-->
<div class="app-navbar flex-shrink-0">
    <!--begin::Search-->
    <div class="app-navbar-item ms-md-3 ms-1">
        <!--begin::Menu wrapper-->
        <div id="search-icon"
            class="btn btn-icon btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
            data-bs-toggle="modal" data-bs-target="#settingSearchModal">
            <i class="ki-duotone ki-magnifier fs-2"><span class="path1"></span><span class="path2"></span></i>
        </div>
        <!--end::Menu wrapper-->
    </div>
    <!--end::Search-->



    <!--begin::Notifications-->
    <div class="app-navbar-item ms-md-3 ms-1">
        <!--begin::Menu- wrapper-->
        <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px position-relativex"
            data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
            data-kt-menu-placement="bottom-end" id="kt_menu_item_wow">
            <i class="ki-duotone ki-notification-on fs-2 fs-lg-1 text-dark"><span class="path1"></span><span
                    class="path2"></span><span class="path3"></span><span class="path4"></span><span
                    class="path5"></span></i>
            <span class="notifications-count badge rounded-pill bg-primary text-white">

            </span>
        </div>

        <!--begin::Menu-->
        <div class="menu menu-sub menu-sub-dropdown menu-column w-400px w-lg-475px" data-kt-menu="true"
            id="kt_menu_notifications">
            <!--begin::Heading-->
            <div class="d-flex flex-column bgi-no-repeat rounded-top"
                style="background-image:ur'); background-size: 100% auto;">
                <!--begin::Title-->
                <h3 class="fw-semibold mb-6 mt-10 px-9 text-white">
                    Notifications
                    <span class="fs-8 ps-3 opacity-75">
                        <span class="notifications-count"></span>
                        &nbsp;notifications
                    </span>
                </h3>
                <!--end::Title-->

                <!--begin::Tabs-->
                <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
                    <li class="nav-item">
                        <a class="nav-link opacity-state-100 active pb-4 text-white opacity-75" data-bs-toggle="tab"
                            href="#kt_topbar_notifications_1">Alerts&nbsp;&nbsp;<span
                                class="badge badge-light-info notifications-count"></span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link opacity-state-100 pb-4 text-white opacity-75" data-bs-toggle="tab"
                            href="#kt_topbar_notifications_2">Updates</a>
                    </li>
                </ul>
                <!--end::Tabs-->
            </div>
            <!--end::Heading-->

            <!--begin::Tab content-->
            <div class="tab-content">
                <!--begin::Tab panel-->
                <div class="tab-pane fade show active" id="kt_topbar_notifications_1" role="tabpanel">
                    <!--begin::Items-->
                    <div class="scroll-y mh-325px my-5 px-8" id="notifications-list">
                    </div>
                    <!--end::Items-->

                    <!--begin::View more-->
                    <div class="border-top py-3 text-center">
                        <a href=""
                            class="btn btn-color-gray-600 btn-active-color-primary">
                            View All
                            <i class="ki-duotone ki-arrow-right fs-5"><span class="path1"></span><span
                                    class="path2"></span></i> </button>

                    </div>
                    <!--end::View more-->
                </div>
                <!--end::Tab panel-->

                <!--begin::Tab panel-->
                <div class="tab-pane fade" id="kt_topbar_notifications_2" role="tabpane2">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column px-9">
                        <!--begin::Section-->
                        <div class="pb-0 pt-10">
                            <!--begin::Title-->
                            <h3 class="text-dark fw-bold text-center">
                                System Updates Here
                            </h3>
                            <!--end::Title-->

                            <!--begin::Text-->
                            <div class="fw-semibold pt-1 text-center text-gray-600">
                                Outlines keep you honest. They stoping you from amazing poorly about drive
                            </div>
                            <!--end::Text-->

                            <!--begin::Action-->
                            <div class="mb-9 mt-5 text-center">

                            </div>
                            <!--end::Action-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Illustration-->
                        <div class="px-4 text-center">

                        </div>
                        <!--end::Illustration-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Tab panel-->

                <!--begin::Tab panel-->
                <div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpane3">
                    <!--begin::Items-->
                    <div class="scroll-y mh-325px my-5 px-8">
                        <!--begin::Item-->
                        <div class="d-flex flex-stack py-4">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-2">
                                <!--begin::Code-->
                                <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                <!--end::Code-->

                                <!--begin::Title-->
                                <a href="#" class="text-hover-primary fw-semibold text-gray-800">New order</a>
                                <!--end::Title-->
                            </div>
                            <!--end::Section-->

                            <!--begin::Label-->
                            <span class="badge badge-light fs-8">Just now</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack py-4">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-2">
                                <!--begin::Code-->
                                <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                <!--end::Code-->

                                <!--begin::Title-->
                                <a href="#" class="text-hover-primary fw-semibold text-gray-800">New
                                    customer</a>
                                <!--end::Title-->
                            </div>
                            <!--end::Section-->

                            <!--begin::Label-->
                            <span class="badge badge-light fs-8">2 hrs</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack py-4">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-2">
                                <!--begin::Code-->
                                <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                <!--end::Code-->

                                <!--begin::Title-->
                                <a href="#" class="text-hover-primary fw-semibold text-gray-800">Payment
                                    process</a>
                                <!--end::Title-->
                            </div>
                            <!--end::Section-->

                            <!--begin::Label-->
                            <span class="badge badge-light fs-8">5 hrs</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack py-4">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-2">
                                <!--begin::Code-->
                                <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                <!--end::Code-->

                                <!--begin::Title-->
                                <a href="#" class="text-hover-primary fw-semibold text-gray-800">Search
                                    query</a>
                                <!--end::Title-->
                            </div>
                            <!--end::Section-->

                            <!--begin::Label-->
                            <span class="badge badge-light fs-8">2 days</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack py-4">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-2">
                                <!--begin::Code-->
                                <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                <!--end::Code-->

                                <!--begin::Title-->
                                <a href="#" class="text-hover-primary fw-semibold text-gray-800">API
                                    connection</a>
                                <!--end::Title-->
                            </div>
                            <!--end::Section-->

                            <!--begin::Label-->
                            <span class="badge badge-light fs-8">1 week</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack py-4">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-2">
                                <!--begin::Code-->
                                <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                <!--end::Code-->

                                <!--begin::Title-->
                                <a href="#" class="text-hover-primary fw-semibold text-gray-800">Database
                                    restore</a>
                                <!--end::Title-->
                            </div>
                            <!--end::Section-->

                            <!--begin::Label-->
                            <span class="badge badge-light fs-8">Mar 5</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack py-4">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-2">
                                <!--begin::Code-->
                                <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                <!--end::Code-->

                                <!--begin::Title-->
                                <a href="#" class="text-hover-primary fw-semibold text-gray-800">System
                                    update</a>
                                <!--end::Title-->
                            </div>
                            <!--end::Section-->

                            <!--begin::Label-->
                            <span class="badge badge-light fs-8">May 15</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack py-4">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-2">
                                <!--begin::Code-->
                                <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                <!--end::Code-->

                                <!--begin::Title-->
                                <a href="#" class="text-hover-primary fw-semibold text-gray-800">Server OS
                                    update</a>
                                <!--end::Title-->
                            </div>
                            <!--end::Section-->

                            <!--begin::Label-->
                            <span class="badge badge-light fs-8">Apr 3</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack py-4">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-2">
                                <!--begin::Code-->
                                <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                <!--end::Code-->

                                <!--begin::Title-->
                                <a href="#" class="text-hover-primary fw-semibold text-gray-800">API
                                    rollback</a>
                                <!--end::Title-->
                            </div>
                            <!--end::Section-->

                            <!--begin::Label-->
                            <span class="badge badge-light fs-8">Jun 30</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack py-4">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-2">
                                <!--begin::Code-->
                                <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                <!--end::Code-->

                                <!--begin::Title-->
                                <a href="#" class="text-hover-primary fw-semibold text-gray-800">Refund
                                    process</a>
                                <!--end::Title-->
                            </div>
                            <!--end::Section-->

                            <!--begin::Label-->
                            <span class="badge badge-light fs-8">Jul 10</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack py-4">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-2">
                                <!--begin::Code-->
                                <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                <!--end::Code-->

                                <!--begin::Title-->
                                <a href="#" class="text-hover-primary fw-semibold text-gray-800">Withdrawal
                                    process</a>
                                <!--end::Title-->
                            </div>
                            <!--end::Section-->

                            <!--begin::Label-->
                            <span class="badge badge-light fs-8">Sep 10</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack py-4">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-2">
                                <!--begin::Code-->
                                <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                <!--end::Code-->

                                <!--begin::Title-->
                                <a href="#" class="text-hover-primary fw-semibold text-gray-800">Mail tasks</a>
                                <!--end::Title-->
                            </div>
                            <!--end::Section-->

                            <!--begin::Label-->
                            <span class="badge badge-light fs-8">Dec 10</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Item-->

                    </div>
                    <!--end::Items-->

                    <!--begin::View more-->
                    <div class="border-top py-3 text-center">
                        <a href="#" class="btn btn-color-gray-600 btn-active-color-primary">
                            View All
                            <i class="ki-duotone ki-arrow-right fs-5"><span class="path1"></span><span
                                    class="path2"></span></i> </a>
                    </div>
                    <!--end::View more-->
                </div>
                <!--end::Tab panel-->
            </div>
            <!--end::Tab content-->
        </div>
        <!--end::Menu-->
        <!--end::Menu wrapper-->
    </div>
    <!--end::Notifications-->

    <!--begin::Chat-->
    <div class="app-navbar-item ms-md-3 ms-1">
        <!--begin::Menu wrapper-->
        <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px position-relative"
            id="kt_drawer_chat_toggle">
            <i class="ki-duotone ki-message-text-2 fs-2 fs-lg-1 text-dark"><span class="path1"></span><span
                    class="path2"></span><span class="path3"></span></i>
            <span
                class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle start-50 animation-blink top-0">
            </span>
        </div>
        <!--end::Menu wrapper-->
    </div>
    <!--end::Chat-->

    <!--begin::Theme mode-->
    <div class="app-navbar-item ms-md-3 ms-1">

        <!--begin::Menu toggle-->
        <a href="#"
            class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
            data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
            data-kt-menu-placement="bottom-end">
            <i class="ki-duotone ki-night-day theme-light-show fs-2 fs-lg-1 text-dark"><span
                    class="path1"></span><span class="path2"></span><span class="path3"></span><span
                    class="path4"></span><span class="path5"></span><span class="path6"></span><span
                    class="path7"></span><span class="path8"></span><span class="path9"></span><span
                    class="path10"></span></i> <i class="ki-duotone ki-moon theme-dark-show fs-2 fs-lg-1"><span
                    class="path1"></span><span class="path2"></span></i></a>
        <!--begin::Menu toggle-->

        <!--begin::Menu-->
        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold fs-base w-150px py-4"
            data-kt-menu="true" data-kt-element="theme-mode-menu">
            <!--begin::Menu item-->
            <div class="menu-item my-0 px-3">
                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                    <span class="menu-icon" data-kt-element="icon">
                        <i class="ki-duotone ki-night-day fs-2 text-dark"><span class="path1"></span><span
                                class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                class="path5"></span><span class="path6"></span><span class="path7"></span><span
                                class="path8"></span><span class="path9"></span><span class="path10"></span></i>
                    </span>
                    <span class="menu-title">
                        Light
                    </span>
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item my-0 px-3">
                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                    <span class="menu-icon" data-kt-element="icon">
                        <i class="ki-duotone ki-moon fs-2 text-dark"><span class="path1"></span><span
                                class="path2"></span></i> </span>
                    <span class="menu-title">
                        Dark
                    </span>
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item my-0 px-3">
                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                    <span class="menu-icon" data-kt-element="icon">
                        <i class="ki-duotone ki-screen fs-2 text-dark"><span class="path1"></span><span
                                class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                    </span>
                    <span class="menu-title">
                        System
                    </span>
                </a>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu-->
    </div>
    <!--end::Theme mode-->

    <!--begin::User menu-->
    <div class="app-navbar-item ms-md-3 ms-1" id="kt_header_user_menu_toggle">
        <!--begin::Menu wrapper-->
        <div class="symbol symbol-30px symbol-md-40px rounded-5 cursor-pointer"
            data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
            data-kt-menu-placement="bottom-end">
            @if (auth()->user()?->employee?->getImage())
                <img alt="Avatar" src="{{ auth()->user()->employee->getImage() }}" style="border-radius: 50%;" />
            @else
                <img alt="Default Avatar" src="{{ asset('media/avatars/blank.png') }}" style="border-radius: 50%;" />
            @endif
        </div>

        <!--begin::User account menu-->
        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold fs-6 w-275px py-4"
            data-kt-menu="true">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <div class="menu-content d-flex align-items-center px-3">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-50px me-5">

                    </div>
                    <!--end::Avatar-->

                    <!--begin::Username-->
                    <div class="d-flex flex-column">
                        <div class="fw-bold d-flex align-items-center fs-5">
                            {{ auth()->user()?->name }}
                        </div>

                        <p class="fw-semibold text-muted fs-7">{{ auth()->user()?->email }}</p>
                    </div>
                    <!--end::Username-->
                </div>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu separator-->
            <div class="separator my-2"></div>
            <!--end::Menu separator-->

            <!--begin::Menu item-->
            <div class="menu-item px-5">
                <a href=""
                    class="menu-link px-5">
                    My Profile
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-5">
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="menu-link px-5">
                    Sign Out
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
            <!--end::Menu item-->

        </div>
        <!--end::User account menu-->
        <!--end::Menu wrapper-->
    </div>
    <!--end::User menu-->

    <!--begin::Header menu toggle-->
    <div class="app-navbar-item d-lg-none me-n2 ms-2" title="Show header menu">
        <div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px" id="kt_app_header_menu_toggle">
            <i class="ki-duotone ki-element-4 fs-1"><span class="path1"></span><span class="path2"></span></i>
        </div>
    </div>
    <!--end::Header menu toggle-->
</div>
<!--end::Navbar-->
