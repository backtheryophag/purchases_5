<?php
include './exec/connect.php';
if ($_SESSION['user']){
    header('location: ../index.php');
}
    include './src/head.php';
    include './src/header.php';

?>

<div class="card text-white bg-secondary mb-3" style="max-width: 20rem; margin: auto;">
    <div class="card-body">
        <fieldset>
            <legend>Покупка</legend>
            <form >    
                <input type="text" class="form-control" placeholder="Покупка" id="inputDefault"><br>
                <select class="form-select" id="exampleSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select><br>
                <input type="number" step="any" class="form-control" placeholder="Количество" id="inputDefault"><br>
                    <div class="input-group mb-3">
                        <input type="number" step="any" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Цена">
                        <span class="input-group-text">₽</span>
                        <!--span class="input-group-text">.00</span-->
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" step="any" class="form-control" aria-label="Amount (to the nearest dollar)" readonly="" placeholder="Стоимость">
                        <span class="input-group-text">₽</span>
                        <!--span class="input-group-text">.00</span-->
                    </div>
                <input type="checkbox" style="margin-left: 10%;" id="bought"><label for="bought">Куплено</label><br>
                <button type="submit" class="btn btn-primary">Купить</button>
            </form>
            
        </fieldset>
    </div>
</div>
  


<?

?>