$(function(){
    // para las tabs
    $(document).on('click.bs.tab.data-api', '[data-toggle="tab"], [data-toggle="tab"]', function (e) {
        e.preventDefault();
        $('ul.nav li a[href="' + $(this).attr('href') + '"]').tab('show');
    });

    //el rota imgs
    var fondos = [
        'img/fondos/alFiruleteo.jpg',
        'img/fondos/avatar.jpg',
        'img/fondos/buHubuHuv1.jpg',
        'img/fondos/merlu1.png',
        'img/fondos/mona1.png',
        'img/fondos/mona2.png',
        'img/fondos/tortugo.jpg',
        'img/fondos/unaRaveRural.jpg'
    ];

    var img = $('#im_fondo');
    var cadaSegs = 10 * 1000;
    var fadeSpeed = "slow";
    var i = 0;

    setInterval( function() {
        CambiaFondo();
    }, cadaSegs);

    function CambiaFondo() {
        i = nextI(i, fondos.length);
        var nuevoSrc = fondos[i];
        // console.log(nuevoSrc);

        // Fade the image out, then when done...
        img.fadeOut(fadeSpeed, function () {
            img.attr('src', nuevoSrc);
            img.fadeIn(fadeSpeed);
        });
    }

    function nextI(actI, arrLength) {
        if (actI === (arrLength - 1)) {
            actI = -1;
        }
        return (actI + 1)
    }

});