function add() {

    var sum = 0;

    var count = document.getElementById("bill_table").getElementsByTagName("tr").length-2;

    for(var i=1;i<count;i++){
        var str = "price_"+ String(i);
        var num = Number(document.getElementById(str).value);
        sum += num;
    }
    document.getElementById("totalSum").innerHTML = sum;
    document.getElementById("hiddenTotalSum").value = sum;
}

function add_entry(){
    var tb = document.getElementById('bill_table');
    var count = tb.getElementsByTagName("tr").length

    var rowNum = count-2; //one tr is heading, one is total sum
    var newRow = tb.insertRow(rowNum);
    newRow.classList.add("item");
    var td1 = newRow.insertCell(0);
    var td2 = newRow.insertCell(1);
    td1.innerHTML = '<input type="text" id="item_' + rowNum + '" name="item_' + rowNum + '">';
    td2.innerHTML = '<input type="number" id="price_' + rowNum + '" name="price_' + rowNum + '">';
    return;
}