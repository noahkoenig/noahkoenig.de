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
            var format = getEntryValueByTag(entry, "Format");
            var link = getEntryValueByTag(entry, "Link");
            document.getElementById("entry_video").innerHTML = concatEntryVideo(format, link);
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
            var title = getEntryValueByTag(entry, "Title");
            var minutes = getEntryValueByTag(entry, "Minutes");
            var day = getEntryValueByTag(entry, "Day");
            var month = getEntryValueByTag(entry, "Month");
            var year = getEntryValueByTag(entry, "Year");
            var language = getEntryValueByTag(entry, "Language");
            document.getElementById("entry_data").innerHTML = concatEntryData(title, minutes, day, month, year, language);
            break;
        }
    }
}

function concatEntryData(title, minutes, day, month, year, language) {
    return '<h2>' + title + '<p class="entry_trivia"><i>' + 
    minutes + ' min &bull; ' + day + ' ' + month + ' ' + year + ' &bull; ' +
    language + '</i></p></h2>';
}