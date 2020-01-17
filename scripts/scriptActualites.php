<?php require 'database.php';
        require_once 'Parser.php';
            
        $db = Database::connect();
        $statement = $db->query('SELECT id, billet_title, billet_content, DATE_FORMAT(add_date, "%d/%m/%Y") AS add_date FROM billets ORDER BY id DESC');
        while($news = $statement->fetch())
        { ?>

        <div class="post">
            <span class="post_title"><?php echo $news['billet_title']; ?></span>
            <p class="post_content">
                <?php 
                $parseResult = $news['billet_content'];
                $parser = new JBBCode\Parser();
                $parser->addCodeDefinitionSet(new JBBCode\DefaultCodeDefinitionSet());
                $parser->addBBCode("left", '<div align="left">{param}</div>');
                $parser->addBBCode("right", '<div align="right">{param}</div>');
                $parser->addBBCode("center", '<div align="center">{param}</div>');
                $parser->parse($parseResult);
                echo $parser->getAsHtml(); 
                ?>
            </p>
            <div class="post_info">
                <p>Article publié le <span class="post_date"><?php echo $news['add_date']; ?></span></p>
            </div>
        </div>

        <?php
        }
        Database::disconnect();
        ?> 