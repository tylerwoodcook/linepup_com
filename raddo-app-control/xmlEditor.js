// xmlEditor.js

// ... (existing code)

function saveChanges() {
  // get value of text area
  var editedXML = document.getElementById('xmlEditor').value;

  // Send editedXML to the server using XMLHttpRequest
  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'save_xml.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
              console.log('File saved successfully');
          } else {
              console.error('Error saving file');
          }
      }
  };
  xhr.send('editedXML=' + encodeURIComponent(editedXML));
}

// ... (remaining code)
