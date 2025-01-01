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
    Livewire.on('swal-modal', function(param){
        Swal.fire({
            title: is_empty(param.title) ? param.title : '',
            icon: param.type,
            html: param.message,
            width: sizeSwalModal(param.message),
            position: is_empty(param.footer) ?  param.footer : 'center', //'top', 'top-start', 'top-end', 'center', 'center-start', 'center-end', 'bottom', 'bottom-start', or 'bottom-end'.           
            grow: is_empty(param.grow), // 'row', 'column, 'fullscreen', 'false'
            footer: is_empty(param.footer) ?  param.footer : undefined,
            focusConfirm: is_empty(param.focusConfirm),
            timer: is_empty(param.timer),
            timerProgressBar: is_empty(param.timerProgressBar),

            showConfirmButton: is_empty(param.showConfirmButton) ?  param.showConfirmButton : true,
            confirmButtonText: is_empty(param.confirmButtonText) ?  param.confirmButtonText : 'OK',
            confirmButtonColor: is_empty(param.confirmButtonColor) ?  param.confirmButtonColor : undefined,
  
            showCloseButton: is_empty(param.showCloseButton) ?  param.showCloseButton : true,

            showCancelButton: is_empty(param.showCancelButton),            
            cancelButtonText: is_empty(param.cancelButtonText) ?  param.cancelButtonText : 'Cancelar',
            cancelButtonColor: is_empty(param.cancelButtonColor) ?  param.cancelButtonColor : undefined,

            showDenyButton: is_empty(param.showDenyButton),
            denyButtonText: is_empty(param.denyButtonText) ?  param.denyButtonText : 'Sair',  
            denyButtonColor: is_empty(param.denyButtonColor) ?  param.denyButtonColor : undefined,

            imageUrl: is_empty(param.imagem) ? (is_empty(param.imagem.url) ? param.imagem.url : undefined) : undefined, 
            imageWidth: is_empty(param.imagem) ? (is_empty(param.imagem.width) ? param.imagem.width : undefined) : undefined,
            imageHeight: is_empty(param.imagem) ? (is_empty(param.imagem.height) ? param.imagem.height : undefined) : undefined,
            imageAlt: is_empty(param.imagem) ? (is_empty(param.imagem.alt) ? param.imagem.alt : undefined) : undefined,
            
            showClass: {
                popup: '`'+
                  is_empty(param.popupShow) ? param.popupShow : '' //animate__animated animate__fadeInUp  animate__faster
                +'`'
              },

              hideClass: {
                popup: '`'+ param.popupHide //animate__animated   animate__fadeOutDown   animate__faster
                +'`'
              },

              customClass: {
                confirmButton: is_empty(param.customClass) ? (is_empty(param.customClass.confirmButton) ? param.customClass.confirmButton : "btn btn-success") : undefined,
                cancelButton: is_empty(param.customClass) ? (is_empty(param.customClass.cancelButton) ? param.customClass.cancelButton : "btn btn-success") : undefined,
              },
        }).then(function (result) {
            if (result.isConfirmed) {                                   
                livewire.emit(param.liveWire_action_confirm,is_empty(param.parm_confirm));        
            }

            if (result.isDenied) { 
                livewire.emit(param.liveWire_action_deny,is_empty(param.parm_deny));        
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

    function is_empty(variavel) {
        if (variavel === "undefined") {
            return false
        } else {
            return variavel
        }
    }

    function sizeSwalModal(message) {
        var width = '32em';
        if (message.length > 20000) {
            width = '50em';
        } else if(message.length > 300) {
            width = '40em';
        }
        return width;
    }

    window.getFormData =   function getFormData(params) {        
        const formData = new FormData(document.getElementById('form-'+params.codigoForm));         
        /* for (const pair of formData.entries()) {
            console.log(pair[0], pair[1]);
        } */           
        var object = {};
        formData.forEach((value, key) => object[key] = value);
        var json = JSON.stringify(object);
        livewire.emit(params.enviarPara,json);
        Swal.close();
    }

})