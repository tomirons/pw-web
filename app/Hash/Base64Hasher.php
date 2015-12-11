<?php

namespace App\Hash;

use Illuminate\Contracts\Hashing\Hasher as HasherContract;

class Base64Hasher implements HasherContract
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
        return base64_encode( md5( $value, true ) );
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
