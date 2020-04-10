<div class="container mt-2 mypunter-padding">

    <?php

    $arr = array( 1, 2, 3, 4, 5);
    foreach ($arr as &$value) {
        echo '<br/><br/>'.$results_day[0][$value];
        foreach (($results_day_posts[0][$value] ? $results_day_posts[0][$value] : array()) as $post) : ?>
            <div class="hover cursor-hover">
                <div style="border: 1px #dfdfdf solid; border-radius: 1px; padding: 5px; margin-top: 2px">
                    <a class="underline text-darker cursor cursor-hover font-size-13 amount" href="<?php echo SITE_URL.'/controller/view_post.php?id='.$post['post_id']?>" style="margin-left: 5px"><?php echo $post['post_title'] ?></a>
                    <div class="mt-05"></div>
                    <br/>
                    <div class="row">
                        <div class="col-md-3 pt-03" style="margin-left: 5px">
                            <img src='<?php echo SITE_URL . '/images/' . $post['post_image'] ?>' class="ad-img urlToImage"/>
                            <span class="urlToImage"></span>
                        </div>
                    </div>
                </div>
            </div>

    <?php endforeach; } ?>

</div>