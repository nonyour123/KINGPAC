<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="<?php echo base_url('Dashboard/dashboard'); ?>" class="logo d-flex align-items-center">
        <img src="{base_url}design/assets/img/kingpac logo 2.png" class="img-fluid" alt="">
        <!--<h1>KINGPAC</h1>-->
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul id="sidebarnav">
          <li><a href="<?php echo base_url('Dashboard/dashboard'); ?>">HOME</a></li>
          <li><a href="<?php echo base_url('About/about');?>">ABOUT</a></li>
          <li class="dropdown"><a href="#"><span>ORGANIZATION CHART</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="<?php echo base_url('Organization/organization'); ?>">EXECUTIVE MANAGEMENT</a></li>
              <li><a href="<?php echo base_url('commercial/commercial'); ?>">DOMESTIC SALES</a></li>
              <!--<li class="dropdown"><a href="#"><span>CHIEF MARKETING OFFICER</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="<?php echo base_url('Sale/sale');?>">(AMERICA)EXPORT SALES</a></li>
                  <li><a href="<?php echo base_url('Sale/sale1');?>">(EUROPE) EXPORT SALES</a></li>
                  <li><a href="<?php echo base_url('Sale/sale2');?>">(ASIA/OSINIA) EXPORT SALES</a></li>
                  <li><a href="<?php echo base_url('Sale/sale3');?>">CUSTOMER RELATIONS</a></li>
                </ul>
              </li>-->
              <!--<li class="dropdown"><a href="#"><span>CHIEF COMMERCIAL OFFICER</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="<?php echo base_url('Commercial/Commercial');?>">TRADITIONAL TRADE</a></li>
                  <li><a href="<?php echo base_url('Commercial/Commercial1');?>">MODERN TRADE</a></li>
                  <li><a href="<?php echo base_url('Commercial/Commercial2');?>">OEM TRADE</a></li>
                  <li><a href="<?php echo base_url('Commercial/Commercial3');?>">MARKETING</a></li>
                </ul>
              </li>-->
              <!--<li class="dropdown"><a href="#"><span>CHIEF OPERATION OFFICER</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li class="dropdown"><a href="#"><span>PRODUCTION</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="<?php echo base_url('Operation/operation11');?>">PRODUCTION MANAGEMENT</a></li>
                  <li><a href="<?php echo base_url('Operation/operation6');?>">ZONE A</a></li>
                  <li><a href="<?php echo base_url('Operation/Operation7');?>">ZONE B</a></li>
                  <li><a href="<?php echo base_url('Operation/Operation8');?>">ZONE C</a></li>
                  <li><a href="<?php echo base_url('Operation/Operation9');?>">ZONE X</a></li>
                  <li><a href="<?php echo base_url('Operation/Operation10');?>">ZONE KB</a></li>
                </ul>
                  <li><a href="<?php echo base_url('Operation/Operation1');?>">MAINTENANCE</a></li>
                  <li class="dropdown"><a href="#"><span>QUALITY SYSTEM</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="<?php echo base_url('Operation/operation2');?>">QUALITY ASSURANCE</a></li>
                  <li><a href="<?php echo base_url('Operation/Operation3');?>">QUALITY CONTROL</a></li>
                </ul>
              </li>
                  <li><a href="<?php echo base_url('Operation/Operation4');?>">QUALITY MANAGEMENT</a></li>
                  <li><a href="<?php echo base_url('Operation/Operation12');?>">WAREHOUSE</a></li>
                  <li><a href="<?php echo base_url('Operation/Operation5');?>">HEALTH, SAFETY & ENVIRONMENT</a></li>
                </ul>
              </li>-->
              <li><a href="<?php echo base_url('Sale/sale4'); ?>">SALE AND MARKETING</a></li>
              <li><a href="<?php echo base_url('Operation/operation13');?>">OPERATION</a></li>
              <li><a href="<?php echo base_url('Financial/Financial19');?>">FINANCE AND INVESTMENT</a></li>
              <!--<li class="dropdown"><a href="#"><span>CHIEF FINANCIAL OFFICER</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li class="dropdown"><a href="#"><span>FINANCE & ACCOUNTING</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="<?php echo base_url('Financial/Financial7');?>">FINANCIAL</a></li>
                  <li><a href="<?php echo base_url('Financial/Financial');?>">ACCOUNTING</a></li>
                  <li><a href="<?php echo base_url('Financial/Financial8');?>">COST ACCOUNTING</a></li>
                </ul>
                  <li><a href="<?php echo base_url('Financial/Financial1');?>">MANAGEMENT INFORMATION SYSTEM</a></li>
                  <li><a href="<?php echo base_url('Financial/Financial3');?>">BUSINESS STRATEGY</a></li>
                  <li><a href="<?php echo base_url('Financial/Financial4');?>">IMPORT AND CORPORATE BENEFITS</a></li>
                  <li><a href="<?php echo base_url('Financial/Financial5');?>">EXPORT</a></li>
                  <li><a href="<?php echo base_url('Financial/Financial6');?>">PURCHASE</a></li>
                </ul> -->
              </li>
              <li><a href="<?php echo base_url('hr/hr1');?>">HUMAN RESOURE MANAGEMENT</a></li>
              </li>
            </ul>
          </li>
          <li><a href="<?php echo base_url('News/news');?>">NEWS</a></li>
          <li><a href="<?php echo base_url('Event/event');?>">EVENT</a></li>
          <li><a href="<?php echo base_url('contact/contact');?>">CONTACT</a></li>
          <!-- <li class="dropdown"><a href="#"><span>RESERVETION</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">RESERVE A MEETING ROOM</a></li>
              <li><a href="#">RESERVE A CAR</a></li>
            </ul>
          </li> -->
          <!-- <li><a href="#">CONTACT</a></li> -->
        <li class="dropdown"><a href="#"><span>PROFILE</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li>
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="{base_url}src/assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">&nbsp;&nbsp;&nbsp;
                  <span><?php echo $this->session->userdata('firstname'); ?></span>&nbsp;&nbsp;
                  <span><?php echo $this->session->userdata('lastname'); ?></span>
                </a>
              </li>
              <li><a href="#" id="btnLogout" class="btn btn-outline-primary mx-3 mt-2 d-block ">LOGOUT</a></li>
            </ul>
          </li>
          <ul id="sideBar_menu"></ul>
      </nav>
    </div>
  </header>
  <!-- End Header -->