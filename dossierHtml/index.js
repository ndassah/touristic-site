/*
      const allert = document.querySelector(' .allertConnexion ');
let errMsg = 
allert.addEventListener( 'click', () => {
   Swal.fire({
       timerProgressBar: true,
       timer: '3000',
       icon: 'error',
       position: 'bottom',
       title: 'wikx.com noded : ',
       text: 'please fill in all',
       confirmButtonText: 'it s understood',
       showCancelButton: true, 
       confirmButtonColor: 'green',
       cancelButtonColor: 'salmon',
       customClass: 'modalClass',
       focusConfirm: false,
     })
})
*/


const dismissed = document.querySelector('.nabr');
dismissed.addEventListener('click', ()=>{
    Swal.fire({
        title: ` BookingTravel noded : `,
        text: "Are you sure you want to disconnect ?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: ` Yes, I'm sure `
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            'disconnect!',
            'You have been logged out',
            'success',
            window.location = "../dossierPhp/deconnexion.php"
          )
        }
      })
})


/*
let toastMixin = 
swal.mixin( {
    toast: true,
    icon: 'success',
    title: 'Wikx.com noded:',
    animation: 'false',
    position: 'bottom',
    showConfirmButton: false,
    timer: '3000',
    timerProgressBar: true,
    didOpen: ( toast ) => {
        toast.addEventListener( 'mouseenter', Swal.stopTimer )
        toast.addEventListener( 'mouseleave', Swal.resumeTimer )
    }
} );


allert.addEventListener( 'click', () => {
    toastMixin.fire( {
        animation: true, 
        title: 'Signed in succesfully'
    } );
} );


allerts.addEventListener( 'click', ()=> {
    toastMixin.fire( {
        title: 'Wrong Password',
        icon: 'error'
    } );
} );
*/
