<?php
include __DIR__ . '/partials/home/server.php';

// section head
include __DIR__ .'/partials/templates/head.php';
?>

<?php // allerts
if(!empty($_GET['del']) ) {?>
    <div class="alert alert_success">
        stanza cancellata con successo
    </div>
<?php } ?>


    <main class="container">
    <div class="row">
    <div class="col-12">
    <header class="my-4">
    <h1 class="text-primary">Hotel Rooms</h1>
    </header>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Number</th>
                <th>Floor</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
    <?php // loop on db records
    if(!empty($rooms)) {
        foreach ($rooms as $room) {?>
            <tr>
                <td><?php echo $room['id']; ?></td>
                <td><?php echo $room['room_number']; ?></td>
                <td><?php echo $room['floor']; ?></td>
                <td>
                <a class="text-success" href="./show.php?id=<?php echo $room['id']; ?>">View</a>
                </td>
                <td>
                <a class="text-primary" 
                href="./edit.php?id=<?php echo $room['id']; ?>">
                Update
                </a>
                </td>
                <td class="text-danger">
                <form action="./partials/delete/server.php" method="POST">
                    <input type="hidden" name="id"
                    value="<?php echo $room['id'];?>">
                    <input class="btn btn-danger" type="submit"
                        value="Delete">
                </form>
                </td>
            </tr>
       <?php }
    }
    ?>
    </tbody>
    </table>
    </header>
    </div>
    </div>
    </main>

    <?php
    include __DIR__ . '/partials/templates/footer.php';
    ?>