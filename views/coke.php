<?php include 'header.php'; ?>

<h1><?php echo $product['name'] ?></h1>

<div class="row">
    <div class="col-md-8">
        <div class="x3d-container" onclick="startAnimation()">
            <x3d id="x3dScene" class="img-fluid">
                <Scene>
                    <Transform DEF="global_obj">
                    </Transform>
                    <TimeSensor DEF="RotationTimer" cycleInterval="5" loop="true" id="RotationTimer" enabled="false"></TimeSensor>
                    <OrientationInterpolator DEF="RotationInterpolator" key="0 0.5 1" keyValue="0 1 0 0, 0 1 0 3.14159, 0 1 0 6.28318" id="RotationInterpolator"></OrientationInterpolator>
                    <route fromnode="RotationTimer" fromfield="fraction_changed" tonode="RotationInterpolator" tofield="set_fraction"></route>
                    <route fromnode="RotationInterpolator" fromfield="value_changed" tonode="global_obj" tofield="rotation"></route>
                </Scene>
            </x3d>
        </div>
    </div>
    <div class="col-md-4">
        <h2>Product Details</h2>
        <p id="description">Loading...</p>
        <h3 id="price">Please wait</h3>
        <button class="btn btn-primary" id="toggleWireframe">Toggle Wireframe</button>
        <button class="btn btn-primary" id="startAnimation">Start Animation</button>
    </div>
</div>

<script>
    fetch('/product.json.php?id=<?php echo $product['id'] ?>')
        .then(response => response.json())
        .then(data => {
            const x3dScene = document.querySelector('#x3dScene');
            const transform = x3dScene.querySelector('Transform')
            transform.setAttribute('scale', data.scale + ' ' + data.scale + ' ' + data.scale);
            transform.innerHTML = data.model;
            document.getElementById('description').innerText = data.description;
            document.getElementById('price').innerText = 'Price: $' + data.price.toFixed(2);
        });

    document.getElementById("toggleWireframe").addEventListener("click", function() {
        toggleWireframeMode();
    });

    document.getElementById("startAnimation").addEventListener("click", function() {
        startAnimation();
    });

    function toggleWireframeMode() {
        const runtime = document.querySelector('#x3dScene').runtime;
        runtime.togglePoints(true);
    }


    function startAnimation() {
        var timer = document.getElementById('RotationTimer');
        
        timer.setAttribute('enabled', true);
    }
</script>



<?php include 'footer.php'; ?>