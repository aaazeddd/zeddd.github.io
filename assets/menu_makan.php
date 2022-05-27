<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countdown</title>
    <link rel="icon" href="<?= ('assets/img/icon.jpg') ?>">
    <link rel="stylesheet" href="<?= ('assets/css/style.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= ('assets/fontawesome6.1.1/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= ('assets/jquery-confirm-v3.3.4/css/jquery-confirm.css') ?>">
    <script src="<?= ('assets/jquery-3.6.0.min.js') ?>"></script>
    <script src="<?= ('assets/jquery-confirm-v3.3.4/js/jquery-confirm.js') ?>"></script>
  </head>
  <?php 
    $menu = file("http://192.168.168.18/Countdown2/assets/menu_makan.txt");
    // echo "<pre>"; print_r($menu); die;
  ?>
  <body>
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>Tgl</th>
          <th>Menu Makan</th>
        </tr>
      </thead>
      <tbody>
        <?php for ($i = 0; $i < count($menu); $i++) { ?>
          <tr>
            <td><?= $i+1 ?></td>
            <td><?= $menu[$i] ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </body>
</html>