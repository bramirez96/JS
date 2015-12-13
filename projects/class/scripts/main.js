//Load functions that do things when page is loaded I suppose
function loadUsers() {
    if (typeof localStorage.user !== 'undefined') var z = localStorage.user;
    else var z = '{}';
    window.usr = JSON.parse(z);
}
function setUser() {
    if (typeof sessionStorage.user !== 'undefined') {
        $('.isLogged').css('display','inline');
        $('.username').text(sessionStorage.user);
        $('.cartNum').text(sessionStorage.cartNum);
    } else {
        $('.notLogged').css('display','inline');
    }
}

function loadCarts() {
    if (typeof localStorage.cart !== 'undefined') var z = localStorage.cart;
    else var z = '{"' + sessionStorage.email + '":{}}';
    window.crt = JSON.parse(z);
}
function setCart() {
    if (typeof window.myCart === 'undefined') window.myCart = new Cart(crt[sessionStorage.email]);
    sessionStorage.cartNum = myCart.cartNum;
    $('.cartNum').text(sessionStorage.cartNum);
}

function loadItems() {
    if (typeof localStorage.item !== 'undefined') var z = localStorage.item;
    else var z = '{}';
    window.itm = JSON.parse(z);
}

//This stuff is for form validation
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

//This one... well, it logs you out...
function logOut() {
	sessionStorage.clear();
	window.location.assign("./index.php");
}

//The following code is all for the Cart() class
function Cart(obj) {
    if (typeof obj === 'object') this.cart = obj;
    else this.cart = {};
    this.email = sessionStorage.email; 
    this.cartNum = 0;
    for (q in this.cart) {
        this.cartNum += this.cart[q];
    }
}
Cart.prototype.addToCart = function(isbn) {
    if (typeof this.cart[isbn] ==='undefined') this.cart[isbn] = 1; //Add entry if none exist
    else this.cart[isbn]++; //Increase quantity if one does
    this.cartNum++; //Increase quantity to match
    window.crt[this.email] = this.cart;
    localStorage.cart = JSON.stringify(window.crt);
    sessionStorage.cart = JSON.stringify(this.cart);
    setCart();
}
Cart.prototype.updateCart = function(isbn) { //This code was hard
    this.newValue = parseInt(document.getElementsByName(isbn)[0].value);
    console.log(this.newValue + " " + isbn);
    this.cartNum += this.newValue;
    this.cartNum -= this.cart[isbn];
    this.cart[isbn] = this.newValue;
    console.log(this.cart[isbn]);
    console.log(this.cartNum);
    window.crt[this.email] = this.cart;
    localStorage.cart = JSON.stringify(window.crt);
    sessionStorage.cart = JSON.stringify(this.cart);
    setCart();
}