
function append_veil(){
    let veil = document.createElement('div');
    veil.className = 'veil';
    document.body.appendChild(veil);
    veil.addEventListener('click', function (e)  {
        console.log('parent clicked')
        e.stopImmediatePropagation();
    });
}
function remove_veil(){
    document.querySelector('.veil').remove();
}

function getVeil(){
    return document.querySelector('.veil');
}
