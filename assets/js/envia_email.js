const botao = document.querySelector('.contato__button')
const resposta = document.querySelector('.contato__resposta')

async function envia_emails(){
    let nome = document.querySelector('.contato__input--nome').value
    let email = document.querySelector('.contato__input--email').value
    let mensagem = document.querySelector('.contato__input--mensagem').value

    const url = '/enviar.php?nome=' + nome + '&email=' + email + '&msg=' + mensagem
    const resp = await fetch(url)
    const json = await resp.json()
    if(json.works){
        resposta.innerHTML = 'Obrigado pelo contato!'
    }
}

botao.addEventListener('click', async (e) => {
    e.preventDefault();
    await envia_emails();
    await limpar_form();
});

async function limpar_form(){
    document.querySelector('.contato__input--nome').value = ''
    document.querySelector('.contato__input--email').value = ''
    document.querySelector('.contato__input--mensagem').value = ''
}