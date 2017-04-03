$(document).ready(function() {
	$("#login").bind("click", function() {
		$("#shortlog").css("display", "none");
		$("#login").css("border", "0");
	});
})

$(document).ready(function() {
	$("#pass").bind("click", function() {
		$("#shortPass").css("display", "none");
		$("#pass").css("border", "0");
	});
})



function funPos() {
	
}


function funSuc(data) {

	// alert(data);

	if (data == "emptyLog") {
		$("#login").css("border", "solid 2px red");
	} 
	if (data == "emptyPass") {
		$("#pass").css("border", "solid 2px red");
	}

	if (data == "loginSmall") {
		$("#shortlog").css({"display":"inline", "height": "0"});
	} 
	if (data == "passSmall") {
		$("#shortPass").css({"display":"inline", "height": "0"});
	}

	if (data == "not1337") {
		$("#login").css("border", "solid 2px #8eb572");
	} else {
		$("#login").css("border", "solid 2px red");
	}

	//alert(data);

	if (data != "emptyLog" && data != "emptyPass" && data != "loginSmall" && data != "passSmall" 
		&& data != "") {
        document.location.href = 'http://alkosys.esy.es/site/admin.php';
    }
}