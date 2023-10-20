botao = document.querySelector('.contato__button');

async function envia_emails(){
    
}

botao.addEventListener('click', async (e) => {
    e.preventDefault();
    await envia_emails();
});