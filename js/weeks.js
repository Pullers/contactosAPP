window.onload = function(){
    var monthNames = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
      "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
    ];

    var day = new Date();
    var week = getWeek(new Date());

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
        var dia = document.getElementsByClassName('dia');
        for(var i = 0; i<7; i++){
            dia[i].innerHTML = week[i].getDate() +" de "+ monthNames[week[i].getMonth()] +" de " + week[i].getFullYear(); 
        }
        var weekJSON = toJSON(week);

	
	   
		$.ajax({
		  method: "POST",
		  url: "index2.php",
		  data: { id: 1, location: "Boston" }
		})
		  .done(function( data ) {
			alert( "Data Saved: " + data['id'] );
		  });
	/*
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "index2.php",
            data: {myData:weekJSON},
            contentType: "application/json; charset=utf-8",
            success: function(data){
                alert('Items added');
            },
            error: function(e){
                console.log(e.message);
            }
        });*/
    }

    function nextWeek(day){
        var today = day;
        var nextweek = new Date(today.getFullYear(), today.getMonth(), today.getDate()+7);
        return nextweek;
    }

    function previousWeek(day){
        var today = day;
        var previousweek = new Date(today.getFullYear(), today.getMonth(), today.getDate()-7);
        return previousweek;
    }

    function toJSON(week){
      return JSON.stringify(week);
    }

    printWeek(week);

    document.getElementById("previous").addEventListener("click", function(){
        day = previousWeek(day);
        week = getWeek(day);
        printWeek(week);
    });

    document.getElementById("next").addEventListener("click", function(){
        day = nextWeek(day);
        week = getWeek(day);
        printWeek(week);
    });
}