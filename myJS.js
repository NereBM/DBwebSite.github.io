function ShowHidePass() {
    var x = document.getElementById("myPassword");
    var y = document.getElementById("show_btn1");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    
    }
}