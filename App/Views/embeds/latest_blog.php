                <h2>Latest Blog</h2>
                <?php
                    $lb = App\Blog::First(); 
                ?>
                <h4><?=$lb['title']?> <small> <?=date_format(date_create($lb['date']), "d/m/Y")?></small></h4>
