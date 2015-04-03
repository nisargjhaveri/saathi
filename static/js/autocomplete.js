jQuery.fn.autocomplete = function(url, displayKey, idElem, idKey) {
    var suggestions = new Bloodhound({
        prefetch: url,
        datumTokenizer: function(d) {
            return Bloodhound.tokenizers.whitespace(d[displayKey]);
        },
        queryTokenizer: Bloodhound.tokenizers.whitespace
    });
    suggestions.clearPrefetchCache()
    suggestions.initialize();

    this.typeahead({
        hint: false,
        highlight: true,
        minLength: 1
    },
    {
        displayKey: displayKey,
        source: suggestions.ttAdapter()
    })

    if (idElem && idKey) {
        this.on('typeahead:selected', function(ev, suggestion) {
            $(idElem).val(suggestion[idKey]);
        });
    }
}
