let form_counter_omset = 0;
let form_counter_aset = 0;
let form_counter_tenaga_kerja = 0;
let form_counter_kapasitas_produksi = 0;


// Fungsi Tambah Field Omset
function tambahFieldOmset() {
    form_counter_omset++;

    // Omset
    let row_omset = document.createElement('div');
    row_omset.className = "row-omset"
    row_omset.style = "display: inline-flex";

    let col_omset = document.createElement('div');
    col_omset.className = "col-md-5 me-2"

    let form_g_omset = document.createElement('div');
    form_g_omset.className = "form-group";

    let label_omset = document.createElement('label');
    label_omset.className = "form-label";
    label_omset.innerHTML = "Omset"

    let input_omset = document.createElement('input');
    input_omset.type = "text";
    input_omset.name = "omset[]";
    input_omset.className = "form-control";

    // Tahun Omset
    let col_tahun_omset = document.createElement('div');
    col_tahun_omset.className = "col-md-5";

    let form_g_tahun_omset = document.createElement('div');
    form_g_tahun_omset.className = "form-group";

    let label_tahun_omset = document.createElement('label');
    label_tahun_omset.className = "form-label";
    label_tahun_omset.innerHTML = "T. Omset";

    let input_tahun_omset = document.createElement('input');
    input_tahun_omset.type = "text";
    input_tahun_omset.placeholder = "Tahun Omset";
    input_tahun_omset.name = "tahun_omset[]";
    input_tahun_omset.className = "form-control";

    // Operasi
    let col_operasi_omset = document.createElement('div');
    col_operasi_omset.className = "col-md-1 pad-40";

    let icon_minus_omset = document.createElement('i');
    icon_minus_omset.className = "fa fa-minus fa-lg box-icon";

    icon_minus_omset.setAttribute("data-id", form_counter_omset);

    icon_minus_omset.onclick = function() {
        let formId = this.getAttribute("data-id");
        document.getElementById('row-omset-'+formId).remove();
        
    }
    
    let omset = document.querySelector('#omset');

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
    row_omset.id = "row-omset-"+form_counter_omset;
    omset.appendChild(row_omset);
}


// Fungsi Tambah Field Aset
function tambahFieldAset() {
    form_counter_aset++;

    // Omset
    let row_aset = document.createElement('div');
    row_aset.className = "row-aset"
    row_aset.style = "display: inline-flex";

    let col_aset = document.createElement('div');
    col_aset.className = "col-md-5 me-2"

    let form_g_aset = document.createElement('div');
    form_g_aset.className = "form-group";

    let label_aset = document.createElement('label');
    label_aset.className = "form-label";
    label_aset.innerHTML = "Aset"

    let input_aset = document.createElement('input');
    input_aset.type = "text";
    input_aset.name = "aset[]";
    input_aset.className = "form-control";

    // Tahun Aset
    let col_tahun_aset = document.createElement('div');
    col_tahun_aset.className = "col-md-5";

    let form_g_tahun_aset = document.createElement('div');
    form_g_tahun_aset.className = "form-group";

    let label_tahun_aset = document.createElement('label');
    label_tahun_aset.className = "form-label";
    label_tahun_aset.innerHTML = "T. Aset";

    let input_tahun_aset = document.createElement('input');
    input_tahun_aset.type = "number";
    input_tahun_aset.placeholder = "Tahun Aset";
    input_tahun_aset.name = "tahun_aset[]";
    input_tahun_aset.className = "form-control";

    // Operasi
    let col_operasi_aset = document.createElement('div');
    col_operasi_aset.className = "col-md-1 pad-40";

    let icon_minus_aset = document.createElement('i');
    icon_minus_aset.className = "fa fa-minus fa-lg box-icon";

    icon_minus_aset.setAttribute("data-id", form_counter_aset);

    icon_minus_aset.onclick = function() {
        let formId = this.getAttribute("data-id");
        document.getElementById('row-aset-'+formId).remove();
        
    }
    
    let aset = document.querySelector('#aset');

    //aset
    form_g_aset.appendChild(label_aset);
    form_g_aset.appendChild(input_aset);
    col_aset.appendChild(form_g_aset);
    row_aset.appendChild(col_aset);


    //tahun aset
    form_g_tahun_aset.appendChild(label_tahun_aset);
    form_g_tahun_aset.appendChild(input_tahun_aset);
    col_tahun_aset.appendChild(form_g_tahun_aset);
    row_aset.appendChild(col_tahun_aset); 


    //icon aset
    col_operasi_aset.appendChild(icon_minus_aset);
    row_aset.appendChild(col_operasi_aset);
    row_aset.id = "row-aset-"+form_counter_aset;
    aset.appendChild(row_aset);
}

// Fungsi Tambah Field Kapasitas Produk
function tambahFieldKapasitasProduksi() {
    form_counter_kapasitas_produksi++;

    // Omset
    let row_kapasitas_produksi = document.createElement('div');
    row_kapasitas_produksi.className = "row-kapasitas_produksi"
    row_kapasitas_produksi.style = "display: inline-flex";

    let col_kapasitas_produksi = document.createElement('div');
    col_kapasitas_produksi.className = "col-md-5 col-5 me-2"

    let form_g_kapasitas_produksi = document.createElement('div');
    form_g_kapasitas_produksi.className = "form-group";

    let label_kapasitas_produksi = document.createElement('label');
    label_kapasitas_produksi.className = "form-label";
    label_kapasitas_produksi.innerHTML = "Kapasitas Produksi"

    let input_kapasitas_produksi = document.createElement('input');
    input_kapasitas_produksi.type = "text";
    input_kapasitas_produksi.name = "kapasitas_produksi[]";
    input_kapasitas_produksi.className = "form-control";

    // Tahun kapasitas_produksi
    let col_tahun_kapasitas_produksi = document.createElement('div');
    col_tahun_kapasitas_produksi.className = "col-md-5 col-5";

    let form_g_tahun_kapasitas_produksi = document.createElement('div');
    form_g_tahun_kapasitas_produksi.className = "form-group";

    let label_tahun_kapasitas_produksi = document.createElement('label');
    label_tahun_kapasitas_produksi.className = "form-label";
    label_tahun_kapasitas_produksi.innerHTML = "T. Kapasitas Produksi";

    let input_tahun_kapasitas_produksi = document.createElement('input');
    input_tahun_kapasitas_produksi.type = "text";
    input_tahun_kapasitas_produksi.placeholder = "Tahun Kapasitas Produksi";
    input_tahun_kapasitas_produksi.name = "tahun_kapasitas_produksi[]";
    input_tahun_kapasitas_produksi.className = "form-control";

    // Operasi
    let col_operasi_kapasitas_produksi = document.createElement('div');
    col_operasi_kapasitas_produksi.className = "col-md-1 pad-40";

    let icon_minus_kapasitas_produksi = document.createElement('i');
    icon_minus_kapasitas_produksi.className = "fa fa-minus fa-lg box-icon";

    icon_minus_kapasitas_produksi.setAttribute("data-id", form_counter_kapasitas_produksi);

    icon_minus_kapasitas_produksi.onclick = function() {
        let formId = this.getAttribute("data-id");
        document.getElementById('row-kp-'+formId).remove();
        
    }
    
    let kapasitas_produksi = document.querySelector('#kapasitas-produksi');

    //kapasitas_produksi
    form_g_kapasitas_produksi.appendChild(label_kapasitas_produksi);
    form_g_kapasitas_produksi.appendChild(input_kapasitas_produksi);
    col_kapasitas_produksi.appendChild(form_g_kapasitas_produksi);
    row_kapasitas_produksi.appendChild(col_kapasitas_produksi);


    //tahun kapasitas_produk
    form_g_tahun_kapasitas_produksi.appendChild(label_tahun_kapasitas_produksi);
    form_g_tahun_kapasitas_produksi.appendChild(input_tahun_kapasitas_produksi);
    col_tahun_kapasitas_produksi.appendChild(form_g_tahun_kapasitas_produksi);
    row_kapasitas_produksi.appendChild(col_tahun_kapasitas_produksi); 


    //icon kapasitas_produksi
    col_operasi_kapasitas_produksi.appendChild(icon_minus_kapasitas_produksi);
    row_kapasitas_produksi.appendChild(col_operasi_kapasitas_produksi);
    row_kapasitas_produksi.id = "row-kp-"+form_counter_kapasitas_produksi;
    kapasitas_produksi.appendChild(row_kapasitas_produksi);
}

// Fungsi Tambah Field Tenaga Kerja
function tambahFieldTenagaKerja() {
    form_counter_tenaga_kerja++;

    // Omset
    let row_tenaga_kerja = document.createElement('div');
    row_tenaga_kerja.className = "row-tenaga_kerja"
    row_tenaga_kerja.style = "display: inline-flex";

    let col_tenaga_kerja = document.createElement('div');
    col_tenaga_kerja.className = "col-md-5 col-5 me-2"

    let form_g_tenaga_kerja = document.createElement('div');
    form_g_tenaga_kerja.className = "form-group";

    let label_tenaga_kerja = document.createElement('label');
    label_tenaga_kerja.className = "form-label";
    label_tenaga_kerja.innerHTML = "Tenaga Kerja"

    let input_tenaga_kerja = document.createElement('input');
    input_tenaga_kerja.type = "text";
    input_tenaga_kerja.name = "tenaga_kerja[]";
    input_tenaga_kerja.className = "form-control";

    // Tahun tenaga_kerja
    let col_tahun_tenaga_kerja = document.createElement('div');
    col_tahun_tenaga_kerja.className = "col-md-5 col-5";

    let form_g_tahun_tenaga_kerja = document.createElement('div');
    form_g_tahun_tenaga_kerja.className = "form-group";

    let label_tahun_tenaga_kerja = document.createElement('label');
    label_tahun_tenaga_kerja.className = "form-label";
    label_tahun_tenaga_kerja.innerHTML = "T. Tenaga Kerja";

    let input_tahun_tenaga_kerja = document.createElement('input');
    input_tahun_tenaga_kerja.type = "text";
    input_tahun_tenaga_kerja.placeholder = "Tahun Tenaga Kerja";
    input_tahun_tenaga_kerja.name = "tahun_tenaga_kerja[]";
    input_tahun_tenaga_kerja.className = "form-control";

    // Operasi
    let col_operasi_tenaga_kerja = document.createElement('div');
    col_operasi_tenaga_kerja.className = "col-md-1 pad-40";

    let icon_minus_tenaga_kerja = document.createElement('i');
    icon_minus_tenaga_kerja.className = "fa fa-minus fa-lg box-icon";

    icon_minus_tenaga_kerja.setAttribute("data-id", form_counter_tenaga_kerja);

    icon_minus_tenaga_kerja.onclick = function() {
        let formId = this.getAttribute("data-id");
        document.getElementById('row-tk-'+formId).remove();
        
    }
    
    let tenaga_kerja = document.querySelector('#tenaga-kerja');

    //tenaga_kerja
    form_g_tenaga_kerja.appendChild(label_tenaga_kerja);
    form_g_tenaga_kerja.appendChild(input_tenaga_kerja);
    col_tenaga_kerja.appendChild(form_g_tenaga_kerja);
    row_tenaga_kerja.appendChild(col_tenaga_kerja);


    //tahun tenaga_kerja
    form_g_tahun_tenaga_kerja.appendChild(label_tahun_tenaga_kerja);
    form_g_tahun_tenaga_kerja.appendChild(input_tahun_tenaga_kerja);
    col_tahun_tenaga_kerja.appendChild(form_g_tahun_tenaga_kerja);
    row_tenaga_kerja.appendChild(col_tahun_tenaga_kerja); 


    //icon tenaga_kerja
    col_operasi_tenaga_kerja.appendChild(icon_minus_tenaga_kerja);
    row_tenaga_kerja.appendChild(col_operasi_tenaga_kerja);
    row_tenaga_kerja.id = "row-tk-"+form_counter_tenaga_kerja;
    tenaga_kerja.appendChild(row_tenaga_kerja);
}