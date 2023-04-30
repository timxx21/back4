<!DOCTYPE html>
<html lang="ru" style="min-width:400px; overflow-x:auto;">
<head>
  <style>
    .error {
      border: 2px solid red;
    }
  </style>
  <title>Forms</title>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body class ="container d-flex flex-column">
  <form action="" method="POST" class="ms-auto me-auto d-flex flex-column justify-content-center">
        <p class="text-center fw-bold fs-2">Форма</p>
        <br>

        <div class="mb-3">
          <label for="nameinput" class="form-label"></label>
          <input name="name" class="form-control" id="nameinput" placeholder="ФИО" <?php if ($errors['name']) {print 'class="error"';} ?> value="<?php print $values['name']; ?>">
          <label for="nameinput" class="form-label"></label>
          <input name="email" class="form-control" id="emailinput" placeholder="Email" <?php if ($errors['email']) {print 'class="error"';} ?> value="<?php print $values['email']; ?>">
          <label for="nameinput" class="form-label"></label>
          <select name="year" class="form-control" id="date1" placeholder="Год рождения" <?php if ($errors['year']) {print 'class="error"';} ?> value="<?php print $values['year']; ?>">
          <?php
          for ($i = 1923; $i <= 2023; $i++) {
            
            if ($i == $values['year']) {
              printf('<option selected value="%d">%d</option>', $i, $i);
            } 
            
            else {
            printf('<option value="%d">%d</option>', $i, $i);
            }
          }
          ?>
          </select>
        </div>
        
        <!-- <div class="container-fluid mb-4 ">
          <label for="gender" class="form-label">Пол</label>
          <select class="form-control" name="gender" id="gender" size="2" <?php if ($errors['gender']) {print 'class="error"';} ?> value="<?php print $values['gender']; ?>">
            <option value="male">Мужской</option>
            <option value="female">Женский</option>
          </select>

        </div> -->

        <div class="container-fluid btn-group mb-4 " role="group">
          <input type="radio" class="btn-check" name="gender" id="gender_male" value="male" <?php if($values['gender'] == "male") {print 'checked';}?>>
          <label class="btn btn-outline-primary" for="gender_male">Мужской</label>

          <input type="radio" class="btn-check" name="gender" id="gender_female" value="female" <?php if($values['gender'] == "female") {print 'checked';}?>>
          <label class="btn btn-outline-primary" for="gender_female">Женский</label>
        </div>

        

        

        <!-- <div class="container-fluid mb-4 ">
          <label for="limbs" class="form-label">Количество конечностей</label>
          <select class="form-control" name="limbs" id="limbs" size="4" <?php if ($errors['limbs']) {print 'class="error"';} ?> value="<?php print $values['limbs']; ?>">
            <option value="1">Одна</option>
            <option value="2">Две</option>
            <option value="3">Три</option>
            <option value="4">Четыре</option>
          </select>

        </div> -->

        <p class="text-center">Количество конечностей</p>
        <div class="container-fluid btn-group mb-3" role="group">

          <input type="radio" class="btn-check" name="limbs" id="option1" value="1" <?php if($values['limbs'] == "1") {print 'checked';}?>>
          <label class="btn btn-outline-primary" for="option1">Одна</label>

          <input type="radio" class="btn-check" name="limbs" id="option2" value="2" <?php if($values['limbs'] == "2") {print 'checked';}?>>
          <label class="btn btn-outline-primary" for="option2">Две</label>

          <input type="radio" class="btn-check" name="limbs" id="option3" value="3" <?php if($values['limbs'] == "3") {print 'checked';}?>>
          <label class="btn btn-outline-primary" for="option3">Три</label>

          <input type="radio" class="btn-check" name="limbs" id="option4" value="4" <?php if($values['limbs'] == "4") {print 'checked';}?>>
          <label class="btn btn-outline-primary" for="option4">Четыре</label>

        </div>





        <!-- <?php print_r($values['abilities']);?> -->
        <div class="text-center">
          <label class="" for="superpowers" id="superpowers_label">Суперспособности</label><br>
          <select class="form-select mb-3" name="abilities[]" multiple = "multiple" id="superpowers" <?php if ($errors['abilities']) {print 'class="error"';} ?> value="<?php print $values['abilities']; ?>">
            
            <option value="1" <?php if(in_array("1", $values['abilities'])) {print('selected="selected"');} ?>>Бессмертие</option>
            <option value="2" <?php if(in_array("2", $values['abilities'])) {print('selected="selected"');} ?>>Прохождение сквозь стены</option>
            <option value="3" <?php if(in_array("3", $values['abilities'])) {print('selected="selected"');} ?>>Левитация</option>
            <option value="4" <?php if(in_array("4", $values['abilities'])) {print('selected="selected"');} ?>>Умение выкидывать натуральные 20 каждый бросок</option>
          </select>
        </div>

        <div class="text-center mb-4">
          <label class="form-label" for="biography">Биография</label><br>
          <textarea name="biography" class="form-control <?php if ($errors['biography']) {print 'error';} ?>" id="biography" aria-label="With textarea" placeholder="Расскажите о себе" <?php if ($errors['biography']) {print 'class="error"';} ?>><?php echo htmlspecialchars($values['biography']); ?></textarea>
        </div>

        <div class="text-left mb-5">

          <!--input name="checkbox" type="checkbox" class="btn-check" id="confirm" <//?php if ($errors['checkbox']) {print 'class="error"';} ?> value="<//?php print $values['checkbox']; ?>"-->
          <input name="checkbox" type="checkbox" class="btn-check" id="confirm" value="1">

          <label class="btn btn-outline-primary" for="confirm">✓</label>
        </div>
        <div class="text-center mb-4">
          <input class="btn btn-success col-6" type="submit" value="Отправить">
        </div>
      </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  <script src="script.js" defer></script>
  <?php
if (!empty($messages)) {
  print('<div id="messages">');
  // Выводим все сообщения.
  foreach ($messages as $message) {
    print($message);
  }
  print('</div>');
}

?>
</body>
</html>
