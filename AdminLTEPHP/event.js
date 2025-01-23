     document.getElementById("registrationForm").addEventListener("submit", function(event) {  
        let isValid = true;
        document.querySelectorAll(".error").forEach(function(span) {
            span.textContent = "";
        });
    
        const firstname = document.getElementById("firstname").value;
        const firstnameErr = document.getElementById("firstnameErr");
        if (firstname.trim() === "") {
            firstnameErr.textContent = "First Name is required";
            isValid = false;
        } else if (!/^[a-zA-Z ]*$/.test(firstname)) {
            firstnameErr.textContent = "Only letters and white space are allowed";
            isValid = false;
        }
    
        const lastname = document.getElementById("lastname").value;
        const lastnameErr = document.getElementById("lastnameErr");
        if (lastname.trim() === "") {
            lastnameErr.textContent = "Last Name is required";
            isValid = false;
        } else if (!/^[a-zA-Z ]*$/.test(lastname)) {
            lastnameErr.textContent = "Only letters and white space are allowed";
            isValid = false;
        }
    
        const email = document.getElementById("email").value;
        const emailErr = document.getElementById("emailErr");
        if (email.trim() === "") {
            emailErr.textContent = "Email is required";
            isValid = false;
        } else if (!/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email)) {
            emailErr.textContent = "Invalid email format";
            isValid = false;
        }
    
        const password = document.getElementById("password").value;
        const passwordErr = document.getElementById("passwordErr");
        if (password.trim() === "") {
            passwordErr.textContent = "Password is required";
            isValid = false;
        } else if (!/^[a-zA-Z0-9!@#\$%\^\&*_=+-]{8,12}$/.test(password)) {
            passwordErr.textContent = "Password must be between 8 and 12 characters and contain letters, numbers, and special characters";
            isValid = false;
        }
        const cpassword = document.getElementById("cpassword").value;
        const cpasswordErr = document.getElementById("cpasswordErr");
        if (cpassword.trim() === "") {
            cpasswordErr.textContent = "Confirm Password is required";
            isValid = false;
        } else if (password !== cpassword) {
            cpasswordErr.textContent = "Passwords do not match";
            isValid = false;
        }
        const image = document.getElementById("image").files[0];
        const imageErr = document.getElementById("imageErr");
        if (!image) {
            imageErr.textContent = "Please select an image to upload.";
            isValid = false;
        } else {
            const fileExt = image.name.split('.').pop().toLowerCase();
            if (!["jpg", "jpeg", "png", "gif"].includes(fileExt)) {
                imageErr.textContent = "Invalid file type. Only JPG, JPEG, PNG, GIF are allowed.";
                isValid = false;
            } else if (image.size > 5000000) {
                imageErr.textContent = "File size exceeds the limit of 5MB.";
                isValid = false;
            }
        }
        const number = document.getElementById("number").value;
        const numberErr = document.getElementById("numberErr");
        if (number.trim() === "") {
            numberErr.textContent = "Phone Number is required";
            isValid = false;
        } else if (!/^\d{10}$/.test(number)) {
            numberErr.textContent = "Mobile no must contain 10 digits.";
            isValid = false;
        }
    
        const message = document.getElementById("message").value;
        const messageErr = document.getElementById("messageErr");
        if (message.trim() === "") {
            messageErr.textContent = "Address is required";
            isValid = false;
        }
        const genderErr = document.getElementById("genderErr");
        if (!document.querySelector('input[name="gender"]:checked')) {
            genderErr.textContent = "Gender is required";
            isValid = false;
        }
        const hobbyErr = document.getElementById("hobbyErr");
        if (!document.querySelector('input[name="hobby[]"]:checked')) {
            hobbyErr.textContent = "At least one hobby must be selected";
            isValid = false;
        }
        const country = document.getElementById("country").value;
        const countryErr = document.getElementById("countryErr");
        if (country.trim() === "") {
            countryErr.textContent = "Country is required";
            isValid = false;
        }
    
        if (isValid) {
       
            const formData = new FormData(document.getElementById("registrationForm"));
            event.preventDefault();
            $.ajax({
                url: 'ajaxinsert.php',
                type: 'POST',
                data: formData,
                success: function(response) {
                    console.log("Form successfully submitted:", response);
                },
                error: function(status, error) {
                    console.error("Error:", status, error);
                }
            });   
        } 
    });



