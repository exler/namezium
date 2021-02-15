<?php

namespace App\Http\Controllers;

use Exler\Whois\Whois;

class NameController extends Controller
{
    public function show(string $name)
    {
        $name = preg_replace("/[^A-Za-z0-9\-]/", "", urldecode($name));
        $whois = new Whois;

        $domains = [
            $name . ".com" => false,
            $name . ".org" => false,
            $name . ".net" => false,
            $name . ".co" => false,
            $name . ".io" => false
        ];
        foreach ($domains as $domain => $available) {
            if ($whois->isAvailable($domain))
                $domains[$domain] = true;
        }

        return view("name", ["name" => $name, "domains" => $domains]);
    }
}
