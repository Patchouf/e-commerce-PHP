// Rating Initialization
$(document).ready(function () {
    $('#rateMe1').mdbRate();
});

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function deleteCookie(cname) {
    document.cookie = cname + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/e-commerce-php;";
}

function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/e-commerce-php";
}

try {
    var croix = document.getElementById('croixtkt')
    croix.addEventListener('click', function () {
        console.log('ok');
        // deleteCookie('JP');
        setCookie('JP', 'false', -1);
        location.reload();
    }
    )
} catch (e) {

}

try {
    var croix2 = document.getElementById('croixpastkt')
    croix2.addEventListener('click', function () {
        console.log('ok');
        // deleteCookie('JP');
        setCookie('AR', 'false', -1);
        location.reload();
    }
    )
} catch (e) {

}
