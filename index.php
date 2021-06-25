<?php
$arr1 = [
    [
        'id' => 1,
        'fullName' => 'Ma Van Nam',
        'age' => 18
    ],
    [
        'id' => 2,
        'fullName' => 'Pham Thi Hoa',
        'age' => 120
    ]
];

echo '<pre>';
print_r($arr1[0]);
echo '</pre>';

// cách lấy giá trị của phần tử thông qua key của mảng đa chiều
echo $arr1[0]['age'];
$arr1[] = ['id' => 3, 'fullName' => 'Phan chau tring', 'age' => 22];
echo '<pre>';
print_r($arr1);
echo '</pre>';
