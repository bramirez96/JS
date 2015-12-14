<?php
$page_title = "Home";
include('./header.php');
?>
<div class="grid clearfix">
    <div class="col-1-1">
        <p class="dark thick">
            Are you sure you wish to delete the following item?
        </p>
        <div class="grid clearfix">
            <div class="col-auto">
                <p class="yellow 400">
                    Title:<br />
                    Author:<br />
                    Genre:<br />
                </p>
            </div> <!-- End of .col-auto -->
            <div class="col-auto">
                <p class="thin">
                    <span id="title"></span><br />
                    <span id="author"></span><br />
                    <span id="genre"></span>
                </p>
            </div> <!-- End of .col-auto -->
        </div> <!-- End of .grid -->
        <div class="grid clearfix">
            <div class="col-1-1">
                <a href="javascript:confirmDelete(queryString.isbn)" class="button">Yes</a> 
                <a href="javascript:stopDelete()" class="button">No</a>
            </div> <!-- End of .col-1-1 -->
        </div> <!-- End of .grid -->
    </div> <!-- End of .col-1-1 -->
</div> <!-- End of .grid -->
<script type="text/javascript">
    $('#title').text(itm[queryString.isbn].title);
    $('#author').text(itm[queryString.isbn].author);
    $('#genre').text(itm[queryString.isbn].genre);
    function confirmDelete(isbn) {
        delete itm[isbn];
        var x = JSON.stringify(itm);
        localStorage.item = x;
        alert("Item deleted.");
        window.location.assign("./items.php");
    }
    function stopDelete() {
        alert("Item was not deleted.");
        window.location.assign("./items.php");
    }
</script>
<?php
include('./footer.php');
?>