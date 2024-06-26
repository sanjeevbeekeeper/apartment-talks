// 
// Beekeeper Design Studio - 21 Jun 2024, 5:02 PM
var submit_btn = document.getElementById('submit_btn');
var div_id = document.getElementById('load');
// By default hide the 'Loading...' text
div_id.style.display = 'none';
// Run the function on click
submit_btn.onclick = function() {
    if (div_id.style.display !== 'none') {
        div_id.style.display = 'none';
    }
    else {
    	// Also disable the button when uploading the content.
        document.getElementById('submit_btn').classList.add("disabled");
        div_id.style.display = 'block';
    }
};