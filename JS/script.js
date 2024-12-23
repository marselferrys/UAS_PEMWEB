document.getElementById('studentForm').addEventListener('submit', function (event) {
    // Prevent form submission if validation fails
    if (!validateForm()) {
        event.preventDefault();
    }
});

function validateForm() {
    // Retrieve form values
    const name = document.getElementById('name').value.trim();
    const nim = document.getElementById('nim').value.trim();
    const prodi = document.getElementById('prodi').value;
    const gender = document.querySelector('input[name="gender"]:checked');
    const email = document.getElementById('email').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const interest = document.getElementById('interest').value.trim();
    const address = document.getElementById('address').value.trim();
    const pimage = document.getElementById('pimage').value;

    // Check if fields are empty
    if (!name || !nim || !prodi || !gender || !email || !phone || !interest || !address) {
        alert('Semua field wajib diisi!');
        return false;
    }

    // Validate email format
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert('Format email tidak valid!');
        return false;
    }

     // Validate nim
     const nimPattern = /^[0-9]+$/;
     if (!nimPattern.test(nim) ) {
         alert('NIM hanya boleh mengandung angka!');
         return false;
     }else if( nim.length !== 9 ){
        alert('NIM harus berisi 9 angka!');     
    }

    // Validate phone number
    const phonePattern = /^[0-9]+$/;
    if (!phonePattern.test(phone)) {
        alert('Nomor telepon hanya boleh mengandung angka!');
        return false;
    }

    // Validate file upload
    if (pimage) {
        const allowedExtensions = /(\.jpg|\.jpeg)$/i;
        if (!allowedExtensions.test(pimage)) {
            alert('File foto profil harus dalam format JPEG!');
            return false;
        }
    } else {
        alert('Foto profil wajib diunggah!');
        return false;
    }
}
