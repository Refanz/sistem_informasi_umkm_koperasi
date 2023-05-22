const tambahModal = document.getElementById('tambahModal');

if (tambahModal) {
    
    tambahModal.addEventListener('show.bs.modal', event => {

        const btn = event.relatedTarget;

        const idModal = btn.getAttribute('data-bs-id');

        if (idModal === 'asset') {
            setModal("Tambah Data Asset", "asset");
        } else if (idModal === 'omset') {
            setModal("Tambah Data Omset", "omset");
        } else if (idModal === 'tkerja') {
            setModal("Tambah Data Tenaga Kerja", "tkerja");
        } else if (idModal === 'kproduksi') {
            setModal("Tambah Data Kapasitas Produksi", "kproduksi");
        }
    });
}

function setModal(modalTitle, formName) {
    const modalHeader = document.querySelector("div.modal-header > h1.modal-title").innerHTML = modalTitle;

    const textFormCapital = formName.charAt(0).toUpperCase() + formName.slice(1);

    const routeName = `/data-usaha/tambah-data-${formName}`;

    const form = document.querySelector("div.modal-body > form");
    form.id = `form-tambah-${formName}`;
    form.action = routeName;

    const label1 = document.querySelector("#input-1 > label");
    label1.for = `jumlah-${formName}`;
    label1.innerHTML = `Jumlah ${textFormCapital}`;

    const input1 = document.querySelector("#input-1 > input");
    input1.id = `jumlah-${formName}`;
    input1.name = `jumlah_${formName}`;

    const label2 = document.querySelector("#input-2 > label");
    label2.for = `tahun-${formName}`;
    label2.innerHTML = `Tahun ${textFormCapital}`;

    const input2 = document.querySelector("#input-2 > input");
    input2.id = `tahun-${formName}`;
    input2.name = `tahun_${formName}`;

    const btnSubmit = document.querySelectorAll("div.modal-footer > button");
    btnSubmit[1].id = `tambah-data-${formName}`;

    btnSubmit[1].addEventListener('click', () => {
        form.submit();
    });
}

// if (assetModal) {
    
//     assetModal.addEventListener('show.bs.modal', event => {
//         console.log(modal[0]);
//         const btnAsset = document.getElementById('tambah-data-asset');
        
//         btnAsset.addEventListener('click', () => {
//             const tambahAsset = document.getElementById('form-tambah-asset');

//             tambahAsset.submit();
            
//         });
//     })
// }