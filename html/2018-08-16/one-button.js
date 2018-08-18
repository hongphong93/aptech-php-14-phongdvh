var on = true;
function theSwitch(){
    var a = document.getElementById("js-light");
    on = !on;
    if (on == true){
        a.src="./pic_bulboff.gif";
    } else {
        a.src='./pic_bulbon.gif';
    }
    console.log(a.src, on)
}