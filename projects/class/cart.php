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
    <div class="col-1-1 center">
        <button id="cart_back">&lt;</button>
        <span id="cart_range"></span>
        <button id="cart_next">&gt;</button>
        <br />
        <a class="button block">Checkout</a>
    </div> <!-- End of .col-1-1 -->
</div> <!-- End of .grid -->
<script type="text/javascript">
    var c = 1;
    setCart();
    for (var isbn in myCart.cart) {
        $('#cart').append('<li data-item-num-cart=' + c + '>\
            <div class="grid clearfix">\
                <div class="col-1-8">\
                    <img src="./img/' + isbn + '.jpg" style="height: 100px;"/>\
                </div>\
                <div class="col-1-2">\
                    <h2><a href="./view_item.php?isbn=' + isbn + '">' + itm[isbn].title + '</a></h2>\
                    <h3>' + itm[isbn].author + '</h3>\
                    <h4>' + itm[isbn].genre + '</h4><br />\
                </div>\
                <div class="col-1-4">\
                    <input type="number" min="0" name="' + isbn + '" onchange="myCart.updateCart(this.name)" value="' + myCart.cart[isbn] + '"/>\
                </div>\
                <div class="col-1-8">\
                    PRICE\
                </div>\
            </div>\
        </li>');
        c++;
    }
    window.count = c;
    var cart = new Pages("cart", count, 1, 10);
</script>
<?
include('./mod/footer.php');
?>