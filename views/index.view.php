<?php require('partials/head.php');?>

<table border="3" width= 400px; height =200px>

<tbody>
<?php foreach ($groceries as $grocery) : ?>
    <tr>
      <td><?=  $grocery->Name?></td>
      <td><?=  $grocery->Price?></td>
      <td><?=  $grocery->Amount?></td>
    </tr>
<?php endforeach; ?>
</tbody>
</table>
<?php require('partials/footer.php'); ?>