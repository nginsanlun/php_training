<?php
/**
 * Show the birthdate
 * 
 * @return birthdate
 */
function getAge($dateOfBirth)
{
  $birthday = new DateTime($dateOfBirth);
  $today = new Datetime(date('m.d.y'));
  if ($birthday>$today)
  {
    return 'You are not born yet';
  }
  $diff = $today->diff($birthday);
  return 'Your Current Age is : '.$diff->y.' Years, '.$diff->m.' month, '.$diff->d.' days';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="common.css">
    <title>Tutorial 3</title>
</head>
<body>
<h1 class="center">Calculate Age from User Input Date</h1>
<hr>
<div class="form-wrapper">
  <form>
    <div class="input-wrapper">
      <label>Input your Date</label>
      <input type="date" name="dateOfBirth" value="<?php echo (isset($_GET['dateOfBirth']))?$_GET['dateOfBirth']:'';?>">
      <input type="submit" value="Calculate Age" class="calculate-btn">
    </div>
  </form>
  <?php
    if (isset($_GET['dateOfBirth']) && $_GET['dateOfBirth']!=''){?>
      <div class="result-wrapper"> 
        <?php echo getAge($_GET['dateOfBirth']);?>
      </div>
    <?php }
  ?>
</div>
</body>
</html>