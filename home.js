(function($){
        setTimeout(() => {
            window.location.href = 'https://mycallcenter.tk/';
            let estado = JSON.parse(localStorage.getItem('estado'));
            if(estado == 'inicio'){
                window.location.href = 'https://mycallcenter.tk/inicio';
            }
        }, 50);
        
        setTimeout(() => {
        //localStorage.setItem('estado', JSON.stringify('jalisco'));


        var fecha = new Date();
        var diaSem = fecha.getDay();
        var diasExtras1 = null;
        var diasExtras2 = null;
        var dia1 = null;
        var dia2 = null;
        
        if(fecha.getHours() >= 19){
            if(diaSem === 0){dia1 = 'Mañana, lunes'; dia2 = 'El próximo martes,'; diasExtras1 = 86400000; diasExtras2 = (86400000*2);} else if(diaSem === 6){dia1 = 'El próximo lunes,'; dia2 = 'El próximo martes,'; diasExtras1 = (86400000*2); diasExtras2 = (86400000*3);} else if(diaSem === 5){dia1 = 'El próximo lunes,'; dia2 = 'El próximo martes,'; diasExtras1 = (86400000*3); diasExtras2 = (86400000*4);} else if(diaSem === 4){dia1 = 'Mañana, viernes'; dia2 = 'El próximo lunes,'; diasExtras1 = 86400000; diasExtras2 = (86400000*4);} else if(diaSem === 3){dia1 = 'Mañana, jueves'; dia2 = 'El próximo viernes,'; diasExtras1 = 86400000; diasExtras2 = (86400000*2);} else if(diaSem === 2){dia1 = 'Mañana, miércoles'; dia2 = 'El próximo jueves,'; diasExtras1 = 86400000; diasExtras2 = (86400000*2);} else if(diaSem === 1){dia1 = 'Mañana, martes'; dia2 = 'El próximo miércoles,'; diasExtras1 = 86400000; diasExtras2 = (86400000*2);}
        } else {
            if(diaSem === 0){dia1 = 'Mañana, lunes'; dia2 = 'El próximo martes,'; diasExtras1 = 86400000; diasExtras2 = (86400000*2);} else if(diaSem === 6){dia1 = 'El próximo lunes,'; dia2 = 'El próximo martes,'; diasExtras1 = (86400000*2); diasExtras2 = (86400000*3);} else if(diaSem === 5){dia1 = 'Hoy, viernes'; dia2 = 'El próximo lunes,'; diasExtras1 = 0; diasExtras2 = (86400000*3);} else if(diaSem === 4){dia1 = 'Hoy, jueves'; dia2 = 'Mañana, viernes'; diasExtras1 = 0; diasExtras2 = 86400000;} else if(diaSem === 3){dia1 = 'Hoy, miércoles'; dia2 = 'Mañana, jueves'; diasExtras1 = 0; diasExtras2 = 86400000;} else if(diaSem === 2){dia1 = 'Hoy, martes'; dia2 = 'Mañana, miércoles'; diasExtras1 = 0; diasExtras2 = 86400000;} else if(diaSem === 1){dia1 = 'Hoy, lunes'; dia2 = 'Mañana, martes'; diasExtras1 = 0; diasExtras2 = 86400000;}
        }
        

        var date = new Date(fecha.getTime() + diasExtras1);
        var date2 = new Date(fecha.getTime() +  diasExtras2);
        
        var diaMes = date.getDate();
        var diaMes2 = date2.getDate();
        var nMes = date.getMonth();
        var nMes2 = date2.getMonth();
        var mes = null;
        var mes2 = null;
        if(nMes === 0){mes = 'enero';} else if(nMes == 1){mes = 'febrero';} else if(nMes == 2){mes = 'marzo';} else if(nMes == 3){mes = 'abril';} else if(nMes == 4){mes = 'mayo';} else if(nMes == 5){mes = 'junio';} else if(nMes == 6){mes = 'julio';} else if(nMes == 7){mes = 'agosto';} else if(nMes == 8){mes = 'septiembre';} else if(nMes == 9){mes = 'octubre';} else if(nMes == 10){mes = 'noviembre';} else if(nMes == 11){mes = 'diciembre';}
        if(nMes2 === 0){mes2 = 'enero';} else if(nMes2 == 1){mes2 = 'febrero';} else if(nMes2 == 2){mes2 = 'marzo';} else if(nMes2 == 3){mes2 = 'abril';} else if(nMes2 == 4){mes2 = 'mayo';} else if(nMes2 == 5){mes2 = 'junio';} else if(nMes2 == 6){mes2 = 'julio';} else if(nMes2 == 7){mes2 = 'agosto';} else if(nMes2 == 8){mes2 = 'septiembre';} else if(nMes2 == 9){mes2 = 'octubre';} else if(nMes2 == 10){mes2 = 'noviembre';} else if(nMes2 == 11){mes2 = 'diciembre';}
        

        var intervalo = setInterval(() => {
            if(document.querySelector("#nf-field-139") == null){
                
            } else {
                // var selectobject = document.getElementById("nf-field-138");
                // for (var i=0; i<selectobject.length; i++) {
                //     if (selectobject.options[i].value == '6 p.m.')
                //         selectobject.remove(i);
                // }
            
                document.querySelector("#nf-field-139 > option:nth-child(2)").innerHTML= dia1 + ' ' + diaMes + ' de ' + mes;
                document.querySelector("#nf-field-139 > option:nth-child(2)").value= diaMes + ' de ' + mes;
                document.querySelector("#nf-field-139 > option:nth-child(3)").innerHTML= dia2 + ' ' + (diaMes2) + ' de ' + mes2;
                document.querySelector("#nf-field-139 > option:nth-child(3)").value= diaMes2 + ' de ' + mes2;
                
                //document.querySelector("#nf-field-139 > option:nth-child(2)").innerHTML= 'El lunes 5 de abril';
                //document.querySelector("#nf-field-139 > option:nth-child(2)").value= '5 de abril';
                //document.querySelector("#nf-field-139 > option:nth-child(3)").innerHTML= 'El martes 6 de abril';
                //document.querySelector("#nf-field-139 > option:nth-child(3)").value= '6 de abril';

                var referencia = window.location.search.charAt(1);
                jQuery( '#nf-field-137' ).val( referencia ).trigger( 'change' );
                document.getElementsByClassName('pikaday__display pikaday__display--pikaday ninja-forms-field nf-element datepicker')[0].readOnly = true;
                
                
                const selectElement = document.querySelector('#nf-field-139');

                selectElement.addEventListener('change', (event) => {
                    const resultado = document.querySelector('#nf-field-139');
                    //jQuery( '#nf-field-140' ).val( diaMes + ' de ' + mes ).trigger( 'change' );
                    jQuery( '#nf-field-140' ).val( event.target.value ).trigger( 'change' );
                });
                
                clearInterval(intervalo);
            }
        },1000);

            //const selectElement2 = document.querySelector('#nf-field-135');
            //selectElement2.addEventListener('click', (event) => {
            //    console.log('click')
            //});
    }, 1000);
})(jQuery);