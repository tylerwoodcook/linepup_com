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
  <div class="page-content">
    <div class="section header-section">
        <div class="header-title-container">
          <div>
            <a href="/">
                <img class="header-logo" src="lp-logo-sticker.png">
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
        <h1>Hey, I'm Tyler and Building websites is my dream job.</h1>
        <p>I'm a web and graphic designer from the East Coast of USA with over 5 years of professional experience. I love designing aesthetic and efficient UI/UX for websites and applications. I thrive on creativity and I love to learn new things.</p>
        <h2>WTHeck is "Linepup"?</h2>
        <p>For a while I used Linepup as my design company name. Now it's kind of become an online pseudonym, so I kept it. I like having something other than my real name to use online... I guess for privacy reasons? I don't know, call me paranoid.</p>
        <h2>How it started</h2>
        <p>I’ve been a professional designer for over five years, and I genuinely love what I do. In 2016, I started my own part-time freelance design company, taking on any creative projects I could get my hands on. Over the next few years I build an impressive portfolio of clients, working toward taking my first full time position in design.</p>
        <p>In 2019, I took my design skills full time with Ready Training Online, an online learning & LMS company. During this time, I built not only my skills as a designer, but also got the opportunity to design and develop a few websites from scratch. I quickly realized how much I love building websites and functional user interfaces.</p>
        <p>In 2020, I was hired to design websites for a globally reaching leadership development company, CorpU. With clients like Coca-Cola, Rite-aid, Aetna, Charles Schwab and other heavy hitters, I was held to the highest standards. One of my first projects was a complete website overhaul, which involved design, development and branding. The new website enabled CorpU’s Sales & Customer Support teams to close deals and keep our customers informed like never before.</p>
        <h2>How it's going</h2>
        <p>As CorpU grew to reach new audiences globally, we caught the attention of the world’s largest marketplace for online courses, Udemy. In August 2021, CorpU was acquired by Udemy Business, the branch of Udemy dedicated to offering enterprise solutions for businesses around the world.</p>
        <p>Today, I’m proud to be a UI Developer for such a renowned company with an honorable mission to share knowledge with the world.</p>
        <h2>Skills &amp; abilities</h2>
        <ul>
            <li>Website design & development</li>
            <li>HTML, CSS, JavaScript, PHP</li>
            <li>WordPress</li>
            <li>UI/UX design</li>
            <li>Adobe creative apps</li>
            <li>Branding &amp; style guides</li>
            <li>Application design systems</li>
        </ul>
        <h2>Personal life</h2>
        <p>When I’m not working, I like to stay busy playing with my two french bulldogs (Leia and Keira), recording music, woodworking or doing other creative things.</p>
      <hr />
    </div>
    <div class="section">
      <p>
        <a href="/blog/">Blog</a>
      </p>
      <p>
        <a target="_blank" href="https://creativemarket.com/LinepupDesignCo">Store</a>
      </p>
      <p>
        <a target="_blank" href="https://www.instagram.com/tyler.creating.things/">Instagram</a>
      </p>
    </div>
  </div>
</body>

</html>