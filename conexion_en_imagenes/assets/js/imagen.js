let elem = document.querySelector('.contenido-p-img');
let msnry = new Masonry( elem, {
    itemSelector: '.img',
    columnWidth: 21.25,
    gutter: 20,
    isFitWidth: true
});
