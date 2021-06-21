$(document).ready(function() {
    $(document).on('click', '.shrink-btn', function() {
        let url = $('#url').val()
        $.ajax({
            type: "POST",
            url: 'inc/shrink.inc.php',
            data: {
                shrink: '1',
                url: url
            },
            dataType:'json',
            success: function(data){
                if(data.code) {
                    let html = `
                        <p>Your link:</p>
                        <p><a class="copy-link" href="https://apps.coffeedzic.com/shrink-php/${data.code}">https://apps.coffeedzic.com/shrink-php/${data.code}</a></p> 
                    `
                    $('.response').html(html);
                } else if(data.error) {
                    simpleAlert.error('URL is not valid')
                }               
            }
        });
    });

    $(document).on('click', '.insight-btn', function() {
        let url = $('#url').val()
        $.ajax({
            type: "POST",
            url: 'inc/insight.inc.php',
            data: {
                insight: '1',
                url: url
            },
            dataType: 'json',
            success: function(data){
                if(data) {
                    let html = `
                        <p># of redirects: ${data.redirects}</p>
                        <p><a href="${data.url}">${data.url}</p>
                    `
                    $('.response').html(html);
                } else if(!data) {
                    simpleAlert.error('Code is not in our database')
                }             
            }
        });
    });

    $(document).on('click', '.copy-btn', function() {
        let link = $('.copy-link').attr('href');
        if(link == null) {
            simpleAlert.error('Shrink your URL first');
            return;
        }
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val(link).select();
        document.execCommand("copy");
        $temp.remove();
        simpleAlert.info('Link coppied to clipboard');
    });
});