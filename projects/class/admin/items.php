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
                    <button>Add Item</button>
                </p>
            </div> <!-- End of .col-1-1 -->
        </div> <!-- End of .grid -->
        <div class="grid clearfix">
            <div class="col-1-6">
                <ul>
                    <li>ISBN</li>
                    <span id="isbn">
                        
                    </span>
                </ul>
            </div> <!-- End of .col-1-6 -->
            <div class="col-1-3">
                <ul>
                    <li>Title</li>
                    <span id="title">
                        
                    </span>
                </ul>
            </div> <!-- End of .col-1-3 -->
            <div class="col-1-6">
                <ul>
                    <li>Author</li>
                    <span id="author">
                        
                    </span>
                </ul>
            </div> <!-- End of .col-1-6 -->
            <div class="col-1-6">
                <ul>
                    <li>Genre</li>
                    <span id="genre">
                        
                    </span>
                </ul>
            </div> <!-- End of .col-1-6 -->
            <div class="col-1-6">
                <ul>
                    <li>Delete</li>
                    <span id="options">
                        
                    </span>
                </ul>
            </div> <!-- End of .col-1-6 -->
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
        $('#options').append("<li data-item-num-users=\"" + (x+1) + "\"><a href=\"./delete_item.php?isbn=" + encodeURIComponent(z) + "\">Delete</a>");
    }
    var users = new Pages("users", x, 5, 10);
</script>
<?
include('./footer.php');
?>