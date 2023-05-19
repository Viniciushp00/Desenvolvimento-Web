const controle = document.querySelectorAll('.controle');
let currentItem = 0;
const items = document.querySelectorAll('.item');
const maxItems = items.length;

controle.forEach((controle) => {
    controle.addEventListener('click', (e) => {
        isLeft = controle.classList.contains('flecha-esquerda');
        console.log('control clicked', isLeft,currentItem)

        if (isLeft){
            currentItem -=1;
        }else {
            currentItem+=1;
        }

        if(currentItem >= maxItems){
            currentItem =0;
        }

        if(currentItem <0){
            currentItem = maxItems -1;
        }

        items.forEach(item => item.classList.remove('current-item'));

        items[currentItem].scrollIntoView({
            inline:"center",
            behavior:"smooth",
            /*Colocando o carrossel pra ir se mover somente na horizontal*/ 
            block: 'nearest'
        });

        items[currentItem].classList.add('current-item')
    })
});