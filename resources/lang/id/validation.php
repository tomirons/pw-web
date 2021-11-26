<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute harus di terima.',
    'active_url' => ':attribute bukan URL yang valid.',
    'after' => ':attribute harus tanggal setelah :date.',
    'alpha' => ':attribute harus menggunakan huruf.',
    'alpha_dash' => ':attribute harus mengguankan salah satu dari huruf, angka dan dashes.',
    'alpha_num' => ':attribute hanya boleh menggunakan angka dan huruf.',
    'array' => ':attribute harus berupa array.',
    'before' => ':attribute harus tanggal sebelum :date.',
    'between' => [
        'numeric' => ':attribute harus di antara :min dan :max.',
        'file' => ':attribute harus di antara :min dan :max kilobytes.',
        'string' => ':attribute harus di antara :min dan :max characters.',
        'array' => ':attribute harus di antara :min dan :max items.',
    ],
    'boolean' => ':attribute harus true atau false.',
    'confirmed' => ':attribute konfirmasi tidak cocok.',
    'date' => ':attribute bukan tanggal yang valid.',
    'date_format' => ':attribute tidak cocok dengan format :format.',
    'different' => ':attribute dan :other harus berbeda.',
    'digits' => ':attribute harus :digits digit.',
    'digits_between' => ':attribute harus di antara :min dan :max digit.',
    'email' => ':attribute harus alamat email yang valid.',
    'exists' => ':attribute yang di pilih tidak valid.',
    'filled' => ':attribute bidang ini wajib.',
    'image' => ':attribute harus berupa gambar.',
    'in' => ':attribute tidak valid.',
    'integer' => ':attribute harus berupa integer.',
    'ip' => ':attribute harus alamat IP yang valid.',
    'json' => ':attribute harus berupa string JSON yang valid.',
    'max' => [
        'numeric' => ':attribute tidak boleh lebih dari :max.',
        'file' => ':attribute tidak boleh lebih dari :max kilobyte.',
        'string' => ':attribute tidak boleh lebih dari :max karakter.',
        'array' => ':attribute tidak boleh lebih dari :max item.',
    ],
    'mimes' => ':attribute harus tipe file: :values.',
    'min' => [
        'numeric' => ':attribute harus kurang dari :min.',
        'file' => ':attribute harus kurang dari :min kilobyte.',
        'string' => ':attribute harus kurang dari :min karakter.',
        'array' => ':attribute harus kurang dari :min item.',
    ],
    'not_in' => ':attribute yang di pilih tidak valid.',
    'numeric' => ':attribute harus angka.',
    'regex' => ':attribute format tidak valid.',
    'required' => ':attribute bidang ini wajib.',
    'required_if' => ':attribute di butuhkan ketika :other adalah :value.',
    'required_with' => ':attribute di butuhkan ketika :values tersedia.',
    'required_with_all' => ':attribute di butuhkan ketika :values tersedia.',
    'required_without' => ':attribute di butuhkan ketika :values tidak tersedia.',
    'required_without_all' => ':attribute di butuhkan ketika :values tersedia.',
    'same' => ':attribute dan :other harus cocok.',
    'size' => [
        'numeric' => ':attribute harus :size.',
        'file' => ':attribute harus :size kilobyte.',
        'string' => ':attribute harus :size karakter.',
        'array' => ':attribute harus :size item.',
    ],
    'string' => ':attribute harus string.',
    'timezone' => ':attribute zona yang valid.',
    'unique' => ':attribute sudah di pakai.',
    'url' => ':attribute format tidak valid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'current_pass' => 'Kata sandi Anda tidak cocok dengan yang sekarang.',
    'channel_available' => 'Anda tidak bisa menggunakan chanel ini dengan versi server sekarang.',
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
