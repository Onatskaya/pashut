function showOffice(which,count) {
 if(document.getElementById('officeDescX')) {document.getElementById('officeDescX').style.display = 'none';}
 for(i=1;i<=count;i++) {
  if(document.getElementById('officeDesc'+i)) {
   document.getElementById('officeDesc'+i).style.display = 'none';
  }
 }
 if(document.getElementById('officeDesc'+which)) {
  document.getElementById('officeDesc'+which).style.display = 'inline';
 } 
}