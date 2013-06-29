// main.js
var clip = new ZeroClipboard( document.getElementById("copy"), {
    moviePath: "/ZeroClipboard/ZeroClipboard.swf"
} );

clip.on( 'load', function(client) {
    // alert( "movie is loaded" );
} );

clip.on( 'complete', function(client, args) {
    document.getElementById("copy-form").style.display = 'none';
} );

clip.on( 'mouseover', function(client) {
    // alert("mouse over");
} );

clip.on( 'mouseout', function(client) {
    // alert("mouse out");
} );

clip.on( 'mousedown', function(client) {

    // alert("mouse down");
} );

clip.on( 'mouseup', function(client) {
    // alert("mouse up");
} );
