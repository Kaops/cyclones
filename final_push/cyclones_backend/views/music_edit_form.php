<section class="music_edit_wrapper">

<form method="post" action="<?php echo $form_action; ?>" class="music_edit_form" novalidate>
  	<input type="hidden" name="id" value="<?php echo $album["id"]; ?>">

  	<p>
      <label for="title">Title</label>

      <input type="text" name="title" id="title" placeholder="Title" class="main_input" value="<?php echo $album["title"]; ?>"> 
    </p>

  	<p>
      <label for="album_info">Album Info</label>

      <textarea name="album_info" id="album_info" placeholder="Album Info" class="main_input main_textarea"><?php echo $album["album_info"]; ?></textarea> 
    </p>

  	<p>
     <button type="submit" class="main_btn" >Update</button> 
    </p>
</form>
</section>