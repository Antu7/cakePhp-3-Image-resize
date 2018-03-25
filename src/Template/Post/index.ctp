<html xmlns="">
<h1>Image Upload Panel</h1>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<form action="/Post/index2" method="post" enctype="multipart/form-data">
    <input type="file" name="image">

    <div id="dynamicInput">

        Image Hight
        <div class="form-block">
            <input type="number" name="image_hight[]" placeholder="Image Hight">

            <br><br>
            Image Weight
            <input type="number" name="image_weight[]" placeholder="Image Weight">
        </div>

        <input type="button" value="Add Another Image Info Field" onClick="addInput('dynamicInput');">


        <script>
            var counter = 1;

            var limit = 10;

            function addInput(divName) {

                if (counter == limit) {

                    alert("You have reached the limit of adding " + counter + " inputs");

                }

                else {

                    var newdiv = document.createElement('div');

                    newdiv.innerHTML = "New Hight & Weight " + (counter + 1) + " <br>" +
                        "<input type='number' placeholder='New Hight' name='image_hight[]'><br><input type='number' placeholder='New Weight' name='image_weight[]'>";

                    document.getElementById(divName).appendChild(newdiv);

                    counter++;
                }
            }
        </script>

        <input type="submit" name="submit">

</form>
</html>