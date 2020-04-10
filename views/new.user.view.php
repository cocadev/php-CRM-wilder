<div class="container-fluid" style="margin-top: 45px;">
    <div class="row">
        <div class="col-md-10" style="margin-top: 17px;">

            <h3 class="title-pages">User</h3>

            <form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

                <div class="form-group" style="padding: 0px 10px 0px 0px;">

                    <div class="avatar-upload">
                        <div class="avatar-edit">
                            <input name="post_image" type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                            <label for="imageUpload"></label>
                        </div>
                        <div class="avatar-preview">
                            <div id="imagePreview" style="background-image: url(https://static.thenounproject.com/png/17241-200.png);">
                            </div>
                        </div>
                    </div>

                    <label class="control-label">Username</label>
                    <input type="text" value="" placeholder="Username" name="username" class="form-control" required>

                    <label class="control-label">Password</label>
                    <input type="password" value="" placeholder="Password" name="password" class="form-control" required>

                    <div class="form-group">
                        <label class="control-label">Role</label>
                        <select class="form-control" name="role">
                            <option value=""> -- No rule for this site -- </option>
                            <option value="Subscriber">Subscriber</option>
                            <option value="Contributor">Contributor</option>
                            <option value="Author">Author</option>
                            <option value="Editor">Editor</option>
                            <option value="Administrator">Administrator</option>
                        </select>
                    </div>

                    <label class="control-label">Email</label>
                    <input type="email" value="" placeholder="Email" name="email" class="form-control" >

                    <div class="form-group">
                        <label class="control-label">Current Level</label>
                        <select class="form-control" name="level">
                            <option value=""> -- None -- </option>
                            <option value="Club Platinum Membership">Club Platinum Membership</option>
                            <option value="Welcome Punter Membership">Welcome Punter Membership</option>
                            <option value="Cranbourne MyPunter Membership">Cranbourne MyPunter Membership</option>
                        </select>



                    </div>

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $("#imagePreview").css(
                    "background-image",
                    "url(" + e.target.result + ")"
                );
                $("#imagePreview").hide();
                $("#imagePreview").fadeIn(650);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
    });

</script>

