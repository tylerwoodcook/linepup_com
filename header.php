<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo $pageTitle ?></title>
  <link rel="icon" type="image/x-icon" href="lp-logo-sticker.png" />
  <meta charset="utf-8" />
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
  <meta content="Linepup Design and Development" name="This is the homepage for Linepup" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@700&family=IBM+Plex+Serif:ital,wght@0,400;0,600;1,400;1,600&display=swap" rel="stylesheet" />
  <!-- JavaScript -->
  <script src="/assets/scripts.js" defer></script>
  <script src="https://kit.fontawesome.com/9c9528a7c3.js" crossorigin="anonymous"></script>
  <!-- CSS -->
  <link rel="stylesheet" href="/assets/styles.css">
</head>

<body id="body" class="theme-light">
  <div class="page-content">

    <div class="section header-section">
      <div class="header-title-container">
        <div>
          <a href="/">
            <img class="header-logo" src="https://linepup.com/lp-logo-sticker.png">
          </a>
        </div>
        <div>
          <p class="h1 header-title mb-0">Linepup</p>
          <p class="mb-0">Designer &amp; Developer</p>
        </div>
      </div><!-- END header-title-container -->
      <div id="site-nav"">
        <div><a class="nav-item" href=" /blog/">BLOG</a></div>
        <div><a class="nav-item" href="https://creativemarket.com/LinepupDesignCo" target="_blank">STORE</a></div>
        <div><a class="nav-item" href="https://github.com/tylerwoodcook" target="_blank">GITHUB</a></div>
        <div class="header-theme-container">
          <div>
            <a class="nav-item" onclick="lightTheme();" id="light-theme">&#9728;&#65039;</a>
          </div>
          <div>
            <a class="nav-item" onclick="darkTheme();" id="dark-theme">&#127761;</a>
          </div>
        </div>

      </div> <!-- END site-nav -->
    </div> <!-- END header-section -->