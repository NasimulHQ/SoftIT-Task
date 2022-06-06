var now = moment();
var month = moment(now).month() + 1; 
var year = now.year();
var startOfMonth = moment(now).startOf('month');
var endOfMonth = moment(now).endOf('month');
var dayWord;

$("#app").append(now.format("MMMM"));

for(var i = startOfMonth.date(); i <= endOfMonth.date();i++){
  switch (startOfMonth.day()) {
    case 0:
      dayWord = "Sun";
      break;
    case 1:
      dayWord = "Mon";
      break;
    case 2:
      dayWord = "Tue";
      break;
    case 3:
      dayWord = "Wed";
      break;
    case 4:
      dayWord = "Thu";
      break;
    case 5:
      dayWord = "Fri";
      break;
    case 6:
      dayWord = "Sat";
      break;
    default:
      console.log("day error");
  }
  if(['Fri', 'Sat'].includes(dayWord)){
    $(".t-head").append("<th class='weekend'>" + dayWord + "<br>"+ i + "</th>");
  }else{
    $(".t-head").append("<th>" + dayWord + "<br>"+ i + "</th>");
  }
  $(".t-content").append("<td class='"+ year + "-" + month + "-" + i +"'>-</td>");
  startOfMonth.add(1,'days');
}

$("."+ now.format("YYYY-MM-D") ).addClass("today");