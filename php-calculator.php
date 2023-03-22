// It was more difficult to create the calculator for php, and there were many bugs for me to work out
// I must give credit to the python calculator for being the easier one to create in that respect, 
// but I  have used php before in other projects so it was simpler to understand.
// The "echo div" line was probably the thing i had the most trouble with.
// It doesnt make sense without the site, but the site kept saving the previous calculation after it loaded.
// In order to circumvent this, I was forced to use GET instead of POST in the form. 
// Luckily, it is only a calculator, so there shouldn't be any issues.


<main class="mdl-layout__content">
  <div class="page-content mdl-grid">
    <div class="mdl-cell mdl-cell--4-col mdl-cell--4-offset mdl-shadow--2dp">
      <form action="" method="GET" class="mdl-grid" autocomplete="off">
        <div class="mdl-cell mdl-cell--12-col">
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="number" id="diameter" name="diameter">
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
        if(isset($_GET['diameter'])){
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
        ?>
    </div>
  </div>
</main>
