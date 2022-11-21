<?php

namespace App\Model;

class BookListResponse
{
    /**
     * @var BookCategoryListItem[]
     */
    private array $items;

    /**
     * @param BookCategoryListItem[]
     */
    public function __construct(array $items)
    {
        $this->items = $items;
    }

    /**
     * @return BookCategoryListItem[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
}
