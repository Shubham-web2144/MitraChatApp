const groupBtn = document.querySelector('#groupBtn');
const groupList = document.querySelector('.users');
const errorBox = document.querySelector('.errorBox');

groupForm.addEventListener('submit', (e) => {
    e.preventDefault();
});

groupBtn.addEventListener('click', () => {
    let xml = new XMLHttpRequest();
    xml.open("POST", "../php/group.php");
    xml.addEventListener('load', () => {
        if(xml.readyState === XMLHttpRequest.DONE) {
            if(xml.status === 200) {
                let data = xml.response;
                if(data === 'created') {
                    // window.location.reload();
                }
                else {
                    errorBox.innerHTML = data;
                    errorBox.style.display = "block"; 
                }
            }
        }
    });
    let formData = new FormData(groupForm);
    xml.send(formData);
});


