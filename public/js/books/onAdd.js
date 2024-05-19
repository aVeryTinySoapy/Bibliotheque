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
            fetch('/books/insert', {
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
    let list = {'id': id}
    fetch(`/books/edit`, {
        method: 'post',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content,
            'X-Requested-With': 'XMLHttpRequest',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(list)
    })
        .then(response => response.json())
        .then(data => { //add existing things
            append_veil();
            let component = document.getElementById('template-edit');
            let child = component.content.cloneNode(true);
            getVeil().append(child);
            document.querySelector('#title').value = data[0].book_title;
            document.querySelector('#author').value = data[0].book_author;
            document.querySelector('#genre').value = data[0].book_genre;
            document.querySelector('#desc').value = data[0].book_desc;
            document.querySelector('#url').value = data[0].book_cover_img;

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
                    fetch('/books/update', {
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
