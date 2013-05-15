



<div class="body">
    <?php
    if (!empty($this->text)) {
        foreach ($this->text as $article) {
            ?>

            <h1> <?php echo $article['article_name']; ?> </h1>
            <span> <?php echo $article['article_body']; ?> </span> 	
            <hr>
            <?php
        }
    } else {
        ?> <span> <?php echo "This shelter has no animals of that type." ?> </span> <?php
    }
    ?>
</div>
