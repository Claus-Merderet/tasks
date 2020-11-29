<?php require_once $_SERVER['D:main'].'inc/connect_db.php'; ?>
<!DOCTYPE html>
<head>
    <title>Personal account</title>
    <?php require_once $_SERVER['D:main'].'inc/head.html';?>
</head>
<body>
<?php require_once $_SERVER['D:main'].'inc/header.html'; ?>
<main>
    <div class="container">
        <h2>Заявка на горячий тур</h2>
        <form action="" method="post" id="form">
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label>Введите ФИО</label>
                    <input type="text" class="form-control"   name="name" id="name" onkeyup="validation_name()">
                    <span id="text_name"></span>
                </div>
                <div class="col-md-6 mb-3">
                    <label >Введите номер телефона</label>
                    <input type="text" class="form-control" name="number" id="number" onkeyup="validation_number()">
                    <span id="text_number"></span>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label >Введите email</label>
                    <input type="text" class="form-control" name="email"  id="email" onkeyup="validation_email()">
                    <span id="text_email"></span>
                </div>
                <div class="col-md-3 mb-3">
                    <label>Нужна виза?</label>
                    <select class="custom-select" name="visa">
                        <option>Да</option>
                        <option>Нет</option>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label >Введите страну</label>
                    <input type="text" class="form-control" name="country">
                </div>
            </div>
            <button class="btn btn-primary" type="submit" name="sub" value="Submit" id="sub">Submit form</button>
            <button class="btn btn-primary" type="submit" name="order" value="Submit_order">Show orders</button>
        </form>
        <?php require_once $_SERVER['D:main'].'inc/add_order.php'; ?>
        <?php require_once $_SERVER['D:main'].'inc/show_order.php' ?>
</main>
<?php require_once $_SERVER['D:main'].'inc/footer.html'; ?>
<script src="inc/validation.js" type="text/javascript"></script>
</body>
</html>