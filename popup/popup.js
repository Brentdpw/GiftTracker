function openPopup() {
    document.getElementById('test').style.display = 'block';
}

function closePopup() {
    document.getElementById('test').style.display = 'none';
}

var ElementButton = document.querySelector("#popup-button");
var Input = document.getElementById("TitleAct");


ElementButton.addEventListener("click", function(){
    
    var title = Input.value;
    
    closePopup()
    document.getElementById("myForm").reset();
});