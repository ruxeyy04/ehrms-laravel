    <!-- Header -->
    <header class="fx-header">
        <div class="container-fluid">
            <div class="fx-header-items">
                <div class="left-header">
                    <a href="javascript:void(0)" class="fx-toggle-sidebar">
                        <span class="outer-ring">
                            <span class="inner-ring"></span>
                        </span>
                    </a>
                    <div class="header-search-box">
                        <div class="header-search-drop">
                            <a href="javascript:void(0)" class="open-search"><i class="ri-search-line"></i></a>
                            <form class="fx-search">
                                <input class="search-input" type="text" placeholder="Search..." />
                                <a href="javascript:void(0)" class="search-btn"><i class="ri-search-line"></i>
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="right-header">
                    <div class="fx-right-tool birthday">
                        <div class="fx-hover-drop">
                            <div class="fx-hover-tool">
                                <i class="ri-cake-2-line"></i>
                            </div>
                            <div class="fx-hover-drop-panel right birthday">
                                <h6 class="title">Today's Birthday</h6>
                                <ul>
                                    @foreach ($todaysBirthdays as $user)
                                        <li class="mb-2">
                                            <a href="javascript:void(0)">
                                                <img class="user-photo rounded-circle"
                                                    src="{{ $user->profile_img == 'defaultimg.jpg' ? '/storage/profile_images/defaultimg.jpg' : '/storage/profile_images/' . $user->profile_img }}"
                                                    alt="User Photo" style="width: 25%;">
                                                <span class="user-name"
                                                    style="margin-left: 10px;">{{ $user->first_name }}
                                                    {{ $user->last_name }}</span>
                                                <!-- Add margin-left -->
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>


                        </div>
                    </div>
                    <div class="fx-right-tool display-screen">
                        <a class="fx-screen full" href="javascript:void(0)"><i class="ri-fullscreen-line"></i></a>
                        <a class="fx-screen reset" href="javascript:void(0)"><i class="ri-fullscreen-exit-line"></i></a>
                    </div>
                    <div class="fx-right-tool">
                        <a class="fx-notify" href="javascript:void(0)">
                            <i class="ri-notification-2-line"></i>
                            {{-- <span class="label"></span> --}}
                        </a>
                    </div>
                    <div class="fx-right-tool display-dark">
                        <a class="fx-mode dark" href="javascript:void(0)"><i class="ri-moon-clear-line"></i></a>
                        <a class="fx-mode light" href="javascript:void(0)"><i class="ri-sun-line"></i></a>
                    </div>
                    <div class="fx-right-tool fx-user-drop">
                        <div class="fx-hover-drop">
                            <div class="fx-hover-tool">
                                <img class="user"
                                    src="{{ Auth::user()->profile_img == 'defaultimg.jpg' ? '/storage/profile_images/defaultimg.jpg' : '/storage/profile_images/' . Auth::user()->profile_img }}"
                                    alt="user" />
                            </div>
                            <div class="fx-hover-drop-panel right">
                                <div class="details">
                                    <h6>@fullName</h6>
                                    <p>{{ Auth::user()->deped_email }}</p>
                                </div>
                                <ul class="border-top">
                                    @if (Route::is('psds.*'))
                                        <!-- PSDS Links -->
                                        <li><a id="profile-link" href="{{ route('psds.account') }}">Profile</a></li>
                                        <li><a id="settings-link" href="{{ route('psds.settings') }}">Settings</a></li>
                                    @elseif (Route::is('admin.*'))
                                        <!-- Admin Links -->
                                        <li><a id="profile-link" href="{{ route('admin.account') }}">Profile</a></li>
                                        <li><a id="settings-link" href="{{ route('admin.settings') }}">Settings</a></li>
                                    @elseif (Route::is('employee.*'))
                                        <!-- Employee Links -->
                                        <li><a id="profile-link" href="{{ route('employee.account') }}">Profile</a></li>
                                        <li><a id="settings-link" href="{{ route('employee.settings') }}">Settings</a></li>
                                    @endif

                                    {{-- <li><a href="#!">Help</a></li>
                                    <li><a href="#!">Messages</a></li> --}}
                                </ul>

                                <ul class="border-top">
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a id="logout-link" href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); this.closest('form').submit();"><i
                                                    class="ri-logout-circle-r-line"></i>{{ __('Logout') }}</a>

                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
