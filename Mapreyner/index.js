var svgDoc, sMap, iframe = document.getElementById("svgMap");
navigator.serviceWorker.register("./serviceworker.js");
var zoom = 1
  , colorWent = "#7BB4E3"
  , colorDrove = "#ffd485"
  , colorFlew = "#df9ffc"
  , colorBlank = "#eeeeee";
function scrollMap(a) {
    try {
        console.log(sMap.scrollLeft)
    } catch {}
}
iframe.onload = function() {
    svgDoc = iframe.contentDocument;
    var a = document.createElement("link");
    a.type = "text/css",
    a.rel = "stylesheet",
    a.href = "style.css",
    svgDoc.body.appendChild(a),
    (sMap = svgDoc.body.firstElementChild).setAttribute("height", window.innerHeight.toString() + "px"),
    sMap.setAttribute("width", (window.innerHeight * (825 / 387)).toString() + "px"),
    createMenu(),
    readSaveData(),
    document.addEventListener("keydown", keyDown),
    document.addEventListener("keyup", keyUp),
    svgDoc.addEventListener("keydown", keyDown),
    svgDoc.addEventListener("keyup", keyUp),
    document.addEventListener("wheel", wheelEvent, {
        passive: !1
    }),
    svgDoc.addEventListener("wheel", wheelEvent, {
        passive: !1
    }),
    document.addEventListener("mousemove", mouseMove),
    svgDoc.addEventListener("mousemove", mouseMove);
    let c = sMap.getElementsByTagName("svg")[0];
    for (let b = 0; b < c && c.children[0].children.length; b++)
        c.children[0].children[b].addEventListener("click", showName);
    svgDoc.onpointerdown = pointerdown_handler,
    svgDoc.onpointermove = pointermove_handler,
    svgDoc.onpointerup = pointerup_handler,
    svgDoc.onpointercancel = pointerup_handler,
    svgDoc.onpointerout = pointerup_handler,
    svgDoc.onpointerleave = pointerup_handler,
    toggleMenu(),
    centerMap(),
    borderColors(),
    document.getElementById("nameOverlay").style.opacity = "0",
    document.getElementById("nameOverlay").style.display = "none"
}
;
var cntrl = !1;
function keyDown(a) {
    cntrl && 187 == a.keyCode && a.preventDefault(),
    cntrl && 189 == a.keyCode && a.preventDefault(),
    17 == a.keyCode && (cntrl = !0,
    document.body.style.cursor = svgDoc.body.style.cursor = "zoom-in"),
    cntrl && 82 == a.keyCode && location.reload(),
    187 == a.keyCode && 17 == a.keyCode && a.preventDefault(),
    189 == a.keyCode && 17 == a.keyCode && a.preventDefault(),
    cntrl && 187 == a.keyCode ? zoomIn() : cntrl && 189 == a.keyCode && zoomOut()
}
function keyUp(a) {
    17 == a.keyCode && (cntrl = !1,
    document.body.style.cursor = svgDoc.body.style.cursor = "default")
}
function wheelEvent(a) {
    cntrl && (a.preventDefault(),
    event.deltaY < 0 ? zoomIn() : event.deltaY > 0 && zoomOut())
}
var zoomRate = 1.1
  , idealZoom = zoom
  , zoomPunch = 0
  , zoomCounter = 0
  , maxZoom = 450;
function zoomIn() {
    (zoom *= zoomRate) > maxZoom && (zoom = maxZoom),
    idealZoom *= zoomRate,
    zoomPunch = Math.abs(idealZoom - zoom) / 30,
    zi()
}
function zi() {
    (zoom += zoomPunch) > maxZoom && (zoom = maxZoom),
    setMapZoomLevel(),
    console.log(zoom)
}
function zoomOut() {
    zoom /= zoomRate,
    idealZoom /= zoomRate,
    zoomPunch = Math.abs(idealZoom - zoom) / 30,
    idealZoom <= 1 && (idealZoom = 1),
    zo()
}
function zo() {
    (zoom -= zoomPunch) <= 1 && (zoom = 1),
    setMapZoomLevel()
}
function zoomCountdown() {
    zoomCounter > 0 && zoomCounter--
}
function setMapZoomLevel() {
    let a = (mouseC[0] + svgDoc.body.scrollLeft) / svgDoc.body.scrollWidth
      , b = (mouseC[1] + svgDoc.body.scrollTop) / svgDoc.body.scrollHeight;
    sMap.setAttribute("height", (window.innerHeight * zoom).toString() + "px"),
    sMap.setAttribute("width", (window.innerHeight * (825 / 387) * zoom).toString() + "px"),
    maxScrollX = window.innerHeight * (825 / 387) * zoom - svgDoc.body.clientWidth,
    maxScrollY = window.innerHeight * zoom - svgDoc.body.clientHeight,
    svgDoc.body.scrollTo(svgDoc.body.scrollWidth * a - mouseC[0], svgDoc.body.scrollHeight * b - mouseC[1])
}
window.setInterval(zoomCountdown, 16);
var evCache = []
  , prevDiff = -1;
function pointerdown_handler(a) {
    evCache.push(a)
}
function pointermove_handler(c) {
    zoomRate = 1.08;
    for (let a = 0; a < evCache.length; a++)
        if (c.pointerId === evCache[a].pointerId) {
            evCache[a] = c;
            break
        }
    if (2 === evCache.length) {
        let b = dist(evCache[0].clientX, evCache[0].clientY, evCache[1].clientX, evCache[1].clientY);
        prevDiff > 0 && (b > prevDiff && 0 == zoomCounter && (mouseC = [(evCache[0].clientX + evCache[1].clientX) / 2, (evCache[0].clientY + evCache[1].clientY) / 2],
        zoomCounter = 0,
        zoomIn()),
        b < prevDiff && 0 == zoomCounter && (mouseC = [(evCache[0].clientX + evCache[1].clientX) / 2, (evCache[0].clientY + evCache[1].clientY) / 2],
        zoomCounter = 0,
        zoomOut())),
        prevDiff = b
    }
}
function pointerup_handler(a) {
    remove_event(a),
    evCache.length < 2 && (prevDiff = -1)
}
function remove_event(b) {
    for (let a = 0; a < evCache.length; a++)
        if (evCache[a].pointerId === b.pointerId) {
            evCache.splice(a, 1);
            break
        }
}
function dist(a, b, c, d) {
    return Math.sqrt(Math.pow(c - a, 2) + Math.pow(d - b, 2))
}
var maxScrollX = 0
  , maxScrollY = 0;
function centerMap() {
    maxScrollX = window.innerHeight * (825 / 387) * zoom - svgDoc.body.clientWidth,
    maxScrollY = window.innerHeight * zoom - svgDoc.body.clientHeight,
    svgDoc.body.scrollTo(maxScrollX / 2, maxScrollY / 2)
}
var mouseC = [0, 0];
function mouseMove(a) {
    (mouseC = [a.clientX, a.clientY])[0],
    svgDoc.body.scrollLeft,
    svgDoc.body.scrollWidth
}
var color = ["#E52B50", "#FFBF00", "#9966CC", "#FBCEB1", "#7FFFD4", "#007FFF", "#89CFF0", "#CB4154", "#0000FF", "#0095B6", "#8A2BE2", "#DE5D83", "#CD7F32", "#993300", "#800020", "#702963", "#960018", "#DE3163", "#007BA7", "#7FFF00", "#7B3F00", "#0047AB", "#6F4E37", "#B87333", "#FF7F50", "#DC143C", "#00FFFF", "#EDC9AF", "#7DF9FF", "#50C878", "#00FF3F", "#FFD700", "#008001", "#3FFF00", "#4B0082", "#00A86B", "#29AB87", "#B57EDC", "#FFF700", "#C8A2C8", "#BFFF00", "#FF00FF", "#FF00AF", "#800000", "#E0B0FF", "#000080", "#CC7722", "#808000", "#FF6600", "#FF4500", "#DA70D6", "#FFE5B4", "#D1E231", "#CCCCFF", "#1C39BB", "#FFC0CB", "#8E4585", "#003153", "#CC8899", "#6A0DAD", "#E30B5C", "#FF0000", "#C71585", "#FF007F", "#E0115F", "#FA8072", "#92000A", "#0F52BA", "#FF2400", "#C0C0C0", "#708090", "#A7FC00", "#00FF7F", "#D2B48C", "#483C32", "#008080", "#40E0D0", "#3F00FF", "#7F00FF", "#40826D", "#FFFF00"];
function getRandomColor() {
    return color[Math.floor(Math.random() * color.length)]
}
var mapData = importData();
function setColorOf(c, d, e) {
    let b = svgDoc.getElementById(c).getElementsByTagName("*");
    for (let a = 0; a < b.length; a++)
        b[a].id.substring(2) == d && b[a].setAttribute("fill", e)
}
function setStrokeOf(c, d, e) {
    let b = svgDoc.getElementById(c).getElementsByTagName("*");
    for (let a = 0; a < b.length; a++)
        b[a].id.substring(2) == d && (b[a].setAttribute("stroke-width", .05.toString()),
        b[a].setAttribute("stroke", e))
}
function setColorOfAuth(a, b) {
    svgDoc.getElementById(a).setAttribute("fill", b)
}
function setStrokeOfAuth(b, c) {
    let a = svgDoc.getElementById(b);
    a && a.setAttribute("stroke-width", .025.toString()),
    a && a.setAttribute("stroke", c)
}
function borderColors() {
    for (let a = 0; a < mapData.length; a++)
        setStrokeOfAuth(mapData[a].name, color[(mapData[a].id + 9) % color.length])
}
function showAll() {
    for (let a = 0; a < mapData.length; a++) {
        setStrokeOfAuth(mapData[a].name, getRandomColor());
        let c = mapData[a].p;
        for (let b = 0; b < c.length; b++)
            setColorOf(mapData[a].name, c[b], getRandomColor())
    }
}
function getIndexByAuthName(b) {
    for (let a = 0; a < mapData.length; a++)
        if (mapData[a].name == b)
            return a;
    return -1
}
function createMenu() {
    let j = document.getElementById("menu");
    for (ii = 0; ii < mapData.length; ii++) {
        let f = document.createElement("dt");
        f.innerHTML = mapData[ii].name,
        f.setAttribute("name", mapData[ii].name),
        j.appendChild(f),
        f.addEventListener("click", clickMenuTab),
        f.classList.add("menuTitleText");
        for (let b = 0; b < mapData[ii].p.length; b++) {
            let a = document.createElement("dd");
            a.innerHTML = mapData[ii].p[b],
            a.classList.add("menuText");
            let c = document.createElement("input");
            c.classList.add("menuCheck"),
            c.setAttribute("name", mapData[ii].p[b] + "ch"),
            c.addEventListener("change", checkGo),
            c.value = mapData[ii].name;
            let d = document.createElement("input");
            d.classList.add("menuCheck"),
            d.setAttribute("name", mapData[ii].p[b] + "ch"),
            d.addEventListener("change", checkCar),
            d.value = mapData[ii].name;
            let e = document.createElement("input");
            e.classList.add("menuCheck"),
            e.setAttribute("name", mapData[ii].p[b] + "ch"),
            e.addEventListener("change", checkPlane),
            e.value = mapData[ii].name,
            c.type = d.type = e.type = "checkbox";
            let g = document.createElement("img");
            g.src = "",
            g.classList.add("menuImage");
            let h = document.createElement("img");
            h.src = " ",
            h.classList.add("menuImage");
            let i = document.createElement("img");
            i.src = " ",
            i.classList.add("menuImage"),
            a.style.display = "none",
            a.appendChild(g),
            a.appendChild(c),
            a.appendChild(h),
            a.appendChild(d),
            a.appendChild(i),
            a.appendChild(e),
            a && a.setAttribute("name", mapData[ii].name + "-p"),
            j.appendChild(a)
        }
    }
}
function clickMenuTab(c) {
    let b = document.getElementsByName(c.target.innerHTML + "-p");
    for (let a = 0; a < b.length; a++)
        "none" == b[a].style.display ? b[a].style.display = "block" : b[a].style.display = "none"
}
document.getElementById("menuTab").addEventListener("click", toggleMenu);
var heightString = document.getElementById("menuOverlay").style.height;
function toggleMenu() {
    let a = document.getElementById("subMenu");
    "none" == a.style.display ? (a.style.display = "block",
    document.getElementById("menuOverlay").style.height = heightString) : (a.style.display = "none",
    document.getElementById("menuOverlay").style.height = "auto")
}
function checkGo(a) {
    let b = a.target.name.substring(0, a.target.name.length - 2)
      , c = document.getElementsByName(a.target.name);
    c[0].checked ? (c[1].disabled = c[2].disabled = !0,
    setColorOf(a.target.value, b, colorWent),
    setVisited(a.target.value, b, 1)) : (c[1].disabled = c[2].disabled = !1,
    c[1].checked ? (setColorOf(a.target.value, b, colorDrove),
    setVisited(a.target.value, b, 2)) : c[2].checked ? (setColorOf(a.target.value, b, colorFlew),
    setVisited(a.target.value, b, 3)) : (setColorOf(a.target.value, b, colorBlank),
    setVisited(a.target.value, b, 0))),
    saveData()
}
function checkCar(a) {
    let b = a.target.name.substring(0, a.target.name.length - 2)
      , c = document.getElementsByName(a.target.name);
    c[1].checked ? (c[2].disabled = !0,
    setColorOf(a.target.value, b, colorDrove),
    setVisited(a.target.value, b, 2)) : (c[2].disabled = !1,
    c[2].checked ? (setColorOf(a.target.value, b, colorFlew),
    setVisited(a.target.value, b, 3)) : (setColorOf(a.target.value, b, colorBlank),
    setVisited(a.target.value, b, 0))),
    saveData()
}
function checkPlane(a) {
    let b = a.target.name.substring(0, a.target.name.length - 2);
    a.target.checked ? (setColorOf(a.target.value, b, colorFlew),
    setVisited(a.target.value, b, 3)) : (setColorOf(a.target.value, b, colorBlank),
    setVisited(a.target.value, b, 0)),
    saveData()
}
mobileCheck() && (heightString = "80vh");
var opTimer = 120;
function showName(a) {
    document.getElementById("nameInner").innerHTML = a.target.id.substring(2) + "<br>" + a.currentTarget.id,
    document.getElementById("nameOverlay").style.opacity = "1",
    document.getElementById("nameOverlay").style.display = "block",
    opTimer = 150,
    updateOpacity()
}
function updateOpacity() {
    --opTimer < 100 && (document.getElementById("nameOverlay").style.opacity = (opTimer / 100).toString()),
    opTimer > 0 ? window.setTimeout(updateOpacity, 16) : document.getElementById("nameOverlay").style.display = "none"
}
function setVisited(c, d, e) {
    for (let a = 0; a < mapData.length; a++)
        if (mapData[a].name == c) {
            for (let b = 0; b < mapData[a].p.length; b++)
                if (d == mapData[a].p[b]) {
                    mapData[a].mVals[b] = e;
                    return
                }
        }
}
var sInput = document.getElementById("search");
function searchAsync() {
    window.setTimeout(search, 100)
}
function search() {
    if (sInput.value.length > 0)
        for (let a = 0; a < mapData.length; a++)
            if (-1 == mapData[a].name.toLowerCase().indexOf(sInput.value.toLowerCase())) {
                document.getElementsByName(mapData[a].name)[0].style.display = "none";
                for (let b = 0; b < mapData[a].p.length; b++)
                    if (document.getElementsByName(mapData[a].name + "-p")[b].style.display = "none",
                    -1 != mapData[a].p[b].toLowerCase().indexOf(sInput.value.toLowerCase())) {
                        document.getElementsByName(mapData[a].name)[0].style.display = "block";
                        break
                    }
            } else
                document.getElementsByName(mapData[a].name)[0].style.display = "block";
    else
        for (let c = 0; c < mapData.length; c++)
            document.getElementsByName(mapData[c].name)[0].style.display = "block"
}
function saveData() {
    localStorage.setItem("map", JSON.stringify(mapData))
}
function readSaveData() {
    let e = localStorage.getItem("map");
    if (void 0 == e) {
        for (let d = 0; d < mapData.length; d++) {
            let f = Array(mapData[d].p.length).fill(0);
            mapData[d].mVals = f
        }
        saveData()
    } else {
        mapData = JSON.parse(e);
        for (let a = 0; a < mapData.length; a++)
            for (let b = 0; b < mapData[a].mVals.length; b++)
                if (mapData[a].mVals[b] > 0) {
                    let c = document.getElementsByName(mapData[a].p[b] + "ch");
                    1 == mapData[a].mVals[b] ? (setColorOf(mapData[a].name, mapData[a].p[b], colorWent),
                    c[0].checked = !0,
                    c[1].disabled = c[2].disabled = !0) : 2 == mapData[a].mVals[b] ? (setColorOf(mapData[a].name, mapData[a].p[b], colorDrove),
                    c[1].checked = !0,
                    c[2].disabled = !0) : 3 == mapData[a].mVals[b] && (setColorOf(mapData[a].name, mapData[a].p[b], colorFlew),
                    c[2].checked = !0)
                }
    }
}
sInput.addEventListener("keydown", searchAsync),
sInput.addEventListener("search", search)
