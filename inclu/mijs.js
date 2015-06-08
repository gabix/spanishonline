var selectedIco = 0;

function icoclick(n) {
    if (n === selectedIco) return; // nothing to do.
    
    var lolo = document.getElementById('ico' + selectedIco);
    lolo.className = 'b_ico';
    
    lolo = document.getElementById('ico' + n);
    lolo.className = 'select b_ico';
    
    lolo = document.getElementById('d_cont' + selectedIco);
    lolo.style.display = 'none';
    
    lolo = document.getElementById('d_cont' + n);
    lolo.style.display = 'block';
    
    selectedIco = n;
}

function flechlick(d) {
    n = selectedIco + d;
    if (n === -1) { n = 3; } else if (n === 4) { n = 0; }
    icoclick(n);
}


/*
var selArchi = 'global';

function archiClick(dame) {
    var lolo = document.getElementById('d_' + selArchi);
    lolo.style.display = 'none';
    
    lolo = document.getElementById('d_' + dame);
    lolo.style.display = 'block';
    
    selArchi = dame;
}
*/