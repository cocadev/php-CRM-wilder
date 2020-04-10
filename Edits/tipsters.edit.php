<div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
            <form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

            <div class=" mt-2 mypunter-padding">
                <span class="font-size-20">Our Tipsters</span>
                <div class="row">
                    <div class="col-md-3 ">
                        <div class="form-group" style="padding: 0px 10px 0px 0px;">
                            <div class="avatar-upload">
                                <div id="nav0" class="avatar-edit">
                                    <input name="tipster_img0" type='file' id="imageUpload0" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" value="<?php echo $editTipsters[0]['image1']; ?>" name="post_image_save0">

                                    <label for="imageUpload0"></label>
                                </div>
                                <div class="avatar-preview">
                                    <div id="imagePreview0" style="background-image: url(<?php echo SITE_URL.'/images/'.$editTipsters[0]['image1']?>);">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 pl-3" style="position: relative">
                        <span class="font-size-20">MyPunter</span>
                        <br/>
                        <div class="mt-1"></div>
                        <span>A friend of the punter, a foe of the bookie. The owner of MyPunter.com, Paul, has been a professional punter for over 30 years now, he specialises in Sydney, Melbourne and Perth races. Paul created a platform that has enabled people to get involved in racing, in an unprecedented way. /n/n/n Implementing a self-written program predictor that rates horses, along with a betting calculator application to use in conjunction with his program. The ultimate punter’s pal, he’s created the best membership in racing, at an affordable price. </span>
                        <br/>
                    </div>
                </div>

                <div class="mt-1"></div>
                <div class="row">
                    <div class="col-md-9  tip-padding">
                        <span class="font-size-20">Trackside</span>
                        <div class="mt-1"></div>
                        <span>Specialising in Melbourne and South Australian races, Trackside Trav has been associated with MyPunter.com since it was established. After 25 years as a punter, Travis has become a refined form analyst with a broad knowledge of Australian horse racing. </span>
                        <br/>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group" style="padding: 0px 10px 0px 0px;">
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input name="tipster_img1" type='file' id="imageUpload1" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" value="<?php echo $editTipsters[0]['image2']; ?>" name="post_image_save1">

                                    <label for="imageUpload1"></label>
                                </div>
                                <div class="avatar-preview">
                                    <div id="imagePreview1" style="background-image: url(<?php echo SITE_URL.'/images/'.$editTipsters[0]['image2']?>);">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="mt-1"></div>
                <div class="row">
                    <div class="col-md-3 ">
                        <div class="form-group" style="padding: 0px 10px 0px 0px;">
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input name="tipster_img2" type='file' id="imageUpload2" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" value="<?php echo $editTipsters[0]['image3']; ?>" name="post_image_save2">

                                    <label for="imageUpload2"></label>
                                </div>
                                <div class="avatar-preview">
                                    <div id="imagePreview2" style="background-image: url(<?php echo SITE_URL.'/images/'.$editTipsters[0]['image3']?>);">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9  tip-padding pl-3">
                        <span class="font-size-20">Show Pony </span>
                        <br/>
                        <div class="mt-1"></div>
                        <span>Allana was introduced to the world of horse racing almost 10 years ago and was instantly hooked. Not with just studying the race fields but also being drawn in by the atmosphere, the social side and the fashion. Describing doing the form as a bit like piecing together a jigsaw, Allana uses a combination of factors to choose her selections, often with solid results. </span>

                        <br/>
                    </div>
                </div>

                <div class="mt-1"></div>
                <div class="row">
                    <div class="col-md-9  tip-padding">
                        <span class="font-size-20">Behind The Barrier</span>
                        <div class="mt-1"></div>
                        <span>Tim is a horse racing enthusiast who is apart of the racing media, sports media and the comity of Mornington Race Club. Tim joined the MyPunter team 3 years ago and specialises in both Melbourne and Sydney race meetings, with a tremendous strike rate. He has also written for numerous popular racing sources and has a great insight of the Victorian racing landscape. </span>

                        <br/>
                    </div>
                    <div class="col-md-3 ">

                        <div class="form-group" style="padding: 0px 10px 0px 0px;">
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input name="tipster_img3" type='file' id="imageUpload3" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" value="<?php echo $editTipsters[0]['image4']; ?>" name="post_image_save3">

                                    <label for="imageUpload3"></label>
                                </div>
                                <div class="avatar-preview">
                                    <div id="imagePreview3" style="background-image: url(<?php echo SITE_URL.'/images/'.$editTipsters[0]['image4']?>);">
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


                <div class="mt-1"></div>
                <div class="row">
                    <div class="col-md-3  ">
                        <div class="form-group" style="padding: 0px 10px 0px 0px;">
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input name="tipster_img4" type='file' id="imageUpload4" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" value="<?php echo $editTipsters[0]['image5']; ?>" name="post_image_save4">

                                    <label for="imageUpload4"></label>
                                </div>
                                <div class="avatar-preview">
                                    <div id="imagePreview4" style="background-image: url(<?php echo SITE_URL.'/images/'.$editTipsters[0]['image5']?>);">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9  tip-padding pl-3">
                        <span class="font-size-20">Sharky </span>
                        <br/>
                        <div class="mt-1"></div>
                        <span>A punter taught by punters. Mark specialises in Victorian, Queensland and Western Australia races. Proven results for great Long shot odds that form can’t predict based on a huge repertoire of knowledge for each runner. </span>

                        <br/>
                    </div>
                </div>

                <div class="mt-1"></div>
                <div class="row">
                    <div class="col-md-9  tip-padding">
                        <span class="font-size-20">Wild Cat</span>
                        <div class="mt-1"></div>
                        <span>A form analyst specialising in Victorian and Western Australian races. Josh has been a part of the MyPunter team for 3 years and has maintained a strong strike rate. An avid sports fan, a competitive punter and a quiet achiever. </span>

                        <br/>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group" style="padding: 0px 10px 0px 0px;">
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input name="tipster_img5" type='file' id="imageUpload5" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" value="<?php echo $editTipsters[0]['image6']; ?>" name="post_image_save5">

                                    <label for="imageUpload5"></label>
                                </div>
                                <div class="avatar-preview">
                                    <div id="imagePreview5" style="background-image: url(<?php echo SITE_URL.'/images/'.$editTipsters[0]['image6']?>);">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="mt-1"></div>
                <div class="row">
                    <div class="col-md-3 ">
                        <div class="form-group" style="padding: 0px 10px 0px 0px;">
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input name="tipster_img6" type='file' id="imageUpload6" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" value="<?php echo $editTipsters[0]['image7']; ?>" name="post_image_save6">

                                    <label for="imageUpload6"></label>
                                </div>
                                <div class="avatar-preview">
                                    <div id="imagePreview6" style="background-image: url(<?php echo SITE_URL.'/images/'.$editTipsters[0]['image7']?>);">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9  tip-padding pl-3">
                        <span class="font-size-20">Jackot Jay </span>
                        <br/>
                        <div class="mt-1"></div>
                        <span>Jason is a form analyst based in South Australia who has a fantastic understanding of the Adelaide runners. Jason is a huge racing fan which is shown through he’s consistency of picking winners. He thrives in gaining as much insight of the runners as possible to provide the punters winning tips. </span>

                        <br/>
                    </div>
                </div>

                <div class="mt-1"></div>
                <div class="row">
                    <div class="col-md-9  tip-padding">
                        <span class="font-size-20">The Hammer</span>
                        <div class="mt-1"></div>
                        <span>Specialising in Melbourne and Queensland racing, Ben has become a successful form analyst. Ben has been a part of the MyPunter for 2 years now and continues to pick winners through both metro and city meetings. </span>

                        <br/>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group" style="padding: 0px 10px 0px 0px;">
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input name="tipster_img7" type='file' id="imageUpload7" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" value="<?php echo $editTipsters[0]['image8']; ?>" name="post_image_save7">

                                    <label for="imageUpload7"></label>
                                </div>
                                <div class="avatar-preview">
                                    <div id="imagePreview7" style="background-image: url(<?php echo SITE_URL.'/images/'.$editTipsters[0]['image8']?>);">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <input style="float: right" type="submit" name="update" value="Update" class="btn btn-embossed btn-primary">

                </div>

                <div class="mt-2"></div>

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
    $("#imageUpload1").change(function() { readURL(this, 1);  });
    $("#imageUpload2").change(function() { readURL(this, 2);  });
    $("#imageUpload3").change(function() { readURL(this, 3);  });
    $("#imageUpload4").change(function() { readURL(this, 4);  });
    $("#imageUpload5").change(function() { readURL(this, 5);  });
    $("#imageUpload6").change(function() { readURL(this, 6);  });
    $("#imageUpload7").change(function() { readURL(this, 7);  });

</script>

