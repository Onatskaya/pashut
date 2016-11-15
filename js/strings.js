
function trim(TRIM_VALUE)
{
	if(TRIM_VALUE.length < 1)
	{
		return "";
	}
	TRIM_VALUE = RTrim(TRIM_VALUE);
	TRIM_VALUE = LTrim(TRIM_VALUE);
	if(TRIM_VALUE=="")
	{
		return "";
	}
	else
	{
		return TRIM_VALUE;
	}
}


function RTrim(VALUE)
{
	var w_space = String.fromCharCode(32);
	var v_length = VALUE.length;
	var strTemp = ""; 
	if(v_length < 0)
	{
		return "";
	}
	var iTemp = v_length -1;
	while(iTemp > -1)
	{
		if(VALUE.charAt(iTemp) == w_space)
		{
		}
		else
		{
			strTemp = VALUE.substring(0,iTemp +1);
			break;
		}
		iTemp = iTemp-1;
	}
	return strTemp;
}

function LTrim(VALUE)
{
	var w_space = String.fromCharCode(32);
	if(v_length < 1)
	{
		return"";
	}
	var v_length = VALUE.length;
	var strTemp = "";
	var iTemp = 0;
	while(iTemp < v_length)
	{
		if(VALUE.charAt(iTemp) == w_space)
		{
		}
		else
		{
			strTemp = VALUE.substring(iTemp,v_length);
			break;
		}
		iTemp = iTemp + 1;
	}
	return strTemp;
}

function chars(string,Chars)
{
	if(Chars == 'alphanum')
	{
		Chars = 'abcdefghijklmnopqrstuvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ.,_- ';
	}

	if(Chars == 'emailchars')
	{
		Chars = 'abcdefghijklmnopqrstuvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ._@-';
	}
	
	var returnstring = '';
	
	for(var i=0;i < string.length;i++)
	{
		if(Chars.indexOf(string.charAt(i)) > -1)
		{
			returnstring = returnstring + string.charAt(i);
		}
	}

	return returnstring;
}

function nochars(string,Chars)
{
	var returnstring = '';
	for(var i=0;i < string.length;i++)
	{
		if(Chars.indexOf(string.charAt(i)) == -1)
		{
			returnstring = returnstring + string.charAt(i);
		}
	}
	return returnstring;
}

function replace(string,text,by)
{
	// Replaces text with by in string
	var strLength = string.length, txtLength = text.length;
	if((strLength == 0) || (txtLength == 0))
	{
		return string;
	}

	var i = string.indexOf(text);
	if((!i) && (text != string.substring(0,txtLength)))
	{
		return string;
	}
	
	if(i == -1)
	{ 
		return string;
	}

	var newstr = string.substring(0,i) + by;

	if(i+txtLength < strLength)
	{
		newstr += replace(string.substring(i+txtLength,strLength),text,by);
	}

	return newstr;
}

function moneyFormat(mnt,commas,dollarSign)
{
	mnt -= 0;
	mnt = (Math.round(mnt*100))/100;
	numTxt = (mnt == Math.floor(mnt)) ? mnt + '.00' : ((mnt*10 == Math.floor(mnt*10)) ? mnt + '0' : mnt);
					   
	numTxt = numTxt + '';

	if(commas)
	{ 
		for (var i = 0; i < Math.floor(((numTxt.length - 3)-(1+i))/3); i++)
		{
			numTxt = numTxt.substring(0,(numTxt.length - 3)-(4*i+3))+','+ numTxt.substring((numTxt.length - 3)-(4*i+3));
		}
	}
	
	if(dollarSign)
	{
		numTxt = '$' + numTxt;
	}
	return numTxt;
}
 