<?php

return [
    'attributes' => [
        'attribute_set_id' => 'Bộ thuộc tính',
        'name' => 'Tên',
        'categories' => 'Thể loại',
        'slug' => 'URL',
        'is_filterable' => 'Có thể lọc',
    ],
    'attribute_sets' => [
        'name' => 'Tên',
    ],
    'product_attributes' => [
        'attributes.*.attribute_id' => 'Thuộc tính',
        'attributes.*.values' => 'Giá trị',
    ],
];
