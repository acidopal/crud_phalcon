<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CRUD Phalcon</title>
        <?= $this->tag->stylesheetLink('html/css/bootstrap.min.css') ?>
        <?= $this->tag->stylesheetLink('html/css/cover.css') ?>
    <body>
        <div class="container">
            <?= $this->getContent() ?>
        </div>
        <?= $this->tag->javascriptInclude('html/js/bootstrap.min.js') ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    </body>
</html>
