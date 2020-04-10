<div class="container-fluid" style="margin-top: 45px;">
<div class="row">
<div class="col-md-10" style="margin-top: 17px;">            
<h3 class="title-pages">Edit Tickers</h3>

<form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

<div class="form-group" style="padding: 0px 10px 0px 0px;">

   <label class="control-label">Header Ticker</label>
    <textarea class="form-control rounded-0" name="header" rows="10" required><?php echo $tickers[0]['header']; ?></textarea>
   <label class="control-label">Footer Ticker</label>
    <textarea class="form-control rounded-0" name="footer" rows="10" required><?php echo $tickers[0]['footer']; ?></textarea>


   <div class="action-button">
   <input type="submit" name="update" value="Update" class="btn btn-embossed btn-primary">

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
