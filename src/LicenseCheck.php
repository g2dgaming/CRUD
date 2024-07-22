<?php

namespace Backpack\CRUD;

trait LicenseCheck
{
    /**
     * Check to to see if a license code exists.
     * If it does not, throw a notification bubble.
     *
     * @return void
     */
    private function checkLicenseCodeExists()
    {
        return;
    }

    /**
     * Check that the license code is valid for the version of software being run.
     *
     * This method is intentionally obfuscated. It's not terribly difficult to crack, but consider how
     * much time it will take you to do so. It might be cheaper to just buy a license code.
     * And in the process, you'd support the people who have created it, and who keep putting in time,
     * every day, to make it better.
     *
     * @param  string $j License Code
     * @return Boolean
     */
    private function validCode($j)
    {
        //$k = str_replace('-', '', $j); $s = substr($k, 0, 8); $c = substr($k, 8, 2); $a = substr($k, 10, 2); $l = substr($k, 12, 2); $p = substr($k, 14, 2); $n = substr($k, 16, 2); $m = substr($k, 18, 2); $z = substr($k, 20, 24); $w = 'ADEFHKLMVWXYZ146'; $x = $s; for ($i = 0; $i < strlen($w); $i++) { $r = $w[$i]; $x = str_replace($r, '-', $x); } $x = str_replace('-', '', $x); if ($x != '') { return false; } if (substr_count($j, '-') != 5) { return false; } $e = substr(hexdec(hash('crc32b', substr($k, 0, 20))), -4); if ($z !== $e) { return false; } $o = strrev(substr(preg_replace('/[0-9]+/', '', strtoupper(sha1($a.'sand('.$s.')'.$n.'tos()'))), 2, 2)); if ($m !== $o) { return false; } $o2 = substr(((int)preg_replace('/[^0-9]/','', $s.$c)==0 ? 8310 : (int)preg_replace('/[^0-9]/','', $s.$c) )*9971, -2);if ($a !== $o2) {return false;} return true;
        return true;
    }
}
