document.addEventListener("DOMContentLoaded", function() {
    var elements = document.getElementsByTagName("INPUT");
	var obj = JSON.parse(window.sessionStorage.getItem('auth'));
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("Заповніть поле або виберіть один із варіантів");
            }
        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    }

	if(obj['type'] != 0) {
		$(".regist").css("display", "none");
	}
})

$(document).on("click", ".addClient", function(e) {
	e.stopPropagation();
	e.preventDefault();
	if(checkInputs()){
		$.ajax({
		    url: "setData.php", 
		    dataType: 'json',
		    cache: false,
		    contentType: false,
		    processData: false,
		    data: getData(), 
		    type: 'POST', 
	      	success: function(msg) {
				clearInputs();
	      	} 		
		})
	} else {
		alert("Заповніть всі данні!");
	}
})

$(document).on("click", ".singOut", function(){
	window.sessionStorage.removeItem('auth');
	window.open('../index.html', "_self");
})

$(document).on("keyup", ".client-id", function() {
	if($(this).val().length > 0) {
		$.ajax({
			type: "POST",
			url: "getData.php",
			data: {"msg": "getClientName", "value": $(this).val()},
			success: function(arr) {
				autocomplete(document.getElementById("client-id"), JSON.parse(arr));
			}
		})
	} else {
		$(this).removeAttr("data-id");
	}
})

$(document).on("click", ".find-alergo", function() {
	var region = JSON.parse(window.sessionStorage.getItem('auth'));
	if(!$.isEmptyObject(getFindData())){
		if($(".data-wrap").css("display") == "block") {
			$(".data-wrap").toggle();
			$(".msg-wrap").toggle();
			$(".msg").text("Виберіть данні для пошуку!");
		}
		$.ajax({
			type: "POST",
			url: "getData.php",
			data: {"msg": "searchAlergo", "data": getFindData(), "regionType": region["type"]},
			beforeSend: function() {
				$(".load-wrap").toggle();
				$(".msg-wrap").toggle();
			},
			success: function(arr) {
				var data = JSON.parse(arr);
				if(!data.error) {			
					$(".remove-rows").remove();
					$(".load-wrap").toggle();
					$(".data-wrap").toggle();
					var str = "";
					for(var i=0; i<data.length; i++) {
						str += "<tr class='remove-rows'>";
						for(var j=0; j<data[i].length; j++) {
							str += "<td>"+data[i][j]+"</td>";
						}
						str += "</tr>";
					}		
					$(str).appendTo("tbody");
				} else {
					$(".data-wrap").css("display", "none");
					$(".load-wrap").css("display", "none");
					$(".remove-rows").remove();				
					$(".msg-wrap").css("display", "block")
					$(".msg").text("Дані відсутні!");
				}
			}
		})
	} else {
		if($(".data-wrap").css("display") == "block") {
			$(".data-wrap").toggle();
		}
		$(".msg-wrap").css("display", "block");
		$(".msg").text("Виберіть данні для пошуку!");
	}
})

$(document).on("click", ".data-download", function() {
	doit('xlsx')
})

$(document).on("click", ".clear-find-inputs", function() {
	clearFindData();
})

function init() {
	if(!window.sessionStorage.getItem('auth'))
		window.open('../index.html', "_self");
}

function getData() {
	var fileData = $("#results").prop("files")[0]; 
	var formData = new FormData();
	var userInfo = {
		"surname": $("#surname").val(),
		"name": $("#name").val(),
		"lastName": $("#lastName").val(),
		"dateBirthday": $("#dateBirthday").val(),
		"gender": $("[name='genderRadios']:checked").val(),
		"email": $("#email").val(),
		"phone": $("#phone").val(),
		"address": $("#address").val(),
		"region": $("#region").val(),
		"heredity": $("[name='heredityRadios']:checked").val(),
		"smoky": $("[name='smokyRadios']:checked").val(),
		"work": $("[name='wokrRadios']:checked").val(),
		"alergo1": $("[name='alergoRadios1']:checked").val(),
		"alergoSeason1": $("[name='alergoSeasonRadios1']:checked").val(),
		"alergoYear1": $("[name='alergoYearRadios1']:checked").val(),
		"alergo2": $("[name='alergoRadios2']:checked").val(),
		"alergoSeason2": $("[name='alergoSeasonRadios2']:checked").val(),
		"alergoYear2": $("[name='alergoYearRadios2']:checked").val(),
		"alergo3": $("[name='alergoRadios3']:checked").val(),
		"alergoSeason3": $("[name='alergoSeasonRadios3']:checked").val(),
		"alergoYear3": $("[name='alergoYearRadios3']:checked").val(),
		"alergo4": $("[name='alergoRadios4']:checked").val(),
		"alergo5": $("[name='alergoRadios5']:checked").val(),
		"alergo6": $("[name='alergoRadios6']:checked").val(),
		"alergo7": $("[name='alergoRadios7']:checked").val(),
		"alergo8": $("[name='alergoRadios8']:checked").val(),
		"alergo9": $("[name='alergoRadios9']:checked").val(),
		"alergo10": $("[name='alergoRadios10']:checked").val(),
		"hospital": $("#hospital").val(),
		"surnameDoctor": $("#surnameDoctor").val(),
		"phoneDoctor": $("#phoneDoctor").val(),
		"emailDoctor": $("#emailDoctor").val(),
		"dateExamination": $("#dateExamination").val(),
		"checkItem": Math.floor(Date.now()),
	};
	formData.append("file", fileData);

	for ( var key in userInfo ) {
    	formData.append(key, userInfo[key]);
	}
	return formData;
}

function checkInputs() {
	var state = true;
	$(".findForm").find("input[type='text']").each(function() {
		if($(this).val() == "")
			state = false;
	})
	$(".findForm").find("input[type='email']").each(function() {
		if($(this).val() == "")
			state = false;
	})	
	$(".findForm").find("input[type='date']").each(function() {
		if($(this).val() == "")
			state = false;
	})	
	if($("[name='genderRadios']:checked").length <= 0) {
		state = false;
	}	
	if($("[name='heredityRadios']:checked").length <= 0) {
		state = false;
	}	
	if($("[name='smokyRadios']:checked").length <= 0) {
		state = false;
	}	
	if($("[name='wokrRadios']:checked").length <= 0) {
		state = false;
	}
	if($("[name='alergoRadios1']:checked").length <= 0) {
		state = false;
	}
	if($("[name='alergoSeasonRadios1']:checked").length <= 0) {
		state = false;
	}
	if($("[name='alergoYearRadios1']:checked").length <= 0) {
		state = false;
	}
	if($("[name='alergoRadios2']:checked").length <= 0) {
		state = false;
	}
	if($("[name='alergoSeasonRadios2']:checked").length <= 0) {
		state = false;
	}
	if($("[name='alergoYearRadios2']:checked").length <= 0) {
		state = false;
	}
	if($("[name='alergoRadios3']:checked").length <= 0) {
		state = false;
	}
	if($("[name='alergoSeasonRadios3']:checked").length <= 0) {
		state = false;
	}
	if($("[name='alergoYearRadios3']:checked").length <= 0) {
		state = false;
	}
	if($("[name='alergoRadios4']:checked").length <= 0) {
		state = false;
	}
	if($("[name='alergoRadios5']:checked").length <= 0) {
		state = false;
	}
	if($("[name='alergoRadios6']:checked").length <= 0) {
		state = false;
	}
	if($("[name='alergoRadios7']:checked").length <= 0) {
		state = false;
	}
	if($("[name='alergoRadios8']:checked").length <= 0) {
		state = false;
	}
	if($("[name='alergoRadios9']:checked").length <= 0) {
		state = false;
	}	
	if($("[name='alergoRadios10']:checked").length <= 0) {
		state = false;
	}
	if($(".findForm").find("select").val() == "") {
		state = false;
	}
	if($("[type='file']").get(0).files.length == 0) {
		state = false;
	}
	
	return state;
}

function clearInputs() {
	$(".findForm").find("input[type='text']").val("");
	$(".findForm").find("input[type='email']").val("");
	$(".findForm").find("input[type='date']").val("");
	$(".findForm").find("input[type='radio']").prop("checked", false);
	$(".findForm").find("#region").prop("selectedIndex", 0);
	$(".findForm").find("[type='file']").replaceWith($(".findForm").find("[type='file']").val('').clone(true));
}

function getFindData() {
	var features = [],
		obj = {};

	if($(".client-id").attr("data-id")) {
		obj["id_user"] = $(".client-id").attr("data-id");
	}	

	if($(".client-age__first").val() !== "" && $(".client-age__second").val() !== "") {
		obj["age1"] = $(".client-age__first").val();
		obj["age2"] = $(".client-age__second").val();
	}

	if($("[name='client-gender']:checked").length === 1) {
		obj[$("[name='client-gender']:checked").data("value")] =  $("[name='client-gender']:checked").val();
	} 

	if($("[name='client-work']:checked").length === 1) {
		obj[$("[name='client-work']:checked").data("value")] =  $("[name='client-work']:checked").val();
	} 	

	if($(".alergoFind:checked").length != 0) {
		$(".alergoFind:checked").each(function() {
			features.push($(this).data("value"));
		})		
		obj["clientFeatures"] = features;
	}
	return obj;
}

function clearFindData() {
	$(".client-id").val("").removeAttr("data-id");
	$(".client-age__first").val("");
	$(".client-age__second").val("");
	$("[name='client-gender']").prop("checked", false);
	$("[name='client-work']").prop("checked", false);
	$(".alergoFind").prop("checked", false);
}

function doit(type, fn, dl) {
    var elt = document.getElementById('data-table');
    var wb = XLSX.utils.table_to_book(elt, {sheet:"Sheet JS"});
    return dl ?
        XLSX.write(wb, {bookType:type, bookSST:true, type: 'base64'}) :
        XLSX.writeFile(wb, fn || ('results.' + (type || 'xlsx')));
}

init();
