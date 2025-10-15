const cards = document.querySelectorAll('.card');
const body = document.body;
const h1 = document.querySelector('h1');
const p = document.querySelector('p');

cards.forEach(card => {
    card.addEventListener('click', () => {
        const newColor = card.getAttribute('data-color');
        
        body.style.backgroundColor = newColor;

        if (newColor === '#f7da21' || newColor === '#ff7b00') {
            h1.style.color = '#333';
            p.style.color = '#555';
        } else {
            h1.style.color = '#f0f0f0';
            p.style.color = '#ccc';
        }
    });
});