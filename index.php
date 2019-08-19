<?php
include __DIR__ . '/vendor/autoload.php'
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <title>Python API</title>
</head>
<body>

<div class="wrap">
    <form action="" method="post" id="form">
        <div class="container">
            <div class="radio-settings">
                <div class="custom-control custom-radio">
                    <input checked type="radio" id="customRadio1" value="FREQUENT" name="formsSettings"
                           class="custom-control-input">
                    <label class="custom-control-label" for="customRadio1">Наиболее вероятные (для Adwords)</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio2" value="ALL" name="formsSettings" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio2">Все возможные</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="text-area">
                        <div class="field-name"><label for="input">Исходный список слов</label></div>
                        <textarea name="input" placeholder="Слова через пробел или каждое с новой строки"
                                  id="input"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-area">
                        <textarea name="result" id="result" readonly></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <button class="btn btn-primary btn-block" id="actionRun">Просклонять слова</button>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-secondary btn-block" id="actionClear">Очистить поля</button>
                </div>
            </div>
        </div>
    </form>
</div>


<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"-->
<!--        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"-->
<!--        crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</body>
</html>