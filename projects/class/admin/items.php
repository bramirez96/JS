<?php
$page_title = "Home";
include('./header.php');
?>
<div class="grid clearfix">
    <div class="list_users col-1-1">
        <h1>Items</h1>
        <div class="grid clearfix">
            <div class="col-1-1">
                <p>
                    <a class="button" href="javascript:alert('I was gonna make this page, but I didn\'t want to write the PHP code for uploading images.')">Add Item</a>
                </p>
            </div> <!-- End of .col-1-1 -->
        </div> <!-- End of .grid -->
        <div class="grid clearfix">
            <div class="col-auto">
                <ul>
                    <li>ISBN</li>
                    <span id="isbn">
                        
                    </span>
                </ul>
            </div> <!-- End of .col-auto -->
            <div class="col-auto">
                <ul>
                    <li>Title</li>
                    <span id="title">
                        
                    </span>
                </ul>
            </div> <!-- End of .col-auto -->
            <div class="col-auto">
                <ul>
                    <li>Author</li>
                    <span id="author">
                        
                    </span>
                </ul>
            </div> <!-- End of .col-auto -->
            <div class="col-auto">
                <ul>
                    <li>Genre</li>
                    <span id="genre">
                        
                    </span>
                </ul>
            </div> <!-- End of .col-auto -->
            <div class="col-auto">
                <ul>
                    <li>Price</li>
                    <span id="price" class="right">
                    
                    </span>
                </ul>
            </div> <!-- End of .col-auto -->
            <div class="col-auto">
                <ul>
                    <li>Delete</li>
                    <span id="options">
                        
                    </span>
                </ul>
            </div> <!-- End of .col-auto -->
        </div> <!-- End of .grid -->
        <div class="grid clearfix">
            <div class="col-1-1 center">
                <button id="users_back">&lt;</button>
                <span id="users_range"></span>
                <button id="users_next">&gt;</button>
            </div> <!-- End of .col-1-1 -->
        </div> <!-- End of .grid -->
    </div> <!-- End of .col-1-1 -->
</div> <!-- End of .grid -->
<script type="text/javascript">
    for (var x = 0; x < Object.keys(itm).length; x++) {
        var z = Object.keys(itm)[x];
        $('#isbn').append("<li data-item-num-users=\"" + (x+1) + "\">" + z + "</li>");
        $('#title').append("<li data-item-num-users=\"" + (x+1) + "\">" + itm[z].title + "</li>");
        $('#author').append("<li data-item-num-users=\"" + (x+1) + "\">" + itm[z].author + "</li>");
        $('#genre').append("<li data-item-num-users=\"" + (x+1) + "\">" + itm[z].genre + "</li>");
        $('#price').append("<li data-item-num-users=\"" + (x+1) + "\">$" + itm[z].price + "</li>");
        $('#options').append("<li data-item-num-users=\"" + (x+1) + "\"><a href=\"./delete_item.php?isbn=" + encodeURIComponent(z) + "\">Delete</a>");
    }
    var users = new Pages("users", x, 6, 10);
</script>
<?php
include('./footer.php');
?>