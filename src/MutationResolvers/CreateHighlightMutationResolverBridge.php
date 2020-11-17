<?php

declare(strict_types=1);

namespace PoPSitesWassup\HighlightMutations\MutationResolvers;

class CreateHighlightMutationResolverBridge extends AbstractCreateUpdateHighlightMutationResolverBridge
{
    public function getMutationResolverClass(): string
    {
        return CreateHighlightMutationResolver::class;
    }

    protected function isUpdate(): bool
    {
        return false;
    }
}
