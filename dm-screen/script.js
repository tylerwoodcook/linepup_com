// ----------------------- //
// ----- DICE ROLLER ----- //
// ----------------------- //

//gets sides from dropdown in ui
function getDieType() {
  return parseInt(document.getElementById("type-die").value);
}

//retrieves number of die to roll
function getDieNumber() {
  return document.getElementById("number-dice").value;
}

//retrieves roll modifier
function getModifier() {
  let num = document.getElementById("modifier").value;
  if (document.getElementById("select-modifier").value == "-") {
    return parseInt(-num);
  } else {
    return parseInt(num);
  }
}

//determines number of sides
function Dice(sides) {
  this.sides = sides;
}

//generates roll based on number of sides
Dice.prototype.roll = function () {
  return Math.floor(Math.random() * this.sides) + 1;
};

//UI functionality
var button = document.getElementById("button");

button.onclick = function (e) {
  e.preventDefault();
  var resultString = "";
  var dieRoll = new Dice(getDieType());
  var result = 0;
  var logResult = document.querySelector("#result");
  for (let i = 0; i < getDieNumber(); i++) {
    result += dieRoll.roll();
  }
  result += getModifier();

  // ⟐⊡ | ⚀ ⚁ ⚂ ⚃ ⚄ ⚅
    
  logResult.innerHTML = "⟐ ⊡";
  setTimeout(function () {
    logResult.innerHTML = "⊡ ⟐";
  }, 300);
  setTimeout(function () {
    logResult.innerHTML = "⟐ ⊡";
  }, 600);
  setTimeout(function () {
    logResult.innerHTML = result;
    console.log(result);
  }, 900);
};

// --------------------------- //
// ----- END DICE ROLLER ----- //
// --------------------------- //

// ------------------------------------ //
// ----- CREATE TABLE OF CONTENTS ----- //
// ------------------------------------ //

// Step 1: Get NodeList of elements with class '.heading'
const headings = document.querySelectorAll(".heading");

// Step 2: Iterate over the NodeList and extract text content and corresponding link
const headingData = Array.from(headings).map((heading) => {
  const text = heading.textContent.trim(); // Trim whitespace from the text
  const link = "#" + text.replace(/\s+/g, "-").toLowerCase(); // Convert text to a link
  return { text, link };
});

// Step 3: Create a list element and populate it with list items wrapped in <a> tags
const list = document.createElement("ul");
headingData.forEach((data) => {
  const listItem = document.createElement("li");
  const anchor = document.createElement("a");
  anchor.textContent = data.text;
  anchor.href = data.link;
  listItem.appendChild(anchor);
  list.appendChild(listItem);
});

// Step 4: Append the list to a container element in the DOM
const container = document.getElementById("table-of-contents-list"); // Change 'container' to the ID of your container element
container.appendChild(list);

// --------------------------------- //
// ----- END TABLE OF CONTENTS ----- //
// --------------------------------- //

// ----------------------------------- //
// ----- SIDEBAR - TOGGLE BUTTON ----- //
// ----------------------------------- //

const toggleButton = document.getElementById("sidebar-toggle");
const sidebar = document.getElementById("sidebar");
const contentContainer = document.getElementById("content-container");

toggleButton.onclick = function () {
  sidebar.classList.toggle("sidebar-closed");
  contentContainer.classList.toggle("content-container-full-width");
};
