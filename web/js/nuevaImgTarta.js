const tiposValidos =
[
    'image/jpeg',
    'image/png'
];

function validarTipos(file){
    for (var i=0; i<tiposValidos.length; i++){
        if(file.type===tiposValidos[i]){
            return true;
        }
    }
    return false;
}

function onChange(event){
    const file=event.target.files[0];
    if (validarTipos(file)){
        const tartaMiniatura=document.getElementById('tartaThumb');
        tartaThumb.src=window.URL.createObjectURL(file);
    }
};