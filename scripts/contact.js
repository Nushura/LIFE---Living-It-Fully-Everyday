// This code will only be executed after the full page has loaded
$(document).ready(function () {
    // The code below considers the id of the form which is 'contact_registration' in this case
    //  and thats how it connects the contact us form with this js file
    // Aterwards validations are carried out
    $("#contact_registration").validate({
        // Specifying validation rules
        rules: {
            // The name attribute of the input files are written on the left side
            // The validation rules are stated on the right side
            firstname: "required",
            lastname: "required",
            address: "required",
            phone: "required",
            email: {
                required: true,
                // built-in email rule is applied here to make sure user enters email in right format
                email: true
            },
            message: "required"
        },

        // The code below will specify the validation error messages if the input 
        // doesnt match with the validation rules mentioned above
        messages: {
            firstname: "First name is a required field",
            lastname: "Last name is a required field",
            address: "Address is a required field",
            phone: "Phone no. is a required field",
            email: "Please type a valid email address",
            message: "Required field! Please type your query"
        },

        // The code below makes sure that the form is submitted to the designated location
        // which is defined inside the "action" attribute.
        // It also make sure to submit form only when all the fields followed the validation rules,
        submitHandler: function (form) {
            form.submit();
        }
    });
});