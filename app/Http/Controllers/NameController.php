<?php

namespace App\Http\Controllers;

use Iodev\Whois\Factory;

class NameController extends Controller
{
    public function show(string $name)
    {
        $name = preg_replace("/[^A-Za-z0-9\-]/", "", urldecode($name));

        $whois = Factory::get()->createWhois();
        $domains = [
            $name . ".com" => false,
            $name . ".org" => false,
            $name . ".net" => false,
            $name . ".co" => false,
            $name . ".io" => false
        ];
        foreach ($domains as $domain => $available) {
            if ($whois->isDomainAvailable($domain))
                $domains[$domain] = true;
        }

        return view("name", ["name" => $name, "domains" => $domains]);
    }
}
