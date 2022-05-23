function slide(div, h){
    if(div.style.display === 'none') {
            div.style.display = 'block';
            h.textContent = 'Citeste mai putin 🠕'
    }
    else{
      (div.style.display === 'none')
        div.style.display = 'none';
        h.textContent = 'Citește mai mult ↓'
    }
}

const button = document.getElementById("btn");
const color = document.querySelector(".color");

const hex = [
  "0",
  "1",
  "2",
  "3",
  "4",
  "5",
  "6",
  "7",
  "8",
  "9",
  "A",
  "B",
  "C",
  "D",
  "E",
  "F",
];

button.addEventListener("click", () => {
  let hexColor = generateHex();
  document.body.style.backgroundColor = hexColor;
  color.textContent = hexColor;
});

function generateHex() {
  let hexColor = "#";
  for (let i = 0; i < 6; i++) {
    hexColor += hex[getRandomNumber()];
  }

  return hexColor;
}

function getRandomNumber() {
  //Înmulțirea unui număr cu o fracție aleatorie 
  //nu duce întotdeauna la valori întregi. 
  //Prin urmare, folosim funcția Math.floor() pentru a scăpa de partea zecimală din numerele noastre.
  return Math.floor(Math.random() * hex.length);
}
/*contact pagina*/
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}





function loginRequest() {
  let uname = $("input[name='unameLog']").val();
  let pwd = $("input[name='pwdLog']").val();

  $.ajax({
      type: "POST",
      url: "http://localhost/TWEB/loginAction.php",
      data: {username: uname, password: pwd},
      dataType: "json",
      success: (response) => {
          if(response.status == true) {
              $("#loginPage").html("<div class='container'><div class='serverData'>" + response.message + "</div></div>");
              $(location). attr('href', 'http://localhost/TWEB/loginForm.php');
          }
          else {
              $("#loginPage").html("<div class='container'><div class='serverData'>" + response.message + "</div></div>");
          }
      },
      error: () => {
          alert("Something went wrong. :(");
      }
  })
}
