<?php

namespace App\Library;

class Library
{
    /**
     * @var array<Book>
     */
    private array $books = [];

    public function addBook(Book $book): self
    {
        $this->books[] = $book;

        return $this;
    }

    /**
     * @param  array<Book>  $books
     */
    public function addBooks(array $books): self
    {
        foreach ($books as $book) {
            $this->addBook($book);
        }

        // 2 autres solutions
        // $this->books = [...$this->books, ...$books];
        // $this->books = array_merge($this->books, $books);

        return $this;
    }

    /**
     * @return array<Book>
     */
    public function books(): array
    {
        return $this->books;
    }

    public function count(): int
    {
        return count($this->books);
    }

    public function totalPages(): int
    {
        $sum = 0;

        foreach ($this->books as $book) {
            $sum += $book->countPages();
        }

        return $sum;

        // Solution "classe"
        // return array_reduce($this->books, function (?int $previous, Book $book) {
        //     return $previous + $book->countPages();
        // });
    }

    public function getBook(string $title): ?Book
    {
        foreach ($this->books as $book) {
            if (strtolower($book->getName()) === strtolower($title)) {
                return $book;
            }
        }

        return null;
    }

    /**
     * @return array<Book>
     */
    public function findBooksByLetter(string $letter): array
    {
        $foundBooks = [];

        foreach ($this->books as $book) {
            if (substr($book->getName(), 0, 1) === $letter) {
                $foundBooks[] = $book;
            }
        }

        return $foundBooks;

        // Version exotique
        // return array_filter($this->books, function (Book $book) use ($letter) {
        //     return substr($book->getName(), 0, 1) === $letter;
        // });
    }

    public function randomBook(): ?Book
    {
        if (empty($this->books)) {
            return null;
        }

        return $this->books[array_rand($this->books)];
    }
}
