<fieldset>
  <legend>General Information</legend>
  <label for="title">Title</label>
  <input type="text" name="property[title]" value="<?php echo sanitizeHTML($property->title); ?>" id="title">

  <label for="price">Price</label>
  <input type="number" name="property[price]" value="<?php echo sanitizeHTML($property->price); ?>" id="price">

  <label for="image">Image</label>
  <input type="file" name="property[image]" id="image" accept="image/*">

  <?php if($property->image) { ?>
    <img class="image-small" src="/images/<?= $property->image; ?>" alt="Property image">
  <?php } ?>

  <label for="price">Description</label>
  <textarea name="property[description]" id="description" style="resize: none;min-height: 20px; min-width: 100%; form-sizing: content;">
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