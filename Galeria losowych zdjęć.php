<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria losowych zdjec</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous">
    </script>
</head>
<body style="background: black;">
<?php
$images = array(
  array(
    "src" => "https://lipsum.app/random/680x480",
    "alt" => "Image 1"
  ),
  array(
    "src" => "https://lipsum.app/random/680x480", 
    "alt" => "Image 2"
  ),
  array(
    "src" => "https://lipsum.app/random/680x480", 
    "alt" => "Image 3"
  ),
  array(
    "src" => "https://lipsum.app/random/680x480", 
    "alt" => "Image 4"
  ),
  array(
    "src" => "https://lipsum.app/random/680x480", 
    "alt" => "Image 5"
  ),
  array(
    "src" => "https://lipsum.app/random/680x480", 
    "alt" => "Image 6"
  )
);
?>
<div class="fancy-gallery mb-5">
    <div class="row">
        <?php foreach ($images as $image): ?>
            <a href="<?php echo $image['src']; ?>" class="mb-4 col-6 col-sm-4 img-fluid"
               data-fancybox="images" data-caption="Image">
               <img class="w-100 shadow-1-strong rounded mb-4" src="<?php echo $image['src']; ?>"
                    alt="<?php echo $image['alt']; ?>" />
            </a>
        <?php endforeach; ?>
    </div>
</div>
</body>
</html>
