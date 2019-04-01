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


function setElem() {
	$("[type='radio']").each(function(){
		$(this).prop("checked", true );
	})
	$("[type='text']").each(function(){
		$(this).val("adsfdas");
	})
	$("[type='email']").each(function(){
		$(this).val("adsfdas");
	})
	$("[type='date']").each(function(){
		$(this).val("1992-05-19");
	})
}

$(document).on("click", ".singOut")