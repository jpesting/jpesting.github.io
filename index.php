<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>

    <?php include('./partials/links.php')?>
    <?php include('./partials/header.php')?>

    <title>
      [Home]
    </title>

  </head>

  <body>

    <?php include('./partials/slideshow.php')?>

  </body>

  <main>
    
    <div class="bottom-container">
      <div class="border"></div><br />
      <div class="main-container">

        <div class="img-container">
          <img class="image" src="./images/me.jpg" alt="Jonathan Pestinger" />
        </div>

        <div class= "text-container" id="main">
          <?php include('./partials/table.php')?>
        </div>

      </div>
    </div>

  </main>

  <div class="border"></div>

  <?php include('./partials/footer.php')?>
  
</html>