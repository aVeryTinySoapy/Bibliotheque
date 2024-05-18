
function append_veil(){
    let veil = document.createElement('div');
    veil.className = 'veil';
    document.body.appendChild(veil);
    veil.addEventListener('click', function (e)  {
        setTimeout(() => {
            veil.remove();
        }, 1250);
        e.stopImmediatePropagation();
    });
}
function remove_veil(){
    document.querySelector('.veil').remove();
}

function getVeil(){
    return document.querySelector('.veil');
}
