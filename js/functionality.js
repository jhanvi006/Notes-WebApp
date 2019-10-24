
var note_no = 0;
var img_id = 0;
var note_id;
var note_data = '';

function OpenNote() {
	var note = document.createElement('textarea');
    note_no++;
    note_data = '';
    note.cols = 40;
    note.rows = 10;
    note.placeholder = 'Take a Note...';
    note.id = 'notearea';
    note.className = 'custom-textarea';
    note.method = "POST";

    // var image = document.createElement('img');
    // image.src = 'images/delete-icon.jpg';
    // image.id = 'delete';
    // img_id = note_no;
    // image.setAttribute('onclick','deleteNote()');

    var background = document.getElementById('bg');
    background.append(note);
    // background.append(image);

}

function SaveNote() {
    note_data = $('#notearea').val();  
    note_id = note_no;  

    if(note_data != '')  
        {  
            $.ajax({  
                url:"save_note.php",  
                method:"POST",  
                data:{NotesId:note_id, NotesData:note_data},  
                dataType:"text",  
                success:function(data)  
                {  
                    if(data != '')  
                    {  
                        $('#note_id').val(data);  
                    }  
                     
                }  
            });  
        }            
    }  
    setInterval(function(){   
        SaveNote();   
}, 10000);


/* Function to Remove Form Elements Dynamically */

function deleteNote(){
    var childNote = document.getElementById('notearea');
    
    if(childNote.parentNode){
        childNote.parentNode.removeChild(childNote);
        note_no--;
    }
}
 



/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function account() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
