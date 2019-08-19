$('#actionRun').click(function (e) {
    e.preventDefault();
    let btn = $(this);
    btn.prop('disabled', true)
    $.ajax({
        url: "../ajaxAnalyze.php",
        type: "POST",
        data: $('#form').serialize(),
        dataType: "json",
        success: function (json) {
            if (json['data'] && json['success']) {
                $('#result').val(json['data']['text'])
                btn.prop('disabled', false)
            }
        },
        error: function (json) {
            console.log('error')
            btn.prop('disabled', false)
        }
    });

})


// {"text":"белый лев","formsSettings":"FREQUENT"}