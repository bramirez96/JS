<?php
$page_title = "View Cart";
include('./mod/header.php');
?>

<div class="grid clearfix">
    <div class="col-1-1">
        <ul>
            <li><h1>View Cart</h1></li>
            <span id="cart">
            
            </span>
        </ul>
    </div> <!-- End of .col-1-1 -->
</div> <!-- End of .grid -->
<div class="grid clearfix">
    <div class="col-1-1 right dark">
        <span class="thick">Total: </span>$<span id="total"></span>
    </div> <!-- End of .col-1-1 -->
</div> <!-- End of .grid -->
<div class="grid clearfix">
    <div class="col-1-1 center">
        <a class="button block" href="javascript:checkout()">Checkout</a>
    </div> <!-- End of .col-1-1 -->
</div> <!-- End of .grid -->
<script type="text/javascript">
    var c = 1;
    setCart();
    for (var isbn in myCart.cart) {
        $('#cart').append('<li>\
            <div class="grid clearfix">\
                <div class="col-1-8">\
                    <img src="./img/' + isbn + '.jpg" style="height: 100px;"/>\
                </div>\
                <div class="col-1-2">\
                    <h2><a href="./view_item.php?isbn=' + isbn + '">' + itm[isbn].title + '</a></h2>\
                    <h3>' + itm[isbn].author + '</h3>\
                    <h4>' + itm[isbn].genre + '</h4><br />\
                </div>\
                <div class="col-1-4 right">\
                    <input type="number" min="0" name="' + isbn + '" onchange="myCart.updateCart(this.name)" value="' + myCart.cart[isbn] + '"/>\
                </div>\
                <div class="col-1-8 right dark">\
                    $<span id="' + isbn + '_price"></span>\
                </div>\
            </div>\
        </li>');
        c++;
    }
    myCart.setPrices();
    function checkout() {
        alert("Congrats, you bought stuff.");
        delete crt[sessionStorage.email];
        var x = JSON.stringify(crt);
        localStorage.cart = x;
        window.location.assign("./index.php");
    }
</script>
<?
include('./mod/footer.php');
?>