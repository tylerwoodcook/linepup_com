<!DOCTYPE html>
<html lang="en">

<head>
  <title>Linepup</title>
  <link rel="icon" type="image/x-icon" href="https://linepup.com/lp-logo-sticker.png" />
  <meta charset="utf-8" />
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
  <meta content="How I use my Social Work Education as a Web Developer" name="How I use my Social Work Education as a Web Developer" />
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
                <img class="header-logo" src="../../lp-logo-sticker.png">
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
      <h2>How I use my social work education as a web developer</h2>
      <p>
        The route I took to fall in love with web development may seem odd. I
        graduated with a bachelor's degree in social work. Throughout my
        education I learned skills like
        <strong>empathy, cultural competence and advocacy</strong>. When I
        made the switch to web design and development, I initially thought my
        social work education would be wasted. I have since realized that many
        of the skills I practiced through social work are still very much
        applicable in the world of web development.
      </p>

      <h3>Empathy: Understanding the User's Perspective</h3>
      <p>
        A good developer empathizes with the end user. We are tasked with
        building experiences that solve users' needs in a seemless and
        friendly way. As a social worker, I was tasked with finding out what
        the client's goals were and then utilizing my skills to help them
        reach those goals. I do the same thing as a web developer.
      </p>

      <div id="cultural-competence" class="anchor-link-offset"><!-- ANCHOR LINK OFFSET --></div>
      <h3>Cultural Competence: Thinking Outside My Limited Experiences</h3>
      <p>
        Cultural competence is still a critical skill in the world of web dev.
        Imagine you're managing a website that is used by people around the
        world. You'll need to ask yourself how the user-experience should
        change based on what countries, cultures and languages are accessing
        your site. For example:
      </p>
      <ul>
        <li>
          How are you using color in your designs? According to
          <a href="https://eriksen.com/marketing/color_culture/" target="_blank">Eriksen Translations</a>, in India, red
          is often associated with purity and brides often
          wear red wedding dresses, whereas in western cultures, such as the
          USA, we associate red with excitement, danger or urgency.
          Additionally, what do you do when a country has
          <a href="https://www.rd.com/article/heres-japan-blue-traffic-lights/" target="_blank">one word that means two
            colors</a>?
        </li>
        <li>
          How are you choosing imagery? Are you using imagery that feels
          inclusive of people in various cultures and people groups?
        </li>
      </ul>
      <h3>Advocacy: Standing Up for the User's Best Interest</h3>

      <p>
        I also mentioned advocacy in my list of social work skills. Social
        workers are tasked with defending society's underrepresented,
        mistreated and forgotten people groups. Social workers are affect
        change at the macro and micro levels for individuals, families and
        people groups. No matter which career a person enters, they receive
        <em>some</em> level of power over <em>something</em>. And as the
        famous quote from Spider Man goes, "With great power co..." well...
        you know the quote (or <em>DO</em> you? See
        <a href="#cultural-competence">cultural competence</a> section). As
        developers, we may not have
        <a href="https://www.youtube.com/watch?v=Sg14jNbBb-8" target="_blank">Darth Sideous</a>
        levels of power, but we can affect the way people experience the
        internet. We can use our power for good or evil. We can implement
        <a href="#dark-patterns">dark patterns</a> and manipulate users, or we
        can defend them through honest, transparent experiences focused on
        their best interests. When considering the prevalence of the world
        wide web, the people who collectively develop the web actually hold a
        significant amount of power over people's daily lives.
      </p>

      <h3 id="dark-patterns">The Dark Realm of Dark Patterns</h3>

      <p>
        I mentioned dark patterns earlier. Dark patterns are manipulative
        and/or misleading user experiences meant to coerce a user into
        performing an unintended action, which they likely would not have
        performed otherwise (<a
          href="https://www.jou.ufl.edu/insights/what-are-dark-patterns-an-online-media-expert-explains/"
          target="_blank">College of Journalism and Communications, University of Florida</a>). I can relate these
        patterns back to my social work education as
        they present significant ethical dilemmas. Anyone who's taken an
        introductory ethics course knows that ethical dilemmas are never black
        &amp; white issues. This means that designers and developers often
        have to make decisions about how to treat users respectfully. Most of
        my design and development journey has been marketing-focused, meaning
        we are trying to encourage users to take certain actions, fill out
        forms, submit demo requests, etc. The question I need to ask myself
        is, "At what point does guiding users turn into coercing them?"
      </p>

      <p>
        I like to think of myself as an advocate for the end user. It might
        sound a little self-righteous, but hey... who doesn't like to feel
        like a super hero every once in a while? There have been times when
        I've defended the end-user from manipulative online experiences
        suggested by project stake holders. These stake holders are often
        under a lot of pressure to drive results, and that pressure can make
        it tempting to implement dark patterns in an attempt to gain leads or
        mislead users into acting a certain way. In some ways, developers are
        the "last line of defense" to ensure that users have a fair,
        transparent online experience.
      </p>

      <h3>Development is a Surprising Human Experience</h3>

      <p>
        Development is very technical. But as tempting as it is to imagine
        developers as some sort of isolated, introverted geniouses forced by
        social-anxiety to live their lives in a dizzying array of
        matrix-style, monospaced text, I don't think that does us justice. I
        believe development, at its best, is very human-focused. As I
        transitioned from social worker to developer, I had a sinking feeling
        that my education would be wasted in my new career. But that's one of
        the beauties of development. Developers are often self-taught, hailing
        from many different previous fields of work. How have your experiences
        influenced how you approach development?
      </p>
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