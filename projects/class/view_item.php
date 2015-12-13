<?php
$page_title = "Home";
include('./mod/header.php');
?>
<div class="grid clearfix">
    <div class="col-1-1 center">
        <span id="book">
        
        </span>
    </div> <!-- End of .col-1-1 -->
</div> <!-- End of .grid -->
<script type="text/javascript">
    var isbn = queryString['isbn'];
	$('#book').append('<img src="./img/' + isbn + '.jpg" class="frame" /><br />\
	    <div>\
    	    <h2>' + itm[isbn].title + '</h2>\
    	    <h3>' + itm[isbn].author + '</h3>\
    	    <h4>' + itm[isbn].genre + '</h4>\
        </div><br />\
	    <a href="javascript:myCart.addToCart(\'' + isbn + '\');" class="button">Add to Cart</a>');
</script>
<?
include('./mod/footer.php');
?>