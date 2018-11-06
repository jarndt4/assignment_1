<!DOCTYPE html>

<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Main CSS styles for Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/superhero/bootstrap.min.css">


<meta charset="utf-8">



<title>Drink Menu</title>

</head>

<body>
    <?php include 'navigation.php'; ?>

<header>

    <h1>Drink Menu</h1>

    <img src="img/new_drink.png" alt= "drink image">
    
</header>

<h2>Beers</h2>
    
<table class="a">
    <thead>
         <tr>
         <th>Domestics</th>
         <th>Craft Draws</th>
         </tr>
    </thead>
    <tbody>
        <tr>
            <td>Budweiser $4.00</td>
            <td>Coors Light $4.00</td>
        </tr>
        <tr>
            <td>Bud Light $4.00</td>
            <td>Samuel Adams $4.00</td>
        </tr>
        <tr>
            <td>Blue Moon $4.00</td>
            <td>Bush Light $4.00</td>
        </tr>
    </tbody>
    <tfoot>
        
    </tfoot>
</table>


    <h2>Spirits</h2>
    <ul>
        <li>
            Smirnoff Vodka
        </li>
        
        <li>
            Captain Morgan
        </li>
        
        <li>
            Jack Daniels
        </li>
    </ul>
    
    <h2>Wine</h2>
    <ul>
        <li>
            Cabernet Sauvignon $14
        </li>
        
        <li>
            Risata Moscato $12
        </li>
        
        <li>
             Rosa Stella Red $14
        </li>
    </ul>

<?php include 'footer.php'; ?>

    
</body>

</html>