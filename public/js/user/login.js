const form = document.querySelector('#form-login');

form.onsubmit = async (e) => {
    e.preventDefault(); // /login/verify post
    let list = {};
    let data = new FormData(form);
    data.forEach((value, key) => {
       list[key] = value;
    });
    fetch('/login/verify', {
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
            if(data.redirect === "user"){
                document.location.href = '/catalogue/1';
            }else if(data.redirect === "admin"){
                document.location.href = '/dashboard';
            }
        })
}
