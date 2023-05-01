<?php

namespace App\Services;

class SearchService
{
    public function SearchPerson($query, $search)
    {
        if ($search) {
            $query->where(
                fn ($query) => $query
                    ->where('id', $search)
                    ->orWhere('name', 'LIKE', '%' . $search . '%')
            );
        } else {
            $query->orderBy('name');
        }

        $query->paginate(25);

        //
        return $query;
    }
}
