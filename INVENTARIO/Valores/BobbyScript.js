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
