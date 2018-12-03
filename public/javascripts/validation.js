$().ready(function () {
    $("#add").validate({
        rules: {
            lname: {
                required: true,
                minlength: 5
            },
            phone: {
                required: true
            },
            email: {
                required: true
            },
            address: {
                required: true,
                minlength: 5
            },
            nationality: {
                required: true
            },
            dob: {
                required: true,
                date:true
            },
            faculty: {
                required: true
            },
            modules:{
                required: true
            }
        },
        messages: {
            lname: {
                required: "Please enter lecturers name",
                minlength: "lecturers name must have at least 5 characters"
            },
            phone: {
                required: "Please enter phone number"
            },
            email: "Please enter email",
            address: {
                required: "Please mention address",
                minlength: "Address must contain at least 5 characters"
            },
            nationality: "Please enter nationality",
            faculty:"Please select faculty name",
            modules: "Please select module name"
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
            form.submit();
        }
    })
});
