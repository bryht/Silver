
// ==========================
// 侧边导航下拉列表
// ==========================

$('.tpl-left-nav-link-list').on('click', function () {
    $(this).siblings('.tpl-left-nav-sub-menu').slideToggle(80)
        .end()
        .find('.tpl-left-nav-more-ico').toggleClass('tpl-left-nav-more-ico-rotate');
})



//light the side menu
$(function () {

    var links = document.getElementsByClassName('nav-link');
    for (var index = 0; index < links.length; index++) {
        var element = links[index];
        if (location.href.indexOf(element.getAttribute('href')) > 0) {
            element.setAttribute('class', 'nav-link active');
        } else {
            element.setAttribute('class', 'nav-link');
        }
    }
});


// ==========================
// 头部导航隐藏菜单
// ==========================

$('.tpl-header-nav-hover-ico').on('click', function () {
    $('.tpl-left-nav').toggle();
    $('.tpl-content-wrapper').toggleClass('tpl-content-wrapper-hover');
})
