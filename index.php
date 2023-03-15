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
    <h1>Road Trip? Holiday?</h1>
    <p class="lead">Come check out these attractions in Ireland!</p>
  </div>
  <section>
        <table>
            <tr>
                <th>Name</th>
                <th>Region</th>
                <th>Telephone</th>
                <th>URL</th>
                <th>Delete</th>
            </tr>
            <?php foreach ($attractions as $attraction) : ?>
              
            <tr>
                <td><?php echo $attraction['name']; ?></td>
                <td><?php showRegion($attraction['region_id']); ?></td>
                <td><?php echo $attraction['telephone']; ?></td>
                <td><a href="<?php echo $attraction['url']; ?>" target="_blank"><?php echo $attraction['url']; ?></a></td>
                <td><form action="delete_attraction.php" method="post">
                    <input type="hidden" name="attraction_id"
                           value="<?php echo $attraction['attraction_id']; ?>">
                    <button type="submit" class="btn btn-danger" value="Delete">Delete</button>
                </form></td>
              </tr>
        
            <?php endforeach; ?>
        </table>
    </section>

</main><!-- /.container -->
<?php include 'includes/footer.php';?>

<?php
function showRegion($region_id){
  switch ($region_id) {
    case 1:
      echo "Meath";
      break;
    case 2:
      echo "Donegal";
      break;
    case 3:
      echo "Leitrim";
      break;
    case 4:
      echo "Dublin";
      break;
    case 5:
      echo "Carlow";
      break;
    case 6:
      echo "Galway";
      break;
    case 7:
      echo "Cork";
      break;
  }
}
?>
