<?php 
$db = Database::connect();
$statement = $db->query('SELECT id, view_title, view_content, view_author, DATE_FORMAT(passage_date, "%d/%m/%Y") AS passage_date FROM views ORDER BY id DESC');
while($views = $statement->fetch())
{ ?> 

<div class="view_frame">
    <span class="viewTitle"><?php echo $views['view_title'] ?></span>
    <p class="viewContent"><?php echo $views['view_content'] ?></p>
    <p class="view_details">Avis publié le <span class="view_date"><?php echo $views['passage_date'] ?></span> par <span class="viewAuthor"><?php echo $views['view_author'] ?></span>.</p>
</div>

<?php
    }
    Database::disconnect();
?>