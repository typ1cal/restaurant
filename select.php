<?php
    $servername = "localhost";

    $username = "root";

    $password = "";

    $dbname = "restaurant";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
     if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());

} ;

    if ( isset($_POST['name']) && isset($_POST['rate']) && isset($_POST['review'])  ) {
        $entered_name = $_POST['name'];
        $entered_rate = $_POST['rate'];
        $entered_review = $_POST['review'];

        $sql = "INSERT INTO request(name, rating, review) VALUES ('$entered_name', '$entered_rate', '$entered_review')";

        if (mysqli_query($conn, $sql)) {
            header("Location: request_success.html");
        }
    }
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login</title>
    <!--Font-->
    <link
      href="//fonts.googleapis.com/css?family=Raleway:400,300,600"
      rel="stylesheet"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!--Favicon-->
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <!--CSS-->
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/skeleton.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <!--jQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--Scripts-->
    <script src="js/custom.js"></script>
  </head>
  <body>
    <div class="login-error-container container">
        <h3>Error, please try filling the form with correct values!</h3>
        <a href="login.html"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retry</a>
    </div>
  </body>
</html>