const squares = document.querySelectorAll('.square')
const mole = document.querySelector('.mole')
const timeLeft = document.querySelector('#time-left')
const score = document.querySelector('#score')

let result = 0
let hitPosition
let currentTime = 60
let timerId = null

function randomSquare(){
    squares.forEach(square => {
        square.classList.remove('mole')
    })

    let randomSquare = squares[Math.floor(Math.random() * 6)]
    randomSquare.classList.add('mole')
    hitPosition = randomSquare.id
}

squares.forEach(square => {
    square.addEventListener('mousedown', () =>{
        if (square.id == hitPosition){
            result++
            score.textContent = result
            hitPosition = null
        }

    })
})


function moveMole(){
    timerId = setInterval(randomSquare, 900)
}

moveMole()

function countDown(){
    timeLeft.textContent = currentTime
    currentTime--
    

    if (currentTime == 0 ){
        clearInterval(countDownTimerId)
        clearInterval(timerId)
        alert('GAME OVER! Your Final Score Is ' + result)        
    }
}

let countDownTimerId = setInterval(countDown, 1000)