import { setActive } from "./function.js";

const $canvas = $('.hexCanvas');

// $canvas.each(function() {
//     createHexagon(this);
// });

function createHexagon(el) {
    const ctx = el.getContext('2d');
    const width = el.width;
    const height = el.height;

    const points = [{
        x: 0,
        y: height * 0.8
    },
    {
        x: width / 2,
        y: height
    },
    {
        x: width,
        y: height * 0.8
    },
    {
        x: width,
        y: height * 0.2
    },
    {
        x: width / 2,
        y: 0
    },
    {
        x: 0,
        y: height * 0.2
    }
    ];

    ctx.beginPath();
    ctx.moveTo(points[0].x, points[0].y);
    for (let i = 1; i < points.length; i++) {
        ctx.lineTo(points[i].x, points[i].y);
    }
    ctx.closePath();

    ctx.fillStyle = '#121212';
    ctx.fill();
    ctx.strokeStyle = '#ff0';
    ctx.lineWidth = 2;
    ctx.stroke();
}


let indexLate = 0;
const $btnLate = $('#btnLate button');
const $slideLateImg = $('#slideLate div');

function wrapIndex(index, max) {
    return (index + max + 1) % (max + 1);
}

function setNext($collection, index) {
    $collection.removeClass('next');
    $collection.eq(index).addClass('next');
}

function setPrevious($collection, index) {
    $collection.removeClass('previous');
    $collection.eq(index).addClass('previous');
}

function setLeft($collection, index) {
    $collection.removeClass('left');
    $collection.eq(index).addClass('left');
}

function setRight($collection, index) {
    $collection.removeClass('right');
    $collection.eq(index).addClass('right');
}

$btnLate.each((i, el) => {
    $(el).on('click', function () {
        let temp;

        if (i == 1) {
            temp = indexLate + 1;
        } else if (i == 0) {
            temp = indexLate - 1;
        }

        indexLate = wrapIndex(temp, $slideLateImg.length - 1);
        setActive($slideLateImg, indexLate);

        let indexNext = wrapIndex(indexLate + 1, $slideLateImg.length - 1)
        setNext($slideLateImg, indexNext);

        let indexRight = wrapIndex(indexLate + 2, $slideLateImg.length - 1)
        setRight($slideLateImg, indexRight);

        let indexPrevious = wrapIndex(indexLate - 1, $slideLateImg.length - 1)
        setPrevious($slideLateImg, indexPrevious);

        let indexLeft = wrapIndex(indexLate - 2, $slideLateImg.length - 1)
        setLeft($slideLateImg, indexLeft);

        console.log(`${indexLeft}, ${indexPrevious}, ${indexLate}, ${indexNext}, ${indexRight}`);
    });
});