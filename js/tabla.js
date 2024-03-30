'use strict';

(function(){

    function SelectorTabla(){
        const selectorColor = '#DCDCDC';
        const tabla = document.querySelector('.table.table-bordered');
        const filas = document.querySelectorAll('.table.table-bordered .fila');
        const botonUpdateModal = document.getElementById('botonUpdateModal');

        // console.log(filas);

        for (let i = 0; i < filas.length; i++) {
        
            filas[i].addEventListener('click', (e)=>{

                botonUpdateModal.click();

                const values = filas[i].childNodes;
                document.getElementById('emailHelp').className = "form-text text-muted d-none";
                document.getElementById('exampleInputEmail1').value = values[1].innerHTML.trim();
                document.getElementById('exampleInputPassword1').value = values[2].innerHTML.trim();
                document.getElementById('exampleInputId').value = values[0].innerHTML.trim();
                ResetButtonUpdate();
                ResetButtonInsert();
            })
           
        }

    }
    
    function ResetButtonUpdate(){
        let confirm = document.getElementById('exampleCheck1');
        let botonUpdate = document.getElementById('botonUpdate');
        confirm.checked = false;
        botonUpdate.className = 'btn btn-primary d-none';
    }

    function ResetButtonInsert(){
        let confirm = document.getElementById('exampleCheck2');
        let botonInsert = document.getElementById('botonInsert');
        confirm.checked = false;
        botonInsert.className = 'btn btn-primary d-none';
    }
    
    function ConfirmarUpdate(){
        let confirm = document.getElementById('exampleCheck1');
        let botonUpdate = document.getElementById('botonUpdate');

        confirm.addEventListener('click',(e)=>{
            if(confirm.checked){
                botonUpdate.className = 'btn btn-primary';
            }else{
                botonUpdate.className = 'btn btn-primary d-none';
            }  
        });
    }

    function ConfirmarInsert(){
        let confirm = document.getElementById('exampleCheck2');
        let botonInsert = document.getElementById('botonInsert');

        confirm.addEventListener('click',(e)=>{
            if(confirm.checked){
                botonInsert.className = 'btn btn-primary';
            }else{
                botonInsert.className = 'btn btn-primary d-none';
            }  
        });
    }

    function AgregarRegistro(){
        let boton = document.getElementById('botonAdd');

        boton.addEventListener('click',()=>{
            document.getElementById('botonInsertModal').click();
        })
    }

    SelectorTabla();
    ConfirmarUpdate();
    AgregarRegistro();
    ConfirmarInsert();

})();
