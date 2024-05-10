var checkspanish = document.querySelector(".checkspanish")
var checkenglish = document.querySelector(".checkenglish")

checkspanish.addEventListener("click", idioma);
checkenglish.addEventListener("click", idioma);

function idioma(){
    let idspanish = checkspanish.checked;
    let idenglish = checkenglish.checked;

    if(idspanish == true){
        location.href="../index.php";
    }else{
        location.href="../GIT_WEB/EN/index.php"
    }

    

}