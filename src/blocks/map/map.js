ymaps.ready(init);
var myMap;

function init(){
    myMap = new ymaps.Map("map", {
        center: [55.7517088, 49.1892958],
        zoom: 16,
        controls: ['none']
    });
}
