<div class="container-fluid" style="margin-top: 45px;">
<div class="row">
<div class="col-md-10" style="margin-top: 17px;">            
<h3 class="title-pages">Edit Post<span class="label label-default" style="font-size: 11px; float: right; right: 10px;">ID <?php echo $post['post_id']; ?></span></h3>

<form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

<div class="form-group" style="padding: 0px 10px 0px 0px;">

<input type="hidden" value="<?php echo $post['post_id']; ?>" name="post_id">

   <label class="control-label">Title</label>
   <input type="text" value="<?php echo $post['post_title']; ?>" placeholder="Title" name="post_title" class="form-control" required="">

   <label class="control-label">Date</label>
   <input type="date" value="<?php echo $post['post_date']; ?>" name="post_date" class="form-control" id="date" required="">

   <label class="control-label">Image: <a href="<?php echo SITE_URL ?>/images/<?php echo $post['post_image']; ?>" data-lightbox="image-1"><?php echo $post['post_image']; ?></a></label>
   <input name="post_image" class="input-file" type="file">
   <input type="hidden" value="<?php echo $post['post_image']; ?>" name="post_image_save">
   <span class="text-danger">Recommended size: <b>650 x 350 Pixels</b> </span>

   <div class="action-button">
   <input type="submit" name="update" value="Update" class="btn btn-embossed btn-primary">
   <a onclick="alertdelete();">
   <input name="trash" value="Delete" class="btn btn-embossed btn-danger" style="width: 80px;"></a>
    <script type="text/javascript">
   function alertdelete() {
   swal({ title: "Are you sure?", text: "You will not be able to recover this item!", type: "warning",cancelButtonClass: "btn-default btn-sm", showCancelButton: true, confirmButtonClass: "btn-danger btn-sm", confirmButtonText: "Yes, delete it!", closeOnConfirm: false }, function(){window.location.href = "<?php echo SITE_URL ?>/controller/delete_post.php?id=<?php echo $post['post_id']; ?>" });}
   </script>
   </div>


</div>
</form>  
</div>
<div class="col-md-2 page-sidebar">   
<?php require'sidebar.view.php'; ?>  
</div>
</div>
</div>

<script type="text/javascript"> CKEDITOR.replace( 'description' ); </script>
