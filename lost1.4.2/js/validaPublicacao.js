
$(function() {
  
    
    $("#cadastro").validate({
    
        
        rules: {
            objeto: {
                    required: true,
                    minlength: 2,
                    maxlength: 40
		   
		
                },
		cidade: {
                    required: true,
                    minlength: 2,
                    maxlength: 25
		   
                },
		bairro: {
                    required: true,
                    minlength: 2,
                    maxlength: 20
		   
                },
              
                telefone: {
                    required: true,
                    minlength: 11,
		    maxlength: 11,
     		    number: true
                },
		
		descricao: {
			required: true

		},
           
		},
        
        
        messages: {
            objeto: "Por favor, insira seu nome",
           objeto: {
                    required: "Campo obrigatório",
                    minlength: "Mínimo de caracteres permitidos 2",
                    maxlength: "Maxímo de caracteres permitidos 25"
	
		
			
                },
		cidade: {
                    required: "Campo obrigatório",
                    minlength: "Mínimo de caracteres permitidos 2",
                    maxlength: "Maxímo de caracteres permitidos 25"
		   
                },
                 bairro: {
                    required: "Campo obrigatório",
                    minlength: "Mínimo de caracteres permitidos 2",
                    maxlength: "Maxímo de caracteres permitidos 20"
		   
                },
                
                telefone: {
                    required: "Campo obrigatório",
                    minlength: "Mínimo de caracteres permitidos 11",
		    maxlength: "Máximo de caracteres permitidos 11",
			number: "Digite apenas números"
                },
		
		descricao: {
                    required: "Campo obrigatório"
                    
                },
            }
        });
	});
  

