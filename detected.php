<script defer src="js/face-api.min.js"></script>
<script defer src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<style>
    .container-detected {
        text-align: center;
        display: flex;
        flex-direction: column;
        padding: 20px;
        align-items: center;
        justify-content: center;
    }

    .container-image {
        position: relative;
        /* width: image.width,
        height: image.height, */
        margin: 0px auto;
        max-width: 500px;
        max-height: 500px;
        overflow: auto;
    }
    .data-container {
       position: relative;
        /* width: image.width,
        height: image.height, */
        margin: 5px auto;
        max-width: 500px;
        max-height: 500px;
        overflow: auto;
        width: 100%;
    }
</style>

<div class="container-detected">
    <input type="file" id="imageUpload" />
    <br />

    <div class="container-image" id="container-image">

    </div>
    <div class="data-container" id="container-data">

    </div>
    <div id="loading">

    </div>
</div>
