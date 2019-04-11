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

$(document).on("click", ".singOut", function(){
	window.sessionStorage.removeItem('auth');
	window.open('../index.html', "_self");
})

function init() {
	if(!window.sessionStorage.getItem('auth'))
		window.open('../index.html', "_self");
}

function createTable(data, heads, code) {
	var table = document.createElement("table");
	table.classList.add("table");
	table.classList.add("table-striped");
	table.classList.add("table-bordered");
	table.classList.add("table-responsive");
	table.classList.add("table-hover");
	var thead = document.createElement('thead');
	thead.classList.add("text-center");
	var tbody = document.createElement('tbody');
	var theadTr = document.createElement('tr');
	for(var j=0; j<heads.length; j++) {
		var theadTd = document.createElement('th');
		theadTd.appendChild(document.createTextNode(heads[j]));
		theadTr.appendChild(theadTd);
	}
	thead.appendChild(theadTr);
	table.appendChild(thead);
	if(code) {
		for(var i=0; i<data.length; i++) {
			for(item in data[i]) {
				tbodyTr = document.createElement('tr');
				tbodyTd = document.createElement('td');
				tbodyTd.innerText = item;
				tbodyTr.appendChild(tbodyTd);
				tbodyTd.colSpan = 3;
				tbody.appendChild(tbodyTr);
				for(value in data[i][item]) {
					tbodyTr = document.createElement('tr');
					tbodyTd = document.createElement('td');
					tbodyTd.innerText = value;
					tbodyTd.colSpan = 3;
					tbodyTr.appendChild(tbodyTd);
					tbody.appendChild(tbodyTr);
					for(var val in data[i][item][value]) {
						tbodyTr = document.createElement('tr');
						tbodyTd1 = document.createElement('td');
						tbodyTd2 = document.createElement('td');
						tbodyTd3 = document.createElement('td');
						tbodyTd1.innerText = val;
						tbodyTd2.innerText = data[i][item][value][val][1];
						tbodyTd3.innerText = data[i][item][value][val][0];
						tbodyTr.appendChild(tbodyTd1);
						tbodyTr.appendChild(tbodyTd2);
						tbodyTr.appendChild(tbodyTd3);
						tbody.appendChild(tbodyTr);
					}				
				}
			}
		}
	} else {
		for(var i=0; i<data.length; i++) {
			tbodyTr = document.createElement('tr');
			tbodyTr.setAttribute('data-id', data[i]['id']);
			tbodyTd1 = document.createElement('td');
			tbodyTd2 = document.createElement('td');
			tbodyTd3 = document.createElement('td');
			tbodyTd4 = document.createElement('td');
			tbodyTd5 = document.createElement('td');
			tbodyTd6 = document.createElement('td');
			tbodyTd1.innerText = data[i]['client'];
			tbodyTd2.innerText = data[i]['email'];
			tbodyTd3.innerText = data[i]['phoneClient'];
			tbodyTd4.innerText = data[i]['date'];
			tbodyTd5.innerText = data[i]['doctor'];
			tbodyTd6.innerText = data[i]['phoneDoctor'];
			tbodyTr.appendChild(tbodyTd1);
			tbodyTr.appendChild(tbodyTd2);
			tbodyTr.appendChild(tbodyTd3);
			tbodyTr.appendChild(tbodyTd4);
			tbodyTr.appendChild(tbodyTd5);
			tbodyTr.appendChild(tbodyTd6);
			tbody.appendChild(tbodyTr);			
		}
	}
	table.appendChild(tbody);
	return table;
}

function num2str(n, text_forms) {
    n = Math.abs(n) % 100;
    var n1 = n % 10;
    
    if(n > 10 && n < 20) {
        return text_forms[2];
    }
    
    if(n1 > 1 && n1 < 5) {
        return text_forms[1];
    }
    
    if(n1 == 1) {
        return text_forms[0];
    }
    
    return text_forms[2];
}

function getInputData() {
	var arrInput = [];
	$("[name='alergo']:checked").each(function() {
		arrInput.push($(this).val());
	})
	return arrInput;
}

// $(document).on("change", "[name='alergo']", function() {
// 	var countAlegro = $("[name='alergo']:checked").length;
// 	if(countAlegro != 0){
// 		$(".find-alergo-button").val("Пошук по: "+countAlegro+" "+num2str(countAlegro, ['алергенту', 'алергентах', 'алергентів']));
// 	} else {
// 		$(".find-alergo-button").val("Пошук");
// 	}
// })

// $(document).on("click", ".find-alergo-button", function(e) {
// 	e.stopPropagation();
// 	e.preventDefault();
// 	var user = JSON.parse(window.sessionStorage.getItem('auth'));
// 	$.ajax({
// 	    url: "getData.php", 
// 	    dataType: "json",
// 	    data: {"msg": "searchAlergoUser", "data": getInputData, "region": user["type"]}, 
// 	    type: 'POST', 
//       	success: function(arr) {
//       		if(arr.length != 0) {
//       			$(".mainData").html(createTable(arr, ["П.І.Б. клієнта", "E-mail", "Телефон клієнта", "Дата тестування", "П.І.Б. лікаря", "Телефон лікаря"], false));
//       		} else {
//       			$(".mainData").html("<div class='no-data text-center'><p>Дані відсутні!</p></div>");
//       		}	
//       		$('.panel-collapse.in').collapse('hide');
//       		$('html, body').animate({ scrollTop: 0 }, 'fast');
//       	} 		
// 	})	
// })

$(document).on("click", ".find-alergo-button", function(e) {
	e.stopPropagation();
	e.preventDefault();
	var user = JSON.parse(window.sessionStorage.getItem('auth'));
	$.ajax({
	    url: "getData.php", 
	    dataType: "json",
	    data: {"msg": "searchAlergoUser", "data": getInputData, "region": user["type"]}, 
	    type: 'POST', 
      	success: function(arr) {
      		if(arr.length != 0) {
      			$(".mainData").html(createTable(arr, ["П.І.Б. клієнта", "E-mail", "Телефон клієнта", "Дата тестування", "П.І.Б. лікаря", "Телефон лікаря"], false));
      		} else {
      			$(".mainData").html("<div class='no-data text-center'><p>Дані відсутні!</p></div>");
      		}	
      		$('.panel-collapse.in').collapse('hide');
      		$('html, body').animate({ scrollTop: 0 }, 'fast');
      	} 		
	})	
})

$(document).on("click", ".table", function(e) {
	$.ajax({
	    url: "getData.php", 
	    dataType: "json",
	    data: {"msg": "getUserResult", "id": $(e.target).parent().data("id")}, 
	    type: 'POST', 
      	success: function(arr) {
      		$(document).find(".modal-body").html(createTable(arr, ["Позначення", "Алерген", "kUA/L"], true));
      		$(document).find('.modal').modal('show');
      	} 		
	})
})

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

init();
