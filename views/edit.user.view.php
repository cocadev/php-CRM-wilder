
<div class="container-fluid" style="margin-top: 15px;">

<div class="row">
    <br/>
<div class="col-md-10" style="margin-top: 17px;">

<h3 class="title-pages">Edit User<span class="label label-default" style="font-size: 11px; float: right; right: 10px;">ID <?php echo $user['id']; ?></span></h3>

<form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

<div class="form-group" style="padding: 0px 10px 0px 0px;">
    <input type="hidden" value="<?php echo $user['id']; ?>" name="id">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <div class="avatar-upload">
        <div class="avatar-edit">
            <input name="post_image" type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
            <input type="hidden" value="<?php echo $user['post_image']; ?>" name="post_image_save">

            <label for="imageUpload"></label>
        </div>
        <div class="avatar-preview">
            <?php
            $img1= "../images/".$user['post_image'];
            $img2= "https://static.thenounproject.com/png/17241-200.png";

            if((substr($user['post_image'], -1)) === '.') {
                echo '<div id="imagePreview" style="background-image: url('.$img2.');"></div>';

            }else{
                echo '<div id="imagePreview" style="background-image: url('.$img1.');"></div>';
            }

            ?>

        </div>
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
    </div>

    <h1>Name</h1>
    <label class="control-label">Username</label>
    <input type="text" value="<?php echo $user['username']; ?>" placeholder="Username" name="username" class="form-control" required>
    <input type="hidden" value="<?php echo $user['username']; ?>" name="old_username">

    <div class="form-group">
        <label class="control-label">Role</label>
        <select class="form-control" name="role">
            <option value=""> -- No rule for this site -- </option>
            <option <?php if($user['role']=="Subscriber") echo "selected=\"selected\""; ?> value="Subscriber">Subscriber</option>
            <option <?php if($user['role']=="Contributor") echo "selected=\"selected\""; ?> value="Contributor">Contributor</option>
            <option <?php if($user['role']=="Author") echo "selected=\"selected\""; ?> value="Author">Author</option>
            <option <?php if($user['role']=="Editor") echo "selected=\"selected\""; ?> value="Editor">Editor</option>
            <option <?php if($user['role']=="Administrator") echo "selected=\"selected\""; ?> value="Administrator">Administrator</option>
        </select>
    </div>

    <label class="control-label">Firstname</label>
    <input type="text" value="<?php echo $user['firstname']; ?>" placeholder="First Name" name="firstname" class="form-control" >

    <label class="control-label">Lastname</label>
    <input type="text" value="<?php echo $user['lastname']; ?>" placeholder="Last Name" name="lastname" class="form-control" >

    <label class="control-label">Nickname</label>
    <input type="text" value="<?php echo $user['nickname']; ?>" placeholder="Nick Name" name="nickname" class="form-control" >

    <label class="control-label">Display name publicly as</label>
    <input type="text" value="<?php echo $user['publicly']; ?>" placeholder="Publicly" name="publicly" class="form-control" >


    <h1>Contact Info</h1>
    <label class="control-label">Email</label>
    <input type="text" value="<?php echo $user['email']; ?>" placeholder="Website" name="email" class="form-control" >

    <label class="control-label">Website</label>
    <input type="text" value="<?php echo $user['website']; ?>" placeholder="Website" name="website" class="form-control" >

    <h1>About the User</h1>
    <label class="control-label">Biographical Info</label>
    <input type="text" value="<?php echo $user['biographical']; ?>" placeholder="Biographical" name="biographical" class="form-control" >

    <h1>Membership Level</h1>
    <div class="form-group">
        <label class="control-label">Current Level</label>
        <select class="form-control" name="level">
            <option value=""> -- None -- </option>
            <option <?php if($user['level']=="Club Platinum Membership") echo "selected=\"selected\""; ?> value="Club Platinum Membership">Club Platinum Membership</option>
            <option <?php if($user['level']=="Welcome Punter Membership") echo "selected=\"selected\""; ?> value="Welcome Punter Membership">Welcome Punter Membership</option>
            <option <?php if($user['level']=="Cranbourne MyPunter Membership") echo "selected=\"selected\""; ?> value="Cranbourne MyPunter Membership">Cranbourne MyPunter Membership</option>
        </select>
    </div>

    <div class="form-group">
        <label class="control-label">Expires</label>
        <select class="form-control" name="expires">
            <option value="0">No</option>
            <option <?php if($user['expires']==1) echo "selected=\"selected\""; ?> value="1">Yes</option>
        </select>
    </div>

    <label class="control-label">TOS Consent History</label>
    <input type="text" value="<?php echo $user['history']; ?>" placeholder="History" name="history" class="form-control" >


    <h1>More Information</h1>
    <label class="control-label">Address</label>
    <input type="text" value="<?php echo $user['address']; ?>" placeholder="Address" name="address" class="form-control" >

    <label class="control-label">Suburb</label>
    <input type="text" value="<?php echo $user['suburb']; ?>" placeholder="Suburb" name="suburb" class="form-control" >

    <label class="control-label">State</label>
    <input type="text" value="<?php echo $user['state']; ?>" placeholder="State" name="state" class="form-control" >

    <label class="control-label">Postcode</label>
    <input type="text" value="<?php echo $user['postcode']; ?>" placeholder="Postcode" name="postcode" class="form-control" >

    <label class="control-label">Mobile</label>
    <input type="text" value="<?php echo $user['mobile']; ?>" placeholder="Mobile" name="mobile" class="form-control" >

    <label class="control-label">Date of Birth</label>
    <input type="date" min="2018-01-01" value="<?php echo $user['birth']; ?>" placeholder="Birth" name="birth" class="form-control" >

    <label class="control-label">I currently have betting accounts with the following bookmakers</label>
    <input type="text" value="<?php echo $user['bookmakers']; ?>" placeholder="Bookmakers" name="bookmakers" class="form-control" >

<!--    <label class="control-label">I want to receive SMS late mail tips from MyPunter.com and other advertising material</label><br/>-->
<!--    <label class="switch">-->
<!--        --><?php
//            echo '~~~~~~~~~~~~~~~~~~~~~~'.$user['sms'].$user['sms'].$user['sms'].'pp';
//        if( $user['sms'] == 1 ){
//            echo '<input type="checkbox" value="" name="sms" checked>';
//        }else{
//            echo '<input type="checkbox" value="'.$user['sms'].'" name="sms">';
//        }
//
//        ?>
<!---->
<!--        <span class="slider round"></span>-->
<!---->
<!--    </label>-->
    <br/>

    <label class="control-label">I was introduced to Mypunter.com by:</label>
    <input type="text" value="<?php echo $user['introduce']; ?>" placeholder="Introduce" name="introduce" class="form-control" >

    <label class="control-label">Your Country</label><br/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
    <select class="selectpicker countrypicker" data-live-search="true" data-default="<?php echo $user['country']; ?>" data-flag="true" name="country"></select>

    <link rel="stylesheet" href="../css/switch.css">



    <div class="action-button">
   <input type="submit" name="update" value="Update" class="btn btn-embossed btn-primary">

    <script type="text/javascript">
   function alertdelete() {
   swal({ title: "Are you sure?", text: "You will not be able to recover this item!", type: "warning",cancelButtonClass: "btn-default btn-sm", showCancelButton: true, confirmButtonClass: "btn-danger btn-sm", confirmButtonText: "Yes, delete it!", closeOnConfirm: false }, function(){window.location.href = "<?php echo SITE_URL ?>/controller/delete_user.php?id=<?php echo $user['user_id']; ?>" });}
   </script>

       <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
       <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

       <script src="js/countrypicker.js"></script>
       <script type="text/javascript">

           var _gaq = _gaq || [];
           _gaq.push(['_setAccount', 'UA-36251023-1']);
           _gaq.push(['_setDomainName', 'jqueryscript.net']);
           _gaq.push(['_trackPageview']);

           (function() {
               var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
               ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
               var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
           })();

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
