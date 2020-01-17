<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
            <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>  
            </ol>
            <div class="carousel-inner" role="listbox">
                
            
            <?php require 'database.php';
            
            $db = Database::connect();
            
            $i = 1;
            
            while($i <= 3)
            {
                if($i == 1) // class active
                {
                    $statement = $db->query('SELECT id, view_title, view_content, view_author, DATE_FORMAT(passage_date, "%d/%m/%Y") AS passage_date FROM views ORDER BY id DESC');
                    $view = $statement->fetch();
                    ?>
                        <div class="item active">
                            <div class="view_frame_carousel">
                                <span class="view_title_carousel">"<?php echo $view['view_title'] ?>"</span>
                                <p class="view_details_carousel">
                                    <span class="view_author_carousel"><?php echo $view['view_author'] ?></span>
                                    <span class="view_date_carousel">(<?php echo $view['passage_date'] ?>)</span></p>
                            </div>         
                        </div>
                    <?php
                    $i++;
                }
                else if($i == 2)
                {
                    $statement = $db->query('SELECT id, view_title, view_content, view_author, DATE_FORMAT(passage_date, "%d/%m/%Y") AS passage_date FROM views ORDER BY id DESC LIMIT 1, 1');
                    $view = $statement->fetch()
                    ?>
                        <div class="item">
                            <div class="view_frame_carousel">
                                <span class="view_title_carousel">"<?php echo $view['view_title'] ?>"</span>
                                <p class="view_details_carousel">
                                    <span class="view_author_carousel"><?php echo $view['view_author'] ?></span>
                                    <span class="view_date_carousel">(<?php echo $view['passage_date'] ?>)</span></p>
                            </div>    
                        </div>
                    <?php
                    $i++;
                }
                else if($i == 3)
                {
                    $statement = $db->query('SELECT id, view_title, view_content, view_author, DATE_FORMAT(passage_date, "%d/%m/%Y") AS passage_date FROM views ORDER BY id DESC LIMIT 2, 1');
                    $view = $statement->fetch()
                    ?>
                        <div class="item">
                            <div class="view_frame_carousel">
                                <span class="view_title_carousel">"<?php echo $view['view_title'] ?>"</span>
                                <p class="view_details_carousel">
                                    <span class="view_author_carousel"><?php echo $view['view_author'] ?></span>
                                    <span class="view_date_carousel">(<?php echo $view['passage_date'] ?>)</span></p>
                            </div>       
                        </div>
                    <?php
                    $i++;
                }
            }

            Database::disconnect();
            ?>
                </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev" role="button">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next" role="button">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>