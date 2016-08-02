<section class="entry_edit_wrapper">

<form method="post" action="<?php echo $form_action; ?>" class="entry_edit_form" novalidate>
  	<input type="hidden" name="id" value="<?php echo $blog["id"]; ?>">

  	<p>
      <label for="headline" >Headline</label>

      <input type="text" name="headline" id="headline" placeholder="Headline" class="main_input" value="<?php echo $blog["headline"]; ?>"> 
    </p>

  	<p>
      <label for="content">Content</label>

      <textarea name="content" id="content" placeholder="Content" class="main_input main_textarea"><?php echo $blog["content"]; ?></textarea> 
    </p>

  	<p>
     <button type="submit" class="entry_btn" >Update</button> 
     <a class="delete_entry" href="index.php?site=blog&amp;action=delete&amp;id=<?php echo $blog['id']; ?>">Delete</a>
    </p>
</form>
</section>