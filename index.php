<h1>Homepage</h1>

<div class="div">
    <h2>API</h2>
    Nama : <p id="nama"></p>
    Email: <p id="email"></p>
</div>

<!-- Fetch API -->
<script>
fetch('api.php')
.then(response => response.json())
.then(data => {
    console.log(data);

    document.getElementById('nama').innerHTML = data[0].name;
    document.getElementById('email').innerHTML = data[0].email;
})
</script>