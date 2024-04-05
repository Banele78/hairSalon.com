document.addEventListener("DOMContentLoaded", function (){

    fetch("/hairSalon/clientSide/footer.php")
    .then(response=>response.text())
    .then(data=>{
      
      
  
      document.body.insertAdjacentHTML('beforeend',data);
    })
    .catch(error=>console.error("Error fecthing navbar:", error));
});