const inputs = document.querySelectorAll(".input");

console.log(inputs)
function focusFunx() {
  let parent = this.parentNode.parentNode;
  parent.classList.add("focus");
}
inputs.forEach((input) => {
  input.addEventListener("focus", focusFunx);
  console.log(input)
});
