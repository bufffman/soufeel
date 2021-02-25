var slider = document.getElementById('slider_scroll');

noUiSlider.create(slider, {
    start: [0, 50],
    connect: true,
    range: {
        'min': 0,
        'max': 100
    }
});
