
<aside id="colorlib-hero" class="mt-m-1">
        <div
             class="slider-text-inner text-center pt-half pt-2"
             style="background: url(../files/img_bg_2.jpg) no-repeat center center; background-size: cover;"
        >
            <img src="<?php echo SITE_URL.'/images/'.$editHome[0]['main_img'] ?>" class="nopadding" />
        </div>

</aside>

<div class="container-fluid" style="margin-top: 15px;">

    <div class="row" id="page">
        <div class="col-md-12">

            <div class="container mypunter-padding">

                <iframe class="mt-2 " width="100%" height="140" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https://soundcloud.com/user-407067802/join-mypuntercom"></iframe>

                <div class="bg-darker h-20 pt-04 pl-03 mt-2 ">
                    <span class="text-white font-size-13 font-weight">RACE DAY ACCESS</span>
                </div>

                <br />

                <div class="bg-danger mt-1 ">
                    <img src='<?php echo SITE_URL.'/images/'.$editHome[0]['advert0'] ?>' class="img-responsive w-full " />
                </div>

                <div class="bg-darker pb-01 pt-04 pl-03 mt-2 ">
                    <span class="text-white font-weight font-size-13">PRESENT YOUR MYPUNTER MEMBERSHIP CARD TO GAIN GENERAL ADMISSION ACCESS TO:</span>
                </div>

                <div class="row mt-1">
                    <div class="col-md-3 text-center pt-1 pb-1 ">
                        <a href="https://mrc.racing.com/" target="_blank">
                            <img src='<?php echo SITE_URL.'/images/'.$editHome[0]['advert1'] ?>' />
                        </a>
                    </div>
                    <div class="col-md-3 text-center pt-1 pb-1 ">
                        <a href="https://www.thevalley.com.au/" target="_blank">
                            <img src='<?php echo SITE_URL.'/images/'.$editHome[0]['advert2'] ?>' />
                        </a>
                    </div>
                    <div class="col-md-3 text-center pt-1 pb-1 ">
                        <a href="https://www.morphettville.com.au/ " target="_blank">
                            <img src='<?php echo SITE_URL.'/images/'.$editHome[0]['advert3'] ?>' />
                        </a>
                    </div>
                    <div class="col-md-3 text-center pt-1 pb-1 ">
                        <a href="https://www.countryracing.com.au/bendigo-jockey-racing-club/" target="_blank">
                            <img src='<?php echo SITE_URL.'/images/'.$editHome[0]['advert4'] ?>' />
                        </a>
                    </div>
                </div>

                <br />
                <div class="row">
                    <div class="col-md-3 text-center pt-1 pb-1 ">
                        <a href="https://mrc.racing.com/" target="_blank">
                            <img src='<?php echo SITE_URL.'/images/'.$editHome[0]['advert5'] ?>' />
                        </a>
                    </div>
                    <div class="col-md-3 text-center pt-1 pb-1 ">
                        <a href="https://country.racing.com/cranbourne/" target="_blank">
                            <img src='<?php echo SITE_URL.'/images/'.$editHome[0]['advert6'] ?>' />
                        </a>
                    </div>
                    <div class="col-md-3 text-center pt-1 pb-1 ">
                        <a href="https://mrc.racing.com/" target="_blank">
                            <img src='<?php echo SITE_URL.'/images/'.$editHome[0]['advert7'] ?>' />
                        </a>
                    </div>
                    <div class="col-md-3 text-center pt-1 pb-1 ">
                        <a href="https://mrc.racing.com/" target="_blank">
                            <img src='<?php echo SITE_URL.'/images/'.$editHome[0]['advert8'] ?>' />
                        </a>
                    </div>
                </div>

                <div class="bg-darker h-20 pt-04 pl-03 mt-2 ">
                    <span class="text-white font-weight font-size-13">LATEST NEWS</span>
                </div>

                <?php
                    $json = file_get_contents(NEWS_API);
                    $data = json_decode($json, TRUE);
                    $results = $data['articles'];
                ?>

                <div class="row mt-1">

                    <div class="col-md-6 col-sm-12 mt-1 ">
                        <span class="font-size-20 ">SPORTS NEWS</span>
                        <div class="mt-1"></div>
<!--                        <ul id="dataList" class="m-0 p-0"></ul>-->

                        <?php foreach (array_slice($results, 0, 6) as $result) :
                            if (!$result['urlToImage']) {
                                continue;
                            }

                            ?>

                            <div id="listItem" >
                                <div style="border: 1px #dfdfdf solid; border-radius: 1px; padding: 5px;">
                                    <span class="underline text-darker cursor cursor-hover font-size-13 amount" style="margin-left: 5px"><?php echo $result['title'] ?></span>
                                    <div class="mt-05"></div>
                                    <span class="font-size-13 publishedAt" style="margin-left: 5px"><?php echo str_replace("T", " ", ( str_replace(":00Z","", $result['publishedAt'])) ) ?></span>
                                    <br />
                                    <div class="row">
                                        <div class="col-md-3 pt-03" style="margin-left: 5px">
                                            <img src='<?php echo $result['urlToImage'] ?>' class="ad-img urlToImage" />
                                            <span class="urlToImage"></span>
                                        </div>
                                        <div class="col-md-8 pt-1" style="margin-left: -20px">
                                            <span class="description amount"><?php echo $result['description'] ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; ?>


                    </div>

                    <div class="col-md-6 col-sm-12 text-center ">
                        <div class="auto-scrolling">
                            <a class="twitter-timeline" href="https://twitter.com/MyPunter?ref_src=twsrc%5Etfw">
                                Tweets by MyPunter
                            </a>
                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-4">
                                <a href="https://record.beteasyaffiliates.com.au/_aBW4sAU0dLCffFZ4XqMU7UKnamL0Tv_h/1/" target="_new">
                                    <img src='<?php echo SITE_URL.'/images/'.$editHome[0]['advert9'] ?>' class="w-full" />
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://bit.ly/mypunter" target="_blank">
                                    <img src='<?php echo SITE_URL.'/images/'.$editHome[0]['advert10'] ?>' class="w-full" />
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://bit.ly/2IGqvoT" target="_blank">
                                    <img src='<?php echo SITE_URL.'/images/'.$editHome[0]['advert11'] ?>' class="w-full" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-darker h-20 pt-04 pl-03 mt-2 ">
                    <span class="text-white font-weight font-size-13">SYNDICATORS & PARTNERS</span>
                </div>

                <br />
                <div class="row mt-1">
                    <div class="col-md-3 text-center ">
                        <a href="https://bit.ly/mypunter" target="_blank">
                            <img src='<?php echo SITE_URL.'/images/'.$editHome[0]['advert12'] ?>' />
                        </a>
                    </div>
                    <div class="col-md-3 text-center ">
                        <a href="https://www.dreamthoroughbreds.com.au/" target="_blank">
                            <img src='<?php echo SITE_URL.'/images/'.$editHome[0]['advert13'] ?>' class="w-full" />
                        </a>
                    </div>
                    <div class="col-md-3 text-center ">
                        <a href="https://bit.ly/2IGqvoT" target="_blank">
                            <img src='<?php echo SITE_URL.'/images/'.$editHome[0]['advert14'] ?>' />
                        </a>
                    </div>
                    <div class="col-md-3 text-center ">
                        <a href="https://njt.org.au/" target="_blank">
                            <img src='<?php echo SITE_URL.'/images/'.$editHome[0]['advert15'] ?>' />
                        </a>
                    </div>
                </div>

                <div class="bg-danger mt-2 ">
                    <a href="https://www.desertsoftware.com.au/" target="_blank">
                        <img src='<?php echo SITE_URL.'/images/'.$editHome[0]['advert16'] ?>' class="img-responsive w-full " />
                    </a>
                </div>

                <div class="bg-darker h-20 pt-04 pl-03 mt-2 ">
                    <span class="text-white font-weight font-size-13">BETTING PARTNERS</span>
                </div>

                <br />
                <div class="row mt-1">
                    <div class="col-md-3 text-center ">
                        <a href="https://record.nedsaffiliates.com.au/_vP4xBj6qRfXBkgpoV0de5vvYbtBCuHm7/1/" target="_new">
                            <img src='<?php echo SITE_URL.'/images/'.$editHome[0]['advert17'] ?>' class="w-full" />
                        </a>
                    </div>
                    <div class="col-md-3 text-center ">
                        <a href="https://record.beteasyaffiliates.com.au/_aBW4sAU0dLCffFZ4XqMU7UKnamL0Tv_h/1/">
                            <img src='<?php echo SITE_URL.'/images/'.$editHome[0]['advert18'] ?>' class="w-full" />
                        </a>
                    </div>
                    <div class="col-md-3 text-center ">
                        <a href="https://www.ladbrokes.com.au/?a=531743&b=356">
                            <img src='<?php echo SITE_URL.'/images/'.$editHome[0]['advert19'] ?>' class="w-full" />
                        </a>
                    </div>
                    <div class="col-md-3 text-center ">
                        <a href="https://record.beteasyaffiliates.com.au/_aBW4sAU0dLCo5N1a6k_gki6Si_NPA7FM/1/" target="_new">
                            <img src='<?php echo SITE_URL.'/images/'.$editHome[0]['advert20'] ?>' class="w-full" />
                        </a>
                    </div>
                </div>

                <div class="text-center mt-3 mb-10 pt-08 ">
                <span class="sm-text font-size-13">
                    MyPunter is committed to promoting responsible gambling, see
                    <a href="#" class="underline text-blue cursor cursor-hover">Responsible Gambling</a> for more information.
                </span>
                </div>
            </div>

        </div>
    </div>
</div>



