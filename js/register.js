(function() {
    var $payPalForm = $("#payPalRegister");

    $("#registrationForm").submit(function() {
        var registrationRequest = {
            EventName: $(".register-event__title").text(),
            EventDescription: $("#pipedEventSummary").val(),
            Name: $("#name").val(),
            Address: $("#address1").val(),
            Town: $("#town").val(),
            Phone: $("#phone").val(),
            Email: $("#email").val(),
            SpecialInstructions: $("#specialInstructions").val(),
            PaymentAmount: $("#paymentAmount").val()
        } 

        $.ajax({
            url: ish.serviceUrl + "/api/Registration",
            method: "POST",
            data: JSON.stringify(registrationRequest),
            dataType: "json",
            contentType: "application/json"
        })
        .done(function(data) {
            if (data.IsValid) {
                setFormField("item_number", data.RegistrationId);
                setFormField("amount", data.PaymentAmount);
                setFormField("first_name", data.FirstName);
                setFormField("last_name", data.LastName);
                setFormField("address1", data.Address1);
                setFormField("city", data.City);
                setFormField("night_phone_a", data.PhoneAreaCode);
                setFormField("night_phone_b", data.PhonePrefix);
                setFormField("night_phone_c", data.PhoneSuffix);
                setFormField("email", data.Email);

                $payPalForm.submit();
            }
            else {

            }
        });

        return false;
    });

    function setFormField(name, value) {
        if (value) {
            $payPalForm.find("[name='" + name + "']").val(value);
        }
    }

})();