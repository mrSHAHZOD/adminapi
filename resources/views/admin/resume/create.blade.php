<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Otika - Admin Dashboard Template</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="/admin/assets/css/app.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="/admin/assets/css/style.css">
    <link rel="stylesheet" href="/admin/assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="/admin/assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='/admin/assets/img/favicon.ico' />
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar sticky">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn"><i
                                    data-feather="align-justify"></i></a></li>
                        <li><a href="#" class="nav-link nav-link-lg fullscreen-btn"><i
                                    data-feather="maximize"></i></a></li>
                        <li>
                            <form class="form-inline mr-auto">
                                <div class="search-element">
                                    <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                                        data-width="200">
                                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user"><img alt="image"
                                src="/admin/assets/img/user.png" class="user-img-radious-style"> <span
                                class="d-sm-none d-lg-inline-block"></span></a>
                        <div class="dropdown-menu dropdown-menu-right pullDown">
                            <div class="dropdown-title">Hello Sarah Smith</div>
                            <a href="profile.html" class="dropdown-item has-icon"><i class="far fa-user"></i>
                                Profile</a>
                            <div class="dropdown-divider"></div>
                            <a href="auth-login.html" class="dropdown-item has-icon text-danger"><i
                                    class="fas fa-sign-out-alt"></i> Logout</a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="/"> <img alt="image" src="/admin/assets/img/logo.png" class="header-logo" />
                            <span class="logo-name">Otika</span>
                        </a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="dropdown">
                            <a href="/" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
                        </li>
                        <li class="dropdown @yield('team')">
                            <a href="{{ route('admin.team.index') }}"><i
                                    data-feather="briefcase"></i><span>Jamoa</span></a>
                        </li>
                        <li class="dropdown @yield('news')">
                            <a href="{{ route('admin.news.index') }}"><i
                                    data-feather="briefcase"></i><span>Yangiliklar</span></a>
                        </li>
                        <li class="dropdown @yield('contact')">
                            <a href="{{ route('admin.contact.index') }}"><i
                                    data-feather="briefcase"></i><span>Aloqa</span></a>
                        </li>
                        <li class="dropdown @yield('resume')">
                            <a href="{{ route('admin.resume.index') }}"><i
                                    data-feather="briefcase"></i><span>Resume</span></a>
                        </li>
                    </ul>
                </aside>
            </div>
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-body">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-10">
                                <div class="card">
                                    <div class="card-body">
                                        @section('content')
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <strong>Whoops!</strong> There were some problems with your
                                                    input.<br><br>
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            <!-- MAIN -->
                                            <main>
                                                <div class="table-data">
                                                    <div class="order">
                                                        <div class="head">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h3>Yangilik qo'shish</h3>
                                                                    <a style="margin-left: 65%"
                                                                        href="{{ route('admin.resume.index') }}"
                                                                        class="btn btn-primary">Qaytish</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <form class="create__inputs"
                                                            action="{{ route('admin.resume.store') }}" method="POST"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <strong> ISM :</strong>
                                                            <input type="text" name="name"
                                                                value="{{ old('name') }}" class="form-control">
                                                            <strong> Familya :</strong>
                                                            <input type="text" name="surname"
                                                                value="{{ old('surname') }}" class="form-control">
                                                            <strong> Otasining ismi :</strong>
                                                            <input type="text" name="patronymic"
                                                                value="{{ old('patronymic') }}" class="form-control">

                                                            {{-- qo`shimcha --}}
                                                            <strong> Yoshi :</strong>
                                                            <input type="text" name="age"
                                                                value="{{ old('age') }}" class="form-control">
                                                            <strong> Millati :</strong>
                                                            <input type="text" name="nationality"
                                                                value="{{ old('nationality') }}" class="form-control">
                                                            <strong> Yashah manzili :</strong>
                                                            <input type="text" name="Address"
                                                                value="{{ old('Address') }}" class="form-control">

                                                            <strong> til bilish darajasi :</strong>
                                                            <input type="text" name="level"
                                                                value="{{ old('level') }}" class="form-control">

                                                            <strong> Qoshimcha til bilish darajasi :</strong>
                                                            <input type="text" name="level2"
                                                                value="{{ old('level2') }}" class="form-control">

                                                            <strong> Telefoni :</strong>
                                                            <input type="text" name="phone"
                                                                value="{{ old('phone') }}" class="form-control">
                                                            <strong> Email :</strong>
                                                            <input type="text" name="email"
                                                                value="{{ old('email') }}" class="form-control">
                                                            <div class="form-group">
                                                                <label>Mutaxasislik</label>
                                                                <label for="task">Mutaxasislik</label>
                                                                <select name="task" id="task"
                                                                    value="{{ old('task') }}" class="form-control"
                                                                    onchange="checkOtherOption()">
                                                                    <option value="1">Xaydovchilik xizmati
                                                                    </option>
                                                                    <option value="2">Kuryerlik xizmati</option>
                                                                    <option value="3">Metallurgiya
                                                                        sohasi</option>
                                                                    <option value="4">Enagalik xizmati
                                                                    </option>
                                                                    <option value="5">Oshpazlik xizmati</option>
                                                                    <option value="6">IT sohasi mutahassisi
                                                                    </option>
                                                                    <option value="7">Qurilish xizmati</option>
                                                                    <option value="8">Temiryo'l qurilishi
                                                                    </option>
                                                                    <option value="9">Santexnik</option>
                                                                    <option value="10">Tekistil sohasi
                                                                    </option>
                                                                    <option value="11">Kosmetalogiya</option>
                                                                    <option value="12">Savdo sohasi</option>
                                                                    <option value="13">Umumiy
                                                                        ovqatlanish, Gastranomiya
                                                                    </option>
                                                                    <option value="14">Turizim sohasi
                                                                    </option>
                                                                    <option value="15">Qishloq xo'jaligi
                                                                        sohasi
                                                                    </option>
                                                                    <option value="16">
                                                                        O'rta darajadagi tibbiyot
                                                                        xodimlari</option>
                                                                    <option value="17">Elektrik</option>
                                                                    <option value="18">others</option>

                                                                </select>
                                                            </div>
                                                            <!-- If 'others' option is selected, display additional information -->
                                                            <div id="otherSpecialty" style="display: none;">
                                                                <label>Qoshimcha mutaxasislik:</label>
                                                                <input type="text" name="specialty"
                                                                    value="{{ old('specialty') }}" class="form-control">
                                                            </div>

                                                            <strong> Ma'lumot :</strong>
                                                            <textarea class="ckeditor form-control" name="html_code" value="{{ old('html_code') }}">{{ old('html_code') }}</textarea>
                                                            @error('html_code')
                                                                {{ $message }}
                                                            @enderror
                                                            <br>


                                                            <!-- If 'others' option is selected, display additional information -->
                                                            <div id="otherSpecialty" style="display: none;">
                                                                <label>Qoshimcha mutaxasislik:</label>
                                                                <input type="text" name="specialty"
                                                                    value="{{ old('specialty') }}" class="form-control">
                                                            </div>
                                                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                                                            <strong> Ish faoliyatidagi rasim:</strong>
                                                            <input type="file" name="imge"
                                                                class="form-control"><br>

                                                            <strong> Rasm(png yoki jpg) :</strong>
                                                            <input type="file" name="img"
                                                                class="form-control"><br>

                                                            <input type="submit" value="Qo`shish"
                                                                class="btn btn-primary"
                                                                style="position:absolute; right:50;">

                                                        </form>
                                                        <br>
                                                        <br>
                                                    </div>

                                                </div>
                                            </main>
                                            <!-- MAIN -->
                                            <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
                                            <script type="text/javascript">
                                                $(document).ready(function() {
                                                    $('.ckeditor').ckeditor();
                                                });

                                                function checkOtherOption() {
                                                    var taskSelect = document.getElementById("task");
                                                    var otherSpecialtyDiv = document.getElementById("otherSpecialty");
                                                    if (taskSelect.value == "18") {
                                                        otherSpecialtyDiv.style.display = "block";
                                                    } else {
                                                        otherSpecialtyDiv.style.display = "none";
                                                    }
                                                }
                                            </script>
                                        </div>

                                    </div>

                                </div>
                            </div>
                    </section>
                    <div class="settingSidebar">
                        <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
                        </a>
                        <div class="settingSidebar-body ps-container ps-theme-default">
                            <div class=" fade show active">
                                <div class="setting-panel-header">Setting Panel
                                </div>
                                <div class="p-15 border-bottom">
                                    <h6 class="font-medium m-b-10">Select Layout</h6>
                                    <div class="selectgroup layout-color w-50">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="value" value="1"
                                                class="selectgroup-input-radio select-layout" checked>
                                            <span class="selectgroup-button">Light</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="value" value="2"
                                                class="selectgroup-input-radio select-layout">
                                            <span class="selectgroup-button">Dark</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="p-15 border-bottom">
                                    <h6 class="font-medium m-b-10">Sidebar Color</h6>
                                    <div class="selectgroup selectgroup-pills sidebar-color">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="icon-input" value="1"
                                                class="selectgroup-input select-sidebar">
                                            <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                                data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="icon-input" value="2"
                                                class="selectgroup-input select-sidebar" checked>
                                            <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                                data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="p-15 border-bottom">
                                    <h6 class="font-medium m-b-10">Color Theme</h6>
                                    <div class="theme-setting-options">
                                        <ul class="choose-theme list-unstyled mb-0">
                                            <li title="white" class="active">
                                                <div class="white"></div>
                                            </li>
                                            <li title="cyan">
                                                <div class="cyan"></div>
                                            </li>
                                            <li title="black">
                                                <div class="black"></div>
                                            </li>
                                            <li title="purple">
                                                <div class="purple"></div>
                                            </li>
                                            <li title="orange">
                                                <div class="orange"></div>
                                            </li>
                                            <li title="green">
                                                <div class="green"></div>
                                            </li>
                                            <li title="red">
                                                <div class="red"></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-15 border-bottom">
                                    <div class="theme-setting-options">
                                        <label class="m-b-0">
                                            <input type="checkbox" name="custom-switch-checkbox"
                                                class="custom-switch-input" id="mini_sidebar_setting">
                                            <span class="custom-switch-indicator"></span>
                                            <span class="control-label p-l-10">Mini Sidebar</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="p-15 border-bottom">
                                    <div class="theme-setting-options">
                                        <label class="m-b-0">
                                            <input type="checkbox" name="custom-switch-checkbox"
                                                class="custom-switch-input" id="sticky_header_setting">
                                            <span class="custom-switch-indicator"></span>
                                            <span class="control-label p-l-10">Sticky Header</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                                    <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                                        <i class="fas fa-undo"></i> Restore Default
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="main-footer">
                    <div class="footer-left">
                        <a href="templateshub.net">Templateshub</a></a>
                    </div>
                    <div class="footer-right">
                    </div>
                </footer>
            </div>
        </div>
        <!-- General JS Scripts -->
        <script src="/admin/assets/js/app.min.js"></script>
        <!-- JS Libraies -->
        <!-- Page Specific JS File -->
        <!-- Template JS File -->
        <script src="/admin/assets/js/scripts.js"></script>
        <!-- Custom JS File -->
        <script src="/admin/assets/js/custom.js"></script>
    </body>


    <!-- basic-form.html  21 Nov 2019 03:54:41 GMT -->

    </html>
