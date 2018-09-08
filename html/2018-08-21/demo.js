function btn() {
    var dp = document.getElementById('js-cN');
    if (dp.className.includes('d-none')) {
        dp.classList.replace('d-none','d-flex');
        // dp.classList.add('d-flex');
    }
        else {
            dp.classList.replace('d-flex','d-none');
        }
}