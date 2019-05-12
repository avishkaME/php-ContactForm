<?php
  if (filter_has_var(INPUT_POST, 'submit')) {
    //echo "Submitted";
    //get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
  }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="bootstrap.min.css">
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="Contact_form.php">My Website</a>

        </div>

      </div>

    </nav>
    <div class="container">
      <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" name="name" value="" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Email</label>
          <input type="text" name="email" value="" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Message</label>
          <textarea name="message" rows="8" cols="80" class="form-control"></textarea>
        </div>
        <br>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

      </form>

    </div>

  </body>
</html>
