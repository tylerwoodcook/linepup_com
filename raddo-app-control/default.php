<!DOCTYPE html>
<html>

<head>
    <title>XML Editor</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section id="characters-container" style="width: 100%; height: 110px;"></section>
    <section id="form-container" style="width: 100%;"></section>


    <!--
    <textarea id="xmlEditor" rows="20" cols="80"></textarea>
    <button onclick="saveChanges()">Save Changes</button>
-->

    <!--
    <section style="width: 100%; height: 110px;">
        <img class="gif character-1" src="https://mario.wiki.gallery/images/thumb/8/84/MPS_Donkey_Kong_Artwork.png/600px-MPS_Donkey_Kong_Artwork.png">
        <img class="gif character-2" src="https://mario.wiki.gallery/images/thumb/7/72/MPSS_Luigi.png/340px-MPSS_Luigi.png">
        <img class="gif character-3" src="https://mario.wiki.gallery/images/thumb/2/29/SMPWario.png/500px-SMPWario.png">
        <img class="gif character-4" src="https://mario.wiki.gallery/images/thumb/4/4d/Yoshi_-_Mario_Party_10.png/400px-Yoshi_-_Mario_Party_10.png">
    </section>

    <section>
        <span id="donkey_kong" class="label label-1">DONKEY KONG</span>
        <span id="luigi" class="label label-2">LUIGI</span>
        <span id="wario" class="label label-3">WARIO</span>
        <span id="yoshi" class="label label-4">YOSHI</span>
    </section>
-->



    <script src="xmlEditor.js"></script>
    <script src="app.js"></script>



    <script>
        // Function to load XML file
        function loadXMLDoc(filename) {
            let xhttp;
            if (window.XMLHttpRequest) {
                xhttp = new XMLHttpRequest();
            } else {
                xhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xhttp.open("GET", filename, false);
            xhttp.send();
            return xhttp.responseXML;
        }

        // Function to extract value from XML and display on the webpage
        function displayValue() {
            let xmlDoc = loadXMLDoc("data.xml"); // get the specific XML doc


            const characters = xmlDoc.getElementsByTagName("character"); // array of all characters

            for (const character of characters) {

                const charactersContainer = document.getElementById('characters-container');
                const formContainer = document.getElementById('form-container');

                let characterName = character.children[0].innerHTML;
                let characterLevel = character.children[1].innerHTML;
                let characterImage = character.children[2].innerHTML;
                let characterSpeed = character.children[3].innerHTML;
                console.log(characterName + " " + characterLevel + " " + characterImage);

                // Create individual character container
                const individualCharacterContainer = document.createElement("div");
                individualCharacterContainer.setAttribute('id', characterName.replace(/\s+/g, '-').toLowerCase()) // adds ID of character name (lowercase and spaces replaced with dashes)
                individualCharacterContainer.classList.add("character");
                charactersContainer.appendChild(individualCharacterContainer);

                // Create image container
                const imageContainer = document.createElement("div");
                imageContainer.classList.add("character-image-container");
                individualCharacterContainer.appendChild(imageContainer);

                // Add image into image container
                const imageElement = document.createElement("img");
                imageElement.classList.add("character-image-element");
                imageElement.src = characterImage;
                imageContainer.appendChild(imageElement);

                // Create name container
                const nameContainer = document.createElement("div");
                nameContainer.classList.add("character-name");
                nameContainer.innerText = characterName;
                individualCharacterContainer.appendChild(nameContainer);

                // Set character speeds
                imageContainer.classList.add("animation-speed-" + characterSpeed);
                nameContainer.classList.add("animation-speed-" + characterSpeed);

                // Set styles based on character level
                if (Number(characterLevel) < 5) {
                    nameContainer.classList.add('character-name-1');
                } else if ((Number(characterLevel) > 4) && (Number(characterLevel) < 10)) {
                    nameContainer.classList.add('character-name-5');
                } else if ((Number(characterLevel) > 9) && (Number(characterLevel) < 15)) {
                    nameContainer.classList.add('character-name-10');
                } else if ((Number(characterLevel) > 14) && (Number(characterLevel) < 20)) {
                    nameContainer.classList.add('character-name-15');
                }


                // Create form to edit XML data

                const characterNameCleanedUp = String(characterName.replace(/\s+/g, '-').toLowerCase());

                const formEditor = document.createElement("form");
                formEditor.setAttribute('id', 'form' + "-" + characterNameCleanedUp);
                formEditor.setAttribute('method', 'post');
                formEditor.setAttribute('action', 'default.php');
                formContainer.appendChild(formEditor);

                const formLabelCharacterName = document.createElement("label");
                formLabelCharacterName.setAttribute('for', characterNameCleanedUp);
                formLabelCharacterName.innerText = characterName + ": ";
                formEditor.appendChild(formLabelCharacterName);

                const formInputCharacterName = document.createElement("input");
                formInputCharacterName.setAttribute('type', 'text');
                formInputCharacterName.setAttribute('id', characterNameCleanedUp);
                formInputCharacterName.setAttribute('name', characterNameCleanedUp);
                formEditor.appendChild(formInputCharacterName);

                const formInputSubmit = document.createElement("input");
                formInputSubmit.setAttribute('type', 'submit');
                formInputSubmit.setAttribute('value', 'submit');
                formInputSubmit.setAttribute('class', 'submit-btn');
                formEditor.appendChild(formInputSubmit);


                // const formLabelNewValue = document.createElement("label");
                // formLabelNewValue.setAttribute('for', 'new_value');
                // formEditor.appendChild(formLabelNewValue);

                // const formInputNewValue = document.createElement("input");
                // formInputNewValue.setAttribute('type', 'text');
                // formInputNewValue.setAttribute('id', 'new_value');
                // formInputNewValue.setAttribute('name', 'new_value');
                // formEditor.appendChild(formInputNewValue);

                // const formInputSubmit = document.createElement("input");
                // formInputSubmit.setAttribute('type', 'submit');
                // formInputSubmit.setAttribute('value', 'submit');
                // formEditor.appendChild(formInputSubmit);

            }
        }


        displayValue();



    </script>




</body>

</html>