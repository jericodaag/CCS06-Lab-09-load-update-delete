<?php

require "config.php";

use App\Pet;

$Pets = Pet::list();
?>

<h1>Pets</h1>
<table border="1" cellpadding="5">
<?php foreach ($Pets as $Pet): ?>
<tr>
<td><?php echo $Pet->getId(); ?></td>
<td><?php echo $Pet->getName(); ?></td>
<td><?php echo $Pet->getGender(); ?></td>
<td><?php echo $Pet->getBirthdate(); ?></td>
<td><?php echo $Pet->getOwner(); ?></td>
<td><?php echo $Pet->getEmail(); ?></td>
<td><?php echo $Pet->getAddress(); ?></td>
<td><?php echo $Pet->getNumber(); ?></td>
<td>
	<a href="edit-pet.php?id=<?php echo $Pet->getId(); ?>">EDIT</a>
</td>
<td>
	
	<a href="delete-pet.php?id=<?php echo $Pet->getId(); ?>" class="confirmation">DELETE</a>
</td>
</tr>
<?php endforeach ?>

</tr>
</table>
<a href="truncate-table.php?id=<?php echo $Pet->getId(); ?>" class="confirmation">TRUNCATE</a>

<script type="text/javascript">
    var elems = document.getElementsByClassName('confirmation');
    var confirmIt = function (e) {
        if (!confirm('Are you sure?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>