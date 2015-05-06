// JavaScript Document.
(function() {
    var FX = {
        easing: {linear: function(progress) {return progress;},
            quadratic: function(progress) {return Math.pow(progress, 2);},
            swing: function(progress) {return 0.5 - Math.cos(progress * Math.PI) / 2;},
            circ: function(progress) {return 1 - Math.sin(Math.acos(progress));},
            back: function(progress, x) {return Math.pow(progress, 2) * ((x + 1) * progress - x);},
            bounce: function(progress) {
                for (var a = 0, b = 1, result; 1; a += b, b /= 2) {
                    if (progress >= (7 - 4 * a) / 11) {
                        return -Math.pow((11 - 6 * a - 11 * progress) / 4, 2) + Math.pow(b, 2);}
                }
            },
            elastic: function(progress, x) {
                return Math.pow(2, 10 * (progress - 1)) * Math.cos(20 * Math.PI * x / 3 * progress);}
        },
        animate: function(options) {
            var start = new Date;
            var id = setInterval(function() {
                var timePassed = new Date - start;
                var progress = timePassed / options.duration;
                if (progress > 1) {
                    progress = 1;
                }
                options.progress = progress;
                var delta = options.delta(progress);
                options.step(delta);
                if (progress == 1) {
                    clearInterval(id);
                    options.complete();
                }
            }, options.delay || 10);
        },
        fadeOut: function(element, options) {
            var to = 1;
            this.animate({
                duration: options.duration,
                delta: function(progress) {
                    progress = this.progress;
                    return FX.easing.swing(progress);
                },
                complete: options.complete,
                step: function(delta) {
                    element.style.opacity = to - delta;
                }
            });
        },
        fadeIn: function(element, options) {
            var to = 0;
            this.animate({
                duration: options.duration,
                delta: function(progress) {
                    progress = this.progress;
                    return FX.easing.swing(progress);
                },
                complete: options.complete,
                step: function(delta) {
                    element.style.opacity = to + delta;
                }
            });
        }
    };
    window.FX = FX;
})()

function busqueda(fino){
  var interno = document.getElementsByName('selector');/*obtengo todos los elementos de mismo nombre al click*/
	if(fino.checked){
	  var x = document.getElementsByName(fino.title);/*obtengo el elemento del click*/
	      barredora(fino.title,true);
		  if(x[0].checked){document.getElementById('image').innerHTML ='<img src="'+x[0].id+'" alt="'+x[0].id+'" >'; }
		  else{document.getElementById('image').innerHTML ='<img src="'+x[0].id+'" title="'+x[1].id+'" >';}
	}else{
		 barredora(fino.title,false);
	  	var tabla = document.getElementsByClassName("pendon");
		var texto="";
		for(i=0;i<tabla.length;i++){
			  if(!jQuery(tabla[i].id).is(':hidden')){texto=texto+tabla[i].id+' es visible\n';}else{texto=texto+tabla[i].id+' no visible\n';};
			   if(fino.title===tabla[i].id){//alert('lo encontre '+tabla[i].id);
			   }
			    if(interno[i].checked){interno[i].checked=false;}
			}
			//alert(texto);
		}
 }

function barredora(id,bool){
	var x=document.getElementsByClassName("pendon");
	if(bool){
	  for(i=0;i<x.length;i++){x[i].style.display = 'none'}
	  document.getElementById(id).style.display = 'block';
	 }else{for(i=0;i<x.length;i++){x[i].style.display = 'block';}}
	}
	
function vacio(str){str=str.toLowerCase();str=str.replace(/\s/g,'');if(str!=""){return true;}else{return false;}}