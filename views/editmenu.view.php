

    <link rel="stylesheet" href="../menulib/bootstrap-iconpicker/css/bootstrap-iconpicker.min.css">
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>-->
<!--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"/>-->


<div class="container">

    <div class="row" style="margin-top: 30px">
        <div class="col-md-8">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

                <div class=" mb-3 w-full" style="margin-top: 50px">
<!--                    <div class="card-header">-->
<!--                        <div class="card-header text-darker mt-1">Menu</div>-->
<!--                        <button type="button" id="btnReload" class="btn btn-success h-20" style="padding: 0 10px; margin-top: 5px">Load Data</button>-->
<!--                    </div>-->

                    <?php
                        $connect = connect($database);
                        $menu = get_menu($connect)[0]['content'];
                    ?>

                    <div class="card-body">
                        <ul id="myEditor" class="sortableLists list-group"></ul>
                    </div>
                </div>

<!--                <div class="w-full">-->
<!--                    <div class="card-header text-darker mt-1">JSON Output</div>-->
<!--                        <button id="btnOutput" type="button" class="btn btn-success h-20" style="padding: 0 10px; margin-top: 5px">Update</button>-->
<!--                    <div class="card-body">-->
                        <div class="form-group hidden" style="margin-top: 3px">
                            <textarea id="out" name="out" class="form-control" cols="50" rows="10" required></textarea>
                        </div>
<!--                    </div>-->
<!--                </div>-->

                <input type="submit" id="btnOutput" name="update" value="Update" class="btn btn-embossed btn-primary h-20" style="padding: 0 10px;">

            </form>

        </div>
        <div class="col-md-4">
            <div class="mt-1">
                <div class="card-header text-darker">Edit item</div>
                <div class="card-body mt-1" style="border: 1px skyblue solid; padding: 8px">
                    <form id="frmEdit" class="form-horizontal">
                        <div class="">
                            <label for="text" style="color: #0b7285; font-size: 12px; margin-bottom: -5px; margin-top: 5px">Text</label>
                            <input type="text" class="form-control item-menu h-20" name="text" id="text" placeholder="Text" style="padding: 6px">
                        </div>
                        <div class="">
                            <label for="href" style="color: #0b7285; font-size: 12px; margin-bottom: -5px; margin-top: 5px">URL</label>
                            <input type="text" class="form-control item-menu h-20" id="href" name="href" placeholder="URL" style="padding: 6px">
                        </div>
                        <div class="">
                            <label for="target" style="color: #0b7285; font-size: 12px; margin-bottom: -5px; margin-top: 5px">Target</label>
                            <select name="target" id="target" class="form-control item-menu h-20" style="padding: 6px">
                                <option value="_self">Self</option>
                                <option value="_blank">Blank</option>
                                <option value="_top">Top</option>
                            </select>
                        </div>
                        <div class="">
                            <label for="title" style="color: #0b7285; font-size: 12px; margin-bottom: -5px; margin-top: 5px">Tooltip</label>
                            <input type="text" name="title" class="form-control item-menu h-20" id="title" placeholder="Tooltip" style="padding: 6px">
                        </div>
                    </form>
                </div>
                <div class="card-footer mt-1">
                    <button type="button" id="btnUpdate" class="btn btn-primary h-20" style="padding: 0 10px;" disabled>Update</button>
                    <button type="button" id="btnAdd" class="btn btn-success h-20" style="padding: 0 10px;"> Add</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <?php require'sidebar.view.php'; ?>
                </div>
            </div>

        </div>

        <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
        <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="../menulib/jquery-menu-editor.min.js"></script>
        <script type="text/javascript" src="../menulib/bootstrap-iconpicker/js/iconset/fontawesome5-3-1.min.js"></script>
        <script type="text/javascript" src="../menulib/bootstrap-iconpicker/js/bootstrap-iconpicker.min.js"></script>
        <script>
            jQuery(document).ready(function () {
                /* =============== DEMO =============== */
                // menu items
                var arrayjson = <?php echo $menu?>;
                // icon picker options
                var iconPickerOptions = {searchText: "Buscar...", labelHeader: "{0}/{1}"};
                // sortable list options
                var sortableListOptions = {
                    placeholderCss: {'background-color': "#cccccc"}
                };

                var editor = new MenuEditor('myEditor', {listOptions: sortableListOptions, iconPicker: iconPickerOptions});
                editor.setForm($('#frmEdit'));
                editor.setUpdateButton($('#btnUpdate'));

                // $('#btnReload').on('click', function () {
                    editor.setData(arrayjson);
                // });

                var str = editor.getString();
                $("#out").text(str);

                $('#btnOutput').on('click', function () {
                    var str = editor.getString();
                    $("#out").text(str);
                });

                $("#btnUpdate").click(function(){
                    editor.update();
                });

                $('#btnAdd').click(function(){
                    editor.add();
                });
                /* ====================================== */

                /** PAGE ELEMENTS **/
                $('[data-toggle="tooltip"]').tooltip();
                $.getJSON( "https://api.github.com/repos/davicotico/jQuery-Menu-Editor", function( data ) {
                    $('#btnStars').html(data.stargazers_count);
                    $('#btnForks').html(data.forks_count);
                });
            });
        </script>