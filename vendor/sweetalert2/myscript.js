const infomessage = $('#flashMessage').data('flashdata');
if( infomessage ){
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        html: infomessage,
    })
}