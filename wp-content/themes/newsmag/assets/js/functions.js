jQuery(document).ready(function ($) {
	MachoThemes.init($);
});
		function validar(){
				var nome = formuser.nome.value;
				var email = formuser.email.value;
				var tel = formuser.tel.value;
				
				if(nome == ""){
					alert('Preencha o campo nome.');
					formuser.nome.focus();
					return false;
				}
				if(email == "" || email.indexOf('@') == -1 ){
					alert('Preencha o campo E-mail.');
					formuser.email.focus();
					return false;
				}
				if(tel == ""){
					alert('Preencha o campo telefone.');
					formuser.nome.focus();
					return false;
				}
				if(dtNascimento == ""){
					alert('Preencha o campo data de nascimento.');
					formuser.nome.focus();
					return false;
				}
				if(cep == ""){
					alert('Preencha o campo data de cep.');
					formuser.nome.focus();
					return false;
				}
				
			}
//esta função foi testada no contact form7, está funcionando com ele, porem por incompactibilidade foi retirado o plugin
$(document).ready(function(){// inicializando no carregamento da página
  var nome = localStorage.getItem("nome");// pegando o capo nome do contact form7
  var email = localStorage.getItem("email");
  var tel = localStorage.getItem("tel");
  var dtNascimento = localStorage.getItem("dtNascimento");
  var cep = localStorage.getItem("cep");
  var endereco = localStorage.getItem("endereco");
  var numero = localStorage.getItem("senha");
  var bairro = localStorage.getItem("bairro");
  var cidade = localStorage.getItem("cidade");
  var estado = localStorage.getItem("estado");
    
  //verificando se o campo não é vazio
  if(nome !== null){
     $("#nome").val(nome);
  }
  if(email !== null){
    $("#email").val(email);
  }
  if(tel !== null){
    $("#tel").val(tel);
  }
  if(dtNascimento !== null){
    $("#dtNascimento").val(dtNascimento)
  }
  if(cep !== null){
    $("#cep").val(cep);
  }
  if(endereco !== null){
    $("#endereco").val(endereco);
  }
   if(numero !== null){
    $("#numero").val(numero);
  }
   if(bairro !== null){
    $("#bairro").val(bairro);
  }
  if(cidade !== null){
    $("#cidade").val(cidade);
  }
  if(estado !== null){
    $("#estado").val(estado);
  }
});
//criando uma função para salvar os itens
function salvar(){
  localStorage.setItem("nome",  $("#nome").val());
  localStorage.setItem("email",  $("#email").val());
  localStorage.setItem("tel",  $("#tel").val());
  localStorage.setItem("dtNascimento",  $("#dtNascimento").val());
  localStorage.setItem("cep",  $("#cep").val());
  localStorage.setItem("endereco",  $("#endereco").val());
  localStorage.setItem("numero",  $("#numero").val());
  localStorage.setItem("bairro",  $("#bairro").val());
  localStorage.setItem("cidade",  $("#cidade").val());
  localStorage.setItem("estado",  $("#estado").val());
}

