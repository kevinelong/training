
function getData(){

    var request = new XMLHttpRequest();

    request.addEventListener("load", renderData);
    request.open("GET", "list.json");
    request.send();
}


var viewFields = [
    "name",
    "description"
];

function renderData(){
    debugger;

    var data = JSON.parse(this.responseText);
    var length = data.length;

    var body = document.getElementsByTagName('body')[0];

    var selectedIndex = "333";


    var targetTable = document.getElementById('fruit');
    // var targetTable = get('fruit');

    for(var i = 0; i < length; i++){

        var item = data[i];

        // var tr = document.createElement("tr");

        var template = document.getElementsByClassName("template")[0];
        // var template = getByClass("template");

        var tr = template.cloneNode(true);
        tr.classList.remove('template');

        tr.dataset.id = item.id;
        // tr.setAttibute("data-id", item.id);

        for(var f = 0; f < viewFields.length; f++) {
            var field = viewFields[f];
            // var td = document.createElement("td");
            var td = tr.getElementsByClassName('field_' + field)[0];
            td.innerHTML = item[field];
            // tr.appendChild(td);
        }

        targetTable.appendChild(tr);

    }
}

document.addEventListener("DOMContentLoaded", getData);
