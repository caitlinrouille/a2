<?php require('billLogic.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Caitlin Rouille - a2 Assignment</title>
    <meta charset='utf-8'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/styles.css' rel='stylesheet'>
</head>
<body>
    <div class="container mg-top-20">
        <h3>Bill Splitter</h3>
        <form action="index.php" method="post">
            <div class="form-group">
                <label for="split">Split how many ways?</label> <input id="split" name="split" required="" type="text">
            </div>
            <div class="form-group">
                <label for="price">How much was the tab?</label> <input id="price" name="price" required="" type="text">
            </div>
            <div class="form-group">
                <label for="service">How was the service:</label> <select id="service" name="service">
                    <option value='choose'>
                        Choose one...
                    </option>
                    <option value='good'>
                        Good
                    </option>
                    <option value='fair'>
                        Fair
                    </option>
                    <option value='poor'>
                        Poor
                    </option>
                </select>
            </div>
            <div class="form-group">
                <label for="roundBill">Round up?</label> <input id="roundBill" name="roundBill" type="checkbox" value="checked">
            </div><input name="btn_submit" type="submit" value="Calculate Bill">
        </form>
        <div class="alert-info mg-top-20">
            <?=$results?>
        </div>
    </div><!--validation -->
    <div>
        <?php if(isset($errors) && ($errors!=null)): ?>
        <div class="alert alert-danger">
            <?php foreach($errors as $error): ?><?=$error?>
            <br>
            <?php endforeach; ?>
        </div><?php endif; ?>
    </div>
</body>
</html>
