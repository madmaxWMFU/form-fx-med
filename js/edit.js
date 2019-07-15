document.addEventListener("DOMContentLoaded", function() {
	if(!window.sessionStorage.getItem('auth')){
		window.open('../index.html', "_self");
	} else {
		$.ajax({
		    url: "editUserInfo.php", 
		    data: {type: 1}, 
		    type: 'POST', 
	      	success: function(msg) {
				arr = JSON.parse(msg);
				$(arr).each(function(key, val) {
					$(`<div class="user-list-item" data-id="${val['idUser']}">${val['name']}</div>`).appendTo(".user-list")
				})
	      	} 		
		})
	}
})

// $(document).on("click", ".addClient", function(e) {
// 	e.stopPropagation();
// 	e.preventDefault();
// 	if(checkInputs()){
// 		$.ajax({
// 		    url: "setData.php", 
// 		    dataType: 'json',
// 		    cache: false,
// 		    contentType: false,
// 		    processData: false,
// 		    data: getData(), 
// 		    type: 'POST', 
// 	      	success: function(msg) {
// 				clearInputs();
// 	      	} 		
// 		})
// 	} else {
// 		alert("Заповніть всі данні!");
// 	}
// })

$(document).on("click", ".singOut", function(){
	window.sessionStorage.removeItem('auth');
	window.open('../index.html', "_self");
})

// function init() {
// 	if(!window.sessionStorage.getItem('auth'))
// 		window.open('../index.html', "_self");
// }

// init();