function validateImageUrl(url, callback) {
    const img = new Image();

    img.onload = function () {
        callback(true);
    };
    img.onerror = function () {
        callback(false);
    };

    img.src = url;
}