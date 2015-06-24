$(function(){
    // para la rotación de la img de fondo
    var fondos = ['img/fondos/mona1.png', 'img/fondos/mona2.png', 'img/fondos/merlu1.png'];
    var i = 0;

    // para las tabs
    $(document).on('click.bs.tab.data-api', '[data-toggle="tab"], [data-toggle="tab"]', function (e) {
        e.preventDefault()
        $('ul.nav li a[href="' + $(this).attr('href') + '"]').tab('show');

        CambiaFondo();
    })


    /*
    var img = $('#im_fondo');
    var cadaSegs = 3 * 1000;
    var fadeSpeed = "slow";
    var i = 0;

    setInterval( function() {
        i = nextI(i, fondos.length);
        var nuevoSrc = fondos[i];
        console.log(nuevoSrc);
        CambiaFondo(nuevoSrc);

        // Fade the image out, then when done...
        img.fadeOut(fadeSpeed, function() {
            i = nextI(i, fondos.length);
            var nuevoSrc = fondos[i];
            console.log(nuevoSrc);

            // Replace the src, then fade back in
            img.css('background', 'url("'+nuevoSrc+'") no-repeat;');
            img.fadeIn( fadeSpeed );
        });
    }, cadaSegs);
    */

    function nextI(actI, arrLength) {
        if (actI === (arrLength - 1)) {
            actI = -1;
        }
        return (actI + 1)
    }

    function CambiaFondo(){
        i = nextI(i, fondos.length);
        var nuevoSrc = fondos[i];

        $('body').css('background', 'url("'+nuevoSrc+'") no-repeat');
        $('body').css('background-size', 'cover');
        $('body').fadeIn();
    }
});