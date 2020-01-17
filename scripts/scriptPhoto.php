<div id="galery_frame">
    
    <?php
        
        require 'database.php';
        
        $db = Database::connect();
        $statement = $db->query('SELECT * FROM photos');
        while($photos = $statement->fetch())
        { ?>
        
        <div class="photo_frame">
            <a href="<?php echo $photos['photo_path']; ?>"><img src='<?php echo $photos['photo_path']; ?>' alt='<?php echo $photos['photo_alt']; ?>' class="photo_content"/></a>
        </div>
        
        <?php
        }
        Database::disconnect();
    ?>    
        
</div>