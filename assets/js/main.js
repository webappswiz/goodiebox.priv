function preload(arrayOfImages) {
    $(arrayOfImages).each(function(){
        (new Image()).src = this;
    });
}


preload([
    '/assets/img/home-img1.jpg',
    '/assets/img/home-img2.jpg',
    '/assets/img/home-img3.jpg',
    '/assets/img/home-img4.jpg',
    '/assets/img/home-img5.jpg',
    '/assets/img/home-img6.jpg',
    '/assets/img/home-img-hover-1.jpg',
    '/assets/img/home-img-hover-2.jpg',
    '/assets/img/home-img-hover-3.jpg',
    '/assets/img/home-img-hover-4.jpg',
    '/assets/img/home-img-hover-5.jpg',
    '/assets/img/home-img-hover-6.jpg',
]);