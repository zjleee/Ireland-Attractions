<?php
require_once('database.php');

// Get attractions
$queryAttractions = 'SELECT * FROM attractions';
$statement = $db->prepare($queryAttractions);
$statement->execute();
$attractions = $statement->fetchAll();
$statement->closeCursor();
?>
<!DOCTYPE html>
<html>

<?php include 'includes/header.php';?>
<main class="container">
  <div class="starter-template text-center">
    <h1>Bootstrap starter template</h1>
    <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
  </div>
  <section>
        <!-- display a table of attractions -->
        <table>
            <tr>
                <th>Name</th>
                <th>Region</th>
                <th>Telephone</th>
                <th>URL</th>
            </tr>

            <?php foreach ($attractions as $attraction) : ?>
            <tr>
                <td><?php echo $attraction['name']; ?></td>
                <td><?php echo $attraction['region']; ?></td>
                <td><?php echo $attraction['telephone']; ?></td>
                <td><?php echo $attraction['url']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </section>

</main><!-- /.container -->
<?php include 'includes/footer.php';?>
