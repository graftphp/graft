<h2>Latest Blog</h2>
<?php if($latest) : ?>
    <h4>
        <?= $latest->title ?> 
        <small> 
            <?= date_format(date_create($latest->date), "d/m/Y") ?>
        </small>
    </h4>
<?php endif; ?>
