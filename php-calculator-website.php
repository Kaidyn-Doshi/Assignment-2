<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Area & Circumference Calculator">
    <meta name="keywords" content="ics2o, kaidyn-doshi, viridianknight7">
    <meta name="author" content="Kaidyn Doshi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle Calculator</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-orange.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </head>
    <style>
      html {
        height: 100%;
      }
      main {
        flex: 1 0 auto;
      }
      body {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        height: 100%;
      }
      .results {
        margin-top: 20px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f5f5f5;
        font-size: 16px;
      }
      .mdl-cell {
        flex-grow: 0;
      }
      .mdl-mini-footer {
        position: fixed;
        bottom: 0;
        width: 99%;
      }
    </style>
<body>
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
		<header class="mdl-layout__header mdl-layout__header--waterfall mdl-color--primary">
			<div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Circle Calculator</span>
        <div class="mdl-layout-spacer"></div>
        <nav class="mdl-navigation mdl-layout--large-screen-only">
          <a class="mdl-navigation__link" href="#">Radius</a>
          <a class="mdl-navigation__link" href="#">Area</a>
          <a class="mdl-navigation__link" href="#">Circumference</a>
        </nav>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="page-content mdl-grid">
        <div class="mdl-cell mdl-cell--4-col mdl-cell--4-offset mdl-shadow--2dp">
          <form action="" method="GET" class="mdl-grid" autocomplete="off">
            <div class="mdl-cell mdl-cell--12-col">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="diameter" name="diameter" pattern="[0-9]+(\.[0-9]+)?" title="Invalid input">
                <label class="mdl-textfield__label" for="diameter">Diameter</label>
              </div>
            </div>
            <div class="mdl-cell mdl-cell--12-col">
              <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect mdl-cell--12-col">
                Calculate
              </button>
            </div>
          </form>
            <?php
            if(isset($_GET['diameter']) && $_GET['diameter'] >= 0){
                $dia = $_GET['diameter'];
                $radius = $dia / 2;
                $area = round(pi() * pow($radius, 2), 2);
                $circumference = round(2 * pi() * $radius, 2);
                echo "<div class='results'>";
                echo "Diameter: $dia <br>";
                echo "Radius: " . round($radius, 2) . "<br>";
                echo "Area: $area <br>";
                echo "Circumference: $circumference <br>";
                echo "</div>";
            } 
            elseif(isset($_GET['diameter']) && $_GET['diameter'] < 0){
                echo "<div class='results'>Please enter a non-negative integer only.</div>";
            }
            ?>

        </div>
      </div>
    </main>
            <footer class="mdl-mini-footer">
        <div class="mdl-mini-footer__left-section">
          <div class="mdl-logo">Circle Calculator</div>
          <ul class="mdl-mini-footer__link-list">
          <li><a href="#">Assignment 2</a></li>
            <li><a href="#">This Page Uses MDL</a></li>
          </ul>
        </div>
        <div class="mdl-mini-footer__right-section">
          <div class="mdl-logo">ICS2O</div>
          <ul class="mdl-mini-footer__link-list">
            <li><a href="#">Kaidyn Doshi</a></li>
            <li><a href="#">2023</a></li>
          </ul>
        </div>
      </footer>
  </body>
</html> 
