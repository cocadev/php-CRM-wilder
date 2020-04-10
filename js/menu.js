
            var backendAPI = 'https://mypunter.desertsoftware.systems/mypunterBackend/json/data_posts.php?date='
            
            function padWithZero(number) {
                  var string = number.toString();
                  if (number < 10) {
                    return "0" + string;
                  }
                  return string;
            };

              function myMonth(p1) {

                 switch(p1) {
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

              return balance_month; 
            }

            var d = new Date()
            var today =  d.getFullYear() + '-' + padWithZero(d.getMonth()+1)+'-'+padWithZero(d.getDate())

            d.setDate(d.getDate() + 1);
            var tomorrow =  d.getFullYear() + '-' + padWithZero(d.getMonth()+1)+'-'+padWithZero(d.getDate())

            d.setDate(d.getDate() + 1);
            var third_plus_day =  d.getFullYear() + '-' + padWithZero(d.getMonth()+1)+'-'+padWithZero(d.getDate())

            d.setDate(d.getDate() + 1);
            var fourth_plus_day =  d.getFullYear() + '-' + padWithZero(d.getMonth()+1)+'-'+padWithZero(d.getDate())

            d.setDate(d.getDate() + 1);
            var fifth_plus_day =  d.getFullYear() + '-' + padWithZero(d.getMonth()+1)+'-'+padWithZero(d.getDate())

            d.setDate(d.getDate() + 1);
            var sixth_plus_day =  d.getFullYear() + '-' + padWithZero(d.getMonth()+1)+'-'+padWithZero(d.getDate())

            d.setDate(d.getDate() + 1);
            var seventh_plus_day =  d.getFullYear() + '-' + padWithZero(d.getMonth()+1)+'-'+padWithZero(d.getDate())

            d.setDate(d.getDate() - 7);
            var yesterday =  d.getFullYear() + '-' + padWithZero(d.getMonth()+1)+'-'+padWithZero(d.getDate())
            document.getElementById("results1_day").innerHTML = d.getDate() + ' of ' + myMonth(d.getMonth());

            d.setDate(d.getDate() - 1);
            var third_minus_day =  d.getFullYear() + '-' + padWithZero(d.getMonth()+1)+'-'+padWithZero(d.getDate())
            document.getElementById("results2_day").innerHTML = d.getDate() + ' of ' + myMonth(d.getMonth());

            d.setDate(d.getDate() - 1);
            var fourth_minus_day =  d.getFullYear() + '-' + padWithZero(d.getMonth()+1)+'-'+padWithZero(d.getDate())
            document.getElementById("results3_day").innerHTML = d.getDate() + ' of ' + myMonth(d.getMonth());

            d.setDate(d.getDate() - 1);
            var fifth_minus_day =  d.getFullYear() + '-' + padWithZero(d.getMonth()+1)+'-'+padWithZero(d.getDate())
            document.getElementById("results4_day").innerHTML = d.getDate() + ' of ' + myMonth(d.getMonth());

            d.setDate(d.getDate() - 1);
            var sixth_minus_day =  d.getFullYear() + '-' + padWithZero(d.getMonth()+1)+'-'+padWithZero(d.getDate())
            document.getElementById("results5_day").innerHTML = d.getDate() + ' of ' + myMonth(d.getMonth());

            d.setDate(d.getDate() - 1);
            var seventh_minus_day =  d.getFullYear() + '-' + padWithZero(d.getMonth()+1)+'-'+padWithZero(d.getDate())
            document.getElementById("results6_day").innerHTML = d.getDate() + ' of ' + myMonth(d.getMonth());

            $.getJSON(backendAPI + today, function (dataObject) {
                var listItemString = $('#tips1_list').html();
                dataObject.forEach(buildNewList);
                function buildNewList(item, index) {
                  var listItem = $('<li>' + listItemString + '</li>');
                  var listItemAmount = $('.tips1_title', listItem);
                  listItemAmount.html(item.post_title);
                  var link = $('a.tips1_title', listItem);
                  link.attr('href', 'tips.html?id=' + item.post_date + '-' + item.post_title);
                  $('#tips1_data').append(listItem);
                }
            });
            $.getJSON(backendAPI + tomorrow, function (dataObject) { 
                var listItemString = $('#tips2_list').html();
                dataObject.forEach(buildNewList);
                function buildNewList(item, index) {
                  var listItem = $('<li>' + listItemString + '</li>');
                  var listItemAmount = $('.tips2_title', listItem);
                  listItemAmount.html(item.post_title);
                  var link = $('a.tips2_title', listItem);
                  link.attr('href', 'tips.html?id=' + item.post_date + '-' + item.post_title);
                  $('#tips2_data').append(listItem);
                }
            });
            $.getJSON(backendAPI + third_plus_day, function (dataObject) { 
                var listItemString = $('#tips3_list').html();
                dataObject.forEach(buildNewList);
                function buildNewList(item, index) {
                  var listItem = $('<li>' + listItemString + '</li>');
                  var listItemAmount = $('.tips3_title', listItem);
                  listItemAmount.html(item.post_title);
                  var link = $('a.tips3_title', listItem);
                  link.attr('href', 'tips.html?id=' + item.post_date + '-' + item.post_title);
                  $('#tips3_data').append(listItem);
                }
            });
            $.getJSON(backendAPI + fourth_plus_day, function (dataObject) { 
                var listItemString = $('#tips4_list').html();
                dataObject.forEach(buildNewList);
                function buildNewList(item, index) {
                  var listItem = $('<li>' + listItemString + '</li>');
                  var listItemAmount = $('.tips4_title', listItem);
                  listItemAmount.html(item.post_title);
                  var link = $('a.tips4_title', listItem);
                  link.attr('href', 'tips.html?id=' + item.post_date + '-' + item.post_title);
                  $('#tips4_data').append(listItem);
                }
            });
            $.getJSON(backendAPI + fifth_plus_day, function (dataObject) { 
                var listItemString = $('#tips5_list').html();
                dataObject.forEach(buildNewList);
                function buildNewList(item, index) {
                  var listItem = $('<li>' + listItemString + '</li>');
                  var listItemAmount = $('.tips5_title', listItem);
                  listItemAmount.html(item.post_title);
                  var link = $('a.tips5_title', listItem);
                  link.attr('href', 'tips.html?id=' + item.post_date + '-' + item.post_title);
                  $('#tips5_data').append(listItem);
                }
            });
            $.getJSON(backendAPI + sixth_plus_day, function (dataObject) { 
                var listItemString = $('#tips6_list').html();
                dataObject.forEach(buildNewList);
                function buildNewList(item, index) {
                  var listItem = $('<li>' + listItemString + '</li>');
                  var listItemAmount = $('.tips6_title', listItem);
                  listItemAmount.html(item.post_title);
                  var link = $('a.tips6_title', listItem);
                  link.attr('href', 'tips.html?id=' + item.post_date + '-' + item.post_title);
                  $('#tips6_data').append(listItem);
                }
            });





            /////////////////////////////////////////////
            /////////////////    Tips    ////////////////
            /////////////////////////////////////////////
            $.getJSON(backendAPI + yesterday, function (dataObject) { 

                var listItemString = $('#results1_list').html();
                dataObject.forEach(buildNewList);
                function buildNewList(item, index) {
                  var listItem = $('<li>' + listItemString + '</li>');
                  var listItemAmount = $('.results1_title', listItem);
                  listItemAmount.html(item.post_title);
                  var link = $('a.results1_title', listItem);
                  link.attr('href', 'tips.html?id=' + item.post_date + '-' + item.post_title);
                  $('#results1_data').append(listItem);
                }
            });
            $.getJSON(backendAPI + third_minus_day, function (dataObject) { 
                var listItemString = $('#results2_list').html();
                dataObject.forEach(buildNewList);
                function buildNewList(item, index) {
                  var listItem = $('<li>' + listItemString + '</li>');
                  var listItemAmount = $('.results2_title', listItem);
                  listItemAmount.html(item.post_title);
                  var link = $('a.results2_title', listItem);
                  link.attr('href', 'tips.html?id=' + item.post_date + '-' + item.post_title);
                  $('#results2_data').append(listItem);
                }
            });
            $.getJSON(backendAPI + fourth_minus_day, function (dataObject) { 
                var listItemString = $('#results3_list').html();
                dataObject.forEach(buildNewList);
                function buildNewList(item, index) {
                  var listItem = $('<li>' + listItemString + '</li>');
                  var listItemAmount = $('.results3_title', listItem);
                  var link = $('a.results3_title', listItem);
                  link.attr('href', 'tips.html?id=' + item.post_date + '-' + item.post_title);
                  listItemAmount.html(item.post_title);
                  $('#results3_data').append(listItem);
                }
            });
            $.getJSON(backendAPI + fifth_minus_day, function (dataObject) { 
                var listItemString = $('#results4_list').html();
                dataObject.forEach(buildNewList);
                function buildNewList(item, index) {
                  var listItem = $('<li>' + listItemString + '</li>');
                  var listItemAmount = $('.results4_title', listItem);
                  var link = $('a.results4_title', listItem);
                  link.attr('href', 'tips.html?id=' + item.post_date + '-' + item.post_title);
                  listItemAmount.html(item.post_title);
                  $('#results4_data').append(listItem);
                }
            });
            $.getJSON(backendAPI + sixth_minus_day, function (dataObject) { 
                var listItemString = $('#results5_list').html();
                dataObject.forEach(buildNewList);
                function buildNewList(item, index) {
                  var listItem = $('<li>' + listItemString + '</li>');
                  var listItemAmount = $('.results5_title', listItem);
                  var link = $('a.results5_title', listItem);
                  link.attr('href', 'tips.html?id=' + item.post_date + '-' + item.post_title);
                  listItemAmount.html(item.post_title);
                  $('#results5_data').append(listItem);
                }
            });
            $.getJSON(backendAPI + seventh_minus_day, function (dataObject) { 
                var listItemString = $('#results6_list').html();
                dataObject.forEach(buildNewList);
                function buildNewList(item, index) {
                  var listItem = $('<li>' + listItemString + '</li>');
                  var listItemAmount = $('.results6_title', listItem);
                  var link = $('a.results6_title', listItem);
                  link.attr('href', 'tips.html?id=' + item.post_date + '-' + item.post_title);
                  listItemAmount.html(item.post_title);
                  $('#results6_data').append(listItem);
                }
            });
        