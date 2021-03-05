
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




$( "#close" ).click(function() {

	document.getElementById("id01").style.display = "none";
	document.getElementById("id02").style.display = "none";

});

$(".cancelbtn").click(function() {
    document.getElementById("id01").style.display = "none";
	document.getElementById("id02").style.display = "none";
});

$(".close").click(function() {
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

	  .querySelectorAll('.register_pwd')
	  .forEach((el)=>{
		  el.addEventListener("change",(e)=>{
			  let [a,b]=[
				  document.querySelector('input.register_pwd:nth-child(7)'),
				  document.querySelector('input.register_pwd:nth-child(8)')
			  ];
			  let btn=document.querySelector('.form_register__button');
			  console.log(a.value,b.value);
			  btn.disabled=(a.value!=b.value);
			  

		  });
	  });
});