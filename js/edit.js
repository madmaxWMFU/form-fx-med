const main = document.querySelector(".user-list");

$(document).on("click", ".user-list", function(e) {
	e.stopPropagation();
	e.preventDefault();
	$.ajax({
	    url: "editUserInfo.php", 
	    data: {type: 2, idUser: $(e.target).data("id")}, 
	    type: 'POST', 
      	success: function(msg) {
			setUserInfo(JSON.parse(msg)[0]);
      	} 		
	})
})

$(document).on("click", ".editClient", function(e) {
	e.stopPropagation();
	e.preventDefault();
	$.ajax({
	    url: "editUserInfo.php", 
	    data: {type: 3, info: getNewUserInfo()}, 
	    type: 'POST', 
      	success: function(data) {
			console.log(JSON.parse(data));
			location.reload();
      	} 		
	})
})

$(document).on("click", ".singOut", function(){
	window.sessionStorage.removeItem('auth');
	window.open('../index.html', "_self");
})

function setUserInfo(info) {
	$("#hospital").val(info.hospital);
	$("#surnameDoctor").val(info.surnameDoctor);
	$("#region").val(info.region);
	$("#phoneDoctor").val(info.phoneDoctor);
	$("#emailDoctor").val(info.emailDoctor);
	$("#dateExamination").val(info.dateExamination);
	$("#surname").val(info.surnameUser);
	$("#name").val(info.nameUser);
	$("#lastName").val(info.lastNameUser);
	$("#dateBirthday").val(info.dateBirthday);
	$("input[value='"+info.gender+"']").prop('checked', true);
	$("#email").val(info.email);
	$("#phone").val(info.phone);
	setRadioGroup("heredityRadios", info.heredity);
	setRadioGroup("smokyRadios", info.smoky);
	setRadioGroup("wokrRadios", info.work);
	setRadioGroup("alergoRadios1", info.alergos1);
	setRadioGroup("alergoSeasonRadios1", info.alergoSeason1);
	setRadioGroup("alergoYearRadios1", info.alergoYear1);
	setRadioGroup("alergoRadios2", info.alergos2);
	setRadioGroup("alergoSeasonRadios2", info.alergoSeason2);
	setRadioGroup("alergoYearRadios2", info.alergoYear2);
	setRadioGroup("alergoRadios3", info.alergos3);
	setRadioGroup("alergoSeasonRadios3", info.alergoSeason3);
	setRadioGroup("alergoYearRadios3", info.alergoYear3);
	setRadioGroup("alergoRadios4", info.alergos4);
	setRadioGroup("alergoRadios5", info.alergos5);
	setRadioGroup("alergoRadios6", info.alergos6);
	setRadioGroup("alergoRadios7", info.alergos7);
	setRadioGroup("alergoRadios8", info.alergos8);
	setRadioGroup("alergoRadios9", info.alergos9);
	setRadioGroup("alergoRadios10", info.alergos10);
	$(".editClient").attr("data-id", info.idUser);
}

function setRadioGroup(vRadioObj, vValue) {
    var radios = document.getElementsByName(vRadioObj);
    for (var j = 0; j < radios.length; j++) {
        if (radios[j].value == vValue) {
            radios[j].checked = true;
            break;
        }
    }
}

function getNewUserInfo() {
	return {
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
		"idUser": $(".editClient").data("id")
	};
}

function init() {
	if(!window.sessionStorage.getItem('auth')){
		window.open('../index.html', "_self");
	} else {
		$.ajax({
		    url: "editUserInfo.php", 
		    data: {type: 1}, 
		    type: 'POST', 
	      	success: function(msg) {
				JSON.parse(msg).forEach(function(val) {
					main.insertAdjacentHTML("beforeEnd", `<div class="user-list-item" data-id="${val['idUser']}">${val['name']}</div>`);
				})
	      	} 		
		})
	}
}

init();

