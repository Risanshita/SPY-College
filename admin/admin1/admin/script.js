var work = "";

function showPopup(f) {
checkSession();
    //Add notice to the load(1000 characters max): *
    work = f;
    $("#message-box").val("");
    $("#update-popup").fadeOut();
    $("#time-list").empty();
    $("#message-box").removeAttr("disabled");
    $("#popup-body").html('<div id="text_notice"> <p id="work-message"></p><div id="update-popup"><select id="time-list" onmouseup="loadSelectNotice();" onkeypress="loadSelectNotice();"></select></div><textarea maxlength="100" id="message-box"></textarea><div id="footer"><button id="add-msg-button" onclick="doWork();">Submit</button><span>|</span><a id="cancel" href="#cancel">Cancel</a><span id="max-alert">Maximum 1000 characters allowed</span></div></div>');
    if (f == 'add') {
        $("#message-box").fadeIn(); 
        $("#popup-box").fadeIn(250);
        $("#work-message").text("Add notice to the load(1000 characters max): *");
        $("#work-heading").text("Add notice");
    }
    else if (f == 'update' || f == 'delete') {
        if (f == 'delete') {
            $("#work-message").text("Select notice upload date :");
            $("#work-heading").text("Delete notice");
            $("#message-box").attr({ "disabled": "disabled" });
        } else {
            $("#work-message").text("Select notice upload date :");
            $("#work-heading").text("Update notice");
        }
        $("#update-popup").fadeIn();
        loadTime();
        $("#popup-box").fadeIn(250);
    }
    else {
        $("#popup-body").html('<div id="image_notice"><form action="uploadImage.php" method="post" enctype="multipart/form-data">Select Image <input  type="file" name="fileToUpload" id="fileToUpload" placeholder="Select image" /><p id="work-message"></p><input type="text" class="font-css" maxlength="100" name="notice"/><div id="footer"><input type="submit" name="submit" id="add-msg-button" class="button" /><span>|</span><a id="cancel" href="#cancel">Cancel</a><span id="max-alert">Maximum 1000 characters allowed</span></div></form></div>');
        $("#message-box").fadeIn();
        $("#popup-box").fadeIn(250);
        $("#work-message").text("Heading text");
        $("#work-heading").text("Add notice");
    }
    setPos();
}

$(document).ready(function () {
    $("#close").click(function () {
        $("#popup-box").fadeOut(200);
        $("#popup").animate({ top: '0' }, 200);
    });
});

$(document).ready(function () {
    $("#add-msg-button").click(function () {
        if ($("#message-box").val().length > 0) {
            $("body p:first-child").fadeIn();
            $("#message").text($("#message-box").val());
            $("#popup-box").fadeOut(200);
        }
    });
});

$(document).ready(function () {
    $("#cancel").click(function () {
        $("#message-box").val("");
    });
});
function setPos() {
    var x = window.innerWidth;
    var y = window.innerHeight;  
    
    if (x / 2 > 200) {
        x = (x / 2.5) - 150
    }
    else {
        x = 3;
    }
    if (y / 3 > 100) {
        y = (y / 3) - 100
    }
    else {
        y = 10;
    }
    $("#popup").css("left", x);
    $("#popup").css("top", 0);
    $("#popup").animate({ top: y }, 200);
}

$(document).ready(function () {
    $("#message-box").keyup(function () {
        var x = $("#message-box").val();
        if (x.length >= 1000) {
            $("#max-alert").fadeIn(100);
        }
        else {
            $("#max-alert").fadeOut(100);
        }
    });
});

 

/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////


 
$(document).ready(function () {
    $("#information-panel").click(function () { 
        $("#information-panel").fadeOut(1000);
    });
}); 
function msgingooff() {
    $("#information-panel").fadeOut(3000);
} 

function logout() { 
    window.open("logout.php", "_self");
}

function checkSession(){
//debugger;
if (window.XMLHttpRequest) { 
            xmlhttp = new XMLHttpRequest();
        } else { 
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } 
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                x = this.responseText; 
                if (x == "false")
                    window.open("http://spycollege.org/admin/admin1/index.html","_self");
            }
        };
        xmlhttp.open("GET", "loginstatus.php", false);
        xmlhttp.send(); 

}
 


function loadList()
{
 checkSession();
    var x;
    //debugger; 
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    } 
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            x = this.responseText; 
            document.getElementById("login2").innerHTML = x;
           // $(".fa.fa-times-circle").css({ "display": "none" }); 
                showMSG("Notice Reloded !",true);           
        }
    };
    xmlhttp.open("GET", "all_notice.php", true); 
    xmlhttp.send(); 
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


function homeGo(){
    window.open("http://www.spycollege.org/","_BLANK");
}
function addNotice(){
    //debugger;
    var msg=$("#message-box").val();
    if(msg=="")
        return;
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            debugger;
            x = this.responseText;
            if (x == " true ") {
                showMSG("Add successful !", true); 
            }
            else {
                showMSG("Ohh !! seems error Try again !", false); 
            }
        }
    };
    xmlhttp.open("GET", "addnew.php?NOTICE="+msg, true);
    xmlhttp.send();
}
 



function loadTime() {
    //debugger; 
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            x = this.responseText;
            $("#time-list").append(x);
        }
    };
    xmlhttp.open("GET", "loadtime.php", true);
    xmlhttp.send();
}


function loadSelectNotice() {
    // debugger; 
    var tim = $("#time-list").val();
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    }
    else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            $("#message-box").val(this.responseText);
        }
    };
    xmlhttp.open("GET", "loadSelectNotice.php?utime=" + tim, true);
    xmlhttp.send();
}


function updateSelectNotice() {
    // debugger; 
    var tim = $("#time-list").val();
    var not = $("#message-box").val();

    if (not.trim()=="") { 
        showMSG("Please enter notice !", false);
        return;
    }
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    }
    else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText == " true ") {
                showMSG("Update successful !", true);
            }
            else {
                showMSG("Update failed !", false);
            }
        }
    };
    xmlhttp.open("GET", "updateSelectNotice.php?utime=" + tim + "&notice=" + not, true);
    xmlhttp.send();
}


function deleteSelectNotice() {
    // debugger; 
    var tim = $("#time-list").val();
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    }
    else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText == " true ") {
                showMSG("Delete successful !", true);
            }
            else {
                showMSG("Delete failed !", false);
            }
        }
    };
    xmlhttp.open("GET", "deleteSelectNotice.php?utime=" + tim, true);
    xmlhttp.send();
}
function doWork() {
    if (work == "delete") {
        deleteSelectNotice();
    }
    else if(work == "update"){
        updateSelectNotice();
    }
    else if(work == "add"){
        addNotice();
    } 
}