<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>

    <?php include('./partials/links.php')?>
    <?php include('./partials/header.php')?>

    <title>
      [About]
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

        <div class="text-container" id="main">
            <?php
                echo "<p class='text'>
                Hello, my name is Jonathan Pestinger and I am an undergraduate 
                student at Genesee Community College. I am currently working towards
                an Associates in Applied Science with a degree in Computer Information
                Systems. I intend on pursuing my career in the computer science field
                and wish to further expand my knowledge and apply my resources to a wide
                variety of subjects. This is to include but not be limited to: networking
                and security, programming and problem solving, database design, and 
                web development. Thank you for your time.
                <br /><br />- Jonathan Pestinger
                </p>";
            ?>
        </div>

      </div>
    </div>

  </main>

  <div class="border"></div>

  <?php include('./partials/footer.php')?>
  
</html>