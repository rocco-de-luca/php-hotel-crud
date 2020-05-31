<?php
// get room details
include_once __DIR__ . '/partials/update/server-edit.php';
// section head
include __DIR__ .'/partials/templates/head.php';
?>
<main class="container">
    <div class="row">
        <div class="col-12">
            <header class="my-4">
                <h1 class="text-primary">Edit room</h1>
            </header>

            <?php //var_dump($room); ?>

            <form action="./partials/update/server-update.php" method="POST">
                <div class="form-group">
                <label for="room_number">Room number</label>
                <input type="form-control" type="number"
                name="room_number" id="room_number" 
                value="<?php echo $room['room_number'];?>">
            </div>
            <div class="form-group">
                <label for="beds">Beds</label>
                <input type="form-control" type="number"
                name="beds" id="beds" 
                value="<?php echo $room['beds'];?>">
            </div>
            <div class="form-group">
                <label for="floor">floor</label>
                <input type="form-control" type="number"
                name="floor" id="floor" 
                value="<?php echo $room['floor'];?>">
            </div>
            <div class="form-group text-right">
            <input type="hidden" name="id" 
            value="<?php echo $room['id'];?>">
            <input class="btn btn-primary" type="submit" 
            value="save">  
            </div>
            </form>
       </div>
    </div>
</main>


<?php
include __DIR__ . '/partials/templates/footer.php';
?>