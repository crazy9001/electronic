<nav id="sidebar-nav" class="sidebar-nav">
    <div id="sidebar-wrapper" class="sidebar-wrapper" data-background="default">
        <component>sidebar-nav</component>
        <ul class="side-nav-top nav">
            <li class="sidebar-nav-logo">
                <component>sidebar-nav-logo</component>
                <img src="{{ asset('img/sidebar-logo.png') }}" alt="Dee Admin">
                <span class="logo-text">
                    <b>Dee</b> Template
                </span>
            </li>
            <li class="sidebar-nav-profile">
                <component>sidebar-nav-profile</component>
                <div class="profile-left">
                    <img src="{{ asset('img/user.jpg') }}" alt="{{ isset($userName) ? $userName : '' }}">
                </div>
                <div class="profile-right">
                    <span class="name">
                        {{ isset($userName) ? $userName : '' }}
                        <i id="user-profile-settings-toggler" class="fa fa-caret-down l-pad-5"></i>
                    </span>
                    <span class="info">
                        Project Manager
                    </span>
                </div>
            </li>
            <!-- Profile settings -->
            <li class="side-nav-profile-settings" style="display: none;">
                <ul class="inline-list">
                    <li>
                        <a id="right-notifier-toggler-3"
                           class="btn btn-white-hover mb-5"
                           data-placement="top"
                           data-toggle="tooltip"
                           data-original-title="Notifications">
                            <i class="fa fa-bell-o"></i>
                        </a>
                    </li>
                    <li>
                        <a class="btn btn-white-hover mb-5"
                           data-placement="top"
                           data-toggle="tooltip"
                           data-original-title="Profile"
                           href="profile.html">
                            <i class="fa fa-user"></i>
                        </a>
                    </li>
                    <li>
                        <a class="btn btn-white-hover mb-5"
                           data-placement="top"
                           data-toggle="tooltip"
                           data-original-title="Inbox"
                           href="inbox.html">
                            <i class="fa fa-inbox"></i>
                        </a>
                    </li>
                    <li>
                        <a class="btn btn-white-hover mb-5"
                           data-placement="top"
                           data-toggle="tooltip"
                           data-original-title="Desktop">
                            <i class="fa fa-desktop"></i>
                        </a>
                    </li>
                    <li>
                        <a class="btn btn-white-hover mb-5"
                           data-placement="top"
                           data-toggle="tooltip"
                           data-original-title="Support">
                            <i class="fa fa-support"></i>
                        </a>
                    </li>
                    <li>
                        <a class="btn btn-white-hover mb-5"
                           data-placement="top"
                           data-toggle="tooltip"
                           data-original-title="Log out"
                           href="login.html">
                            <i class="fa fa-sign-out l-pad-5"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- / Profile settings -->
        </ul>
        <ul id="side-nav" class="side-nav nav">
            <li class="side-nav-group">
                <span class="name">Options</span>
            </li>
            <li class="active">
                <a href="dashboard.html">
                    <i class="fa fa-tachometer"></i>
                    <span class="name">Dashboard</span>
                </a>
            </li>
            <li class="@@activate-ui-elements">
                <a href="#">
                    <i class="fa fa-desktop"></i>
                    <span class="name">UI Elements</span>
                    <span class="fa expand"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li class="@@activate-components">
                        <a href="components.html">
                            Components
                        </a>
                    </li>
                    <li class="@@activate-buttons">
                        <a href="buttons.html">
                            Buttons
                        </a>
                    </li>
                    <li class="@@activate-panels">
                        <a href="panels.html">
                            Panels
                        </a>
                    </li>
                    <li class="@@activate-panel-grid">
                        <a href="panelgrid.html">
                            Panel grid
                        </a>
                    </li>
                    <li class="@@activate-tabs">
                        <a href="tabs.html">
                            Tabs &amp; Accordions
                        </a>
                    </li>
                    <li class="@@activate-spinners">
                        <a href="spinners.html">
                            Spinners
                        </a>
                    </li>
                    <li class="@@activate-tooltips">
                        <a href="tooltips.html">
                            Tooltips &amp; Popovers
                        </a>
                    </li>
                    <li class="@@activate-checkboxes">
                        <a href="checkboxes.html">
                            Checkbox &amp; Radio
                        </a>
                    </li>
                    <li class="@@activate-switches">
                        <a href="switches.html">
                            Switches
                        </a>
                    </li>
                    <li class="@@activate-modals">
                        <a href="modals.html">
                            Modal dialogs
                        </a>
                    </li>
                    <li class="@@activate-alerts">
                        <a href="alerts.html">
                            Alert dialogs
                        </a>
                    </li>
                    <li class="@@activate-page-message">
                        <a href="page_message.html">
                            Page messages
                        </a>
                    </li>
                    <li class="@@activate-growls">
                        <a href="growl.html">
                            Growls
                        </a>
                    </li>
                </ul>
            </li>
            <li class="@@activate-extra-pages">
                <a href="#">
                    <i class="fa fa-trophy"></i>
                    <span class="name">Extra pages</span>
                    <span class="fa expand"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li class="@@activate-faq">
                        <a href="faq.html">
                            FAQ Page
                        </a>
                    </li>
                    <li class="@@activate-invoice">
                        <a href="invoice.html">
                            Invoice
                        </a>
                    </li>
                    <li class="@@activate-timeline">
                        <a href="timeline.html">
                            Timeline
                        </a>
                    </li>
                    <li class="@@activate-profile">
                        <a href="profile.html">
                            Profile
                        </a>
                    </li>
                    <li class="@@activate-activity">
                        <a href="activity.html">
                            Activity feed
                        </a>
                    </li>
                    <li class="@@activate-search">
                        <a href="search.html">
                            Search results
                        </a>
                    </li>
                    <li class="@@activate-todo">
                        <a href="todo.html">
                            TODO List
                            <span class="label label-warning label-s pull-right r-mar-10">New</span>
                        </a>
                    </li>
                    <li class="@@activate-pricing">
                        <a href="pricing.html">
                            Pricing
                            <span class="label label-warning label-s pull-right r-mar-10">New</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="@@activate-app-pages">
                <a href="#">
                    <i class="fa fa-file-o"></i>
                    <span class="name">App pages</span>
                    <span class="fa expand"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="login.html">
                            Login
                        </a>
                    </li>
                    <li>
                        <a href="password.html">
                            Forgot password
                        </a>
                    </li>
                    <li>
                        <a href="register.html">
                            Register
                        </a>
                    </li>
                    <li>
                        <a href="error-404.html">
                            404 Error
                        </a>
                    </li>
                    <li>
                        <a href="error-500.html">
                            500 Error
                        </a>
                    </li>
                    <li>
                        <a href="coming_soon.html">
                            Coming soon
                            <span class="label label-warning label-s pull-right r-mar-10">New</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="@@activate-mailbox">
                <a href="#">
                    <i class="fa fa-inbox"></i>
                    <span class="name">Mailbox</span>
                    <span class="fa expand"></span>
                    <span class="label label-warning label-s pull-right r-mar-10">3</span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li class="@@activate-inbox">
                        <a href="inbox.html">
                            Inbox
                        </a>
                    </li>
                    <li class="@@activate-mail-compose">
                        <a href="email_compose.html">
                            Email compose
                        </a>
                    </li>
                    <li class="@@activate-mail-view">

                        <a href="email_view.html">
                            Email detail
                        </a>
                    </li>
                </ul>
            </li>
            <li class="@@activate-calendar">
                <a href="calendar.html">
                    <i class="fa fa-calendar-o"></i>
                    <span class="name">Calendar</span>
                </a>
            </li>
            <li class="@@activate-forms">
                <a href="#">
                    <i class="fa fa-edit"></i>
                    <span class="name">Forms</span>
                    <span class="fa expand"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li class="@@activate-form-basic">
                        <a href="form_basic.html">
                            Form basics
                        </a>
                    </li>
                    <li class="@@activate-form-layouts">
                        <a href="form_layouts.html">
                            Form layouts
                        </a>
                    </li>
                    <li class="@@activate-form-advanced-controls">
                        <a href="form_advanced_controls.html">
                            Advanced controls
                        </a>
                    </li>
                    <li class="@@activate-form-text-editor">
                        <a href="text-editor.html">
                            Text editor
                        </a>
                    </li>
                </ul>
            </li>
            <li class="@@activate-widgets">
                <a href="widgets.html">
                    <i class="fa fa-space-shuttle"></i>
                    <span class="name">Widgets</span>
                </a>
            </li>
            <li class="@@activate-charts">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span class="name">Charts</span>
                    <span class="fa expand"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li class="@@activate-sparkline">
                        <a href="sparkline.html">
                            Sparkline / Peity
                        </a>
                    </li>
                    <li class="@@activate-chartjs">
                        <a href="chartjs.html">
                            Chart.js
                        </a>
                    </li>
                    <li class="@@activate-flotcharts">
                        <a href="flotcharts.html">
                            Flot Charts
                        </a>
                    </li>
                </ul>
            </li>
            <li class="@@activate-tables">
                <a href="#">
                    <i class="fa fa-table"></i>
                    <span class="name">
                        Tables
                    </span>
                    <span class="fa expand"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li class="@@activate-basic-tables">
                        <a href="tables.html">
                            Table basics
                        </a>
                    </li>
                    <li class="@@activate-datatables">
                        <a href="datatables.html">
                            DataTables
                        </a>
                    </li>
                </ul>
            </li>
            <li class="@@activate-grids">
                <a href="grids.html">
                    <i class="fa fa-th"></i>
                    <span class="name">Grids</span>
                </a>
            </li>
            <li class="@@activate-layouts">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span class="name">Layouts</span>
                    <span class="fa expand"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="#" class="container-navbar-fixer-nav">Fixed top navbar</a>
                    </li>
                    <li>
                        <a href="#" class="container-footer-fixer-nav">Fixed footer</a>
                    </li>
                    <li>
                        <a href="#" class="sidebar-collapser-nav">Sidebar collapsed </a>
                    </li>
                    <li>
                        <a href="#" class="sidebar-fixed-nav">Fixed sidebar</a>
                    </li>
                    <li>
                        <a href="#" class="boxed-selector-nav">Boxed</a>
                    </li>
                </ul>
            </li>
            <li class="@@activate-css-animate">
                <a href="css-animate.html">
                    <i class="fa fa-fighter-jet"></i>
                    <span class="name">CSS Animations</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-align-left"></i>
                    <span class="name">Menu levels</span>
                    <span class="fa expand"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="javascript:void(0);">
                            Item 1.1<span class="fa expand"></span>
                        </a>
                        <ul class="nav nav-third-level collapse">
                            <li>
                                <a href="javascript:void(0);">
                                    Item 1.1.1<span class="fa expand"></span>
                                </a>
                                <ul class="nav nav-fourth-level collapse">
                                    <li>
                                        <a href="javascript:void(0);">Item 1.1.1.1</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Item 1.1.1.2</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Item 1.1.2</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);">Item 1.2</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">Item 1.3</a>
                    </li>
                </ul>
            </li>
            <li class="@@activate-colors">
                <a href="colors.html">
                    <i class="fa fa-adjust"></i>
                    <span class="name">Colors</span>
                </a>
            </li>
            <li class="@@activate-typography">
                <a href="typography.html">
                    <i class="fa fa-text-width"></i>
                    <span class="name">Typography</span>
                </a>
            </li>
            <li class="@@activate-classes">
                <a href="classes.html">
                    <i class="fa fa-cubes"></i>
                    <span class="name">Generic classes</span>
                </a>
            </li>
            <li class="side-nav-group">
                <span class="name">Information</span>
            </li>
            <li class="@@activate-features">
                <a href="features.html">
                    <i class="fa fa-cube"></i>
                    <span class="name">Features</span>
                </a>
            </li>
            <li class="@@activate-next">
                <a href="next.html">
                    <i class="fa fa-clock-o"></i>
                    <span class="name">In progress</span>
                </a>
            </li>
            <li class="@@activate-credits">
                <a href="credits.html">
                    <i class="fa fa-credit-card"></i>
                    <span class="name">Credits</span>
                </a>
            </li>
            <li class="@@activate-versions">
                <a href="versions.html">
                    <i class="fa fa-database"></i>
                    <span class="name">Versions</span>
                </a>
            </li>
            <li class="side-nav-group">
                <span class="name">Status</span>
            </li>
            <li class="side-nav-info">
                <div class="row">
                    <div class="col-md-9">
                        Pending tasks
                    </div>
                    <div class="col-md-3">
                        <span class="badge badge-warning">6</span>
                    </div>
                </div>
            </li>
            <li class="side-nav-separator">
            <li class="side-nav-info">
                <div class="row">
                    <div class="col-md-12">
                        <small>
                            Application server progress
                        </small>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="progress progress-striped active progress-xs no-mb mt-5">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="55"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 55%">
                                <span class="sr-only">5%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="side-nav-info">
                <div class="row">
                    <div class="col-md-12">
                        <small>
                            Database backup progress
                        </small>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-12">
                        <div class="progress progress-striped active progress-xs no-mb mt-5">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="75"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                                <span class="sr-only">75%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>