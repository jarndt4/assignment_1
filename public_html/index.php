<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">
<title>On the Rocks Bar & Grill</title>
<!-- This says our CSS is compatible with phones, and phones
         don't need to scale it strangely. -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Main CSS styles for Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/superhero/bootstrap.min.css">
</head>



<body>
 <div class="container">   
    <?php include 'navigation.php'; ?>


<header>

<h1 style="text-align:center;font-size: 25px;" class="jumbotron">Home Page - Index</h1>

    <img src="img/new_bar_logo.png" alt ="bar logo">

</header>

<h2>Menu</h2>

    <nav>
        <ul>
            <li>
                <a href="index.html">Home Page</a>
            </li>
            
            <li>
                <a href="about.html">About</a>
            </li>
            
            <li>
                <a href="beermenu.html">Drink Menu</a>
            </li>
            
            <li>
                <a href="foodmenu.html">Food Menu</a>
            </li>
            
            <li>
                <a href="events.html">Upcoming events</a>
            </li>
            
            <li>
                <a href="staff.html">Meet the staff</a>
            </li>
        </ul>
    </nav>
    
    <form action="/action_page.php">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<div class="alert alert-info">
  <strong>Info!</strong> Indicates a neutral informative change or action.
</div>
</div>
    
<?php include 'footer.php'; ?>
    
</body>

</html>