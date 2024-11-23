let canvas = document.getElementById("canvas"),
    ctx = canvas.getContext("2d"),
    w,
    h,
    particles = [],
    maxParticles = 150,
    radius = 10;

const Tau = Math.PI * 2,
    ConnectionDist = 100,
    Msqrt = Math.sqrt,
    Mrandom = Math.random;

function handleResize() {
    w = ctx.canvas.width = window.innerWidth;
    h = ctx.canvas.height = window.innerHeight;
}
window.onresize = handleResize;
handleResize();

function createParticles() {
    let vRange = 3,
        vModifier = 0.5;
    for (let i = 0; i < maxParticles; i++) {
        particles.push({
            x: Mrandom() * (w - radius * 2) + radius,
            y: Mrandom() * (h - radius * 2) + radius,
            xv: Mrandom() * vRange - vModifier,
            yv: Mrandom() * vRange - vModifier,
            strokeColour: { h: 0, s: 1 }
        });
    }
}

function update() {
    for (let i = 0; i < particles.length; i++) {
        let p = particles[i];
        // Move particles
        p.x += p.xv;
        p.y += p.yv;

        // Bounce off walls
        if (p.x < radius) {
            p.x = radius;
            p.xv *= -1;
        } else if (p.x > w - radius) {
            p.x = w - radius;
            p.xv *= -1;
        }
        if (p.y < radius) {
            p.y = radius;
            p.yv *= -1;
        } else if (p.y > h - radius) {
            p.y = h - radius;
            p.yv *= -1;
        }
    }
}

function connect() {
    let currentDist;
    for (let i = 0; i < maxParticles - 1; i++) {
        for (let j = i + 1; j < maxParticles; j++) {
            let p1 = particles[i],
                p2 = particles[j];
            currentDist = dist(p2.x, p1.x, p2.y, p1.y);

            if (currentDist < ConnectionDist) {
                ctx.beginPath();
                ctx.moveTo(p1.x, p1.y);
                ctx.strokeStyle = `hsla(${p1.strokeColour.h}, ${p1.strokeColour.s * 100}%, 15%, ${1 - currentDist / ConnectionDist})`;
                ctx.lineTo(p2.x, p2.y);
                ctx.stroke();
            }
        }
    }
}

function draw() {
    for (let i = 0; i < particles.length; i++) {
        let p = particles[i];
        let d = dist(0, p.x, 0, p.y);

        p.fillColour = `hsla(${d}, ${Math.min(d * 0.1, 100)}%, 30%, 1)`;
        p.strokeColour = { h: d, s: Math.min(d * 0.01, 1) };

        ctx.beginPath();
        ctx.fillStyle = p.fillColour;
        ctx.arc(p.x, p.y, radius, 0, Tau);
        ctx.fill();
    }
}

function dist(x1, x2, y1, y2) {
    let a = x1 - x2,
        b = y1 - y2;
    return Msqrt(a * a + b * b);
}

function animate() {
    canvas.width = w;
    ctx.clearRect(0, 0, w, h);
    update();
    connect();
    draw();
    requestAnimationFrame(animate);
}

createParticles();
animate();


$(document).ready(function() {
    var $button = $('.red-round-button');
    
    function checkButtonPosition() {
        var screenWidth = $(window).width();
        var screenHeight = $(window).height();
        var buttonOffset = $button.offset();
        var buttonWidth = $button.outerWidth();
        var buttonHeight = $button.outerHeight();

        if (buttonOffset.left <= 0 || buttonOffset.left + buttonWidth >= screenWidth ||
            buttonOffset.top <= 0 || buttonOffset.top + buttonHeight >= screenHeight) {
            positionButtonRandomly();
        }
    }
    setInterval(checkButtonPosition, 10);

    function positionButtonRandomly() {
        var screenWidth = $(window).width();
        var screenHeight = $(window).height();
        var randomX = Math.random() * (screenWidth - $button.outerWidth());
        var randomY = Math.random() * (screenHeight - $button.outerHeight());
        $button.css({ top: randomY, left: randomX });
    }

    positionButtonRandomly();
    $(document).mousemove(function(event) {
        var mouseX = event.pageX;
        var mouseY = event.pageY;
        var buttonX = $button.offset().left + $button.outerWidth() / 2;
        var buttonY = $button.offset().top + $button.outerHeight() / 2;
        var distanceX = mouseX - buttonX;
        var distanceY = mouseY - buttonY;
        var distance = Math.sqrt(distanceX * distanceX + distanceY * distanceY);

        if (distance < 100) {
            var moveX = (distanceX / distance) * 15; // Move 50px para longe
            var moveY = (distanceY / distance) * 15; // Move 50px para longe
            $button.css({
                top: $button.offset().top - moveY,
                left: $button.offset().left - moveX
            });
        }
    });


    function HAHAHAHA() {

        var $slideshowContainer = $('<div id="slideshow-container"></div>').css({
            position: 'fixed',
            top: 0,
            left: 0,
            width: '100%',
            height: '100%',
            backgroundColor: 'black',
            zIndex: 9999,
            display: 'flex',
            justifyContent: 'center',
            alignItems: 'center',
            overflow: 'hidden'
        });
        var $image = $('<img src="image1.jpg" class="slideshow-image" style="max-width: 100%; max-height: 100%; object-fit: contain;">');
        $slideshowContainer.append($image);
        $('body').append($slideshowContainer);

        // Lista das imagens para o slideshow
        var images = ['https://images2.imgbox.com/27/db/6rorgqqs_o.png', 'https://images2.imgbox.com/f1/6a/kqq5bYVi_o.png', 'https://images2.imgbox.com/87/a7/dEWXx8Q0_o.png', 'https://images2.imgbox.com/0d/b3/RYi9CpUu_o.png', 'https://images2.imgbox.com/f4/bb/TCxOYfwb_o.png', 'https://images2.imgbox.com/f5/e7/fT4M5cRf_o.png', 'https://images2.imgbox.com/e5/db/5CbN6CDN_o.png', 'https://images2.imgbox.com/dc/a6/xshGA7H5_o.png', '']; 
        var currentImageIndex = 0;

        // Função para mudar a imagem do slideshow
        function changeImage() {
            currentImageIndex++;
            if (currentImageIndex >= images.length) {
                currentImageIndex = 0;
                $slideshowContainer.fadeOut(function() {
                    $(this).remove();
                    enablePageInteraction(); 
                });
            } else {
                $image.fadeOut(500, function() {
                    $image.attr('src', images[currentImageIndex]);
                    $image.fadeIn(500);
                });
            }
        }


        var slideshowInterval = setInterval(changeImage, 3000);
        disablePageInteraction();
        function disablePageInteraction() {
            $('body').css('overflow', 'hidden'); 
            $(document).on('click', function(event) {
                event.preventDefault(); 
            });
            $button.off('click'); 
        }

        function enablePageInteraction() {
            $('body').css('overflow', 'auto'); 
            $(document).off('click');
            $button.on('click', function() {
                HAHAHAHA();
            });
        }
    }

    $button.on('click', function() {
        // Cria o elemento de áudio
        var audio = new Audio('Scripts/BOBBY.mp3'); 
        audio.loop = true;  
        audio.play(); 

        HAHAHAHA();
    });
});

