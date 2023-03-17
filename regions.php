<?php
require_once('database.php');

// Get attractions
$queryAttractions = 'SELECT * FROM attractions';
$statement = $db->prepare($queryAttractions);
$statement->execute();
$attractions = $statement->fetchAll();
$statement->closeCursor();


$queryRegions = 'SELECT * FROM regions';
$statement = $db->prepare($queryRegions);
$statement->execute();
$regions = $statement->fetchAll();
$statement->closeCursor();
?>

<?php include 'includes/header.php';?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<main class="container">
  <div class="starter-template text-center">
    <h1>Ireland Regions</h1>
    <p class="lead">See all of the regions that is available for attraction guidance!</p>
  </div>
  <section>
        <table>
            <tr>
                <th>Region ID</th>
                <th>All Regions</th>
            </tr>
            <?php foreach ($regions as $region) : ?>
              
            <tr>
                <td><?php echo $region['region_id']; ?></td>
                <td><?php echo $region['region']; ?></td>
              </tr>
        
            <?php endforeach; ?>
        </table>
    </section>

</main><!-- /.container -->
<?php include 'includes/footer.php';?>
