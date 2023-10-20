const botao = document.querySelector('.contato__button')
const resposta = document.querySelector('.resposta')

let nome = document.querySelector('.nome')
let email = document.querySelector('.email')
let mensagem = document.querySelector('.telefone')

async function envia_emails(){
    const url = '/envia.php?nome=' + nome + '&email=' + email + '&msg=' + mensagem
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