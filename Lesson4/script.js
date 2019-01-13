const gallary = {

    galleryImg: $('#gallery_img'),
    navBtn: $('#nav-btn'),
    overlay: $('#overlay'),
    modalForm: $('#modal_form'),

    start() {
        $('.container').on('click', '.gal-images', event => this.containerClickHandler(event.target.src, event.target));
    },

    containerClickHandler(src, openedImg) {
        this.emptyImg();
        this.openImage(src, openedImg);
    },

    openImage(src, openedImg) {
        this.galleryImg.append($('<img/>', {
            src: src
        }));

        this.navBtn.append($('<img/>', {
            src: './img/btn/back.png',
            id: 'back'
        }));

        this.navBtn.append($('<img/>', {
            src: './img/btn/next.png',
            id: 'next'
        }));

        this.overlay.fadeIn(300,
            function () {
                $('#modal_form')
                    .css('display', 'block')
                    .animate({opacity: 1, top: '10%'}, 200);
            });

        $('#next').on('click', () => this.nextImage(openedImg));
        $('#back').on('click', () => this.prevImage(openedImg));
        this.overlay.on('click', () => this.closeImg());
    },

    nextImage(openedImg) {
        const nextSibling = openedImg.nextElementSibling;
        const firstElement = openedImg.parentElement.firstElementChild;
        if (nextSibling) {
            this.containerClickHandler(nextSibling.src, nextSibling);
        } else {
            this.containerClickHandler(firstElement.src, firstElement);
        }
    },

    prevImage(openedImg) {
        const prevSibling = openedImg.previousElementSibling;
        const lastElement = openedImg.parentElement.lastElementChild;
        if (prevSibling) {
            this.containerClickHandler(prevSibling.src, prevSibling);
        } else {
            this.containerClickHandler(lastElement.src, lastElement);
        }
    },

    closeImg() {
        this.modalForm.removeAttr('style');
        this.overlay.fadeOut(200);
    },

    emptyImg() {
        this.galleryImg.empty();
        this.navBtn.empty();
    }
};


$(document).ready(function () {
    gallary.start();
});