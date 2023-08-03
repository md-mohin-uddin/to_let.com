<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<!--------Eita Must be HTML Template hothe hobe,(Table Format)//Bootstap kaj korbe na------->

<body>

    <table>
        <caption><h2>Your Property Details</h2></caption>

        <tr>
            <th>Name : </th>
            <th><?php echo e($data['name']); ?></th>
        </tr>
        <tr>
            <th>Email : </th>
            <th><?php echo e($data['email']); ?></th>
        </tr>
        <tr>
            <th>Phone : </th>
            <th><?php echo e($data['phone']); ?></th>
        </tr>
        <tr>
            <th>Address : </th>
            <th><?php echo e($data['address']); ?></th>
        </tr>

         <tr>
            <th>Subcity/Thana : </th>
            <th><?php echo e($data['subcity']); ?></th>
        </tr>
      <tr>
          <th>Property Code :</th>
          <th><?php echo e($data['property_code']); ?></th>
      </tr>
        <tr>
            <th>Bedroom : </th>
            <th><?php echo e($data['bedroom']); ?></th>
        </tr>
        <tr>
            <th>Bathroom : </th>
            <th><?php echo e($data['bathroom']); ?></th>
        </tr>
        <tr>
            <th>Kitchen : </th>
            <th><?php echo e($data['kitchen']); ?></th>
        </tr>
        <tr>
            <th>Parking : </th>
            <th><?php echo e($data['parking']); ?></th>
        </tr>
        <tr>
            <th>Type :</th>
            <th><?php echo e($data['type']); ?></th>
        </tr>
        <tr>
          <th>Area :</th>
          <th><?php echo e($data['area']); ?></th>
      </tr>
      <tr>
          <th>Categoty :</th>
          <th><?php echo e($data['category']); ?></th>
      </tr>
      <tr>
          <th>Purpose :</th>
          <th><?php echo e($data['purpose']); ?></th>
      </tr>
      <tr>
          <th>Floor Level :</th>
          <th><?php echo e($data['floor']); ?></th>
      </tr>
      <tr>
          <th>Price :</th>
          <th><?php echo e($data['price']); ?></th>
      </tr>
      <tr>
        <th>Video :</th>
        <th><?php echo e($data['video']); ?></th>
    </tr>
    <tr>
        <th>Month :</th>
        <th><?php echo e($data['month']); ?></th>
    </tr>
    <tr>
        <th>Date :</th>
        <th><?php echo e($data['date']); ?></th>
    </tr>
    <tr>
        <th>Year :</th>
        <th><?php echo e($data['year']); ?></th>
    </tr>

    </table>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\ToLet\resources\views/mail/invoice.blade.php ENDPATH**/ ?>