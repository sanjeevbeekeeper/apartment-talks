function printDiv(working_container_btn){
	var printContents = document.getElementById('printMe').innerHTML;
	var originalContents = document.body.innerHTML;
	document.body.innerHTML = printContents;
	window.print();
	document.body.innerHTML = originalContents;
}