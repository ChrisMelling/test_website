
<div class="body">
    
    <?php
    echo $data;
    if (!empty($text)) {
        foreach ($text as $article) {
            ?>
            <hr>
            <h1> <?php echo $article['article_name']; ?> </h1>
            <span> <?php echo $article['article_body']; ?> </span> 	
            <?php
        }
    } else {
        ?> <span> <?php echo "This shelter has no animals of that type." ?> </span> <?php
    }
   
    ?>
</div>
