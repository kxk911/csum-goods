<?php

namespace Kxk911\CsumGoods;

use Illuminate\Support\Collection;
use Kxk911\CsumGoods\Models\Atribute;

class CsumAtributes {

    public static function get(int $atribute_id): Atribute|null
    {
        return Atribute::find($atribute_id);
    }

    public static function add(string $name, bool $is_active = true): Atribute
    {
        $atribute = new Atribute();
        $atribute->name = $name;
        $atribute->is_active = $is_active;
        $atribute->save();
        return $atribute;
    }

    public static function edit(int $atribute_id, string $name, bool $is_active = true): Atribute
    {
        $atribute = Atribute::find($atribute_id);
        $atribute->name = $name;
        $atribute->is_active = $is_active;
        $atribute->save();
        return $atribute;
    }

    public static function delete(int $atribute_id): void
    {
        Atribute::find($atribute_id)->delete();
    }

    public static function list(): Collection
    {
        return Atribute::get();
    }
}