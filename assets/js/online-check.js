function onFunction() {
  document.getElementById("demo").innerHTML = "You are online";
  document.getElementById("demo").classList.add("bg-success");
}

function offFunction() {
  document.getElementById("demo").innerHTML = "You are offline";
  document.getElementById("demo").classList.add("bg-danger");
}