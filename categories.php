<?php
include './src/head.php';
include './src/header.php';
?>

<div class="card text-white bg-dark mb-3" style="max-width: 20rem; margin: auto;">
    <div class="card-header">Добавить категорию</div>
    <div class="card-body">
    <form action="../exec/authorisation.php" method="post">

        <div class="form-group">
            <input type="text" class="form-control" placeholder="Категория" ><br>
            <input type="color" class="form-control">
            <!--label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small-->
        </div>
        <button type="submit" class="btn btn-primary">ок</button>
    </form>
    </div>
</div>



<?
?>