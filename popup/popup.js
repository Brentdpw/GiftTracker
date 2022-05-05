function openPopup() {
    document.getElementById('test').style.display = 'block';
}

function closePopup() {
    document.getElementById('test').style.display = 'none';
}

var ElementButton = document.querySelector("#button");
var Input = document.getElementById("TitleAct");
var amountSucces = 0;
var Tekstvak = document.getElementById("tekstvak");
var gevonden = false;

ElementButton.addEventListener("click", function(){
    
    var newp = document.createElement("P");
    newp.id = "tekst";
    var tekst = document.createTextNode(Input.value);
    newp.append(tekst);
    newp.classList.add("tekst");
    Tekstvak.append(newp);
    gevonden = true;

    closePopup()
    document.getElementById("myForm").reset();
});