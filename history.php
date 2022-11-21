<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>

    <?php include('./partials/links.php')?>
    <?php include('./partials/header.php')?>

    <title>
      [History]
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

        <div class="text-container" id="history">
            <?php
                echo "<p class='text'>
                Here at Genesee Community College in Batavia, New York, I have
                taken a variety of classes that helped develop the fundamental principles
                that will further lead me on in my career, while also providing me
                the resources to benefit my peers. Some classes to note would include:
                Web Publishing and Scripting, Java Programming, Applications of 
                Python and Javascript, SQL Databases, and Calculus
                and Discrete Mathematics
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