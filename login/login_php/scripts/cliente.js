document.addEventListener('DOMContentLoaded',function(){

    // Habilitar Edição

    const editar = document.querySelector('.editar');
    const cancelarEdicao = document.querySelector('.c-editar')
    const salvar = document.querySelector('.salvar');
    const inputs = document.querySelectorAll('input');

    let values = [];

    editar.addEventListener('click',function(){

        values = [];

        inputs.forEach(input => {
            values.push(input.value);
            input.disabled=false;
        });

        cancelarEdicao.style.display = 'block';
        editar.style.display = 'none';

        salvar.style.opacity = '1';
        salvar.type = 'submit';
        salvar.classList.add('cursor-pointer');

    });

    cancelarEdicao.addEventListener('click',function(){

        inputs.forEach(input => {
            
            input.value = values[Array.from(inputs).indexOf(input)]
            input.disabled=true;

        });

        cancelarEdicao.style.display = 'none';
        editar.style.display = 'block';
        salvar.style.opacity = '0.3';
        salvar.type = 'button';
        salvar.classList.remove('cursor-pointer');

    });

});