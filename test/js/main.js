const inputs = document.querySelectorAll(".input");

function focusFunx() {
  let parent = this.parentNode.parentNode;
  parent.classList.add("focus");
}
function openPopup() {
  document.getElementById("overlay").style.display = "block";
  document.getElementById("popupForm").style.display = "block";

  // Adding a delay to start the animation after the display property is set to block
  setTimeout(function() {
      document.getElementById("overlay").style.opacity = 1;
      document.getElementById("popupForm").style.opacity = 1;
      document.getElementById("popupForm").style.filter = "blur(0)";
  }, 50);
}

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunx);
});
