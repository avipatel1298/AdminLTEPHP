$(document).ready(function() {
    $('#registrationForm').on('submit', function(e) {
        e.preventDefault(); 
        
        let formData = $(this).serialize(); 
        // var formData = new FormData(this);
        // var formData = new FormData($(this)[0]);
        // var formname = $(this).attr('name');
        // let formData = $(this).serialize();            
        // var formData = new FormData($(this)[0]); 
        $.ajax({
            url: 'ajaxinsert.php',  
            enctype :"multipart/form-data",
            type: 'POST',
            data: new FormData(this),
            success: function(response) {
                console.log("Form successfully submitted:", response);
                alert(response); 
            },
            error: function(xhr, status, error) {
                console.error("Error:", error);
            }
        });
    });
});




