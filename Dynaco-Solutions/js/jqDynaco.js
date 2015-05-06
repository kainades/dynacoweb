(function($){
	var suma = (parseInt(0));
	jQuery.fn.extend({
		valname: function(){
			var $this	=	jQuery(this);
			$this.focus(function(){
				$this.val(jQuery.trim($this.val().toLowerCase()));
				$("#DivInputName").removeClass(" has-success ").removeClass(" has-warning ").removeClass(" has-error ");
				$("#SpanInputName").removeClass(" glyphicon-ok ").removeClass(" glyphicon-warning-sign ").removeClass(" glyphicon-remove ");
			}); 
			
			$this.blur(function(){
				$this.val(jQuery.trim($this.val().toLowerCase()));
				if($this.val().length <= 4){
					$("#DivInputName").removeClass(" has-success ").removeClass(" has-warning ").removeClass(" has-error ").addClass(" has-error ");
					$("#SpanInputName").removeClass(" glyphicon-ok ").removeClass(" glyphicon-warning-sign ").removeClass(" glyphicon-remove ").addClass(" glyphicon-remove ");
				}else{
					if($this.val().length <= 6){
						$("#DivInputName").removeClass(" has-success ").removeClass(" has-warning ").removeClass(" has-error ").addClass(" has-warning ");
						$("#SpanInputName").removeClass(" glyphicon-ok ").removeClass(" glyphicon-warning-sign ").removeClass(" glyphicon-remove ").addClass(" glyphicon-warning-sign ");
					}else{
						$("#DivInputName").removeClass(" has-success ").removeClass(" has-warning ").removeClass(" has-error ").addClass(" has-success ");
						$("#SpanInputName").removeClass(" glyphicon-ok ").removeClass(" glyphicon-warning-sign ").removeClass(" glyphicon-remove ").addClass(" glyphicon-ok ");
					}
				}
			});					
		},
		valmail: function(){
			var $this	=	jQuery(this);
			$this.focus(function(){
				$this.val(jQuery.trim($this.val().toLowerCase()));
				$("#DivInputEmail").removeClass(" has-success ").removeClass(" has-warning ").removeClass(" has-error ");
				$("#SpanInputEmail").removeClass(" glyphicon-ok ").removeClass(" glyphicon-warning-sign ").removeClass(" glyphicon-remove ");
			}); 
			
			$this.blur(function(){
				$this.val(jQuery.trim($this.val().toLowerCase()));
				if($this.val().length==0){
					$("#DivInputEmail").removeClass(" has-success ").removeClass(" has-warning ").removeClass(" has-error ").addClass(" has-warning ");
					$("#SpanInputEmail").removeClass(" glyphicon-ok ").removeClass(" glyphicon-warning-sign ").removeClass(" glyphicon-remove ").addClass(" glyphicon-warning-sign ");
				}else checkRegexp( $this);
			});					
		},
		valphone: function(){
			var $this	=	jQuery(this);
			$this.focus(function(){
				$this.val(jQuery.trim($this.val().toLowerCase()));
				$("#DivInputPhone").removeClass(" has-success ").removeClass(" has-warning ").removeClass(" has-error ");
				$("#SpanInputPhone").removeClass(" glyphicon-ok ").removeClass(" glyphicon-warning-sign ").removeClass(" glyphicon-remove ");
			}); 
			$this.blur(function(){
				$this.val(jQuery.trim($this.val().toLowerCase()));
				if($this.val().length < 6){
					$("#DivInputPhone").removeClass(" has-success ").removeClass(" has-warning ").removeClass(" has-error ").addClass(" has-error ");
					$("#SpanInputPhone").removeClass(" glyphicon-ok ").removeClass(" glyphicon-warning-sign ").removeClass(" glyphicon-remove ").addClass(" glyphicon-remove ");
				}else{
					if($this.val().length <= 7){
						$("#DivInputPhone").removeClass(" has-success ").removeClass(" has-warning ").removeClass(" has-error ").addClass(" has-warning ");
						$("#SpanInputPhone").removeClass(" glyphicon-ok ").removeClass(" glyphicon-warning-sign ").removeClass(" glyphicon-remove ").addClass(" glyphicon-warning-sign ");
					}else{
						$("#DivInputPhone").removeClass(" has-success ").removeClass(" has-warning ").removeClass(" has-error ").addClass(" has-success ");
						$("#SpanInputPhone").removeClass(" glyphicon-ok ").removeClass(" glyphicon-warning-sign ").removeClass(" glyphicon-remove ").addClass(" glyphicon-ok ");
					}
				}
			});					
		},
		enviar: function(){
			var $this	=	jQuery(this);
			$this.click(function(){
				verification();
			});				
		}
	});
	function checkRegexp( o ){
		var salida = false;
		if ( !( /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/.test(o.val()))) salida = false;
		else salida = true;
		$("#DivInputEmail").removeClass(" has-success ").removeClass(" has-warning ").removeClass(" has-error ");
		$("#SpanInputEmail").removeClass(" glyphicon-ok ").removeClass(" glyphicon-warning-sign ").removeClass(" glyphicon-remove ");

		if(!salida){
			$("#DivInputEmail").addClass(" has-error ");
			$("#SpanInputEmail").addClass(" glyphicon-remove ");
		}else{
			$("#DivInputEmail").addClass(" has-success ");
			$("#SpanInputEmail").addClass(" glyphicon-ok ");
		}
	}
})(jQuery);