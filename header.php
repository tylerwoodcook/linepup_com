<!DOCTYPE html>
<html lang="en">

<head>
  <title>Linepup</title>
  <link rel="icon" type="image/x-icon" href="https://hpanel.hostinger.com/favicons/hostinger.png" />
  <meta charset="utf-8" />
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
  <meta content="Linepup's Homepage" name="This is the homepage for Linepup" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Gabarito:wght@700&family=IBM+Plex+Serif:ital,wght@0,400;0,600;1,400;1,600&display=swap"
    rel="stylesheet" />
    <script>
        function lightTheme() {
            document.getElementById('body').classList.add('theme-light');
            document.getElementById('body').classList.remove('theme-dark');

            let links = document.getElementsByTagName('a');
            for (let i = 0; i < links.length; i++) {
              links[i].classList.remove('dark-theme-links');
            }
        }
        function darkTheme() {
            document.getElementById('body').classList.add('theme-dark');
            document.getElementById('body').classList.remove('theme-light');

            let links = document.getElementsByTagName('a');
            for (let i = 0; i < links.length; i++) {
              links[i].classList.add('dark-theme-links');
            }
        }
    </script>
  <style>
    body {
      font-family: "IBM Plex Serif", serif;
      transition: all 0.5s;
    }
    .theme-light {
        background-color: #fff;
        color: #222;
    }
    .theme-dark {
        background-color: #222;
        color: #fff;
    }

    /* TYPOGRAPHY */

    h1, .h1,
    h2, .h2,
    h3, .h3,
    h4, .h4,
    h5, .h5,
    h6, .h6 {
      font-family: "Gabarito", sans-serif;
      font-weight: 700;
      margin-top: 0;
    }

    h1, .h1 {
      font-size: 64px;
    }

    h2, .h2 {
      font-size: 48px;
    }

    h3, .h3 {
      font-size: 28px;
    }

    h4, .h4 {
      font-size: 20px;
    }

    h5, .h5 {
      font-size: 16px;
      text-transform: uppercase;
    }

    p, .p {
      font-size: 18px;
      font-weight: 400;
      line-height: 1.7;
      margin: 0 0 24px 0;
    }

    li {
      font-size: 18px;
      font-weight: 400;
      line-height: 1.7;
      margin: 0 0 16px 0;
    }

    ul {
      padding-left: 20px;
    }

    a {
      color: #C14E63;
    }
    .dark-theme-links {
      color: #D1A659;
    }

    @media screen and (max-width: 600px) {
      h1, .h1 {font-size:40px;}
      h2, .h2 {font-size: 32px;}
      h3, .h3 {font-size: 24px;}
      h4, .h4 {font-size: 18px;}
      p, .p {font-size: 16px;}
      li {font-size: 16px;}
    }

    hr {
      border-collapse: collapse;
      border: none;
      height: 1px;
      background-color: #d0d0d0;
      margin: 40px 0;
    }

    div.page-content {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 40px 8px;
    }

    div.section {
      width: 100%;
      max-width: 850px;
    }
    
    .header-section {
        display: grid;
        grid-template-columns: 4fr 1fr;
        margin-bottom: 48px;
        padding-bottom: 48px;
        border-bottom: 1px solid #d0d0d0;
    }
    .header-title-container {
      display: flex;
      flex-direction: row;
      gap: 24px;
      align-items: center;
    }
    .header-logo {
      max-width: 150px;
    }
    .header-title {
      font-size: 64px;
      margin-bottom: 16px;
    }
    .header-theme-container {
      justify-self: end;
      display: flex;
      flex-direction: row;
      gap: 8px;

    }
    @media screen and (max-width: 500px) {
      .header-section {
        margin-bottom: 32px;
        padding-bottom: 32px;
      }
      .header-title-container {
        flex-direction: column;
        align-items: start;
        gap: 0;
      }
      .header-logo {
        max-width: 80px;
      }
      .header-title {
        font-size: 40px;
        margin-bottom: 8px;
      }
      .header-theme-container {
        flex-direction: column;
      }
    }

    .anchor-link-offset {
      display: block;
      position: relative;
      top: -40px;
      visibility: hidden;
    }
    
    /* UTILITY */
    .mb-0 {margin-bottom: 0;}
    .mb-8 {margin-bottom: 8px;}
    .mb-16 {margin-bottom: 16px;}
    .mb-32 {margin-bottom: 32px;}
    .mb-40 {margin-bottom: 40px;}
    .mb-48 {margin-bottom: 48px;}
    .mb-56 {margin-bottom: 56px;}
    .mb-64 {margin-bottom: 64px;}
  </style>
</head>

<body id="body" class="theme-light">
