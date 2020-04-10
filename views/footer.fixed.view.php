</div></div>


<footer id="colorlib-footer" style="position: fixed; bottom: 0; width: 100%">
    <div class="copy">
        <div style="height: 120px">
            <div class="col-md-12 text-center">
                <div class="mt-12"></div>
                <span class="font-size-13 text-b9b9b9">Copyright © 2020 Designed by Unafraid Media</span>
                <br>
                <div class="mt-27">
                    <img src='https://www.counter12.com/img-3ZD1Zbz8W8DZ4abc-8.gif' style="width: 60px" border='0' alt='free web counter'>
                </div>
            </div>
    </div>
    </div>
</footer>


<script src="../js/lightbox.js"></script>
<script src="../js/chosen.jquery.js" type="text/javascript"></script>
<script src="../js/ImageSelect.jquery.js" type="text/javascript"></script>
<script type="text/javascript">
    $(".my-select").chosen({width:"100%"});
</script>

<script src="../js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="../js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="../js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="../js/jquery.waypoints.min.js"></script>
<!-- Stellar Parallax -->
<script src="../js/jquery.stellar.min.js"></script>
<!-- Flexslider -->
<script src="../js/jquery.flexslider-min.js"></script>
<!-- Owl carousel -->
<script src="../js/owl.carousel.min.js"></script>
<!-- Magnific Popup -->
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/magnific-popup-options.js"></script>
<!-- Counters -->
<script src="../js/jquery.countTo.js"></script>
<!-- Main -->
<script src="../js/main.js"></script>
<script src="../js/date.js"></script>
<script src="../js/menu.js"></script>
<script type="text/javascript">

    $.getJSON('https://newsapi.org/v2/top-headlines?country=au&category=sports&apiKey=08b6140e8db04919a08e0f5b66f173d6', function (data) {

        var dataObject = data.articles

        // console.log(dataObject)
        var listItemString = $('#listItem').html();

        dataObject.forEach(buildNewList);
        var BreakException = {};

        function buildNewList(item, index) {

            if(index > 5){
                throw BreakException;
            }

            var listItem = $('<li class="list-group-item">' + listItemString + '</li>');

            var listItemTitle = $('.publishedAt', listItem);

            var balance_month = '';
            var month = new Date(item.publishedAt).getMonth()

            switch(month) {
                case 0: balance_month = 'January'; break;
                case 1: balance_month = 'February'; break;
                case 2: balance_month = 'March'; break;
                case 3: balance_month = 'April'; break;
                case 4: balance_month = 'May'; break;
                case 5: balance_month = 'June'; break;
                case 6: balance_month = 'July'; break;
                case 7: balance_month = 'August'; break;
                case 8: balance_month = 'September'; break;
                case 9: balance_month = 'October'; break;
                case 10: balance_month = 'November'; break;
                case 11: balance_month = 'December'; break;

                default: break;
            }

            listItemTitle.html(new Date(item.publishedAt).getDate() + ' ' + balance_month + ' '+ new Date(item.publishedAt).getFullYear());

            var listItemAmount = $('.amount', listItem);
            listItemAmount.html(item.title);

            var listItemDesc = $('.description', listItem);
            listItemDesc.html(item.description);

            var listItemImg = $('.urlToImage', listItem);
            listItemImg.attr("src", item.urlToImage);

            var link = $('a.directions-link', listItem);
            link.attr('href', item.url);

            $('#dataList').append(listItem);

        }
    });

</script>














</body>
</html>