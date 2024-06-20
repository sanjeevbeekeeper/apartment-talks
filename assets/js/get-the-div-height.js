// 11 Jun 2024, 4:57 PM
// Get the Div height
var clientHeight = document.getElementById('divheight').offsetHeight;
// Check if the container height is greater than the recommended height
if (clientHeight > 413) {
	// Fail
	document.getElementById('output_divheight_helptext').innerHTML = "Cannot save as PDF. The height of the content has to be less than the Recommended height, <strong>413 px</strong>. Remove some words to shorten the content.";
	document.getElementById('output_divheight').innerHTML = clientHeight + " &#10008;";
	// Add class to the div container
	document.getElementById('working_container').classList.add("text-danger");
	// Add class to the output text
	document.getElementById('output_divheight').classList.add("text-danger", "fw-bold");
	document.getElementById('save-as-pdf').classList.add("disabled");
}else {
	// Success
	// Less than 413 height
	document.getElementById('output_divheight').innerHTML = "<strong>"+ clientHeight + "px &#x2714;</strong>";
}