<div class="container">

        <img src="https://occ-0-1068-1723.1.nflxso.net/dnm/api/v6/TsSRXvDuraoJ7apdkH6tsHhf-ZQ/AAAABbtnw6C35mhluezr-K_FiP65TW93xpH0M3S6lKPv50_7eshzc1vosWxE3CxcnJ5-eVYmpcaQyra9yFLzQtsNx4odwYO-GtDDmDU0.png?r=47e" alt="logo" class="logo">

        <div id="heading"></div>

        <div id="characters" class="characters"></div>

        <div id="single-character"></div>

        <div class="cta">
            <button class="prev" id="prev">
                <i class="fas fa-arrow-left"></i>
                Prev
            </button>
            <button class="next" id="next">
                Next
                <i class="fas fa-arrow-right"></i>
            </button>
        </div>

    </div>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

*{
    box-sizing: border-box;
}

body{
    font-family: 'Poppins',sans-serif;
    background-color: #202329;
    overflow-x: hidden;
}

.container{
    max-width: 1100px;
    margin: auto;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    margin-bottom: 30px;
}

.container .logo{
    width: 400px;
    height: 150px;
}

.characters{
    display: grid;
    grid-template-columns: repeat(5,1fr);
    grid-gap: 25px;
    margin-top: 30px;
    margin-bottom: 30px;
}

.character{
    position: relative;
    height: 180px;
    width: 180px;
    border: 4px solid #47e31e;
    border-radius: 2px;
    cursor: pointer;
}

.character img{
    width: 100%;
    height: 100%;
}

.character-info{
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    color: #fff;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 0 10px;
    opacity: 0;
}

.character-info:hover{
    opacity: 1;
    transition: opacity 0.3s ease;
}

.modal{
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.75);
    animation: openModal 0.3s ease;
}

.modal-container{
    width: 300px;
    margin: 50px auto;
    background-color: #fff;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
}

.modal-container img{
    width: 100%;
    height: 250px;
    object-fit: cover;
}

.modal-container h3{
    line-height: 1;
}

.modal-container .modal-container-info{
    padding: 1rem;
}

.cta{
    margin: 30px 0;
    width: 225px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.cta button{
    border: none;
    background-color: #47e31e;
    color: #fff;
    font-weight: bold;
    font-size: 1.1rem;
    letter-spacing: 1px;
    padding: 0.7rem 1.2rem;
    border-radius: 40px;
    outline: none;
    cursor: pointer;
}

.cta button:hover{
    background-color: #30a812;
}

@media(max-width: 1100px){
    .characters{
        grid-template-columns: repeat(4,1fr);
    }

    .character{
        height: 200px;
        width: 200px;
    }
}

@media(max-width: 960px){
    .characters{
        grid-template-columns: repeat(3,1fr);
    }

    .character{
        height: 225px;
        width: 225px;
    }
}

@media(max-width: 800px){
    .characters{
        grid-template-columns: repeat(2,1fr);
    }

    .character{
        height: 250px;
        width: 250px;
    }
}

@media(max-width: 600px){
    .container .logo{
        width: 300px;
        height: 100px;
    }

    .characters{
        grid-template-columns: 1fr;
    }

    .character{
        height: 300px;
        width: 300px;
    }
}

@keyframes openModal{
    from{
        opacity: 0;
    }

    to{
        opacity: 1;
    }
}
    </style>
    
    <script>
        const heading = document.getElementById('heading');
const characters = document.getElementById('characters');
const singleCharacter = document.getElementById('single-character');
// const modal = document.getElementById('modal');
const prev = document.getElementById('prev');
const next = document.getElementById('next');


fetch(`https://rickandmortyapi.com/api/character/`)
    .then(res => res.json())
    .then(data => {
        console.log(data);

        characters.innerHTML = data.results.map(item => `
        
            <div class = 'character'>
            
                <img src = '${item.image}' />

                <div class = 'character-info' data-characterID = '${item.id}'>
                
                    <h3>${item.name}</h3>
                
                </div>
            
            </div>
        
        `).join('');
    });

// Get character by id
const getCharacterById = character => {
    fetch(`https://rickandmortyapi.com/api/character/${character}`)
        .then(res => res.json())
        .then(data => {
            addCharacterToDOM(data);
        });
}

// Adding characters to DOM
const addCharacterToDOM = character => {

    singleCharacter.innerHTML = `
    
        <div class = 'modal' id = 'modal'>

            <div class = 'modal-container'>
            
                <img src = '${character.image}' />

                <div class = 'modal-container-info'>
                
                    <h3>Id: ${character.id}</h3>
                    <h3>Name: ${character.name}</h3>
                    <h3>Status: ${character.status}</h3>
                    <h3>Gender: ${character.gender}</h3>
                    <h3>Species: ${character.species}</h3>
                    <h3>Location: ${character.location.name}</h3>
                    <h3># of episodes: ${character.episode.length}</h3>
                
                </div>

            </div>

        </div>

    `;
}

// Show single character
characters.addEventListener('click', e => {

    const characterInfo = e.path.find(item => {
        if (item.classList) {
            return item.classList.contains('character-info');
        }
    });

    if (characterInfo) {
        const characterId = characterInfo.getAttribute('data-characterID');
        getCharacterById(characterId);
    }

});

// Close modal
window.addEventListener('click', e => {
    if (e.target === modal) {
        modal.style.display = 'none';
    }
});


// Next clicking
let counter = 1;
next.addEventListener('click', () => {

    fetch(`https://rickandmortyapi.com/api/character/?page=${++counter}`)
        .then(res => res.json())
        .then(data => {
            console.log(data);

            characters.innerHTML = data.results.map(item => `
            
                <div class = 'character'>
                
                    <img src = '${item.image}' />
    
                    <div class = 'character-info' data-characterID = '${item.id}'>
                    
                        <h3>${item.name}</h3>
                    
                    </div>
                
                </div>
            
            `).join('');
        });
});

// Prev clicking
prev.addEventListener('click', () => {

    fetch(`https://rickandmortyapi.com/api/character/?page=${--counter}`)
        .then(res => res.json())
        .then(data => {
            console.log(data);

            characters.innerHTML = data.results.map(item => `
            
                <div class = 'character'>
                
                    <img src = '${item.image}' />
    
                    <div class = 'character-info' data-characterID = '${item.id}'>
                    
                        <h3>${item.name}</h3>
                    
                    </div>
                
                </div>
            
            `).join('');
        });
});

    </script>