
// Alert Success
const flashdata = $('.flash-data').data('flashdata');
console.log(flashdata);
if (flashdata) {
    Swal.fire({
      title:  flashdata,
      icon:  'success'
    })
}

// Alert Error
const flashdataerr = $('.flash-data-err').data('flashdata');
console.log(flashdataerr);
if(flashdataerr){
    Swal.fire({
        title:  flashdataerr,
        icon:  'error'
      })
}

// Alert Hapus
// $(document).on('click', '.btn-hapus', function(e) {
//     e.preventDefault();
//     const href = $(this).attr('href');
//     Swal.fire({
//         title: 'Hapus data guru?',
//         icon: 'warning',
//         showCancelButton: true,
//         confirmButtonColor: '#3085d6',
//         cancelButtonColor: '#d33',
//         confirmButtonText: 'Hapus'
//     }).then((result) => {
//         if (result.isConfirmed) {
//             document.location.href = href;
//         }
//       })
// });


// Edit Modal get dataset

function getModal(){
$(document).ready(function(){
    // show.bs.modal for show modal
$('btn-edit').on('click', function(){
   const id = $(this).data('id');
   const nip = $(this).data('nip');
   const nama = $(this).data('nama');
   const mapel = $(this).data('mapel');
   const foto = $(this).data('foto');

   $('.editid').val(id);
   $('.editnip').val(nip);
   $('.editnama').val(nama);
   $('.editmapel').val(mapel);
   $('.editfoto').val(foto);

   $('#editEnhasModal').modal('show');
});
});
}

// modal validation-message
// Example starter JavaScript for disabling form submissions if there are invalid fields
// (function() {
//     'use strict';
//     window.addEventListener('load', function() {
//       // Fetch all the forms we want to apply custom Bootstrap validation styles to
//       var forms = document.getElementsByClassName('validasi-modal');
//       // Loop over them and prevent submission
//       Array.prototype.filter.call(forms, function(form) {
//         form.addEventListener('submit', function(event) {
//           if (form.checkValidity() === false) {
//             event.preventDefault();
//             event.stopPropagation();
//           }
//           form.classList.add('was-validated');
//         }, false);
//       });
//     }, false);
//   })();

