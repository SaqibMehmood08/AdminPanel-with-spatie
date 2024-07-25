<!-- Page Header Start-->
<div class="page-header">
    <div class="header-wrapper row m-0" style="background-color: #FF7700;" >

        <div class="col-auto p-0">
            <form class="form-inline search-full" action="#" method="get">
                <div class="form-group w-100">
                    <div class="Typeahead Typeahead--twitterUsers">
                        <div class="u-posRelative">
                            <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                                placeholder="Search Riho .." name="q" title="" autofocus>
                            <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...
                                </span></div><i class="close-search" data-feather="x"></i>
                        </div>
                        <div class="Typeahead-menu"> </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="header-logo-wrapper col-auto p-0 ms-auto">
            <div class="logo-wrapper"> <a href="index.html"><img class="img-fluid for-light"
                        src="../assets/images/logo/logo_dark.png" alt="logo-light"><img class="img-fluid for-dark"
                        src="../assets/images/logo/logo.png" alt="logo-dark"></a></div>
            <div class="toggle-sidebar"> <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
            </div>
        </div>

        <div class="nav-right col-auto p-0 ms-auto">
            <ul class="nav-menus">
                <li class="d-md-block d-none ">
                    <div class="form search-form mb-0">
                        <div class="input-group"><span class="input-icon">
                                <svg>
                                    <use href="{{ asset('admin/assets/svg/icon-sprite.svg#search-header') }}"></use>
                                </svg>
                                <input class="w-100" type="search" placeholder="Search"></span></div>
                    </div>
                </li>
                <li class="d-md-none d-block">
                    <li>
                        <div class="mode"><i class="moon" data-feather="moon"> </i></div>
                    </li>

                    <li class="profile-nav onhover-dropdown">
                        <div class="media profile-media"><img class="b-r-10" src="{{ asset('admin/assets/images/dashboard/profile.png') }}"
                                alt="">
                            <div class="media-body d-xxl-block d-none box-col-none">
                                <div class="d-flex align-items-center gap-2"> <span>Alex Mora </span><i
                                        class="middle fa fa-angle-down"> </i></div>
                                <p class="mb-0 font-roboto">Admin</p>
                            </div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div">
                            <li><a href="user-profile.html"><i data-feather="user"></i><span>My Profile</span></a></li>
                            <li><a href="letter-box.html"><i data-feather="mail"></i><span>Inbox</span></a></li>
                            <li> <a href="edit-profile.html"> <i data-feather="settings"></i><span>Settings</span></a></li>
                            <li><a class="btn btn-pill btn-outline-primary btn-sm" href="{{ route('logout') }}">Log Out</a>
                            </li>
                        </ul>
                    </li>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Page Header Ends-->
