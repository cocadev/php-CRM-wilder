<div class="container-fluid" style="margin-top: 25px;">
    <div class="row">
        <div class="col-md-10">

            <h3 style="float: left; color: #0b0b0b" href="../controller/new_user.php">
                Users
            </h3><br/>

            <div style="clear: both">
                <p> <span class="text-blue" style="cursor: pointer"> All </span> (<?php echo $total_users?>) | <span style="cursor: pointer" class="text-blue"> Administrator </span> (<?php echo $total_administrators?>) | <span class="text-blue" style="cursor: pointer"> Contributor </span> (<?php echo $total_contributors?>) | <span class="text-blue" style="cursor: pointer"> Subscriber </span> (<?php echo $total_subscribers?>)
            </div>

            <form method='post' action='../admin/download.php'>

                <input class="btn btn-info" type='submit' value='Export' name='Export' style="float: right; margin-right: 10px">

                <?php
                $user_arr[] =array();
                foreach ($users as $user):
                    $username = $user['username'];
                    $realname = $user['firstname'].' '.$user['lastname'];
                    $email = $user['email'];
                    $role = $user['role'];
                    $level = $user['level'];
                    $posts = $user['posts'];
                    $user_arr[] = array($username, $realname, $email, $role, $level, $posts);
                endforeach;

                $serialize_user_arr = serialize($user_arr);

                ?>
                <textarea name='export_data' style='display: none;'><?php echo $serialize_user_arr; ?></textarea>

            </form>

            <a class="btn btn-primary" style="float: right; margin-right: 15px; color: #fff" href="../controller/new_user.php">
                New
            </a>

            <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="inline" style="display: inline-block; margin-top: 10px ">
                    <input style="width: 200px; padding-left: 5px" name="search" id="search" placeholder="Search users ..." value="<?php echo $searchKey;?>">
                    <input type="submit" >

                    <select name="limit" style="height: 29px; margin-left: 100px" onchange='this.form.submit()'>
                        <option <?php if($limit == 5) echo "selected=\"selected\""; ?> value="5"> 5 </option>
                        <option <?php if($limit == 10) echo "selected=\"selected\""; ?> value="10"> 10 </option>
                        <option <?php if($limit == 25) echo "selected=\"selected\""; ?> value="25"> 25 </option>
                        <option <?php if($limit == 50) echo "selected=\"selected\""; ?> value="50"> 50 </option>
                        <option <?php if($limit == 100) echo "selected=\"selected\""; ?> value="100"> 100 </option>
                        <option <?php if($limit == 500) echo "selected=\"selected\""; ?> value="500"> 500 </option>
                    </select>

                </div>

            <script type="text/javascript">
                $(document).ready( function () {
                    $('#table_id').DataTable();
                } );
            </script>
            <style type="text/css">
                label{font-size: 13px;}
                th{border-bottom-width: 1px !important;}
            </style>


            <div class="panel-body" style="padding: 1px 10px 1px 1px;font-size: 13px;">
                <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%" style="border-radius: 5px; margin-top: 20px">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Username</th>
                        <th>Real Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Membership Level</th>
                        <th>Posts</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Image</th>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Membership Level</th>
                        <th>Posts</th>
                        <th>Actions</th>
                    </tr>
                    </tfoot>

                    <tbody>

                    <?php foreach($users as $user): ?>
                        <tr>
                            <td width="40px" align="center">
                                <?php

                                $img1= "../images/".$user['post_image'];
                                $img2= "https://static.thenounproject.com/png/17241-200.png";

                                if((substr($user['post_image'], -1)) === '.') {
                                    echo '<img style="width: 40px; height: 40px; padding: 2px;" src="'.$img2.'">';

                                }else{
                                    echo '<img style="width: 40px; height: 40px; padding: 2px;" src="' . $img1.'">';
                                }
                                ?>

                            </td>
                            <td><div style="color:#000"><?php echo $user['username']; ?></div></td>
                            <td><div style="color:#000"><?php echo $user['firstname'].' '.$user['lastname']; ?></div></td>
                            <td><div style="color:#000"><?php echo $user['email']; ?></div></td>
                            <td><div style="color:#000"><?php echo $user['role']; ?></div></td>
                            <td><div style="color:#000"><?php echo $user['level']; ?></div></td>
                            <td><div style="color:#000"><?php echo $user['posts']; ?></div></td>
                            <td>
                                <a href="../controller/edit_user.php?id=<?php echo $user['id']; ?>" style="font-size: 14px;color: #000000;"><i class="fa fa-cog"></i></a>
                                <a onclick="alertdelete_<?php echo $user['id']; ?>();" style="cursor: pointer;font-size: 14px;color: #000000;"><i class="fa fa-trash-o"></i></a>
                                <script type="text/javascript">
                                    function alertdelete_<?php echo $user['id']; ?>() {
                                        swal({ title: "Are you sure?", text: "You will not be able to recover this item!", type: "warning",cancelButtonClass: "btn-default btn-sm", showCancelButton: true, confirmButtonClass: "btn-danger btn-sm", confirmButtonText: "Yes, delete it!", closeOnConfirm: false }, function(){
                                            window.location.href = "<?php echo SITE_URL ?>/controller/delete_user.php?id=<?php echo $user['id']; ?>";
                                        });
                                    }
                                </script>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                    </tbody>
                </table>

            </div>
            <center>
                <ul class="pagination" >
                <?php

                $limit_count = $limit;

                $total_pages = ceil($total_users_search / $limit_count);
                $k = (($pn+$limit_count-1>$total_pages)?$total_pages-$limit_count+1:(($pn-$limit_count+1<1)?$limit_count:$pn));
//                $k = (($pn+4>$total_pages)?$total_pages-4:(($pn-4<1)?5:$pn));

                $pagLink = "";

                if($pn>=2){
                    $num_page = $pn-1;
                    echo "<li><button type='submit' name='page' value='1' class='btn  btn-inverse'> << </button></li>";
                    echo "<li><button type='submit' name='page' value='$num_page' class='btn  btn-inverse'> < </button></li>";
                }
                for ($i=-$limit_count+1; $i<=$limit_count-1; $i++) {
                    $num_page = $k+$i;
                    if($num_page>0){
                        if($num_page==$pn)
                            $pagLink .= "<li class='active'><input class='btn btn-social-pinterest' type='submit' name='page' value='$num_page' ></li>";
                        else
                            $pagLink .= "<li><input class='btn btn-inverse' type='submit' name='page' value='$num_page'></li>";
                    }
                };
                echo $pagLink;
                if($pn<$total_pages){
                    $num_page = $pn+1;
                    echo "<li><button  type='submit' name='page' value='$num_page' class='btn btn-inverse'> > </button></li>";
                    echo "<li><button  type='submit' name='page' value='$total_pages' class='btn btn-inverse'> >> </button></li>";
                }
                ?>
                </ul>

            </center>
            </form>


        </div>
        <div class="col-md-2">
            <?php require'sidebar.view.php'; ?>
        </div>
    </div>
</div>

<!-- /Notification services -->

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
<script src="js/hullabaloo.js"></script>
<script type="text/javascript">
    var hulla = new hullabaloo();

    window.location.search === '?del=success' && hulla.send("Deleted Success!", "success");
    window.location.search === '?add=success' && hulla.send("Add     Success!", "success");
    window.location.search === '?update=success' && hulla.send("Updated Success!", "success");
    window.location.search === '?update=fail' && hulla.send("User existed!", "danger");

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

<!-- /Notification services -->
