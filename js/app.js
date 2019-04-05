init();
$(document).on("click", ".addClient", function(e) {
	e.stopPropagation();
	e.preventDefault();
	$.ajax({
	    url: "setData.php", 
	    dataType: 'json',
	    cache: false,
	    contentType: false,
	    processData: false,
	    data: getData(), 
	    type: 'POST', 
      	success: function(msg) {
      		console.log(msg);
      		//clean all item
      	} 		
	})
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

$(document).on("load", function() {
	var obj = JSON.parse(window.sessionStorage.getItem('auth'));
	if(obj['type'] != 0) {
		$(".regist").css("display", "none");
	}
})

$(document).on("click", ".singOut", function(){
	window.sessionStorage.removeItem('auth');
	window.open('../index.html', "_self");
})

function init() {
	if(!window.sessionStorage.getItem('auth'))
		window.open('../index.html', "_self");
}

function createTable(data) {
	var table = document.createElement("table");
	table.classList.add("table");
	table.classList.add("table-striped");
	table.classList.add("table-bordered");
	table.classList.add("table-responsive");
	var thead = document.createElement('thead');
	var tbody = document.createElement('tbody');
	var theadTr = document.createElement('tr');
	var theadTd1 = document.createElement('td');
	var theadTd2 = document.createElement('td');
	var theadTd3 = document.createElement('td');
	theadTd1.innerText = "Позначення";
	theadTd2.innerText = "Алерген";
	theadTd3.innerText = "kUA/L";
	theadTr.appendChild(theadTd1);
	theadTr.appendChild(theadTd2);
	theadTr.appendChild(theadTd3);
	thead.appendChild(theadTr);
	table.appendChild(thead);
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
	table.appendChild(tbody);
	return table;
}

$(document).on("click", ".finder", function(e) {
	e.stopPropagation();
	e.preventDefault();
	var user = JSON.stringify(window.sessionStorage.getItem('auth'));
	$.ajax({
	    url: "getData.php", 
	    data: {"msg": "getUserResult", "type": user['type']}, 
	    type: 'POST', 
      	success: function(arr) {
      		console.log(JSON.parse(arr));
      		$(".mainData").html(createTable(JSON.parse(arr)));
      	} 		
	})
})