function redirectLocation(router){

    if (router != 'root') {
        window.location.pathname = 'unidad-1-ejercicio/pages/'+ router + '/'+router+'.php'
    }
    else{
        window.location.pathname = 'unidad-1-ejercicio/'
        
    }



}