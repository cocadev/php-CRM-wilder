    <div class="container-fluid" style="margin-top: 55px;">

    <div class="row">
        <div class="col-md-10" id="home">
            <div class="container-fluid">

               <div class="row">

                <div class="col-sm-6" >

                   <div class="panel panel-default" style="border-color: #f3e9f9;">
                <div class="panel-heading panel-heading-custom">
                Posts
                <a href="<?php echo SITE_URL; ?>/controller/posts.php" style="float: right;font-size: 11px; margin-top: -10px">
                View All <i class="fa fa-bars"></i>
                </a>
                </div>
                <div class="panel-body">

                <div class="list-items">

                <?php foreach(array_slice($posts, 0, 5) as $post): ?>
                <div class="list-item" style="height: 50px">
                <img src="<?php echo SITE_URL ?>/images/<?php echo $post['post_image']; ?>">
                <h6><?php echo $post['post_title']; ?></h6>

                <div class="list-item-actions" style="margin-top: 0">

                    <a href="<?php echo SITE_URL ?>/controller/view_post.php?id=<?php echo $post['post_id']; ?>"><i class="fa fa-eye"></i></a>
                    <a href="<?php echo SITE_URL ?>/controller/edit_post.php?id=<?php echo $post['post_id']; ?>"><i class="fa fa-cog"></i></a>
                    <a onclick="alertdelete_<?php echo $post['post_id']; ?>();"><i class="fa fa-trash-o"></i></a>

                </div>
                </div>

                    <script type="text/javascript">
              function alertdelete_<?php echo $post['post_id']; ?>() {
              swal({ title: "Are you sure?", text: "You will not be able to recover this item!", type: "warning",cancelButtonClass: "btn-default btn-sm", showCancelButton: true, confirmButtonClass: "btn-danger btn-sm", confirmButtonText: "Yes, delete it!", closeOnConfirm: false }, function(){window.location.href = "<?php echo SITE_URL ?>/controller/delete_post.php?id=<?php echo $post['post_id']; ?>" });}
              </script>

                <?php endforeach; ?>

                </div>

                </div>
                </div>

                </div>

                   <div class="col-sm-6" >

                       <div class="panel panel-default" style="border-color: #f3e9f9;">
                           <div class="panel-heading panel-heading-custom">
                               Users
                               <a href="<?php echo SITE_URL; ?>/controller/users.php" style="float: right;font-size: 11px; margin-top: -10px">
                                   View All <i class="fa fa-bars"></i>
                               </a>
                           </div>
                           <div class="panel-body">

                               <div class="list-items">

                                   <?php foreach(array_slice($users, 0, 5) as $user): ?>
                                       <div class="list-item" style="height: 50px">
                                           <img src="<?php echo SITE_URL ?>/images/<?php echo $user['post_image']; ?>">
                                           <h6><?php echo $user['username']; ?></h6>

                                           <div class="list-item-actions" style="margin-top: 0">

                                               <a href="<?php echo SITE_URL ?>/controller/edit_user.php?id=<?php echo $user['id']; ?>"><i class="fa fa-cog"></i></a>
                                               <a onclick="alertdelete_<?php echo $user['id']; ?>();"><i class="fa fa-trash-o"></i></a>

                                           </div>
                                       </div>

                                       <script type="text/javascript">
                                           function alertdelete_<?php echo $user['id']; ?>() {
                                               swal({ title: "Are you sure?", text: "You will not be able to recover this item!", type: "warning",cancelButtonClass: "btn-default btn-sm", showCancelButton: true, confirmButtonClass: "btn-danger btn-sm", confirmButtonText: "Yes, delete it!", closeOnConfirm: false }, function(){window.location.href = "<?php echo SITE_URL ?>/controller/delete_user.php?id=<?php echo $user['id']; ?>" });}
                                       </script>

                                   <?php endforeach; ?>

                               </div>

                           </div>
                       </div>

                   </div>

               </div>

            <!--<?php if( !empty($errors)): ?>
            <?php echo $errors; ?>
            <?php endif; ?>-->

            </div>

            </div>
            <div class="col-md-2">
                <?php require'sidebar.view.php'; ?>
            </div>
        </div>
    </div>


