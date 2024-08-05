let wrapperFirstScroll = document.getElementById("wrapper-first-scroll");
let wrapperSecondScroll = document.getElementById("wrapper-second-scroll");
wrapperFirstScroll.onscroll = function () {
    wrapperSecondScroll.scrollLeft = wrapperFirstScroll.scrollLeft;
};
wrapperSecondScroll.onscroll = function () {
    wrapperFirstScroll.scrollLeft = wrapperSecondScroll.scrollLeft;
};
