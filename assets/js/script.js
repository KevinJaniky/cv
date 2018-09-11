$(document).ready(function () {

    $('#clickblock').click(function () {
        var start_text = $('#clickblock a').text();
        var split_text = start_text.split(' ');
        var count = split_text.length;
        var end_text = 'Il y a des fautes dans cette phrase. Cliquez ici pour les corriger.';
        var array_end = end_text.split(' ');
        var i = 0;

        var intervalId = setInterval(function(){
            if(i === (count)){
                clearInterval(intervalId);
            }

            var deb = array_end.slice(0, i);
            var end = split_text.slice(i, count);
            var final = $.merge(deb, end);

            $("#clickblock a").text(final.join(' '));
            console.log();
            i++;
        }, 100);

    });




});

