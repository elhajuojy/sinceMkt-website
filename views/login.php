<?php include "partials/header.php"
?>
<!-- welcome-hero end  -->
<!-- body of the page start  -->
<div class="container-form mx-auto">

    <form action="/login" method="POST">
        <div class="form-group ">
            <label for="exampleInputEmail1">Email address</label>
            <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted"> <?=$emailerror?> </small>
        </div>
        <div class="form-group w-">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control " name="password" id="exampleInputPassword1" placeholder="Password">
            <small id="emailHelp" class="form-text text-muted"> <?=$passworderror?> </small>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
<!-- footer start  -->
<?php require "partials/footer.php" ?>