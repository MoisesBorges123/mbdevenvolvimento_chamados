window._ = require('lodash');
require('jquery');
import { createWhatsAppApi } from 'apigratis-sdk-nodejs';



import Swal from 'sweetalert2';
/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */
 import Inputmask from 'inputmask';
 
window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    /*Open: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }*/
  })
  
  const whatsappApi = createWhatsAppApi({
	BearerToken: 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczovL3BsYXRhZm9ybWEuYXBpYnJhc2lsLmNvbS5ici9hdXRoL2xvZ2luIiwiaWF0IjoxNjkwNjY3NzQwLCJleHAiOjE3MjIyMDM3NDAsIm5iZiI6MTY5MDY2Nzc0MCwianRpIjoiNVBXMHoyeFJwc085ekVJUyIsInN1YiI6IjQzMjYiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.IK_-RAElbPU5BsTPUF-OZPw98hIvwVyq0m3dWhkykYQ',
	DeviceToken: '054295b4-75d0-4539-a39e-0ca420c1505e',
	SecretKey: 'e3b0e4b8-7670-47b6-8543-47f869ccc90e',
	PublicToken: 'Gratis-LJZyLJzCGpLzGlZx253Z',
});


document.addEventListener('livewire:load', () => {
    Livewire.on('swal', function (message,type,custom = false,customAction='',id='') {
        Swal.fire({
            icon: type,
            text: message,
            showCancelButton: true,
        }).then(function (result) {
            if (result.isConfirmed) {
                if(custom == false){
                    if(type=='delete')
                        livewire.emit('delete')
                    else if(type=='question')
                        livewire.emit('confirm')
                }else{
                    livewire.emit(customAction,id)
                }
            }
        })
    });
    Livewire.on('toast', (message,type) => {
        Toast.fire({
            icon: type,
            title: message,
          })      
    });
    Livewire.on('notifySound',()=>{
      
        var audio = new Audio('assets/audios/warningAudio.mp3');
        audio.play();        
    });
    Livewire.on('whatsappNotify',(number,text)=>{      
        whatsappApi.request('/sendText', {
                number: number,
                text:text
        }).then(resp => console.log(JSON.stringify(resp, undefined, '  ')));
    });

  

})