<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

?>
 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

  <link rel="stylesheet" href="./styles.css">
  <title>Dashboard</title>
</head>
<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero">
            <h1> welcome, <span style="color: red ;"><?php echo $_SESSION['fname']; ?></span></h1>
          </a>
        </div>
        <div class="nav">
          <div class="a">
            <div ></div>
          </div>
          <ul>
            <li ><i  style="color:white ; font-size:20px; margin-right:20px;" class="fa-solid fa-arrow-right-from-bracket"><a style="color:white ; padding-left: 7px;" href="logout.php">Logout</a></i></li>  
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->
  <!-- Hero Section  -->
  <section id="hero">
    <div class="container">
      <div>
        <h1 class="cta" style="left: 125px;" >Hello, <?php echo $_SESSION['fname']; ?></h1>
        <h1>Welcome to the admin Dashboard </h1> 
      </div>
    </div>
  </section>
</body>
</html>

<?php
} else {
     header("Location: index.php");
     exit();
}
?>

