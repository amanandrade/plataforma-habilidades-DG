<footer class="container mt-3 bg-white border-top">
        <div class="row justify-content-center align-itens-center pt-4">
            <a href="mailto:email@contato.com.br">Fale Conosco</a>
        </div>
        <div class="row justify-content-center align-itens-center pb-4">
        <p class="m-0">© Copyright Help! 2019</p>
        </div>
        </footer>

        <script src="{{ asset('js/jquery.min.js.transferir')}}"></script>
        <script src="{{ asset('js/jquery-ui.min.js.transferir')}}"></script>
        <script src="{{ asset('js/bootstrap.min.js.transferir')}}"></script>

<script id="rendered-js">
    $(".imgAdd").click(function () {
        $(this).closest(".row").find('.imgAdd').before('<div class="col-sm-2 imgUp"><div class="imagePreview"></div><label class="btn btn-primary">Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width:0px;height:0px;overflow:hidden;"></label><i class="fa fa-times del"></i></div>');
    });
    $(document).on("click", "i.del", function () {
        $(this).parent().remove();
    });
    $(function () {
        $(document).on("change", ".uploadFile", function () {
            var uploadFile = $(this);
            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

            if (/^image/.test(files[0].type)) {// only image file
                var reader = new FileReader(); // instance of the FileReader
                reader.readAsDataURL(files[0]); // read the local file

                reader.onloadend = function () {// set image data as background of div
                    //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
                    uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url(" + this.result + ")");
                };
            }

        });
    });
        //# sourceURL=pen.js
</script>

   

    <!-- bootstrap script -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"></script>
</body>

</html>