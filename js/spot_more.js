document.getElementById("moreButton").addEventListener("click", function () {
  var hiddenText = document.getElementById("hiddenContainer");
  if (hiddenText.classList.contains("hidden")) {
    hiddenText.classList.remove("hidden");
    document.getElementById("moreButton");
  } else {
    hiddenText.classList.add("hidden");
    document.getElementById("moreButton");
  }
});
