<div class="container mypunter-padding">

    <br/>
    <form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

    <div class="bg-danger mt-18 ">
        <div class="form-group" style="padding: 0px 10px 0px 0px;">
            <div class="avatar-upload2">
                <div id="nav0" class="avatar-edit">
                    <input name="membershipLevels_img0" type='file' id="imageUpload0" accept=".png, .jpg, .jpeg" />
                    <input type="hidden" value="<?php echo $editMembershipLevels[0]['main_img']; ?>" name="post_image_save0">

                    <label for="imageUpload0"></label>
                </div>
                <div class="avatar-preview2" style="height: 602px">
                    <div id="imagePreview0" style="height: 600px; background-image: url(<?php echo SITE_URL.'/images/'.$editMembershipLevels[0]['main_img']?>);">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3 ">
        <div class="col-md-3 ">
            <span class="font-size-14 font-weight-7">Level</span>
            <br/>
            <div class="mt-1"></div>
            <span>Welcome Punter Membership</span>
        </div>
        <div class="col-md-7 ">
            <span class="font-size-14 font-weight-7">Price</span>
            <br/>
            <div class="mt-1"></div>
            <span class="font-size-14 font-weight-7">$40.00</span> now.
            <br/>
            <div class="mt-1"></div>
            <span>Membership expires after 1 Year. (Until 31/07/19)</span>
        </div>
        <div class="col-md-2 ">
            <a href="#" class=" btn-punter ">Select</a>
        </div>

    </div>

    <div class="line"></div>

    <a href="<?php echo SITE_URL?>">
        <span class="underline text-darker  cursor cursor-hover">← Return to Home</span>
    </a>

    <div class="bg-darker p-half mt-4 ">
        <span class="text-white md-text">PRESENT YOUR MYPUNTER MEMBERSHIP CARD TO GAIN GENERAL ACCESS ADMISSION TO:</span>
    </div>

    <div class="row mt-2 ">
        <div class="col-md-3 text-center ">
                <div class="avatar-upload2">
                    <div id="nav0" class="avatar-edit">
                        <input name="membershipLevels_img1" type='file' id="imageUpload1" accept=".png, .jpg, .jpeg" />
                        <input type="hidden" value="<?php echo $editMembershipLevels[0]['advert1']; ?>" name="post_image_save1">

                        <label for="imageUpload1" style="margin-top: 10px"></label>
                    </div>
                    <div class="avatar-preview2" style="height: 172px">
                        <div id="imagePreview1" style="height: 170px; background-image: url(<?php echo SITE_URL.'/images/'.$editMembershipLevels[0]['advert1']?>);">
                        </div>
                    </div>
                </div>
        </div>
        <div class="col-md-3 text-center ">
                <div class="avatar-upload2">
                    <div id="nav0" class="avatar-edit">
                        <input name="membershipLevels_img2" type='file' id="imageUpload2" accept=".png, .jpg, .jpeg" />
                        <input type="hidden" value="<?php echo $editMembershipLevels[0]['advert2']; ?>" name="post_image_save2">

                        <label for="imageUpload2" style="margin-top: 10px"></label>
                    </div>
                    <div class="avatar-preview2" style="height: 172px">
                        <div id="imagePreview2" style="height: 170px; background-image: url(<?php echo SITE_URL.'/images/'.$editMembershipLevels[0]['advert2']?>);">
                        </div>
                    </div>
                </div>
        </div>
        <div class="col-md-3 text-center ">
                <div class="avatar-upload2">
                    <div id="nav0" class="avatar-edit">
                        <input name="membershipLevels_img3" type='file' id="imageUpload3" accept=".png, .jpg, .jpeg" />
                        <input type="hidden" value="<?php echo $editMembershipLevels[0]['advert3']; ?>" name="post_image_save3">

                        <label for="imageUpload3" style="margin-top: 10px"></label>
                    </div>
                    <div class="avatar-preview2" style="height: 172px">
                        <div id="imagePreview3" style="height: 170px; background-image: url(<?php echo SITE_URL.'/images/'.$editMembershipLevels[0]['advert3']?>);">
                        </div>
                    </div>
                </div>
        </div>
        <div class="col-md-3 text-center ">
                <div class="avatar-upload2">
                    <div id="nav0" class="avatar-edit">
                        <input name="membershipLevels_img4" type='file' id="imageUpload4" accept=".png, .jpg, .jpeg" />
                        <input type="hidden" value="<?php echo $editMembershipLevels[0]['advert4']; ?>" name="post_image_save4">

                        <label for="imageUpload4" style="margin-top: 10px"></label>
                    </div>
                    <div class="avatar-preview2" style="height: 172px">
                        <div id="imagePreview4" style="height: 170px; background-image: url(<?php echo SITE_URL.'/images/'.$editMembershipLevels[0]['advert4']?>);">
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-3 text-center ">
                <div class="avatar-upload2">
                    <div id="nav0" class="avatar-edit">
                        <input name="membershipLevels_img5" type='file' id="imageUpload5" accept=".png, .jpg, .jpeg" />
                        <input type="hidden" value="<?php echo $editMembershipLevels[0]['advert1']; ?>" name="post_image_save5">

                        <label for="imageUpload5" style="margin-top: 10px"></label>
                    </div>
                    <div class="avatar-preview2" style="height: 172px">
                        <div id="imagePreview5" style="height: 170px; background-image: url(<?php echo SITE_URL.'/images/'.$editMembershipLevels[0]['advert5']?>);">
                        </div>
                    </div>
                </div>
        </div>
        <div class="col-md-3 text-center ">
                <div class="avatar-upload2">
                    <div id="nav0" class="avatar-edit">
                        <input name="membershipLevels_img6" type='file' id="imageUpload6" accept=".png, .jpg, .jpeg" />
                        <input type="hidden" value="<?php echo $editMembershipLevels[0]['advert6']; ?>" name="post_image_save6">

                        <label for="imageUpload6" style="margin-top: 10px"></label>
                    </div>
                    <div class="avatar-preview2" style="height: 172px">
                        <div id="imagePreview6" style="height: 170px; background-image: url(<?php echo SITE_URL.'/images/'.$editMembershipLevels[0]['advert6']?>);">
                        </div>
                    </div>
                </div>
        </div>
        <div class="col-md-3 text-center ">
                <div class="avatar-upload2">
                    <div id="nav0" class="avatar-edit">
                        <input name="membershipLevels_img7" type='file' id="imageUpload7" accept=".png, .jpg, .jpeg" />
                        <input type="hidden" value="<?php echo $editMembershipLevels[0]['advert7']; ?>" name="post_image_save7">

                        <label for="imageUpload7" style="margin-top: 10px"></label>
                    </div>
                    <div class="avatar-preview2" style="height: 172px">
                        <div id="imagePreview7" style="height: 170px; background-image: url(<?php echo SITE_URL.'/images/'.$editMembershipLevels[0]['advert7']?>);">
                        </div>
                    </div>
                </div>
        </div>
        <div class="col-md-3 text-center ">
                <div class="avatar-upload2">
                    <div id="nav0" class="avatar-edit">
                        <input name="membershipLevels_img8" type='file' id="imageUpload8" accept=".png, .jpg, .jpeg" />
                        <input type="hidden" value="<?php echo $editMembershipLevels[0]['advert8']; ?>" name="post_image_save8">

                        <label for="imageUpload8" style="margin-top: 10px"></label>
                    </div>
                    <div class="avatar-preview2" style="height: 172px">
                        <div id="imagePreview8" style="height: 170px; background-image: url(<?php echo SITE_URL.'/images/'.$editMembershipLevels[0]['advert8']?>);">
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-3 text-center ">

        </div>
        <div class="col-md-3 text-center ">
                <div class="avatar-upload2">
                    <div id="nav0" class="avatar-edit">
                        <input name="membershipLevels_img9" type='file' id="imageUpload9" accept=".png, .jpg, .jpeg" />
                        <input type="hidden" value="<?php echo $editMembershipLevels[0]['advert9']; ?>" name="post_image_save9">

                        <label for="imageUpload9" style="margin-top: 10px"></label>
                    </div>
                    <div class="avatar-preview2" style="height: 172px">
                        <div id="imagePreview9" style="height: 170px; background-image: url(<?php echo SITE_URL.'/images/'.$editMembershipLevels[0]['advert9']?>);">
                        </div>
                    </div>
                </div>
        </div>
        <div class="col-md-3 text-center ">
                <div class="avatar-upload2">
                    <div id="nav0" class="avatar-edit">
                        <input name="membershipLevels_img10" type='file' id="imageUpload10" accept=".png, .jpg, .jpeg" />
                        <input type="hidden" value="<?php echo $editMembershipLevels[0]['advert10']; ?>" name="post_image_save10">

                        <label for="imageUpload10" style="margin-top: 10px"></label>
                    </div>
                    <div class="avatar-preview2" style="height: 172px">
                        <div id="imagePreview10" style="height: 170px; background-image: url(<?php echo SITE_URL.'/images/'.$editMembershipLevels[0]['advert10']?>);">
                        </div>
                    </div>
                </div>
        </div>

        <div class="col-md-3 text-center ">
        </div>

    </div>
    <div class="mt-3"></div>

    <input style="float: right" type="submit" name="update" value="Update" class="btn btn-embossed btn-primary">
    </form>
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
    $("#imageUpload1").change(function() { readURL(this, 1);  });
    $("#imageUpload2").change(function() { readURL(this, 2);  });
    $("#imageUpload3").change(function() { readURL(this, 3);  });
    $("#imageUpload4").change(function() { readURL(this, 4);  });
    $("#imageUpload5").change(function() { readURL(this, 5);  });
    $("#imageUpload6").change(function() { readURL(this, 6);  });
    $("#imageUpload7").change(function() { readURL(this, 7);  });
    $("#imageUpload8").change(function() { readURL(this, 8);  });
    $("#imageUpload9").change(function() { readURL(this, 9);  });
    $("#imageUpload10").change(function() { readURL(this, 10);  });

</script>

