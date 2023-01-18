var xhr = new XMLHttpRequest();
xhr.open('GET', 'adminViews/includes/map.json', true);
xhr.responseType = 'json';
xhr.onload = function() {
  if (xhr.status === 200) {
    var jsonData = xhr.response;
    console.log(data);
  }
};
xhr.send();
