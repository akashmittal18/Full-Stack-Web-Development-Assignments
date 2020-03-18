var rand =  Math.floor(Math.random()*101);
a = [];

function new_element(){
	num = document.getElementById('array').value;
	n = a.push(num);
	if(n == 10 || num == rand)
	{
		if(n == 10)
			{
				next_time();
			}
		else(num == rand)
			{
				win();
			}
			exit();
	}
	document.getElementById('counter').innerHTML = "Guess left:- " + (10-n);
	document.getElementById('show').innerHTML = "";
	help1();
	help2();
	for(x in a)
	{
		document.getElementById('show').innerHTML += "Your Guess:- " +  (a[x]);
		document.getElementById('show').innerHTML += " ";	
	}
}
function next_time()
{
	alert("SORRY! The random number was "+rand);
}

function win()
{
	alert("Hurray! You Win");
}

function exit()
{
	location.reload();
}

function help1()
{
	if(rand%2==0)
	{
		document.getElementById('help1').innerHTML = "Random number is even and \n";	
	}
	else
	{
		document.getElementById('help1').innerHTML = "Random number is odd and \n";	
	}
}

function help2()
{
	if(rand<50)
	{
		document.getElementById('help2').innerHTML = "random number is equal or less than 50";	
	}
	else if(rand>50)
	{
		document.getElementById('help2').innerHTML = "random number is equal or greater  than 50";	
	}
}