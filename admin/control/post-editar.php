<?php require 'header.php';
extract($_GET);
$sql = mysql_query("SELECT * FROM tb_artigos WHERE id = $id");
while ($cc = mysql_fetch_array($sql)) {
  $artigo = $cc;
}
?>
<script type="text/javascript" src="tinymce.min.js"></script>

<form method="POST" action="post-editar-confirma.php" enctype="multipart/form-data">
<h5>Editar artigo</h5>
<br>
  <div class="input-field col s12">
      <input id="first_name2" name="titulo" required type="text" value="<?=$artigo['titulo'];?>" class="validate">
      <label class="active" for="first_name2">Nome do artigo</label>
  </div>

  <div class="row"></div>


  <div class="file-field input-field">
      <div class="btn">
        <span>File</span>
        <input type="file" value="<?=$artigo['banner'];?>" name="userfile">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" name="userfile" value="<?=$artigo['banner'];?>" type="text">
      </div>
  </div>

  <div class="input-field col s12">
      <input id="first_name2" name="id" readonly type="text" value="<?=$artigo['id'];?>" class="validate">
      <label class="active" for="first_name2">Código do artigo</label>
  </div>
  <div class="row"></div>
 
  <textarea name="conteudo" required><?=$artigo['conteudo'];?></textarea>
  <br>

  <button class="btn waves-effect waves-light" type="submit">Criar
    <i class="material-icons right">send</i>
  </button>
  <button class="btn waves-effect waves-light  blue-grey lighten-3" type="reset">Limpar
    <i class="material-icons right">cached</i>
  </button>

</form>

<script>

tinymce.init({
  selector: 'textarea',
  height: 500,
  theme: 'modern',
  // Plugins
  plugins: 'print preview fullpage powerpaste searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor  insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern image code',
  // Toolbar
  toolbar1: 'undo redo | formatselect | bold italic strikethrough forecolor backcolor | insert link image | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat | code',
  image_advtab: true,

    image_title: true, 
  // enable automatic uploads of images represented by blob or data URIs
  automatic_uploads: true,
  // URL of our upload handler (for more details check: https://www.tinymce.com/docs/configure/file-image-upload/#images_upload_url)
  // images_upload_url: 'postAcceptor.php',
  // here we add custom filepicker only to Image dialog
  file_picker_types: 'image', 
  // and here's our custom image picker
  file_picker_callback: function(cb, value, meta) {
    var input = document.createElement('input');
    input.setAttribute('type', 'file');
    input.setAttribute('accept', 'image/*');
    
    // Note: In modern browsers input[type="file"] is functional without 
    // even adding it to the DOM, but that might not be the case in some older
    // or quirky browsers like IE, so you might want to add it to the DOM
    // just in case, and visually hide it. And do not forget do remove it
    // once you do not need it anymore.

    input.onchange = function() {
      var file = this.files[0];
      
      var reader = new FileReader();
      reader.onload = function () {
        // Note: Now we need to register the blob in TinyMCEs image blob
        // registry. In the next release this part hopefully won't be
        // necessary, as we are looking to handle it internally.
        var id = 'blobid' + (new Date()).getTime();
        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
        var base64 = reader.result.split(',')[1];
        var blobInfo = blobCache.create(id, file, base64);
        blobCache.add(blobInfo);

        // call the callback and populate the Title field with the file name
        cb(blobInfo.blobUri(), { title: file.name });
      };
      reader.readAsDataURL(file);
    };
    
    input.click();
  }
  
 });
</script>

<?php require 'footer.php';?>