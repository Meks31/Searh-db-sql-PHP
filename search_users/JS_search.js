function search() {
    $.ajax({
        url: 'PHP_users.php',
        method: 'post',
        dataType: 'json',
        data: {
            word: document.getElementById('search').value
        },
        success: function(json){
            $('#data').html(json['text'])
        }
    });
}