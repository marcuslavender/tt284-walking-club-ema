/*
 *
 * Date / time function
 *
 */
 
 sleep(milliseconds)
 {
	 var start = new Date().getTime();
	 for (var i = 0; i < 1e7; i++)
	 {
		 if ((new Date().getTime() - start) > milliseconds)
		 {
			 break;
		 }
	 }
 }
 
 
 clock() 
 {
	 //while(true)
	 {
		var date = new Date(year, month, day, hours, minutes);
		document.getElementById("clock").innerHTML = date;
		//function sleep(1000);
	 }
 }
	 
