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
<div class="container">
  <h1>Bill Splitter</h1>
  <form action="index.php" method="post">
      <div class="form-group">
          <label for="split">Split how many ways?</label>
          <input type="text" name="split" required value="">
      </div>
      <div class="form-group">
          <label for="price">How much was the tab?</label>
          <input type="text" name="price" required value="">
      </div>
      <div class="form-group">
          <label for="service">How was the service:</label>
          <select name="service">
            <option value='choose'>Choose one...</option>
            <option value='good'>Good</option>
            <option value='fair'>Fair</option>
            <option value='poor'>Poor</option>
          </select>
      </div>
      <div class="form-group">
        <label for="round">Round up?</label>
        <input type="checkbox" name="roundBill" value="checked"/>
      </div>
      <input type="submit" name="btn_submit" value="Calculate Bill">
  </form>
  <div class="alert-info mg-top-20">
    <?=$results?>
  </div>

  <!--validation -->
  <div>
    <?php if(isset($errors) && ($errors!=null)): ?>
      <div class="alert alert-danger">
        <?php foreach($errors as $error): ?>
            <?=$error?><br>
        <?php endforeach; ?>
      </div>
<?php endif; ?>
</div>
</body>
</html>
