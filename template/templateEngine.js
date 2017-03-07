var file = location.pathname.split( "/" ).pop();
console.log(file);

var link = document.createElement( "link" );
link.href = file.substr( 0, file.lastIndexOf( "." ) ) + ".css";
link.type = "text/css";
link.rel = "stylesheet";
link.media = "screen,print";

document.getElementsByTagName( "head" )[0].appendChild( link );
