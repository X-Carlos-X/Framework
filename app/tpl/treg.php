<?php
include 'head_common.php';?>
<div class="container-fluid">
    <form id="form-reg" class="form-horizontal" method="post" action="reg/reg">
        <div class="form-group">
            <label for="email">Email</label><input type="text" name="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label><input type="password" name="password">
        </div>
        <div class="form-group">
            <label for="password">Password</label><input type="password" name="password">
        </div>
        <div class="form-group">
            <label for="email">Email</label><input type="text" name="email">
        </div>
        <div class="form-group">
            <button type="submit" id="btn-reg" class="btn btn-default">Sign up</button>
        </div>
    </form>
</div>

<?php include 'footer_common.php';?>
