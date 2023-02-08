$(document).ready(function() {
    loadEntryPreviews();
});

function loadEntryPreviews() {
    var xml_http = new XMLHttpRequest();
    xml_http.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var entries = this.responseXML.getElementsByTagName("Entry");
            var entryPreviews = "";
            for (var i = 0; i < entries.length; i++) {
                var entry = entries[i];
                entryPreviews += concatEntryPreview(
                    getEntryValueByTag(entry, "ID"), getEntryValueByTag(entry, "Title"),
                    getEntryValueByTag(entry, "Year"), getEntryValueByTag(entry, "Platform"));
            }
            document.getElementById("entry_previews").innerHTML = entryPreviews;
        }
    };
    xml_http.open("GET", "/data/archive_entries.xml", true);
    xml_http.send();
}

function concatEntryPreview(id, title, year, platform) {
    return '<a href="/archive/' + id + '.php">' +
    '<img class="previewimg" src="/src/archive/' +
    id + '_preview.webp"></a><br/>' +
    '<a class="previewlink" href="/archive/' +
    id + '.php">' + title + '</a>' +
    '<p class="calibripreviewvia">' + year +
    ' &bull; via <img class="previewviaicon" src="/src/icons/' +
    platform + '.webp"></p>';
}