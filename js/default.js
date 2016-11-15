
function checkUncheckAll(theElement) {
  var theForm = theElement.form, z = 0;
  for(z=0; z<theForm.length;z++){
    if(theForm[z].type == 'checkbox' && theForm[z].name != 'checkall'){
      theForm[z].checked = theElement.checked;
      toggleCheckbox(theForm[z]);
    }
  }
}

function toggleCheckbox(element) {
  element.parentNode.parentNode.className = element.parentNode.parentNode.className.replace(" msg_checked", "");
  if (element.checked) {
    element.parentNode.parentNode.className = element.parentNode.parentNode.className + " msg_checked";
  }
}

		
$('.btn_submit_prop').click(function() {	
	$this = $(this);
	$form = $('#propForm');
	$dest = $('#destination');
	
	if($this.val() == 'Save') {				
		$dest.val('finish');
	} else {				
		$dest.val('upload');
	}
	$form.submit();
	return false;
});
	

function login(form)
{
	if(form.username.value != '' && form.password.value != '')
	{
		if(document.getElementById('loginBtn').innerHTML)
		{
			//document.getElementById('loginBtn').innerHTML = '<img src="/images/logginginbtn.gif" id="lbtn" name="btn">';
			//document['btn'].src = loginbtnImg.src;
		}
		if(typeof(progBar)!='undefined' && progBar)
		{
			//ShowProgress();
		}
		form.submit();
	}
}

function submitEnter(myfield,e)
{
	var keycode;

	if(window.event) 
	{
		keycode = window.event.keyCode;
	}
	else if(e)
	{
		keycode = e.which;
	}
	else 
	{
		return true;
	}

	if(keycode == 13)
	{
		return true;
	}
	else 
	{
		return false;
	}
}


//Javascript Function for Chicklets
function Bookmarks(sourceURL) {
	var targetURL = sourceURL;
	window.open(targetURL);
}

function GetThis(T, C, U, L) {
	var targetUrl = 'http://www.myspace.com/Modules/PostTo/Pages/?' + 't=' + encodeURIComponent(T)
	+ '&c=' + encodeURIComponent(C) + '&u=' + encodeURIComponent(U) + '&l=' + L;
	window.open(targetUrl);
}
	

function clearMessage(targetId) {			
	document.getElementById(targetId).style.display = 'none';	
}

function toggleOverlay(height, overflow){
  htm = document.getElementsByTagName('html')[0];
  htm.style.height = height;
  htm.style.overflow = overflow; 
}	
function showLoginOverlay() {
  bodyNode = document.getElementById("page_body");
  target = document.getElementById("login_overlay");
  target.style.display = "block";
	toggleOverlay('100%', "hidden");
}	
function hideLoginOverlay() {
  target = document.getElementById("login_overlay");
  target.style.display = "none";
	toggleOverlay('100%', "auto");
}


function toggle(currentIdClass)
{  
  /*
  
  var curId = document.getElementById(currentIdClass);
  
  if(curId.className == 'rowOff')
  {
	 curId.className = 'rowOn';
	 classname = 'rowOn';
  }
  else
  {
	 curId.className = 'rowOff';
	 classname = 'rowOff';
  }
  */
  
}



function changeStyle(elemID, classpassed){
  document.getElementById([elemID]).className=classpassed;
}



function selectTab(name) {
  try {
	panel = document.getElementById(name + "Panel");
	tab = document.getElementById(name + "Tab");
	tab.className = "selected";
	panel.style.display = "block";
	} catch(e) {}
}

function unselectTab(name) {
  try {
	panel = document.getElementById(name + "Panel");
	tab = document.getElementById(name + "Tab");
	tab.className = " ";
	panel.style.display = "none";
	} catch(e) {}
}