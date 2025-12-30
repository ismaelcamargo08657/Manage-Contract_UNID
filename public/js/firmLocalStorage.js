document.addEventListener("DOMContentLoaded", function(){
        function getFirmLocalStorage(){
            console.log('esta es señal de que funciona la firma!!!');
            firmaAutografa = document.getElementsByClassName("firmaDigital");
            for (let index = 0; index < firmaAutografa.length; index++) {
            firmaAutografa[index].src = localStorage.getItem("pictograma");
            // document.getElementById("firmaautografa").src = dataURL;
            }
        }
    getFirmLocalStorage();
});