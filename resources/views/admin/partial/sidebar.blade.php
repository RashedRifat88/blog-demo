<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
  <!--begin::Sidebar Brand-->
  <div class="sidebar-brand">
    <!--begin::Brand Link-->
    <a href="{{ asset('/index.html" class="brand-link') }}">
      <!--begin::Brand Image-->
      <img src="{{ asset('/assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
        class="brand-image opacity-75 shadow" />
      <!--end::Brand Image-->
      <!--begin::Brand Text-->
      <span class="brand-text fw-light">AdminLTE 4</span>
      <!--end::Brand Text-->
    </a>
    <!--end::Brand Link-->
  </div>
  <!--end::Sidebar Brand-->
  <!--begin::Sidebar Wrapper-->
  <div class="sidebar-wrapper">
    <nav class="mt-2">
      <!--begin::Sidebar Menu-->
      <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="navigation" aria-label="Main navigation"
        data-accordion="false" id="navigation">
        {{-- <li class="nav-item menu-open"> --}}
        <li class="nav-item">
          <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>
              Dashboard
              {{-- <i class="nav-arrow bi bi-chevron-right"></i> --}}
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a class="nav-link active" href="{{ asset('/index.html ') }}">
                <i class="nav-icon bi bi-circle"></i>
                <p>Dashboard v1</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('/index2.html') }}">
                <i class="nav-icon bi bi-circle"></i>
                <p>Dashboard v2</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('/index3.html') }}">
                <i class="nav-icon bi bi-circle"></i>
                <p>Dashboard v3</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ asset('/generate/theme.html') }}">
            <i class="nav-icon bi bi-palette"></i>
            <p>Theme Generate</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="nav-icon bi bi-box-seam-fill"></i>
            <p>
              Widgets
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('/widgets/small-box.html') }}">
                <i class="nav-icon bi bi-circle"></i>
                <p>Small Box</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('/widgets/info-box.html') }}">
                <i class="nav-icon bi bi-circle"></i>
                <p>info Box</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('/widgets/cards.html') }}">
                <i class="nav-icon bi bi-circle"></i>
                <p>Cards</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="nav-icon bi bi-clipboard-fill"></i>
            <p>
              Layout Options
              <span class="nav-badge badge text-bg-secondary me-3">6</span>
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('/layout/unfixed-sidebar.html') }}">
                <i class="nav-icon bi bi-circle"></i>
                <p>Default Sidebar</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('/layout/fixed-sidebar.html') }}">
                <i class="nav-icon bi bi-circle"></i>
                <p>Fixed Sidebar</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('/layout/fixed-header.html') }}">
                <i class="nav-icon bi bi-circle"></i>
                <p>Fixed Header</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('/layout/fixed-footer.html') }}">
                <i class="nav-icon bi bi-circle"></i>
                <p>Fixed Footer</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('/layout/fixed-complete.html') }}">
                <i class="nav-icon bi bi-circle"></i>
                <p>Fixed Complete</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('/layout/layout-custom-area.html') }}">
                <i class="nav-icon bi bi-circle"></i>
                <p>Layout <small>+ Custom Area </small></p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('/layout/sidebar-mini.html') }}">
                <i class="nav-icon bi bi-circle"></i>
                <p>Sidebar Mini</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('/layout/collapsed-sidebar.html') }}">
                <i class="nav-icon bi bi-circle"></i>
                <p>Sidebar Mini <small>+ Collapsed</small></p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('/layout/logo-switch.html') }}">
                <i class="nav-icon bi bi-circle"></i>
                <p>Sidebar Mini <small>+ Logo Switch</small></p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('/layout/layout-rtl.html') }}">
                <i class="nav-icon bi bi-circle"></i>
                <p>Layout RTL</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="nav-icon bi bi-tree-fill"></i>
            <p>
              UI Elements
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('/UI/general.html') }}">
                <i class="nav-icon bi bi-circle"></i>
                <p>General</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('/UI/icons.html') }}">
                <i class="nav-icon bi bi-circle"></i>
                <p>Icons</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('/UI/timeline.html') }}">
                <i class="nav-icon bi bi-circle"></i>
                <p>Timeline</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="nav-icon bi bi-pencil-square"></i>
            <p>
              Forms
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('/forms/general.html') }}">
                <i class="nav-icon bi bi-circle"></i>
                <p>General Elements</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="nav-icon bi bi-table"></i>
            <p>
              Tables
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('/tables/simple.html') }}">
                <i class="nav-icon bi bi-circle"></i>
                <p>Simple Tables</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-header">EXAMPLES</li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="nav-icon bi bi-box-arrow-in-right"></i>
            <p>
              Auth
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                <p>
                  Version 1
                  <i class="nav-arrow bi bi-chevron-right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a class="nav-link" href="{{ asset('/examples/login.html') }}">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>Login</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ asset('/examples/register.html') }}">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>Register</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                <p>
                  Version 2
                  <i class="nav-arrow bi bi-chevron-right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a class="nav-link" href="{{ asset('/examples/login-v2.html') }}">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>Login</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ asset('/examples/register-v2.html') }}">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>Register</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('/examples/lockscreen.html') }}">
                <i class="nav-icon bi bi-circle"></i>
                <p>Lockscreen</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-header">DOCUMENTATIONS</li>
        <li class="nav-item">
          <a class="nav-link" href="{{ asset('/docs/introduction.html') }}">
            <i class="nav-icon bi bi-download"></i>
            <p>Installation</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ asset('/docs/layout.html') }}">
            <i class="nav-icon bi bi-grip-horizontal"></i>
            <p>Layout</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ asset('/docs/color-mode.html') }}">
            <i class="nav-icon bi bi-star-half"></i>
            <p>Color Mode</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="nav-icon bi bi-ui-checks-grid"></i>
            <p>
              Components
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('/docs/components/main-header.html') }}">
                <i class="nav-icon bi bi-circle"></i>
                <p>Main Header</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('/docs/components/main-sidebar.html') }}">
                <i class="nav-icon bi bi-circle"></i>
                <p>Main Sidebar</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="nav-icon bi bi-filetype-js"></i>
            <p>
              Javascript
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('/docs/javascript/treeview.html') }}">
                <i class="nav-icon bi bi-circle"></i>
                <p>Treeview</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ asset('/docs/browser-support.html') }}">
            <i class="nav-icon bi bi-browser-edge"></i>
            <p>Browser Support</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ asset('/docs/how-to-contribute.html') }}">
            <i class="nav-icon bi bi-hand-thumbs-up-fill"></i>
            <p>How To Contribute</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ asset('/docs/faq.html') }}">
            <i class="nav-icon bi bi-question-circle-fill"></i>
            <p>FAQ</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ asset('/docs/license.html') }}">
            <i class="nav-icon bi bi-patch-check-fill"></i>
            <p>License</p>
          </a>
        </li>
        <li class="nav-header">MULTI LEVEL EXAMPLE</li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="nav-icon bi bi-circle-fill"></i>
            <p>Level 1</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="nav-icon bi bi-circle-fill"></i>
            <p>
              Level 1
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="nav-icon bi bi-circle"></i>
                <p>Level 2</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="nav-icon bi bi-circle"></i>
                <p>
                  Level 2
                  <i class="nav-arrow bi bi-chevron-right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <i class="nav-icon bi bi-record-circle-fill"></i>
                    <p>Level 3</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <i class="nav-icon bi bi-record-circle-fill"></i>
                    <p>Level 3</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <i class="nav-icon bi bi-record-circle-fill"></i>
                    <p>Level 3</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="nav-icon bi bi-circle"></i>
                <p>Level 2</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="nav-icon bi bi-circle-fill"></i>
            <p>Level 1</p>
          </a>
        </li>
        <li class="nav-header">LABELS</li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="nav-icon bi bi-circle text-danger"></i>
            <p class="text">Important</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="nav-icon bi bi-circle text-warning"></i>
            <p>Warning</p>
          </a>
        </li>
        <li class="nav-item">
          {{-- <a class="nav-link" href="#">
            <i class="nav-icon bi bi-circle text-info"></i>
            <p>Logout</p> --}}
            <form method="POST" action="{{ route('logout') }}">
              @csrf

              <button type="submit"
                class="underline text-sm text-red-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Log Out') }}
              </button>
            </form>
          {{-- </a> --}}
        </li>
      </ul>
      <!--end::Sidebar Menu-->
    </nav>
  </div>
  <!--end::Sidebar Wrapper-->
</aside>