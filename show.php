<?php
// get room details
include __DIR__ . '/partials/show/server.php';
// section head
include __DIR__ .'/partials/templates/head.php';
?>
<main class="container">
    <div class="row">
    <div class="col-12">
<header class="my-4">
    <h1 class="text-primary">Details room <?php echo $room['room_number']; ?></h1>
</header>
<?php //var_dump($room);?>

<div class="card mb-5">
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
        ID: <?php echo $room['id']; ?>
        </li>
        <li class="list-group-item">
        ROOM NUMBER: <?php echo $room['room_number']; ?>
        </li>
        <li class="list-group-item">
        BEDS: <?php echo $room['beds']; ?>
        </li>
        <li class="list-group-item">
        FLOOR:<?php echo $room['floor']; ?>
        </li>
    </ul>
</div>
<a class="btn btn-primary" 
href="<?php echo $base_path;?>/edit.php?id=<?php echo $room['id'];?>">
Update
</a>
</div>
</div>
</main>


<?php
include __DIR__ . '/partials/templates/footer.php';
?>
