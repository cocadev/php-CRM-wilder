<div class="container mt-1 mypunter-padding">

<div class="row">
        <div class="col-md-8">

            
            <div class="mt-1"></div>

            <div style="display: flex; align-items: flex-end">
                <img src="../images/man1.png" style="width: 50px; height: 50px; border-radius: 25px; display: inline-block"/>
                <div style="display: inline-block; margin-left: 10px">
                    <span class="font-size-16">John Matin</span><br/>
                    <?php echo '2020/'.str_replace('-', '/', substr($post['post_date'], 5)) ; ?>
                </div>
            </div>
            <p class="font-size-20 mt-1" id='tip'>
                <?php echo $post['post_title']; ?>
            </p>

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
