<style>
    .container-register {
        text-align: center;
        display: flex;
        flex-direction: column;
        padding: 20;
        align-items: center;
        justify-content: center;
    }

    .input {
        width: 250px;
        font-size: 17px;
        padding: 10px;
        text-align: center;
        border: 0;
        border-bottom: 1px solid #ddd;
        background: transparent;
        outline: none;
        margin-top: 50px;
    }

    .buttonSimpan {
        padding: 10px;
        background: #D78521;
        font-size: 17px;
        color: #fff;
        width: 40%;
        cursor: pointer;
        border: 1px solid #D78521;
        margin-top: 20px;
        outline: none;
    }
</style>

<form action="" method="POST" enctype="multipart/form-data">
    <div class="container-register">
            <input type='file' id="imgInp" name="image" required />
            <img id="blah" src="#" style='max-width: 90%; margin-top: 40px; max-height: 400px; display: none;' />

            <input type="text" class="input" placeholder="Nama" name="name" required />
            <button class="buttonSimpan" type="submit" name="simpan">
                Simpan
            </button>
    </div>
</form>

<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
            $('#blah').css('display', "block");
            $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function() {
        readURL(this);
    });
</script>

<?php
if (isset($_POST['simpan'])) {
    include "koneksi.php";

    $name = $_POST['name'];
    $temp = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $folder = "images/";
    move_uploaded_file($temp, $folder . $image_name);
    $query = $con->prepare("insert into user (name, image)
            values (:name, :image)");

    $dataSiswa = array(
        ':name' => $name,
        ':image' => $image_name,
    );
    $query->execute($dataSiswa);

    echo "<script>alert('Data Registered.');</script>";
}
?>
