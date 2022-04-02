<?php

return [
    'captcha'              => 'Mã captcha không chính xác.',
    'redis'                => 'Không thể kết nối với máy chủ redis.',
    'accepted'             => ':attribute phải được chấp nhận.',
    'active_url'           => ':attribute không phải là một URL hợp lệ.',
    'after'                => ':attribute phải là một ngày sau :date.',
    'after_or_equal'       => ':attribute phải là một ngày sau hoặc bằng :date.',
    'alpha'                => ':attribute có thể chỉ chứa các chữ cái.',
    'alpha_dash'           => ':attribute chỉ có thể chứa các chữ cái, số và dấu gạch ngang.',
    'alpha_num'            => ':attribute chỉ có thể chứa các chữ cái và số.',
    'array'                => ':attribute phải là một mảng.',
    'before'               => ':attribute phải là một ngày trước :date.',
    'before_or_equal'      => ':attribute phải là một ngày trước hoặc bằng :date.',
    'between'              => [
        'numeric' => ':attribute phải ở giữa :min và :max.',
        'file'    => ':attribute phải ở giữa :min và :max kilobytes.',
        'string'  => ':attribute phải ở giữa :min và :max characters.',
        'array'   => ':attribute phải có giữa :min và :max items.',
    ],
    'boolean'              => ':attribute trường phải đúng hoặc sai.',
    'confirmed'            => ':attribute nhận đinh không phù hợp.',
    'date'                 => ':attribute Không phải là ngày hợp lệ.',
    'date_format'          => ':attribute không phù hợp với định dạng :format.',
    'different'            => ':attribute và :other phải khác.',
    'digits'               => ':attribute cần phải :digits chữ số.',
    'digits_between'       => ':attribute phải ở giữa :min và :max chữ số.',
    'dimensions'           => ':attribute có kích thước hình ảnh không hợp lệ.',
    'distinct'             => ':attribute trường có giá trị trùng lặp.',
    'email'                => ':attribute Phải la một địa chỉ email hợp lệ.',
    'exists'               => 'Phần được chọn :attribute không có hiệu lực.',
    'file'                 => ':attribute phải là một tập tin.',
    'filled'               => ':attribute trường phải có một giá trị.',
    'image'                => ':attribute phải là một hình ảnh.',
    'in'                   => 'Phần được chọn :attribute không có hiệu lực.',
    'in_array'             => ':attribute trường không tồn tại trong :other.',
    'integer'              => ':attribute phải là số nguyên.',
    'ip'                   => ':attribute phải là địa chỉ IP hợp lệ.',
    'ipv4'                 => ':attribute phải là địa chỉ IPv4 hợp lệ.',
    'ipv6'                 => ':attribute phải là địa chỉ IPv6 hợp lệ.',
    'json'                 => ':attribute phải là một chuỗi JSON hợp lệ.',
    'max'                  => [
        'numeric' => ':attribute có thể không lớn hơn :max.',
        'file'    => ':attribute có thể không lớn hơn :max kilobytes.',
        'string'  => ':attribute có thể không lớn hơn :max characters.',
        'array'   => ':attribute có thể không có nhiều hơn :max items.',
    ],
    'mimes'                => ':attribute phải là một tập tin của type: :values.',
    'mimetypes'            => ':attribute phải là một tập tin của type: :values.',
    'min'                  => [
        'numeric' => ':attribute ít nhất phải là :min.',
        'file'    => ':attribute ít nhất phải là :min kilobytes.',
        'string'  => ':attribute ít nhất phải là :min characters.',
        'array'   => ':attribute phải có ít nhất :min items.',
    ],
    'not_in'               => 'Thuộc tính đã chọn: không hợp lệ.',
    'numeric'              => ':attribute phải là một số.',
    'present'              => ':attribute lĩnh vực phải có mặt.',
    'regex'                => ':attribute định dạng không hợp lệ.',
    'required'             => ':attribute lĩnh vực được yêu cầu.',
    'required_if'          => ':attribute trường được yêu cầu khi :other là :value.',
    'required_unless'      => ':attribute trường là bắt buộc trừ khi :other trong :values.',
    'required_with'        => ':attribute trường được yêu cầu khi :values là món quà.',
    'required_with_all'    => ':attribute trường được yêu cầu khi :values là món quà.',
    'required_without'     => ':attribute trường được yêu cầu khi :values không phải bây giờ.',
    'required_without_all' => ':attribute trường là bắt buộc khi không có :values có mặt.',
    'same'                 => ':attribute phải phù hợp với :other',
    'size'                 => [
        'numeric' => ':attribute cần phải :size.',
        'file'    => ':attribute cần phải :size kilobytes.',
        'string'  => ':attribute cần phải :size characters.',
        'array'   => ':attribute phải chứa :size items.',
    ],
    'string'               => ':attribute phải là một chuỗi.',
    'timezone'             => ':attribute phải là một vùng hợp lệ.',
    'unique'               => ':attribute đã được thực hiện.',
    'uploaded'             => ':attribute không tải lên được.',
    'url'                  => ':attribute định dạng không hợp lệ.',
];
