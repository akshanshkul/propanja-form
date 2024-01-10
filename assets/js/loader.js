// Create loader element
var loaderContainer = document.createElement('div');
loaderContainer.className = 'loader-container';

var loader = document.createElement('div');
loader.className = 'loader';

loaderContainer.appendChild(loader);

// Append loader to the body
document.body.appendChild(loaderContainer);