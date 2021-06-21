/**
 * Shrink PHP
 * main.js - Main JavaScript file
 *
 * @author    Edin Kahvedžić <edin@coffeedzic.com>
 * @version 1.0.0
 * @license
 *   
 */

$(document).ready(function() {

    /**
     * Function for shortening our url, updating database, and getting code
     * 
     * @param {String} url
     * 
     * @return {String} JSON
     * 
     */

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
                        <p><a class="copy-link" href="${window.location.href}${data.code}">${window.location.href}${data.code}</a></p> 
                    `
                    $('.response').html(html);
                } else if(data.error) {
                    simpleAlert.error('URL is not valid')
                }               
            }
        });
    });

    /**
     * Function for cheking # of redirects by our shortened link
     * 
     * @param {String} url
     * 
     * @return {String} JSON
     * 
     */

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

    /**
     * Function that copy our generated URL to clipboard
     * 
     * @return {String}
     * 
     */

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