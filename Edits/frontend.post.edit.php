<div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
            <div class=" mt-1 mypunter-padding">
                <form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

                    <div class="row">
                        <div class="col-md-8">

                            <div class="mt-1"></div>

                            <div class="form-group" style="padding: 0px 10px 0px 0px;">
                                <div class="avatar-upload2">
                                    <div id="nav0" class="avatar-edit">
                                        <input name="result_img1" type='file' id="imageUpload1" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" value="<?php echo $editResults[0]['advert1']; ?>" name="post_image_save1">
                                        <label for="imageUpload1"></label>
                                    </div>
                                    <div class="avatar-preview2" style="height: 122px">
                                        <div id="imagePreview1" style="height: 120px; background-image: url(<?php echo SITE_URL.'/images/'.$editResults[0]['advert1']?>);">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group" style="padding: 0px 10px 0px 0px;">
                                <div class="avatar-upload2">
                                    <div id="nav0" class="avatar-edit">
                                        <input name="result_img2" type='file' id="imageUpload2" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" value="<?php echo $editResults[0]['advert2']; ?>" name="post_image_save2">
                                        <label for="imageUpload2"></label>
                                    </div>
                                    <div class="avatar-preview2" style="height: 122px">
                                        <div id="imagePreview2" style="height: 120px; background-image: url(<?php echo SITE_URL.'/images/'.$editResults[0]['advert2']?>);">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group" style="padding: 0px 10px 0px 0px;">
                                <div class="avatar-upload2">
                                    <div id="nav0" class="avatar-edit">
                                        <input name="result_img3" type='file' id="imageUpload3" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" value="<?php echo $editResults[0]['advert3']; ?>" name="post_image_save3">
                                        <label for="imageUpload3"></label>
                                    </div>
                                    <div class="avatar-preview2" style="height: 122px">
                                        <div id="imagePreview3" style="height: 120px; background-image: url(<?php echo SITE_URL.'/images/'.$editResults[0]['advert3']?>);">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group" style="padding: 0px 10px 0px 0px;">
                                <div class="avatar-upload2">
                                    <div id="nav0" class="avatar-edit">
                                        <input name="result_img4" type='file' id="imageUpload4" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" value="<?php echo $editResults[0]['advert4']; ?>" name="post_image_save4">
                                        <label for="imageUpload4"></label>
                                    </div>
                                    <div class="avatar-preview2" style="height: 122px">
                                        <div id="imagePreview4" style="height: 120px; background-image: url(<?php echo SITE_URL.'/images/'.$editResults[0]['advert4']?>);">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-1 mb-1" style="height: 200px; border: 1px solid #000; margin-right: 10px"></div>

                            <div class="form-group" style="padding: 0px 10px 0px 0px;">
                                <div class="avatar-upload2">
                                    <div id="nav0" class="avatar-edit">
                                        <input name="result_img5" type='file' id="imageUpload5" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" value="<?php echo $editResults[0]['advert5']; ?>" name="post_image_save5">
                                        <label for="imageUpload5"></label>
                                    </div>
                                    <div class="avatar-preview2" style="height: 122px">
                                        <div id="imagePreview5" style="height: 120px; background-image: url(<?php echo SITE_URL.'/images/'.$editResults[0]['advert5']?>);">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3"></div>
                            <span class="font-size-20  underline cursor cursor-hover" data-toggle="collapse" data-target="#demo">Detailed Selections Legend</span>

                            <div id="demo" class="collapse">
                                <div class="form-group" style="padding: 0px 10px 0px 0px;">
                                    <div class="avatar-upload2">
                                        <div id="nav0" class="avatar-edit">
                                            <input name="result_img6" type='file' id="imageUpload6" accept=".png, .jpg, .jpeg" />
                                            <input type="hidden" value="<?php echo $editResults[0]['advert6']; ?>" name="post_image_save6">
                                            <label for="imageUpload6"></label>
                                        </div>
                                        <div class="avatar-preview2" style="height: 422px">
                                            <div id="imagePreview6" style="height: 420px; background-image: url(<?php echo SITE_URL.'/images/'.$editResults[0]['advert6']?>);">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group" style="padding: 0px 10px 0px 0px;">
                                <div class="avatar-upload2">
                                    <div id="nav0" class="avatar-edit">
                                        <input name="result_img7" type='file' id="imageUpload7" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" value="<?php echo $editResults[0]['advert7']; ?>" name="post_image_save7">
                                        <label for="imageUpload7"></label>
                                    </div>
                                    <div class="avatar-preview2" style="height: 122px">
                                        <div id="imagePreview7" style="height: 120px; background-image: url(<?php echo SITE_URL.'/images/'.$editResults[0]['advert7']?>);">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group" style="padding: 0px 10px 0px 0px;">
                                <div class="avatar-upload2">
                                    <div id="nav0" class="avatar-edit">
                                        <input name="result_img8" type='file' id="imageUpload8" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" value="<?php echo $editResults[0]['advert8']; ?>" name="post_image_save8">
                                        <label for="imageUpload8"></label>
                                    </div>
                                    <div class="avatar-preview2" style="height: 122px">
                                        <div id="imagePreview8" style="height: 120px; background-image: url(<?php echo SITE_URL.'/images/'.$editResults[0]['advert8']?>);">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group" style="padding: 0px 10px 0px 0px;">
                                <div class="avatar-upload2">
                                    <div id="nav0" class="avatar-edit">
                                        <input name="result_img9" type='file' id="imageUpload9" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" value="<?php echo $editResults[0]['advert9']; ?>" name="post_image_save9">
                                        <label for="imageUpload9"></label>
                                    </div>
                                    <div class="avatar-preview2" style="height: 122px">
                                        <div id="imagePreview9" style="height: 120px; background-image: url(<?php echo SITE_URL.'/images/'.$editResults[0]['advert9']?>);">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3"></div>

                        </div>
                        <div class="col-md-4 text-center p-3 pt-0">
                            <div class="mt-1"></div>
                            <div class="line"></div>

                            <div class="form-group" style="padding: 0px 10px 0px 0px;">
                                <div class="avatar-upload2">
                                    <div id="nav0" class="avatar-edit">
                                        <input name="result_img10" type='file' id="imageUpload10" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" value="<?php echo $editResults[0]['advert10']; ?>" name="post_image_save10">
                                        <label for="imageUpload10"></label>
                                    </div>
                                    <div class="avatar-preview2" style="height: 222px">
                                        <div id="imagePreview10" style="height: 220px; background-image: url(<?php echo SITE_URL.'/images/'.$editResults[0]['advert10']?>);">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="line"></div>

                            <div class="form-group" style="padding: 0px 10px 0px 0px;">
                                <div class="avatar-upload2">
                                    <div id="nav0" class="avatar-edit">
                                        <input name="result_img11" type='file' id="imageUpload11" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" value="<?php echo $editResults[0]['advert11']; ?>" name="post_image_save11">
                                        <label for="imageUpload11"></label>
                                    </div>
                                    <div class="avatar-preview2" style="height: 222px">
                                        <div id="imagePreview11" style="height: 220px; background-image: url(<?php echo SITE_URL.'/images/'.$editResults[0]['advert11']?>);">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="line"></div>

                            <div class="form-group" style="padding: 0px 10px 0px 0px;">
                                <div class="avatar-upload2">
                                    <div id="nav0" class="avatar-edit">
                                        <input name="result_img12" type='file' id="imageUpload12" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" value="<?php echo $editResults[0]['advert12']; ?>" name="post_image_save12">
                                        <label for="imageUpload12"></label>
                                    </div>
                                    <div class="avatar-preview2" style="height: 222px">
                                        <div id="imagePreview12" style="height: 220px; background-image: url(<?php echo SITE_URL.'/images/'.$editResults[0]['advert12']?>);">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="line"></div>

                            <div class="form-group" style="padding: 0px 10px 0px 0px;">
                                <div class="avatar-upload2">
                                    <div id="nav0" class="avatar-edit">
                                        <input name="result_img13" type='file' id="imageUpload13" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" value="<?php echo $editResults[0]['advert13']; ?>" name="post_image_save13">
                                        <label for="imageUpload13"></label>
                                    </div>
                                    <div class="avatar-preview2" style="height: 222px">
                                        <div id="imagePreview13" style="height: 220px; background-image: url(<?php echo SITE_URL.'/images/'.$editResults[0]['advert13']?>);">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="line"></div>
                        </div>
                    </div>

                    <input type="submit" name="update" value="Update" class="btn btn-embossed btn-primary">

                </form>
            </div>
        </div>
        <div class="col-md-2 page-sidebar mt-4">
            <?php require'../views/sidebar.view.php'; ?>
        </div>
    </div>
</div>


<script src="../otherlib/js/jquery.min.js"></script>
<script src="../otherlib/js/bootstrap.min.js"></script>

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
    $("#imageUpload11").change(function() { readURL(this, 11);  });
    $("#imageUpload12").change(function() { readURL(this, 12);  });
    $("#imageUpload13").change(function() { readURL(this, 13);  });

</script>
