<div class="container-fluid">
    <div class="row">
        <div class="col-md-10" style="margin-bottom: 30px">
            <form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

                <div class="mypunter-padding">

                    <div class="row">

                        <div class="col-md-8">

                            <div class="form-group" style="padding: 0px 10px 0px 0px;">
                                <div class="avatar-upload2">
                                    <div id="nav0" class="avatar-edit">
                                        <input name="sponsor_img0" type='file' id="imageUpload0" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" value="<?php echo $editSponors[0]['image1']; ?>" name="post_image_save0">

                                        <label for="imageUpload0"></label>
                                    </div>
                                    <div class="avatar-preview2" >
                                        <div id="imagePreview0" style="background-image: url(<?php echo SITE_URL.'/images/'.$editSponors[0]['image1']?>);">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="line"></div>

                            <div class="form-group" style="padding: 0px 10px 0px 0px;">
                                <div class="avatar-upload2">
                                    <div id="nav0" class="avatar-edit">
                                        <input name="sponsor_img1" type='file' id="imageUpload1" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" value="<?php echo $editSponors[0]['image2']; ?>" name="post_image_save1">

                                        <label for="imageUpload1"></label>
                                    </div>
                                    <div class="avatar-preview2" >
                                        <div id="imagePreview1" style="background-image: url(<?php echo SITE_URL.'/images/'.$editSponors[0]['image2']?>);">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="form-group" style="padding: 0px 10px 0px 0px;">
                                <div class="avatar-upload2">
                                    <div id="nav0" class="avatar-edit">
                                        <input name="sponsor_img2" type='file' id="imageUpload2" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" value="<?php echo $editSponors[0]['image3']; ?>" name="post_image_save2">

                                        <label for="imageUpload2"></label>
                                    </div>
                                    <div class="avatar-preview2" >
                                        <div id="imagePreview2" style="background-image: url(<?php echo SITE_URL.'/images/'.$editSponors[0]['image3']?>);">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="line"></div>

                            <div class="form-group" style="padding: 0px 10px 0px 0px;">
                                <div class="avatar-upload2">
                                    <div id="nav0" class="avatar-edit">
                                        <input name="sponsor_img3" type='file' id="imageUpload3" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" value="<?php echo $editSponors[0]['image4']; ?>" name="post_image_save3">

                                        <label for="imageUpload3"></label>
                                    </div>
                                    <div class="avatar-preview2" >
                                        <div id="imagePreview3" style="background-image: url(<?php echo SITE_URL.'/images/'.$editSponors[0]['image4']?>);">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 text-center p-3 pt-0">

                            <div class="form-group" style="padding: 0px 10px 0px 0px;">
                                <div class="avatar-upload2">
                                    <div id="nav0" class="avatar-edit">
                                        <input name="sponsor_img4" type='file' id="imageUpload4" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" value="<?php echo $editSponors[0]['advert1']; ?>" name="post_image_save4">

                                        <label for="imageUpload4"></label>
                                    </div>
                                    <div class="avatar-preview2" style="height: 214px;">
                                        <div id="imagePreview4" style="height: 210px; background-image: url(<?php echo SITE_URL.'/images/'.$editSponors[0]['advert1']?>);">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="line"></div>
                            <div class="form-group" style="padding: 0px 10px 0px 0px;">
                                <div class="avatar-upload2">
                                    <div id="nav0" class="avatar-edit">
                                        <input name="sponsor_img5" type='file' id="imageUpload5" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" value="<?php echo $editSponors[0]['advert2']; ?>" name="post_image_save5">

                                        <label for="imageUpload5"></label>
                                    </div>
                                    <div class="avatar-preview2" style="height: 214px;">
                                        <div id="imagePreview5" style="height: 210px; background-image: url(<?php echo SITE_URL.'/images/'.$editSponors[0]['advert2']?>);">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="line "></div>

                            <div class="form-group" style="padding: 0px 10px 0px 0px;">
                                <div class="avatar-upload2">
                                    <div id="nav0" class="avatar-edit">
                                        <input name="sponsor_img6" type='file' id="imageUpload6" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" value="<?php echo $editSponors[0]['advert3']; ?>" name="post_image_save6">

                                        <label for="imageUpload6"></label>
                                    </div>
                                    <div class="avatar-preview2" style="height: 214px;">
                                        <div id="imagePreview6" style="height: 210px; background-image: url(<?php echo SITE_URL.'/images/'.$editSponors[0]['advert3']?>);">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="line "></div>

                            <div class="form-group" style="padding: 0px 10px 0px 0px;">
                                <div class="avatar-upload2">
                                    <div id="nav0" class="avatar-edit">
                                        <input name="sponsor_img7" type='file' id="imageUpload7" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" value="<?php echo $editSponors[0]['advert4']; ?>" name="post_image_save7">

                                        <label for="imageUpload7"></label>
                                    </div>
                                    <div class="avatar-preview2" style="height: 214px;">
                                        <div id="imagePreview7" style="height: 210px; background-image: url(<?php echo SITE_URL.'/images/'.$editSponors[0]['advert4']?>);">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="line"></div>

                        </div>

                    </div>

                </div>

            <input type="submit" style="float: right" name="update" value="Update" class="btn btn-embossed btn-primary">

        </div>
        </form>

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
    $("#imageUpload1").change(function() { readURL(this, 1);  });
    $("#imageUpload2").change(function() { readURL(this, 2);  });
    $("#imageUpload3").change(function() { readURL(this, 3);  });
    $("#imageUpload4").change(function() { readURL(this, 4);  });
    $("#imageUpload5").change(function() { readURL(this, 5);  });
    $("#imageUpload6").change(function() { readURL(this, 6);  });
    $("#imageUpload7").change(function() { readURL(this, 7);  });

</script>
