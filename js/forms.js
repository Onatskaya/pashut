$(function() {
	
	if($("div.memType")){
		$("div.memType").mouseover(function(){
			$(this).removeClass("memTypeOff").addClass("memTypeOn");
			}).mouseout(function(){
			$(this).removeClass("memTypeOn").addClass("memTypeOff");		
			});
		
		$("div.memType").click(function(){             
			  $(this).children('.left_section').children("input[type=radio]").attr("checked",true);
			  
		});		
	}
});


function checkSubmit(form)
{
	submitOK = true;
	emailOK = true;
	dateOK = true; 
	emailMatch = true;
	passMatch = true;
	userpassFormat = true;
	userpassLength = true;
	alertVal = '';

	for(i=0,n=form.elements.length;i<n;i++)
	{
		addAlert = false;
		if(form.elements[i].name == 'reqFld'  && form.elements[i].disabled == false)
		{
			theFld = form.elements[i-1];
			fldName = theFld.name;
			theFld.style.background = '#ffffff';
			if(theFld.type.toLowerCase().indexOf('select') > -1)
			{
				if(theFld.options[theFld.selectedIndex].value == '')
				{
					theFld.style.background = '#ffff99';
					submitOK = false;
					addAlert = true;
				}
			}
			else if(theFld.name.indexOf('_CHX') > -1)
			{
				fldName = theFld.name.substring(0,theFld.name.indexOf('_CHX'));
				if(document.getElementById(fldName + '_BOX'))
				{
					document.getElementById(fldName + '_BOX').style.background = '#ffffff';
				}
				fldBad = true;
				addAlert = true;
				for(j=0,m=form.elements.length;j<m;j++)
				{
					if(form.elements[j].name == fldName && form.elements[j].checked)
					{
						fldBad = false;
						addAlert = false;
					}
				}
				if(fldBad)
				{
					if(document.getElementById(fldName + '_BOX'))
					{
						document.getElementById(fldName + '_BOX').style.background = '#ffff99';
					}
					submitOK = false;
					addAlert = true;
				}
			}
			else if(theFld.value == '' || trim(theFld.value) == '')
			{
				theFld.style.background = '#ffff99';
				submitOK = false;
				addAlert = true;
			}
			else if(theFld.name.toUpperCase().indexOf('EMAIL') > -1)
			{
				email = trim(theFld.value);
				firstAtSign = email.indexOf('@');
				atSignPos = email.lastIndexOf('@');
				periodPos = email.lastIndexOf('.');
				spacePos = email.lastIndexOf(' ');
				if(spacePos > -1 || firstAtSign != atSignPos || atSignPos > periodPos || email.length - periodPos < 3 || periodPos - atSignPos < 2 || atSignPos < 2)
				{
					theFld.style.background = '#ffff99';
					emailOK = false;
				}
			}
			else if(form.elements[i].value == 'date')
			{
				if(!validDate(theFld.value))
				{
					theFld.style.background = '#ffff99';
					submitOK = false;
					addAlert = true;
					dateOK = false;
				}
			}
   
			if(form.elements[fldName+'_MSX'] && addAlert)
			{
				alertVal = alertVal + form.elements[fldName+'_MSX'].value + '\n\n';
			}
		}
 	}

	/*
	if(form.username)
	{
		if(form.username.value.indexOf(' ') != -1)
		{
			form.username.style.background = '#ffff99';
			userpassFormat = false;
		}
	}
	*/

	if(form.password)
	{
		if(form.password.value.indexOf(' ') != -1)
		{
			form.password.style.background = '#ffff99';
			userpassFormat = false;
		}
	}
  
	/*
	if(form.username)
	{
		if(form.username.value.length < 5)
		{
			form.username.style.background = '#ffff99';
			userpassLength = false;
		}
	}
	*/

	if(form.password)
	{
		if(form.password.value.length < 10)
		{
			form.password.style.background = '#ffff99';
			userpassLength = false;
		}
	}
 
 	if(form.password && form.password2)
 	{
		if(trim(form.password.value) != trim(form.password2.value))
		{
			form.password.style.background = '#ffff99';
			form.password2.style.background = '#ffff99';
			passMatch = false;
		}
	}

	if(form.email && form.email2)
	{
		if(trim(form.email.value) != trim(form.email2.value))
		{
			form.email.style.background = '#ffff99';
			form.email2.style.background = '#ffff99';
			emailMatch = false;
		}
	}
	
	if(!submitOK)
	{
		alert('Please complete all required fields');
		return false;
	}
	else if(!dateOK)
	{
		alert('Please make sure all date fields are valid and are in MM-DD-YYYY format');
		return false;
	}
	else if(!emailOK)
	{
		alert('Please provide a valid email address');
		return false;
	}
	else if(!passMatch)
	{
		alert('Your password does not match in both fields');
		return false;
	}
	else if(!userpassFormat)
	{
		alert('Your password cannot contain SPACES');
		return false;
	}
	else if(!userpassLength)
	{
		alert('Your password must be AT LEAST 10 characters long');
		return false;
	}
	else if(!emailMatch)
	{
		alert('Your email address does not match in both fields');
		return false;
	}
	else
	{
		if(form.btSafeSubmit)
		{
			form.btSafeSubmit.disabled = true;
		}
		form.submit();
	}
}

/**** THIS FUNCTION IS ONLY NEEDED FOR BACKWARD COMPATIBILITY UNTIL REMAINING CODE IS CHANGED ****/
function checkLPSubmit(form,sbmtbutton)
{
	submitOK = true;
	emailOK = true;
	dateOK = true; 
	emailMatch = true;
	passMatch = true;
	userpassLength = true;
	userpassFormat = true;
	alertVal = '';

	for(i=0,n=form.elements.length;i<n;i++)
	{
		addAlert = false;
		if(form.elements[i].name == 'reqFld'  && form.elements[i].disabled == false)
		{
			theFld = form.elements[i-1];
			fldName = theFld.name;
			theFld.style.background = '#ffffff';
			if(theFld.type.toLowerCase().indexOf('select') > -1)
			{
				if(theFld.options[theFld.selectedIndex].value == '')
				{
					theFld.style.background = '#ffff99';
					submitOK = false;
					addAlert = true;
				}
			}
			else if(theFld.name.indexOf('_CHX') > -1)
			{
				fldName = theFld.name.substring(0,theFld.name.indexOf('_CHX'));
				if(document.getElementById(fldName + '_BOX'))
				{
					document.getElementById(fldName + '_BOX').style.background = '#ffffff';
				}
				fldBad = true;
				addAlert = true;
				for(j=0,m=form.elements.length;j<m;j++)
				{
					if(form.elements[j].name == fldName && form.elements[j].checked)
					{
						fldBad = false;
						addAlert = false;
					}
				}
				if(fldBad)
				{
					if(document.getElementById(fldName + '_BOX'))
					{
						document.getElementById(fldName + '_BOX').style.background = '#ffff99';
					}
					submitOK = false;
					addAlert = true;
				}
			}
			else if(theFld.value == '' || trim(theFld.value) == '')
			{
				theFld.style.background = '#ffff99';
				submitOK = false;
				addAlert = true;
			}
			else if(theFld.name.toUpperCase().indexOf('EMAIL') > -1)
			{
				email = trim(theFld.value);
				firstAtSign = email.indexOf('@');
				atSignPos = email.lastIndexOf('@');
				periodPos = email.lastIndexOf('.');
				spacePos = email.lastIndexOf(' ');
				if(spacePos > -1 || firstAtSign != atSignPos || atSignPos > periodPos || email.length - periodPos < 3 || periodPos - atSignPos < 2 || atSignPos < 2)
				{
					theFld.style.background = '#ffff99';
					emailOK = false;
				}
			}
			else if(form.elements[i].value == 'date')
			{
				if(!validDate(theFld.value))
				{
					theFld.style.background = '#ffff99';
					submitOK = false;
					addAlert = true;
					dateOK = false;
				}
			}
   
			if(form.elements[fldName+'_MSX'] && addAlert)
			{
				alertVal = alertVal + form.elements[fldName+'_MSX'].value + '\n\n';
			}
		}
 	}

	if(!submitOK)
	{
		alert('Please complete all required fields');
		return false;
	}

	if(!dateOK)
	{
		alert('Please make sure all date fields are valid and are in MM-DD-YYYY format');
		return false;
	}

	if(!emailOK)
	{
		alert('Please provide a valid email address');
		return false;
	}

 	if(form.password && form.password2)
 	{
		if(trim(form.password.value) != trim(form.password2.value))
		{
			form.password.style.background = '#ffff99';
			form.password2.style.background = '#ffff99';
			passMatch = false;
		}
	}

	if(!passMatch)
	{
		alert('Your password does not match in both fields');
		return false;
	}

	if(form.password && form.password2)
	{
		if(form.password.value.length < 10 || form.password2.value.length < 10)
		{
			//form.username.style.background = '#ffff99';
			form.password.style.background = '#ffff99';
			form.password2.style.background = '#ffff99';
			userpassLength = false;
		}
	}
 
	if(!userpassLength)
	{
		alert('Your password must be at least 10 characters long');
		return false;
	}

	if(form.password && form.password2)
	{
		if(form.password.value.indexOf(' ') != -1 || form.password2.value.indexOf(' ') != -1)
		{
			//form.username.style.background = '#ffff99';
			form.password.style.background = '#ffff99';
			form.password2.style.background = '#ffff99';
			userpassFormat = false;
		}
	}
 
	if(!userpassFormat)
	{
		alert('Your password cannot contain spaces');
		return false;
	}

	if(form.email && form.email2)
	{
		if(trim(form.email.value) != trim(form.email2.value))
		{
			form.email.style.background = '#ffff99';
			form.email2.style.background = '#ffff99';
			emailMatch = false;
		}
	}

	if(!emailMatch)
	{
		alert('Your email address does not match in both fields');
		return false;
	}

	if(typeof(sbmtbutton) != 'undefined' && sbmtbutton)
	{
		sbmtbutton.disabled = true;
	}
	
	form.submit();
}



function guestSearch()
{
	var form = document.searchForm;
	if(form.region_ID.selectedIndex > 0)
	{
		if(typeof(progBar)!='undefined' && progBar)
		{
			ShowProgress();
		}
		form.submit();
	}
}

function phoneNumSrch()
{
	if(document.srchForm.checkphoneA.value.length != 3 || document.srchForm.checkphoneB.value.length != 3 || document.srchForm.checkphoneC.value.length != 4)
	{
		alert('Please enter a valid phone number');
	}
	else
	{
		document.srchForm.submit();
	}
}



function mainSearchCheck(form)
{
	if(form.region_ID.selectedIndex == 0 && form.area_ID.selectedIndex == 0 && form.zipcode.value.length < 5)
	{
		alert('You must select either a region or an area or a zip code to search.');
	}
	else
	{
		form.submit();
	}
}

function mainRMSearchCheck(form)
{
	if(form.region_ID.selectedIndex == 0 && form.area_ID.selectedIndex == 0)
	{
		alert('You must select either a region or an area.');
	}
	else
	{
		form.submit();
	}
}

function fillRegion(what,howMany)
{
	if(howMany > 0)
	{
		for(i=what.index,n=(what.index + howMany);i<n;i++)
		{
			what.form.elements[i+1].checked = what.checked;
		}
	}
	else
	{
		for(i=what.index,n=(what.index + howMany);i>n;i--)
		{
			what.form.elements[i-1].checked = what.checked;
		}
	}
}

function verifyAllAreas(what,idx,howMany)
{
	checkRegion = true;
	if(howMany > 0)
	{
		regionCheck = what.form.elements[what.index - idx];
		for(i=regionCheck.index,n=(regionCheck.index + howMany);i<n;i++)
		{
			if(!what.form.elements[i+1].checked)
			{
				checkRegion = false;
			}
		}
	}
	else
	{
		regionCheck = what.form.elements[what.index - howMany - idx + 1];
		for(i=regionCheck.index,n=(regionCheck.index + howMany);i>n;i--)
		{
			if(!what.form.elements[i-1].checked)
			{
				checkRegion = false;
			}
		}
	}
 
	regionCheck.checked = checkRegion;
}

function addIndexes(theForm)
{
	for(var i=0,n=theForm.elements.length;i<n;i++)
	{
		theForm.elements[i].index=i;
	}
}

function validDate(dateVal)
{
	var result = true;
	var elems = dateVal.split("-");
	result = (elems.length == 3); // should be three components
	if(result)
	{
		var month = parseInt(elems[0],10);
		var day = parseInt(elems[1],10);
		var year = parseInt(elems[2],10);
		result = (elems[0].length == 2) && (month > 0) && (month < 13) && (elems[1].length == 2) && (day > 0) && (day < 32) && (elems[2].length == 4) && (year > 1990) && (year < 2045);
	}
	if(result)
	{
		if(month == 2)
		{
			result = ((year % 4 == 0 && day < 30) || day < 29);
		}
		else if(month == 4 || month == 6 || month == 9 || month == 1)
		{
			result = (day < 31);
		}
	}
	return result;
}


function open_win(objURL,myHeight,myWidth,myTop,myLeft)
{
	winCommon = window.open('','','toolbar=no,scrollbars=yes,location=no,directories=no,menubar=no,status=yes,resizeable=no,height='+myHeight+',width='+myWidth+',top='+myTop+',left='+myLeft);
	winCommon.location = objURL;
	return;
}

function open_win_basic(objURL)
{
	myHeight = 400;
	myWidth = 400;
	myTop = 100;
	myLeft = 100;
	winCommon = window.open('','','toolbar=no,scrollbars=yes,location=no,directories=no,menubar=no,status=yes,resizeable=no,height='+myHeight+',width='+myWidth+',top='+myTop+',left='+myLeft);
	winCommon.location = objURL;
	return;
}

function click2callnow(phone)
{
	if(confirm('You are about to dial ' + phone + '. Are You Sure?'))
	{
		window.location.href = 'dial:91' + phone;
	}
}

function setDateText(where,what)
{
	where.value = what;
}

function setDateSelect(where_m,where_d,where_y,what_m,what_d,what_y)
{
	where_m.selectedIndex = what_m;
	where_d.selectedIndex = what_d;
	where_y.selectedIndex = what_y;
}

var loginbtnImg = new Image();
loginbtnImg.src = '/images/logginginbtn.gif';
