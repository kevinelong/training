
function getData(){

    var request = new XMLHttpRequest();
    var query_string = self.location.search;

    request.addEventListener("load", renderData);
    request.open("GET", "edit.php" + query_string);
    request.send();
}


function renderData(){

    var data = JSON.parse(this.responseText);

    if(data.length > 0){
        var item = data[0];

        document.getElementById('field_id').value = item.id;
        document.getElementById('field_name').value = item.name;
        document.getElementById('field_description').value = item.description;

    }
}

document.addEventListener("DOMContentLoaded", getData);
