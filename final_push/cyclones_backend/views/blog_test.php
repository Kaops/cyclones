

  <ul class="blog_entrylist">
    <?php foreach($all_entries as $entry): ?>
      
      <li data-id="<?php echo $entry["id"]; ?>" >  

        <a class="" href="index.php?site=blog&amp;action=edit&amp;id=<?php echo $entry['id']; ?>"><?php echo $entry["headline"]; ?></a>

      </li>
       
      
    <?php endforeach; ?>

  </ul>
</table>

