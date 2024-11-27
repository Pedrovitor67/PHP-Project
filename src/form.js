//Tratamento do formulário para que o usuário só possa clicar no botão de submit quando tiver preenchido o campo de nome e E-mail.

        //LEMBRETE DE FAZER TRATAMENTO PARA O INPUT FICAR INDISPONÍVEL APÓS A PESSOA CLICAR EM CADASTRAR. EFEITO PARECIDO COM O DA MAGAZINE LUIZA.

const nomeInput=document.getElementById('inputName')
const emailInput=document.getElementById('inputEmail')
const submitInput=document.getElementById('inputSubmit')



function inputTreatment(){
if(nomeInput.value!=""  && emailInput.value!=""){
    submitInput.disabled=false
    submitInput.classList.remove('btnDisabled')
    submitInput.classList.add('btnY')
}
else{
    submitInput.disabled=true
    submitInput.classList.add('btnDisabled')
    submitInput.classList.remove('btnY')

}


//Chama a função sempre que o valor dos inputs mudarem
nomeInput.addEventListener('input',inputTreatment)
emailInput.addEventListener('input',inputTreatment)



}

//Chama a função somente quanto todo conteúdo da página for carregado
document.addEventListener('DOMContentLoaded',()=>{
    inputTreatment()
})