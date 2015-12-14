<?php
$page_title = "Store";
include('./mod/header.php');
?>

<div class="grid clearfix">
    <div class="col-1-1">
        <ul>
            <li><h1>Book List</h1></li>
            <span id="books">
            
            </span>
        </ul>
    </div> <!-- End of .col-1-1 -->
</div> <!-- End of .grid -->
<div class="grid clearfix">
    <div class="col-1-1 center">
        <button id="books_back">&lt;</button>
        <span id="books_range"></span>
        <button id="books_next">&gt;</button>
    </div> <!-- End of .col-1-1 -->
</div> <!-- End of .grid -->
<script type="text/javascript">
    var c = 1;
    for (var isbn in itm) {
        $('#books').append('<li data-item-num-books=' + c + '>\
            <div class="grid clearfix">\
                <div class="col-1-5">\
                    <img src="./img/' + isbn + '.jpg" />\
                </div>\
                <div class="col-4-5">\
                    <h2><a href="./view_item.php?isbn=' + isbn + '">' + itm[isbn].title + '</a><span class="tiny"> (' + itm[isbn].price + ')</span></h2>\
                    <h3>' + itm[isbn].author + '</h3>\
                    <h4>' + itm[isbn].genre + '</h4><br />\
                    <a href="javascript:myCart.addToCart(\'' + isbn + '\');" class="button">Add to Cart</a>\
                </div>\
            </div>\
        </li>');
        c++;
    }
    var books = new Pages("books", c, 1, 6);
</script>
<?php
include('./mod/footer.php');
?>