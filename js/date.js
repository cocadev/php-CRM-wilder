

var d = new Date().getDay();

function myDate(p1) {

  switch (p1) {
    case 0: balance_day = 'Sunday'; break;
    case 1: balance_day = 'Monday'; break;
    case 2: balance_day = 'Tuesday'; break;
    case 3: balance_day = 'Wednesday'; break;
    case 4: balance_day = 'Tuesday'; break;
    case 5: balance_day = 'Friday'; break;
    case 6: balance_day = 'Saturday'; break;
    default: balance_day = ''; break;
  }
  return balance_day;   // The function returns the product of p1 and p2
}

  document.getElementById("tips3_day").innerHTML = myDate((d + 3) % 7);
  document.getElementById("tips4_day").innerHTML = myDate((d + 4) % 7);
  document.getElementById("tips5_day").innerHTML = myDate((d + 5) % 7);
  document.getElementById("tips6_day").innerHTML = myDate((d + 6) % 7);
  document.getElementById("tips7_day").innerHTML = myDate((d + 7) % 7);
  document.getElementById("tips8_day").innerHTML = myDate((d + 8) % 7);  


  
