function myFunction() {
    var x = document.createElement("A");
    var txt;
    var r = confirm("Press a button!");
    if (r == true) {
        x.setAttribute("href", "delete.php");

    } else {
      txt = "You pressed Cancel!";
    }
    document.getElementById("demo").innerHTML = txt;
  }
