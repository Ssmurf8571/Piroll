
/*loader*/

$(window).on('load', function() {

	$(".loader_inner").fadeOut();
	$(".loader").delay(400).fadeOut("slow");

});



$( "#login_btn" ).click(function() {

	document.getElementById("id01").style.display = "block";


	// Get the modal
	var modal = document.getElementById('id01');

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
});



//	$( "#close" ).click(function() {
$( ".close" ).click(function() {

	document.getElementById("id01").style.display = "none";
	document.getElementById("id02").style.display = "none";

});

$(".cancelbtn").click(function() {
    document.getElementById("id01").style.display = "none";
	document.getElementById("id02").style.display = "none";
});


$( ".register_btn" ).click(function() {

	document.getElementById("id01").style.display = "none";
	document.getElementById("id02").style.display = "block";


	  // Get the modal
	  var modal = document.getElementById('id02');
  
	  // When the user clicks anywhere outside of the modal, close it
	  window.onclick = function(event) {
		  if (event.target == modal) {
			  modal.style.display = "none";
		  }
	  }
});

var login__btn = document.getElementById('login__btn');

login__btn.addEventListener('click', function() {

	document.getElementById("profile__block").classList.toggle('active-profile');
});