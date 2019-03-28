$(".addClient").on("click", function() {
	// $.ajax({
 //      type: "POST",
 //      url: "pages/setData.php",
 //      data: getData(),
 //      success: function() {
 //      	alert("ok");
 //      } 		
	// })
	checkInput();
	console.log(getData());
})

function getData() {
	var form = new FormData(); 
	return {
		surname: $("#surname").val(),
		name: $("#name").val(),
		lastName: $("#lastName").val(),
		dateBirthday: $("#dateBirthday").val(),
		gender: $("[name='genderRadios']:checked").val(),
		email: $("#email").val(),
		phone: $("#phone").val(),
		address: $("#address").val(),
		addressType: $("[name='addressRadios']:checked").val(),
		heredity: $("[name='heredityRadios']:checked").val(),
		smoky: $("[name='smokyRadios']:checked").val(),
		work: $("[name='wokrRadios']:checked").val(),
		alergo1: $("[name='alergoRadios1']:checked").val(),
		alergoSeason1: $("[name='alergoSeasonRadios1']:checked").val(),
		alergoYear1: $("[name='alergoYearRadios1']:checked").val(),
		alergo2: $("[name='alergoRadios2']:checked").val(),
		alergoSeason2: $("[name='alergoSeasonRadios2']:checked").val(),
		alergoYear2: $("[name='alergoYearRadios2']:checked").val(),
		alergo3: $("[name='alergoRadios3']:checked").val(),
		alergoSeason3: $("[name='alergoSeasonRadios3']:checked").val(),
		alergoYear3: $("[name='alergoYearRadios3']:checked").val(),
		alergo4: $("[name='alergoRadios4']:checked").val(),
		alergo5: $("[name='alergoRadios5']:checked").val(),
		alergo6: $("[name='alergoRadios6']:checked").val(),
		alergo7: $("[name='alergoRadios7']:checked").val(),
		alergo8: $("[name='alergoRadios8']:checked").val(),
		alergo9: $("[name='alergoRadios9']:checked").val(),
		alergo10: $("[name='alergoRadios10']:checked").val(),
		hospital: $("#hospital").val(),
		surnameDoctor: $("#surnameDoctor").val(),
		phoneDoctor: $("#phoneDoctor").val(),
		emailDoctor: $("#emailDoctor").val(),
		dateExamination: $("#dateExamination").val(),
		results: form.append("temp.xlsx", $("[name='results']")[0].files),
	};
}

function checkInput() {
	for(var i= 0; i<= $("input").length; i++) {
		if(!$(this).is('checked') || $(this).val() === "" )
			alert("Не всі поля заповненні!");
			break;
	}

	// for(var i= 0; i<= $("[type='text']").length; i++) {
	// 	if(!$(this).is('checked'))
	// 		alert("Не всі поля заповненні!");
	// 		break;
	// }

	// for(var i= 0; i<= $("[type='email']").length; i++) {
	// 	if(!$(this).is('checked'))
	// 		alert("Не всі поля заповненні!");
	// 		break;
	// }

	// for(var i= 0; i<= $("[type='date']").length; i++) {
	// 	if(!$(this).is('checked'))
	// 		alert("Не всі поля заповненні!");
	// 		break;
	// }
}