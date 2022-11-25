<?php

namespace App\Repository;

class TranslationRepository extends Repository
{
    public function findForLanguage($languageId, $phrase): ?string
    {
        $stmt = $this->connection->prepare("SELECT translation FROM translation WHERE language_id = :language AND phrase = :phrase");

        $stmt->execute(['language' => $languageId, 'phrase' => $phrase]);

        return $stmt->fetchColumn();
    }
}