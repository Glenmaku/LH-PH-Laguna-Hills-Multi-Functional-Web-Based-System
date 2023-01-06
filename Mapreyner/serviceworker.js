//service worker

const cacheName = 'maptrack';

const appShellFiles = [
  './src/car.svg',
  'data.js',
  './src/favicon.ico',
  './src/favicon.png',
  './src/favicon256.png',
  'index.js',
  'process.html',
  './src/plane.svg',
  './src/style.css',
  './src/walk.svg',
  './manifest.json',
  'map.php'
];


const contentToCache = appShellFiles;

// Installing Service Worker
self.addEventListener('install', (e) => {
  console.log('[Service Worker] Install');
  e.waitUntil((async () => {
    const cache = await caches.open(cacheName);
    console.log('[Service Worker] Caching all: app shell and content');
    await cache.addAll(contentToCache);
  })());
});

  self.addEventListener('fetch', function(event) {
   event.respondWith(async function() {
      try{
        var res = await fetch(event.request);
        var cache = await caches.open('cache');
        cache.put(event.request.url, res.clone());
        return res;
      }
      catch(error){
        return caches.match(event.request);
       }
     }());
 });