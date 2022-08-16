setInterval(() => {
    let xml = new XMLHttpRequest();
    xml.open("GET", "../php/getGroup.php");
    xml.addEventListener('load', () => {
        if(xml.readyState === XMLHttpRequest.DONE) {
            if(xml.status === 200) {
                let data = xml.response;
                groupList.innerHTML = data;
            }
        }
    });
    xml.send();
}, 400);

