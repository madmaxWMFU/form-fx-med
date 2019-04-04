$(document).on("click", ".createUser", function(e) {
	e.stopPropagation();
	e.preventDefault();
	$.ajax({
	    url: "registration.php", 
	    data: getData(), 
	    type: 'POST', 
      	success: function(msg) {
			// window.open('main.html',"_self");
      	} 		
	})
})

function getData() {
	return {
		"login": $(".login-user").val(),
		"pass": $(".pass-user").val(),
		"type": $("#region").val(),
	} 
}

function init() {
	if(window.sessionStorage.getItem('auth')) {
		var obj = JSON.parse(window.sessionStorage.getItem('auth'));
		if(obj['type'] != 0) {
			// window.open('../index.html', "_self");
			window.open('main.html', "_self");
		} 
	} else {
		window.open('../index.html', "_self");
	}
}

init();