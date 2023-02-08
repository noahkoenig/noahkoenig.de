$(document).ready(function() {
    $(".dropbtn").click(function() {
        $(".dropdown-content").slideToggle(400);
        $("html").toggleClass("dropnoscroll");
        $(".dropbtn").toggleClass("dropbtnrotate");
    });
});

function getEntryValueByTag(entry, tag) {
    return entry.getElementsByTagName(tag)[0].childNodes[0].nodeValue;
}