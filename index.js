$(document).ready(function(){
	// Ahorro Selection Dropdown Click 
	$(".dropdown-item").click(function(){
		var selectedAhorro = $(this).text();
		$("#ahorroDisplayed").text(selectedAhorro);
		$(".mainDash").load("ahorroParticipants.php");
	});
	
	// New Ahorro Button Click //
	$("#nuevoAhorroButton").click(function(){
		$("#ahorroDisplayed").hide();
		$("#nuevoAhorroButton").text("Guardar");
		$(".mainDash").load("nuevoAhorro.php");
	});
	
	
});