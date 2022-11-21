<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>

    <?php include('./partials/links.php')?>
    <?php include('./partials/header.php')?>

    <title>
      [Contact]
    </title>

  </head>

  <body>

    <div class="form-container">

      <center>

        <h3>Contact Me</h3>
        <hr style="width: 21%; border: 1px solid #2257A5;"><br />
        
        <form action="/action_page.php">

          <label>First Name</label><br />
          <input type="text" id="fname" name="firstname" placeholder="Input first name..." required><br />

          <label>Last Name</label><br />
          <input type="text" id="lname" name="lastname" placeholder="Input last name..." required><br />

          <label>Email</label><br />
          <input type="text" id="lname" name="email" placeholder="Ex. johnsmith@fakegmail.com" required><br />

          <label>Phone Number</label><br />
          <input type="text" id="lname" name="phone" placeholder="Ex. (123)456-7890" required><br />

          <label>Addtional Information</label><br />
          <textarea id="subject" name="subject" placeholder="Please note that this page does send any information.
    It is purely for show." style="height:150px"></textarea><br />

          <input type="submit" value="Send">

        </form>

      </center>

      </div>

  </body>

  <div class="border"></div>

  <?php include('./partials/footer.php')?>
  
</html>