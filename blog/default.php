<?php 
$pageTitle = 'Blog - Thoughts on Web Design & Development';
include('../header.php');
?>

<body id="body" class="theme-light">
  <div class="page-content">
    <div class="section header-section">
        <div class="header-title-container">
          <div>
            <a href="/">
                <img class="header-logo" src="../lp-logo-sticker.png">
            </a>
          </div>
          <div>
            <p class="h1 header-title mb-0">Linepup</p>
            <p class="mb-0">Designer &amp; Developer</p>
          </div>
        </div>
        <div class="header-theme-container">
          <div>
            <button onclick="lightTheme();" id="light-theme">&#9728;&#65039;</button>
          </div>
          <div>
            <button onclick="darkTheme();" id="dark-theme">&#127761;</button>
          </div>
        </div>
    </div>
    <div class="section">
        <h1>Blog</h1>
        <ul>
            <li><a href="/blog/how-i-use-my-social-work-education-as-a-web-developer/">How I Use My Social Work Education as a Web Developer</a></li>
        </ul>
      <hr />
    </div>

    <?php 
    include('../footer.php');
    ?>

  </div><!-- END Page Content -->
</body>

</html>