var form = document.getElementsByTagName("form")[0];
form.addEventListener("submit", contact, false);
// console.log("test");
function contact(e) {
  e.preventDefault();

  var target = e.target || e.srcElement;
  var i = 0;
  var message = "";

  for (i = 0; i < target.length; ++i) {
    if (target[i].type != "text" && target[i].type != "textarea") {
      continue;
    }

    message += target[i].name + ": " + target[i].value + "/r/n";
  }

  target.elements["message"].value = message;

  this.submit();
}
