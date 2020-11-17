<?php

declare(strict_types=1);

namespace PoPSitesWassup\HighlightMutations\MutationResolvers;

class UpdateHighlightMutationResolverBridge extends AbstractCreateUpdateHighlightMutationResolverBridge
{
    public function getMutationResolverClass(): string
    {
        return UpdateHighlightMutationResolver::class;
    }

    protected function isUpdate(): bool
    {
        return true;
    }
}
