        $noError = true;
        $('#email').keyup(function() {
			$('span.error-keyup-3').remove();
			var inputVal = $(this).val();
			var regex =  /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if(!regex.test(inputVal)) {	
                $(this).after('<span class="error error-keyup-3">Invalid Email Format</span>');
                noError = false;
            }
            else{
                noError = true;
            }
		});
        
        $('#Contact-Number').keyup(function() {
			$('span.error-keyup-3').remove();
			var inputVal2 = $(this).val();
			var Numregex =  /^(\+\d{1,3}[- ]?)?\d{10}$/;
			if(!Numregex.test(inputVal2)) {	
                $(this).after('<span class="error error-keyup-3">Please Enter correct Format</span>');
                noError = false;
            }
            else{
                noError = true;
            }
		});
        $('#password').keyup(function() {
			$('span.error-keyup-3').remove();
			var inputVal3 = $(this).val();
			var PassReg = /^([a-zA-Z0-9]{0,8})$/;
			if(!PassReg.test(inputVal3)) {	
                $(this).after('<span class="error error-keyup-3">Maximum 8 characters</span>');
                noError = false;
        }
        else{
            noError = true;
        }
		});

        $('#passwordConfirm').keyup(function() {
		$('span.error-keyup-3').remove();
		var inputVal4 = $(this).val();
			
		if($("#password").val() != $("#passwordConfirm").val()) {	
        $(this).after('<span class="error error-keyup-3">Password Doesnot Match</span>');
        noError = false;
        }
        else{
            noError = true;
        }
		});

        $("#submitButton").click(function()
            {
                
                var fieldMissing="";
                if($("#name").val() == "")
                {
                    fieldMissing += "<br>Name";
                }
                if($("#last-Name").val() == "")
                {
                    fieldMissing += "<br>Last-Name";
                }
                if($("#email").val() == "")
                {
                    fieldMissing += "<br>Email";
                }
                
                if($("#Contact-Number").val() == "")
                {
                    fieldMissing += "<br>Contact-Number";
                }
                
                if($("#password").val() == "")
                {
                    fieldMissing += "<br>Password";
                }
                
                if($("#passwordConfirm").val() == "")
                {
                    fieldMissing += "<br>Confirm Password";
                }
                if(fieldMissing != "")
                {
                    alert("The following fields are missing:" +fieldMissing);
                }
               else if(noError)
                {
                    alert("login succeed");
                }
                else{
                    alert("fail");
                }
            });

