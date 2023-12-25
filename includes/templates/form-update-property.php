<fieldset>
  <legend>General Information</legend>
  <label for="title">Title</label>
  <input type="text" name="title" value="<?php echo sanitizeHTML($property->title); ?>" id="title">

  <label for="price">Price</label>
  <input type="number" name="price" value="<?php echo sanitizeHTML($property->price); ?>" id="price">

  <label for="image">Image</label>
  <input type="file" name="image" id="image" accept="image/*">

  <img src="/images/<?php echo $imagePath; ?>" alt="property image" class="image-small">

  <label for="price">Description</label>
  <textarea name="description" id="description">
    <?php echo sanitizeHTML($property->description); ?>
  </textarea>
</fieldset>
<fieldset>
  <legend>Property Information</legend>
  <label for="rooms">Rooms</label>
  <input type="number" name="rooms" min="1" value="<?php echo sanitizeHTML($property->rooms); ?>" id="rooms">

  <label for="bathrooms">Bathrooms</label>
  <input type="number" name="bathrooms" min="1" value="<?php echo sanitizeHTML($property->bathrooms); ?>" id="bathrooms">

  <label for="parking">Parking</label>
  <input type="number" name="parking" min="1" value="<?php echo sanitizeHTML($property->parking); ?>" id="parking">
</fieldset>

<fieldset>
  <legend>Seller</legend>
</fieldset>