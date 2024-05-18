function onAdd(){
    append_veil();
    let component = document.getElementById('template-add');
    let child = component.content.cloneNode(true);
    getVeil().append(child);
}
