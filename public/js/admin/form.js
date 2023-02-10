var form_counter = 0;

function tambahFieldOmset() {
    form_counter++;

    // Omset
    var row_omset = document.createElement('div');
    row_omset.className = "row-omset"
    row_omset.style = "display: inline-flex";

    var col_omset = document.createElement('div');
    col_omset.className = "col-md-4 me-2"

    var form_g_omset = document.createElement('div');
    form_g_omset.className = "form-group";

    var label_omset = document.createElement('label');
    label_omset.className = "form-label";
    label_omset.innerHTML = "Omset"

    var input_omset = document.createElement('input');
    input_omset.type = "text";
    input_omset.name = "omset[]";
    input_omset.className = "form-control";

    // Tahun Omset
    var col_tahun_omset = document.createElement('div');
    col_tahun_omset.className = "col-md-4";

    var form_g_tahun_omset = document.createElement('div');
    form_g_tahun_omset.className = "form-group";

    var label_tahun_omset = document.createElement('label');
    label_tahun_omset.className = "form-label";
    label_tahun_omset.innerHTML = "Tahun Omset";

    var input_tahun_omset = document.createElement('input');
    input_tahun_omset.type = "text";
    input_tahun_omset.name = "tahun_omset[]";
    input_tahun_omset.className = "form-control";

    // Operasi
    var col_operasi_omset = document.createElement('div');
    col_operasi_omset.className = "col-md-1 pad-40";

    var icon_minus_omset = document.createElement('i');
    icon_minus_omset.className = "fa fa-minus fa-lg box-icon";

    icon_minus_omset.setAttribute("data-id", form_counter);

    icon_minus_omset.onclick = function() {
        var formId = this.getAttribute("data-id");
        document.getElementById('row-'+formId).remove();
        
    }
    
    var omset = document.querySelector('#omset');

    //omset
    form_g_omset.appendChild(label_omset);
    form_g_omset.appendChild(input_omset);
    col_omset.appendChild(form_g_omset);
    row_omset.appendChild(col_omset);


    //tahun omset
    form_g_tahun_omset.appendChild(label_tahun_omset);
    form_g_tahun_omset.appendChild(input_tahun_omset);
    col_tahun_omset.appendChild(form_g_tahun_omset);
    row_omset.appendChild(col_tahun_omset); 


    //icon omset
    col_operasi_omset.appendChild(icon_minus_omset);
    row_omset.appendChild(col_operasi_omset);
    row_omset.id = "row-"+form_counter;
    omset.appendChild(row_omset);

    

    
    
}