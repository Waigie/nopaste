/**
 * Created with JetBrains PhpStorm.
 * User: waigie
 * Date: 08.07.13
 * Time: 23:46
 * To change this template use File | Settings | File Templates.
 */
$(document).ready(function() {
    $('#shorten').click(function(e) {
        $.getJSON("/shorten", {
                url: $('#url').val()
            },
            function(data) {
                if(data.error != 'false') {
                    alert('An error occurred');
                } else {
                    $('#url').val(data.url);
                    $('#copy').attr('data-clipboard-text', data.url);
                    $('#shorten').hide();
                }
            }
        );
    })
});