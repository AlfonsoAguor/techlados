    <script type="text/javascript">
/*----------------------------------------------------------------------------------------------------------------------------*/
/*----------------------------------Funciones Usuarios------------------------------------------------------------------------*/
/*----------------------------------------------------------------------------------------------------------------------------*/
        function ocultar() {
            document.getElementById("aNom").style.visibility="hidden";
            document.getElementById("aAp1").style.visibility="hidden";
            document.getElementById("aLogin").style.visibility="hidden";
            document.getElementById("aContra").style.visibility="hidden";
            document.getElementById("aPro").style.visibility="hidden";
            document.getElementById("aLoca").style.visibility="hidden";
            document.getElementById("aDir").style.visibility="hidden";
            document.getElementById("aNume").style.visibility="hidden";
            document.getElementById("aCP").style.visibility="hidden";
            document.getElementById("aDocu").style.visibility="hidden";
            document.getElementById("aNumMovil").style.visibility="hidden";
            document.getElementById("aNumFijo").style.visibility="hidden";
            document.getElementById("aEmail").style.visibility="hidden";
            document.getElementById("aFecha").style.visibility="hidden";
            
            
        } // fin de la funcion de ocultar las advertencias
        
        function cargar() {
            ocultar();
            //con el focus el cursor se cargar en el nombre
            document.insertar.nombre.focus();
            document.insertar.ap1.disabled="true";
            document.insertar.ap2.disabled="true";
            document.insertar.login.disabled="true";
            document.insertar.contra.disabled="true";
            document.insertar.provincia.disabled="true";
            document.insertar.Localidad.disabled="true";
            document.insertar.direccion.disabled="true";
            document.insertar.numeroDireccion.disabled="true";
            document.insertar.docuNumero.disabled="true";
            document.insertar.Piso.disabled="true";
            document.insertar.nfijo.disabled="true";
            document.insertar.nmovil.disabled="true";
            document.insertar.correo.disabled="true";
            
        } //fin funcion cargar
        
        var tecla=window.Event?true:false;
        function acceptNum(evt) {
            
            //espacio=8, enter=13,'0'=48, '9'=57
            var key=tecla?evt.which:evt.keyCode;
            return(key<=13||(key>=48&&key<=57)||(key==46));
        }
        
        var tecla=window.Event?true:false;
        function acceptLet(evt) {
            
            var key=tecla?evt.which:evt.keyCode;
            return(key<=13||(key>=65&&key<=90)||(key==46)||(key>=67&&key<=122)||(key==241)||(key==209));
        }
        
        function desb_apellido(nom_form) {
            cadena=eval('document.'+nom_form);
            cadena.ap1.disabled=false;
            cadena.ap2.disabled=false;
            cadena.ap1.focus();
        } //fin funcion desbloquear apellido 
        
        function desb_login(nom_form) {
            cadena=eval('document.'+nom_form);
            cadena.login.disabled=false;
            cadena.contra.disabled=false;
            cadena.login.focus();
        } //fin funcion desbloquear login
        
        function desb_local(nom_form) {
            cadena=eval('document.'+nom_form);
            cadena.provincia.disabled=false;
            cadena.Localidad.disabled=false;
            cadena.provincia.focus();
        } // fin de la funcion desbloquear localidad 
       
        function desb_direccion(nom_form) {
            cadena=eval('document.'+nom_form);
            cadena.direccion.disabled=false;
            cadena.numeroDireccion.disabled=false;
            cadena.Piso.disabled=false;
            cadena.provincia.focus();
        } //fin de la funcion desbloquear direccion
        
        function desb_docu(nom_form) {
            cadena=eval('document.'+nom_form);
            cadena.docu.disabled="false";
            cadena.docuNumero.disabled=false;
            cadena.docuNumero.focus();
        } //fin de la funcion desbloquear docus
        
        function desb_telefono(nom_form) {
            cadena=eval('document.'+nom_form);
            cadena.nfijo.disabled=false;
            cadena.nmovil.disabled=false;
            cadena.nmovil.focus();
        } //fin de la funcion desbloquear telefono
        
        function desb_email(nom_form) {
            cadena=eval('document.'+nom_form);
            cadena.correo.disabled=false;
            cadena.correo.focus();
        } //fin de la funcion desbloquear email
        
       /* function desb_fecha(nom_form) {
            cadena=eval('document.'+nom_form);
            //cadena.fecha.disabled=false;
            cadena.fecha.focus();
        } //fin de la funcio desbloquear fecha */
        
        function comprobar_nom(nom_form){ 
            cadena=eval('document.'+nom_form);
            estado=true;
            document.getElementById("aNom").style.visibility="hidden";
            //var nom=document.insertar.nombre.value;
            var nom=cadena.nombre.value;
            nombreM=nom.charAt(0).toUpperCase()+nom.slice(1);
            cadena.nombre.value=nombreM;
            //document.insertar.nombre.value=nombreM;
            var longi=nom.length;
            if (longi==0){
                document.getElementById("aNom").style.visibility="visible";
                estado=false;
            } else {
                if (nom_form=='insertar') {
                    desb_apellido(nom_form);
                } else {
                    
                }
            } 
            return estado;
        } //fin de la comprobacion de nombre
        
        
        function comprobar_apellido(nom_form) { 
            cadena=eval('document.'+nom_form);
            estado=true;
            document.getElementById("aAp1").style.visibility="hidden";
            var nom=cadena.ap1.value;
            var longi=nom.length;
            
            if (longi==0){
                estado=false;
                document.getElementById("aAp1").style.visibility="visible";
            } else {
                desb_login(nom_form);
            }
            
            return estado;
        } //fin de la comprobacion del apellido
        
        function comprobar_login(nom_form) { 
            cadena=eval('document.'+nom_form);
            estado=true;
            document.getElementById("aLogin").style.visibility="hidden";
            var nom=cadena.login.value;
            var longi=nom.length;
            if (longi==0){
                estado=false;
                document.getElementById("aLogin").style.visibility="visible";
            } else {
            }
            
            return estado;
        } //fin de la comprobacion del login
        
        function comprobar_contra(nom_form) { 
            cadena=eval('document.'+nom_form);
            estado=true;
            document.getElementById("aContra").style.visibility="hidden";
            var nom=cadena.contra.value;
            var longi=nom.length;
            
            if (longi==0){
                estado=false;
                document.getElementById("aContra").style.visibility="visible";
            } else {
                desb_local(nom_form);
            }
            
            return estado;
        } //fin de la comprobacion del apellido
        
        function comprobar_provincia(nom_form){
            cadena=eval('document.'+nom_form);
            estado=true;
           document.getElementById("aPro").style.visibility="hidden";
            var prov=cadena.provincia.value;
            //var longi=nom.length;
            if (prov=="--"){
                estado=false;
                document.getElementById("aPro").style.visibility="visible";
            } else {
                //comprobar_localidad();
            }
            return estado;
       } // fin de la comprobacion de la provincia
        
        function comprobar_localidad(nom_form){ 
            cadena=eval('document.'+nom_form);
            estado=true;
           document.getElementById("aLoca").style.visibility="hidden";
            var prov=cadena.Localidad.value;
            //var longi=nom.length;
            if (prov=="--"){
                estado=false;
                document.getElementById("aLoca").style.visibility="visible";
                document.insertar.Localidad.options[0].selected = true;
                //lo selecciona y lo deja en 0
            } else {
                
            }
            return estado;
       } //fin de la comprobacion de la localidad
        
        function comprobar_direccion(nom_form) {
            cadena=eval('document.'+nom_form);
            estado=true;
            document.getElementById("aDir").style.visibility="hidden";
            var nom=cadena.direccion.value;
            var longi=nom.length;
            
            if (longi==0){
                estado=false;
                document.getElementById("aDir").style.visibility="visible";
            } else {
                
            }
            return estado;
        } //fin de la comprobacion del direccion
        
        function comprobar_DirNumero(nom_form) {
            cadena=eval('document.'+nom_form);
            estado=true;
            document.getElementById("aNume").style.visibility="hidden";
            var nom=cadena.numeroDireccion.value;
            var longi=nom.length;
            if (longi==0){
                estado=false;
                document.getElementById("aNume").style.visibility="visible";
            } else {
                desb_docu(nom_form);
            }
            return estado;
        } //fin de la comprobacion del numero de la direccion
        
     /*   function comprobar_docu() {
            document.getElementById("aDocu").style.visibility="hidden";
            var nom=document.insertar.docuNumero.value;
            var longi=nom.length;;
            if (longi==0){
                document.getElementById("aDocu").style.visibility="visible";
            } else {
                desb_telefono();
            }
        } //fin de la comprobacion del numero del documento */
        
        function comprobar_movil(nom_form) {
            cadena=eval('document.'+nom_form);
            estado=true;
            document.getElementById("aNumMovil").style.visibility="hidden";
            var nom=cadena.nmovil.value;
            var longi=nom.length;
            
            if (longi!=9){
                estado=false;
                document.getElementById("aNumMovil").style.visibility="visible";
                document.getElementById("aNumMovil").innerHTML="Longitud incorrecta";
            } else {
                car1=nom.charAt(0);
                    if (((car1=='6')||(car1=='7'))||(car1=='9')) {
                       
                        desb_email(nom_form);
                    } else {
                        estado=false;
                        document.getElementById("aNumMovil").style.visibility="visible";
                           document.getElementById("aNumMovil").innerHTML="Debe empezar por 6, 7 o 9";
                 }
            }
            return estado;
        } //fin de la comprobacion del movil
        
        function comprobar_fijo(nom_form) {
            cadena=eval('document.'+nom_form);
            estado=true;
            document.getElementById("aNumFijo").style.visibility="hidden";
            var nom=cadena.nfijo.value;
            var longi=nom.length;
                if (longi!=0){
                    if (longi!=9){
                    estado=false;
                    document.getElementById("aNumFijo").style.visibility="visible";
                    document.getElementById("aNumFijo").innerHTML="Longitud incorrecta";
                } else {
                    car1=nom.charAt(0);
                        if (((car1=='6')||(car1=='7'))||(car1=='9')) {
                            
                        } else {
                            estado=false;
                            document.getElementById("aNumFijo").style.visibility="visible";
                               document.getElementById("aNumFijo").innerHTML="Debe empezar por 6, 7 o 9";
                     }
                }
              }
            return estado;
        } //fin de la comprobacion del movil
        
        function comprobar_email(nom_form) {
            cadena=eval('document.'+nom_form);
            estado=true;
            document.getElementById("aEmail").style.visibility="hidden";
            var ema=cadena.correo.value;
            var longi=ema.length;
            if (longi==0) {
                estado=false;
                document.getElementById("aEmail").style.visibility="visible";
                document.getElementById("aEmail").innerHTML=" No se a introducido nada";
            } else {
                if (longi>=5) {
                    posa=ema.indexOf('@');
                    if (posa==-1) {
                        estado=false;
                        document.getElementById("aEmail").style.visibility="visible";
                        document.getElementById("aEmail").innerHTML=" La @ no esta";
                    } else {
                        if (posa>=1) {
                            posa2=ema.lastIndexOf('@');
                            if (posa==posa2) {
                                if (posa<=longi-3) {
                                    posp=ema.lastIndexOf('.');
                                    if (posp==-1) {
                                        estado=false;
                                        document.getElementById("aEmail").style.visibility="visible";
                                        document.getElementById("aEmail").innerHTML=" No se ha introducido el punto";
                                        } else {
                                            if (posp>=longi-1) {
                                                estado=false;
                                                document.getElementById("aEmail").style.visibility="visible";
                                                document.getElementById("aEmail").innerHTML=" Se han introducido mal el punto";
                                                } else {
                                                    if (posp>posa+1) {
                                                        
                                                        //desb_fecha(nom_form);
                                                        } else {
                                                            estado=false;
                                                          document.getElementById("aEmail").style.visibility="visible";
                                                            document.getElementById("aEmail").innerHTML=" El correo se ha introduccido mal";  
                                                        }
                                                }
                                        }
                                } else {
                                    estado=false;
                                    document.getElementById("aEmail").style.visibility="visible";
                                    document.getElementById("aEmail").innerHTML=" Se han introducido mal la @";
                                }
                            } else {
                                estado=false;
                                document.getElementById("aEmail").style.visibility="visible";
                                document.getElementById("aEmail").innerHTML=" Se han introducido mas de una @";
                            }
                        } else {
                            estado=false;
                            document.getElementById("aEmail").style.visibility="visible";
                            document.getElementById("aEmail").innerHTML=" La @ no esta bien ubicada";
                        }
                    }
                } else {
                    estado=false;
                    document.getElementById("aEmail").style.visibility="visible";
                    document.getElementById("aEmail").innerHTML=" No se a introducido correctamente";
                }
            }
            return estado;
        } //fin de la comprobacion del email
        
        function comprobar_fecha(nom_form) {
            cadena=eval('document.'+nom_form);
            estado=true;
            document.getElementById("aFecha").style.visibility="hidden";
            var nom=cadena.fecha.value;
            var longi=nom.length;
            
            if (longi==0){
                estado=false;
                document.getElementById("aFecha").style.visibility="visible"; 
            }
            return estado;
        } //fin de la comprobacion del email
        
        function cambia_provincia(nom_form){ 
            cadena=eval('document.'+nom_form);
 
    //tomo el valor del select de la provincia elegida 
    var provin; 
    provin = cadena.provincia[cadena.provincia.selectedIndex].value;

    //crea la variable provincia, y mete el valor del select de provincia
        comprobar_provincia(nom_form);
    if (provin != 0) { 
	
       //si estaba definido, entonces coloco las opciones de la provincia correspondiente. 
       //selecciono el array de provincia adecuado 
       mis_provincias=eval("provincias_" + provin) ;
       //calculo el numero de localidades 
       num_provincias = mis_provincias.length;
       //marco el número de localidades en el select 
       cadena.Localidad.length = num_provincias;
       //para cada provincia del array, la introduzco en el select 
       for(i=0;i<num_provincias;i++){ 
          cadena.Localidad.options[i].value=mis_provincias[i];
          cadena.Localidad.options[i].text=mis_provincias[i];
       } 
    }else{ 
		
		
       //si no había provincia seleccionada, elimino las provincias del select 
       cadena.Localidad.length = 1;
       //coloco un guión en la única opción que he dejado 
       cadena.Localidad.options[0].value = "--";
       cadena.Localidad.options[0].text = "--";
    } 
    //marco como seleccionada la opción primera de provincia 
    cadena.Localidad.options[0].selected = true;

	
}
        
        function cambia_localidad(nom_form){ 
            cadena=eval('document.'+nom_form);
	document.getElementById("aDocu").style.visibility="hidden";
    //tomo el valor del select de la provincia elegida 
    var locals; 
    locals= cadena.Localidad[cadena.Localidad.selectedIndex].value;
    //crea la variable provincia, y mete el valor del select de localida, por ejemplo madridejos
    //locals= document.insertar.Localidad.selectedIndex;
    //crea la variable locals y almacena la posicion en la que se encuentra
    comprobar_localidad(nom_form);
    
	if (locals=='--') {
        estado=false;
		document.getElementById("aDocu").style.visibility="visible";
	} else {
		var provin=cadena.provincia[cadena.provincia.selectedIndex].value;
		mis_codigos=eval("codigos_" + provin);
		var posicion=cadena.Localidad.selectedIndex;
		cadena.cp.value=mis_codigos[posicion];
        //desbloquemos los campos de direccion
		desb_direccion(nom_form);
	}
            return estado;
}

        function comp_dni(nom_form) {
            cadena=eval('document.'+nom_form);
         estado=true;   
 document.getElementById("aDocu").style.visibility="hidden";
letras="TRWAGMYFPDXBNJZSQVHLCKET"; //guarda una variable con la cadena de letras
var dni=cadena.docuNumero.value; //extrae el valor de docuNumero
var long_dni=dni.length; //guarda la longitud
if (long_dni == 9 ) { //compara que sea igual a 9
    num_dni=dni.substring(0,8); //guarda todos los caracteres salvo el ultimo
    letra_dni=dni.substring(8,9); //guarda el ultimo caracter 
    letraMay_dni=letra_dni.toUpperCase();
    num_ent_dni=parseInt(num_dni);
    if (num_ent_dni >= 0 ) {
        ent_dni=num_ent_dni%23;
        let_dni=letras[ent_dni];
        if (let_dni == letraMay_dni) {
                desb_telefono(nom_form); //cambiar a habilitar telefono
            } else {
                estado=false;
            //dni_error(nombre_formu);
        }
        } else {
            estado=false;
            //dni_error(nombre_formu);
        }
        } else {
        if (long_dni == 0 ) {
            estado=false;
             document.getElementById("aDocu").style.visibility="visible";
             document.getElementById("aDocu").innerHTML=" No se a introducido nada";
             //variable.ndni.focus(); focus al dni
            } 
            if (long_dni <= 8 ) {
            estado=false;
             document.getElementById("aDocu").style.visibility="visible";
             document.getElementById("aDocu").innerHTML="Se han introducido mal los caracteres";
             //variable.ndni.focus(); focus al dni
            }
            
        } 
            return estado;
     } 
        
function comp_nie(nom_form) {
    cadena=eval('document.'+nom_form);
    estado=true;
 document.getElementById("aDocu").style.visibility="hidden";
letras="TRWAGMYFPDXBNJZSQVHLCKET";
var nie=cadena.docuNumero.value;
var long_nie=nie.length;
if (long_nie == 9 ) {
    letra1_nie=nie.substring(0,1);
    num_nie=nie.substring(1,8);
    letra2_nie=nie.substring(8,9);
    letraMay_nie1=letra1_nie.toUpperCase();
    letraMay_nie2=letra2_nie.toUpperCase();
    num_ent_nie=parseInt(num_nie);
    if (letraMay_nie1=="X") {
        nieEntero="0"+num_ent_nie;
    } else {
            if (letraMay_nie1=="Y") {
                nieEntero="1"+num_ent_nie;
        } else {
               if (letraMay_nie1=="Z") {
                   nieEntero="2"+num_ent_nie;
            } else {
                estado=false;
                document.getElementById("aDocu").style.visibility="visible";
                document.getElementById("aDocu").innerHTML=" Se ha introducido mal el NIE";
            }
        }
    }
    if (num_ent_nie >= 0 ) {
        ent_nie=nieEntero%23;
        let_nie=letras[ent_nie];
        if (let_nie == letraMay_nie2) {
                desb_telefono(nom_form); //cambiar a habilitar telefono
            } else {
                estado=false;
            //dni_error(nombre_formu);
        }
        } else {
            estado=false;
            //dni_error(nombre_formu);
        }
        } else {
        if (long_nie == 0 ) {
            estado=false;
             document.getElementById("aDocu").style.visibility="visible";
             document.getElementById("aDocu").innerHTML=" No se a introducido nada";
             //variable.ndni.focus(); focus al dni
            } 
            if (long_nie <= 7 ) {
            estado=false;
             document.getElementById("aDocu").style.visibility="visible";
             document.getElementById("aDocu").innerHTML="Se han introducido mal los caracteres";
             //variable.ndni.focus(); focus al dni
            }
            
        } 
     }
        
    function comp_dni_nie(nom_form) {
        cadena=eval('document.'+nom_form)
        var valor=cadena.docu[0].checked;
        if (valor) {
            estado=comp_dni(nom_form);
            comp_dni(nom_form);
        }
        else {
            estado=comp_nie(nom_form);
            comp_nie(nom_form);
        }
        return estado;
    }
        
        function enviar(nom_form) {
            cadena=eval('document.'+nom_form);
            if (comprobar_nom(nom_form)) {
                cadena=eval('document.'+nom_form);
                if (comprobar_apellido(nom_form)) {
                    cadena=eval('document.'+nom_form);
                    if (comprobar_login(nom_form)) {
                            cadena=eval('document.'+nom_form);
                        if (comprobar_contra(nom_form)) {
                            cadena=eval('document.'+nom_form);
                            if (comprobar_provincia(nom_form)) {
                                cadena=eval('document.'+nom_form);
                                 if (comprobar_direccion(nom_form)) {
                                     cadena=eval('document.'+nom_form);
                                     if (comprobar_DirNumero(nom_form)) {
                                         cadena=eval('document.'+nom_form);
                                         if (comp_dni_nie(nom_form)) {
                                             cadena=eval('document.'+nom_form);
                                             if (comprobar_movil(nom_form)) {
                                                 cadena=eval('document.'+nom_form);
                                                 if (comprobar_email(nom_form)) {
                                                     cadena=eval('document.'+nom_form);
                                                     if (comprobar_fecha(nom_form)) { 
                                                         cadena=eval('document.'+nom_form); 
                                                        cadena.submit();   
                                                     }    
                                                 }  
                                             }  
                                        } 
                                    }
                                } 
                            } 
                        }
                    }
                } 
            } 
        } 
        
        function enviar_sentencia(nom_form) {
            cadena=eval('document.'+nom_form);
            cadena.submit();
        }
        
/*----------------------------------------------------------------------------------------------------------------------------*/
/*----------------------------------Funciones Cabecera-----------------------------------------------------------------------*/
/*----------------------------------------------------------------------------------------------------------------------------*/
        
     function ocultarCabecera() {
            document.getElementById("aUsu").style.visibility="hidden";
            document.getElementById("aContra").style.visibility="hidden"; 
        } // fin de la funcion de ocultar las advertencias    
        
        function enviar_usu(nom_form) {
            cadena=eval('document.'+nom_form);
            var NomUsu=cadena.usuario.value;
            var PassUsu=cadena.pass.value;
            if ((NomUsu!="") && (PassUsu!="")) {
                cadena.submit();
            } else {
                if (NomUsu=="") {
                    document.getElementById("aDocu").innerHTML="No se ha introducido el usuario";
                    document.getElementById("aUsu").style.visibility="visible"; 
                } else {
                    if (PassUsu=="") {
                        document.getElementById("aDocu").innerHTML="No se ha introducido la contraseña";
                        document.getElementById("aContra").style.visibility="visible"; 
                    }
                }
            } 
        }
        
/*----------------------------------------------------------------------------------------------------------------------------*/
/*----------------------------------Funciones Productos-----------------------------------------------------------------------*/
/*----------------------------------------------------------------------------------------------------------------------------*/
        
function ocultarProducto() {
            document.getElementById("aNomP").style.visibility="hidden";
            document.getElementById("aTipo").style.visibility="hidden";
            document.getElementById("aPrecio").style.visibility="hidden";
            document.getElementById("aDis").style.visibility="hidden";
            document.getElementById("aCant").style.visibility="hidden";
            document.getElementById("aMarca").style.visibility="hidden"; 
        } // fin de la funcion de ocultar las advertencias
    
        function cargarProducto() {
            ocultarProducto();
            document.insertar.nombreP.focus();
            document.insertar.info.disabled="true";
            document.insertar.tipo.disabled="true";
            document.insertar.precio.disabled="true";
            document.insertar.dis.disabled="true";
            document.insertar.cant.disabled="true";
            document.insertar.marca.disabled="true";
        } //fin funcion carga
    
        var tecla=window.Event?true:false;
        function acceptNumP(evt) {
            //espacio=8, enter=13,'0'=48, '9'=57
            var key=tecla?evt.which:evt.keyCode;
            return(key>=48&&key<=57);
        }
    
        var tecla=window.Event?true:false;
        function acceptLetP(evt) {
            
            var key=tecla?evt.which:evt.keyCode;
            return(key<=13||(key>=65&&key<=90)||(key==46)||(key>=67&&key<=122)||(key==241)||(key==209));
        }
    
        function desb_informacion(nom_form) {
            cadena=eval('document.'+nom_form);
            cadena.info.disabled=false;
            cadena.tipo.disabled=false;
            cadena.info.focus();
        } //fin funcion desbloquear info y tipo
    
        function desb_tipo(nom_form) {
            cadena=eval('document.'+nom_form);
            cadena.tipo.disabled=false;
            cadena.tipo.focus();
        } //fin funcion desbloquear tipo
    
        function desb_precio(nom_form) {
            cadena=eval('document.'+nom_form);
            cadena.precio.disabled=false;
            cadena.precio.focus();
        } //fin funcion desbloquear precio 
    
        function desb_dis(nom_form) {
            cadena=eval('document.'+nom_form);
            cadena.dis.disabled=false;
            cadena.dis.focus();
        } //fin funcion desbloquear disponibilidad
    
        function desb_cant(nom_form) {
            cadena=eval('document.'+nom_form);
            cadena.cant.disabled=false;
            cadena.cant.focus();
        } //fin funcion desbloquear cantidad
    
        function desb_marca(nom_form) {
            cadena=eval('document.'+nom_form);
            cadena.marca.disabled=false;
            cadena.marca.focus();
        } //fin funcion desbloquear marca
    
    
        function comprobar_nomP(nom_form){ 
            cadena=eval('document.'+nom_form);
            estado=true;
            document.getElementById("aNomP").style.visibility="hidden";
            var nom=cadena.nombreP.value;
            nombreM=nom.charAt(0).toUpperCase()+nom.slice(1);
            cadena.nombreP.value=nombreM;
            var longi=nom.length;
            if (longi==0){
                document.getElementById("aNomP").style.visibility="visible";
                estado=false;
            } else {
                if (nom_form=='insertar') {
                    desb_informacion(nom_form);
                } else {
                    
                }
            } 
            return estado;
        } //fin de la comprobacion de nombre
    
        function comprobar_tipo(nom_form){
            cadena=eval('document.'+nom_form);
            estado=true;
           document.getElementById("aTipo").style.visibility="hidden";
            var prov=cadena.tipo.value;
            //var longi=nom.length;
            if (prov=="--"){
                estado=false;
                document.getElementById("aTipo").style.visibility="visible";
            } else {
                desb_precio(nom_form);
            }
            return estado;
       } // fin de la comprobacion de ltipo
    
        function comprobar_precio(nom_form) { 
            cadena=eval('document.'+nom_form);
            estado=true;
            document.getElementById("aPrecio").style.visibility="hidden";
            var nom=cadena.precio.value;
            var longi=nom.length;
            if (longi==0){
                estado=false;
                document.getElementById("aPrecio").style.visibility="visible";
            } else {
                desb_dis(nom_form);
            }
            return estado;
        } //fin de la comprobacion del cantidad
    
        function comprobar_disponibilidad(nom_form){
            cadena=eval('document.'+nom_form);
            estado=true;
           document.getElementById("aTipo").style.visibility="hidden";
            var prov=cadena.tipo.value;
            //var longi=nom.length;
            if (prov=="--"){
                estado=false;
                document.getElementById("aTipo").style.visibility="visible";
            } else {
                desb_cant(nom_form);
            }
            return estado;
       } // fin de la comprobacion de ltipo
    
        function comprobar_cantidad(nom_form) { 
            cadena=eval('document.'+nom_form);
            estado=true;
            document.getElementById("aCant").style.visibility="hidden";
            var nom=cadena.cant.value;
            var longi=nom.length;
            
            if (longi==0){
                estado=false;
                document.getElementById("aCant").style.visibility="visible";
            } else {
                desb_marca(nom_form);
            }
            
            return estado;
        } //fin de la comprobacion del precio
    
        function comprobar_marca(nom_form){ 
            cadena=eval('document.'+nom_form);
            estado=true;
            document.getElementById("aMarca").style.visibility="hidden";
            var nom=cadena.marca.value;
            nombreM=nom.charAt(0).toUpperCase()+nom.slice(1);
            cadena.marca.value=nombreM;
            var longi=nom.length;
            if (longi==0){
                document.getElementById("aMarca").style.visibility="visible";
                estado=false;
            } else {

            } 
            return estado;
        } //fin de la comprobacion de marca
    
        function enviar_sentencia(nom_form) {
            cadena=eval('document.'+nom_form);
            cadena.submit();
        }
    
    function enviarP(nom_form) {
            cadena=eval('document.'+nom_form);
            if (comprobar_nomP(nom_form)) {
                cadena=eval('document.'+nom_form);
                if (comprobar_tipo(nom_form)) {
                    cadena=eval('document.'+nom_form);
                    if (comprobar_precio(nom_form)) {
                            cadena=eval('document.'+nom_form);
                        if (comprobar_disponibilidad(nom_form)) {
                            cadena=eval('document.'+nom_form);
                            if (comprobar_cantidad(nom_form)) {
                                cadena=eval('document.'+nom_form);
                                 if (comprobar_marca(nom_form)) {
                                     cadena=eval('document.'+nom_form);
                                     cadena.submit(); 
                                } 
                            } 
                        }
                    }
                } 
            } 
        }
        
        
/*----------------------------------------------------------------------------------------------------------------------------*/
/*----------------------------------Funciones Recuperar-----------------------------------------------------------------------*/
/*----------------------------------------------------------------------------------------------------------------------------*/           
   function recuperar(tabla,contenido,idPapelera,nom_form) {
        cadena=eval('document.'+nom_form);
       if (tabla=='usuarios') {
           var cont=contenido.split("/");
           sentencia="INSERT INTO  "+ tabla + "(Nombre,Apellido1,Apellido2,Login,Contrasena,TipoUsu,TipoDocu,Documento,Provincia,Localidad,CP,Direccion,NumDireccion,Piso,fecha,email,Telefono1,Telefono2) VALUE ('"+cont[0]+"','"+cont[1]+"','"+cont[2]+"','"+cont[3]+"','"+cont[4]+"','"+cont[5]+"','"+cont[6]+"','"+cont[7]+"','"+cont[8]+"','"+cont[9]+"','"+cont[10]+"','"+cont[11]+"','"+cont[12]+"','"+cont[13]+"','"+cont[14]+"','"+cont[15]+"','"+cont[16]+"','"+cont[17]+"')";
           document.restaurar1.rest.value=sentencia;
	       sentencia_eliminar="DELETE FROM papelera where idPapelera="+idPapelera;
	       document.restaurar1.rest2.value=sentencia_eliminar;
          
       } else {
            var cont=contenido.split("/");
           sentencia="INSERT INTO  "+ tabla + "(nombre,informacion,precio,tipo,disponibilidad,marca,cantidad) VALUE ('"+cont[0]+"','"+cont[1]+"','"+cont[2]+"','"+cont[3]+"','"+cont[4]+"','"+cont[5]+"','"+cont[6]+"')";
           document.restaurar1.rest.value=sentencia;
	       sentencia_eliminar="DELETE FROM papelera where idPapelera="+idPapelera;
	       document.restaurar1.rest2.value=sentencia_eliminar;
       }
        document.restaurar1.submit();	
   }
        
/*----------------------------------------------------------------------------------------------------------------------------*/
/*----------------------------------------Funciones Pie-----------------------------------------------------------------------*/
/*----------------------------------------------------------------------------------------------------------------------------*/   

function mostrar_ventana() {
    /*opciones para posicionamiento top=500,left=500,bottom=500,right=500
      opciones para el tamaño width=400,height=400*/
    window.open("./contacto.php","_blank","toolbar=no,scrollbars=no,resizable=no,top=230,left=500,bottom=500,width=400,height=400");
}
function mostrar_cv() {
    window.open("./img/cv.png","_blank","toolbar=no,scrollbars=no,resizable=no,top=230,left=500,bottom=500,width=370,height=530");
}
function mostrar_mapa() {
    window.open("./img/mapa.png","_blank","toolbar=no,scrollbars=no,resizable=no,top=230,left=500,bottom=500,width=650,height=530");
}
        
        
/*----------------------------------------------------------------------------------------------------------------------------*/
/*----------------------------------Funciones cesta-----------------------------------------------------------------------*/
/*----------------------------------------------------------------------------------------------------------------------------*/  
function modificar_cantidad(idPro,form,cont) {
    var nom=document.cestaform.cantcesta[cont].value;
    mod="UPDATE cesta set Cantidad = '"+nom+"' where idProducto like '"+idPro+"'";
    document.cestaform.modcant.value=mod;
    document.cestaform.prodId.value=idPro;
    document.cestaform.nuevaCant.value=nom;
    
}
</script>


