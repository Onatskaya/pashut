function phoneNumSrch() {
 if(document.srchForm.checkphoneA.value.length != 3 || document.srchForm.checkphoneB.value.length != 3 || document.srchForm.checkphoneC.value.length != 4) {
  alert('Please enter a valid phone number');
 } else {
  document.srchForm.submit();
 }
}