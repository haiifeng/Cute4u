var utils = {

    //获取当前页面的滚动位置
    getScrollPosition(el = window) {
        return {
            x: el.pageXOffset !== undefined ? el.pageXOffset : el.scrollLeft,
            y: el.pageYOffset !== undefined ? el.pageYOffset : el.scrollTop
        }
    },

    scrollToTop(position = 0) {
        // 使用requestAnimationFrame，如果没有则使用setTimeOut
        if (!window.requestAnimationFrame) {
            window.requestAnimationFrame = function (callback) {
                return setTimeout(callback, 20)
            }
        }

        // 获取当前元素滚动的距离
        c = document.documentElement.scrollTop || document.body.scrollTop;
        if (c > 0) {
            window.requestAnimationFrame(utils.scrollToTop);
            window.scrollTo(0, c - c / 8);
        }
    },
}