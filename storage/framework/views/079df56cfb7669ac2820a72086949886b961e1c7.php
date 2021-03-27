<head>
    <title>Database Search</title>
    <style>
        table {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            font-size: 14px;
            width: 100%;
            border: 1px solid #000000;
        }
        table td {
            border: 1px solid #000000;
        }
        table th {
            border: 1px solid #000000;
        }
    </style>
</head>
<body>
<h1>Search the database</h1>
<form action='/Database/search'method="get">
    Enter Pateint ID Number : 
    <input type="text" name="data_search">
    <input type="submit" value="SEARCH">
</form>

<table>
    <tr>
        <th>Date of Test</th>
        <th>ID Number</th>
        <th>Patient Name</th>
        <th>Phone Number</th>
        <th>Gender</th>
        <th>Date of Birth</th>
        <th>Lab Number</th>
        <th>Clinic Code</th>
        <th>Code</th>
        <th>Name</th>
        <th>Value</th>
        <th>Unit</th>
        <th>Ref Range</th>
        <th>Finding</th>
        <th>Result State</th>
    </tr>
    <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($data->date_of_test); ?></td>
        <td><?php echo e($data->id_number); ?></td>
        <td><?php echo e($data->patient_name); ?></td>
        <td><?php echo e($data->phone_number); ?></td>
        <td><?php echo e($data->gender); ?></td>
        <td><?php echo e($data->date_of_birth); ?></td>
        <td><?php echo e($data->lab_number); ?></td>
        <td><?php echo e($data->clinic_code); ?></td>
        <td><?php echo e($data->code); ?></td>
        <td><?php echo e($data->name); ?></td>
        <td><?php echo e($data->value); ?></td>
        <td><?php echo e($data->unit); ?></td>
        <td><?php echo e($data->ref_range); ?></td>
        <td><?php echo e($data->finding); ?></td>
        <td><?php echo e($data->result_state); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</body>
<footer>

</footer><?php /**PATH C:\Users\Asus.LAPTOP-7UF228SS\Desktop\Belajar Laravel\project-okanemo\resources\views/database_search.blade.php ENDPATH**/ ?>