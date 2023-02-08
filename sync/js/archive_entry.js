$(document).ready(function() {
    var xml_http = new XMLHttpRequest();
    xml_http.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var siteId = window.location.href.replace(/[^0-9]/g, '');
            var entries = this.responseXML.getElementsByTagName("Entry");
            loadEntryVideoById(entries, siteId);
            loadEntryDataById(entries, siteId);
        }
    };
    xml_http.open("GET", "/data/archive_entries.xml", true);
    xml_http.send();
});

function loadEntryVideoById(entries, siteId) {
    for (let i = 0; i < entries.length; i++) {
        var entry = entries[i];
        var id = getEntryValueByTag(entry, "ID");
        if (id == siteId) {
            document.getElementById("entry_video").innerHTML = concatEntryVideo(
                getEntryValueByTag(entry, "Format"), getEntryValueByTag(entry, "Link"));
            break;
        }
    }
}

function concatEntryVideo(format, link) {
    return '<div class="video' + format + '">' +
    '<iframe class="videoframe" src ="' + link + '" frameborder="0"' +
    'webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>' +
    '</div>';
}

function loadEntryDataById(entries, siteId) {
    for (let i = 0; i < entries.length; i++) {
        var entry = entries[i];
        var id = getEntryValueByTag(entry, "ID");
        if (id == siteId) {
            document.getElementById("entry_data").innerHTML = concatEntryData(
                getEntryValueByTag(entry, "Title"), getEntryValueByTag(entry, "Minutes"),
                getEntryValueByTag(entry, "Day"), getEntryValueByTag(entry, "Month"),
                getEntryValueByTag(entry, "Year"), getEntryValueByTag(entry, "Language"));
            break;
        }
    }
}

function concatEntryData(title, minutes, day, month, year, language) {
    return '<h2>' + title + '<p class="entry_trivia"><i>' + 
    minutes + ' min &bull; ' + day + ' ' + month + ' ' + year + ' &bull; ' +
    language + '</i></p></h2>';
}