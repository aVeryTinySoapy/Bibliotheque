const form = document.querySelector('#form-register');

form.onsubmit = async (e) => {
    e.preventDefault(); // /login/verify post
    let list = {};
    let data = new FormData(form);
    data.forEach((value, key) => {
        list[key] = value;
    });
    fetch('/register', {
        method: 'post',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content,
            'X-Requested-With': 'XMLHttpRequest',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(list)
    })
        .then(response => {
            if(response.status === 422){
                throw new Error('input');
            }else if(!response.ok){
                throw new Error('status');
            }else{
                return response.json();
            }
        })
        .then(data => {
            if(data.redirect){
                document.location.href = '/login';
            }
        })
        .catch(error => {
        if(error.message === 'status'){
            console.error(error.message);
        }else{
            console.log('input error')
        }
    })
}
