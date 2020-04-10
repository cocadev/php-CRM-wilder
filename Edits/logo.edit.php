<div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
            <form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

            <div class="mt-2 mypunter-padding">
                <div class="row">
                    <div class="form-group">
                        <div class="avatar-upload2">
                            <div id="nav0" class="avatar-edit">
                                <input name="logo_img0" type='file' id="imageUpload0" accept=".png, .jpg, .jpeg" />
                                <input type="hidden" value="<?php echo $editHome[0]['logo']; ?>" name="post_image_save0">
                                <label for="imageUpload0"></label>
                            </div>
                            <div class="avatar-preview2" style="height: 202px;background-color: #0b0b0b">
                                <div id="imagePreview0" style="height: 200px; background-image: url(<?php echo SITE_URL.'/images/'.$editHome[0]['logo']?>);">
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" name="update" value="Update" class="btn btn-embossed btn-primary">

                </div>
            </div>


            </form>
        </div>
        <div class="col-md-2 page-sidebar mt-4">
            <?php require'../views/sidebar.view.php'; ?>
        </div>
    </div>
</div>

<script type="text/javascript"> CKEDITOR.replace( 'description' ); </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<script>

    function readURL(input, x) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $("#imagePreview"+x).css(
                    "background-image",
                    "url(" + e.target.result + ")"
                );
                $("#imagePreview"+x).hide();
                $("#imagePreview"+x).fadeIn(650);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imageUpload0").change(function() { readURL(this, 0);  });

</script>

