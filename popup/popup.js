function openPopup() {
    document.getElementById('create-pupup').style.display = 'block';
}

function closePopup() {
    document.getElementById('create-pupup').style.display = 'none';
}

var ElementButton = document.querySelector("#popup-button");
var Input = document.getElementById("TitleAct");


ElementButton.addEventListener("click", function(){
    
    var title = Input.value;
    
    closePopup()
    document.getElementById("create-form").reset();
});