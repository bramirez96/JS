//Load functions that do things when page is loaded I suppose
function loadUsers() {
    if (localStorage.user) var z = localStorage.user;
    else var z = '{"keys":[]}';
    window.usr = JSON.parse(z);
}
function setUser() {
    if (typeof sessionStorage.user !== 'undefined') {
        for (var x = 0; x < $('.isLogged').length; x++) {
            $('.isLogged').css('display','inline');
        }
        for (var x = 0; x < $('.username').length; x++) {
            $('.username')[x].innerHTML = sessionStorage.user;
        }
    } else {
        for (var x = 0; x < $('.notLogged').length; x++) {
            $('.notLogged').css('display','inline');
        }
    }
}

function checkAdminForm(form) {
    var ad = form.elements.admin.value;
    var pw = form.elements.pass.value;
    var x = true;
    if (ad != "root") {
        x = false;
        $('#adError').text("I'm not sure how you messed this up, but you did.");
    } else {
        $('#adError').text("");
        if (pw != "admin") {
            x = false;
            $('#pwError').text("Do you even know how to read?");
        } else $('#pwError').text("");
    }
    return x;
}
function checkLoginForm(form) {
    var em = form.elements.email.value;
    var pw = form.elements.pass.value;
    var x = true;
    if (em == "") {
        x = false;
        $('#emError').text("No email entered.");
    } else if ($.inArray(em, Object.keys(usr)) == -1) {
        x = false;
        $('#emError').text("Email is not registered.");
        $('#pwError').text("");
    } else {
        $('#emError').text("");
        if (pw != usr[em].pass) {
            x = false;
            if (pw == "") $('#pwError').text("No password entered.");
            else          $('#pwError').text("Invalid password.");
        }
    }
    return x;
}
function checkSignupForm(form) {
    var fn = form.elements.fname.value;
    var ln = form.elements.lname.value;
    var un = form.elements.uname.value;
    var em = form.elements.email.value;
    var pw = form.elements.pass.value;
    var cp = form.elements.cpass.value;
    var x = true;
    if (!/^[a-z' ]{2,}$/i.test(fn)) {
        x = false;
        $('#fnError').text("*");
    } else $('#fnError').text("");
    if (!/^[a-z' ]{2,}$/i.test(ln)) {
        x = false;
        $('#lnError').text("*");
    } else $('#lnError').text("");
    if (!/^[a-z\d]{6,20}$/i.test(un)) {
        x = false;
        $('#unError').text("*");
    } else $('#unError').text("");
    if (!/^[A-Z0-9._%+-]+@(?:[A-Z0-9-]+\.)+[A-Z]{2,}$/i.test(em)) {
        x = false;
        $('#emError').text("*");
    } else if ($.inArray(em, Object.keys(usr)) != -1) {
        x = false;
        $('#emError').text("* Email already registered");
    } else $('#emError').text("");
    if (!/(?=.*[a-z])+(?=.*[\d])+(?=.*[$&*$#?])+/i.test(pw)) {
        x = false;
        $('#pwError').text("*");
    } else $('#pwError').text("");
    if (cp != pw || cp == "") {
        x = false;
        $('#cpError').text("*");
    } else $('#cpError').text("");
    return x;
}


function logOut() {
	sessionStorage.clear();
	window.location.assign("./index.php");
}