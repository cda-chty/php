<?php

namespace App\Library;

class Book
{
    private string $title;
    private int $pages;
    private int $currentPage = 1;

    public function __construct(
        string $title,
        int $pages = 1
    ) {
        $this->title = $title;
        $this->pages = $pages;
    }

    public function page(): int
    {
        return $this->currentPage;
    }

    public function nextPage(): self
    {
        if (++$this->currentPage > $this->pages) {
            $this->currentPage = $this->pages;
        }

        return $this;
    }

    public function close(): void
    {
        $this->currentPage = 1;
    }

    public function getName(): string
    {
        return $this->title;
    }

    public function countPages(): int
    {
        return $this->pages;
    }
}
