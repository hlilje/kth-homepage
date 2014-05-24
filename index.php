<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="The KTH homepage of Hampus Liljekvist">
    <meta name="keywords" content="Hampus Liljekvist,personal,homepage,KTH">
    <meta name="author" content="Hampus Liljekvist">
    
    <title>KTH | Hampus Liljekvist</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">
  </head>

  <body>
    <div class="container">
      <header class="mainHeader">
        <div class="title">
          <h1>hlilje at kth se</h1>
          <h2>Hampus Liljekvist</h2>
        </div>
        <nav>
          <ul>
            <li><a href="http://www.kth.se/">KTH</a></li>
            <li><a href="http://www.kth.se/csc/">CSC</a></li>
            <li>Hampus Liljekvist</li>
          </ul>
        </nav>
      </header>

      <nav class="leftnav">
        <canvas id="canvas" width="128" height="128"></canvas>
        <script src="clock.js"></script>
      </nav>

      <section class="content">
        <article class="about">
          <h3>About</h3>
          <p>This is the personal KTH homepage of Hampus Liljekvist. I won't really use this site for anything in particular, so if you're looking for more information about me I recommend some of these other links listed below.</p>
          <figure>
            <img src="img/portrait.jpg" alt="Portrait" width="200" height="200">
          </figure>
        </article>

        <article class="links">
          <h3>Links</h3>
          <ul>
            <li><a href="http://hlilje.com/">Official Website</a></li>
            <li><a href="http://twitter.com/hlilje">Twitter</a></li>
            <li><a href="http://www.facebook.com/hampusliljekvist">Facebook</a></li>
            <li><a href="https://plus.google.com/+HampusLiljekvist">Google+</a></li>
            <li><a href="http://www.linkedin.com/pub/hampus-liljekvist/46/72/902">LinkedIn</a></li>
          </ul>
        </article>

        <article class="database">
          <h3>Database</h3>
          <?php
            $link = pg_connect("host=nestor2.csc.kth.se dbname=hlilje user=hlilje password=7Qh9CIbc");
            
            if($link) {
              echo "<h4>DATABASE LINK ESTABLISHED</h4>";
            } else {
              echo "<h4>DATABASE CONNECTION ERROR</h4>";
            }
          ?>
          <table>
            <tr>
              <th>Kiosk ID</th>
              <th>Address</th>
              <th>City</th>
            </tr>
              <?php
                $query = pg_query($link, "select kiosk_id, address, city from kiosks");

                while($row = pg_fetch_row($query)) {
                  echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
                }
              ?>
          </table>
        </article>

        <article class="logo">
          <h3>Logo</h3>
          <figure>
            <img src="img/logo.jpg" alt="Logo">
          </figure>
        </article>
      </section>

      <footer class="mainFooter">
        <ul>
          <li><small><a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a></small></li>
          <li><small><a href="http://opensource.org/licenses/BSD-2-Clause">BSD 2-Clause</a></small></li>
          <li><small><a href="http://www.kth.se/en/gemensamt/disclaimer/disclaimer-for-personliga-webbsidor-1.62633">Disclaimer</a></small></li>
          <li><small><a href="http://validator.w3.org/check?uri=http%3A%2F%2Fwww.csc.kth.se%2F~hlilje%2F">Check</a></small></li>
          <li><small><a href="http://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fwww.csc.kth.se%2F~hlilje%2F">Check More</a></small></li>
          <li><small><time datetime="2014-03-08">2014-03-08</time></small></li>
        </ul>
      </footer>
    </div>
  </body>
</html>
