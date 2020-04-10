<div class="container mt-1 mypunter-padding">

<div class="row">
        <div class="col-md-8">
            <span class="font-size-20"  id='tip'>
                <?php echo $post['post_title']; ?>
                <?php echo str_replace('-', '/', substr($post['post_date'], 5)) ; ?>
            </span>
            
            <div class="mt-1"></div>

            <img src='../images/<?php echo $post['post_image']; ?>' class=" img-responsive mt-1" />

            <div class="mt-3 font-size-20">Description</div>

            <div class="mt-1">
                <p><?php echo $post['post_description']; ?></p>
            </div>

            <div class="mt-3 font-size-20">Comments</div>


        </div>
        <div class="col-md-4 text-center p-3 pt-0">
            <div class="mt-1"></div>
            <div class="font-size-20">New Comment</div>

            <textarea class="w-full h-220"></textarea>
            <button class="btn-block">Submit</button>

        </div>
    </div>



    <script type="text/javascript"> CKEDITOR.replace( 'description' ); </script>
