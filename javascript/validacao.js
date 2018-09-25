const BLOQUEIA_NUMEROS = 0,
      BLOQUEIA_CARACTERES = 1;
            
function validar(caracter, blockType, objeto){
    objeto.style.backgroundColor = "white";
    //Guarda o ASCII da letra digitada
    if(window.event){
        var letra = caracter.charCode;
    }else{
        var letra = caracter.which;
    }
                
    if(blockType == BLOQUEIA_CARACTERES){
        //Bloqueio de numero
        if(letra < 48 || letra > 57){
            //Cancela a ação da tecla
            return false;
        }
    }else if(blockType == BLOQUEIA_NUMEROS){
         //Bloqueio de caracter
        if(letra >= 48 && letra <= 57){
            //Cancela a ação da tecla
            return false;
        }
    }
}