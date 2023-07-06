<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>StrikingDash</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- inject:css-->

    <link rel="stylesheet" href="{{ url('/css/plugin.min.css') }} ">
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">

    <!-- endinject -->

    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">
</head>

<body class="layout-light side-menu overlayScroll">
    <div class="mobile-search"></div>

    <div class="mobile-author-actions"></div>
    <header class="header-top">
        <nav class="navbar navbar-light">
            <div class="navbar-left">
                <a href="#" class="sidebar-toggle">
                    <img class="svg" src="img/svg/bars.svg" alt="img"></a>
                <a class="navbar-brand" href="#"><img class="svg dark" src="img/svg/logo_dark.svg"
                        alt="svg"><img class="light" src="img/logo_white.png" alt="img"></a>
                <form action="https://demo.jsnorm.com/" class="search-form">
                    <span data-feather="search"></span>
                    <input class="form-control mr-sm-2 box-shadow-none" type="search" placeholder="Search..."
                        aria-label="Search">
                </form>
                <div class="top-menu">

                    <div class="strikingDash-top-menu position-relative">
                        <ul>
                            <li class="has-subMenu">
                                <a href="#" class="active">Dashboard</a>
                                <ul class="subMenu">
                                    <li>
                                        <a class="" href="index.html">Social Media</a>
                                    </li>
                                    <li>
                                        <a class="" href="business.html">FineTech /
                                            Business</a>
                                    </li>
                                    <li>
                                        <a class="" href="performance.html">Site
                                            Performance</a>
                                    </li>
                                    <li>
                                        <a class="" href="ecommerce.html">Ecommerce</a>
                                    </li>
                                    <li>
                                        <a class="active" href="crm.html">
                                            CRM</a>
                                    </li>
                                    <li>
                                        <a class="" href="sales.html">
                                            Sales Performance</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-subMenu">
                                <a href="#" class="">Layouts</a>
                                <ul class="subMenu">
                                    <li class="l_sidebar">
                                        <a href="#" data-layout="light">Light Mode</a>
                                    </li>
                                    <li class="l_sidebar">
                                        <a href="#" data-layout="dark">Dark Mode</a>
                                    </li>
                                    <li class="l_navbar">
                                        <a href="#" data-layout="top">Top Menu</a>
                                    </li>
                                    <li class="l_navbar">
                                        <a href="#" data-layout="side">Side Menu</a>
                                    </li>
                                    <li class="layout">
                                        <a href="https://demo.jsnorm.com/html/strikingdash/strikingdash/rtl">RTL</a>
                                    </li>
                                    <li class="layout">
                                        <a href="https://demo.jsnorm.com/html/strikingdash/strikingdash/ltr">LTR</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-subMenu">
                                <a href="#" class="">Apps</a>
                                <ul class="subMenu">
                                    <li>
                                        <a href="chat.html" class="">
                                            <span data-feather="message-square" class="nav-icon"></span>
                                            <span class="menu-text">Chat</span>
                                        </a>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="">
                                            <span data-feather="shopping-cart" class="nav-icon"></span>
                                            <span class="menu-text">eCommerce</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li>
                                                <a href="products.html" class="">Products</a>
                                            </li>
                                            <li>
                                                <a href="product-details.html" class="">Product Details</a>
                                            </li>
                                            <li>
                                                <a href="add-product.html" class="">Product
                                                    Add</a>
                                            </li>
                                            <li>
                                                <a href="#" class="">Product Edit</a>
                                            </li>
                                            <li>
                                                <a href="cart.html" class="">Cart</a>
                                            </li>
                                            <li>
                                                <a href="order.html" class="">Orders</a>
                                            </li>
                                            <li>
                                                <a href="sellers.html" class="">Sellers</a>
                                            </li>
                                            <li>
                                                <a href="invoice.html" class="">Invoices</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="">
                                            <span data-feather="mail" class="nav-icon"></span>
                                            <span class="menu-text">Email</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li>
                                                <a href="inbox.html" class="">Inbox</a>
                                            </li>
                                            <li>
                                                <a href="read-email.html" class="">Read
                                                    Email</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="chat.html" class="">
                                            <span data-feather="bookmark" class="nav-icon"></span>
                                            <span class="menu-text">Note</span>
                                        </a>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="">
                                            <span data-feather="user" class="nav-icon"></span>
                                            <span class="menu-text">Profile</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li>
                                                <a href="profile.html" class="">Profile</a>
                                            </li>
                                            <li>
                                                <a href="profile-setting.html" class="">Settings</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="">
                                            <span data-feather="user-check" class="nav-icon"></span>
                                            <span class="menu-text">Contact</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li>
                                                <a class="" href="contact-1.html">Contact 1</a>
                                            </li>
                                            <li>
                                                <a class="" href="contact-2.html">Contact 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="chat.html" class="">
                                            <span data-feather="activity" class="nav-icon"></span>
                                            <span class="menu-text">To-Do</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="kanban.html" class="">
                                            <span data-feather="columns" class="nav-icon"></span>
                                            <span class="menu-text">Kanban Board</span>
                                        </a>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="">
                                            <span data-feather="repeat" class="nav-icon"></span>
                                            <span class="menu-text">Import & Export</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li>
                                                <a class="" href="import.html">Import</a>
                                            </li>
                                            <li>
                                                <a class="" href="export.html">Export</a>
                                            </li>
                                            <li>
                                                <a class="" href="export-selected.html">Export Selected
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="file-manager.html" class="">
                                            <span data-feather="file" class="nav-icon"></span>
                                            <span class="menu-text">File Manager</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="task-app.html" class="">
                                            <span data-feather="clipboard" class="nav-icon"></span>
                                            <span class="menu-text">Task App</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>



                            <li class="has-subMenu">
                                <a href="#" class="">Crud</a>
                                <ul class="subMenu">
                                    <li class="has-subMenu-left">
                                        <a href="#" class="">
                                            <span data-feather="shopping-cart" class="nav-icon"></span>
                                            <span class="menu-text">Firestore Crud</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li>
                                                <a class="" href="firestore.html">View All</a>
                                            </li>
                                            <li>
                                                <a class="" href="firestore-add.html">Add
                                                    New</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>


                            <li class="mega-item has-subMenu">
                                <a href="#" class="">Pages</a>
                                <ul class="megaMenu-wrapper megaMenu-small">
                                    <li>
                                        <ul>
                                            <li>
                                                <a href="projects.html" class="">Project</a>
                                            </li>
                                            <li>
                                                <a href="application-ui.html" class="">Project Details</a>
                                            </li>
                                            <li>
                                                <a href="create.html" class="">Create
                                                    Project</a>
                                            </li>
                                            <li>
                                                <a href="users-card.html" class="">Team</a>
                                            </li>
                                            <li>
                                                <a href="users-card2.html" class="">Users</a>
                                            </li>
                                            <li>
                                                <a href="user-info.html" class="">Users
                                                    Info</a>
                                            </li>
                                            <li>
                                                <a href="users-list.html" class="">Users
                                                    List</a>
                                            </li>
                                            <li>
                                                <a href="users-group.html" class="">Users
                                                    Group</a>
                                            </li>
                                            <li>
                                                <a href="banner.html" class="">
                                                    <span class="menu-text">Banners</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="testimonial.html" class="">
                                                    <span class="menu-text">Testimonial</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="support.html" class="">
                                                    <span class="menu-text">Support Center</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li>
                                                <a href="users-datatable.html" class="">Users
                                                    Table</a>
                                            </li>
                                            <li>
                                                <a href="gallery.html" class="">Gallery 1</a>
                                            </li>
                                            <li>
                                                <a href="gallery2.html" class="">Gallery 2</a>
                                            </li>
                                            <li>
                                                <a href="pricing.html" class="">Pricing</a>
                                            </li>
                                            <li>
                                                <a href="faq.html" class="">FAQ's</a>
                                            </li>
                                            <li>
                                                <a href="search.html" class="">Search
                                                    Results</a>
                                            </li>
                                            <li>
                                                <a href="maintenance.html" class="">Coming
                                                    Soon</a>
                                            </li>
                                            <li>
                                                <a href="404.html" class="">404</a>
                                            </li>
                                            <li>
                                                <a href="maintenance.html" class="">
                                                    <span class="menu-text">Maintenance</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="login.html" class="">
                                                    <span class="menu-text">Log In</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="sign-up.html" class="">
                                                    <span class="menu-text">Sign Up</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blank.html" class="">
                                                    <span class="menu-text">Blank</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="mega-item has-subMenu">
                                <a href="#" class="">Components</a>
                                <ul class="megaMenu-wrapper megaMenu-wide">
                                    <li>
                                        <span class="mega-title">Components</span>
                                        <ul>
                                            <li>
                                                <a class="" href="alert.html">Alert</a>
                                            </li>
                                            <li>
                                                <a class="" href="avatar.html">Avatar</a>
                                            </li>
                                            <li>
                                                <a class="" href="badge.html">Badge</a>
                                            </li>
                                            <li>
                                                <a class="" href="breadcrumbs.html">Breadcrumb</a>
                                            </li>
                                            <li>
                                                <a class="" href="buttons.html">Button</a>
                                            </li>
                                            <li>
                                                <a class="" href="cards.html">Cards</a>
                                            </li>
                                            <li>
                                                <a class="" href="carousel.html">Carousel</a>
                                            </li>
                                            <li>
                                                <a class="" href="checkbox.html">Checkbox</a>
                                            </li>
                                            <li>
                                                <a class="" href="collapse.html">Collapse</a>
                                            </li>
                                            <li>
                                                <a class="" href="comments.html">Comments</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="mega-title">Components</span>
                                        <ul>
                                            <li>
                                                <a class="" href="dashboard-base.html">Dashboard
                                                    Base</a>
                                            </li>
                                            <li>
                                                <a class="" href="date-picker.html">DatePicker</a>
                                            </li>
                                            <li>
                                                <a class="" href="drawer.html">Drawer</a>
                                            </li>
                                            <li>
                                                <a class="" href="drag-drop.html">Drag &
                                                    Drop</a>
                                            </li>
                                            <li>
                                                <a class="" href="dropdown.html">Dropdown</a>
                                            </li>
                                            <li>
                                                <a class="" href="empty.html">Empty</a>
                                            </li>
                                            <li>
                                                <a class="" href="input.html">Input</a>
                                            </li>
                                            <li>
                                                <a class="" href="list.html">List</a>
                                            </li>
                                            <li>
                                                <a class="" href="menu.html">Menu</a>
                                            </li>
                                            <li>
                                                <a class="" href="message.html">Message</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="mega-title">Components</span>
                                        <ul>
                                            <li>
                                                <a class="" href="modal.html">Modals</a>
                                            </li>
                                            <li>
                                                <a class="" href="notifications.html">Notification</a>
                                            </li>
                                            <li>
                                                <a class="" href="page-header.html">Page
                                                    Headers</a>
                                            </li>
                                            <li>
                                                <a class="" href="pagination.html">Paginations</a>
                                            </li>
                                            <li>
                                                <a class="" href="progressbar.html">Progress</a>
                                            </li>
                                            <li>
                                                <a class="" href="radio.html">Radio</a>
                                            </li>
                                            <li>
                                                <a class="" href="rate.html">Rate</a>
                                            </li>
                                            <li>
                                                <a class="" href="result.html">Result</a>
                                            </li>
                                            <li>
                                                <a class="" href="select.html">Select</a>
                                            </li>
                                            <li>
                                                <a class="" href="skeleton.html">Skeleton</a>
                                            </li>
                                            <li>
                                                <a class="" href="time-picker.html">Timepicker</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="mega-title">Components</span>
                                        <ul>
                                            <li>
                                                <a class="" href="slider.html">Slider</a>
                                            </li>
                                            <li>
                                                <a class="" href="spin.html">Spinner</a>
                                            </li>
                                            <li>
                                                <a class="" href="statistics.html">Statistic</a>
                                            </li>
                                            <li>
                                                <a class="" href="steps.html">Steps</a>
                                            </li>
                                            <li>
                                                <a class="" href="switch.html">Switch</a>
                                            </li>
                                            <li>
                                                <a class="" href="tab.html">Tabs</a>
                                            </li>
                                            <li>
                                                <a class="" href="tag.html">Tags</a>
                                            </li>
                                            <li>
                                                <a class="" href="timeline.html">Timeline</a>
                                            </li>
                                            <li>
                                                <a class="" href="timeline-2.html">Timeline
                                                    2</a>
                                            </li>
                                            <li>
                                                <a class="" href="timeline-3.html">Timeline
                                                    3</a>
                                            </li>
                                            <li>
                                                <a class="" href="uploads.html">Upload</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-subMenu">
                                <a href="#" class="">Features</a>
                                <ul class="subMenu">
                                    <li>
                                        <a href="editors.html" class="">
                                            <span data-feather="edit" class="nav-icon"></span>
                                            <span class="menu-text">Editors</span>
                                        </a>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="">
                                            <span data-feather="grid" class="nav-icon"></span>
                                            <span class="menu-text">Icons</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li>
                                                <a href="feather.html" class="">Feather icons
                                                    (svg)</a>
                                            </li>
                                            <li>
                                                <a href="fontawesome.html" class="">Font
                                                    Awesome</a>
                                            </li>
                                            <li>
                                                <a href="lineawesome.html" class="">Line
                                                    Awesome</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="">
                                            <span data-feather="bar-chart-2" class="nav-icon"></span>
                                            <span class="menu-text">Charts</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li>
                                                <a class="" href="charts.html">Chart JS</a>
                                            </li>
                                            <li>
                                                <a class="" href="google-chart.html">Google
                                                    Charts</a>
                                            </li>
                                            <li>
                                                <a class="" href="peity-chart.html">Peity
                                                    Charts</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="">
                                            <span data-feather="disc" class="nav-icon"></span>
                                            <span class="menu-text">Froms</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li>
                                                <a class="" href="form.html">Basics</a>
                                            </li>
                                            <li>
                                                <a class="" href="form-layouts.html">Layouts</a>
                                            </li>
                                            <li>
                                                <a class="" href="form-elements.html">Elements</a>
                                            </li>
                                            <li>
                                                <a class="" href="form-components.html">Components</a>
                                            </li>
                                            <li>
                                                <a class="" href="form-validations.html">Validations</a>
                                            </li>
                                        </ul>
                                    </li>



                                    <li class="has-subMenu-left">
                                        <a href="#" class="">
                                            <span data-feather="map" class="nav-icon"></span>
                                            <span class="menu-text">Maps</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li>
                                                <a href="google-map.html" class="">Google
                                                    Maps</a>
                                            </li>
                                            <li>
                                                <a href="leaflet-map.html" class="">Leaflet
                                                    Maps</a>
                                            </li>
                                            <li>
                                                <a href="vector-map.html" class="">Vector
                                                    Maps</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="">
                                            <span data-feather="server" class="nav-icon"></span>
                                            <span class="menu-text">Widget</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li>
                                                <a class="" href="widget-charts.html">Chart</a>
                                            </li>
                                            <li>
                                                <a class="" href="widget-mixed.html">Mixed</a>
                                            </li>
                                            <li>
                                                <a class="" href="widget-card.html">Card</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="">
                                            <span data-feather="square" class="nav-icon"></span>
                                            <span class="menu-text">Wizards</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li>
                                                <a href="checkout-wizard6.html" class="">Wizard
                                                    1</a>
                                            </li>
                                            <li>
                                                <a href="checkout-wizard7.html" class="">Wizard
                                                    2</a>
                                            </li>
                                            <li>
                                                <a href="checkout-wizard8.html" class="">Wizard
                                                    3</a>
                                            </li>
                                            <li>
                                                <a href="checkout-wizard9.html" class="">Wizard
                                                    4</a>
                                            </li>
                                            <li>
                                                <a href="checkout-wizard10.html" class="">Wizard
                                                    5</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="">
                                            <span data-feather="book" class="nav-icon"></span>
                                            <span class="menu-text">Knowledge Base</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li>
                                                <a class="" href="knowledgebase.html">Knowledge
                                                    Base</a>
                                            </li>
                                            <li>
                                                <a class="" href="knowledgebase-2.html">All
                                                    Article</a>
                                            </li>

                                            <li>
                                                <a class="" href="knowledgebase-3.html">Single Article</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <!-- ends: navbar-left -->

            <div class="navbar-right">
                <ul class="navbar-right__menu">
                    <li class="nav-search d-none">
                        <a href="#" class="search-toggle">
                            <i class="la la-search"></i>
                            <i class="la la-times"></i>
                        </a>
                        <form action="https://demo.jsnorm.com/" class="search-form-topMenu">
                            <span class="search-icon" data-feather="search"></span>
                            <input class="form-control mr-sm-2 box-shadow-none" type="search"
                                placeholder="Search..." aria-label="Search">
                        </form>
                    </li>
                    <li class="nav-message">
                        <div class="dropdown-custom">
                            <a href="javascript:;" class="nav-item-toggle">
                                <span data-feather="mail"></span></a>
                            <div class="dropdown-wrapper">
                                <h2 class="dropdown-wrapper__title">Messages <span
                                        class="badge-circle badge-success ml-1">2</span></h2>
                                <ul>
                                    <li class="author-online has-new-message">
                                        <div class="user-avater">
                                            <img src="img/team-1.png" alt="">
                                        </div>
                                        <div class="user-message">
                                            <p>
                                                <a href="#" class="subject stretched-link text-truncate"
                                                    style="max-width: 180px;">Web Design</a>
                                                <span class="time-posted">3 hrs ago</span>
                                            </p>
                                            <p>
                                                <span class="desc text-truncate" style="max-width: 215px;">Lorem ipsum
                                                    dolor amet cosec Lorem ipsum</span>
                                                <span class="msg-count badge-circle badge-success badge-sm">1</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="author-offline has-new-message">
                                        <div class="user-avater">
                                            <img src="img/team-1.png" alt="">
                                        </div>
                                        <div class="user-message">
                                            <p>
                                                <a href="#" class="subject stretched-link text-truncate"
                                                    style="max-width: 180px;">Web Design</a>
                                                <span class="time-posted">3 hrs ago</span>
                                            </p>
                                            <p>
                                                <span class="desc text-truncate" style="max-width: 215px;">Lorem ipsum
                                                    dolor amet cosec Lorem ipsum</span>
                                                <span class="msg-count badge-circle badge-success badge-sm">1</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="author-online has-new-message">
                                        <div class="user-avater">
                                            <img src="img/team-1.png" alt="">
                                        </div>
                                        <div class="user-message">
                                            <p>
                                                <a href="#" class="subject stretched-link text-truncate"
                                                    style="max-width: 180px;">Web Design</a>
                                                <span class="time-posted">3 hrs ago</span>
                                            </p>
                                            <p>
                                                <span class="desc text-truncate" style="max-width: 215px;">Lorem ipsum
                                                    dolor amet cosec Lorem ipsum</span>
                                                <span class="msg-count badge-circle badge-success badge-sm">1</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="author-offline">
                                        <div class="user-avater">
                                            <img src="img/team-1.png" alt="">
                                        </div>
                                        <div class="user-message">
                                            <p>
                                                <a href="#" class="subject stretched-link text-truncate"
                                                    style="max-width: 180px;">Web Design</a>
                                                <span class="time-posted">3 hrs ago</span>
                                            </p>
                                            <p>
                                                <span class="desc text-truncate" style="max-width: 215px;">Lorem ipsum
                                                    dolor amet cosec Lorem ipsum</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="author-offline">
                                        <div class="user-avater">
                                            <img src="img/team-1.png" alt="">
                                        </div>
                                        <div class="user-message">
                                            <p>
                                                <a href="#" class="subject stretched-link text-truncate"
                                                    style="max-width: 180px;">Web Design</a>
                                                <span class="time-posted">3 hrs ago</span>
                                            </p>
                                            <p>
                                                <span class="desc text-truncate" style="max-width: 215px;">Lorem ipsum
                                                    dolor amet cosec Lorem ipsum</span>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                                <a href="#" class="dropdown-wrapper__more">See All Message</a>
                            </div>
                        </div>
                    </li>
                    <!-- ends: nav-message -->
                    <li class="nav-notification">
                        <div class="dropdown-custom">
                            <a href="javascript:;" class="nav-item-toggle">
                                <span data-feather="bell"></span></a>
                            <div class="dropdown-wrapper">
                                <h2 class="dropdown-wrapper__title">Notifications <span
                                        class="badge-circle badge-warning ml-1">4</span></h2>
                                <ul>
                                    <li
                                        class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                                        <div class="nav-notification__type nav-notification__type--primary">
                                            <span data-feather="inbox"></span>
                                        </div>
                                        <div class="nav-notification__details">
                                            <p>
                                                <a href="#" class="subject stretched-link text-truncate"
                                                    style="max-width: 180px;">James</a>
                                                <span>sent you a message</span>
                                            </p>
                                            <p>
                                                <span class="time-posted">5 hours ago</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li
                                        class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                                        <div class="nav-notification__type nav-notification__type--secondary">
                                            <span data-feather="upload"></span>
                                        </div>
                                        <div class="nav-notification__details">
                                            <p>
                                                <a href="#" class="subject stretched-link text-truncate"
                                                    style="max-width: 180px;">James</a>
                                                <span>sent you a message</span>
                                            </p>
                                            <p>
                                                <span class="time-posted">5 hours ago</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li
                                        class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                                        <div class="nav-notification__type nav-notification__type--success">
                                            <span data-feather="log-in"></span>
                                        </div>
                                        <div class="nav-notification__details">
                                            <p>
                                                <a href="#" class="subject stretched-link text-truncate"
                                                    style="max-width: 180px;">James</a>
                                                <span>sent you a message</span>
                                            </p>
                                            <p>
                                                <span class="time-posted">5 hours ago</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="nav-notification__single nav-notification__single d-flex flex-wrap">
                                        <div class="nav-notification__type nav-notification__type--info">
                                            <span data-feather="at-sign"></span>
                                        </div>
                                        <div class="nav-notification__details">
                                            <p>
                                                <a href="#" class="subject stretched-link text-truncate"
                                                    style="max-width: 180px;">James</a>
                                                <span>sent you a message</span>
                                            </p>
                                            <p>
                                                <span class="time-posted">5 hours ago</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="nav-notification__single nav-notification__single d-flex flex-wrap">
                                        <div class="nav-notification__type nav-notification__type--danger">
                                            <span data-feather="heart"></span>
                                        </div>
                                        <div class="nav-notification__details">
                                            <p>
                                                <a href="#" class="subject stretched-link text-truncate"
                                                    style="max-width: 180px;">James</a>
                                                <span>sent you a message</span>
                                            </p>
                                            <p>
                                                <span class="time-posted">5 hours ago</span>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                                <a href="#" class="dropdown-wrapper__more">See all incoming activity</a>
                            </div>
                        </div>
                    </li>
                    <!-- ends: .nav-notification -->
                    <li class="nav-settings">
                        <div class="dropdown-custom">
                            <a href="javascript:;" class="nav-item-toggle">
                                <span data-feather="settings"></span></a>
                            <div class="dropdown-wrapper dropdown-wrapper--large">
                                <ul class="list-settings">
                                    <li class="d-flex">
                                        <div class="mr-3"><img src="img/mail.png" alt=""></div>
                                        <div class="flex-grow-1">
                                            <h6>
                                                <a href="#" class="stretched-link">All Features</a>
                                            </h6>
                                            <p>Introducing Increment subscriptions </p>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="mr-3"><img src="img/color-palette.png" alt=""></div>
                                        <div class="flex-grow-1">
                                            <h6>
                                                <a href="#" class="stretched-link">Themes</a>
                                            </h6>
                                            <p>Third party themes that are compatible</p>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="mr-3"><img src="img/home.png" alt=""></div>
                                        <div class="flex-grow-1">
                                            <h6>
                                                <a href="#" class="stretched-link">Payments</a>
                                            </h6>
                                            <p>We handle billions of dollars</p>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="mr-3"><img src="img/video-camera.png" alt=""></div>
                                        <div class="flex-grow-1">
                                            <h6>
                                                <a href="#" class="stretched-link">Design Mockups</a>
                                            </h6>
                                            <p>Share planning visuals with clients</p>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="mr-3"><img src="img/document.png" alt=""></div>
                                        <div class="flex-grow-1">
                                            <h6>
                                                <a href="#" class="stretched-link">Content Planner</a>
                                            </h6>
                                            <p>Centralize content gethering and editing</p>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="mr-3"><img src="img/microphone.png" alt=""></div>
                                        <div class="flex-grow-1">
                                            <h6>
                                                <a href="#" class="stretched-link">Diagram Maker</a>
                                            </h6>
                                            <p>Plan user flows & test scenarios</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!-- ends: .nav-settings -->
                    <li class="nav-support">
                        <div class="dropdown-custom">
                            <a href="javascript:;" class="nav-item-toggle">
                                <span data-feather="help-circle"></span></a>
                            <div class="dropdown-wrapper">
                                <div class="list-group">
                                    <span>Documentation</span>
                                    <ul>
                                        <li>
                                            <a href="#">How to customize admin</a>
                                        </li>
                                        <li>
                                            <a href="#">How to use</a>
                                        </li>
                                        <li>
                                            <a href="#">The relation of vertical spacing</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="list-group">
                                    <span>Payments</span>
                                    <ul>
                                        <li>
                                            <a href="#">How to customize admin</a>
                                        </li>
                                        <li>
                                            <a href="#">How to use</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="list-group">
                                    <span>Content Planner</span>
                                    <ul>
                                        <li>
                                            <a href="#">How to customize admin</a>
                                        </li>
                                        <li>
                                            <a href="#">How to use</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- ends: .nav-support -->
                    <li class="nav-flag-select">
                        <div class="dropdown-custom">
                            <a href="javascript:;" class="nav-item-toggle"><img src="img/flag.png" alt=""
                                    class="rounded-circle"></a>
                            <div class="dropdown-wrapper dropdown-wrapper--small">
                                <a href="#"><img src="img/eng.png" alt=""> English</a>
                                <a href="#"><img src="img/ger.png" alt=""> German</a>
                                <a href="#"><img src="img/spa.png" alt=""> Spanish</a>
                                <a href="#"><img src="img/tur.png" alt=""> Turkish</a>
                            </div>
                        </div>
                    </li>
                    <!-- ends: .nav-flag-select -->
                    <li class="nav-author">
                        <div class="dropdown-custom">
                            <a href="javascript:;" class="nav-item-toggle"><img src="img/author-nav.jpg"
                                    alt="" class="rounded-circle"></a>
                            <div class="dropdown-wrapper">
                                <div class="nav-author__info">
                                    <div class="author-img">
                                        <img src="img/author-nav.jpg" alt="" class="rounded-circle">
                                    </div>
                                    <div>
                                        <h6>Abdullah Bin Talha</h6>
                                        <span>UI Designer</span>
                                    </div>
                                </div>
                                <div class="nav-author__options">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span data-feather="user"></span> Profile</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span data-feather="settings"></span> Settings</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span data-feather="key"></span> Billing</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span data-feather="users"></span> Activity</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span data-feather="bell"></span> Help</a>
                                        </li>
                                    </ul>
                                    <a href="#" class="nav-author__signout">
                                        <span data-feather="log-out"></span> Sign Out</a>
                                </div>
                            </div>
                            <!-- ends: .dropdown-wrapper -->
                        </div>
                    </li>
                    <!-- ends: .nav-author -->
                </ul>
                <!-- ends: .navbar-right__menu -->
                <div class="navbar-right__mobileAction d-md-none">
                    <a href="#" class="btn-search">
                        <span data-feather="search"></span>
                        <span data-feather="x"></span></a>
                    <a href="#" class="btn-author-action">
                        <span data-feather="more-vertical"></span></a>
                </div>
            </div>
            <!-- ends: .navbar-right -->
        </nav>
    </header>
    <main class="main-content">

        <aside class="sidebar">
            <div class="sidebar__menu-group">
                <ul class="sidebar_nav">
                    <li class="menu-title">
                        <span>Main menu</span>
                    </li>
                    <li class="has-child open">
                        <a href="#" class="active">
                            <span data-feather="home" class="nav-icon"></span>
                            <span class="menu-text">Dashboard</span>
                            <span class="toggle-icon"></span>
                        </a>
                        <ul>
                            <li>
                                <a class="" href="index.html">Social Media</a>
                            </li>
                            <li>
                                <a class="" href="business.html">FineTech /
                                    Business</a>
                            </li>
                            <li>
                                <a class="" href="performance.html">Site
                                    Performance</a>
                            </li>
                            <li>
                                <a class="" href="ecommerce.html">Ecommerce</a>
                            </li>
                            <li>
                                <a class="active" href="crm.html">
                                    CRM</a>
                            </li>
                            <li>
                                <a class="" href="sales.html">
                                    Sales Performance</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-child">
                        <a href="#" class="">
                            <span data-feather="layout" class="nav-icon"></span>
                            <span class="menu-text">Layouts</span>
                            <span class="toggle-icon"></span>
                        </a>
                        <ul>
                            <li class="l_sidebar">
                                <a href="#" data-layout="light">Light Mode</a>
                            </li>
                            <li class="l_sidebar">
                                <a href="#" data-layout="dark">Dark Mode</a>
                            </li>
                            <li class="l_navbar">
                                <a href="#" data-layout="top">Top Menu</a>
                            </li>
                            <li class="l_navbar">
                                <a href="#" data-layout="side">Side Menu</a>
                            </li>
                            <li class="layout">
                                <a href="https://demo.jsnorm.com/html/strikingdash/strikingdash/rtl">RTL</a>
                            </li>
                            <li class="layout">
                                <a href="https://demo.jsnorm.com/html/strikingdash/strikingdash/ltr">LTR</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="changelog.html" class="">
                            <span data-feather="activity" class="nav-icon"></span>
                            <span class="menu-text">Changelog</span>
                            <span class="badge badge-primary menuItem">2.1.3</span>
                        </a>
                    </li>
                    <li class="menu-title m-top-30">
                        <span>Applications</span>
                    </li>
                    <li class="has-child">
                        <a href="#" class="">
                            <span data-feather="mail" class="nav-icon"></span>
                            <span class="menu-text">Email</span>
                            <span class="toggle-icon"></span>
                        </a>
                        <ul>
                            <li>
                                <a class="" href="inbox.html">Inbox</a>
                            </li>
                            <li>
                                <a class="" href="read-email.html">Read
                                    Email</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="chat.html" class="">
                            <span data-feather="message-square" class="nav-icon"></span>
                            <span class="menu-text">Chat</span>
                        </a>
                    </li>
                    <li class="has-child">
                        <a href="#" class="">
                            <span data-feather="shopping-cart" class="nav-icon"></span>
                            <span class="menu-text">eCommerce</span>
                            <span class="toggle-icon"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="products.html" class="">Products</a>
                            </li>
                            <li>
                                <a href="product-details.html" class="">Product Details</a>
                            </li>
                            <li>
                                <a href="add-product.html" class="">Product Add</a>
                            </li>
                            <li>
                                <a href="add-product.html" class="">Product Edit</a>
                            </li>
                            <li>
                                <a href="cart.html" class="">Cart</a>
                            </li>
                            <li>
                                <a href="order.html" class="">Orders</a>
                            </li>
                            <li>
                                <a href="sellers.html" class="">Sellers</a>
                            </li>
                            <li>
                                <a href="invoice.html" class="">Invoices</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-child">
                        <a href="#" class="">
                            <span data-feather="aperture" class="nav-icon"></span>
                            <span class="menu-text">Social App</span>
                            <span class="toggle-icon"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="profile.html" class="">My Profile</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-child">
                        <a href="#" class="">
                            <span data-feather="target" class="nav-icon"></span>
                            <span class="menu-text">Project</span>
                            <span class="toggle-icon"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="projects.html" class="">Project</a>
                            </li>
                            <li>
                                <a href="application-ui.html" class="">Project Details</a>
                            </li>
                            <li>
                                <a href="create.html" class="">Create
                                    Project</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="calendar.html" class="">
                            <span data-feather="calendar" class="nav-icon"></span>
                            <span class="menu-text">Calendar</span>
                        </a>
                    </li>
                    <li class="has-child">
                        <a href="#" class="">
                            <span data-feather="folder" class="nav-icon"></span>
                            <span class="menu-text">Users</span>
                            <span class="toggle-icon"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="users-membar.html" class="">Team</a>
                            </li>
                            <li>
                                <a href="users-card.html" class="">Users Grid</a>
                            </li>
                            <li>
                                <a href="users-list.html" class="">Users List</a>
                            </li>
                            <li>
                                <a href="users-card2.html" class="">Users Grid style</a>
                            </li>
                            <li>
                                <a href="users-group.html" class="">Users
                                    Group</a>
                            </li>
                            <li>
                                <a href="user-info.html" class=""><span
                                        class="badge badge-success menuItem">New</span>Add User</a>
                            </li>
                            <li>
                                <a href="users-datatable.html" class="">Users
                                    Table</a>
                            </li>

                        </ul>
                    </li>
                    <li class="has-child">
                        <a href="#" class="">
                            <span data-feather="user-check" class="nav-icon"></span>
                            <span class="menu-text">Contact</span>
                            <span class="toggle-icon"></span>
                        </a>
                        <ul>
                            <li>
                                <a class="" href="contact-2.html">Contact Grid</a>
                            </li>
                            <li>
                                <a class="" href="contact-1.html">Contact List</a>
                            </li>
                            <li>
                                <a class="" href="contact-3.html">Contact Create</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="note.html" class="">
                            <span data-feather="file-text" class="nav-icon"></span>
                            <span class="menu-text">Note</span>
                        </a>
                    </li>
                    <li>
                        <a href="to-do.html" class="">
                            <span data-feather="check-square" class="nav-icon"></span>
                            <span class="menu-text">To-Do</span>
                        </a>
                    </li>
                    <li>
                        <a href="kanban.html" class="">
                            <span data-feather="columns" class="nav-icon"></span>
                            <span class="menu-text">Kanban Board</span>
                            <span class="badge badge-success menuItem">New</span>
                        </a>
                    </li>
                    <li class="has-child">
                        <a href="#" class="">
                            <span data-feather="repeat" class="nav-icon"></span>
                            <span class="menu-text">Import & Export</span>
                            <span class="toggle-icon"></span>
                            <span class="badge badge-success menuItem">New</span>
                        </a>
                        <ul>
                            <li>
                                <a class="" href="import.html">Import</a>
                            </li>
                            <li>
                                <a class="" href="export.html">Export</a>
                            </li>
                            <li>
                                <a class="" href="export-selected.html">Export Selected
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="file-manager.html" class="">
                            <span data-feather="file" class="nav-icon"></span>
                            <span class="menu-text">File Manager</span>
                        </a>
                    </li>
                    <li>
                        <a href="task-app.html" class="">
                            <span data-feather="clipboard" class="nav-icon"></span>
                            <span class="menu-text">Task App</span>
                            <span class="badge badge-success menuItem">New</span>
                        </a>
                    </li>
                    <li>
                        <a href="bookmarks.html" class="">
                            <span data-feather="bookmark" class="nav-icon"></span>
                            <span class="menu-text">Bookmarks<span
                                    class="badge badge-success menuItem">New</span></span>
                        </a>
                    </li>
                    <li class="menu-title m-top-30">
                        <span>CRUD</span>
                    </li>
                    <li class="has-child">
                        <a href="#" class="">
                            <span data-feather="database" class="nav-icon"></span>
                            <span class="menu-text">Firestore Crud</span>
                            <span class="toggle-icon"></span>
                            <span class="badge badge-success menuItem">New</span>
                        </a>
                        <ul>
                            <li>
                                <a class="" href="firestore.html">View All</a>
                            </li>
                            <li>
                                <a class="" href="firestore-add.html">Add New</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-title m-top-30">
                        <span>Features</span>
                    </li>
                    <li class="has-child">
                        <a href="#" class="">
                            <span data-feather="layers" class="nav-icon"></span>
                            <span class="menu-text">UI Elements</span>
                            <span class="toggle-icon"></span>
                        </a>
                        <ul>
                            <li>
                                <a class="" href="alert.html">Alert</a>
                            </li>
                            <li>
                                <a class="" href="avatar.html">Avatar</a>
                            </li>
                            <li>
                                <a class="" href="badge.html">Badge</a>
                            </li>
                            <li>
                                <a class="" href="breadcrumbs.html">Breadcrumb</a>
                            </li>
                            <li>
                                <a class="" href="buttons.html">Button</a>
                            </li>
                            <li>
                                <a class="" href="cards.html">Cards</a>
                            </li>
                            <li>
                                <a class="" href="carousel.html">Carousel</a>
                            </li>
                            <li>
                                <a class="" href="checkbox.html">Checkbox</a>
                            </li>
                            <li>
                                <a class="" href="collapse.html">Collapse</a>
                            </li>
                            <li>
                                <a class="" href="comments.html">Comments</a>
                            </li>
                            <li>
                                <a class="" href="dashboard-base.html">Dashboard
                                    Base</a>
                            </li>
                            <li>
                                <a class="" href="date-picker.html">DatePicker</a>
                            </li>
                            <li>
                                <a class="" href="drawer.html">Drawer</a>
                            </li>
                            <li>
                                <a class="" href="drag-drop.html">Drag & Drop</a>
                            </li>
                            <li>
                                <a class="" href="dropdown.html">Dropdown</a>
                            </li>
                            <li>
                                <a class="" href="empty.html">Empty</a>
                            </li>
                            <li>
                                <a class="" href="grid.html"><span
                                        class="badge badge-success menuItem">New</span>Grid</a>
                            </li>
                            <li>
                                <a class="" href="input.html">Input</a>
                            </li>
                            <li>
                                <a class="" href="list.html">List</a>
                            </li>
                            <li>
                                <a class="" href="menu.html">Menu</a>
                            </li>
                            <li>
                                <a class="" href="message.html">Message</a>
                            </li>
                            <li>
                                <a class="" href="modal.html">Modals</a>
                            </li>
                            <li>
                                <a class="" href="notifications.html">Notification</a>
                            </li>
                            <li>
                                <a class="" href="page-header.html">Page
                                    Headers</a>
                            </li>
                            <li>
                                <a class="" href="pagination.html">Paginations</a>
                            </li>
                            <li>
                                <a class="" href="progressbar.html">Progress</a>
                            </li>
                            <li>
                                <a class="" href="radio.html">Radio</a>
                            </li>
                            <li>
                                <a class="" href="rate.html">Rate</a>
                            </li>
                            <li>
                                <a class="" href="result.html">Result</a>
                            </li>
                            <li>
                                <a class="" href="select.html">Select</a>
                            </li>
                            <li>
                                <a class="" href="skeleton.html">Skeleton</a>
                            </li>
                            <li>
                                <a class="" href="slider.html">Slider</a>
                            </li>
                            <li>
                                <a class="" href="spin.html">Spinner</a>
                            </li>
                            <li>
                                <a class="" href="statistics.html">Statistic</a>
                            </li>
                            <li>
                                <a class="" href="steps.html">Steps</a>
                            </li>
                            <li>
                                <a class="" href="switch.html">Switch</a>
                            </li>
                            <li>
                                <a class="" href="tab.html">Tabs</a>
                            </li>
                            <li>
                                <a class="" href="tag.html">Tags</a>
                            </li>
                            <li>
                                <a class="" href="timeline.html">Timeline</a>
                            </li>
                            <li>
                                <a class="" href="timeline-2.html">Timeline 2</a>
                            </li>
                            <li>
                                <a class="" href="timeline-3.html">Timeline 3</a>
                            </li>
                            <li>
                                <a class="" href="time-picker.html">Timepicker</a>
                            </li>
                            <li>
                                <a class="" href="uploads.html">Upload</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-child">
                        <a href="#" class="">
                            <span data-feather="bar-chart-2" class="nav-icon"></span>
                            <span class="menu-text">Charts</span>
                            <span class="toggle-icon"></span>
                        </a>
                        <ul>
                            <li>
                                <a class="" href="charts.html">Chart JS</a>
                            </li>
                            <li>
                                <a class="" href="google-chart.html">Google
                                    Charts</a>
                            </li>
                            <li>
                                <a class="" href="peity-chart.html">Peity
                                    Charts</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-child">
                        <a href="#" class="">
                            <span data-feather="disc" class="nav-icon"></span>
                            <span class="menu-text">Froms</span>
                            <span class="toggle-icon"></span>
                            <span class="badge badge-success menuItem">New</span>
                        </a>
                        <ul>
                            <li>
                                <a class="" href="form.html">Basics</a>
                            </li>
                            <li>
                                <a class="" href="form-layouts.html">Layouts</a>
                            </li>
                            <li>
                                <a class="" href="form-elements.html">Elements</a>
                            </li>
                            <li>
                                <a class="" href="form-components.html">Components</a>
                            </li>
                            <li>
                                <a class="" href="form-validations.html">Validations</a>
                            </li>
                        </ul>
                    </li>



                    <li class="has-child">
                        <a href="#" class="">
                            <span data-feather="cpu" class="nav-icon"></span>
                            <span class="menu-text">Table</span>
                            <span class="toggle-icon"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="basic-table.html" class="">Basic
                                    Table</a>
                            </li>
                            <li>
                                <a href="datatable.html" class="">Data Table</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-child">
                        <a href="#" class="">
                            <span data-feather="server" class="nav-icon"></span>
                            <span class="menu-text">Widget</span>
                            <span class="toggle-icon"></span>
                        </a>
                        <ul>
                            <li>
                                <a class="" href="widget-charts.html">Chart</a>
                            </li>
                            <li>
                                <a class="" href="widget-mixed.html">Mixed</a>
                            </li>
                            <li>
                                <a class="" href="widget-card.html">Card</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-child">
                        <a href="#" class="">
                            <span data-feather="square" class="nav-icon"></span>
                            <span class="menu-text">Wizards</span>
                            <span class="toggle-icon"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="checkout-wizard6.html" class="">Wizard 1</a>
                            </li>
                            <li>
                                <a href="checkout-wizard7.html" class="">Wizard 2</a>
                            </li>
                            <li>
                                <a href="checkout-wizard8.html" class="">Wizard 3</a>
                            </li>
                            <li>
                                <a href="checkout-wizard9.html" class="">Wizard 4</a>
                            </li>
                            <li>
                                <a href="checkout-wizard10.html" class="">Wizard
                                    5</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-child">
                        <a href="#" class="">
                            <span data-feather="grid" class="nav-icon"></span>
                            <span class="menu-text">Icons</span>
                            <span class="toggle-icon"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="feather.html" class="">Feather icons
                                    (svg)</a>
                            </li>
                            <li>
                                <a href="fontawesome.html" class="">Font
                                    Awesome</a>
                            </li>
                            <li>
                                <a href="lineawesome.html" class="">Line
                                    Awesome</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="editors.html" class="">
                            <span data-feather="edit" class="nav-icon"></span>
                            <span class="menu-text">Editors</span>
                            <span class="badge badge-success menuItem">New</span>
                        </a>
                    </li>
                    <li class="has-child">
                        <a href="#" class="">
                            <span data-feather="map" class="nav-icon"></span>
                            <span class="menu-text">Maps</span>
                            <span class="toggle-icon"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="google-map.html" class="">Google Maps</a>
                            </li>
                            <li>
                                <a href="leaflet-map.html" class="">Leaflet
                                    Maps</a>
                            </li>
                            <li>
                                <a href="vector-map.html" class="">Vector Maps</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-title m-top-30">
                        <span>Pages</span>
                    </li>
                    <li>
                        <a href="profile-setting.html" class="">
                            <span data-feather="settings" class="nav-icon"></span>
                            <span class="menu-text">Settings</span>
                        </a>
                    </li>
                    <li class="has-child">
                        <a href="#" class="">
                            <span data-feather="image" class="nav-icon"></span>
                            <span class="menu-text">Gallery</span>
                            <span class="toggle-icon"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="gallery.html" class="">Gallery 1</a>
                            </li>
                            <li>
                                <a href="gallery2.html" class="">Gallery 2<span
                                        class="badge badge-success menuItem">New</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="pricing.html" class="">
                            <span data-feather="dollar-sign" class="nav-icon"></span>
                            <span class="menu-text">Pricing</span>
                        </a>
                    </li>
                    <li>
                        <a href="banner.html" class="">
                            <span data-feather="cast" class="nav-icon"></span>
                            <span class="menu-text">Banners</span>
                        </a>
                    </li>
                    <li>
                        <a href="testimonial.html" class="">
                            <span data-feather="book-open" class="nav-icon"></span>
                            <span class="menu-text">Testimonial</span>
                        </a>
                    </li>

                    <li>
                        <a href="faq.html" class="">
                            <span data-feather="help-circle" class="nav-icon"></span>
                            <span class="menu-text">FAQ's</span>
                        </a>
                    </li>

                    <li>
                        <a href="search.html" class="">
                            <span data-feather="search" class="nav-icon"></span>
                            <span class="menu-text">Search Results</span>
                        </a>
                    </li>
                    <li>
                        <a href="blank.html" class="">
                            <span data-feather="circle" class="nav-icon"></span>
                            <span class="menu-text">Blank Page</span>
                            <span class="badge badge-success menuItem">New</span>
                        </a>
                    </li>
                    <li class="has-child">
                        <a href="#" class="">
                            <span data-feather="book" class="nav-icon"></span>
                            <span class="menu-text">Knowledge Base</span>
                            <span class="toggle-icon"></span>
                            <span class="badge badge-success menuItem">New</span>
                        </a>
                        <ul>
                            <li>
                                <a class="" href="knowledgebase.html">Knowledge
                                    Base</a>
                            </li>
                            <li>
                                <a class="" href="knowledgebase-2.html">All
                                    Article</a>
                            </li>

                            <li>
                                <a class="" href="knowledgebase-3.html">Single Article</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="support.html" class="">
                            <span data-feather="headphones" class="nav-icon"></span>
                            <span class="menu-text">Support Center</span>
                            <span class="badge badge-success menuItem">New</span>
                        </a>
                    </li>
                    <li>
                        <a href="dynamic-table.html" class="">
                            <span data-feather="database" class="nav-icon"></span>
                            <span class="menu-text">Dynamic Table</span>
                            <span class="badge badge-success menuItem">New</span>
                        </a>
                    </li>
                    <li>
                        <a href="maintenance.html" class="">
                            <span data-feather="airplay" class="nav-icon"></span>
                            <span class="menu-text">Maintenance</span>
                        </a>
                    </li>
                    <li>
                        <a href="404.html" class="">
                            <span data-feather="alert-circle" class="nav-icon"></span>
                            <span class="menu-text">404</span>
                        </a>
                    </li>
                    <li>
                        <a href="coming-soon.html" class="">
                            <span data-feather="clock" class="nav-icon"></span>
                            <span class="menu-text">Coming Soon</span>
                        </a>
                    </li>
                    <li>
                        <a href="login.html" class="">
                            <span data-feather="user" class="nav-icon"></span>
                            <span class="menu-text">Log In</span>
                        </a>
                    </li>
                    <li>
                        <a href="sign-up.html" class="">
                            <span data-feather="user-plus" class="nav-icon"></span>
                            <span class="menu-text">Sign Up</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <div class="contents">

            <div class="crm">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-lg-12">

                            <div class="breadcrumb-main">
                                <h4 class="text-capitalize breadcrumb-title">CRM</h4>
                                <div class="breadcrumb-action justify-content-center flex-wrap">
                                    <div class="action-btn">

                                        <div class="form-group mb-0">
                                            <div class="input-container icon-left position-relative">
                                                <span class="input-icon icon-left">
                                                    <span data-feather="calendar"></span>
                                                </span>
                                                <input type="text"
                                                    class="form-control form-control-default date-ranger"
                                                    name="date-ranger" placeholder="Oct 30, 2019 - Nov 30, 2019">
                                                <span class="input-icon icon-right">
                                                    <span data-feather="chevron-down"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown action-btn">
                                        <button class="btn btn-sm btn-default btn-white dropdown-toggle"
                                            type="button" id="dropdownMenu2" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-download"></i> Export
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <span class="dropdown-item">Export With</span>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-print"></i> Printer</a>
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-file-pdf"></i> PDF</a>
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-file-text"></i> Google Sheets</a>
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-file-excel"></i> Excel (XLSX)</a>
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-file-csv"></i> CSV</a>
                                        </div>
                                    </div>
                                    <div class="dropdown action-btn">
                                        <button class="btn btn-sm btn-default btn-white dropdown-toggle"
                                            type="button" id="dropdownMenu3" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-share"></i> Share
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                                            <span class="dropdown-item">Share Link</span>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-facebook"></i> Facebook</a>
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-twitter"></i> Twitter</a>
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-google"></i> Google</a>
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-feed"></i> Feed</a>
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-instagram"></i> Instagram</a>
                                        </div>
                                    </div>
                                    <div class="action-btn">
                                        <a href="#" class="btn btn-sm btn-primary btn-add">
                                            <i class="la la-plus"></i> Add New</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xxl-3 col-sm-6  col-ssm-12 mb-30">
                            <!-- Card 2 End  -->
                            <div
                                class="ap-po-details ap-po-details--2 p-25 radius-xl bg-white d-flex justify-content-between">
                                <div>





                                    <div class="overview-content">
                                        <h1>7,461</h1>
                                        <p>New Contact</p>
                                        <div class="ap-po-details-time">
                                            <span class="color-success"><i class="las la-arrow-up"></i>
                                                <strong>25%</strong></span>
                                            <small>Since last week</small>
                                        </div>
                                    </div>

                                </div>
                                <div class="ap-po-timeChart">
                                    <div class="overview-single__chart d-md-flex align-items-end">
                                        <div class="parentContainer">


                                            <div>
                                                <canvas id="mychart12"></canvas>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 2 End  -->
                        </div>
                        <div class="col-xxl-3 col-sm-6  col-ssm-12 mb-30">
                            <!-- Card 1 -->
                            <div
                                class="ap-po-details ap-po-details--2 p-25 radius-xl bg-white d-flex justify-content-between">
                                <div>





                                    <div class="overview-content">
                                        <h1>3,254</h1>
                                        <p>New Deals</p>
                                        <div class="ap-po-details-time">
                                            <span class="color-success"><i class="las la-arrow-up"></i>
                                                <strong>25%</strong></span>
                                            <small>Since last week</small>
                                        </div>
                                    </div>

                                </div>
                                <div class="ap-po-timeChart">
                                    <div class="overview-single__chart d-md-flex align-items-end">
                                        <div class="parentContainer">


                                            <div>
                                                <canvas id="mychart13"></canvas>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 1 End -->
                        </div>
                        <div class="col-xxl-3 col-sm-6  col-ssm-12 mb-30">
                            <!-- Card 3 -->
                            <div
                                class="ap-po-details ap-po-details--2 p-25 radius-xl bg-white d-flex justify-content-between">
                                <div>





                                    <div class="overview-content">
                                        <h1>541</h1>
                                        <p>New Leads</p>
                                        <div class="ap-po-details-time">
                                            <span class="color-danger"><i class="las la-arrow-down"></i>
                                                <strong>8.2%</strong></span>
                                            <small>Since last week</small>
                                        </div>
                                    </div>

                                </div>
                                <div class="ap-po-timeChart">
                                    <div class="overview-single__chart d-md-flex align-items-end">
                                        <div class="parentContainer">


                                            <div>
                                                <canvas id="mychart14"></canvas>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 3 End -->
                        </div>
                        <div class="col-xxl-3 col-sm-6  col-ssm-12 mb-30">
                            <!-- Card 1 -->
                            <div
                                class="ap-po-details ap-po-details--2 p-25 radius-xl bg-white d-flex justify-content-between">
                                <div>





                                    <div class="overview-content">
                                        <h1>$45.2k</h1>
                                        <p>Revenue</p>
                                        <div class="ap-po-details-time">
                                            <span class="color-success"><i class="las la-arrow-up"></i>
                                                <strong>12.3%</strong></span>
                                            <small>Since last week</small>
                                        </div>
                                    </div>

                                </div>
                                <div class="ap-po-timeChart">
                                    <div class="overview-single__chart d-md-flex align-items-end">
                                        <div class="parentContainer">


                                            <div>
                                                <canvas id="mychart15"></canvas>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 1 End -->
                        </div>
                        <div class="col-xl-7 col-md-6 mb-30">

                            <div class="card revenueChartTwo broder-0">
                                <div class="card-header">
                                    <h6>Revenue</h6>
                                    <div class="card-extra">
                                        <ul class="card-tab-links mr-3 nav-tabs nav" role="tablist">
                                            <li>
                                                <a class="active" href="#tl_revenue-today" data-toggle="tab"
                                                    id="tl_revenue-today-tab" role="tab"
                                                    aria-selected="false">Today</a>
                                            </li>
                                            <li>
                                                <a href="#tl_revenue-week" data-toggle="tab"
                                                    id="tl_revenue-week-tab" role="tab"
                                                    aria-selected="false">Week</a>
                                            </li>
                                            <li>
                                                <a href="#tl_revenue-month" data-toggle="tab"
                                                    id="tl_revenue-month-tab" role="tab"
                                                    aria-selected="false">Month</a>
                                            </li>
                                            <li>
                                                <a href="#tl_revenue-year" data-toggle="tab"
                                                    id="tl_revenue-year-tab" role="tab"
                                                    aria-selected="true">Year</a>
                                            </li>
                                        </ul>
                                        <div class="dropdown dropleft">
                                            <a href="#" role="button" id="revenue3"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span data-feather="more-horizontal"></span>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="revenue3">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ends: .card-header -->
                                <div class="card-body pt-0">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="tl_revenue-today"
                                            role="tabpanel" aria-labelledby="tl_revenue-today-tab">
                                            <div class="revenue-labels">
                                                <div class="current">
                                                    <strong class="text-third">$72,784</strong>
                                                    <span>Current Period</span>
                                                </div>
                                                <div>
                                                    <strong>$52,240</strong>
                                                    <span>Previous Period</span>
                                                </div>
                                            </div>
                                            <!-- ends: .performance-stats -->

                                            <div class="wp-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="myChart6TExtra"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tl_revenue-week" role="tabpanel"
                                            aria-labelledby="tl_revenue-week-tab">
                                            <div class="revenue-labels">
                                                <div class="current">
                                                    <strong class="text-third">$72,848</strong>
                                                    <span>Current Period</span>
                                                </div>
                                                <div>
                                                    <strong>$52,458</strong>
                                                    <span>Previous Period</span>
                                                </div>
                                            </div>
                                            <!-- ends: .performance-stats -->

                                            <div class="wp-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="myChart6WExtra"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tl_revenue-month" role="tabpanel"
                                            aria-labelledby="tl_revenue-month-tab">
                                            <div class="revenue-labels">
                                                <div class="current">
                                                    <strong class="text-third">$72,848</strong>
                                                    <span>Current Period</span>
                                                </div>
                                                <div>
                                                    <strong>$52,458</strong>
                                                    <span>Previous Period</span>
                                                </div>
                                            </div>
                                            <!-- ends: .performance-stats -->

                                            <div class="wp-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="myChart6MExtra"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tl_revenue-year" role="tabpanel"
                                            aria-labelledby="tl_revenue-year-tab">
                                            <div class="revenue-labels">
                                                <div class="current">
                                                    <strong class="text-third">$72,848</strong>
                                                    <span>Current Period</span>
                                                </div>
                                                <div>
                                                    <strong>$52,458</strong>
                                                    <span>Previous Period</span>
                                                </div>
                                            </div>
                                            <!-- ends: .performance-stats -->

                                            <div class="wp-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="myChart6Extra"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ends: .card-body -->
                            </div>

                        </div>
                        <div class="col-xl-5 col-md-6 mb-30">

                            <div class="card broder-0 cashflowChart2">
                                <div class="card-header">
                                    <h6>
                                        Closed Deals Performance
                                    </h6>
                                    <div class="card-extra">
                                        <ul class="card-tab-links mr-3 nav-tabs nav" role="tablist">
                                            <li>
                                                <a class="active" href="#t_revenue-week" data-toggle="tab"
                                                    id="t_revenue-week-tab" role="tab"
                                                    aria-selected="true">Week</a>
                                            </li>
                                            <li>
                                                <a href="#t_revenue-month" data-toggle="tab"
                                                    id="t_revenue-month-tab" role="tab"
                                                    aria-selected="false">Month</a>
                                            </li>
                                            <li>
                                                <a href="#t_revenue-year" data-toggle="tab"
                                                    id="t_revenue-year-tab" role="tab"
                                                    aria-selected="false">Year</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- ends: .card-header -->
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="t_revenue-week" role="tabpanel"
                                            aria-labelledby="t_revenue-week-tab">
                                            <div class="cashflow-display d-flex">
                                                <!-- ends: .cashflow-display__single -->
                                                <div class="cashflow-display__single">
                                                    <span class="cashflow-display__title">Won</span>
                                                    <h2 class="cashflow-display__amount">50.8<span
                                                            class="color-danger fs-14 fw-600 mr-10"><i
                                                                class="las la-arrow-down"></i>
                                                            <strong>12%</strong></span></h2>
                                                </div>
                                                <!-- ends: .cashflow-display__single -->
                                                <div class="cashflow-display__single">
                                                    <span class="cashflow-display__title">Amount</span>
                                                    <h2 class="cashflow-display__amount">$28k<span
                                                            class="color-success fs-14 fw-600 mr-10"><i
                                                                class="las la-arrow-up"></i>
                                                            <strong>15%</strong></span></h2>
                                                </div>
                                                <!-- ends: .cashflow-display__single -->
                                            </div>

                                            <div class="cashflow-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="barChartCashflow_Wextra"></canvas>
                                                    </div>


                                                </div>
                                                <ul class="legend-static ml-2">
                                                    <li class="custom-label">
                                                        <span class="bg-success"></span>Won
                                                    </li>
                                                    <li class="custom-label">
                                                        <span class="bg-primary"></span>Amount
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="t_revenue-month" role="tabpanel"
                                            aria-labelledby="t_revenue-month-tab">
                                            <div class="cashflow-display d-flex">
                                                <!-- ends: .cashflow-display__single -->
                                                <div class="cashflow-display__single">
                                                    <span class="cashflow-display__title">Won</span>
                                                    <h2 class="cashflow-display__amount">$74,240</h2>
                                                </div>
                                                <!-- ends: .cashflow-display__single -->
                                                <div class="cashflow-display__single">
                                                    <span class="cashflow-display__title">Amount</span>
                                                    <h2 class="cashflow-display__amount">$22,470</h2>
                                                </div>
                                                <!-- ends: .cashflow-display__single -->
                                            </div>

                                            <div class="cashflow-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="barChartCashflow_Mextra"></canvas>
                                                    </div>


                                                </div>
                                                <ul class="legend-static ml-2">
                                                    <li class="custom-label">
                                                        <span class="bg-success"></span>Won
                                                    </li>
                                                    <li class="custom-label">
                                                        <span class="bg-primary"></span>Amount
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="t_revenue-year" role="tabpanel"
                                            aria-labelledby="t_revenue-year-tab">
                                            <div class="cashflow-display d-flex">
                                                <!-- ends: .cashflow-display__single -->
                                                <div class="cashflow-display__single">
                                                    <span class="cashflow-display__title">Won</span>
                                                    <h2 class="cashflow-display__amount">50.8</h2>
                                                </div>
                                                <!-- ends: .cashflow-display__single -->
                                                <div class="cashflow-display__single">
                                                    <span class="cashflow-display__title">Amount</span>
                                                    <h2 class="cashflow-display__amount">$28k</h2>
                                                </div>
                                                <!-- ends: .cashflow-display__single -->
                                            </div>

                                            <div class="cashflow-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="barChartCashflowExtra"></canvas>
                                                    </div>


                                                </div>
                                                <ul class="legend-static ml-2">
                                                    <li class="custom-label">
                                                        <span class="bg-success"></span>Won
                                                    </li>
                                                    <li class="custom-label">
                                                        <span class="bg-primary"></span>Amount
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ends: .card-body -->
                            </div>

                        </div>
                        <div class="col-xxl-4 col-md-6 mb-30">
                            <div class="revenue-device-chart">

                                <div class="card broder-0">
                                    <div class="card-header">
                                        <h6>Email Sent</h6>
                                        <div class="card-extra">
                                            <ul class="card-tab-links nav-tabs nav mr-3" role="tablist">
                                                <li>
                                                    <a class="active" href="#rb_device-today" data-toggle="tab"
                                                        id="rb_device-today-tab" role="tab"
                                                        aria-selected="true">Today</a>
                                                </li>
                                                <li>
                                                    <a href="#rb_device-week" data-toggle="tab"
                                                        id="rb_device-week-tab" role="tab"
                                                        aria-selected="false">Week</a>
                                                </li>
                                                <li>
                                                    <a href="#rb_device-month" data-toggle="tab"
                                                        id="rb_device-month-tab" role="tab"
                                                        aria-selected="false">Month</a>
                                                </li>
                                            </ul>
                                            <div class="dropdown dropleft">
                                                <a href="#" role="button" id="performance"
                                                    data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <span data-feather="more-horizontal"></span>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="performance">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ends: .card-header -->
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane fade active show" id="rb_device-today"
                                                role="tabpanel" aria-labelledby="rb_device-today-tab">
                                                <div class="revenue-pieChart-wrap">


                                                    <div>
                                                        <canvas id="chartDoughnut3Extra"></canvas>
                                                    </div>


                                                </div>
                                                <div class="revenue-chart-box-list">
                                                    <div
                                                        class="revenue-chart-box d-flex flex-wrap align-items-center">
                                                        <div class="revenue-chart-box__Icon order-bg-opacity-success">
                                                            <img class="svg" src="img/svg/sent.svg"
                                                                alt="">
                                                        </div>
                                                        <div class="my-10">
                                                            <div class="revenue-chart-box__data">
                                                                4450
                                                            </div>
                                                            <div class="revenue-chart-box__label">
                                                                Total Sent
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="revenue-chart-box d-flex flex-wrap align-items-center">
                                                        <div class="revenue-chart-box__Icon order-bg-opacity-primary">
                                                            <img class="svg" src="img/svg/opened.svg"
                                                                alt="">
                                                        </div>
                                                        <div class="my-10">
                                                            <div class="revenue-chart-box__data">
                                                                5864
                                                            </div>
                                                            <div class="revenue-chart-box__label">
                                                                Open
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="revenue-chart-box d-flex flex-wrap align-items-center">
                                                        <div class="revenue-chart-box__Icon order-bg-opacity-warning">
                                                            <img class="svg" src="img/svg/not-open.svg"
                                                                alt="">
                                                        </div>
                                                        <div class="my-10">
                                                            <div class="revenue-chart-box__data">
                                                                2450
                                                            </div>
                                                            <div class="revenue-chart-box__label">
                                                                Not Open
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- ends: .revenue-chart-legend -->
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="rb_device-week" role="tabpanel"
                                                aria-labelledby="rb_device-week-tab">
                                                <div class="revenue-pieChart-wrap">


                                                    <div>
                                                        <canvas id="chartDoughnut3WExtra"></canvas>
                                                    </div>


                                                </div>
                                                <div class="revenue-chart-box-list">
                                                    <div
                                                        class="revenue-chart-box d-flex flex-wrap align-items-center">
                                                        <div class="revenue-chart-box__Icon order-bg-opacity-success">
                                                            <img class="svg" src="img/svg/sent.svg"
                                                                alt="">
                                                        </div>
                                                        <div class="my-10">
                                                            <div class="revenue-chart-box__data">
                                                                4450
                                                            </div>
                                                            <div class="revenue-chart-box__label">
                                                                Total Sent
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="revenue-chart-box d-flex flex-wrap align-items-center">
                                                        <div class="revenue-chart-box__Icon order-bg-opacity-primary">
                                                            <img class="svg" src="img/svg/opened.svg"
                                                                alt="">
                                                        </div>
                                                        <div class="my-10">
                                                            <div class="revenue-chart-box__data">
                                                                5864
                                                            </div>
                                                            <div class="revenue-chart-box__label">
                                                                Open
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="revenue-chart-box d-flex flex-wrap align-items-center">
                                                        <div class="revenue-chart-box__Icon order-bg-opacity-warning">
                                                            <img class="svg" src="img/svg/not-open.svg"
                                                                alt="">
                                                        </div>
                                                        <div class="my-10">
                                                            <div class="revenue-chart-box__data">
                                                                2450
                                                            </div>
                                                            <div class="revenue-chart-box__label">
                                                                Not Open
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- ends: .revenue-chart-legend -->
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="rb_device-month" role="tabpanel"
                                                aria-labelledby="rb_device-month-tab">
                                                <div class="revenue-pieChart-wrap">


                                                    <div>
                                                        <canvas id="chartDoughnut3MExtra"></canvas>
                                                    </div>


                                                </div>
                                                <div class="revenue-chart-box-list">
                                                    <div
                                                        class="revenue-chart-box d-flex flex-wrap align-items-center">
                                                        <div class="revenue-chart-box__Icon order-bg-opacity-success">
                                                            <img class="svg" src="img/svg/sent.svg"
                                                                alt="">
                                                        </div>
                                                        <div class="my-10">
                                                            <div class="revenue-chart-box__data">
                                                                4450
                                                            </div>
                                                            <div class="revenue-chart-box__label">
                                                                Total Sent
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="revenue-chart-box d-flex flex-wrap align-items-center">
                                                        <div class="revenue-chart-box__Icon order-bg-opacity-primary">
                                                            <img class="svg" src="img/svg/opened.svg"
                                                                alt="">
                                                        </div>
                                                        <div class="my-10">
                                                            <div class="revenue-chart-box__data">
                                                                5864
                                                            </div>
                                                            <div class="revenue-chart-box__label">
                                                                Open
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="revenue-chart-box d-flex flex-wrap align-items-center">
                                                        <div class="revenue-chart-box__Icon order-bg-opacity-warning">
                                                            <img class="svg" src="img/svg/not-open.svg"
                                                                alt="">
                                                        </div>
                                                        <div class="my-10">
                                                            <div class="revenue-chart-box__data">
                                                                2450
                                                            </div>
                                                            <div class="revenue-chart-box__label">
                                                                Not Open
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- ends: .revenue-chart-legend -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ends: .card-body -->
                                </div>

                            </div>
                        </div>

                        <div class="col-xxl-4 col-md-6 mb-30">

                            <div class="card border-0">
                                <div class="card-header">
                                    <h6>Sales Leaderboard</h6>
                                    <div class="card-extra">
                                        <ul class="card-tab-links mr-3 nav-tabs nav" role="tablist">
                                            <li>
                                                <a class="active" href="#t_selling-today" data-toggle="tab"
                                                    id="t_selling-today-tab" role="tab"
                                                    aria-selected="true">Today</a>
                                            </li>
                                            <li>
                                                <a href="#t_selling-week" data-toggle="tab"
                                                    id="t_selling-week-tab" role="tab"
                                                    aria-selected="true">Week</a>
                                            </li>
                                            <li>
                                                <a href="#t_selling-month" data-toggle="tab"
                                                    id="t_selling-month-tab" role="tab"
                                                    aria-selected="true">Month</a>
                                            </li>
                                            <li>
                                                <a href="#t_selling-year" data-toggle="tab"
                                                    id="t_selling-year-tab" role="tab"
                                                    aria-selected="true">Year</a>
                                            </li>
                                        </ul>
                                        <div class="dropdown dropleft">
                                            <a href="#" role="button" id="todo11"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span data-feather="more-horizontal"></span>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="todo11">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="t_selling-today"
                                            role="tabpanel" aria-labelledby="t_selling-today-tab">
                                            <div class="leader-table-wrap">
                                                <div class="table-responsive">
                                                    <table class="table table--default">
                                                        <thead>
                                                            <tr>
                                                                <th>Prducts Name</th>
                                                                <th>Deals</th>
                                                                <th>Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Samsung Galaxy S8 256GB</td>
                                                                <td>339</td>
                                                                <td>$60,258</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Half Sleeve Shirt</td>

                                                                <td>136</td>
                                                                <td>$2,483</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Marco Shoes</td>

                                                                <td>448</td>
                                                                <td>$19,758</td>
                                                            </tr>
                                                            <tr>
                                                                <td>15" Mackbook Pro</td>
                                                                <td>159</td>
                                                                <td>$197,458</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Apple iPhone X</td>
                                                                <td>146</td>
                                                                <td>115,254</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="t_selling-week" role="tabpanel"
                                            aria-labelledby="t_selling-week-tab">
                                            <div class="selling-table-wrap">
                                                <div class="table-responsive">
                                                    <table class="table table--default">
                                                        <thead>
                                                            <tr>
                                                                <th>Prducts Name</th>
                                                                <th>Deals</th>
                                                                <th>Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Samsung Galaxy S8 256GB</td>
                                                                <td>339</td>
                                                                <td>$60,258</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Half Sleeve Shirt</td>

                                                                <td>136</td>
                                                                <td>$2,483</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Marco Shoes</td>

                                                                <td>448</td>
                                                                <td>$19,758</td>
                                                            </tr>
                                                            <tr>
                                                                <td>15" Mackbook Pro</td>
                                                                <td>159</td>
                                                                <td>$197,458</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Apple iPhone X</td>
                                                                <td>146</td>
                                                                <td>115,254</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="t_selling-month" role="tabpanel"
                                            aria-labelledby="t_selling-month-tab">
                                            <div class="selling-table-wrap">
                                                <div class="table-responsive">
                                                    <table class="table table--default">
                                                        <thead>
                                                            <tr>
                                                                <th>Prducts Name</th>
                                                                <th>Deals</th>
                                                                <th>Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Samsung Galaxy S8 256GB</td>
                                                                <td>339</td>
                                                                <td>$60,258</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Half Sleeve Shirt</td>

                                                                <td>136</td>
                                                                <td>$2,483</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Marco Shoes</td>

                                                                <td>448</td>
                                                                <td>$19,758</td>
                                                            </tr>
                                                            <tr>
                                                                <td>15" Mackbook Pro</td>
                                                                <td>159</td>
                                                                <td>$197,458</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Apple iPhone X</td>
                                                                <td>146</td>
                                                                <td>115,254</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="t_selling-year" role="tabpanel"
                                            aria-labelledby="t_selling-year-tab">
                                            <div class="selling-table-wrap">
                                                <div class="table-responsive">
                                                    <table class="table table--default">
                                                        <thead>
                                                            <tr>
                                                                <th>Prducts Name</th>
                                                                <th>Deals</th>
                                                                <th>Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Samsung Galaxy S8 256GB</td>
                                                                <td>339</td>
                                                                <td>$60,258</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Half Sleeve Shirt</td>

                                                                <td>136</td>
                                                                <td>$2,483</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Marco Shoes</td>

                                                                <td>448</td>
                                                                <td>$19,758</td>
                                                            </tr>
                                                            <tr>
                                                                <td>15" Mackbook Pro</td>
                                                                <td>159</td>
                                                                <td>$197,458</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Apple iPhone X</td>
                                                                <td>146</td>
                                                                <td>115,254</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xxl-4 col-md-6 mb-30">

                            <div class="card border-0">
                                <div class="card-header">
                                    <h6>todo2</h6>
                                    <div class="card-extra">
                                        <ul class="card-tab-links mr-3 nav-tabs nav" role="tablist">
                                            <li>
                                                <a class="active" href="#t_deals-today" data-toggle="tab"
                                                    id="t_deals-today-tab" role="tab"
                                                    aria-selected="true">Today</a>
                                            </li>
                                            <li>
                                                <a href="#t_deals-week" data-toggle="tab" id="t_deals-week-tab"
                                                    role="tab" aria-selected="true">Week</a>
                                            </li>
                                            <li>
                                                <a href="#t_deals-month" data-toggle="tab" id="t_deals-month-tab"
                                                    role="tab" aria-selected="true">Month</a>
                                            </li>
                                            <li>
                                                <a href="#t_deals-year" data-toggle="tab" id="t_deals-year-tab"
                                                    role="tab" aria-selected="true">Year</a>
                                            </li>
                                        </ul>
                                        <div class="dropdown dropleft">
                                            <a href="#" role="button" id="todo"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span data-feather="more-horizontal"></span>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="todo">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="t_deals-today" role="tabpanel"
                                            aria-labelledby="t_deals-today-tab">
                                            <div class="deals-table-wrap">
                                                <div class="table-responsive">
                                                    <table class="table table--default">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="table-selling-content">
                                                                        <img src="img/author/1.jpg" alt="img">
                                                                        <div>
                                                                            <div class="title">
                                                                                Ahmad Musa
                                                                            </div>
                                                                            <span>20 June 2020</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>$38,536.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="table-selling-content">
                                                                        <img src="img/author/2.jpg" alt="img">
                                                                        <div>
                                                                            <div class="title">
                                                                                John Mark
                                                                            </div>
                                                                            <span>20 June 2020</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>$38,536.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="table-selling-content">
                                                                        <img src="img/author/3.jpg" alt="img">
                                                                        <div>
                                                                            <div class="title">
                                                                                David Miller
                                                                            </div>
                                                                            <span>20 June 2020</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>$38,536.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="table-selling-content">
                                                                        <img src="img/author/4.jpg" alt="img">
                                                                        <div>
                                                                            <div class="title">
                                                                                Chris Lein
                                                                            </div>
                                                                            <span>20 June 2020</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>$38,536.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="table-selling-content">
                                                                        <img src="img/author/1.jpg" alt="img">
                                                                        <div>
                                                                            <div class="title">
                                                                                Robert Philips
                                                                            </div>
                                                                            <span>20 June 2020</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>$38,536.00</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="t_deals-week" role="tabpanel"
                                            aria-labelledby="t_deals-week-tab">
                                            <div class="deals-table-wrap">
                                                <div class="table-responsive">
                                                    <table class="table table--default">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="table-selling-content">
                                                                        <img src="img/author/1.jpg" alt="img">
                                                                        <div>
                                                                            <div class="title">
                                                                                Ahmad Musa
                                                                            </div>
                                                                            <span>20 June 2020</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>$38,536.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="table-selling-content">
                                                                        <img src="img/author/2.jpg" alt="img">
                                                                        <div>
                                                                            <div class="title">
                                                                                John Mark
                                                                            </div>
                                                                            <span>20 June 2020</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>$38,536.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="table-selling-content">
                                                                        <img src="img/author/3.jpg" alt="img">
                                                                        <div>
                                                                            <div class="title">
                                                                                David Miller
                                                                            </div>
                                                                            <span>20 June 2020</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>$38,536.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="table-selling-content">
                                                                        <img src="img/author/4.jpg" alt="img">
                                                                        <div>
                                                                            <div class="title">
                                                                                Chris Lein
                                                                            </div>
                                                                            <span>20 June 2020</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>$38,536.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="table-selling-content">
                                                                        <img src="img/author/1.jpg" alt="img">
                                                                        <div>
                                                                            <div class="title">
                                                                                Robert Philips
                                                                            </div>
                                                                            <span>20 June 2020</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>$38,536.00</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="t_deals-month" role="tabpanel"
                                            aria-labelledby="t_deals-month-tab">
                                            <div class="deals-table-wrap">
                                                <div class="table-responsive">
                                                    <table class="table table--default">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="table-selling-content">
                                                                        <img src="img/author/1.jpg" alt="img">
                                                                        <div>
                                                                            <div class="title">
                                                                                Ahmad Musa
                                                                            </div>
                                                                            <span>20 June 2020</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>$38,536.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="table-selling-content">
                                                                        <img src="img/author/2.jpg" alt="img">
                                                                        <div>
                                                                            <div class="title">
                                                                                John Mark
                                                                            </div>
                                                                            <span>20 June 2020</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>$38,536.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="table-selling-content">
                                                                        <img src="img/author/3.jpg" alt="img">
                                                                        <div>
                                                                            <div class="title">
                                                                                David Miller
                                                                            </div>
                                                                            <span>20 June 2020</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>$38,536.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="table-selling-content">
                                                                        <img src="img/author/4.jpg" alt="img">
                                                                        <div>
                                                                            <div class="title">
                                                                                Chris Lein
                                                                            </div>
                                                                            <span>20 June 2020</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>$38,536.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="table-selling-content">
                                                                        <img src="img/author/1.jpg" alt="img">
                                                                        <div>
                                                                            <div class="title">
                                                                                Robert Philips
                                                                            </div>
                                                                            <span>20 June 2020</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>$38,536.00</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="t_deals-year" role="tabpanel"
                                            aria-labelledby="t_deals-year-tab">
                                            <div class="deals-table-wrap">
                                                <div class="table-responsive">
                                                    <table class="table table--default">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="table-selling-content">
                                                                        <img src="img/author/1.jpg" alt="img">
                                                                        <div>
                                                                            <div class="title">
                                                                                Ahmad Musa
                                                                            </div>
                                                                            <span>20 June 2020</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>$38,536.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="table-selling-content">
                                                                        <img src="img/author/2.jpg" alt="img">
                                                                        <div>
                                                                            <div class="title">
                                                                                John Mark
                                                                            </div>
                                                                            <span>20 June 2020</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>$38,536.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="table-selling-content">
                                                                        <img src="img/author/3.jpg" alt="img">
                                                                        <div>
                                                                            <div class="title">
                                                                                David Miller
                                                                            </div>
                                                                            <span>20 June 2020</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>$38,536.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="table-selling-content">
                                                                        <img src="img/author/4.jpg" alt="img">
                                                                        <div>
                                                                            <div class="title">
                                                                                Chris Lein
                                                                            </div>
                                                                            <span>20 June 2020</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>$38,536.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="table-selling-content">
                                                                        <img src="img/author/1.jpg" alt="img">
                                                                        <div>
                                                                            <div class="title">
                                                                                Robert Philips
                                                                            </div>
                                                                            <span>20 June 2020</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>$38,536.00</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- ends: .row -->
                </div>
            </div>

        </div>
        <footer class="footer-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-copyright">
                            <p>2020 @<a href="#">Aazztech</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-menu text-right">
                            <ul>
                                <li>
                                    <a href="#">About</a>
                                </li>
                                <li>
                                    <a href="#">Team</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <!-- ends: .Footer Menu -->
                    </div>
                </div>
            </div>
        </footer>
    </main>
    <div id="overlayer">
        <span class="loader-overlay">
            <div class="atbd-spin-dots spin-lg">
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
            </div>
        </span>
    </div>
    <a href="#" class="customizer-trigger">
        <span data-feather="settings"></span></a>
    <div class="customizer-wrapper">
        <div class="customizer">
            <div class="customizer__head">
                <h4 class="customizer__title">Customizer</h4>
                <span class="customizer__sub-title">Customize your overview page layout</span>
                <a href="#" class="customizer-close">
                    <span data-feather="x"></span></a>
            </div>
            <div class="customizer__body">
                <div class="customizer__single">
                    <h4>Layout Type</h4>
                    <ul class="customizer-list d-flex layout">
                        <li class="customizer-list__item">
                            <a href="https://demo.jsnorm.com/html/strikingdash/strikingdash/ltr" class="active">
                                <img src="img/ltr.png" alt="">
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                        <li class="customizer-list__item">
                            <a href="https://demo.jsnorm.com/html/strikingdash/strikingdash/rtl" class="">
                                <img src="img/rtl.png" alt="">
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- ends: .customizer__single -->

                <div class="customizer__single">
                    <h4>Sidebar Type</h4>
                    <ul class="customizer-list d-flex l_sidebar">
                        <li class="customizer-list__item">
                            <a href="#" data-layout="light" class="active">
                                <img src="img/light.png" alt="">
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                        <li class="customizer-list__item">
                            <a href="#" data-layout="dark">
                                <img src="img/dark.png" alt="">
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- ends: .customizer__single -->

                <div class="customizer__single">
                    <h4>Navbar Type</h4>
                    <ul class="customizer-list d-flex l_navbar">
                        <li class="customizer-list__item">
                            <a href="#" data-layout="side" class="active">
                                <img src="img/side.png" alt="">
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                        <li class="customizer-list__item top">
                            <a href="#" data-layout="top">
                                <img src="img/top.png" alt="">
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- ends: .customizer__single -->
            </div>
        </div>
    </div>
    <div class="overlay-dark-sidebar"></div>
    <div class="customizer-overlay"></div>

    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDduF2tLXicDEPDMAtC6-NLOekX0A5vlnY"></script>
    <!-- inject:js-->

    <script src="{{ url('/js/plugins.min.js') }} "></script>

    <script src="{{ url('/js/script.min.js') }} "></script>
    <!-- endinject-->
</body>

</html>
