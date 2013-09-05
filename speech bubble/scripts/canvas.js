function roundedRect(context, x, y, w, h, r)
{
    context.beginPath();
    context.arc(x+r, y+r, r, Math.PI, 1.5*Math.PI);
    context.arc(x+w-r, y+r, r, 1.5*Math.PI, 2*Math.PI);
    context.arc(x+w-r, y+h-r, r, 0, 0.5*Math.PI);
    context.arc(x+r, y+h-r, r, 0.5*Math.PI, Math.PI);
    context.closePath();
}

function makeRect(x, y, w, h)
{
    return { x: x, y: y, w: w, h: h };
}

function initializeCanvas(canvasId)
{
    // This function should only be called once on each canvas.
    // It will ensure the best rendering quality on both Retina and non-Retina displays.
    var canvas = document.getElementById(canvasId);
    var context = canvas.getContext('2d');

    var devicePixelRatio = window.devicePixelRatio || 1;
    var backingStorePixelRatio = context.webkitBackingStorePixelRatio
        || context.mozBackingStorePixelRatio
        || context.msBackingStorePixelRatio
        || context.oBackingStorePixelRatio
        || context.backingStorePixelRatio
        || 1;

    var pixelRatio = devicePixelRatio / backingStorePixelRatio;

    canvas.style.width = canvas.width + 'px';
    canvas.style.height = canvas.height + 'px';
    canvas.width *= pixelRatio;
    canvas.height *= pixelRatio;
    canvas.webcodePixelRatio = pixelRatio;

    context.scale(pixelRatio, pixelRatio);
}

function drawCanvas(canvasId)
{
    //// General Declarations
    var canvas = document.getElementById(canvasId);
    var context = canvas.getContext('2d');
    var pixelRatio = canvas.webcodePixelRatio;


    //// Color Declarations
    var blackColor = 'rgba(0, 0, 0, 1)';
    var whiteColor = 'rgba(255, 255, 255, 1)';
    var gradientColor = 'rgba(127, 140, 141, 1)';
    var color4 = 'rgba(189, 195, 199, 1)';

    //// Frames
    var frameMain = makeRect(28, 29, 210, 97);
    var framePin = makeRect(114, 126, 37, 20);


    //// Bezier Drawing
    context.beginPath();
    context.moveTo(frameMain.x + 200.5, frameMain.y + 18.5);
    context.lineTo(frameMain.x + 200.5, frameMain.y + 94.5);
    context.bezierCurveTo(frameMain.x + 200.5, frameMain.y + 96.71, 226.71, 127.5, 224.5, 127.5);
    context.lineTo(framePin.x + 36.53, framePin.y + 2.5);
    context.lineTo(framePin.x + 36.57, framePin.y + 2.64);
    context.lineTo(framePin.x + 18.5, framePin.y + 17.5);
    context.lineTo(framePin.x + 0.43, framePin.y + 2.64);
    context.lineTo(framePin.x + 0.47, framePin.y + 2.5);
    context.lineTo(43.5, 127.5);
    context.bezierCurveTo(41.29, 127.5, frameMain.x + 11.5, frameMain.y + 96.71, frameMain.x + 11.5, frameMain.y + 94.5);
    context.lineTo(frameMain.x + 11.5, frameMain.y + 18.5);
    context.bezierCurveTo(frameMain.x + 11.5, frameMain.y + 16.29, frameMain.x + 13.29, frameMain.y + 14.5, frameMain.x + 15.5, frameMain.y + 14.5);
    context.lineTo(frameMain.x + 196.5, frameMain.y + 14.5);
    context.bezierCurveTo(frameMain.x + 198.71, frameMain.y + 14.5, frameMain.x + 200.5, frameMain.y + 16.29, frameMain.x + 200.5, frameMain.y + 18.5);
    context.closePath();
    context.lineJoin = 'round';
    context.fillStyle = color4;
    context.fill();


    //// Mainframe Drawing
    roundedRect(context, 66.5, 66.5, 0, 0, 0);
    context.fillStyle = whiteColor;
    context.fill();
    context.strokeStyle = blackColor;
    context.lineWidth = 1;
    context.stroke();


    //// Picture Drawing
    roundedRect(context, frameMain.x + 17.5, frameMain.y + 20.5, 59, 73, 4);
    context.fillStyle = gradientColor;
    context.fill();


    //// Name Drawing
    var nameRect = makeRect(frameMain.x + 86, frameMain.y + 76, 103, 17);
    context.fillStyle = blackColor;
    context.font = '12px Helvetica, sans-serif';
    context.textAlign = 'left';
    context.fillText('Marty Neumeier', nameRect.x, nameRect.y + 11);


    //// Quote Drawing
    var quoteRect = makeRect(frameMain.x + 86, frameMain.y + 20, 103, 57);
    context.fillStyle = blackColor;
    context.font = '11.5px Helvetica, sans-serif';
    context.textAlign = 'left';
    context.fillText('"A picture is worth a ', quoteRect.x, quoteRect.y + 25);
    context.fillText('thousand dollars."', quoteRect.x, quoteRect.y + 39);
}
