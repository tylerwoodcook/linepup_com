<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo $pageTitle ?></title>
  <link rel="icon" type="image/x-icon" href="/linepup-logo-squiggle.svg" />
  <meta charset="utf-8" />
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
  <meta content="Linepup Design and Development" name="This is the homepage for Linepup" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&display=swap" rel="stylesheet">
  <!-- JavaScript -->
  <script src="/assets/scripts.js" defer></script>
  <script src="https://kit.fontawesome.com/9c9528a7c3.js" crossorigin="anonymous"></script>
  <script>// Add light/dark theme to <html> element
  (function() {
    const savedTheme = localStorage.getItem("theme");
    if (savedTheme === "dark") {
      document.documentElement.classList.add("theme-dark");
    } else if (savedTheme === "light") {
      document.documentElement.classList.add("theme-light");
    }
  })();
</script>

  <!-- CSS -->
  <link rel="stylesheet" href="/assets/styles.css">
</head>

<body id="body">
  <div class="page-content">

    <div class="section header-section">
      <div class="header-title-container">
          <a class="header-logo" href="/">
            <img src="/linepup-logo-squiggle.svg" style="width: 64px;">
          </a>
          <a class="header-logo-bark" href="/">
            <img src="/bark.svg">
          </a>
      </div><!-- END header-title-container -->
      <div id="site-nav"">
        <div><a class="nav-item" href="/">Home</a></div>
        <div><a class="nav-item" href="/web">Web</a></div>
        <div><a class="nav-item" href="/music">Music</a></div>
        <div class="header-theme-container">
          <div>
            <a class="nav-item-theme-icon" onclick="lightTheme();" id="light-theme"><i class="fa-solid fa-sun"></i></a>
          </div>
          <div>
            <a class="nav-item-theme-icon" onclick="darkTheme();" id="dark-theme"><i class="fa-solid fa-moon"></i></a>
          </div>
        </div>

      </div> <!-- END site-nav -->
    </div> <!-- END header-section -->
