$(document).ready(function() {
    // عند النقر على زر الإضافة
    $("#submitButton").click(function() {
        // جمع القيم من النموذج
        var first = $("#first").val();
        var med = $("#med").val();
        var last = $("#last").val();
        var address = $("#address").val();
        var age = $("#age").val();
        var phone = $("#phone").val();
        var blood = $("#inputState").val();

        // إعادة تعريف الرسائل للإخراج
        $(".errorMessage").html("");

        // إذا تم اجتياز جميع الشروط، يمكن تنفيذ الإجراء المطلوب هنا
        if (validateForm()) {
            // تنفيذ الإجراء المحدد في action
            $("#myForm").submit();
        }
    });

    // إضافة معالج الأحداث للتركيز على الحقول غير الصالحة
    $("#first").blur(validateFirstName);
    $("#med").blur(validateSecondName);
    $("#last").blur(validateThirdName);
    $("#address").blur(validateAdderss);
    $("#age").blur(validateAge);
    $("#phone").blur(validatePhoneNumber);
    $("#inputState").blur(selected);

    function validateFirstName() {
        if ($(this).val().length < 3) {
            $("#input1").html("لا يمكن قبول هذه القيمة").show();
        } else {
            $("#input1").hide();
        }
    }

    function validateSecondName() {
        if ($(this).val().length < 3) {
            $("#input2").html("لا يمكن قبول هذه القيمة").show();
        } else {
            $("#input2").hide();
        }
    }

    function validateThirdName() {
        if ($(this).val().length < 3) {
            $("#input3").html("لا يمكن قبول هذه القيمة").show();
        } else {
            $("#input3").hide();
        }
    }

    function validateAdderss() {
        if ($(this).val().length < 3) {
            $("#input4").html("لا يمكن قبول هذه القيمة").show();
        } else {
            $("#input4").hide();
        }
    }

    function validateAge() {
        var ageValue = parseInt($(this).val());
        if (ageValue < 17 || ageValue > 67 || isNaN(ageValue)) {
            $("#input5").html("العمر يجب أن يكون بين 17 و 67").show();
        } else {
            $("#input5").hide();
        }
    }

    function validatePhoneNumber() {
        if (!$(this).val().match(/^7[13780]\d{7}$/)) {
            $("#input6").html("73|71|70|77|78يجب إدخال رقم هاتف يمني مكون من 9 أرقام ويبدأ بالرقم").show();
        } else {
            $("#input6").hide();
        }
    }

    function selected() {
        if ($(this).val() == "null") {
            $("#input7").html("يجب اختيار فصيلة الدم").show();
        } else {
            $("#input7").hide();
        }
    }

    function validateForm() {
        validateFirstName();
        validateSecondName();
        validateThirdName();
        validateAdderss();
        validateAge();
        validatePhoneNumber();
        selected();

        var valid = true;

        $(".errorMessage").each(function() {
            if ($(this).is(":visible")) {
                valid = false;
            }
        });

        return valid;
    }
});
