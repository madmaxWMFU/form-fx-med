$(document).on("click", ".connect", function(e) {
	e.stopPropagation();
	e.preventDefault();
	$.ajax({
	    url: "pages/auth.php", 
	    data: getData(), 
	    type: 'POST', 
      	success: function(msg) {
      		$(".line").removeClass("error");
      		checkUser(JSON.parse(msg));
      	} 		
	})
})

function getData() {
	return {
		"login": $(".login-user").val(),
		"pass": $(".pass-user").val(),
	} 
}

function saveUserConf(arr) {
	window.open('pages/main.html',"_self");
	window.sessionStorage.setItem("auth", JSON.stringify(arr));
}

function checkUser(arr) {
	arr.hasOwnProperty("error") ? error() : saveUserConf(arr);
}

function error() {
	$("input").val("");
	$(".line").addClass("error");
}