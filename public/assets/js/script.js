let arrow = document.querySelectorAll(".arrow");
for (var i = 0; i < arrow.length; i++) {
  arrow[i].addEventListener("click", (e)=>{
 let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
 arrowParent.classList.toggle("showMenu");
  });
}

function showSelectedFruit() {
  const selectedFruit = document.querySelector('input[name="status"]:checked').value;
  console("Selected status: " + selectedFruit);
}

