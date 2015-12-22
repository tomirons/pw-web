<?php

namespace App\Hash;

use Illuminate\Contracts\Hashing\Hasher as HasherContract;
use Illuminate\Support\Facades\DB;

class BinSaltHasher implements HasherContract
{
    /**
     * Hash the given value.
     *
     * @param  string $value
     * @param array $options
     * @return string
     * @internal param bool $output
     */
    public function make( $value, array $options = [] )
    {
        $password = addslashes( $value );
        dd(DB::raw(DB::select("select fn_varbintohexsubstring ( 1, ?, 1, 0 )", [$password])));
        //return '0x' . md5( $value );
    }

    /**
     * Check the given plain value against a hash.
     *
     * @param  string  $value
     * @param  string  $hashedValue
     * @param  array   $options
     * @return bool
     */
    public function check($value, $hashedValue, array $options = [])
    {
        if (strlen($hashedValue) === 0) {
            return false;
        }

        return $this->make($value) === $hashedValue;
    }

    /**
     * Check if the given hash has been hashed using the given options.
     *
     * @param  string  $hashedValue
     * @param  array   $options
     * @return bool
     */
    public function needsRehash($hashedValue, array $options = [])
    {
        return false;
    }
}
