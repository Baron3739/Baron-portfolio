<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from themesdesign.in/nazox-ajax/layouts/ecommerce-add-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Aug 2023 13:09:39 GMT -->
  <head>
    <meta charset="utf-8" />
    <title>Add Product | Nazox - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      content="Premium Multipurpose Admin & Dashboard Template"
      name="description"
    />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/icon.jpeg" />

    <!-- twitter-bootstrap-wizard css -->
    <link
      rel="stylesheet"
      href="assets/libs/twitter-bootstrap-wizard/prettify.css"
    />

    <!-- select2 css -->
    <link
      href="assets/libs/select2/css/select2.min.css"
      rel="stylesheet"
      type="text/css"
    />

    <!-- dropzone css -->
    <link
      href="assets/libs/dropzone/min/dropzone.min.css"
      rel="stylesheet"
      type="text/css"
    />

    <!-- Bootstrap Css -->
    <link
      href="assets/css/bootstrap.min.css"
      id="bootstrap-style"
      rel="stylesheet"
      type="text/css"
    />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link
      href="assets/css/app.min.css"
      id="app-style"
      rel="stylesheet"
      type="text/css"
    />
  </head>

  <body data-sidebar="white">
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">
      <header id="page-topbar">
        <div class="navbar-header">
          <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
              <a href="index.php" class="logo logo-dark">
                <span class="logo-sm">
                  <img
                    src="assets/images/logoo.png"
                    alt="logo-sm-dark"
                    height="30"
                  />
                </span>
                <span class="logo-lg">
                  <img
                    src="assets/images/logoo.png"
                    alt="logo-dark"
                    height="50"
                  />
                </span>
              </a>
            </div>

            <button
              type="button"
              class="btn btn-sm px-3 font-size-24 header-item waves-effect"
              id="vertical-menu-btn"
            >
              <i class="ri-menu-2-line align-middle"></i>
            </button>

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
              <div class="position-relative">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Search..."
                />
                <span class="ri-search-line"></span>
              </div>
            </form>
          </div>

          <div class="d-flex">
            <div class="dropdown d-inline-block d-lg-none ms-2">
              <button
                type="button"
                class="btn header-item noti-icon waves-effect"
                id="page-header-search-dropdown"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <i class="ri-search-line"></i>
              </button>
              <div
                class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                aria-labelledby="page-header-search-dropdown"
              >
                <form class="p-3">
                  <div class="mb-3 m-0">
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Search ..."
                      />
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                          <i class="ri-search-line"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block ms-1">
              <button
                type="button"
                class="btn header-item noti-icon waves-effect"
                data-toggle="fullscreen"
              >
                <i class="ri-fullscreen-line"></i>
              </button>
            </div>

            <div class="dropdown d-inline-block">
              <button
                type="button"
                class="btn header-item noti-icon waves-effect"
                id="page-header-notifications-dropdown"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="ri-notification-3-line"></i>
                <span class="noti-dot"></span>
              </button>
              <div
                class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                aria-labelledby="page-header-notifications-dropdown"
              >
                <div class="p-3">
                  <div class="row align-items-center">
                    <div class="col">
                      <h6 class="m-0">Notifications</h6>
                    </div>
                    <div class="col-auto">
                      <a href="#!" class="small"> View All</a>
                    </div>
                  </div>
                </div>
                
                <div class="p-2 border-top">
                  <div class="d-grid">
                    <a
                      class="btn btn-sm btn-link font-size-14 text-center"
                      href="javascript:void(0)"
                    >
                      <i class="mdi mdi-arrow-right-circle me-1"></i> View
                      More..
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- ========== Left Sidebar Start ========== -->
      <div class="vertical-menu">
        <div data-simplebar class="h-100">
          <!--- Sidemenu -->
          <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
              <li class="menu-title">Menu</li>

              <li>
                <a href="index.php" class="waves-effect">
                  <i class="ri-dashboard-line"></i
                  ><span class="badge rounded-pill bg-success float-end"
                    ></span
                  >
                  <span>Dashboard</span>
                </a>
              </li>

              <!--   -->

            
             

              <!-- <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                  <i class="ri-account-circle-line"></i>
                  <span>Authentication</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="auth-login.html">Login</a></li>
                  <li><a href="auth-register.html">Register</a></li>
                  <li><a href="auth-recoverpw.html">Recover Password</a></li>
                  <li><a href="auth-lock-screen.html">Lock Screen</a></li>
                </ul>
              </li> -->
             

              <!-- <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                  <i class="ri-profile-line"></i>
                  <span>Utility</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="pages-starter.html">Starter Page</a></li>
                  <li><a href="pages-maintenance.html">Maintenance</a></li>
                  <li><a href="pages-comingsoon.html">Coming Soon</a></li>
                  <li><a href="pages-timeline.html">Timeline</a></li>
                  <li><a href="pages-faqs.html">FAQs</a></li>
                  <li><a href="pages-pricing.html">Pricing</a></li>
                  <li><a href="pages-404.html">Error 404</a></li>
                  <li><a href="pages-500.html">Error 500</a></li>
                </ul>
              </li>

              <li class="menu-title">Components</li>

              <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                  <i class="ri-pencil-ruler-2-line"></i>
                  <span>UI Elements</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="ui-alerts.html">Alerts</a></li>
                  <li><a href="ui-buttons.html">Buttons</a></li>
                  <li><a href="ui-cards.html">Cards</a></li>
                  <li><a href="ui-carousel.html">Carousel</a></li>
                  <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                  <li><a href="ui-grid.html">Grid</a></li>
                  <li><a href="ui-images.html">Images</a></li>
                  <li><a href="ui-lightbox.html">Lightbox</a></li>
                  <li><a href="ui-modals.html">Modals</a></li>
                  <li><a href="ui-offcanvas.html">Offcavas</a></li>
                  <li><a href="ui-rangeslider.html">Range Slider</a></li>
                  <li><a href="ui-roundslider.html">Round Slider</a></li>
                  <li><a href="ui-session-timeout.html">Session Timeout</a></li>
                  <li><a href="ui-progressbars.html">Progress Bars</a></li>
                  <li><a href="ui-sweet-alert.html">Sweetalert 2</a></li>
                  <li>
                    <a href="ui-tabs-accordions.html">Tabs & Accordions</a>
                  </li>
                  <li><a href="ui-typography.html">Typography</a></li>
                  <li><a href="ui-video.html">Video</a></li>
                  <li><a href="ui-general.html">General</a></li>
                  <li><a href="ui-rating.html">Rating</a></li>
                  <li><a href="ui-notifications.html">Notifications</a></li>
                </ul>
              </li> -->

              <!-- <li>
                <a href="javascript: void(0);" class="waves-effect">
                  <i class="ri-eraser-fill"></i>
                  <span class="badge rounded-pill bg-danger float-end">6</span>
                  <span>Forms</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="form-elements.html">Form Elements</a></li>
                  <li><a href="form-validation.html">Form Validation</a></li>
                  <li>
                    <a href="form-advanced.html">Form Advanced Plugins</a>
                  </li>
                  <li><a href="form-editors.html">Form Editors</a></li>
                  <li><a href="form-uploads.html">Form File Upload</a></li>
                  <li><a href="form-xeditable.html">Form X-editable</a></li>
                  <li><a href="form-wizard.html">Form Wizard</a></li>
                  <li><a href="form-mask.html">Form Mask</a></li>
                </ul>
              </li>

              <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                  <i class="ri-table-2"></i>
                  <span>Tables</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="tables-basic.html">Basic Tables</a></li>
                  <li><a href="tables-datatable.html">Data Tables</a></li>
                  <li><a href="tables-responsive.html">Responsive Table</a></li>
                  <li><a href="tables-editable.html">Editable Table</a></li>
                </ul>
              </li>

              <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                  <i class="ri-bar-chart-line"></i>
                  <span>Charts</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="charts-apex.html">Apex Charts</a></li>
                  <li><a href="charts-chartjs.html">Chartjs Charts</a></li>
                  <li><a href="charts-flot.html">Flot Charts</a></li>
                  <li><a href="charts-knob.html">Jquery Knob Charts</a></li>
                  <li><a href="charts-sparkline.html">Sparkline Charts</a></li>
                </ul>
              </li> -->

              <!-- <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                  <i class="ri-brush-line"></i>
                  <span>Icons</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="icons-remix.html">Remix Icons</a></li>
                  <li>
                    <a href="icons-materialdesign.html">Material Design</a>
                  </li>
                  <li><a href="icons-dripicons.html">Dripicons</a></li>
                  <li><a href="icons-fontawesome.html">Font awesome 5</a></li>
                </ul>
              </li> -->

              <!-- <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                  <i class="ri-map-pin-line"></i>
                  <span>Maps</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="maps-google.html">Google Maps</a></li>
                  <li><a href="maps-vector.html">Vector Maps</a></li>
                </ul>
              </li> -->

              <!-- <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                  <i class="ri-share-line"></i>
                  <span>Multi Level</span>
                </a>
                <ul class="sub-menu" aria-expanded="true">
                  <li><a href="javascript: void(0);">Level 1.1</a></li>
                  <li>
                    <a href="javascript: void(0);" class="has-arrow"
                      >Level 1.2</a
                    >
                    <ul class="sub-menu" aria-expanded="true">
                      <li><a href="javascript: void(0);">Level 2.1</a></li>
                      <li><a href="javascript: void(0);">Level 2.2</a></li>
                    </ul>
                  </li>
                </ul>
              </li> -->
            </ul>
          </div>
          <!-- Sidebar -->
        </div>
      </div>
      <!-- Left Sidebar End -->

      <!-- ============================================================== -->
      <!-- Start right Content here -->
      