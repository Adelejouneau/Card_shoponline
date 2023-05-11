<!DOCTYPE html>
<html lang="fr">
<head>
   <?php include 'includes/_head.php';?>
   
</head>
<body>
    <?php 
    include 'includes/_navbar.php';
    include 'data.php';
    ?>
    
 <main class="bg-white container-lg py-4">

   <?php 
    echo "<h1>".$title."</h1>";
    echo"<p>".$intro."</p>";
    ?>
<div class="row">

<?php
foreach ($products as $product) {
  ?>
<div class="col-12 col-md-3 co-lg-2">
  <div class="card">
<img src="images/<?php echo $product["image"];?>" class="card-img-top" alt="<?php echo $product["name"];?>">
<div class="card-body">
<h5 class="card-title"><?php echo $product["name"]; ?></h5>
<p class="card-text"><?php echo $product["description"]; ?></p>
<a href="#" class="btn btn-primary"><?php echo $product["price"]; ?>€</a>


</div>
</div>

</div>
  <?php
}
?>




  // <?php
    // foreach ($products as $product) {
    //   echo '<div class="card">';
    //   echo '<img src="' . $product["image"] . '" alt="' . $product["name"] . '">';
    //   echo '<h2>' . $product["name"] . '</h2>';
    //   echo '<p>' . $product["description"] . '</p>';
    //   echo '<a href="#" class="btn btn-primary">' . $product["price"] . ' €</a>';
    //   '</div>';
    // } ?>
  </div>

</main>
</body>
</html>