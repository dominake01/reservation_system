<?php include './include/header.php'; ?>


<div class="container">
    <h3 class="text-center pt-3 "><strong>Log In</strong></h3>
    <div class="row g-3 p-2 pt-3 align-items-center justify-content-center ">
        <div class="col-auto">
            <label for="username" class="col-form-label">Username</label>
        </div>
        <div class="col-auto">
            <input type="text" id="username" class="form-control">
        </div>
    </div>
    <div class="row g-3 p-2 align-items-center justify-content-center ">
        <div class="col-auto">
            <label for="password" class="col-form-label">Password</label>
        </div>
        <div class="col-auto">
            <input type="password" id="password" class="form-control">
        </div>
    </div>
    <div class="row g-3 p-2 align-items-center justify-content-center ">
        <div class="col-auto">
            <label for="SRcode" class="col-form-label">SR-Code</label>
        </div>
        <div class="col-auto">
            <input type="text" id="SRcode" class="form-control">
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center pt-1 ">
        <a class="btn btn-secondary" href="studHome.php" role="button">Login</a>
    </div>

</div>

<?php include './include/footer.php'; ?>
