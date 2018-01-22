<html>
<head>
  <title>Demo ShoppingCart </title>
</head>
<body>
  <h4>Cart Information</h4>
  <?php echo anchor('fontEnd/home','<< Continue Shopping'); ?>
  <br><br>
  <?php echo form_open('fontEnd/ShoppingCart/update'); ?>
  <table cellpadding="6" cellspacing="1" border="1">

    <tr>
      <th>Option</th>
      <th>QTY</th>
      <th>Item Description</th>
      <th style="text-align:right">Item Price</th>
      <th style="text-align:right">Sub-Total</th>
      <th
    </tr>

    <?php $i = 1; ?>

    <?php foreach ($this->cart->contents() as $items): ?>

      <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

      <tr>
        <td align="center"><?php echo anchor('fontEnd/ShoppingCart/delete/'.$items['rowid'], 'X'); ?></td>
        <td><?php echo form_input(array('name' => 'qty'.$i, 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
        <td>
          <?php echo $items['name']; ?>

          <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

            <p>
              <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

                <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

              <?php endforeach; ?>
            </p>

          <?php endif; ?>

        </td>
        <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
        <td style="text-align:right">$<?php echo $this->cart->format_number($items['subtotal']); ?></td>
      </tr>

      <?php $i++; ?>

    <?php endforeach; ?>

    <tr>
      <td colspan="3"> </td>
      <td class="right"><strong>Total</strong></td>
      <td class="right">$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
    </tr>

  </table>

  <p> <?php echo form_submit('', 'Update your Cart'); ?></p>
  <?php form_close(); ?>
</body>
</html>
