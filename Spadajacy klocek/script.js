const canvas = document.getElementById('Tetrisek');
const ctx = canvas.getContext('2d');

const canvasWidth = canvas.width;
const canvasHeight = canvas.height;

const blockSize = 20;

let blockX = canvasWidth / 2 - blockSize / 2;
let blockY = 0;

let blockSpeed = 2;

let moveLeft = false;
let moveRight = false;

let isGrounded = false;

function drawBlock() {
    ctx.fillStyle = '#007bff';
    ctx.fillRect(blockX, blockY, blockSize, blockSize);
}

function draw() {
    ctx.clearRect(0, 0, canvasWidth, canvasHeight);
    drawBlock();

    if (blockY + blockSize < canvasHeight) {
        blockY += blockSpeed;
        isGrounded = false; 

    } else {
        blockY = canvasHeight - blockSize;
        isGrounded = true; 
    }

    
    if (!isGrounded) {
        if (moveLeft && blockX > 0) {
            blockX -= 5;
        }
        if (moveRight && blockX + blockSize < canvasWidth) {
            blockX += 5;
        }
    }

    requestAnimationFrame(draw);
}

document.addEventListener('keydown', function(event) {
    if (event.key === 'ArrowLeft') {
        moveLeft = true;
    }
    if (event.key === 'ArrowRight') {
        moveRight = true;
    }
});

document.addEventListener('keyup', function(event) {
    if (event.key === 'ArrowLeft') {
        moveLeft = false;
    }
    if (event.key === 'ArrowRight') {
        moveRight = false;
    }
});

draw();