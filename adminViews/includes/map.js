var ourRequest = new XMLHttpRequest();
ourRequest.open('GET', 'map.json')
ourRequest.onload = function(){
    console.log(ourRequest.responseText);
};
ourRequest.send();

