
$(function() {
  
    
    $("#cadastro").validate({
    
        
        rules: {
            nome: {
                    required: true,
                    minlength: 5,
                    maxlength: 40
		   
		
                },
		usuario: {
                    required: true,
                    minlength: 5,
                    maxlength: 25
		   
                },
                email: {
                    required: true,
                    email: true
                },
                telefone: {
                    required: true,
                    minlength: 11,
                    maxlength: 11,
		    number: true
                },
                cidade: {
                    required: true,
                    minlength: 2,
                    maxlength: 40
		  
                },
		bairro: {
                    required: true,
                    minlength: 2,
                    maxlength: 20
		   
                },
                
                senha: {
                    required: true,
                    minlength: 8,
                    maxlength: 20
                },
                senha2: {
		    required: true,
                    equalTo: "#senha"
		    
                },
		},
        
        
        messages: {
            nome: "Por favor, insira seu nome",
           nome: {
                    required: "Campo obrigatório",
                    minlength: "Mínimo de caracteres permitidos 5",
                    maxlength: "Maxímo de caracteres permitidos 25"
	
		
			
                },
		usuario: {
                    required: "Campo obrigatório",
                    minlength: "Mínimo de caracteres permitidos 5",
                    maxlength: "Maxímo de caracteres permitidos 25"
		   
                },
                
                email:{ 
			email:"Digite um email válido",
			required: "Campo obrigatório"
		
			},
                telefone: {
                    required: "Campo obrigatório",
                    minlength: "Mínimo de caracteres permitidos 11",
                    maxlength: "Maxímo de caracteres permitidos 11",
			number: "Digite apenas números"
                },
                cidade: {
                    required: "Campo obrigatório",
                    minlength: "Mínimo de caracteres permitidos 2",
                    maxlength: "Maxímo de caracteres permitidos 40"
		  
		},
               
                bairro: {
                    required: "Campo obrigatório",
                    minlength: "Mínimo de caracteres permitidos 2",
                    maxlength: "Maxímo de caracteres permitidos 20"
		   
                },
               
               
                senha: {
                    required: "Campo obrigatório",
                    minlength: "Mínimo de caracteres permitidos 8",
                    maxlength: "Maxímo de caracteres permitidos 10"
                },
                senha2: {
	            required: "Campo obrigatório",
                    equalTo: "As senhas não conferem, redigite!"
                },
		
            }
        });
	});
  

