<!--start sidebar -->
        <aside class="sidebar-wrapper" data-simplebar="true">
          <div class="sidebar-header">
            <div>
              <img src="{{ asset('admin/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
            </div>
            <div>
              <h4 class="logo-text">Snacked</h4>
            </div>
            <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
            </div>
          </div>
          <!--navigation-->
          <ul class="metismenu" id="menu">
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-house-fill"></i>
                </div>
                <div class="menu-title">Dashboard</div>
              </a>
              <ul>
                <li> <a href="{{ route('admin.dashboard') }}"><i class="bi bi-circle"></i>Blue Dashboard</a>
                </li>
                <li> <a href="{{ route('admin.page', 'index2') }}"><i class="bi bi-circle"></i>Color Dashboard</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-grid-fill"></i>
                </div>
                <div class="menu-title">Application</div>
              </a>
              <ul>
                <li> <a href="{{ route('admin.page', 'app-emailbox') }}"><i class="bi bi-circle"></i>Email</a>
                </li>
                <li> <a href="{{ route('admin.page', 'app-chat-box') }}"><i class="bi bi-circle"></i>Chat Box</a>
                </li>
                <li> <a href="{{ route('admin.page', 'app-file-manager') }}"><i class="bi bi-circle"></i>File Manager</a>
                </li>
                <li> <a href="{{ route('admin.page', 'app-to-do') }}"><i class="bi bi-circle"></i>Todo List</a>
                </li>
                <li> <a href="{{ route('admin.page', 'app-invoice') }}"><i class="bi bi-circle"></i>Invoice</a>
                </li>
                <li> <a href="{{ route('admin.page', 'app-fullcalender') }}"><i class="bi bi-circle"></i>Calendar</a>
                </li>
              </ul>
            </li>
            <li class="menu-label">UI Elements</li>
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-droplet-fill"></i>
                </div>
                <div class="menu-title">Widgets</div>
              </a>
              <ul>
                <li> <a href="{{ route('admin.page', 'widgets-static-widgets') }}"><i class="bi bi-circle"></i>Static Widgets</a>
                </li>
                <li> <a href="{{ route('admin.page', 'widgets-data-widgets') }}"><i class="bi bi-circle"></i>Data Widgets</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
                </div>
                <div class="menu-title">eCommerce</div>
              </a>
              <ul>
                <li> <a href="{{ route('admin.page', 'ecommerce-products-list') }}"><i class="bi bi-circle"></i>Products List</a>
                </li>
                <li> <a href="{{ route('admin.products') }}"><i class="bi bi-circle"></i>Products Grid</a>
                </li>
                <li> <a href="{{ route('admin.page', 'ecommerce-products-categories') }}"><i class="bi bi-circle"></i>Categories</a>
                </li>
                <li> <a href="{{ route('admin.page', 'ecommerce-orders') }}"><i class="bi bi-circle"></i>Orders</a>
                </li>
                <li> <a href="{{ route('admin.page', 'ecommerce-orders-detail') }}"><i class="bi bi-circle"></i>Order details</a>
                </li>
                <li> <a href="{{ route('admin.page', 'ecommerce-add-new-product') }}"><i class="bi bi-circle"></i>Add New Product</a>
                </li>
                <li> <a href="{{ route('admin.page', 'ecommerce-add-new-product-2') }}"><i class="bi bi-circle"></i>Add New Product 2</a>
                </li>
                <li> <a href="{{ route('admin.page', 'ecommerce-transactions') }}"><i class="bi bi-circle"></i>Transactions</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-award-fill"></i>
                </div>
                <div class="menu-title">Components</div>
              </a>
              <ul>
                <li> <a href="{{ route('admin.page', 'component-alerts') }}"><i class="bi bi-circle"></i>Alerts</a>
                </li>
                <li> <a href="{{ route('admin.page', 'component-accordions') }}"><i class="bi bi-circle"></i>Accordions</a>
                </li>
                <li> <a href="{{ route('admin.page', 'component-badges') }}"><i class="bi bi-circle"></i>Badges</a>
                </li>
                <li> <a href="{{ route('admin.page', 'component-buttons') }}"><i class="bi bi-circle"></i>Buttons</a>
                </li>
                <li> <a href="{{ route('admin.page', 'component-cards') }}"><i class="bi bi-circle"></i>Cards</a>
                </li>
                <li> <a href="{{ route('admin.page', 'component-carousels') }}"><i class="bi bi-circle"></i>Carousels</a>
                </li>
                <li> <a href="{{ route('admin.page', 'component-list-groups') }}"><i class="bi bi-circle"></i>List Groups</a>
                </li>
                <li> <a href="{{ route('admin.page', 'component-media-object') }}"><i class="bi bi-circle"></i>Media Objects</a>
                </li>
                <li> <a href="{{ route('admin.page', 'component-modals') }}"><i class="bi bi-circle"></i>Modals</a>
                </li>
                <li> <a href="{{ route('admin.page', 'component-navs-tabs') }}"><i class="bi bi-circle"></i>Navs & Tabs</a>
                </li>
                <li> <a href="{{ route('admin.page', 'component-navbar') }}"><i class="bi bi-circle"></i>Navbar</a>
                </li>
                <li> <a href="{{ route('admin.page', 'component-paginations') }}"><i class="bi bi-circle"></i>Pagination</a>
                </li>
                <li> <a href="{{ route('admin.page', 'component-popovers-tooltips') }}"><i class="bi bi-circle"></i>Popovers & Tooltips</a>
                </li>
                <li> <a href="{{ route('admin.page', 'component-progress-bars') }}"><i class="bi bi-circle"></i>Progress</a>
                </li>
                <li> <a href="{{ route('admin.page', 'component-spinners') }}"><i class="bi bi-circle"></i>Spinners</a>
                </li>
                <li> <a href="{{ route('admin.page', 'component-notifications') }}"><i class="bi bi-circle"></i>Notifications</a>
                </li>
                <li> <a href="{{ route('admin.page', 'component-avtars-chips') }}"><i class="bi bi-circle"></i>Avatrs & Chips</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-cloud-arrow-down-fill"></i>
                </div>
                <div class="menu-title">Icons</div>
              </a>
              <ul>
                <li> <a href="{{ route('admin.page', 'icons-line-icons') }}"><i class="bi bi-circle"></i>Line Icons</a>
                </li>
                <li> <a href="{{ route('admin.page', 'icons-boxicons') }}"><i class="bi bi-circle"></i>Boxicons</a>
                </li>
                <li> <a href="{{ route('admin.page', 'icons-feather-icons') }}"><i class="bi bi-circle"></i>Feather Icons</a>
                </li>
              </ul>
            </li>
            <li class="menu-label">Forms & Tables</li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-file-earmark-break-fill"></i>
                </div>
                <div class="menu-title">Forms</div>
              </a>
              <ul>
                <li> <a href="{{ route('admin.page', 'form-elements') }}"><i class="bi bi-circle"></i>Form Elements</a>
                </li>
                <li> <a href="{{ route('admin.page', 'form-input-group') }}"><i class="bi bi-circle"></i>Input Groups</a>
                </li>
                <li> <a href="{{ route('admin.page', 'form-layouts') }}"><i class="bi bi-circle"></i>Forms Layouts</a>
                </li>
                <li> <a href="{{ route('admin.page', 'form-validations') }}"><i class="bi bi-circle"></i>Form Validation</a>
                </li>
                <li> <a href="{{ route('admin.page', 'form-date-time-pickes') }}"><i class="bi bi-circle"></i>Date Pickers</a>
                </li>
                <li> <a href="{{ route('admin.page', 'form-select2') }}"><i class="bi bi-circle"></i>Select2</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-file-earmark-spreadsheet-fill"></i>
                </div>
                <div class="menu-title">Tables</div>
              </a>
              <ul>
                <li> <a href="{{ route('admin.page', 'table-basic-table') }}"><i class="bi bi-circle"></i>Basic Table</a>
                </li>
                <li> <a href="{{ route('admin.page', 'table-advance-tables') }}"><i class="bi bi-circle"></i>Advance Tables</a>
                </li>
                <li> <a href="{{ route('admin.datatable') }}"><i class="bi bi-circle"></i>Data Table</a>
                </li>
              </ul>
            </li>
            <li class="menu-label">Pages</li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-lock-fill"></i>
                </div>
                <div class="menu-title">Authentication</div>
              </a>
              <ul>
                <li> <a href="{{ route('admin.page', 'authentication-signin') }}" target="_blank"><i class="bi bi-circle"></i>Sign In</a>
                </li>
                <li> <a href="{{ route('admin.page', 'authentication-signup') }}" target="_blank"><i class="bi bi-circle"></i>Sign Up</a>
                </li>
                <li> <a href="{{ route('admin.page', 'authentication-signin-with-header-footer') }}" target="_blank"><i class="bi bi-circle"></i>Sign In with Header & Footer</a>
                </li>
                <li> <a href="{{ route('admin.page', 'authentication-signup-with-header-footer') }}" target="_blank"><i class="bi bi-circle"></i>Sign Up with Header & Footer</a>
                </li>
                <li> <a href="{{ route('admin.page', 'authentication-forgot-password') }}" target="_blank"><i class="bi bi-circle"></i>Forgot Password</a>
                </li>
                <li> <a href="{{ route('admin.page', 'authentication-reset-password') }}" target="_blank"><i class="bi bi-circle"></i>Reset Password</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="{{ route('admin.page', 'pages-user-profile') }}">
                <div class="parent-icon"><i class="bi bi-person-lines-fill"></i>
                </div>
                <div class="menu-title">User Profile</div>
              </a>
            </li>
            <li>
              <a href="{{ route('admin.page', 'pages-timeline') }}">
                <div class="parent-icon"><i class="bi bi-collection-play-fill"></i>
                </div>
                <div class="menu-title">Timeline</div>
              </a>
            </li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-exclamation-triangle-fill"></i>
                </div>
                <div class="menu-title">Errors</div>
              </a>
              <ul>
                <li> <a href="{{ route('admin.page', 'pages-errors-404-error') }}" target="_blank"><i class="bi bi-circle"></i>404 Error</a>
                </li>
                <li> <a href="{{ route('admin.page', 'pages-errors-500-error') }}" target="_blank"><i class="bi bi-circle"></i>500 Error</a>
                </li>
                <li> <a href="{{ route('admin.page', 'pages-errors-coming-soon') }}" target="_blank"><i class="bi bi-circle"></i>Coming Soon</a>
                </li>
                <li> <a href="{{ route('admin.page', 'pages-blank-page') }}" target="_blank"><i class="bi bi-circle"></i>Blank Page</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="{{ route('admin.page', 'pages-faq') }}">
                <div class="parent-icon"><i class="bi bi-question-lg"></i>
                </div>
                <div class="menu-title">FAQ</div>
              </a>
            </li>
            <li>
              <a href="{{ route('admin.page', 'pages-pricing-tables') }}">
                <div class="parent-icon"><i class="bi bi-tags-fill"></i>
                </div>
                <div class="menu-title">Pricing Tables</div>
              </a>
            </li>
            <li class="menu-label">Charts & Maps</li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-bar-chart-line-fill"></i>
                </div>
                <div class="menu-title">Charts</div>
              </a>
              <ul>
                <li> <a href="{{ route('admin.charts') }}"><i class="bi bi-circle"></i>Apex</a>
                </li>
                <li> <a href="{{ route('admin.page', 'charts-chartjs') }}"><i class="bi bi-circle"></i>Chartjs</a>
                </li>
                <li> <a href="{{ route('admin.page', 'charts-highcharts') }}"><i class="bi bi-circle"></i>Highcharts</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-pin-map-fill"></i>
                </div>
                <div class="menu-title">Maps</div>
              </a>
              <ul>
                <li> <a href="{{ route('admin.page', 'map-google-maps') }}"><i class="bi bi-circle"></i>Google Maps</a>
                </li>
                <li> <a href="{{ route('admin.page', 'map-vector-maps') }}"><i class="bi bi-circle"></i>Vector Maps</a>
                </li>
              </ul>
            </li>
            <li class="menu-label">Others</li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-music-note-list"></i>
                </div>
                <div class="menu-title">Menu Levels</div>
              </a>
              <ul>
                <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Level One</a>
                  <ul>
                    <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Level Two</a>
                      <ul>
                        <li> <a href="javascript:;"><i class="bi bi-circle"></i>Level Three</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <a href="https://codervent.com/skodash/documentation/index.html" target="_blank">
                <div class="parent-icon"><i class="bi bi-file-code-fill"></i>
                </div>
                <div class="menu-title">Documentation</div>
              </a>
            </li>
            <li>
              <a href="https://themeforest.net/user/codervent" target="_blank">
                <div class="parent-icon"><i class="bi bi-telephone-fill"></i>
                </div>
                <div class="menu-title">Support</div>
              </a>
            </li>
          </ul>
          <!--end navigation-->
       </aside>
       <!--end sidebar -->
