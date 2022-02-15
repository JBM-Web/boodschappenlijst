<?php require('partials/head.php'); ?>

<form method="POST" action="/names">
    <label for="name">name:</label><br>
    <input id="name" name="name"><br>
    <label for="amount">amount:</label><br>
    <input id="amount" name="amount"><br>
    <label for="price">price</label><br>
    <input id="price" name="price">
    <br>
    <br>
    <input type="submit" value="submit">
</form>
<br>

<?php require('partials/footer.php'); ?>