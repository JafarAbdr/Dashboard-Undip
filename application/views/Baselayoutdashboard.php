<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- Title -->
        <title>Dashboard | Universitas Diponegoro ~The Excellent Research University~</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Dashboard Universitas Diponegoro" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />

        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="assets/plugins/materialize/css/materialize.min.css"/>
        <link href="assets/css/fonts.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/metrojs/MetroJs.min.css" rel="stylesheet">
        <link href="assets/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet">


        <!-- Theme Styles -->
        <link href="assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
        <div class="loader-bg"></div>
        <div class="loader">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-teal lighten-1">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mn-content fixed-sidebar">
            <header class="mn-header navbar-fixed">
                <nav class="cyan darken-1">
                    <div class="nav-wrapper row">
                        <section class="material-design-hamburger navigation-toggle">
                            <a href="javascript:void(0)" data-activates="slide-out" class="button-collapse show-on-large material-design-hamburger__icon">
                                <span class="material-design-hamburger__layer"></span>
                            </a>
                        </section>
                        <!-- <form class="left search col s6 hide-on-small-and-down">
                            <div class="input-field">
                                <input id="search" type="search" placeholder="Search" autocomplete="off">
                                <label for="search"><i class="material-icons search-icon">search</i></label>
                            </div>
                            <a href="javascript: void(0)" class="close-search"><i class="material-icons">close</i></a>
                        </form> -->
                        <!-- <div class="left">
                            <img src="assets/images/Undip.png" style="width : 40px;">
                        </div> -->
                        <div class="header-title col s6 m6">
                            <span class="chapter-title">DASHBOARD <a class="hide-on-small-and-down">Universitas Diponegoro</a></span>
                        </div>

                        <!-- <ul class="right col s9 m3 nav-right-menu">
                            <li><a href="javascript:void(0)" data-activates="chat-sidebar" class="chat-button show-on-large"><i class="material-icons">more_vert</i></a></li>
                            <li class="hide-on-small-and-down"><a href="javascript:void(0)" data-activates="dropdown1" class="dropdown-button dropdown-right show-on-large"><i class="material-icons">notifications_none</i><span class="badge">4</span></a></li>
                            <li class="hide-on-med-and-up"><a href="javascript:void(0)" class="search-toggle"><i class="material-icons">search</i></a></li>
                        </ul> -->

                        <ul id="dropdown1" class="dropdown-content notifications-dropdown">
                            <li class="notificatoins-dropdown-container">
                                <ul>
                                    <li class="notification-drop-title">Today</li>
                                    <li>
                                        <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle cyan"><i class="material-icons">done</i></div>
                                            <div class="notification-text"><p><b>Alan Grey</b> uploaded new theme</p><span>7 min ago</span></div>
                                        </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle deep-purple"><i class="material-icons">cached</i></div>
                                            <div class="notification-text"><p><b>Tom</b> updated status</p><span>14 min ago</span></div>
                                        </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle red"><i class="material-icons">delete</i></div>
                                            <div class="notification-text"><p><b>Amily Lee</b> deleted account</p><span>28 min ago</span></div>
                                        </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle cyan"><i class="material-icons">person_add</i></div>
                                            <div class="notification-text"><p><b>Tom Simpson</b> registered</p><span>2 hrs ago</span></div>
                                        </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle green"><i class="material-icons">file_upload</i></div>
                                            <div class="notification-text"><p>Finished uploading files</p><span>4 hrs ago</span></div>
                                        </div>
                                        </a>
                                    </li>
                                    <li class="notification-drop-title">Yestarday</li>
                                    <li>
                                        <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle green"><i class="material-icons">security</i></div>
                                            <div class="notification-text"><p>Security issues fixed</p><span>16 hrs ago</span></div>
                                        </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle indigo"><i class="material-icons">file_download</i></div>
                                            <div class="notification-text"><p>Finished downloading files</p><span>22 hrs ago</span></div>
                                        </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle cyan"><i class="material-icons">code</i></div>
                                            <div class="notification-text"><p>Code changes were saved</p><span>1 day ago</span></div>
                                        </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <div class="search-results">
                <div class="container search-container">
                    <div class="row">
                        <div class="col s12 search-head">
                            <div class="row">
                                <div class="col s12">
                                    <div class="left">
                                        <p class="search-results-title">Quick search results</p>
                                        <p class="search-filter left">
                                            <input type="checkbox" class="filled-in" id="filled-in-box" checked/>
                                            <label for="filled-in-box">Google search</label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="res-not-found">No results found</div>
                        </div>
                        <div class="col s12 m4 search-result-container">
                            <div class="card card-transparent">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <img src="assets/images/profile-image-1.png" alt="" class="circle responsive-img z-depth-1">
                                    </div>
                                    <div class="col s9">
                                        <span class="search-result-text">
                                            Search <span class="search-text search-result-highlight"></span><br><span class="secondary-search-text">Last active 2 days ago</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-transparent">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <img src="assets/images/profile-image-3.jpg" alt="" class="circle responsive-img z-depth-1">
                                    </div>
                                    <div class="col s9">
                                        <span class="search-result-text">
                                            News about <span class="search-text search-result-highlight"></span><br><span class="secondary-search-text">23 Blogs</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-transparent">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <img src="assets/images/profile-image.png" alt="" class="circle responsive-img z-depth-1">
                                    </div>
                                    <div class="col s9">
                                        <span class="search-result-text">
                                            Tom King (Works at <span class="search-text search-result-highlight"></span>)<br><span class="secondary-search-text">Avaible for freelance work</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m4 search-result-container">
                            <div class="card card-transparent ">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <span class="z-depth-1 circle search-circle indigo lighten-1">F</span>
                                    </div>
                                    <div class="col s9">
                                        <span class="search-result-text">
                                            <span class="search-text search-result-highlight"></span> on Facebook<br><span class="secondary-search-text"><a href="#">View website</a></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-transparent">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <span class="z-depth-1 circle search-circle light-blue lighten-1">T</span>
                                    </div>
                                    <div class="col s9">
                                        <span class="search-result-text">
                                            <span class="search-text search-result-highlight"></span> on Twitter<br><span class="secondary-search-text"><a href="#">View website</a></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-transparent">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <span class="z-depth-1 circle search-circle red darken-1">G</span>
                                    </div>
                                    <div class="col s9">
                                        <span class="search-result-text">
                                            Google+ <span class="search-text search-result-highlight"></span><br><span class="secondary-search-text"><a href="#">View website</a></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m4 search-result-container">
                            <div class="card card-transparent">
                                <div class="card-content first">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sunt in culpa qui<span class="search-text search-result-highlight"></span> quis.</p>
                                </div>
                                <div class="card-action">
                                    <span class="grey-text">Yesterday, 4:56 PM</span>
                                </div>
                            </div>
                            <div class="card card-transparent">
                                <div class="card-content">
                                    <p>Sunt in culpa qui <span class="search-text search-result-highlight"></span> officia deserunt mollit anim id est laborum. officia deserunt mollit anim id est laborum officia deserunt mollit anim</p>
                                </div>
                                <div class="card-action">
                                    <span class="grey-text">27 January 2016</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <aside id="chat-sidebar" class="side-nav white">
                <div class="side-nav-wrapper">
                    <div class="col s12">
                        <ul class="tabs tab-demo" style="width: 100%;">
                            <li class="tab col s3"><a href="#sidebar-chat-tab" class="active">chat</a></li>
                            <li class="tab col s3"><a href="#sidebar-more-tab">settings</a></li>
                        </ul>
                    </div>
                    <div id="sidebar-chat-tab" class="col s12 sidebar-messages right-sidebar-panel">
                        <p class="right-sidebar-heading">CHAT LIST</p>
                        <div class="chat-list">
                            <a href="javascript:void(0)" class="chat-message">
                                <div class="chat-item">
                                    <div class="chat-item-image">
                                        <img src="assets/images/profile-image.png" class="circle" alt="">
                                    </div>
                                    <div class="chat-item-info">
                                        <p class="chat-name">John Doe</p>
                                        <span class="chat-message">Hello</span>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0)" class="chat-message">
                                <div class="chat-item">
                                    <div class="chat-item-image">
                                        <img src="assets/images/profile-image-1.png" class="circle" alt="">
                                    </div>
                                    <div class="chat-item-info">
                                        <p class="chat-name">Tom Simpson</p>
                                        <span class="chat-message">How are you?</span>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0)" class="chat-message">
                                <div class="chat-item">
                                    <div class="chat-item-image">
                                        <img src="assets/images/profile-image-3.jpg" class="circle" alt="">
                                    </div>
                                    <div class="chat-item-info">
                                        <p class="chat-name">Alan Grey</p>
                                        <span class="chat-message">Call me later</span></div>
                                </div>
                            </a>
                            <a href="javascript:void(0)" class="chat-message">
                                <div class="chat-item">
                                    <div class="chat-item-image">
                                        <img src="assets/images/profile-image.png" class="circle" alt="">
                                    </div>
                                    <div class="chat-item-info">
                                        <p class="chat-name">Michael Fisher</p>
                                        <span class="chat-message">How's it going?</span>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0)" class="chat-message">
                                <div class="chat-item">
                                    <div class="chat-item-image">
                                        <img src="assets/images/profile-image-1.png" class="circle" alt="">
                                    </div>
                                    <div class="chat-item-info">
                                        <p class="chat-name">Amily Lee</p>
                                        <span class="chat-message">We're good</span>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0)" class="chat-message">
                                <div class="chat-item">
                                    <div class="chat-item-image">
                                        <img src="assets/images/profile-image.png" class="circle" alt="">
                                    </div>
                                    <div class="chat-item-info">
                                        <p class="chat-name">Sandra Smith</p>
                                        <span class="chat-message">See you later!</span>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0)" class="chat-message">
                                <div class="chat-item">
                                    <div class="chat-item-image">
                                        <img src="assets/images/profile-image-3.jpg" class="circle" alt="">
                                    </div>
                                    <div class="chat-item-info">
                                        <p class="chat-name">Sandra Smith</p>
                                        <span class="chat-message">Can we meet?</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="chat-sidebar-options">
                            <a href="#" class="left"><i class="material-icons">edit</i></a>
                            <a href="#" class="right"><i class="material-icons">settings</i></a>
                        </div>
                    </div>
                    <div id="sidebar-more-tab" class="col s12 sidebar-more right-sidebar-panel">
                        <p class="right-sidebar-heading">SYSTEM</p>
                        <div class="settings-list">
                            <div class="setting-item">
                                <div class="setting-text">Notifications</div>
                                <div class="setting-set">
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setting-item">
                                <div class="setting-text">Quick Results</div>
                                <div class="setting-set">
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setting-item">
                                <div class="setting-text">Auto Updates</div>
                                <div class="setting-set">
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox">
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="right-sidebar-heading">ACCOUNT</p>
                        <div class="settings-list">
                            <div class="setting-item">
                                <div class="setting-text">Offline Mode</div>
                                <div class="setting-set">
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox">
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setting-item">
                                <div class="setting-text">Location</div>
                                <div class="setting-set">
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox">
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setting-item">
                                <div class="setting-text">Show Offline Users</div>
                                <div class="setting-set">
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox">
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setting-item">
                                <div class="setting-text">Save History</div>
                                <div class="setting-set">
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox">
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <aside id="chat-messages" class="side-nav white">
                <p class="sidebar-chat-name">Tom Simpson<a href="#" data-activates="chat-messages" class="chat-message-link"><i class="material-icons">keyboard_arrow_right</i></a></p>
                <div class="messages-container">
                    <div class="message-wrapper them">
                        <div class="circle-wrapper"><img src="assets/images/profile-image-1.png" class="circle" alt=""></div>
                        <div class="text-wrapper">Lorem Ipsum</div>
                    </div>
                    <div class="message-wrapper me">
                        <div class="circle-wrapper"><img src="assets/images/profile-image-3.jpg" class="circle" alt=""></div>
                        <div class="text-wrapper">Integer in faucibus diam?</div>
                    </div>
                    <div class="message-wrapper them">
                        <div class="circle-wrapper"><img src="assets/images/profile-image-1.png" class="circle" alt=""></div>
                        <div class="text-wrapper">Vivamus quis neque volutpat, hendrerit justo vitae, suscipit dui</div>
                    </div>
                    <div class="message-wrapper me">
                        <div class="circle-wrapper"><img src="assets/images/profile-image-3.jpg" class="circle" alt=""></div>
                        <div class="text-wrapper">Suspendisse condimentum tortor et lorem pretium</div>
                    </div>
                    <div class="message-wrapper them">
                        <div class="circle-wrapper"><img src="assets/images/profile-image-1.png" class="circle" alt=""></div>
                        <div class="text-wrapper">dolore eu fugiat nulla pariatur</div>
                    </div>
                    <div class="message-wrapper me">
                        <div class="circle-wrapper"><img src="assets/images/profile-image-3.jpg" class="circle" alt=""></div>
                        <div class="text-wrapper">Duis maximus leo eget massa porta</div>
                    </div>
                </div>
                <div class="message-compose-box">
                    <div class="input-field">
                        <input placeholder="Write message" id="message_compose" type="text">
                    </div>
                </div>
            </aside>
            <aside id="slide-out" class="side-nav white fixed">
                <div class="side-nav-wrapper">
                    <div class="sidebar-profile">
                        <div style="text-align : center; background-color : rgba(255,255,255,0.9); padding-top : 20px; padding-bottom : 20px;">
                            <a style="height : 100px; " href="http://undip.ac.id/?lang=en"><img src="assets/images/Undip.png" style="width 100px; height : 100px;" alt=""></a>
                        </div>
                        <div style="text-align : center;">
                            <!-- <p>Dashboard Universitas Diponegoro</p>
                            <a class="account-settings-link">

                                <span>david@gmail.com<i class="material-icons right">arrow_drop_down</i></span>
                            </a> -->
                        </div>
                    </div>
                    <!-- <div class="sidebar-account-settings">
                        <ul>
                            <li class="no-padding">
                                <a class="waves-effect waves-grey"><i class="material-icons">mail_outline</i>Inbox</a>
                            </li>
                            <li class="no-padding">
                                <a class="waves-effect waves-grey"><i class="material-icons">star_border</i>Starred<span class="new badge">18</span></a>
                            </li>
                            <li class="no-padding">
                                <a class="waves-effect waves-grey"><i class="material-icons">done</i>Sent Mail</a>
                            </li>
                            <li class="no-padding">
                                <a class="waves-effect waves-grey"><i class="material-icons">history</i>History<span class="new grey lighten-1 badge">3 new</span></a>
                            </li>
                            <li class="divider"></li>
                            <li class="no-padding">
                                <a class="waves-effect waves-grey"><i class="material-icons">exit_to_app</i>Sign Out</a>
                            </li>
                        </ul>
                    </div> -->
                <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
                    <!-- <li class="no-padding"><a class="waves-effect waves-grey active" href="index.html"><i class="material-icons">settings_input_svideo</i>Dashboard</a></li> -->
                    <li class="no-padding active">
                        <a class="collapsible-header waves-effect waves-grey active"><i class="material-icons">dashboard</i>Akademik<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body" style="display:block;">
                            <ul>
                                <li class="font-me-sm"><a class="active-page" infovalue="jmlpem">Jumlah Peminat</a></li>
                                <li class="font-me-sm"><a infovalue="penbid">Penerima Bidikmisi</a></li>
                                <li class="font-me-sm"><a infovalue="mahasi">Mahasiswa Asing</a></li>
                                <li class="font-me-sm"><a infovalue="rasket">Rasio Ketetatan</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="no-padding">
                        <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">dashboard</i>Program Studi<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li class="font-me-sm"><a infovalue="prbeje">Profil Berdasarkan Jenjang</a></li>
                                <li class="font-me-sm"><a infovalue="akprst">Akreditasi Program Studi</a></li>
                                <li class="font-me-sm"><a infovalue="kuprst">Kurikulum Program Studi</a></li>
                                <li class="font-me-sm"><a infovalue="damedo">Data Mengajar Dosen</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="no-padding">
                        <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">dashboard</i>Sumber Daya Manusia<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul >
                                <li class="font-me-sm"><a infovalue="prstun">Profil Staff Undip</a></li>
                                <li class="font-me-sm"><a infovalue="sptddo">Sertifikasi Pelatihan Tendik dan Dosen</a></li>
                                <li class="font-me-sm"><a infovalue="dtmjab">Dosen Tetap Menurut Jabatan</a></li>
                                <li class="font-me-sm"><a infovalue="dtmpdg">Dosen Tetap Menurut Pangkat dan Golongan</a></li>
                                <li class="font-me-sm"><a infovalue="dtmidp">Dosen Tetap Menurut Ijazah dan Pendidikan</a></li>
                                <li class="font-me-sm"><a infovalue="dtytbe">Dosen Tetap yang Tugas Belajar</a></li>
                                <li class="font-me-sm"><a infovalue="dtyltb">Dosen Tetap yang Lulus Tugas Belajar</a></li>
                                <li class="font-me-sm"><a infovalue="jugube">Jumlah Guru Besar</a></li>
                                <li class="font-me-sm"><a infovalue="rjddma">Rasio Jumlah Dosen dengan Mahasiswa</a></li>
                                <li class="font-me-sm"><a infovalue="jd5tte">Jumlah Dosen 5 Tahun Terakhir</a></li>
                                <li class="font-me-sm"><a infovalue="judote">Jumlah Dosen Tetap</a></li>
                                <li class="font-me-sm"><a infovalue="jdttet">Jumlah Dosen Tidak Tetap</a></li>
                                <li class="font-me-sm"><a infovalue="jtpmgo">Jumlah Tendik PNS Menurut Golongan</a></li>
                                <li class="font-me-sm"><a infovalue="jtpmpe">Jumlah Tendik Pramubakti Menurut Pendidikan</a></li>
                                <li class="font-me-sm"><a infovalue="jtpmpe">Jumlah Tendik PNS Menurut Pendidikan</a></li>
                                <li class="font-me-sm"><a infovalue="jtpmpa">Jumlah Tendik PNS Menurut Pangkat</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="no-padding">
                        <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">dashboard</i>Data UKT<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li class="font-me-sm"><a  infovalue="berkat">Berdasarkan Kategori</a></li>
                                <li class="font-me-sm"><a  infovalue="berseb">Berdasarkan Sebaran</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="no-padding">
                        <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">dashboard</i>Data Mahasiswa<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li class="font-me-sm"><a infovalue="mahakt">Mahasiswa Aktif</a></li>
                                <li class="font-me-sm"><a infovalue="mdripk">Mahasiswa Berdasarkan Rerata IPK</a></li>
                                <li class="font-me-sm"><a infovalue="mbkipk">Mahasiswa Berdasarkan Kategori IPK</a></li>
                                <li class="font-me-sm"><a infovalue="sbjkel">Sebaran Berdasarkan Jenis Kelamin</a></li>
                                <li class="font-me-sm"><a infovalue="sbpasa">Sebaran Berdasarkan Provinsi Asal</a></li>
                                <li class="font-me-sm"><a infovalue="premah">Prestasi Mahasiswa</a></li>
                                <li class="font-me-sm"><a infovalue="datbea">Data Beasiswa</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="no-padding">
                        <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">dashboard</i>Data Lulusan<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li class="font-me-sm"><a infovalue="prluun">Profil Lulusan Undip</a></li>
                                <li class="font-me-sm"><a infovalue="beripk">Berdasarkan IPK</a></li>
                                <li class="font-me-sm"><a infovalue="bemast">Berdasarkan Masa Studi</a></li>
                                <li class="font-me-sm"><a infovalue="trastu">Tracer Study</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="no-padding">
                        <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">dashboard</i>Data Alumni<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li class="font-me-sm"><a infovalue="pralun">Profil Alumni Undip</a></li>
                                <li class="font-me-sm"><a infovalue="bedaas">Berdasarkan Daerah Asal</a></li>
                                <li class="font-me-sm"><a infovalue="bebipe">Berdasarkan Bidang Pekerjaan</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="no-padding">
                        <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">dashboard</i>Penelitian dan Pengabdian<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li class="font-me-sm"><a infovalue="tersco">Terindeks Scopus</a></li>
                                <li class="font-me-sm"><a infovalue="naster">Nasional Terakreditasi</a></li>
                                <li class="font-me-sm"><a infovalue="datpus">Data Pustaka</a></li>
                                <li class="font-me-sm"><a infovalue="jujupe">Jumlah Judul Penelitian</a></li>
                                <li class="font-me-sm"><a infovalue="jk3tte">Jumlah Karya 3 Tahun Terakhir</a></li>
                                <li class="font-me-sm"><a infovalue="pekado">Penghargaan Karya Dosen</a></li>
                                <li class="font-me-sm"><a infovalue="jppmas">Jumlah Pengabdian Pada Masyarakat</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="no-padding">
                        <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">dashboard</i>Aset<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li class="font-me-sm"><a infovalue="batibe">Barang Tidak Bergerak</a></li>
                                <li class="font-me-sm"><a infovalue="barber">Barang Bergerak</a></li>
                                <li class="font-me-sm"><a infovalue="hidtan">Hewan, Ikan dan Tanaman</a></li>
                                <li class="font-me-sm"><a infovalue="persed">Persediaan</a></li>
                                <li class="font-me-sm"><a infovalue="kodape">Konstruksi Dalam Pengerjaan</a></li>
                                <li class="font-me-sm"><a infovalue="astabe">Aset Tak Berwujud</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="no-padding">
                        <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">dashboard</i>Kerja Sama<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li class="font-me-sm"><a infovalue="jksdne">Jumlah Kerja Sama Dalam Negeri</a></li>
                                <li class="font-me-sm"><a infovalue="jkslne">Jumlah Kerja Sama Luar Negeri</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="no-padding">
                        <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">dashboard</i>Data Anggaran<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li class="font-me-sm"><a infovalue="repeda">Realisasi Penerimaan Dana</a></li>
                                <li class="font-me-sm"><a infovalue="serdan">Serapan Dana</a></li>
                                <li class="font-me-sm"><a infovalue="pendan">Penggunaan Dana</a></li>
                                <li class="font-me-sm"><a infovalue="dapene">Dana Penelitian</a></li>
                                <li class="font-me-sm"><a infovalue="dapeng">Dana Pengabdian</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div class="footer">
                    <p class="copyright">© <?php echo date('Y');?> Universitas Diponegoro</p>
                    <!-- <a href="#!">Privacy</a> &amp; <a href="#!">Terms</a> -->
                </div>
                </div>
            </aside>
            <main class="mn-inner ">
                <!--   <div class="middle-content">
                  <div class="row no-m-t no-m-b">
                    <div class="col s12 m12 l4">
                        <div class="card stats-card">
                            <div class="card-content">
                                <div class="card-options">
                                    <ul>
                                        <li class="red-text"><span class="badge cyan lighten-1">gross</span></li>
                                    </ul>
                                </div>
                                <span class="card-title">Sales</span>
                                <span class="stats-counter">$<span class="counter">48190</span><small>This week</small></span>
                            </div>
                            <div id="sparkline-bar"></div>
                        </div>
                    </div>
                    <div class="col s12 m12 l4">
                        <div class="card stats-card">
                            <div class="card-content">
                                <div class="card-options">
                                    <ul>
                                        <li><a href="javascript:void(0)"><i class="material-icons">more_vert</i></a></li>
                                    </ul>
                                </div>
                                <span class="card-title">Page views</span>
                                <span class="stats-counter"><span class="counter">83710</span><small>This month</small></span>
                            </div>
                            <div id="sparkline-line"></div>
                        </div>
                    </div>
                    <div class="col s12 m12 l4">
                        <div class="card stats-card">
                            <div class="card-content">
                                <span class="card-title">Reports</span>
                                <span class="stats-counter"><span class="counter">23230</span><small>Last week</small></span>
                                <div class="percent-info green-text">8% <i class="material-icons">trending_up</i></div>
                            </div>
                            <div class="progress stats-card-progress">
                                <div class="determinate" style="width: 70%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                </div>-->
                <div class="row no-m-t no-m-b">
                    <div class="col s12 m12 l9">
                        <div class="card visitors-card">
                            <div class="card-content">
                                <div class="card-options">
                                    <ul>
                                        <li><a href="javascript:void(0)" class="card-refresh"><i class="material-icons">refresh</i></a></li>
                                    </ul>
                                </div>
                                <span class="card-title">Chart Represented<span class="secondary-title">Showing chart data from table</span></span>
                                <div id="mainchart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m12 l3">
                        <div class="card server-card">
                            <div class="card-content">
                              <span class="card-title">Filter by</span><br>
                              <div class="row">
                                  <div class="input-field col s12" id="tahun-bingkai">
                                      <select id="tahun-select">
                                          <option value="" disabled selected>-SEMUA PERIODE-</option>
                                          <option value="1">Option 1</option>
                                          <option value="2">Option 2</option>
                                          <option value="3">Option 3</option>
                                      </select>
                                      <label>Periode</label>
                                  </div>
                                  <div class="input-field col s12" id="fakultas-bingkai">
                                      <select id="fakultas-select">
                                          <option value="" disabled selected>-SEMUA FAKULTAS-</option>
                                          <option value="1">Option 1</option>
                                          <option value="2">Option 2</option>
                                          <option value="3">Option 3</option>
                                      </select>
                                      <label>Fakultas</label>
                                  </div>
                                  <div class="input-field col s12"  id="prodi-bingkai">
                                      <select  id="prodi-select">
                                          <option value="0" disabled selected>-SEMUA PRODI-</option>
                                          <option value="1">Option 1</option>
                                          <option value="2">Option 2</option>
                                          <option value="3">Option 3</option>
                                      </select>
                                      <label>Prodi</label>
                                  </div>
                                  <div class="input-field col s12"  id="angkatan-bingkai">
                                      <select  id="angkatan-select">
                                          <option value="0" disabled selected>-SEMUA ANGKATAN-</option>
                                          <option value="1">Option 1</option>
                                          <option value="2">Option 2</option>
                                          <option value="3">Option 3</option>
                                      </select>
                                      <label>Angkatan</label>
                                  </div>
                                  <div class="input-field col s12" id="jenjang-bingkai">
                                      <select  id="jenjang-select">
                                          <option value="0" disabled selected>-SEMUA JENJANG-</option>
                                          <option value="1">Option 1</option>
                                          <option value="2">Option 2</option>
                                          <option value="3">Option 3</option>
                                      </select>
                                      <label>Jenjang</label>
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-m-t no-m-b">
                    <div class="col s12 m12 l12">
                        <div class="card invoices-card">
                            <div class="card-content">
                                <div class="card-options">
                                    <input type="text" class="expand-search" placeholder="Search" autocomplete="off">
                                </div>
                                <span class="card-title">Table Represented</span>
                            <table class="responsive-table bordered">
                                <thead>
                                    <tr>
                                        <th data-field="id">No</th>
                                        <th data-field="number">Faculty</th>
                                        <th data-field="company">Company</th>
                                        <th data-field="date">Date</th>
                                        <th data-field="progress">Progress</th>
                                        <th data-field="total">Total</th>
                                    </tr>
                                </thead>
                                    <tr>
                                      <tbody>
                                        <td>#203</td>
                                        <td>PayPal</td>
                                        <td>Curabitur Libero Corp</td>
                                        <td>Dec 16, 18:12</td>
                                        <td><span class="pie">3/8</span></td>
                                        <td>$5430</td>
                                    </tr>
                                    <tr>
                                        <td>#202</td>
                                        <td>American Express</td>
                                        <td>Integer Mattis Ltd</td>
                                        <td>Nov 29, 13:56</td>
                                        <td><span class="pie">5/8</span></td>
                                        <td>$1400</td>
                                    </tr>
                                    <tr>
                                        <td>#200</td>
                                        <td>Discover</td>
                                        <td>Pellentesque Inc</td>
                                        <td>Nov 17, 19:14</td>
                                        <td><span class="pie">3/8</span></td>
                                        <td>$1250</td>
                                    </tr>
                                    <tr>
                                        <td>#199</td>
                                        <td>MasterCard</td>
                                        <td>Curabitur Libero Corp</td>
                                        <td>Oct 21, 12:16</td>
                                        <td><span class="pie">5/8</span></td>
                                        <td>$1349</td>
                                    </tr>
                                    <tr>
                                        <td>#198</td>
                                        <td>Amex</td>
                                        <td>Integer Mattis Ltd</td>
                                        <td>Oct 14, 22:43</td>
                                        <td><span class="pie">3/8</span></td>
                                        <td>$980</td>
                                    </tr>
                                    <tr>
                                        <td>#197</td>
                                        <td>PayPal</td>
                                        <td>Pellentesque Inc</td>
                                        <td>Sept 29, 10:33</td>
                                        <td><span class="pie">5/8</span></td>
                                        <td>$679</td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="inner-sidebar">
                    <span class="inner-sidebar-title">New Messages</span>
                    <div class="message-list">
                    <div class="info-item message-item"><img class="circle" src="assets/images/profile-image-2.png" alt=""><div class="message-info"><div class="message-author">Ned Flanders</div><small>3 hours ago</small></div></div>
                    <div class="info-item message-item"><img class="circle" src="assets/images/profile-image.png" alt=""><div class="message-info"><div class="message-author">Peter Griffin</div><small>4 hours ago</small></div></div>
                    <div class="info-item message-item"><img class="circle" src="assets/images/profile-image-1.png" alt=""><div class="message-info"><div class="message-author">Lisa Simpson</div><small>2 days ago</small></div></div>
                    </div>
                    <span class="inner-sidebar-title">Events</span>
                    <span class="info-item">Envato meeting<span class="new badge">12</span></span>
                    <div class="inner-sidebar-divider"></div>
                    <span class="info-item">Google I/O</span>
                    <div class="inner-sidebar-divider"></div>
                    <span class="info-item disabled">No more events scheduled</span>
                    <div class="inner-sidebar-divider"></div>

                    <span class="inner-sidebar-title">Stats <i class="material-icons">trending_up</i></span>
                    <div class="sidebar-radar-chart"><canvas id="radar-chart" width="170" height="140"></canvas></div>
                </div> -->
            </main>
            <div class="page-footer">
                <div class="footer-grid container">
                    <div class="footer-l white">&nbsp;</div>
                    <div class="footer-grid-l white">
                    </div>
                    <div class="footer-r white">&nbsp;</div>
                    <div class="footer-grid-r white">
                        <a class="footer-text" href="mailbox.html">
                            <i class="material-icons arrow-r">arrow_forward</i>
                            <span class="direction">Next</span>
                            <div>
                                Mailbox app
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="left-sidebar-hover"></div>


        <!-- Javascripts -->
        <script type="text/javascript">
        var base_url = "<?php echo $base_url;?>";
        </script>
        <script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="assets/plugins/counter-up-master/jquery.counterup.min.js"></script>
        <script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="assets/plugins/chart.js/chart.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.time.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.symbol.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="assets/plugins/curvedlines/curvedLines.js"></script>
        <script src="assets/plugins/peity/jquery.peity.min.js"></script>
        <script src="assets/js/alpha.min.js"></script>
        <script src="assets/js/jaserv.min.dev.js"></script>
        <script src="assets/js/custom.js"></script>
        <!-- <script src="assets/js/pages/dashboard.js"></script> -->

    </body>
</html>
