<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$page = $this->uri->rsegments[1];
?>

<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title> Starter Template | Looper - Bootstrap 4 Admin Theme </title>
    <meta property="og:title" content="Starter Template">
    <meta name="author" content="<?= $this->session->userdata('nama'); ?>">
    <meta property="og:locale" content="en_US">
    <meta name="description" content="Responsive admin theme build on top of Bootstrap 4">
    <meta property="og:description" content="Responsive admin theme build on top of Bootstrap 4">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
    <meta property="og:site_name" content="Looper - Bootstrap 4 Admin Theme">
    <script type="application/ld+json">
      {
        "name": "Looper - Bootstrap 4 Admin Theme",
        "description": "Responsive admin theme build on top of Bootstrap 4",
        "author":
        {
          "@type": "Person",
          "name": "<?= $this->session->userdata('nama'); ?>"
        },
        "@type": "WebSite",
        "url": "",
        "headline": "Starter Template",
        "@context": "http://schema.org"
      }
    </script>

    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url('publics'); ?>/assets/apple-touch-icon.png">
    <link rel="shortcut icon" href="<?= base_url('publics'); ?>/assets/favicon.ico">
    <meta name="theme-color" content="#3063A0">

    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('publics'); ?>/assets/vendor/open-iconic/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('publics'); ?>/assets/vendor/fontawesome/css/all.css">

    <link rel="stylesheet" href="<?= base_url('publics'); ?>/assets/stylesheets/theme.min.css" data-skin="default">
    <link rel="stylesheet" href="<?= base_url('publics'); ?>/assets/stylesheets/theme-dark.min.css" data-skin="dark">
    <link rel="stylesheet" href="<?= base_url('publics'); ?>/assets/stylesheets/custom.css">
    <script>
      var skin = localStorage.getItem('skin') || 'default';
      var unusedLink = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
      unusedLink.setAttribute('rel', '');
      unusedLink.setAttribute('disabled', true);
    </script>
  </head>
  <body>

    <div class="app">
      <!--[if lt IE 10]>
      <div class="page-message" role="alert">You are using an <strong>outdated</strong> browser. Please <a class="alert-link" href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</div>
      <![endif]-->

      <header class="app-header app-header-dark">

        <div class="top-bar">

          <div class="top-bar-brand">
            <a href="<?= base_url('/') ;?>"><img src="<?= base_url('publics'); ?>/assets/images/brand-inverse.png" alt="" style="height: 32px;width: auto;"></a>
          </div>

          <div class="top-bar-list">

            <div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">

              <button class="hamburger hamburger-squeeze" type="button" data-toggle="aside" aria-label="toggle menu"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button>
            </div>

            <div class="top-bar-item top-bar-item-full">

            </div>

            <div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">
              <!--
              <ul class="header-nav nav">
                <li class="nav-item dropdown header-nav-dropdown has-notified">
                  <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="oi oi-pulse"></span></a>
                  <div class="dropdown-arrow"></div>
                  <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                    <h6 class="dropdown-header stop-propagation">
                      <span>Activities <span class="badge">(2)</span></span>
                    </h6>
                    <div class="dropdown-scroll perfect-scrollbar">

                      <a href="#" class="dropdown-item unread">
                        <div class="user-avatar">
                          <img src="<?= base_url('publics'); ?>/assets/images/avatars/uifaces15.jpg" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="text"> Jeffrey Wells created a schedule </p><span class="date">Just now</span>
                        </div>
                      </a>

                      <a href="#" class="dropdown-item unread">
                        <div class="user-avatar">
                          <img src="<?= base_url('publics'); ?>/assets/images/avatars/uifaces16.jpg" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="text"> Anna Vargas logged a chat </p><span class="date">3 hours ago</span>
                        </div>
                      </a>

                      <a href="#" class="dropdown-item">
                        <div class="user-avatar">
                          <img src="<?= base_url('publics'); ?>/assets/images/avatars/uifaces17.jpg" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="text"> Sara Carr invited to Stilearn Admin </p><span class="date">5 hours ago</span>
                        </div>
                      </a>

                      <a href="#" class="dropdown-item">
                        <div class="user-avatar">
                          <img src="<?= base_url('publics'); ?>/assets/images/avatars/uifaces18.jpg" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="text"> Arthur Carroll updated a project </p><span class="date">1 day ago</span>
                        </div>
                      </a>

                      <a href="#" class="dropdown-item">
                        <div class="user-avatar">
                          <img src="<?= base_url('publics'); ?>/assets/images/avatars/uifaces19.jpg" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="text"> Hannah Romero created a task </p><span class="date">1 day ago</span>
                        </div>
                      </a>

                      <a href="#" class="dropdown-item">
                        <div class="user-avatar">
                          <img src="<?= base_url('publics'); ?>/assets/images/avatars/uifaces20.jpg" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="text"> Angela Peterson assign a task to you </p><span class="date">2 days ago</span>
                        </div>
                      </a>

                      <a href="#" class="dropdown-item">
                        <div class="user-avatar">
                          <img src="<?= base_url('publics'); ?>/assets/images/avatars/uifaces21.jpg" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="text"> Shirley Mason and 3 others followed you </p><span class="date">2 days ago</span>
                        </div>
                      </a>
                    </div>
                    <a href="user-activities.html" class="dropdown-footer">All activities <i class="fas fa-fw fa-long-arrow-alt-right"></i></a>
                  </div>
                </li>
                <li class="nav-item dropdown header-nav-dropdown has-notified">
                  <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="oi oi-envelope-open"></span></a>
                  <div class="dropdown-arrow"></div>
                  <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                    <h6 class="dropdown-header stop-propagation">
                      <span>Messages</span> <a href="#">Mark all as read</a>
                    </h6>
                    <div class="dropdown-scroll perfect-scrollbar">

                      <a href="#" class="dropdown-item unread">
                        <div class="user-avatar">
                          <img src="<?= base_url('publics'); ?>/assets/images/avatars/team1.jpg" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="subject"> Stilearning </p>
                          <p class="text text-truncate"> Invitation: Joe's Dinner @ Fri Aug 22 </p><span class="date">2 hours ago</span>
                        </div>
                      </a>

                      <a href="#" class="dropdown-item">
                        <div class="user-avatar">
                          <img src="<?= base_url('publics'); ?>/assets/images/avatars/team3.png" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="subject"> Openlane </p>
                          <p class="text text-truncate"> Final reminder: Upgrade to Pro </p><span class="date">23 hours ago</span>
                        </div>
                      </a>

                      <a href="#" class="dropdown-item">
                        <div class="tile tile-circle bg-green"> GZ </div>
                        <div class="dropdown-item-body">
                          <p class="subject"> Gogo Zoom </p>
                          <p class="text text-truncate"> Live healthy with this wireless sensor. </p><span class="date">1 day ago</span>
                        </div>
                      </a>

                      <a href="#" class="dropdown-item">
                        <div class="tile tile-circle bg-teal"> GD </div>
                        <div class="dropdown-item-body">
                          <p class="subject"> Gold Dex </p>
                          <p class="text text-truncate"> Invitation: Design Review @ Mon Jul 7 </p><span class="date">1 day ago</span>
                        </div>
                      </a>

                      <a href="#" class="dropdown-item">
                        <div class="user-avatar">
                          <img src="<?= base_url('publics'); ?>/assets/images/avatars/team2.png" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="subject"> Creative Division </p>
                          <p class="text text-truncate"> Need some feedback on this please </p><span class="date">2 days ago</span>
                        </div>
                      </a>

                      <a href="#" class="dropdown-item">
                        <div class="tile tile-circle bg-pink"> LD </div>
                        <div class="dropdown-item-body">
                          <p class="subject"> Lab Drill </p>
                          <p class="text text-truncate"> Our UX exercise is ready </p><span class="date">6 days ago</span>
                        </div>
                      </a>
                    </div>
                    <a href="page-messages.html" class="dropdown-footer">All messages <i class="fas fa-fw fa-long-arrow-alt-right"></i></a>
                  </div>
                </li>
                <li class="nav-item dropdown header-nav-dropdown">
                  <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="oi oi-grid-three-up"></span></a>
                  <div class="dropdown-arrow"></div>
                  <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">

                    <div class="dropdown-sheets">

                      <div class="dropdown-sheet-item">
                        <a href="#" class="tile-wrapper"><span class="tile tile-lg bg-indigo"><i class="oi oi-people"></i></span> <span class="tile-peek">Teams</span></a>
                      </div>

                      <div class="dropdown-sheet-item">
                        <a href="#" class="tile-wrapper"><span class="tile tile-lg bg-teal"><i class="oi oi-fork"></i></span> <span class="tile-peek">Projects</span></a>
                      </div>

                      <div class="dropdown-sheet-item">
                        <a href="#" class="tile-wrapper"><span class="tile tile-lg bg-pink"><i class="fa fa-tasks"></i></span> <span class="tile-peek">Tasks</span></a>
                      </div>

                      <div class="dropdown-sheet-item">
                        <a href="#" class="tile-wrapper"><span class="tile tile-lg bg-yellow"><i class="oi oi-fire"></i></span> <span class="tile-peek">Feeds</span></a>
                      </div>

                      <div class="dropdown-sheet-item">
                        <a href="#" class="tile-wrapper"><span class="tile tile-lg bg-cyan"><i class="oi oi-document"></i></span> <span class="tile-peek">Files</span></a>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
              -->
              <div class="dropdown">
                <button class="btn-account d-none d-md-flex" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="user-avatar user-avatar-md"><img src="<?= base_url('publics'); ?>/assets/images/avatars/profile.jpg" alt=""></span>
                  <span class="account-summary pr-lg-4 d-none d-lg-block">
                    <span class="account-name"><?= $this->session->userdata('nama'); ?></span>
                    <span class="account-description">Marketing Manager</span>
                  </span>
                </button>
                <div class="dropdown-arrow dropdown-arrow-left"></div>
                <div class="dropdown-menu">
                  <h6 class="dropdown-header d-none d-md-block d-lg-none"> <?= $this->session->userdata('nama'); ?> </h6>
                  <a class="dropdown-item" href="<?= base_url('Profile'); ?>"><span class="dropdown-icon oi oi-person"></span> Profile</a>
                  <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </header>

      <aside class="app-aside app-aside-expand-md app-aside-light">

        <div class="aside-content">
          <header class="aside-header d-block d-md-none">
            <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside">
              <span class="user-avatar user-avatar-lg"><img src="<?= base_url('publics'); ?>/assets/images/avatars/profile.jpg" alt=""></span>
              <span class="account-icon"><span class="fa fa-caret-down fa-lg"></span></span> <span class="account-summary">
                <span class="account-name"><?= $this->session->userdata('nama'); ?></span> <span class="account-description">Marketing Manager</span></span>
            </button>
            <div id="dropdown-aside" class="dropdown-aside collapse">
              <div class="pb-3">
                <a class="dropdown-item" href="<?= base_url('Profile'); ?>"><span class="dropdown-icon oi oi-person"></span> Profile</a>
                <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
                <!--
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Help Center</a>
                <a class="dropdown-item" href="#">Ask Forum</a>
                <a class="dropdown-item" href="#">Keyboard Shortcuts</a>
                -->
              </div>
            </div>
          </header>

          <div class="aside-menu overflow-hidden">

            <nav id="stacked-menu" class="stacked-menu">

              <ul class="menu">
                <?php if ($page=='Dashboard' || $page=='' ) { $active='has-active';}else { $active=''; }; ?>
                <li class="menu-item <?= $active ?>">
                  <a href="<?= base_url('/') ;?>" class="menu-link"><i class="menu-icon fas fa-home"></i> <span class="menu-text">Dashboard</span></a>
                </li>

                <?php
                // data main menu
                $main_menu = $this->db->get_where('menuSlidebar', array('isMainMenu' => 0));
                foreach ($main_menu->result() as $main) {
                    // Query untuk mencari data sub menu
                    $sub_menu = $this->db->get_where('menuSlidebar', array('isMainMenu' => $main->kode));
                    // periksa apakah ada sub menu
                    if ($sub_menu->num_rows() > 0) {
                        // main menu dengan sub menu

                        foreach ($sub_menu->result() as $key) { // membuat array dari $sub_menu->href kedalam $subMenu
                          $subMenu[] = $key->href;
                        }
                        if (in_array($page,$subMenu)) { $active='has-active';}else { $active=''; }; //melakukan pengecekan bila $page ada dalam array $subMenu

                        echo "<li class='menu-item has-child ".$active."'>" . anchor($main->href,'<i class="menu-icon '.$main->icon.'"></i> <span class="menu-text">'.$main->judulMenu.'</span>','class="menu-link"');
                        // sub menu nya disini
                        echo "<ul class='menu'>";
                        foreach ($sub_menu->result() as $subm) {
                            if ($page==$subm->href) { $active='has-active';}else { $active=''; };
                            echo "<li class='menu-item ".$active."'>" . anchor($subm->href,'<span class="menu-text">'.$subm->judulMenu.'</span>','class="menu-link"') . "</li>";
                        }
                        echo"</ul></li>";
                    } else {
                        // main menu tanpa sub menu
                        if ($page==$main->href) { $active='has-active';}else { $active=''; };
                        echo "<li class='menu-item ".$active."'>" . anchor($main->href,'<i class="menu-icon '.$main->icon.'"></i> <span class="menu-text">'.$main->judulMenu.'</span>','class="menu-link"') . "</li>";
                    }
                }
                ?>

              </ul>
            </nav>
          </div>

          <footer class="aside-footer border-top p-3">
            <button class="btn btn-light btn-block text-primary" data-toggle="skin">Night mode <i class="fas fa-moon ml-1"></i></button>
          </footer>
        </div>
      </aside>

      <main class="app-main">

        <div class="wrapper">
