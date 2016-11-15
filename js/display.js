var ns4 = (navigator.appName == 'Netscape' && parseInt(navigator.appVersion) == 4);
var ns6 = (document.getElementById)? true:false;
var ie4 = (document.all)? true:false;
var ie5 = false;

if (ie4) {
	if ((navigator.userAgent.indexOf('MSIE 5') > 0) || (navigator.userAgent.indexOf('MSIE 6') > 0)) {
		if(document.compatMode && document.compatMode == 'CSS1Compat') docRoot = 'document.documentElement';
		ie5 = true;
	}
	if (ns6) {
		ns6 = false;
	}
}


function findPosX(obj)
{
	var curleft = 0;
	if (obj.offsetParent)
	{
		while (obj.offsetParent)
		{
			curleft += obj.offsetLeft
			obj = obj.offsetParent;
		}
	}
	else if (obj.x)
		curleft += obj.x;
	return curleft;
}

function findPosY(obj)
{
	var curtop = 0;
	if (obj.offsetParent)
	{
		while (obj.offsetParent)
		{
			curtop += obj.offsetTop
			obj = obj.offsetParent;
		}
	}
	else if (obj.y)
		curtop += obj.y;
	return curtop;
}


/* alert('ns4 = ' + ns4 + '\nns6 = ' + ns6 + '\nie4=' + ie4 + '\nie5=' + ie5); */


function flipInfo(hide,show) {
 document.getElementById(hide).style.display='none';
 document.getElementById(show).style.display='block';
}

function goToPage(num,sort) {
 if(sort)
  document.goToForm.QUERYSORT.value = sort;
 document.goToForm.PAGENUM.value = num;
 document.goToForm.submit();
}

function printGoToPage(num) {
 document.printGoToForm.PAGENUM.value = num;
 document.printGoToForm.submit();
}

function doClip(type,id,remv,upd,dv,textlink) { 
 lnk = '/doclipboards.cfm?type=' + type + '&id=' + id;
 if(remv) {
  lnk = lnk + '&clipaction=rem';
 } else if(upd) {
  lnk = lnk + '&clipaction=upd';
 } else {
  lnk = lnk + '&clipaction=add';
 }
 
 if(dv) {
  lnk = lnk + '&div=' + dv;
 }
 if(textlink) {
  lnk = lnk + '&withtext=1';
 }
 
 window.clipsFrame.location.href = lnk;
}

function hideClipDiv() {
 document.mainClipForm.clip_notes.blur();
 document.getElementById('clipDiv').style.display='none'
}

function showClipDiv(linkEl) {
 theDiv = document.getElementById('clipDiv');
 
 if((ns4 || ns6)) {
  scrolloffset = self.pageYOffset;
  winHt = self.innerHeight
  winWid = self.innerWidth;
 } else {
  scrolloffset = document.body.scrollTop;
  winHt = document.body.clientHeight;
  winWid = document.body.clientWidth;
 }
 
 maxY = findPosY(linkEl) - 120;
 divHt = theDiv.style.height.substring(0,theDiv.style.height.indexOf('p')) - 0;
 divHt = divHt + 20;
 
 divBtm = maxY - scrolloffset + divHt + 10;
 
 if(divBtm > winHt) {
  divTop = winHt - divHt - 10 + scrolloffset;
 } else {
  divTop = maxY;
 }
 
 parent.document.getElementById('clipDiv').style.top = (divTop-300) + 'px';
 parent.document.getElementById('clipDiv').style.left = '150px';
 parent.document.getElementById('clipDiv').style.display='block';
}


function photoWin(url) {
 newPWin = window.open('/wsrinternals/photoview.cfm?photo=' + url,'_blank','toolbar=no,status=no,width=300,height=150,directories=no,scrollbars=no,location=no,resize=yes,resizeable=yes,menubar=no');
 newPWin.focus();
}