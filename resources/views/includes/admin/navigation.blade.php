<ul class="navigation-menu">
    @role('admin')
    <li class="has-submenu">
        <a href="{{ route('admin.dashboard') }}"><i class="dripicons-home"></i> Dashboard</a>
    </li>

    <li class="has-submenu">
        <a href="#"><i class="dripicons-user-group"></i> Account <i class="mdi mdi-chevron-down mdi-drop"></i></a>
        <ul class="submenu megamenu">
            <li>
                <ul>
                    <li><a href="{{ route('user') }}">User</a></li>
                </ul>
            </li>

        </ul>
    </li>

    <li class="has-submenu">
        <a href="#"><i class="dripicons-home"></i> Data <i class="mdi mdi-chevron-down mdi-drop"></i></a>
        <ul class="submenu megamenu">
            <li>
                <ul>
                    <li><a href="{{ route('admin.hamlet') }}">Data Dusun</a></li>
                    <li><a href="{{ route('admin.house.data') }}">Kawasan Kumuh</a></li>
                </ul>
            </li>
        </ul>
    </li>

    <li class="has-submenu">
        <a href="#"><i class="dripicons-archive"></i> Advanced UI <i class="mdi mdi-chevron-down mdi-drop"></i></a>
        <ul class="submenu">
            <li><a href="advanced-alertify.html">Alertify</a></li>
            <li><a href="advanced-rating.html">Rating</a></li>
            <li><a href="advanced-nestable.html">Nestable</a></li>
            <li><a href="advanced-rangeslider.html">Range Slider</a></li>
            <li><a href="advanced-sweet-alert.html">Sweet-Alert 2</a></li>
            <li><a href="advanced-lightbox.html">Lightbox</a></li>
        </ul>
    </li>

    <li class="has-submenu">
        <a href="#"><i class="dripicons-duplicate"></i> Pages <i class="mdi mdi-chevron-down mdi-drop"></i></a>
        <ul class="submenu megamenu">
            <li>
                <ul>
                    <li><a href="pages-pricing.html">Pricing</a></li>
                    <li><a href="pages-invoice.html">Invoice</a></li>
                    <li><a href="pages-timeline.html">Timeline</a></li>
                    <li><a href="pages-faqs.html">FAQs</a></li>
                    <li><a href="pages-blank.html">Blank Page</a></li>
                    <li><a href="pages-login.html">Login</a></li>
                    <li><a href="pages-register.html">Register</a></li>
                </ul>
            </li>
            <li>
                <ul>
                    <li><a href="pages-recoverpw.html">Recover Password</a></li>
                    <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                    <li><a href="pages-404.html">Error 404</a></li>
                    <li><a href="pages-500.html">Error 500</a></li>
                    <li><a href="pages-maintenance.html">Maintenance</a></li>
                    <li><a href="pages-comingsoon.html">Coming Soon</a></li>
                </ul>
            </li>
        </ul>
    </li>
    @endrole
    @role('operator')
    <li class="has-submenu">
        <a href="index.html"><i class="dripicons-home"></i> Dashboard </a>
    </li>

    <li class="has-submenu">
        <a href="#"><i class="dripicons-user-group"></i> Account <i class="mdi mdi-chevron-down mdi-drop"></i></a>
        <ul class="submenu megamenu">
            <li>
                <ul>
                    <li><a href="{{ route('user') }}">User</a></li>
                </ul>
            </li>
        </ul>
    </li>

    <li class="has-submenu">
        <a href="#"><i class="dripicons-help"></i> Components <i class="mdi mdi-chevron-down mdi-drop"></i></a>
        <ul class="submenu">
            <li class="has-submenu">
                <a href="#">Icons</a>
                <ul class="submenu">
                    <li><a href="icons-material.html">Material Design</a></li>
                    <li><a href="icons-ion.html">Ion Icons</a></li>
                    <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                    <li><a href="icons-themify.html">Themify Icons</a></li>
                    <li><a href="icons-dripicons.html">Dripicons</a></li>
                    <li><a href="icons-typicons.html">Typicons Icons</a></li>
                </ul>
            </li>
            <li>
                <a href="calendar.html">Calendar</a>
            </li>
            <li class="has-submenu">
                <a href="#">Charts </a>
                <ul class="submenu">
                    <li><a href="charts-morris.html">Morris Chart</a></li>
                    <li><a href="charts-chartist.html">Chartist Chart</a></li>
                    <li><a href="charts-chartjs.html">Chartjs Chart</a></li>
                    <li><a href="charts-flot.html">Flot Chart</a></li>
                    <li><a href="charts-c3.html">C3 Chart</a></li>
                    <li><a href="charts-other.html">Jquery Knob Chart</a></li>
                </ul>
            </li>
            <li class="has-submenu">
                <a href="#">Forms</a>
                <ul class="submenu">
                    <li><a href="form-elements.html">Form Elements</a></li>
                    <li><a href="form-validation.html">Form Validation</a></li>
                    <li><a href="form-advanced.html">Form Advanced</a></li>
                    <li><a href="form-editors.html">Form Editors</a></li>
                    <li><a href="form-uploads.html">Form File Upload</a></li>
                    <li><a href="form-mask.html">Form Mask</a></li>
                    <li><a href="form-summernote.html">Summernote</a></li>
                    <li><a href="form-xeditable.html">Form Xeditable</a></li>
                </ul>
            </li>
            <li class="has-submenu">
                <a href="#">Tables </a>
                <ul class="submenu">
                    <li><a href="tables-basic.html">Basic Tables</a></li>
                    <li><a href="tables-datatable.html">Data Table</a></li>
                    <li><a href="tables-responsive.html">Responsive Table</a></li>
                    <li><a href="tables-editable.html">Editable Table</a></li>
                </ul>
            </li>
            <li class="has-submenu">
                <a href="#">Maps</a>
                <ul class="submenu">
                    <li><a href="maps-google.html"> Google Map</a></li>
                    <li><a href="maps-vector.html"> Vector Map</a></li>
                </ul>
            </li>

        </ul>
    </li>

    <li class="has-submenu">
        <a href="#"><i class="dripicons-archive"></i> Advanced UI <i class="mdi mdi-chevron-down mdi-drop"></i></a>
        <ul class="submenu">
            <li><a href="advanced-alertify.html">Alertify</a></li>
            <li><a href="advanced-rating.html">Rating</a></li>
            <li><a href="advanced-nestable.html">Nestable</a></li>
            <li><a href="advanced-rangeslider.html">Range Slider</a></li>
            <li><a href="advanced-sweet-alert.html">Sweet-Alert 2</a></li>
            <li><a href="advanced-lightbox.html">Lightbox</a></li>
        </ul>
    </li>

    <li class="has-submenu">
        <a href="#"><i class="dripicons-duplicate"></i> Pages <i class="mdi mdi-chevron-down mdi-drop"></i></a>
        <ul class="submenu megamenu">
            <li>
                <ul>
                    <li><a href="pages-pricing.html">Pricing</a></li>
                    <li><a href="pages-invoice.html">Invoice</a></li>
                    <li><a href="pages-timeline.html">Timeline</a></li>
                    <li><a href="pages-faqs.html">FAQs</a></li>
                    <li><a href="pages-blank.html">Blank Page</a></li>
                    <li><a href="pages-login.html">Login</a></li>
                    <li><a href="pages-register.html">Register</a></li>
                </ul>
            </li>
            <li>
                <ul>
                    <li><a href="pages-recoverpw.html">Recover Password</a></li>
                    <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                    <li><a href="pages-404.html">Error 404</a></li>
                    <li><a href="pages-500.html">Error 500</a></li>
                    <li><a href="pages-maintenance.html">Maintenance</a></li>
                    <li><a href="pages-comingsoon.html">Coming Soon</a></li>
                </ul>
            </li>
        </ul>
    </li>
    @endrole
    @role('kepala dinas')
    <li class="has-submenu">
        <a href="index.html"><i class="dripicons-home"></i> Dashboard</a>
    </li>

    {{-- <li class="has-submenu">
        <a href="#"><i class="dripicons-user-group"></i> Account <i class="mdi mdi-chevron-down mdi-drop"></i></a>
        <ul class="submenu megamenu">
            <li>
                <ul>
                    <li><a href="{{ route('user') }}">User</a></li>
                </ul>
            </li>
        </ul>
    </li> --}}

    <li class="has-submenu">
        <a href="#"><i class="dripicons-help"></i> Components <i class="mdi mdi-chevron-down mdi-drop"></i></a>
        <ul class="submenu">
            <li class="has-submenu">
                <a href="#">Icons</a>
                <ul class="submenu">
                    <li><a href="icons-material.html">Material Design</a></li>
                    <li><a href="icons-ion.html">Ion Icons</a></li>
                    <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                    <li><a href="icons-themify.html">Themify Icons</a></li>
                    <li><a href="icons-dripicons.html">Dripicons</a></li>
                    <li><a href="icons-typicons.html">Typicons Icons</a></li>
                </ul>
            </li>
            <li>
                <a href="calendar.html">Calendar</a>
            </li>
            <li class="has-submenu">
                <a href="#">Charts </a>
                <ul class="submenu">
                    <li><a href="charts-morris.html">Morris Chart</a></li>
                    <li><a href="charts-chartist.html">Chartist Chart</a></li>
                    <li><a href="charts-chartjs.html">Chartjs Chart</a></li>
                    <li><a href="charts-flot.html">Flot Chart</a></li>
                    <li><a href="charts-c3.html">C3 Chart</a></li>
                    <li><a href="charts-other.html">Jquery Knob Chart</a></li>
                </ul>
            </li>
            <li class="has-submenu">
                <a href="#">Forms</a>
                <ul class="submenu">
                    <li><a href="form-elements.html">Form Elements</a></li>
                    <li><a href="form-validation.html">Form Validation</a></li>
                    <li><a href="form-advanced.html">Form Advanced</a></li>
                    <li><a href="form-editors.html">Form Editors</a></li>
                    <li><a href="form-uploads.html">Form File Upload</a></li>
                    <li><a href="form-mask.html">Form Mask</a></li>
                    <li><a href="form-summernote.html">Summernote</a></li>
                    <li><a href="form-xeditable.html">Form Xeditable</a></li>
                </ul>
            </li>
            <li class="has-submenu">
                <a href="#">Tables </a>
                <ul class="submenu">
                    <li><a href="tables-basic.html">Basic Tables</a></li>
                    <li><a href="tables-datatable.html">Data Table</a></li>
                    <li><a href="tables-responsive.html">Responsive Table</a></li>
                    <li><a href="tables-editable.html">Editable Table</a></li>
                </ul>
            </li>
            <li class="has-submenu">
                <a href="#">Maps</a>
                <ul class="submenu">
                    <li><a href="maps-google.html"> Google Map</a></li>
                    <li><a href="maps-vector.html"> Vector Map</a></li>
                </ul>
            </li>

        </ul>
    </li>

    <li class="has-submenu">
        <a href="#"><i class="dripicons-archive"></i> Advanced UI <i class="mdi mdi-chevron-down mdi-drop"></i></a>
        <ul class="submenu">
            <li><a href="advanced-alertify.html">Alertify</a></li>
            <li><a href="advanced-rating.html">Rating</a></li>
            <li><a href="advanced-nestable.html">Nestable</a></li>
            <li><a href="advanced-rangeslider.html">Range Slider</a></li>
            <li><a href="advanced-sweet-alert.html">Sweet-Alert 2</a></li>
            <li><a href="advanced-lightbox.html">Lightbox</a></li>
        </ul>
    </li>

    <li class="has-submenu">
        <a href="#"><i class="dripicons-duplicate"></i> Pages <i class="mdi mdi-chevron-down mdi-drop"></i></a>
        <ul class="submenu megamenu">
            <li>
                <ul>
                    <li><a href="pages-pricing.html">Pricing</a></li>
                    <li><a href="pages-invoice.html">Invoice</a></li>
                    <li><a href="pages-timeline.html">Timeline</a></li>
                    <li><a href="pages-faqs.html">FAQs</a></li>
                    <li><a href="pages-blank.html">Blank Page</a></li>
                    <li><a href="pages-login.html">Login</a></li>
                    <li><a href="pages-register.html">Register</a></li>
                </ul>
            </li>
            <li>
                <ul>
                    <li><a href="pages-recoverpw.html">Recover Password</a></li>
                    <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                    <li><a href="pages-404.html">Error 404</a></li>
                    <li><a href="pages-500.html">Error 500</a></li>
                    <li><a href="pages-maintenance.html">Maintenance</a></li>
                    <li><a href="pages-comingsoon.html">Coming Soon</a></li>
                </ul>
            </li>
        </ul>
    </li>
    @endrole
    @role('kabupaten')
    <li class="has-submenu">
        <a href="index.html"><i class="dripicons-home"></i> Dashboard</a>
    </li>

    <li class="has-submenu">
        <a href="#"><i class="dripicons-user-group"></i> Account <i class="mdi mdi-chevron-down mdi-drop"></i></a>
        <ul class="submenu">
            <li>
                <ul>
                    <li><a href="{{ route('user') }}">Profile</a></li>
                </ul>
            </li>
            <li>
                <ul>
                    <li><a href="{{ route('user') }}">User</a></li>
                </ul>
            </li>
        </ul>
    </li>

    <li class="has-submenu">
        <a href="#"><i class="dripicons-help"></i> Components <i class="mdi mdi-chevron-down mdi-drop"></i></a>
        <ul class="submenu">
            <li class="has-submenu">
                <a href="#">Icons</a>
                <ul class="submenu">
                    <li><a href="icons-material.html">Material Design</a></li>
                    <li><a href="icons-ion.html">Ion Icons</a></li>
                    <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                    <li><a href="icons-themify.html">Themify Icons</a></li>
                    <li><a href="icons-dripicons.html">Dripicons</a></li>
                    <li><a href="icons-typicons.html">Typicons Icons</a></li>
                </ul>
            </li>
            <li>
                <a href="calendar.html">Calendar</a>
            </li>
            <li class="has-submenu">
                <a href="#">Charts </a>
                <ul class="submenu">
                    <li><a href="charts-morris.html">Morris Chart</a></li>
                    <li><a href="charts-chartist.html">Chartist Chart</a></li>
                    <li><a href="charts-chartjs.html">Chartjs Chart</a></li>
                    <li><a href="charts-flot.html">Flot Chart</a></li>
                    <li><a href="charts-c3.html">C3 Chart</a></li>
                    <li><a href="charts-other.html">Jquery Knob Chart</a></li>
                </ul>
            </li>
            <li class="has-submenu">
                <a href="#">Forms</a>
                <ul class="submenu">
                    <li><a href="form-elements.html">Form Elements</a></li>
                    <li><a href="form-validation.html">Form Validation</a></li>
                    <li><a href="form-advanced.html">Form Advanced</a></li>
                    <li><a href="form-editors.html">Form Editors</a></li>
                    <li><a href="form-uploads.html">Form File Upload</a></li>
                    <li><a href="form-mask.html">Form Mask</a></li>
                    <li><a href="form-summernote.html">Summernote</a></li>
                    <li><a href="form-xeditable.html">Form Xeditable</a></li>
                </ul>
            </li>
            <li class="has-submenu">
                <a href="#">Tables </a>
                <ul class="submenu">
                    <li><a href="tables-basic.html">Basic Tables</a></li>
                    <li><a href="tables-datatable.html">Data Table</a></li>
                    <li><a href="tables-responsive.html">Responsive Table</a></li>
                    <li><a href="tables-editable.html">Editable Table</a></li>
                </ul>
            </li>
            <li class="has-submenu">
                <a href="#">Maps</a>
                <ul class="submenu">
                    <li><a href="maps-google.html"> Google Map</a></li>
                    <li><a href="maps-vector.html"> Vector Map</a></li>
                </ul>
            </li>

        </ul>
    </li>

    <li class="has-submenu">
        <a href="#"><i class="dripicons-archive"></i> Advanced UI <i class="mdi mdi-chevron-down mdi-drop"></i></a>
        <ul class="submenu">
            <li><a href="advanced-alertify.html">Alertify</a></li>
            <li><a href="advanced-rating.html">Rating</a></li>
            <li><a href="advanced-nestable.html">Nestable</a></li>
            <li><a href="advanced-rangeslider.html">Range Slider</a></li>
            <li><a href="advanced-sweet-alert.html">Sweet-Alert 2</a></li>
            <li><a href="advanced-lightbox.html">Lightbox</a></li>
        </ul>
    </li>

    <li class="has-submenu">
        <a href="#"><i class="dripicons-duplicate"></i> Pages <i class="mdi mdi-chevron-down mdi-drop"></i></a>
        <ul class="submenu megamenu">
            <li>
                <ul>
                    <li><a href="pages-pricing.html">Pricing</a></li>
                    <li><a href="pages-invoice.html">Invoice</a></li>
                    <li><a href="pages-timeline.html">Timeline</a></li>
                    <li><a href="pages-faqs.html">FAQs</a></li>
                    <li><a href="pages-blank.html">Blank Page</a></li>
                    <li><a href="pages-login.html">Login</a></li>
                    <li><a href="pages-register.html">Register</a></li>
                </ul>
            </li>
            <li>
                <ul>
                    <li><a href="pages-recoverpw.html">Recover Password</a></li>
                    <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                    <li><a href="pages-404.html">Error 404</a></li>
                    <li><a href="pages-500.html">Error 500</a></li>
                    <li><a href="pages-maintenance.html">Maintenance</a></li>
                    <li><a href="pages-comingsoon.html">Coming Soon</a></li>
                </ul>
            </li>
        </ul>
    </li>
    @endrole
</ul>