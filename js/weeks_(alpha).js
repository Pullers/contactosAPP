var day = new Date();

function getWeek(fromDate){
 fromDate = new Date(fromDate);
 var day = fromDate.getDay(),
 diff = fromDate.getDate() - day + (day == 0 ? -6:1);
 var monday = new Date(fromDate.setDate(diff));
	 var result = [new Date(monday)];
 while (monday.setDate(monday.getDate()+1) && monday.getDay()!==1) {
  result.push(new Date(monday));
 }
 return result;
}
// usage

function printWeek(week){
	for (var i = 0; i<7;i++){
		document.write(week[i] + '</br>');
	}
}

function nextWeek(day){
    var today = day;
    var nextweek = new Date(today.getFullYear(), today.getMonth(), today.getDate()+7);
    return nextweek;
}

function previousWeek(day){
    var today = day;
    var nextweek = new Date(today.getFullYear(), today.getMonth(), today.getDate()-7);
    return nextweek;
}


var week = getWeek(new Date());
printWeek(week);
document.write('<br>');

day = nextWeek(day);
var week = getWeek(day);
printWeek(week);
document.write('<br>');

day = nextWeek(day);
var week = getWeek(day);
printWeek(week);
document.write('<br>');

day = previousWeek(day);
var week = getWeek(day);
printWeek(week);
document.write('<br>');

day = previousWeek(day);
var week = getWeek(day);
printWeek(week);