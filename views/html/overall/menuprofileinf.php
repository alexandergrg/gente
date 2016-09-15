<body class="nav-md footer_fixed">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="inicio" class="site_title"><i class="fa fa-car"></i> <span><?= APP_TITLE ?></span></a>
          </div>

          <div class="clearfix"></div>

          <!-- información del usuario en menú -->
          <div class="profile">
            <div class="profile_pic">
              <img src="views/images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Bienvenido,</span>
              <h2> <?php echo $_SESSION['app_session'][0][1] ?> </h2>
            </div>
          </div>
          <!-- /información del usuario en menú -->
