define(['jquery'], function ($) {
    let data = new Date();
    let date = data.toLocaleDateString().split('/').join('-');
    let time = data.toLocaleTimeString();
    if (/上午/.test(time)) {
        time = time.slice(2);
    } else if (/下午/.test(time)) {
        let arr = time.slice(2).split(':');
        arr.splice(0, 1, '' + (parseInt(arr[0]) + 12));
        time = arr.join(':');
    }
    return date + ' ' + time;
})