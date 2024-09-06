<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['editedXML'])) {
    $editedXML = $_POST['editedXML'];

    // sanitizes the user-input to remove special characters
    $cleanXML = htmlspecialchars($editedXML, ENT_XML1);


?>
<script>
    const donkey_kong = document.getElementById('donkey_kong');
    donkey_kong.innerHTML = '<?php $cleanXML ?>';
</script>

<?php

    // Write the received XML content to a file (edited.xml)
    $file = fopen('edited.xml', 'w');
    if ($file) {
        fwrite($file, $cleanXML);
        fclose($file);
        http_response_code(200);
        echo 'File saved successfully';
    } else {
        http_response_code(500);
        echo 'Error saving file';
    }
} else {
    http_response_code(400);
    echo 'Bad request';
}
?>