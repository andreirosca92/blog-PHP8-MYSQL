<?php
include('authentication.php');
include('includes/header.php');
include('config/dbcon.php');
?>

<div class="container-fluid px-4">
    <h4 class="mt-4">Users</h4>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">Users</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Registered User</h4>
                </div>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>

    <?php

    include('includes/footer.php');
    include('includes/scripts.php');

    ?>