<?php

namespace App\Model;

class Translation
{
    private int $id;

    private int $translation_id;

    private string $phrase;

    private string $translation;

    public function getId(): int
    {
        return $this->id;
    }

    public function getTranslationId(): int
    {
        return $this->translation_id;
    }

    public function getPhrase(): string
    {
        return $this->phrase;
    }

    public function getTranslation(): string
    {
        return $this->translation;
    }
}