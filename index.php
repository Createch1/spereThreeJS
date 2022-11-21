<?php
include 'inc/init.inc.php';
include 'inc/function.inc.php';
include 'inc/header.inc.php';
include 'inc/nav.index.inc.php';

?> 
  <canvas id="canvas"></canvas>
  <div class="maintitle">
  <h1>Créer, c'est
    <span
        class="txt-rotate"
        data-period="2000"
        data-rotate='[ "un pouvoir", "à la portée de tous", "coder", "", "CREATECH !" ]'></span>
  </h1>
  <h2>Create is CREATECH</h2> 
</div>
<script>
  var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECTION CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);
};
</script>
<!-- bouton menu sur mobile -->
<script>
    $(document).ready(function () { 
  $(document).click(function () {
     // if($(".navbar-collapse").hasClass("in")){
        $('.navbar-collapse').collapse('hide');
     // }
  });
});
</script>
<!-- fin bouton menu sur mobile -->

<!-- script sphere JS --> 
<div id="move">
    <script>
var canvas = document.getElementById("canvas");

window.onresize = resizeCanvas;
resizeCanvas();

var scene = new Scene(canvas);

render();

function render() {
    requestAnimationFrame(render);
    scene.update();
}

function resizeCanvas() {
    var canvas = document.getElementById("canvas");
    canvas.style.width = window.innerWidth + "px";
    canvas.style.height = window.innerHeight + "px";

    if(scene)
        scene.onWindowResize();
}

function Scene(canvas) {  
    canvas.width = document.body.clientWidth;
    canvas.height = document.body.clientHeight;

    // used to move the light
    var time = 0;

    var width = canvas.width;
    var height = canvas.height;
  
    var scene = new THREE.Scene();
    scene.background = new THREE.Color("#202020");

    var light = buildLights(scene);
    var camera = buildCamera(width, height);
    var renderer = buildRender(width, height);
    var mesh = addObjects(scene);

    function buildLights(scene) {      
        var light = new THREE.SpotLight("#fff", 0.8);
        light.position.y = 100;

        light.angle = 1.05;

        light.decacy = 2;
        light.penumbra = 1;

        light.shadow.camera.near = 10;
        light.shadow.camera.far = 1000;
        light.shadow.camera.fov = 30;

        scene.add(light);

        return light;
    }

    function buildCamera(width, height) {
        var aspectRatio = width / height;
        var fieldOfView = 60;
        var nearPlane = 10;
        var farPlane = 500; 
        var camera = new THREE.PerspectiveCamera(fieldOfView, aspectRatio, nearPlane, farPlane);

        camera.position.z = 100;

        return camera;
    }

    function buildRender(width, height) {
        var renderer = new THREE.WebGLRenderer({ canvas: canvas, antialias: true, alpha: true }); 
        var DPR = (window.devicePixelRatio) ? window.devicePixelRatio : 1;
        renderer.setPixelRatio(DPR);
        renderer.setSize(width, height);

        renderer.gammaInput = true;
        renderer.gammaOutput = true; 

        return renderer;
    }
  
    function addObjects(scene) {
        var geometry = new THREE.SphereGeometry(30, 64, 64);        
        var material = new THREE.MeshStandardMaterial({ color: "#000", roughness: 1 });
        
        // these images are loaded as data uri. Just copy and paste the string contained in "image.src" in your browser's url bar to see the image.
        // environment map used to fake the reflex 
        var image = document.createElement('img');
        var envMap = new THREE.Texture(image);
        image.onload = function()  {
            envMap.needsUpdate = true;
        };
        image.src = 'textures/sprites/createch_info.png';
        envMap.mapping = THREE.SphericalReflectionMapping;
        material.envMap = envMap;

        // roughnessMap
        var image = document.createElement('img');
        var roughnessMap = new THREE.Texture(image);
        image.onload = function()  {
            roughnessMap.needsUpdate = true;
        };
        image.src = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NTc3MiwgMjAxNC8wMS8xMy0xOTo0NDowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjYzNjk1NjkxQjY0MjExRTY4QTg3RDcxOTNDQkE1RkRGIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjYzNjk1NjkyQjY0MjExRTY4QTg3RDcxOTNDQkE1RkRGIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NjM2OTU2OEZCNjQyMTFFNjhBODdENzE5M0NCQTVGREYiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NjM2OTU2OTBCNjQyMTFFNjhBODdENzE5M0NCQTVGREYiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5WU2ohAAAAH0lEQVR42mJgoDVg/P//P0kamBgGHRj1w0jxA0CAAQBKrgwBw+YutwAAAABJRU5ErkJggg==';

        roughnessMap.magFilter = THREE.NearestFilter;
        material.roughnessMap = roughnessMap;
    
        var mesh = new THREE.Mesh(geometry, material);
        scene.add(mesh);
        return mesh;

        
    }
  
    this.update = function() {
        time++;

        // move the light
        light.position.x = Math.sin(time*0.01)*200;

        mesh.rotation.x += 0.001;
        mesh.rotation.y += 0.001;
        mesh.rotation.z += 0.001;

        renderer.clear();
        renderer.render(scene, camera);
    };

    this.onWindowResize = function() {
        var canvas = document.getElementById("canvas");
        var width = document.body.clientWidth;
        var height = document.body.clientHeight;
        canvas.width = width;
        canvas.height = height;

        camera = buildCamera(width, height);
        
        renderer.setSize(width, height);
    }

    function onWindowResize() {
			camera.aspect = window.innerWidth / window.innerHeight;
			camera.updateProjectionMatrix();

			renderer.setSize(window.innerWidth, window.innerHeight);
		}


    function animate() {
			requestAnimationFrame(animate);
			group.rotation.y += 0.003;
			render();
		}

        function render() {

const timer = Date.now() * 0.00025;

particleLight.position.x = Math.sin( timer * 7 ) * 300;
particleLight.position.y = Math.cos( timer * 5 ) * 400;
particleLight.position.z = Math.cos( timer * 3 ) * 300;

for ( let i = 0; i < group.children.length; i ++ ) {

    const child = group.children[ i ];
    child.rotation.y += 0.005;

}

renderer.render( scene, camera );
}
}


    </script>
    </div>
    <!-- </div> -->
    <!-- fin script sphere JS --> 
<?php
include 'inc/footer.inc.php'
?>