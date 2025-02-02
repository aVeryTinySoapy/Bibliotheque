function onAdd(){
    append_veil();
    let component = document.getElementById('template-add');
    let child = component.content.cloneNode(true);
    getVeil().append(child);
    document.querySelector('#modal-form')
        .addEventListener('submit', evt => {
            evt.preventDefault();
            evt.stopImmediatePropagation();
            let list = {};
            let form = document.querySelector('#modal-form');
            let data = new FormData(form);
            data.forEach((value, key) => {
                list[key] = value;
            });
            fetch('/genre/insert', {
                method: 'post',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content,
                    'X-Requested-With': 'XMLHttpRequest',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(list)
            })
                .then(response => response.json())
                .then(data => {
                    if(data.action === 'success'){
                        getVeil().remove();
                        location.reload();
                    }
                });
        });
}

function onEdit(id){
    let list = {'name': id}
    fetch(`/genre/edit`, {
        method: 'post',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content,
            'X-Requested-With': 'XMLHttpRequest',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(list)
    })
        .then(response => response.json())
        .then(data => { // add existing name
            append_veil();
            let component = document.getElementById('template-edit');
            let child = component.content.cloneNode(true);
            getVeil().append(child);
            document.querySelector('#genre-name').value = data.name;

            document.querySelector('#modal-form')
                .addEventListener('submit', evt => {
                    evt.preventDefault();
                    evt.stopImmediatePropagation();
                    let list = {'id': id};
                    let form = document.querySelector('#modal-form');
                    let data = new FormData(form);
                    data.forEach((value, key) => {
                        list[key] = value;
                    });
                    fetch('/genre/update', {
                        method: 'post',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content,
                            'X-Requested-With': 'XMLHttpRequest',
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(list)
                    })
                        .then(response => response.json())
                        .then(data => {
                            if(data.action === 'success'){
                                getVeil().remove();
                                location.reload();
                            }
                        });
                });
        });
}
