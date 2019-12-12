
$(function() {
  
    
    $("#cadastro").validate({
    
        
        rules: {
            nome: {
                    required: true	   
		
                },
		email: {
                    required: true,
			email: true
                
		   
                },
		cidade: {
                    required: true
                    
		   
                },
              
                bairro: {
                    required: true
                   
                },

		telefone: {
                    required: true,
			minlength: 11,
     		    number: true
                },

           
		},
        
        
        messages: {
           
           nome: {
                    required: "Campo obrigatório"
                   	
                },
		email: {
                    required: "Campo obrigatório",
		    email: "Digite um e-mail válido"                  
		   
                },
                 cidade: {
                    required: "Campo obrigatório"
                 
                },
                
                bairro: {
                    required: "Campo obrigatório"
                   
                },
		telefone: {
                    required: "Campo obrigatório",
			minlength: "Mínimo de caracteres permitidos 11",
			number: "Digite apenas números"
                },
            }
        });
	});
  

