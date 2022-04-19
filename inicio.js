(function($){
    setTimeout(() => {
        //localStorage.setItem('estado', JSON.stringify('inicio'));
    //    let estado = JSON.parse(localStorage.getItem('estado'));
    //    if(estado == 'jalisco'){
    //        window.location.href = 'https://mycallcenter.tk/jalisco';
    //    }
    //}, 1000);
    
    var intervalo = setInterval(() => {
        if(document.querySelector("#nf-field-123") == null){
        } else {
            var referencia = window.location.search.charAt(1);
            jQuery( '#nf-field-123' ).val( referencia ).trigger( 'change' );
            document.getElementsByClassName('pikaday__display pikaday__display--pikaday ninja-forms-field nf-element datepicker')[0].readOnly = true;
                
            clearInterval(intervalo);
        }
    }, 1000);
})(jQuery);
