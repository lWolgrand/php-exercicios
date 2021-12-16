<h1>Products</h1>
        <ul>
            <?php foreach($campeoes as $campeao){ ?>

                <h3> <?php echo $campeao['name']; ?></h3>
                <p> <?php echo $campeao['lane']; ?></p>

            <?php  } ?>
        </ul>
    