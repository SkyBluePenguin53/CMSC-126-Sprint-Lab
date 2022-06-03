function digitalClock()
{
	var date = new Date();
	var hours = date.getHours();
	var minutes = date.getMinutes().toString();
	var seconds = date.getSeconds();
	var labelTime = document.getElementById('labelTime');

	if (hours>=12)
	{
		labelTime.innerHTML = "PM";
	}
	else
	{
		labelTime.innerHTML = "AM";
	}
	if (hours>12)
	{
		hours -= 12;
	}
	
	hours = hours.toString();
    seconds += 1;
    seconds = seconds.toString();
	
	document.getElementById('hours').innerHTML = hours.padStart(2, '0');
	document.getElementById('minutes').innerHTML = minutes.padStart(2, '0');
	document.getElementById('seconds').innerHTML = seconds.padStart(2, '0');
}

setInterval(digitalClock,1000);
