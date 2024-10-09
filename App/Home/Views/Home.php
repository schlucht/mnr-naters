<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hello World</title>
  <link href="<?=STYLE?>/style.css" rel='stylesheet'>
</head>
<body>
  <header>
    <div class="hamburger">
      <span></span>
    </div>
    <div class="brand">
      <img src="<?=LOGOS?>/mnr.svg" alt="logo">
      <div class="header-title">
        <h1>Evangelische Gemeinde</h1>
        <h3>Mitternachtsruf Naters</h3>
      </div>      
    </div>
    <div class="site-info">
      <p>
        Willkommen auf der Webseite der freien evangelischen Gemeinde Mitternachtsruf Naters.
      </p>
      <a class="link link-white" href="https://www.mnrbern.ch/ueber-uns/glaubensbekenntnis/">
        unser glaubensbekenntnis >
      </a>     
    </div>
    <nav class="page-nav">
      <ul class="nav-main" role="list">
        <li><a class="link link-white" href="#">Gemeinde</a></li>
        <li><a class="link link-white" href="https://gemeinde.mnr.ch/termine/">Termine (Dübendorf)</a></li>
        <li><a class="link link-white" href="#">Gottesdienste</a></li>
        <li><a class="link link-white" href="#">Bibel/Gebetsstunde</a></li>
      </ul>
    </nav>
    <nav class="mobile-nav">
      <div class="nav-close">
        <span></span>
      </div>
      <ul class="nav-mobile-main" role="list">
        <li><a class="link link-white" href="#">Gemeinde</a></li>
        <li><a class="link link-white" href="https://gemeinde.mnr.ch/termine/">Termine (Dübendorf)</a></li>
        <li><a class="link link-white" href="#">Gottesdienste</a></li>
        <li><a class="link link-white" href="#">Bibel/Gebetsstunde</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <a class="link link-green" href="#">Hello, world!</a>
  </main>
  <footer>
    <script>
      document.write(Date())
    </script>
  </footer>
  <script type="module" src="./main.js"></script>
</body>
</html>
