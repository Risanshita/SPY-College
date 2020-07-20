$(document).ready(function () {
    $("#information-panel").click(function () { 
        $("#information-panel").fadeOut(1000);
    });
});

//$(document).ready(function () {
//    $("#information-panel").fadeOut();
//});
function msgingooff() {
    $("#information-panel").fadeOut(3000);
}
function checkEmail() { 
    text = $("#username").val().trim();
    var mailformat = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  
    if (!text.match(mailformat)) {

        showMSG("Invalid email id !",false);
        return false;
    }
    else { 
        return true;
    }
}

function checkLogin()
{debugger;
    if (!checkEmail()) {
        return false;
    } 
    var e = 'email=' + $("#username").val().trim() + '&pass=' + $("#password").val().trim(); 
    
    
    var x='';
    
    
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

   
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {  
            x = this.responseText.trim();
            debugger;
            if (x !='' ) { 
                showMSG("Correct !",true);
                window.open("admin/index.html", "_self");
            }
            else { 
                showMSG("Username or password are incorrect !",false);                
            }
        }
    };
    xmlhttp.open("POST", "check_login.php", true);
    //xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send(e);
    debugger;
    return false;
} 
function showMSG(aaa,fff) {

$("#information-panel").fadeOut(); 
    if(fff==false){
        $(".fa.fa-times-rectangle").show();
        $(".fa.fa-check-square").hide();
        $("#text").css({ "color": "red" });
    }
    else{
        $(".fa.fa-times-rectangle").hide();
        $(".fa.fa-check-square").show();
        $("#text").css({ "color": "green" }); 
    }
    $("#text").text(aaa);
    $("#information-panel").fadeIn(1000); 
    setTimeout(msgingooff, 5000);
}