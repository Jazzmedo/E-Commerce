const inputs = document.querySelectorAll(".input");

function focusFunx() {
  let parent = this.parentNode.parentNode;
  parent.classList.add("focus");
}

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunx);
});
