Hasil Pencarian
<?php $v165983010992838797171iterated = false; ?><?php $v165983010992838797171iterator = $search; $v165983010992838797171incr = 0; $v165983010992838797171loop = new stdClass(); $v165983010992838797171loop->self = &$v165983010992838797171loop; $v165983010992838797171loop->length = count($v165983010992838797171iterator); $v165983010992838797171loop->index = 1; $v165983010992838797171loop->index0 = 1; $v165983010992838797171loop->revindex = $v165983010992838797171loop->length; $v165983010992838797171loop->revindex0 = $v165983010992838797171loop->length - 1; ?><?php foreach ($v165983010992838797171iterator as $v) { ?><?php $v165983010992838797171loop->first = ($v165983010992838797171incr == 0); $v165983010992838797171loop->index = $v165983010992838797171incr + 1; $v165983010992838797171loop->index0 = $v165983010992838797171incr; $v165983010992838797171loop->revindex = $v165983010992838797171loop->length - $v165983010992838797171incr; $v165983010992838797171loop->revindex0 = $v165983010992838797171loop->length - ($v165983010992838797171incr + 1); $v165983010992838797171loop->last = ($v165983010992838797171incr == ($v165983010992838797171loop->length - 1)); ?><?php $v165983010992838797171iterated = true; ?>
<?php if ($v165983010992838797171loop->first) { ?>
<table class="table table-hover">
    <thead>
      <tr>
        <th>Username</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Edit</th>
        <th>Del</th>
      </tr>
    </thead>
    <?php } ?>
    <tbody>
      <tr>
        <td><?= $v->username ?></td>
        <td><?= $v->nama ?></td>
        <td><?= $v->email ?></td>
        <td><a href="user/edit/<?= $v->id ?>">edit</a> </td>
        <td><a href="user/del/<?= $v->id ?>">del</a></td>
      </tr>
   <?php if ($v165983010992838797171loop->last) { ?>
    </tbody>
  </table>
  <?php } ?>
<?php $v165983010992838797171incr++; } if (!$v165983010992838797171iterated) { ?>
    No data
<?php } ?>
