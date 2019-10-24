function UploadImage() {

// Fetching HTML Elements in Variables by ID.
	var x = document.getElementById("image");
	var createform = document.createElement('form'); // Create New Element Form
	createform.setAttribute("action", ""); // Setting Action Attribute on Form
	createform.setAttribute("method", "post"); // Setting Method Attribute on Form
	x.appendChild(createform);
	
	var inputelement = document.createElement('input'); // Create Input Field for Name
	inputelement.setAttribute("type", "file");
	inputelement.setAttribute("name", "files[]");
	inputelement.setAttribute("id", "file");
	inputelement.setAttribute("multiple", true);
	createform.appendChild(inputelement);

	var submitelement = document.createElement('input'); // Append Submit Button
	submitelement.setAttribute("type", "submit");
	submitelement.setAttribute("name", "submit");
	submitelement.setAttribute("id","submit_image");
	submitelement.setAttribute("value", "Upload File");
	createform.appendChild(submitelement);

	$("#submit_image").click(function() { 
                var fd = new FormData(); 
                var files = $('#file')[0].files[0]; 
                fd.append('file', files); 
       
                $.ajax({ 
                    url: 'upload_image.php', 
                    type: 'post', 
                    data: fd, 
                    contentType: false, 
                    processData: false, 
                    success: function(response){ 
                        if(response != 0){ 
                           alert('file uploaded'); 
                        } 
                        else{ 
                            alert('file not uploaded'); 
                        } 
                    }, 
                }); 
            }); 

}
