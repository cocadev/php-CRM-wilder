<div class="container-fluid" style="margin-top: 45px;">
<div class="row">
<div class="col-md-10" style="margin-top: 17px;">            

<h3 class="title-pages">Post</h3>

<form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

<div class="form-group" style="padding: 0px 10px 0px 0px;">

   <label class="control-label">Title</label>
   <input type="text" value="" placeholder="Title" name="post_title" class="form-control" required="">

   <label class="control-label">Description</label>
   <input type="date" value="" placeholder="Title" name="post_date" class="form-control" required="">

   <label class="control-label">Faeatured Image</label>
   <input name="post_image" class="input-file" type="file" required="">
   <span class="text-danger">Recommended size: <b>650 x 350 Pixels</b> </span>

   <div class="action-button">
   <input type="submit" name="save" value="Upload" class="btn btn-embossed btn-primary">
   <input type="reset" name="reset" value="Reset" class="btn btn-embossed btn-danger">
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