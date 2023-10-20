const botao = document.querySelector('.contato__button')
const resposta = document.querySelector('.contato__resposta')

let nome = document.querySelector('.contato__input--nome')
let email = document.querySelector('.contato__input--email')
let mensagem = document.querySelector('.contato__input--mensagem')

async function envia_emails(){
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
});