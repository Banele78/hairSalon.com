<?php include ('serverStyle.php')?>

<htm lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
     integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    <link rel="stylesheet" href="/hairSalon/clientSide/css/styleStyle.css">
    <link rel="stylesheet" href="/hairSalon/clientSide/css/navbar.css">
 
    </head>
    <body>
    <div class="loader"></div>
    <div id="myNavbar">
<div class="toggle_btn">
<i></i>
</div>
<div class="dropdown_menu "></div>


</div>

 <?php
while($dt=mysqli_fetch_assoc($result_date2)){
  $status=$dt['appointment_status'];
  $date=$dt['appointment_date'];
     if($status=='offline'){
      $offlineDates[] = $date;
     }
    }
    if (!empty($offlineDates)) {
      $offlineDatesString = implode(', ', $offlineDates);
?>
 <div class="message" id="noti">
<p >Please note that on the <?php echo  $offlineDatesString; ?>, the store will not be open.</p>
</div>
 <?php
    }
?>


 

 <div class="container">
<?php

while($s=mysqli_fetch_assoc($get)){
?>
<div class="image">
<img src="/hairSalon/clientSide/hairstyleImg/<?php echo $s['image']; ?>"  id="imageS" >
</div>
<div class="bottom-left"><span class="image-texts"><?php echo $s['name']; ?>
</span><br>R<?php echo $s['cost']; ?></div>

<?php
}
?>
 <?php if (isset($error)) { echo "<p>$error</p>"; } ?>
<div class="time_slots" >
  <p class="SelectDay"> Please select day and time</p>
  <div class="day">
    <!--Loop through the dates-->
<?php
$count = 0;
while($d=mysqli_fetch_assoc($result_date)){
  $status=$d['appointment_status'];
  if($status=="offline"){
?>
<button id="button_search" class="date-button" value="<?php echo $d['appointment_date']; ?>" name="select"
onclick="setVariableToNull()" disabled>
<?php echo $d['appointment_date']; ?></button>
<?php
}else{
?>
<button id="button_search" class="date-button" value="<?php echo $d['appointment_date']; ?>" name="select"
onclick="setVariableToNull()">
<?php echo $d['appointment_date']; ?></button>

<?php
}
$count++;
if ($count >= 7) {
  break;  // Break out of the loop after 7 iterations
}
}
?>
</div>

<br>
<!--Loop through the time slots-->
<div class="time" id="searchresult" >

</div><br><br><br><br>
<!--<div id="selectedOption">Selected Option: None</div>
<div id="selected_Option">Selected Option: None</div>-->
<div id="feedback"></div>
<div id="PleaseSelect"></div>

<?php
    if(!isset($_SESSION["username"])){
    ?>
     <a href="/hairSalon/clientSide/BHlogin.php"><button class="submitButton" id="submitButton" onclick="submitForm();">Book appiontment</button>
    </a>
    <?php }else {?>
      
      <button class="submitButton" id="submitButton" onclick="submitForm();" >Book appiontment</button>
      
      <?php }?>
      
</div>



    </body>
    <script src="/hairSalon/clientSide/navbar.js"></script>
    <script src="/hairSalon/clientSide/footer.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="script.js"></script>
    <script>
// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("myNavbar");
var nofication=document.getElementById("noti");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
  
    navbar.classList.add("sticky");
    
  } else {
    navbar.classList.remove("sticky");
  }
}
//Select date
const buttons = document.querySelectorAll('.date-button');
const selectedOption = document.getElementById('selectedOption');
let selectedData = null; // Initialize the selected data as null

buttons.forEach(button => {
  button.addEventListener('click', () => {
    // Remove the 'selected' class from all buttons
    buttons.forEach(btn => btn.classList.remove('selected'));

    // Add the 'selected' class to the clicked button
    button.classList.add('selected');

    // Update the selected data
    selectedData = button.textContent;
    
    // Update the selectedOption text
    selectedOption.textContent = `Selected Option: ${selectedData}`;
  });
});



//Selected time


let selected_Data = null; // Initialize the selected data as null
// Attach the click event listener to a parent element (document in this case)
document.addEventListener('click', function (event) {
    const time_buttons = document.querySelectorAll('.time-button');
const selected_Option = document.getElementById('selected_Option');


    if (event.target.classList.contains('time-button')) {
        if (!event.target.classList.contains('Timeselected')) {
            time_buttons.forEach(btn => btn.classList.remove('Timeselected'));
            event.target.classList.add('Timeselected');
            selected_Data = event.target.textContent;
            selected_Option.textContent = `Selected Option: ${selected_Data}`;
        }
    }
});

//reset the selected time to null when charging the date
function setVariableToNull() {
  selected_Data = null;
  
}



//Function to pul times based on dates
$(document).ready(function()
            {
                $(".date-button").on('click',function(){
                    var input=$(this).val();
                    //alert(input);
                    

                    if(input != ""){
                        $.ajax({
                            url:"StyleDisplay.php",
                            method:"POST",
                            data:{input:input},

                            success:function(data){
                                $("#searchresult").html(data);
                               
                            }

                        });
                    }else{
                        $("#searchresult").css("display","none");
                    }

                });

            });

            const submitButton = document.getElementById('submitButton');
            //function to submit data 
          
            function submitForm(){
 
var imageElement=document.getElementById('imageS');
var imageUrl = imageElement.src;
var name = imageUrl.split("/").pop();

var formData={selectedData:selectedData,selected_Data:selected_Data,name:name};
 if(selectedData !=null){
  if(selected_Data !=null){
    $("#feedback").html("Sending email, please wait...");
    const loader=document.querySelector(".loader");
   
   loader.style.display = "flex";
    const load = document.querySelector('.loader');
    
    $.ajax({
                         url:"practise.php",
                         type:"POST",
                         data:formData,
                         success:function(response){
                          window.location.href = 'bookingConfirmation.php';
                          
                         }

                     });
  }else{
    $("#PleaseSelect").html("Please select time");
  }
  
 }else{
  $("#PleaseSelect").html("Please select date");
 }

                    

}

//code to open and close the dropDown menu
const toggleBtn=document.querySelector('.toggle_btn');
const toggleBtnIcon=document.querySelector('.toggle_btn i');
const dropDownMenu=document.querySelector('.dropdown_menu');

toggleBtn.onclick=function(){
  dropDownMenu.classList.toggle('open');
  document.body.style.overflowY = dropDownMenu.classList.contains("open") ? "hidden" : "auto";
  const isOpen=dropDownMenu.classList.contains('open');
 

  //switch icons
  toggleBtnIcon.classList=isOpen
  ? 'fa-solid fa-xmark'
  : 'fa-solid fa-bars';
}
           


</script>
</htm>